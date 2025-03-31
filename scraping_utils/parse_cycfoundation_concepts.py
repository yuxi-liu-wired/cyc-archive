import json
import glob
import os
from bs4 import BeautifulSoup
from tqdm import tqdm

def parse_cyc_concept(filename):
    """
    Parse a Cyc Foundation concept HTML file into a structured JSON format.
    
    Args:
        filename: Path to the HTML file
        
    Returns:
        dict: Structured data extracted from the HTML
    """
    try:
        # Read the HTML file
        with open(filename, 'r', encoding='utf-8') as file:
            html_content = file.read()
        
        # Parse the HTML with BeautifulSoup
        soup = BeautifulSoup(html_content, 'html.parser')
        
        # Extract folder name to use as fallback title
        # Parse path to get the concept folder name
        path_parts = filename.replace('/', os.sep).replace('\\', os.sep).split(os.sep)
        # Find the index of "concepts" in the path
        try:
            concepts_index = path_parts.index("concepts")
            # The folder name is the part right after "concepts"
            if concepts_index + 1 < len(path_parts):
                folder_name = path_parts[concepts_index + 1]
            else:
                folder_name = "Unknown"
        except ValueError:
            folder_name = "Unknown"
        
        # URL-decode the folder name (convert %20 to space, etc.)
        import urllib.parse
        folder_name_decoded = urllib.parse.unquote(folder_name)
        
        # Initialize the result dictionary
        result = {}
        
        # Store the source filename and folder name
        result['source_file'] = filename
        result['folder_name'] = folder_name
        
        # Extract title with folder name as fallback
        if soup.title and soup.title.string:
            title = soup.title.text.strip()
        else:
            title = folder_name_decoded
            
        result['title'] = title
        
        # Extract semantic URI
        canonical_div = soup.find('div', class_='canonical')
        if canonical_div and canonical_div.find('a', class_='uri'):
            result['semantic_uri'] = canonical_div.find('a', class_='uri').text.strip()
        
        # Extract RDF link from rel="alternate"
        rdf_link = soup.find('link', rel='alternate', type='application/rdf+xml')
        if rdf_link and 'href' in rdf_link.attrs:
            result['rdf_link'] = rdf_link['href']
        
        # Extract unique tag
        unique_tag_span = soup.find('span', style='color:#1E3D67')
        if unique_tag_span:
            result['unique_tag'] = unique_tag_span.text.strip()
        
        # Extract aliases
        aliases_div = soup.find('div', class_='synonyms')
        if aliases_div:
            aliases_text = aliases_div.text.strip()
            if 'Aliases:' in aliases_text:
                aliases_str = aliases_text.split('Aliases:')[1].strip()[1:-1]  # Remove the square brackets
                result['aliases'] = [alias.strip() for alias in aliases_str.split(',')]
        
        # Extract description
        description_div = soup.find('div', class_='comment')
        if description_div:
            # Extract text, preserving only the text content and removing HTML tags
            description_text = description_div.get_text().strip()
            result['description'] = description_text
        
        # Extract Wikipedia links
        wiki_box = soup.find('div', class_='wiki_box')
        if wiki_box:
            result['wikipedia_links'] = []
            wiki_links = wiki_box.find_all('a')
            for link in wiki_links:
                if 'href' in link.attrs and 'wikipedia.org' in link['href']:
                    wiki_item = {
                        'title': link.text.strip(),
                        'url': link['href'].split("'")[0] if "'" in link['href'] else link['href']
                    }
                    result['wikipedia_links'].append(wiki_item)
        
        # Extract related concepts
        related_divs = soup.find_all('div', class_='related')
        if related_divs:
            result['related_concepts'] = {}
            
            for related_div in related_divs:
                ul_elements = related_div.find_all('ul')
                
                for ul in ul_elements:
                    li_elements = ul.find_all('li', recursive=False)
                    if not li_elements:
                        continue
                        
                    list_header = li_elements[0].text.strip()
                    
                    # Determine the category based on the header text
                    category = None
                    if 'More General:' in list_header:
                        category = 'more_general'
                    elif 'More Specific:' in list_header:
                        category = 'more_specific'
                    elif 'Example of:' in list_header or 'is an Example of:' in list_header:
                        category = 'example_of'
                    
                    if category:
                        # Initialize the category if it doesn't exist
                        if category not in result['related_concepts']:
                            result['related_concepts'][category] = []
                        
                        # Get all links in this category
                        links = ul.find_all('a')
                        for link in links:
                            if link and 'href' in link.attrs:
                                concept_item = {
                                    'name': link.text.strip(),
                                    'url': link['href']
                                }
                                result['related_concepts'][category].append(concept_item)
        
        # Extract meta description
        meta_desc = soup.find('meta', attrs={'name': 'description'})
        if meta_desc and 'content' in meta_desc.attrs:
            result['meta_description'] = meta_desc['content']
        
        return result
    except Exception as e:
        print(f"Error processing {filename}: {str(e)}")
        return None

def main():
    # Define patterns to search for HTML files
    patterns = [
        "cycfoundation.org/concepts/*/index.html",
        "www.cycfoundation.org/concepts/*/index.html"
    ]
    
    all_data = []
    processed_files = 0
    
    # Collect all files from all patterns
    all_files = []
    for pattern in patterns:
        files = glob.glob(pattern)
        print(f"Found {len(files)} files matching pattern '{pattern}'")
        all_files.extend(files)
    
    # Process all files with tqdm progress bar
    for filename in tqdm(all_files, desc="Processing files"):
        parsed_data = parse_cyc_concept(filename)
        if parsed_data:
            all_data.append(parsed_data)
            processed_files += 1
    
    # All entries should have titles now
    valid_data = []
    
    for item in all_data:
        if item is None:
            continue
            
        if not item.get('title'):
            if item.get('folder_name') and item['folder_name'] != "Unknown":
                item['title'] = item['folder_name']
                print(f"Using folder name '{item['folder_name']}' as title for {item.get('source_file')}")
            else:
                # Extract folder name directly from the path as a last resort
                source_file = item.get('source_file', '')
                try:
                    path_parts = source_file.replace('/', os.sep).replace('\\', os.sep).split(os.sep)
                    concepts_index = path_parts.index("concepts")
                    if concepts_index + 1 < len(path_parts):
                        folder_name = path_parts[concepts_index + 1]
                        item['folder_name'] = folder_name
                        item['title'] = folder_name
                        print(f"Recovered folder name '{folder_name}' for {source_file}")
                    else:
                        item['title'] = "Unknown"
                        print(f"Warning: Could not extract folder name from {source_file}")
                except (ValueError, IndexError):
                    item['title'] = "Unknown"
                    print(f"Warning: Could not extract folder name from {source_file}")
                
        valid_data.append(item)
    
    print(f"Processing {len(valid_data)} entries")
    
    # Sort the data by title
    sorted_data = sorted(valid_data, key=lambda x: x.get('title', '').lower())
    
    # Save to a JSONL file
    output_filename = "cyc_concepts.jsonl"
    with open(output_filename, 'w', encoding='utf-8') as f:
        for item in sorted_data:
            f.write(json.dumps(item) + '\n')
    
    print(f"\nProcessed {processed_files} files.")
    print(f"Sorted data saved to {output_filename}")

if __name__ == "__main__":
    main()
#!/usr/bin/env python3

import os
import time

def parse_and_run_commands(filename):
    current_year = None
    
    with open(filename, "r", encoding="utf-8") as f:
        for line in f:
            line = line.strip()
            if not line:
                continue  # skip empty or whitespace-only lines
            
            if line.startswith("#"):
                # Extract the year (everything after '#')
                current_year = line.lstrip("#").strip()
                continue
            
            # If the line ends with '*', remove all trailing '*'
            if line.endswith('*'):
                url_no_stars = line.rstrip('*')
                # Run command
                os.system(f'.\\wbm-dl.exe {url_no_stars} -t {current_year}')
            else:
                # Run command with -e
                os.system(f'.\\wbm-dl.exe -e {line} -t {current_year}')
            # wait for 5 seconds
            time.sleep(5)
            
if __name__ == "__main__":
    parse_and_run_commands("url_year.txt")

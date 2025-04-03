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
            
            url = line
            if url.endswith('*'):
                url = url.rstrip('*')
                os.system(f'.\\wbm-dl.exe {url} -t {current_year}')
            os.system(f'.\\wbm-dl.exe -e {url} -t {current_year}')
            
            # wait for 5 seconds to be polite
            time.sleep(5)
            
if __name__ == "__main__":
    parse_and_run_commands("url_year.txt")

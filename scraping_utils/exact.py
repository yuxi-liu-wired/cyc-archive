#!/usr/bin/env python3

import os
import re

def parse_and_run_exact(filename):
    # This pattern captures the 14-digit timestamp and everything after the slash
    pattern = re.compile(r'^https?://web\.archive\.org/web/(\d{14})/(.*)$')
    
    with open(filename, 'r', encoding='utf-8') as f:
        for line in f:
            line = line.strip()
            if not line:
                continue  # skip empty lines
            
            match = pattern.match(line)
            if match:
                timestamp = match.group(1)
                original_url = match.group(2)
                
                # Build the command and run it
                command = f'.\\wbm-dl {original_url} -f {timestamp} -t {timestamp} -e'
                os.system(command)

if __name__ == "__main__":
    parse_and_run_exact("exact.txt")

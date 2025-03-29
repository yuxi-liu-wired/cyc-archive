#!/bin/sh

while IFS= read -r line
do
  # Each line looks like:
  #   https://web.archive.org/web/20031206140615/http://tunes.org/~nef/logs/opencyc/
  
  # 1. Extract the timestamp
  timestamp="$(echo "$line" | sed -E 's#https?://web\.archive\.org/web/([0-9]+)/.*#\1#')"
  
  # 2. Extract the original URL
  original_url="$(echo "$line" | sed -E 's#https?://web\.archive\.org/web/[0-9]+/(.*)#\1#')"
  
  # 3. Extract the domain (like 'tunes.org' from 'http://tunes.org/~nef/...')
  domain="$(echo "$original_url" | sed -E 's#^https?://([^/]+).*#\1#')"
  
  # 4. Use that domain folder as the download target
  wayback_machine_downloader "$original_url" \
    --exact-url \
    --from "$timestamp" \
    --to   "$timestamp" \
    --directory "./exact/$domain"

done < exact.txt


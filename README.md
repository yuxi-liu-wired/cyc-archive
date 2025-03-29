# Cyc Archive

## Contents

## The website

We archived several parts of the websites. The tools used are [`hartator/wayback-machine-downloader`](https://github.com/hartator/wayback-machine-downloader) and [`erlange/wbm-dl`](https://github.com/erlange/wbm-dl/tree/master), though I'm pretty sure just `wbm-dl` would have been enough, and `wayback-machine-downloader` isn't actually necessary, but I can't be bothered to rewrite the part of the script that calls `wayback-machine-downloader`.

[x] For some urls, a very specific version is needed. Those are in `exact.txt` and downloaded by `exact.sh`.

[x] For some urls, the latest version is needed. Those are

```
http://cyc.com:80/cycdoc/img/cb/*
http://tunes.org/~nef/logs/opencyc/[0-9][0-9]\.[0-9][0-9]\.[0-9][0-9]
https://cyc.com/publications/
```

and downloaded by

```sh
.\wbm-dl.exe http://cyc.com:80/cycdoc/img/cb/
.\wbm-dl.exe -e http://tunes.org/~nef/logs/opencyc/
.\wbm-dl.exe http://tunes.org/~nef/logs/opencyc/ -O "^.*[0-9][0-9]\.[0-9][0-9]\.[0-9][0-9]$"
.\wbm-dl.exe -e https://cyc.com/publications/
```

For some others, we need the latest version in a specific year. Those are placed into the `url_year.txt`, and to download them using `wbm-dl.exe`, run `python url_year.py`.

Also, note that because Internet Archive is being quite moody and interrupt-y, you should watch the progress and rerun the downloads if necessary. For each successful scrap, move the corresponding line from `url_year.txt` to `url_year_done.txt`.

The `http://cyc.com/cyc/` domain is particularly difficult, so we do it as follows.

## Other contents


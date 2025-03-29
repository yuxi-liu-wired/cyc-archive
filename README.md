# Cyc Archive

## How to scrape these

The tools used:

* [`erlange/wbm-dl`](https://github.com/erlange/wbm-dl/tree/master).
* `python`

For some urls, a very specific version is needed. Those are in `exact.txt` and downloaded by `python exact.py`.

There is a rather special case: some IRC records from 2002 and 2003. They are downloaded by the following command:

```sh
.\wbm-dl.exe -e http://tunes.org/~nef/logs/opencyc/
.\wbm-dl.exe http://tunes.org/~nef/logs/opencyc/ -O "^.*[0-9][0-9]\.[0-9][0-9]\.[0-9][0-9]$"
```

For the rest, we need the latest version before a specific year (later years throw something like a 404 or other bad results). Those are placed into the `url_year.txt`, and to download them using `wbm-dl.exe`, run `python url_year.py`.

Because the Internet Archive has been very fiddly, several other tools I tried have failed, and even this one doesn't work all the time. Sometimes the download would fail, so you should watch the terminal carefully for "Unable to connect to the remote server" error message. Interrupt if it starts throwing errors. Move the successful scraps from `url_year.txt` to `url_year_done.txt` so that you don't restart from the beginning.

## Contents

### Contents of the folder

* `websites`: The scraped websites.
* `other_files`:
  * `Douglas Lenat.md`: Notes I've taken during the research of this essay.
  * `Cyc101_tutorial_slides.zip`: Tutorial slides downloaded from [Cyc 101 Tutorial at OpenCyc.org](https://web.archive.org/web/20120409060356/http://opencyc.org/doc/tut/?expand_all=1)
* `scraping_utils`: Scripts used for scraping, described above.

### Other files

Other than what's in the archive, there's also

* [`asanchez75/opencyc`](https://github.com/asanchez75/opencyc): The published versions of OpenCyc and its knowledge graphs. The last update was in 2012.
* [`white-flame/am`](https://github.com/white-flame/am): Automated Mathematician from SAIL archives circa 1977.
* [`white-flame/eurisko`](https://github.com/white-flame/eurisko): Eurisko from SAIL archives circa 1981.
* [`www.saildart.org/DBL`](https://www.saildart.org/DBL): Douglas Lenat's files at the SAILDART archive, an archive of the first [Stanford Artificial Intelligence Laboratory](https://en.wikipedia.org/wiki/Stanford_Artificial_Intelligence_Laboratory) derived from its final backup tapes.
* [Large Knowledge Collider / Code / [r2063] /trunk](https://sourceforge.net/p/larkc/code/HEAD/tree/trunk/): Source code from the Large Knowledge Collider. It's stuck in Alpha, and last updated on `2012-06-16`.
* The [IEEE 1600.1 Standard Upper Ontology Working Group](https://web.archive.org/web/20080523023923/http://suo.ieee.org/) website, which was last updated on `2003-12-28`. I haven't bothered to archive it since even my patience has limits. But I think running `.\wbm-dl.exe http://suo.ieee.org/ -t 2008 -X "^.*/email/.*$"` should do the trick.

### Lost files

There was apparently a `TPTP Challenge Problem Set`, described in [The Cyc TPTP Challenge Problem Set | Cycorp: Home of Smarter Solutions](https://web.archive.org/web/20160811204509/http://www.cyc.com/resource/tptp-challenge-set/), but I cannot find any download page for it. It used to be hosted on [SourceForge](https://web.archive.org/web/20120216055329/http://sourceforge.net/projects/opencyc/files/TPTP%20Challenge%20Problem%20Set/) during 2007--2012, but it has since then completely disappeared from the Internet.

| filename | size | last updated |
|----|----|----|
| tptp_scaling_challenge_problem_set.tgz | 109.8 MB | 2007-09-07 03:29 |
| tptp_elaboration_challenge_problem_set.tgz | 99.1 MB | 2007-09-07 03:10 |

I am fairly certain that `tptp_scaling_challenge_problem_set.tgz` still exists, since it is described as

> The Scaling Challenge Problem Set was first released as part of TPTP v3.4.0 in the CSR (Common Sense Reasoning) domain. The problem numbers are CSR025+S through CSR074+S, where S is the segment number.

However, `tptp_elaboration_challenge_problem_set.tgz` seems to have completely vanished. It is described as

> The Elaboration Challenge Problem Set consists of 300 problems with about 3,280,000 axioms each. The Elaboration Challenge Problem Set is designed to be more challenging than the Scaling Challenge Problem Set and to be even more representative of the problems Cyc’s inference engine typically faces. Developers are advised to tackle the Scaling Challenge Problem Set before the Elaboration Challenge Problem Set. The Elaboration Challenge Problem Set tests everything in the Scaling Challenge Problem Set, and also tests a system’s elaboration tolerance.
>
> > A formalism is elaboration tolerant to the extent that it is convenient to modify a set of facts expressed in the formalism to take into account new phenomena or changed circumstances. -John McCarthy[1]
>
> The Elaboration Challenge Problem Set has not yet been released as part of the TPTP, but is available for download.

Sadly, they never released it as part of the TPTP.

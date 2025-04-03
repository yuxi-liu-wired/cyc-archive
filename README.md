# Cyc Archive

This is an archive of most of the online material that the Cycorp has released over the years that has been deleted, but preserved within the Internet Archive. Due to the lack of long-term stability of IA, I have taken the liberty to scrape those from IA and kept them here for safe keeping.

I built this archive while writing my essay on the history of Lenat and the Cyc project, which is available on [my website](https://yuxi-liu-wired.github.io/essays/posts/cyc/).

## How to scrape these

The tools used:

* [`erlange/wbm-dl`](https://github.com/erlange/wbm-dl/tree/master).
* `python`

For some urls, a very specific version is needed. Those are in `exact.txt` and downloaded by `python exact.py`.

For the rest, we need the latest version before a specific year (later years throw something like a 404 or other bad results). Those are placed into the `url_year.txt`, and to download them using `wbm-dl.exe`, run `python url_year.py`.

Because the Internet Archive has been very fiddly, several other tools I tried have failed, and even this one doesn't work all the time. Sometimes the download would fail, so you should watch the terminal carefully for "Unable to connect to the remote server" error message. Interrupt if it starts throwing errors. Move the successful scraps from `url_year.txt` to `url_year_done.txt` so that you don't restart from the beginning.

### Special cases

Some IRC records from 2002 and 2003 are downloaded by the following command:

```sh
.\wbm-dl.exe -e http://tunes.org/~nef/logs/opencyc/
.\wbm-dl.exe http://tunes.org/~nef/logs/opencyc/ -O "^.*[0-9][0-9]\.[0-9][0-9]\.[0-9][0-9]$"
```

Only some of the tweets of `cyc_ai` are available, and only through its frontpage, which updates over time, so they are scraped by this command:

```sh
.\wbm-dl.exe -a -e http://twitter.com:80/cyc_ai
```

The SAILDART archive is still available, so it is scraped by 

```sh
wget -r -l 3 -c --no-parent --convert-links --adjust-extension --page-requisites \
  -e robots=off \
  --accept-regex ".*DBL.*" \
  https://www.saildart.org/DBL
```

Although be warned that the filename `[*,DBL]` contain an asterisk, which cannot be used on Windows, so I replaced it with `[_,DBL]`. This required changing exactly one `href`, in `DBL.html`, from `[*,DBL]` to `[_,DBL]`.

## Contents

### Contents of the folder

* `websites`: The scraped websites.
  * `www.cyc.com\doc\handbook\oe`: The Ontology Engineer's Handbook, version 0.7, last updated on `2002-06-05`.
  * `www.cyc.com\cycdoc`: Documentation.
    * `walkthroughs\oeintro_cats_frames_long.html`: A long introduction tutorial.
    * `vocab`: A list of vocabularies (that is, entities in the top-level and mid-level ontology and microtheories).
    * `ref`: The reference documentation for the CycL language as it was in 2002.
  * `cyc.com\cyc\applications\cycsecure`: The CycSecure application, which reasons about ways in which a computer system can be attacked and defended.
  * `opencyc.org` and `www.opencyc.org`: From the `OpenCyc.org` website, which went offline around 2016. Particularly interesting is the tutorial at `www.opencyc.org\doc\doc`.
  * `www.larkc.eu` and `wiki.larkc.eu`: The "Large Knowledge Collider" website, last updated in 2011. It got converted to a [domain parking website](https://en.wikipedia.org/wiki/Domain_parking) in 2015.
  * `207.207.9.186` and `game.cyc.com`: Two websites for the game of "FACTory". It was first launched in 2005 and was hosted on `207.207.9.186` until 2007. It was then hosted on `game.cyc.com` until 2012.
  * `twitter.com`: The tweets of `@cyc_ai`. It began in 2008 and ended in 2011 after 15764 tweets, mostly in the format of "I just leaned `<statement>`, true or false?". It shut down some time around 2017.
  * `www.cycfoundation.org\blog`: Blog posts by the Cyc Foundation. It started in 2007 and ended in 2011.
  * `blog.cyc.com`: 11 more blog posts by the Cyc Foundation. It started in 2008, and ended in 2011.
  * `tunes.org`: Some IRC chat records about Cyc back in 2002--2003.
  * `suo.ieee.org`: The [IEEE 1600.1 Standard Upper Ontology Working Group](https://web.archive.org/web/20080523023923/http://suo.ieee.org/) website, which was last updated on `2003-12-28`. Cyc was a participant of it.
* `other_files`:
  * `research_notes`: Notes I've taken during the research of this essay.
  * `Cyc101_tutorial_slides.tar.xz`: Tutorial slides downloaded from [Cyc 101 Tutorial at OpenCyc.org](https://web.archive.org/web/20120409060356/http://opencyc.org/doc/tut/?expand_all=1).
  * `minimal-cyc-kb.txt` and `opencyc-ontology.txt`: Early snapshots of the Cyc ontology and knowledge base from before 2002. Downloaded from [1](https://web.archive.org/web/20070309111053/http://www.cyc.com:80/SUO/minimal-cyc-kb.txt) and [2](https://web.archive.org/web/20130115202515/http://www.cyc.com:80/SUO/opencyc-ontology.txt).
  * `cycfoundation-concepts.tar.xz`: 27580 concepts in the Semantic Web version of OpenCyc. They were originally hosted on `sw.opencyc.org`, but the archived version on the Internet Archive is completely broken. For some reason, the version hosted on `cycfoundation.org` had been correctly archived, which is where I scraped them from. The urls are of the form `http://www.cycfoundation.org:80/concepts/<name>` and scraped by `.\wbm-dl.exe http://cycfoundation.org:80/concepts/ -t 2011`. Note that 78 of the concepts, such as `BloodTypeByABOAndRhFactor` have had duplicate entries. This is probably because the Internet Archive archived two versions of some concepts. The later version would contain more information, such as "Examples of `<concept>` Include ...".
  * `Cycorp claims.xlsx`: A spreadsheet containing every numerical claim concerning the growth of Cyc over the period of 1984--2022.
  * `cycfoundation-concepts.jsonl.xz`: The concepts from `cycfoundation-concepts.tar.xz`, parsed into `jsonl` using `parse_cycfoundation_concepts.py`.
  * `www.saildart.org.tar.xz`: The complete archive of [`www.saildart.org/DBL`](https://www.saildart.org/DBL). It is Douglas Lenat's files at the SAILDART archive, an archive of the first [Stanford Artificial Intelligence Laboratory](https://en.wikipedia.org/wiki/Stanford_Artificial_Intelligence_Laboratory) derived from its final backup tapes.
* `scraping_utils`: Scripts used for scraping, described above.

The general impression after reading through the entire system is that there was a single period of "massive extinction event" during 2013--2016, during which Cycorp purged most of the open information about Cyc from the Internet. No more OpenCyc, tutorial, reference, Ontological Engineer's handbook... everything was purged, except marketing material. This closely corresponds to the commercialization wave in 2016, the year in which Lenat declared Cyc "done" and started commercializing it.

### Other files

Other than what's in the archive, there's also

* [`asanchez75/opencyc`](https://github.com/asanchez75/opencyc): The published versions of OpenCyc and its knowledge graphs. The last update was in 2012.
* [`white-flame/am`](https://github.com/white-flame/am): Automated Mathematician from SAIL archives circa 1977.
* [`white-flame/eurisko`](https://github.com/white-flame/eurisko): Eurisko from SAIL archives circa 1981.
* [Large Knowledge Collider / Code / [r2063] /trunk](https://sourceforge.net/p/larkc/code/HEAD/tree/trunk/): Source code from the Large Knowledge Collider. It's stuck in Alpha, and last updated on `2012-06-16`. I made a [mirror on GitHub](https://github.com/yuxi-liu-wired/Large-Knowledge-Collider-archive).

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

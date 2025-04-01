<?xml version="1.0" encoding="UTF-8"?>
<!-- generator="WP SIOC Plugin - v. 1.25 - http://rdfs.org/sioc/wordpress/" -->
<rdf:RDF
	xmlns="http://xmlns.com/foaf/0.1/"
	xmlns:foaf="http://xmlns.com/foaf/0.1/"
	xmlns:rss="http://purl.org/rss/1.0/"
	xmlns:admin="http://webns.net/mvcb/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:dcterms="http://purl.org/dc/terms/"
	xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
	xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:sioc="http://rdfs.org/sioc/ns#">

<!-- sioc_type = post -->

<foaf:Document rdf:about="">
	<dc:title>SIOC Post profile for "LarKC weblog"</dc:title>
	<dc:description>A SIOC profile describes the structure and contents of a weblog in a machine readable form. For more information please refer to http://sioc-project.org/.</dc:description>
	<foaf:primaryTopic rdf:resource="http://blog.larkc.eu/?p=2141"/>
	<admin:generatorAgent rdf:resource="http://rdfs.org/sioc/wp-sioc.php?version=1.25"/>
</foaf:Document>

<sioc:Post rdf:about="http://blog.larkc.eu/?p=2141">
	<sioc:link rdf:resource="http://blog.larkc.eu/?p=2141"/>
	<sioc:has_container rdf:resource="http://blog.larkc.eu/index.php?sioc_type=site#weblog"/>
	<dc:title>Explosion under inference (or not)</dc:title>
	<sioc:has_creator>
		<sioc:User rdf:about="http://blog.larkc.eu/?author=111" rdfs:label="FrankVanHarmelen">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=user&amp;sioc_id=111"/>
		</sioc:User>
	</sioc:has_creator>
	<foaf:maker>
		<foaf:Person rdf:about="http://blog.larkc.eu/?author=111#foaf" rdfs:label="FrankVanHarmelen">
			<foaf:mbox_sha1sum>0830075242a8e9a6426ce6d059a6879955d4fcda</foaf:mbox_sha1sum>
			<foaf:homepage rdf:resource="http://www.cs.vu.nl/~frankh"/>
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=user&amp;sioc_id=111"/>
		</foaf:Person>
	</foaf:maker>
	<dcterms:created>2011-05-15T11:52:56Z</dcterms:created>
	<sioc:content>Should the semantic web be just about querying RDF? Or is it usefual (or even: feasible) to use the semantics of RDF, RDF Schema and OWL to derive additional information from the published RDF graphs? Both the feasibility and the usefulness of this depends on the amount of additional triples that are derived by inference: when almost zero, there is little point to inference, when explosively large, it might become infeasible.

LarKC researchers at OntoText produced an informative table showing the amount of additional triples that can be inferred from some of the most popular datasets on the Web. It's interesting to see how the datasets differ in their semantic richness, with their ratio of explicit triples vs. inferred triples ranging from close to zero (CIA Factbook) to a 16-fold increase (for DBPedia). Please let us know if you have similar statistics for other datasets.

All of the data below taken from FactForge which by itself now contains 1.5billion triples, nearly four times larger than in the beginning of the LarKC project in 2008. All of the figures below obtained with BigOWLIM 3.4, under the OWL-Horst semantics. Size is reported in millions of triples.


Dataset
Explicit Indexed Triples
Inferred Indexed Triples
Total of Indexed Triples
Entities (nodes in the graph)
Inferred closure ratio


Schemata (Proton,
SKOS, FOAF, RSS,
DC) and ontologies
(DBpedia, Geonames)
15
9
23
8
0.6


DBpedia (SKOS
categories)
2,915
47,837
50,751
1,135
16.4


NY Times
574
328
902
185
0.6


UMBEL
4,638
6,936
11,575
1,190
1.5


Lingvoj
20
182
201
18
9.2


CIA Factbook
76
4
80
24
0.1


WordNet
1,943
6,067
8,010
842
3.1


Geonames
142,011
194,191
336,202
42,738
1.4


DBpedia core
825,162
166,740
991,902
125,803
0.2


Freebase
494,344
52,411
546,754
123,511
0.1


MusicBrainz
45,492
36,572
82,064
15,585
0.8


Related articles

BigOWLIM - OWL Semantic Repository (ontotext.com)

</sioc:content>
	<content:encoded><![CDATA[<p>Should the semantic web be just about querying RDF? Or is it usefual (or even: feasible) to use the semantics of RDF, RDF Schema and OWL to derive additional information from the published RDF graphs? Both the feasibility and the usefulness of this depends on the amount of additional triples that are derived by inference: when almost zero, there is little point to inference, when explosively large, it might become infeasible.</p>
<p>LarKC researchers at <a href="http://www.ontotext.com/" target="_blank">OntoText </a>produced an informative table showing the amount of additional triples that can be inferred from some of the most popular datasets on the Web. It&#8217;s interesting to see how the datasets differ in their semantic richness, with their ratio of explicit triples vs. inferred triples ranging from close to zero (<a href="http://en.wikipedia.org/wiki/The_World_Factbook" class="zem_slink" title="The World Factbook" rel="wikipedia">CIA Factbook</a>) to a 16-fold increase (for <a href="http://dbpedia.org" class="zem_slink" title="DBpedia" rel="homepage">DBPedia</a>). Please let us know if you have similar statistics for other datasets.</p>
<p>All of the data below taken from <a href="http://factforge.net/" target="_blank">FactForge </a>which by itself now contains 1.5billion triples, nearly four times larger than in the beginning of the LarKC project in 2008. All of the figures below obtained with BigOWLIM 3.4, under the OWL-Horst semantics. Size is reported in millions of triples.</p>
<table bgcolor="lightgrey" border="1">
<tr bgcolor="lightblue">
<th>Dataset</th>
<th>Explicit Indexed Triples</th>
<th>Inferred Indexed Triples</th>
<th>Total of Indexed Triples</th>
<th>Entities (nodes in the graph)</th>
<th>Inferred closure ratio</th>
</tr>
<tr>
<td>Schemata (Proton,<br />
SKOS, FOAF, RSS,<br />
DC) and ontologies<br />
(DBpedia, Geonames)</td>
<td>15</td>
<td>9</td>
<td>23</td>
<td>8</td>
<td>0.6</td>
</tr>
<tr>
<td>DBpedia (SKOS<br />
categories)</td>
<td>2,915</td>
<td>47,837</td>
<td>50,751</td>
<td>1,135</td>
<td>16.4</td>
</tr>
<tr>
<td>NY Times</td>
<td>574</td>
<td>328</td>
<td>902</td>
<td>185</td>
<td>0.6</td>
</tr>
<tr>
<td>UMBEL</td>
<td>4,638</td>
<td>6,936</td>
<td>11,575</td>
<td>1,190</td>
<td>1.5</td>
</tr>
<tr>
<td>Lingvoj</td>
<td>20</td>
<td>182</td>
<td>201</td>
<td>18</td>
<td>9.2</td>
</tr>
<tr>
<td>CIA Factbook</td>
<td>76</td>
<td>4</td>
<td>80</td>
<td>24</td>
<td>0.1</td>
</tr>
<tr>
<td>WordNet</td>
<td>1,943</td>
<td>6,067</td>
<td>8,010</td>
<td>842</td>
<td>3.1</td>
</tr>
<tr>
<td>Geonames</td>
<td>142,011</td>
<td>194,191</td>
<td>336,202</td>
<td>42,738</td>
<td>1.4</td>
</tr>
<tr>
<td>DBpedia core</td>
<td>825,162</td>
<td>166,740</td>
<td>991,902</td>
<td>125,803</td>
<td>0.2</td>
</tr>
<tr>
<td>Freebase</td>
<td>494,344</td>
<td>52,411</td>
<td>546,754</td>
<td>123,511</td>
<td>0.1</td>
</tr>
<tr>
<td>MusicBrainz</td>
<td>45,492</td>
<td>36,572</td>
<td>82,064</td>
<td>15,585</td>
<td>0.8</td>
</tr>
</table>
<h6 class="zemanta-related-title" style="font-size: 1em">Related articles</h6>
<ul class="zemanta-article-ul">
<li class="zemanta-article-ul-li"><a href="http://www.ontotext.com/owlim/big/">BigOWLIM - OWL Semantic Repository</a> (ontotext.com)</li>
</ul>
<p style="margin-top: 10px; height: 15px" class="zemanta-pixie"><a href="http://www.zemanta.com/" class="zemanta-pixie-a" title="Enhanced by Zemanta"><img src="http://img.zemanta.com/zemified_e.png?x-id=7b9c6928-8d5b-447b-803d-54101a31dfa8" style="border: medium none; float: right" class="zemanta-pixie-img" alt="Enhanced by Zemanta" /></a></p>
]]></content:encoded>
	<sioc:topic rdfs:label="Uncategorized" rdf:resource="http://blog.larkc.eu/?cat=1"/>
	<sioc:has_reply>
		<sioc:Post rdf:about="http://blog.larkc.eu/?p=2141#comment-225621">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=comment&amp;sioc_id=225621"/>
		</sioc:Post>
	</sioc:has_reply>
	<sioc:has_reply>
		<sioc:Post rdf:about="http://blog.larkc.eu/?p=2141#comment-225651">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=comment&amp;sioc_id=225651"/>
		</sioc:Post>
	</sioc:has_reply>
	<sioc:links_to rdf:resource="http://www.ontotext.com/" rdfs:label="OntoText"/>
	<sioc:links_to rdf:resource="http://en.wikipedia.org/wiki/The_World_Factbook" rdfs:label="CIA Factbook"/>
	<sioc:links_to rdf:resource="http://dbpedia.org" rdfs:label="DBPedia"/>
	<sioc:links_to rdf:resource="http://factforge.net/" rdfs:label="FactForge"/>
	<sioc:links_to rdf:resource="http://www.ontotext.com/owlim/big/" rdfs:label="BigOWLIM - OWL Semantic Repository"/>
	<sioc:links_to rdf:resource="http://www.zemanta.com/" rdfs:label="&#60;img src=&#34;http://img.zemanta.com/zemified_e.png?x-id=7b9c6928-8d5b-447b-803d-54101a31dfa8&#34; style=&#34;border: medium none; float: right&#34; class=&#34;zemanta-pixie-img&#34; alt=&#34;Enhanced by Zemanta&#34; /&#62;"/>
</sioc:Post>

</rdf:RDF>

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
	<foaf:primaryTopic rdf:resource="http://blog.larkc.eu/?p=2101"/>
	<admin:generatorAgent rdf:resource="http://rdfs.org/sioc/wp-sioc.php?version=1.25"/>
</foaf:Document>

<sioc:Post rdf:about="http://blog.larkc.eu/?p=2101">
	<sioc:link rdf:resource="http://blog.larkc.eu/?p=2101"/>
	<sioc:has_container rdf:resource="http://blog.larkc.eu/index.php?sioc_type=site#weblog"/>
	<dc:title>Probase: a peek in Microsoft&#8217;s Web-of-Data kitchen</dc:title>
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
	<dcterms:created>2011-03-22T23:46:55Z</dcterms:created>
	<sioc:content>An interesting peek in Microsoft's kitchen (the Beijing labs, by the looks of it): Probase and ReadWriteWeb writeup on it. It's a very large web-fed knowledge-base, including concept hierarchies (2.7 million concepts, 4.5 million subclass relations, 16 million instances). Including all major knowledge sources (Freebase, WordNet, Cyc, DBPedia, Yago, a.o.), with pretty well researched quality measures. Unfortunately, none of the data is Linked in any way, none of this available, let alone in some standard format.This is interestingly different from IBM's Watson knowledge base. That is mostly filled with knowledge extracted from linguistic sources (although structured data does play a limited role). Probase seems to rely much more on structured knowledge sources.</sioc:content>
	<content:encoded><![CDATA[<p>An interesting peek in Microsoft&#8217;s kitchen (the Beijing labs, by the looks of it): <a href="http://research.microsoft.com/en-us/projects/probase/" target="_blank">Probase</a> and <a href="http://www.readwriteweb.com/cloud/2011/03/microsoft-research-watch-ai-nosql-big-data.php" target="_blank">ReadWriteWeb writeup</a> on it. It&#8217;s a very large web-fed knowledge-base, including concept hierarchies (2.7 million concepts, 4.5 million subclass relations, 16 million instances). Including all major knowledge sources (Freebase, WordNet, Cyc, DBPedia, Yago, a.o.), with pretty well researched <a href="http://haixun.olidu.com/probase/experiments.htm" target="_blank">quality measures</a>. Unfortunately, none of the data is Linked in any way, none of this available, let alone in some standard format.This is interestingly different from IBM&#8217;s Watson knowledge base. That is mostly filled with knowledge extracted from linguistic sources (although structured data does play a limited role). Probase seems to rely much more on structured knowledge sources.</p>
]]></content:encoded>
	<sioc:topic rdfs:label="Uncategorized" rdf:resource="http://blog.larkc.eu/?cat=1"/>
	<sioc:links_to rdf:resource="http://research.microsoft.com/en-us/projects/probase/" rdfs:label="Probase"/>
	<sioc:links_to rdf:resource="http://www.readwriteweb.com/cloud/2011/03/microsoft-research-watch-ai-nosql-big-data.php" rdfs:label="ReadWriteWeb writeup"/>
	<sioc:links_to rdf:resource="http://haixun.olidu.com/probase/experiments.htm" rdfs:label="quality measures"/>
</sioc:Post>

</rdf:RDF>

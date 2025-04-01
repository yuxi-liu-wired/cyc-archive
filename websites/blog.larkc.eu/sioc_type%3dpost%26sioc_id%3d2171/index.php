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
	<foaf:primaryTopic rdf:resource="http://blog.larkc.eu/?p=2171"/>
	<admin:generatorAgent rdf:resource="http://rdfs.org/sioc/wp-sioc.php?version=1.25"/>
</foaf:Document>

<sioc:Post rdf:about="http://blog.larkc.eu/?p=2171">
	<sioc:link rdf:resource="http://blog.larkc.eu/?p=2171"/>
	<sioc:has_container rdf:resource="http://blog.larkc.eu/index.php?sioc_type=site#weblog"/>
	<dc:title>Traffic LarKC wins the AI Mashup Challenge</dc:title>
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
	<dcterms:created>2011-06-03T14:43:53Z</dcterms:created>
	<sioc:content>A LarKC workflow for traffic-aware route-planning has won the 1st prize in the AI Mashup Challenge at the ESWC 2011 conference, held this week on Crete.

The detail of "Traffic_LarKC" can be found at https://sites.google.com/a/fh-hannover.de/aimashup11/home/traffic_larkc, but in brief:

Four different datasets are used:

	the traffic sensors data, obtained from Milano Municipality
	the Milano street topology
	historical weather data from the Italian website ilMeteo.it
	calendar information (week days and week-end days, holidays, etc.) from Milano Municipality and from the Mozilla Calendar project.

These are used in a batchtime workflow to predict the traffic situation over the next two ours and in a runtime workflow to respond to route-planning queries from users.

	The demo can be found at http://larkc.cefriel.it/traffic-larkc,
	a video is at http://larkc.cefriel.it/traffic-larkc/traffic-larkc-video.html
	a paper is at https://sites.google.com/a/fh-hannover.de/aimashup11/home/traffic_larkc/traffic-larkc2_aimc-eswc-2011.pdf?attredirects=0&#38;d=1, and
	the competition entry is at https://sites.google.com/a/fh-hannover.de/aimashup11/home/traffic_larkc.

This LarKC workflow shows that Linked Open Data and the corresponding technologies are now getting good enough to compete with what's possible in closed commercial systems.

Congratulations to the entire team that has made this possible!

</sioc:content>
	<content:encoded><![CDATA[<p>A LarKC workflow for traffic-aware route-planning has won the 1st prize in the <a href="https://sites.google.com/a/fh-hannover.de/aimashup11/" target="_blank">AI Mashup Challenge</a> at the <a href="http://www.eswc2011.org/" target="_blank">ESWC 2011 conference</a>, held this week on Crete.</p>
<p>The detail of &#8220;Traffic_LarKC&#8221; can be found at <a href="https://sites.google.com/a/fh-hannover.de/aimashup11/home/traffic_larkc">https://sites.google.com/a/fh-hannover.de/aimashup11/home/traffic_larkc</a>, but in brief:</p>
<p>Four different datasets are used:</p>
<ul>
<li>the traffic sensors data, obtained from <a href="http://www.ama-mi.it/" rel="nofollow">Milano Municipality</a></li>
<li>the Milano street topology</li>
<li>historical weather data from the Italian website <a href="http://www.ilmeteo.it/" rel="nofollow">ilMeteo.it</a></li>
<li>calendar information (week days and week-end days, holidays, etc.) from Milano Municipality and from the <a href="http://www.mozilla.org/projects/calendar/holidays.html" rel="nofollow">Mozilla Calendar project</a>.</li>
</ul>
<p>These are used in a batchtime workflow to predict the traffic situation over the next two ours and in a runtime workflow to respond to route-planning queries from users.</p>
<ul>
<li>The demo can be found at <a href="http://larkc.cefriel.it/traffic-larkc" target="_blank">http://larkc.cefriel.it/traffic-larkc</a>,</li>
<li>a video is at <a href="http://larkc.cefriel.it/traffic-larkc/traffic-larkc-video.html" target="_blank">http://larkc.cefriel.it/traffic-larkc/traffic-larkc-video.html</a></li>
<li>a paper is at <a href="https://sites.google.com/a/fh-hannover.de/aimashup11/home/traffic_larkc/traffic-larkc2_aimc-eswc-2011.pdf?attredirects=0&#38;d=1" target="_blank">https://sites.google.com/a/fh-hannover.de/aimashup11/home/traffic_larkc/traffic-larkc2_aimc-eswc-2011.pdf?attredirects=0&#38;d=1</a>, and</li>
<li>the competition entry is at <a href="https://sites.google.com/a/fh-hannover.de/aimashup11/home/traffic_larkc">https://sites.google.com/a/fh-hannover.de/aimashup11/home/traffic_larkc</a>.</li>
</ul>
<p>This LarKC workflow shows that Linked Open Data and the corresponding technologies are now getting good enough to compete with what&#8217;s possible in closed commercial systems.</p>
<p>Congratulations to the entire team that has made this possible!</p>
<p><img src="http://larkc.cefriel.it/traffic-larkc/ai/img/home.png" alt="LarKC traffic demo" width="100%" /></p>
]]></content:encoded>
	<sioc:topic rdfs:label="Uncategorized" rdf:resource="http://blog.larkc.eu/?cat=1"/>
	<sioc:links_to rdf:resource="https://sites.google.com/a/fh-hannover.de/aimashup11/" rdfs:label="AI Mashup Challenge"/>
	<sioc:links_to rdf:resource="http://www.eswc2011.org/" rdfs:label="ESWC 2011 conference"/>
	<sioc:links_to rdf:resource="https://sites.google.com/a/fh-hannover.de/aimashup11/home/traffic_larkc" rdfs:label="https://sites.google.com/a/fh-hannover.de/aimashup11/home/traffic_larkc"/>
	<sioc:links_to rdf:resource="http://www.ama-mi.it/" rdfs:label="Milano Municipality"/>
	<sioc:links_to rdf:resource="http://www.ilmeteo.it/" rdfs:label="ilMeteo.it"/>
	<sioc:links_to rdf:resource="http://www.mozilla.org/projects/calendar/holidays.html" rdfs:label="Mozilla Calendar project"/>
	<sioc:links_to rdf:resource="http://larkc.cefriel.it/traffic-larkc" rdfs:label="http://larkc.cefriel.it/traffic-larkc"/>
	<sioc:links_to rdf:resource="http://larkc.cefriel.it/traffic-larkc/traffic-larkc-video.html" rdfs:label="http://larkc.cefriel.it/traffic-larkc/traffic-larkc-video.html"/>
	<sioc:links_to rdf:resource="https://sites.google.com/a/fh-hannover.de/aimashup11/home/traffic_larkc/traffic-larkc2_aimc-eswc-2011.pdf?attredirects=0&amp;d=1" rdfs:label="https://sites.google.com/a/fh-hannover.de/aimashup11/home/traffic_larkc/traffic-larkc2_aimc-eswc-2011.pdf?attredirects=0&#38;d=1"/>
	<sioc:links_to rdf:resource="https://sites.google.com/a/fh-hannover.de/aimashup11/home/traffic_larkc" rdfs:label="https://sites.google.com/a/fh-hannover.de/aimashup11/home/traffic_larkc"/>
</sioc:Post>

</rdf:RDF>

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
	<foaf:primaryTopic rdf:resource="http://blog.larkc.eu/?p=2201"/>
	<admin:generatorAgent rdf:resource="http://rdfs.org/sioc/wp-sioc.php?version=1.25"/>
</foaf:Document>

<sioc:Post rdf:about="http://blog.larkc.eu/?p=2201">
	<sioc:link rdf:resource="http://blog.larkc.eu/?p=2201"/>
	<sioc:has_container rdf:resource="http://blog.larkc.eu/index.php?sioc_type=site#weblog"/>
	<dc:title>Another speed record for OWL Horst inference</dc:title>
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
	<dcterms:created>2011-09-19T09:18:26Z</dcterms:created>
	<sioc:content>If you liked WebPIE, you'll also like QueryPIE
WebPIE performed forward inference over up to 100 billion triples (yes, that's 10^11). Our about-to-be-published QueryPIE can do on the fly backward-chaining inference at query-time, over a billion triples, in milliseconds, on just 8 parallel machines.
Last year, Jacopo Urbani and co-authors from the LarKC team broke the speed record for forward chaining inference over OWL-Horst.  Computing the complete closure over 100 billion of triples in a number of hours using a MapReduce/Hadoop implementation on a medium-sized cluster. The performance of WebPie [see conference and journal paper] is:

	1 billion FactForge triples in 1.5 hours on 32 compute nodes
	24 billion Bio2RDF triples in 10 hours on 32 compute nodes
	100 billion LUBM triples in 15 hours on 64 compute notes
	deriving anywhere between 150K-650K triples per second, depending on the dataset
	runtime growing linearly with number of triples
	speedup growing linearly the number of compute nodes

Now, a year later, we're breaking another speed record, but this time for "backward chaining": not doing all inferencing up front, but doing the inferencing "on the fly", at query time, as and when they are needed.

Until now, backward-chaining was considered to be unfeasible on very large realistic data, since it would slow down the query response time too much. Our paper at ISWC this year shows it's not all that impossible: on different real-life datasets of up to 1 billion triples, QueryPIE can do on the fly backward-chaining inference at query-time, implementing the full OWL Horst fragment with response times in millisecs on just 8 machines.

All code available at http://few.vu.nl/~jui200/files/querypie-1.0.0.tar.gz
</sioc:content>
	<content:encoded><![CDATA[<p><strong>If you liked WebPIE, you&#8217;ll also like QueryPIE</strong></p>
<blockquote style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 40px; border-width: initial; border-color: initial; border-style: none; padding: 0px" class="webkit-indent-blockquote"><p>WebPIE performed forward inference over up to 100 billion triples (yes, that&#8217;s 10^11). Our about-to-be-published QueryPIE can do on the fly <em><a href="http://en.wikipedia.org/wiki/Backward_chaining" class="zem_slink" title="Backward chaining" rel="wikipedia">backward-chaining</a></em> inference at query-time, over a billion triples, in milliseconds, on just 8 parallel machines.</p></blockquote>
<p>Last year, Jacopo Urbani and co-authors from the LarKC team broke the speed record for forward chaining inference over OWL-Horst.  Computing the complete closure over 100 billion of triples in a number of hours using a MapReduce/Hadoop implementation on a medium-sized cluster. The performance of WebPie [see <a href="http://www.mendeley.com/research/owl-reasoning-webpie-calculating-closure-100-billion-triples/" target="_blank">conference </a>and <a href="http://www.mendeley.com/c/4426400885/g/1029291/urbani-2011-webpie--a-web-scale-parallel-inference-engine-using-mapreduce/" target="_blank">journal</a> paper] is:</p>
<ul>
<li>1 billion FactForge triples in 1.5 hours on 32 compute nodes</li>
<li>24 billion <a href="http://bio2rdf.org/" class="zem_slink" title="Bio2RDF" rel="homepage">Bio2RDF</a> triples in 10 hours on 32 compute nodes</li>
<li>100 billion LUBM triples in 15 hours on 64 compute notes</li>
<li>deriving anywhere between 150K-650K triples per second, depending on the dataset</li>
<li>runtime growing linearly with number of triples</li>
<li>speedup growing linearly the number of compute nodes</li>
</ul>
<p>Now, a year later, we&#8217;re breaking another speed record, but this time for &#8220;<em>backward chaining</em>&#8220;: not doing all inferencing up front, but doing the inferencing &#8220;on the fly&#8221;, at query time, as and when they are needed.</p>
<p>Until now, backward-chaining was considered to be unfeasible on very large realistic data, since it would slow down the query response time too much. Our <a href="http://www.cs.vu.nl/~frankh/postscript/ISWC11.pdf">paper at ISWC this year</a> shows it&#8217;s not all that impossible: on different real-life datasets of up to 1 billion triples, QueryPIE can do on the fly backward-chaining inference at query-time, implementing the full OWL Horst fragment with response times in millisecs on just 8 machines.</p>
<p>All code available at <a href="http://few.vu.nl/~jui200/files/querypie-1.0.0.tar.gz" target="_blank">http://few.vu.nl/~jui200/files/querypie-1.0.0.tar.gz</a></p>
<p class="zemanta-pixie" style="margin-top: 10px; height: 15px"><a href="http://www.zemanta.com/" class="zemanta-pixie-a" title="Enhanced by Zemanta"><img src="http://img.zemanta.com/zemified_e.png?x-id=2e403695-bc6b-484e-bb54-ec6d50429ba8" class="zemanta-pixie-img" alt="Enhanced by Zemanta" style="border-width: initial; border-color: initial; float: right; border-style: none" /></a></p>
]]></content:encoded>
	<sioc:topic rdfs:label="Uncategorized" rdf:resource="http://blog.larkc.eu/?cat=1"/>
	<sioc:has_reply>
		<sioc:Post rdf:about="http://blog.larkc.eu/?p=2201#comment-288701">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=comment&amp;sioc_id=288701"/>
		</sioc:Post>
	</sioc:has_reply>
	<sioc:links_to rdf:resource="http://en.wikipedia.org/wiki/Backward_chaining" rdfs:label="backward-chaining"/>
	<sioc:links_to rdf:resource="http://www.mendeley.com/research/owl-reasoning-webpie-calculating-closure-100-billion-triples/" rdfs:label="conference "/>
	<sioc:links_to rdf:resource="http://www.mendeley.com/c/4426400885/g/1029291/urbani-2011-webpie--a-web-scale-parallel-inference-engine-using-mapreduce/" rdfs:label="journal"/>
	<sioc:links_to rdf:resource="http://bio2rdf.org/" rdfs:label="Bio2RDF"/>
	<sioc:links_to rdf:resource="http://www.cs.vu.nl/~frankh/postscript/ISWC11.pdf" rdfs:label="paper at ISWC this year"/>
	<sioc:links_to rdf:resource="http://few.vu.nl/~jui200/files/querypie-1.0.0.tar.gz" rdfs:label="http://few.vu.nl/~jui200/files/querypie-1.0.0.tar.gz"/>
	<sioc:links_to rdf:resource="http://www.zemanta.com/" rdfs:label="&#60;img src=&#34;http://img.zemanta.com/zemified_e.png?x-id=2e403695-bc6b-484e-bb54-ec6d50429ba8&#34; class=&#34;zemanta-pixie-img&#34; alt=&#34;Enhanced by Zemanta&#34; style=&#34;border-width: initial; border-color: initial; float: right; border-style: none&#34; /&#62;"/>
</sioc:Post>

</rdf:RDF>

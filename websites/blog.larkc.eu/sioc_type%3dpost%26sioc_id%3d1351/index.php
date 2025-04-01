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
	<foaf:primaryTopic rdf:resource="http://blog.larkc.eu/?p=1351"/>
	<admin:generatorAgent rdf:resource="http://rdfs.org/sioc/wp-sioc.php?version=1.25"/>
</foaf:Document>

<sioc:Post rdf:about="http://blog.larkc.eu/?p=1351">
	<sioc:link rdf:resource="http://blog.larkc.eu/?p=1351"/>
	<sioc:has_container rdf:resource="http://blog.larkc.eu/index.php?sioc_type=site#weblog"/>
	<dc:title>Talis hosts public data</dc:title>
	<sioc:has_creator>
		<sioc:User rdf:about="http://blog.larkc.eu/?author=711" rdfs:label="admin">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=user&amp;sioc_id=711"/>
		</sioc:User>
	</sioc:has_creator>
	<foaf:maker>
		<foaf:Person rdf:about="http://blog.larkc.eu/?author=711#foaf" rdfs:label="admin">
			<foaf:mbox_sha1sum>c626588229d59c4e58a57c57497239468212b824</foaf:mbox_sha1sum>
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=user&amp;sioc_id=711"/>
		</foaf:Person>
	</foaf:maker>
	<dcterms:created>2009-04-03T08:54:59Z</dcterms:created>
	<sioc:content>(by Eyal Oren)

Talis (a Semantic Web infrastructure and services provider) just announced their new Connected Commons scheme, where they offer to host any RDF dataset (up to 50M triples) for free, and allow public SPARQL access to it, as long as that dataset is licensed under a creative commons or open data license. That's a step. Fifty million triples isn't much in my opinion, but their push towards open data is commended. And note: they don't just store them for you, they offer you free CPU cycles since they allow full SPARQL.

It's similar to OpenLink's public hosting of many LOD datasets (such as dbpedia), except for the strong push towards open data with proper licenses. Let's see where this goes.</sioc:content>
	<content:encoded><![CDATA[<p>(by Eyal Oren)</p>
<p><a href="http://www.talis.com">Talis</a> (a Semantic Web infrastructure and services provider) just announced their new <a href="http://blogs.talis.com/n2/cc">Connected Commons</a> scheme, where they offer to host any RDF dataset (up to 50M triples) for free, and allow public SPARQL access to it, as long as that dataset is licensed under a <a href="http://creativecommons.org/license/zero/">creative commons</a> or <a href="http://www.opendatacommons.org/licenses/pddl/1.0/">open data </a>license. That&#8217;s a step. Fifty million triples isn&#8217;t much in my opinion, but their push towards open data is commended. And note: they don&#8217;t just store them for you, they offer you free CPU cycles since they allow full SPARQL.</p>
<p>It&#8217;s similar to OpenLink&#8217;s public hosting of many LOD datasets (such as dbpedia), except for the strong push towards open data with proper licenses. Let&#8217;s see where this goes.</p>
]]></content:encoded>
	<sioc:topic rdfs:label="Information Sharing" rdf:resource="http://blog.larkc.eu/?cat=781"/>
	<sioc:links_to rdf:resource="http://www.talis.com" rdfs:label="Talis"/>
	<sioc:links_to rdf:resource="http://blogs.talis.com/n2/cc" rdfs:label="Connected Commons"/>
	<sioc:links_to rdf:resource="http://creativecommons.org/license/zero/" rdfs:label="creative commons"/>
	<sioc:links_to rdf:resource="http://www.opendatacommons.org/licenses/pddl/1.0/" rdfs:label="open data"/>
</sioc:Post>

</rdf:RDF>

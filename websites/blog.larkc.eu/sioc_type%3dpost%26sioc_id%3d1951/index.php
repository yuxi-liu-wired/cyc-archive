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
	<foaf:primaryTopic rdf:resource="http://blog.larkc.eu/?p=1951"/>
	<admin:generatorAgent rdf:resource="http://rdfs.org/sioc/wp-sioc.php?version=1.25"/>
</foaf:Document>

<sioc:Post rdf:about="http://blog.larkc.eu/?p=1951">
	<sioc:link rdf:resource="http://blog.larkc.eu/?p=1951"/>
	<sioc:has_container rdf:resource="http://blog.larkc.eu/index.php?sioc_type=site#weblog"/>
	<dc:title>LDSR Passes the Modigliani Test for Semantic Web</dc:title>
	<sioc:has_creator>
		<sioc:User rdf:about="http://blog.larkc.eu/?author=161" rdfs:label="AtanasKiryakov">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=user&amp;sioc_id=161"/>
		</sioc:User>
	</sioc:has_creator>
	<foaf:maker>
		<foaf:Person rdf:about="http://blog.larkc.eu/?author=161#foaf" rdfs:label="AtanasKiryakov">
			<foaf:mbox_sha1sum>a74d5c2fa0c492439d220a82dbc3db8ffcdbc5d1</foaf:mbox_sha1sum>
			<foaf:homepage rdf:resource="http://www.ontotext.com"/>
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=user&amp;sioc_id=161"/>
		</foaf:Person>
	</foaf:maker>
	<dcterms:created>2010-04-23T14:33:49Z</dcterms:created>
	<sioc:content>A week ago Richard MacManus published on ReadWriteWeb a post "The Modigliani Test: The Semantic Web's Tipping  Point". He essentially argues that the linked data are not sufficiently linked. He wrote that "The tipping point for the long-awaited Semantic Web may be when you can  query a set of data about someone not too famous, and get a long list of  structured results in return". Then he defined the "Modigliani Test" for the Semantic Web: he wants to be able to query a search engine "tell me the locations of all the original paintings of Modigliani" and get back large list of results.

I liked the post a lot because it spots an important problem and provides a clear example. And because I like Modigliani's paintings ... the nude ladies, in particular :-) So, I tried to comment on Richard's post but my comment did not appeared public for three days, so, I decided to post it here. Now let's go to the subject.

Indeed linked data are hard to query and use today. In a way, they are semi-structured, because getting useful information from LOD quite often requires a lot of efforts to analyse and post-process them in order to get reasonable answers to structured queries.

I don't believe there is a way to get this problem fixed for the entire linked data web. Still, we develop an approach called reason-able views to the web of data - the idea of collecting, cleaning up, and indexing multiple datasets into a single semantic repository in a way, which allows those to be queried and used in a reliable fashion. One can find the motivation here.We have created a reason-able view called LDSR, which includes several of the central LOD datasets: DBPedia, Freebase, Geonames, UMBEL, Wordnet, and few others. And another one called LinkedLifeData, includes 20+ datasets related to life sciences. Both LDSR and LLD were developed in LarKC project, as test cases for large-scale reasoning (reasoning with billions of linked data statements is fun, but it is a different subject).

Before going to Modigliani, I will start with Richard's query about Bosch paintings in order to provide some background about LDSR. The query can be put in a slightly more readable form as follows:
PREFIX rdfs: &#60;http://www.w3.org/2000/01/rdf-schema#&#62;
PREFIX foaf: &#60;http://xmlns.com/foaf/0.1/&#62;
PREFIX dbpedia2: &#60;http://dbpedia.org/property/&#62;
PREFIX skos: &#60;http://www.w3.org/2004/02/skos/core#&#62;
SELECT ?pl ?ml ?img ?l
WHERE {
  ?p skos:subject  &#60;http://dbpedia.org/resource/Category:Hieronymus_Bosch_paintings&#62;.
  ?p foaf:depiction ?img ;  rdfs:label ?pl . FILTER ( lang(?pl) = "en" ) .
  ?p dbpedia2:museum [ rdfs:label ?ml ]. FILTER ( lang(?ml) = "en" ) .
  ?p dbpedia2:city ?l .
}
One can execute this query at http://ldsr.ontotext.com/sparql and you will get the same results like in DBPedia, because the latter is part of LDSR. In fact, there are some duplicates, because in LDSR there are multiple English labels for the big museums. To deal with the problem with the multiple labels, we have
introduced, "preferred labels", by means of postprocessing. Using them, the query can look a bit simpler and return back more readable results:
PREFIX foaf: &#60;http://xmlns.com/foaf/0.1/&#62;
PREFIX dbp-prop: &#60;http://dbpedia.org/property/&#62;
PREFIX skos: &#60;http://www.w3.org/2004/02/skos/core#&#62;
PREFIX ot: &#60;http://www.ontotext.com/&#62;
SELECT DISTINCT ?pl ?ml ?img ?cl ?prr
WHERE {
  ?p skos:subject &#60;http://dbpedia.org/resource/Category:Hieronymus_Bosch_paintings&#62; ;
     foaf:depiction ?img ;  ot:preferredLabel ?pl ;
     dbp-prop:museum [ ot:preferredLabel ?ml ] ;
     dbp-prop:city [ ot:preferredLabel ?cl ] ;
     ot:hasPageRank ?prr .
} ORDER BY DESC(?prr)
As one can see, we can also order the results by RDF Rank - a PageRank-like measure for the importance of each node in the RDF graph of LDSR. We believe that query and result readability and relevance ranking are very important when dealing with the web of data.

And now getting really to the point with Modigliani. Here follows the query, which solves the test. When executed against LDSR, it returns cities where original paintings of Modigliani can be seen:
PREFIX fb: &#60;http://rdf.freebase.com/ns/&#62;
PREFIX dbpedia: &#60;http://dbpedia.org/resource/&#62;
PREFIX dbp-prop: &#60;http://dbpedia.org/property/&#62;
PREFIX dbp-ont: &#60;http://dbpedia.org/ontology/&#62;
PREFIX umbel-sc: &#60;http://umbel.org/umbel/sc/&#62;
PREFIX rdf: &#60;http://www.w3.org/1999/02/22-rdf-syntax-ns#&#62;
PREFIX ot: &#60;http://www.ontotext.com/&#62;
SELECT DISTINCT ?painting_l ?owner_l ?city_fb_con ?city_db_loc ?city_db_cit
WHERE {
  ?p fb:visual_art.artwork.artist dbpedia:Amedeo_Modigliani ;
     fb:visual_art.artwork.owners [ fb:visual_art.artwork_owner_relationship.owner ?ow ] ;
     ot:preferredLabel ?painting_l.
     ?ow ot:preferredLabel ?owner_l .
  OPTIONAL { ?ow fb:location.location.containedby [ ot:preferredLabel ?city_fb_con ] } .
  OPTIONAL { ?ow dbp-prop:location ?loc. ?loc rdf:type umbel-sc:City ; ot:preferredLabel ?city_db_loc }
  OPTIONAL { ?ow dbp-ont:city [ ot:preferredLabel ?city_db_cit ] }
}
Few comments:

	 the major credits here should go to the guys from Metaweb - without Freebase it would have been impossible to get the paintings of Modegliani;
	technically, the test is not solved, because these are the locations of few, but not *all* Modegliani paintings and even not a really long list of them;
	getting the locations was tough ... as you see we needed to take them through three different patterns, from DBPedia and Freebase; UMBEL was necessary to filter out only those values of dbp-prop:location, which are cities;
	the query combines information from three datasets: DBPedia, Freebase and UMBEL. In this specific case, federated SPARQL query, where each of the datasets is served from a different SPARQL end-point, is computationally possible, because the constraints about the paintings from Freebase return small number of results. Note, however, that most of the queries which span over data from multiple datasets will not have this nice property; thus, evaluating them would require a setup like LDSR, where all the datasets are loaded in a single repository
	some of the data is noisy: Manhattan is linked through dbp-ont:city to some of the paintings ... all the beauties of the linked data are presented :-)
	there are no ranks; they can be linked like in the query for Bosch above, but it is not useful, because ranks of all Modegliani paintings from FB appear to be zero :-( So, I preferred to keep the query simpler :-)
	it took me more than one hour to compose this query :-(

Finally, few words about LDSR. The public version currently exposes the older versions of DBPedia and Freebase. We will update it with the spring versions soon. Also, LDSR is work in progress - we constantly develop the UI, searching for handy metaphors and retrieval modalities for linked data. So, we didn't spend much time in polishing and beautification - as a results it looks as geeky as it does. Still, we are trying to maintain high availability WRT exploration and SPARQL queries.

In summary, LDSR can be seen as search engine for part of the linked data web. It partly solves The Modigliani Test, although it is not able to take natural language queries, yet :-). There is still a lot of work to be done, because we cannot expect wide usage and interest in the Semantic Web if writing such a query takes more than an hour and a lot of technical knowledge. The good news is that we have progress - half an year ago making such query would have required one day. And a year ago it would have been impossible.  I think I see the light at the end of the tunnel. Or I am hallucinating after one hour of crafting SPARQL queries and this is just a funeral candle?  Is there anybody out there?  Please, comment!

Atanas Kiryakov

Ontotext</sioc:content>
	<content:encoded><![CDATA[<p>A week ago Richard MacManus published on ReadWriteWeb a post &#8220;<a href="http://www.readwriteweb.com/archives/the_modigliani_test_semantic_web_tipping_point.php" title="The Semantic Web's Tipping Point">The Modigliani Test: The Semantic Web&#8217;s Tipping  Point</a>&#8220;. He essentially argues that the <em>linked data</em> are not sufficiently linked. He wrote that &#8220;<em>The tipping point for the long-awaited Semantic Web may be when you can  query a set of data about someone not too famous, and get a long list of  structured results in return</em>&#8220;. Then he defined the &#8220;Modigliani Test&#8221; for the Semantic Web: he wants to be able to query a search engine &#8220;<em>tell me the locations of all the original paintings of Modigliani</em>&#8221; and get back large list of results.</p>
<p>I liked the post a lot because it spots an important problem and provides a clear example. And because I like Modigliani&#8217;s paintings &#8230; the nude ladies, in particular <img src='http://blog.larkc.eu/wp-includes/images/smilies/icon_smile.gif' alt=':-)' class='wp-smiley' /> So, I tried to comment on Richard&#8217;s post but my comment did not appeared public for three days, so, I decided to post it here. Now let&#8217;s go to the subject.</p>
<p>Indeed <em>linked data</em> are hard to query and use today. In a way, they are semi-structured, because getting useful information from LOD quite often requires a lot of efforts to analyse and post-process them in order to get reasonable answers to structured queries.</p>
<p>I don&#8217;t believe there is a way to get this problem fixed for the entire linked data web. Still, we develop an approach called <em>reason-able views</em> to the web of data - the idea of collecting, cleaning up, and indexing multiple datasets into a single semantic repository in a way, which allows those to be queried and used in a reliable fashion. One can find the motivation <a href="http://www.slideshare.net/ontotext/linked-data-in-the-enteprise">here</a>.We have created a reason-able view called <a href="http://www.ontotext.com/ldsr">LDSR</a>, which includes several of the central LOD datasets: <a href="http://www.dbpedia.org/">DBPedia</a>, <a href="http://www.freebase.com/">Freebase</a>, <a href="http://www.geonames.org/">Geonames</a>, <a href="http://www.umbel.org/">UMBEL</a>, <a href="http://wordnet.princeton.edu/">Wordnet</a>, and few others. And another one called <a href="http://LinkedLifeData.com/">LinkedLifeData</a>, includes 20+ datasets related to life sciences. Both LDSR and LLD were developed in <a href="http://www.larkc.eu">LarKC</a> project, as test cases for large-scale reasoning (reasoning with billions of linked data statements is fun, but it is a different subject).</p>
<p>Before going to Modigliani, I will start with Richard&#8217;s query about Bosch paintings in order to provide some background about LDSR. The query can be put in a slightly more readable form as follows:</p>
<pre><code></code>PREFIX rdfs: &#60;http://www.w3.org/2000/01/rdf-schema#&#62;
PREFIX foaf: &#60;http://xmlns.com/foaf/0.1/&#62;
PREFIX dbpedia2: &#60;http://dbpedia.org/property/&#62;
PREFIX skos: &#60;http://www.w3.org/2004/02/skos/core#&#62;</pre>
<pre>SELECT ?pl ?ml ?img ?l
WHERE {
  ?p skos:subject  &#60;http://dbpedia.org/resource/Category:Hieronymus_Bosch_paintings&#62;.
  ?p foaf:depiction ?img ;  rdfs:label ?pl . FILTER ( lang(?pl) = "en" ) .
  ?p dbpedia2:museum [ rdfs:label ?ml ]. FILTER ( lang(?ml) = "en" ) .
  ?p dbpedia2:city ?l .
}</pre>
<p>One can execute this query at <a href="http://ldsr.ontotext.com/sparql">http://ldsr.ontotext.com/sparql</a> and you will get the same results like in DBPedia, because the latter is part of LDSR. In fact, there are some duplicates, because in LDSR there are multiple English labels for the big museums. To deal with the problem with the multiple labels, we have<br />
introduced, &#8220;preferred labels&#8221;, by means of postprocessing. Using them, the query can look a bit simpler and return back more readable results:</p>
<pre><code></code>PREFIX foaf: &#60;http://xmlns.com/foaf/0.1/&#62;
PREFIX dbp-prop: &#60;http://dbpedia.org/property/&#62;
PREFIX skos: &#60;http://www.w3.org/2004/02/skos/core#&#62;
PREFIX ot: &#60;http://www.ontotext.com/&#62;</pre>
<pre>SELECT DISTINCT ?pl ?ml ?img ?cl ?prr
WHERE {
  ?p skos:subject &#60;http://dbpedia.org/resource/Category:Hieronymus_Bosch_paintings&#62; ;
     foaf:depiction ?img ;  ot:preferredLabel ?pl ;
     dbp-prop:museum [ ot:preferredLabel ?ml ] ;
     dbp-prop:city [ ot:preferredLabel ?cl ] ;
     ot:hasPageRank ?prr .
} ORDER BY DESC(?prr)</pre>
<p>As one can see, we can also order the results by RDF Rank - a PageRank-like measure for the importance of each node in the RDF graph of LDSR. We believe that query and result readability and relevance ranking are very important when dealing with the web of data.</p>
<p>And now getting really to the point with Modigliani. Here follows the query, which solves the test. When executed against LDSR, it returns cities where original paintings of Modigliani can be seen:</p>
<pre><code></code>PREFIX fb: &#60;http://rdf.freebase.com/ns/&#62;
PREFIX dbpedia: &#60;http://dbpedia.org/resource/&#62;
PREFIX dbp-prop: &#60;http://dbpedia.org/property/&#62;
PREFIX dbp-ont: &#60;http://dbpedia.org/ontology/&#62;
PREFIX umbel-sc: &#60;http://umbel.org/umbel/sc/&#62;
PREFIX rdf: &#60;http://www.w3.org/1999/02/22-rdf-syntax-ns#&#62;
PREFIX ot: &#60;http://www.ontotext.com/&#62;</pre>
<pre>SELECT DISTINCT ?painting_l ?owner_l ?city_fb_con ?city_db_loc ?city_db_cit
WHERE {
  ?p fb:visual_art.artwork.artist dbpedia:Amedeo_Modigliani ;
     fb:visual_art.artwork.owners [ fb:visual_art.artwork_owner_relationship.owner ?ow ] ;
     ot:preferredLabel ?painting_l.
     ?ow ot:preferredLabel ?owner_l .
  OPTIONAL { ?ow fb:location.location.containedby [ ot:preferredLabel ?city_fb_con ] } .
  OPTIONAL { ?ow dbp-prop:location ?loc. ?loc rdf:type umbel-sc:City ; ot:preferredLabel ?city_db_loc }
  OPTIONAL { ?ow dbp-ont:city [ ot:preferredLabel ?city_db_cit ] }
}</pre>
<p>Few comments:</p>
<ul>
<li> the major credits here should go to the guys from Metaweb - without Freebase it would have been impossible to get the paintings of Modegliani;</li>
<li>technically, the test is not solved, because these are the locations of few, but not *all* Modegliani paintings and even not a really long list of them;</li>
<li>getting the locations was tough &#8230; as you see we needed to take them through three different patterns, from DBPedia and Freebase; UMBEL was necessary to filter out only those values of dbp-prop:location, which are cities;</li>
<li>the query combines information from three datasets: DBPedia, Freebase and UMBEL. In this specific case, federated SPARQL query, where each of the datasets is served from a different SPARQL end-point, is computationally possible, because the constraints about the paintings from Freebase return small number of results. Note, however, that most of the queries which span over data from multiple datasets will not have this nice property; thus, evaluating them would require a setup like LDSR, where all the datasets are loaded in a single repository</li>
<li>some of the data is noisy: Manhattan is linked through dbp-ont:city to some of the paintings &#8230; all the beauties of the linked data are presented <img src='http://blog.larkc.eu/wp-includes/images/smilies/icon_smile.gif' alt=':-)' class='wp-smiley' /> </li>
<li>there are no ranks; they can be linked like in the query for Bosch above, but it is not useful, because ranks of all Modegliani paintings from FB appear to be zero <img src='http://blog.larkc.eu/wp-includes/images/smilies/icon_sad.gif' alt=':-(' class='wp-smiley' /> So, I preferred to keep the query simpler <img src='http://blog.larkc.eu/wp-includes/images/smilies/icon_smile.gif' alt=':-)' class='wp-smiley' /> </li>
<li>it took me more than one hour to compose this query <img src='http://blog.larkc.eu/wp-includes/images/smilies/icon_sad.gif' alt=':-(' class='wp-smiley' /> </li>
</ul>
<p>Finally, few words about LDSR. The public version currently exposes the older versions of DBPedia and Freebase. We will update it with the spring versions soon. Also, LDSR is work in progress - we constantly develop the UI, searching for handy metaphors and retrieval modalities for linked data. So, we didn&#8217;t spend much time in polishing and beautification - as a results it looks as geeky as it does. Still, we are trying to maintain high availability WRT exploration and SPARQL queries.</p>
<p>In summary, LDSR can be seen as search engine for part of the linked data web. It partly solves The Modigliani Test, although it is not able to take natural language queries, yet :-). There is still a lot of work to be done, because we cannot expect wide usage and interest in the Semantic Web if writing such a query takes more than an hour and a lot of technical knowledge. The good news is that we have progress - half an year ago making such query would have required one day. And a year ago it would have been impossible.  I think I see the light at the end of the tunnel. Or I am hallucinating after one hour of crafting SPARQL queries and this is just a funeral candle?  Is there anybody out there?  Please, comment!</p>
<p>Atanas Kiryakov</p>
<p>Ontotext</p>
]]></content:encoded>
	<sioc:topic rdfs:label="Dissemination" rdf:resource="http://blog.larkc.eu/?cat=1391"/>
	<sioc:topic rdfs:label="Information Sharing" rdf:resource="http://blog.larkc.eu/?cat=781"/>
	<sioc:topic rdfs:label="Semantic Data Integration" rdf:resource="http://blog.larkc.eu/?cat=831"/>
	<sioc:topic rdfs:label="Semantic Infrastructure" rdf:resource="http://blog.larkc.eu/?cat=871"/>
	<sioc:topic rdfs:label="Semantic Search, Discovery &amp; Navigation" rdf:resource="http://blog.larkc.eu/?cat=891"/>
	<sioc:has_reply>
		<sioc:Post rdf:about="http://blog.larkc.eu/?p=1951#comment-114801">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=comment&amp;sioc_id=114801"/>
		</sioc:Post>
	</sioc:has_reply>
	<sioc:has_reply>
		<sioc:Post rdf:about="http://blog.larkc.eu/?p=1951#comment-114851">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=comment&amp;sioc_id=114851"/>
		</sioc:Post>
	</sioc:has_reply>
	<sioc:has_reply>
		<sioc:Post rdf:about="http://blog.larkc.eu/?p=1951#comment-114861">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=comment&amp;sioc_id=114861"/>
		</sioc:Post>
	</sioc:has_reply>
	<sioc:has_reply>
		<sioc:Post rdf:about="http://blog.larkc.eu/?p=1951#comment-114871">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=comment&amp;sioc_id=114871"/>
		</sioc:Post>
	</sioc:has_reply>
	<sioc:has_reply>
		<sioc:Post rdf:about="http://blog.larkc.eu/?p=1951#comment-114901">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=comment&amp;sioc_id=114901"/>
		</sioc:Post>
	</sioc:has_reply>
	<sioc:has_reply>
		<sioc:Post rdf:about="http://blog.larkc.eu/?p=1951#comment-115441">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=comment&amp;sioc_id=115441"/>
		</sioc:Post>
	</sioc:has_reply>
	<sioc:links_to rdf:resource="http://www.readwriteweb.com/archives/the_modigliani_test_semantic_web_tipping_point.php" rdfs:label="The Modigliani Test: The Semantic Web&#039;s Tipping  Point"/>
	<sioc:links_to rdf:resource="http://www.slideshare.net/ontotext/linked-data-in-the-enteprise" rdfs:label="here"/>
	<sioc:links_to rdf:resource="http://www.ontotext.com/ldsr" rdfs:label="LDSR"/>
	<sioc:links_to rdf:resource="http://www.dbpedia.org/" rdfs:label="DBPedia"/>
	<sioc:links_to rdf:resource="http://www.freebase.com/" rdfs:label="Freebase"/>
	<sioc:links_to rdf:resource="http://www.geonames.org/" rdfs:label="Geonames"/>
	<sioc:links_to rdf:resource="http://www.umbel.org/" rdfs:label="UMBEL"/>
	<sioc:links_to rdf:resource="http://wordnet.princeton.edu/" rdfs:label="Wordnet"/>
	<sioc:links_to rdf:resource="http://LinkedLifeData.com/" rdfs:label="LinkedLifeData"/>
	<sioc:links_to rdf:resource="http://www.larkc.eu" rdfs:label="LarKC"/>
	<sioc:links_to rdf:resource="http://ldsr.ontotext.com/sparql" rdfs:label="http://ldsr.ontotext.com/sparql"/>
</sioc:Post>

</rdf:RDF>

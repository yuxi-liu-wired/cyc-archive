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
	<foaf:primaryTopic rdf:resource="http://blog.larkc.eu/?p=1941"/>
	<admin:generatorAgent rdf:resource="http://rdfs.org/sioc/wp-sioc.php?version=1.25"/>
</foaf:Document>

<sioc:Post rdf:about="http://blog.larkc.eu/?p=1941">
	<sioc:link rdf:resource="http://blog.larkc.eu/?p=1941"/>
	<sioc:has_container rdf:resource="http://blog.larkc.eu/index.php?sioc_type=site#weblog"/>
	<dc:title>LOD cloud shows surprisingly lumpy structure</dc:title>
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
	<dcterms:created>2010-03-10T11:48:55Z</dcterms:created>
	<sioc:content>The protypical Linked Open Data map gives the general impression of a richly interlinked set of bubbles.However, A small experiment showed that this first impression is very wrong!  Christophe Gueret from the VU Amsterdam re-constructed the LOD link table as a .net file, which we then displayed using simple stress minimisation in Visione. This revealed some surprises:



(click on image for bigger copy)

Surprise 1: There is not one cloud, but three. As this graph visualisation shows, LOD is not one cloud, but three, each with dense internal connections and only sparse connections between them. The three sub-clouds are also clearly recognisable: one sub-cloud is bio/life-sciences data, one sub-cloud is (surprisingly) academic bibliographic material, and the central cloud is "all the rest", connecting the other two, with DBPedia as its hub.

Surprise 2. DBLP is as important as DBPedia. Also surprisingly, the total betweenness degree of the relatively unknown DBLP datasets is as high as the betweenness degree of the widely recognised DBPedia hub.  The sum of three DBLP instances accounts for 25% of the betweenness, almost the same number as DBPedia (28%). The reason for this high betweenness is that the DBLP sets are the only link between the bibliographic subcloud and "the rest".

So now the questions are: Is this good or bad? Is this surprising or obvious? Is this long-term structural or just a short-term coincidence. Anybody?(a first experiment would be to take the density of the links between the bubbles into account, and see if this would change anything? The .net file is here for you to experiment with, please share your results).
 </sioc:content>
	<content:encoded><![CDATA[<p><img border="0" src="http://upload.wikimedia.org/wikipedia/en/thumb/8/8c/Lod-datasets_2009-07-14_colored.png/800px-Lod-datasets_2009-07-14_colored.png" align="bottom" width="100%" />The <a target="_blank" href="http://en.wikipedia.org/wiki/File:Lod-datasets_2009-07-14_colored.png">protypical Linked Open Data map </a>gives the general impression of a richly interlinked set of bubbles.However, A small experiment showed that this first impression is very wrong!  <a target="_blank" href="http://www.few.vu.nl/~cgueret/">Christophe Gueret</a> from the VU Amsterdam re-constructed the <a target="_blank" href="http://esw.w3.org/topic/TaskForces/CommunityProjects/LinkingOpenData/DataSets/LinkStatistics">LOD link table</a> as a .net file, which we then displayed using simple stress minimisation in <a target="_blank" href="http://visone.info/">Visione</a>. This revealed some surprises:</p>
<p><a target="_blank" href="http://www.cs.vu.nl/~frankh/spool/LarKC/LOD-stress-minimisation.png"><img border="0" src="http://www.cs.vu.nl/~frankh/spool/LarKC/LOD-stress-minimisation.png" align="bottom" width="100%" /></a></p>
<p>(click on image for bigger copy)</p>
<p><strong>Surprise 1: There is not one cloud, but three.</strong> As this graph visualisation shows, LOD is not one cloud, but three, each with dense internal connections and only sparse connections between them. The three sub-clouds are also clearly recognisable: one sub-cloud is bio/life-sciences data, one sub-cloud is (surprisingly) academic bibliographic material, and the central cloud is &#8220;all the rest&#8221;, connecting the other two, with DBPedia as its hub.</p>
<p><strong>Surprise 2. DBLP is as important as DBPedia.</strong> Also surprisingly, the total betweenness degree of the relatively unknown DBLP datasets is as high as the betweenness degree of the widely recognised DBPedia hub.  The sum of three DBLP instances accounts for 25% of the betweenness, almost the same number as DBPedia (28%). The reason for this high betweenness is that the DBLP sets are the only link between the bibliographic subcloud and &#8220;the rest&#8221;.</p>
<p><strong>So now the questions are:</strong> Is this good or bad? Is this surprising or obvious? Is this long-term structural or just a short-term coincidence. Anybody?(a first experiment would be to take the density of the links between the bubbles into account, and see if this would change anything? The .net file is <a target="_blank" href="http://www.cs.vu.nl/~frankh/spool/LarKC/lod.net">here</a> for you to experiment with, please share your results).</p>
<p style="margin-top: 10px; height: 15px" class="zemanta-pixie"><a href="http://reblog.zemanta.com/zemified/6ee2d515-312d-48ad-9376-889f6d531df5/" class="zemanta-pixie-a" title="Reblog this post [with Zemanta]"><img src="http://img.zemanta.com/reblog_e.png?x-id=6ee2d515-312d-48ad-9376-889f6d531df5" alt="Reblog this post [with Zemanta]" style="float: right; border: medium none" class="zemanta-pixie-img" /></a><span class="zem-script more-related pretty-attribution"><script type="text/javascript" defer="defer" src="http://static.zemanta.com/readside/loader.js"></script> </span></p>
]]></content:encoded>
	<sioc:topic rdfs:label="Uncategorized" rdf:resource="http://blog.larkc.eu/?cat=1"/>
	<sioc:has_reply>
		<sioc:Post rdf:about="http://blog.larkc.eu/?p=1941#comment-104441">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=comment&amp;sioc_id=104441"/>
		</sioc:Post>
	</sioc:has_reply>
	<sioc:has_reply>
		<sioc:Post rdf:about="http://blog.larkc.eu/?p=1941#comment-104451">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=comment&amp;sioc_id=104451"/>
		</sioc:Post>
	</sioc:has_reply>
	<sioc:has_reply>
		<sioc:Post rdf:about="http://blog.larkc.eu/?p=1941#comment-104461">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=comment&amp;sioc_id=104461"/>
		</sioc:Post>
	</sioc:has_reply>
	<sioc:has_reply>
		<sioc:Post rdf:about="http://blog.larkc.eu/?p=1941#comment-104481">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=comment&amp;sioc_id=104481"/>
		</sioc:Post>
	</sioc:has_reply>
	<sioc:has_reply>
		<sioc:Post rdf:about="http://blog.larkc.eu/?p=1941#comment-104491">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=comment&amp;sioc_id=104491"/>
		</sioc:Post>
	</sioc:has_reply>
	<sioc:has_reply>
		<sioc:Post rdf:about="http://blog.larkc.eu/?p=1941#comment-104501">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=comment&amp;sioc_id=104501"/>
		</sioc:Post>
	</sioc:has_reply>
	<sioc:has_reply>
		<sioc:Post rdf:about="http://blog.larkc.eu/?p=1941#comment-104561">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=comment&amp;sioc_id=104561"/>
		</sioc:Post>
	</sioc:has_reply>
	<sioc:has_reply>
		<sioc:Post rdf:about="http://blog.larkc.eu/?p=1941#comment-104571">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=comment&amp;sioc_id=104571"/>
		</sioc:Post>
	</sioc:has_reply>
	<sioc:has_reply>
		<sioc:Post rdf:about="http://blog.larkc.eu/?p=1941#comment-104891">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=comment&amp;sioc_id=104891"/>
		</sioc:Post>
	</sioc:has_reply>
	<sioc:has_reply>
		<sioc:Post rdf:about="http://blog.larkc.eu/?p=1941#comment-105071">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=comment&amp;sioc_id=105071"/>
		</sioc:Post>
	</sioc:has_reply>
	<sioc:has_reply>
		<sioc:Post rdf:about="http://blog.larkc.eu/?p=1941#comment-109661">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=comment&amp;sioc_id=109661"/>
		</sioc:Post>
	</sioc:has_reply>
	<sioc:has_reply>
		<sioc:Post rdf:about="http://blog.larkc.eu/?p=1941#comment-120281">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=comment&amp;sioc_id=120281"/>
		</sioc:Post>
	</sioc:has_reply>
	<sioc:has_reply>
		<sioc:Post rdf:about="http://blog.larkc.eu/?p=1941#comment-120421">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=comment&amp;sioc_id=120421"/>
		</sioc:Post>
	</sioc:has_reply>
	<sioc:has_reply>
		<sioc:Post rdf:about="http://blog.larkc.eu/?p=1941#comment-210441">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=comment&amp;sioc_id=210441"/>
		</sioc:Post>
	</sioc:has_reply>
	<sioc:has_reply>
		<sioc:Post rdf:about="http://blog.larkc.eu/?p=1941#comment-211421">
			<rdfs:seeAlso rdf:resource="http://blog.larkc.eu/index.php?sioc_type=comment&amp;sioc_id=211421"/>
		</sioc:Post>
	</sioc:has_reply>
	<sioc:links_to rdf:resource="http://en.wikipedia.org/wiki/File:Lod-datasets_2009-07-14_colored.png" rdfs:label="protypical Linked Open Data map"/>
	<sioc:links_to rdf:resource="http://www.few.vu.nl/~cgueret/" rdfs:label="Christophe Gueret"/>
	<sioc:links_to rdf:resource="http://esw.w3.org/topic/TaskForces/CommunityProjects/LinkingOpenData/DataSets/LinkStatistics" rdfs:label="LOD link table"/>
	<sioc:links_to rdf:resource="http://visone.info/" rdfs:label="Visione"/>
	<sioc:links_to rdf:resource="http://www.cs.vu.nl/~frankh/spool/LarKC/LOD-stress-minimisation.png" rdfs:label="&#60;img border=&#34;0&#34; src=&#34;http://www.cs.vu.nl/~frankh/spool/LarKC/LOD-stress-minimisation.png&#34; align=&#34;bottom&#34; width=&#34;100%&#34; /&#62;"/>
	<sioc:links_to rdf:resource="http://www.cs.vu.nl/~frankh/spool/LarKC/lod.net" rdfs:label="here"/>
	<sioc:links_to rdf:resource="http://reblog.zemanta.com/zemified/6ee2d515-312d-48ad-9376-889f6d531df5/" rdfs:label="&#60;img src=&#34;http://img.zemanta.com/reblog_e.png?x-id=6ee2d515-312d-48ad-9376-889f6d531df5&#34; alt=&#34;Reblog this post [with Zemanta]&#34; style=&#34;float: right; border: medium none&#34; class=&#34;zemanta-pixie-img&#34; /&#62;"/>
</sioc:Post>

</rdf:RDF>

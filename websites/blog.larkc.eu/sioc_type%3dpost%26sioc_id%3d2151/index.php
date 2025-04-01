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
	<foaf:primaryTopic rdf:resource="http://blog.larkc.eu/?p=2151"/>
	<admin:generatorAgent rdf:resource="http://rdfs.org/sioc/wp-sioc.php?version=1.25"/>
</foaf:Document>

<sioc:Post rdf:about="http://blog.larkc.eu/?p=2151">
	<sioc:link rdf:resource="http://blog.larkc.eu/?p=2151"/>
	<sioc:has_container rdf:resource="http://blog.larkc.eu/index.php?sioc_type=site#weblog"/>
	<dc:title>The Large Knowledge Collider release V2.5</dc:title>
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
	<dcterms:created>2011-05-30T06:29:43Z</dcterms:created>
	<sioc:content>The LarKC development team is proud to announce the new release V2.5 of the LarKC platform. The new release is a considerable improvement over the previous V2.0 edition, with the following distinctive features:

	V2.5 is fully compliant with the LarKC final architecture. You can now develop your workflows and plugins, and be assured that future updates won't change the main APIs.
	The Management Interface, which makes it possible to run LarKC from your browser, has an updated RESTful implementation. Besides RDF/XML, workflows can now be described in very readable N3 notation.
	The endpoint for submitting queries to LarKC is now user-definable, and multiple endpoints are supported.
	The Plug-in Registry has been improved, and is now coupled with the browser-based Management Interface
	LarKC now uses a Maven-based build system, giving improved version and dependency management, and a simplified procedure for new plug-in creation
	A number of extra tools have been introduced to make life for LarKC users a lot easier. Besides the Mangement Interface to run LarKC from your browser, V2.5 also contains:

	A WYSIWIG Worfklow Designer tool that allows you to construct workflows by drag-and-drop, right from your browser: click on some plugins, drag them to the workspace, click to connect them, and press run! (see screenshot below).
	An updated plug-in wizard for Eclipse.


	We have thouroughly updated the distributed execution framework. Besides  deploying LarKC plugins through Apache (simply by dropping them in your  Apache folder), it is now also possible to deploy plugins through JEE  (for webservers) or GAT (for clusters).
	The WYSIWYG Workflow Designer allows you to specify remote execution of a plugin simply by connecting a plugin to a remote host. Templates are provided for such remote host declaration.
	LarKC now takes care of advanced data caching for plug-ins
	V2.5 comes with extended and improved JUnit tests
	Last but not least, we have considerably improved documentation and user manuals, including a quick-start guide, tutorial materials and example workflows.

The release can be downloaded from http://sourceforge.net/projects/larkc/files/Release-2.5/larkc-release-2.5.zip/download
The platform's manual is available at http://sourceforge.net/projects/larkc/files/Release-2.5/LarKC_Platform_Manual_2.5.pdf/download

Bugs can be submitted using the bug tracker at http://www.larkc.eu/bug-tracker

As usual, you are encouraged to use the discussion forums and mailing lists served by the LarKC@SourceForge development environment.
please see at http://larkc.sourceforge.net/

</sioc:content>
	<content:encoded><![CDATA[<p>The LarKC development team is proud to announce the new release V2.5 of the LarKC platform. The new release is a considerable improvement over the previous V2.0 edition, with the following distinctive features:</p>
<ul>
<li>V2.5 is fully compliant with the LarKC final architecture. You can now develop your workflows and plugins, and be assured that future updates won&#8217;t change the main APIs.</li>
<li>The Management Interface, which makes it possible to run LarKC from your browser, has an updated RESTful implementation. Besides RDF/XML, workflows can now be described in very readable N3 notation.</li>
<li>The endpoint for submitting queries to LarKC is now user-definable, and multiple endpoints are supported.</li>
<li>The Plug-in Registry has been improved, and is now coupled with the browser-based Management Interface</li>
<li>LarKC now uses a Maven-based build system, giving improved version and dependency management, and a simplified procedure for new plug-in creation</li>
<li>A number of extra tools have been introduced to make life for LarKC users a lot easier. Besides the Mangement Interface to run LarKC from your browser, V2.5 also contains:
<ul>
<li>A WYSIWIG Worfklow Designer tool that allows you to construct workflows by drag-and-drop, right from your browser: click on some plugins, drag them to the workspace, click to connect them, and press run! (see screenshot below).</li>
<li>An updated plug-in wizard for Eclipse.</li>
</ul>
</li>
<li>We have thouroughly updated the distributed execution framework. Besides  deploying LarKC plugins through Apache (simply by dropping them in your  Apache folder), it is now also possible to deploy plugins through JEE  (for webservers) or GAT (for clusters).</li>
<li>The WYSIWYG Workflow Designer allows you to specify remote execution of a plugin simply by connecting a plugin to a remote host. Templates are provided for such remote host declaration.</li>
<li>LarKC now takes care of advanced data caching for plug-ins</li>
<li>V2.5 comes with extended and improved JUnit tests</li>
<li>Last but not least, we have considerably improved documentation and user manuals, including a quick-start guide, tutorial materials and example workflows.</li>
</ul>
<p>The release can be downloaded from <a href="http://sourceforge.net/projects/larkc/files/Release-2.5/larkc-release-2.5.zip/download">http://sourceforge.net/projects/larkc/files/Release-2.5/larkc-release-2.5.zip/download</a><br />
The platform&#8217;s manual is available at <a href="http://sourceforge.net/projects/larkc/files/Release-2.5/LarKC_Platform_Manual_2.5.pdf/download">http://sourceforge.net/projects/larkc/files/Release-2.5/LarKC_Platform_Manual_2.5.pdf/download</a></p>
<p>Bugs can be submitted using the bug tracker at <a href="http://www.larkc.eu/bug-tracker/">http://www.larkc.eu/bug-tracker</a></p>
<p>As usual, you are encouraged to use the discussion forums and mailing lists served by the <a href="mailto:LarKC@SourceForge">LarKC@SourceForge</a> development environment.<br />
please see at <a href="http://larkc.sourceforge.net/">http://larkc.sourceforge.net/</a></p>
<p><img src="http://www.cs.vu.nl/~frankh/spool/LarKC/workflow-editor.png" alt="LarKC Workflow Editor" width="100%" /></p>
]]></content:encoded>
	<sioc:topic rdfs:label="Uncategorized" rdf:resource="http://blog.larkc.eu/?cat=1"/>
	<sioc:links_to rdf:resource="http://sourceforge.net/projects/larkc/files/Release-2.5/larkc-release-2.5.zip/download" rdfs:label="http://sourceforge.net/projects/larkc/files/Release-2.5/larkc-release-2.5.zip/download"/>
	<sioc:links_to rdf:resource="http://sourceforge.net/projects/larkc/files/Release-2.5/LarKC_Platform_Manual_2.5.pdf/download" rdfs:label="http://sourceforge.net/projects/larkc/files/Release-2.5/LarKC_Platform_Manual_2.5.pdf/download"/>
	<sioc:links_to rdf:resource="http://www.larkc.eu/bug-tracker/" rdfs:label="http://www.larkc.eu/bug-tracker"/>
	<sioc:links_to rdf:resource="mailto:LarKC@SourceForge" rdfs:label="LarKC@SourceForge"/>
	<sioc:links_to rdf:resource="http://larkc.sourceforge.net/" rdfs:label="http://larkc.sourceforge.net/"/>
</sioc:Post>

</rdf:RDF>

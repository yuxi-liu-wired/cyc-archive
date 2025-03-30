<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>The Cyc Foundation  </title>
<meta name="verify-v1" content="5GqWS0e+NkqAEf6F4cdIN2JX4wEjUiUXDIfKlujRcMw=" />
<meta name="generator" content="WordPress 2.2.1" /> <!-- leave this for stats -->
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
		</script>
		<script type="text/javascript">
		_uacct = "UA-616404-1";
		urchinTracker();
		</script>
		<script src="_js/wikip.js" 	type="text/javascript"></script>
<link rel="stylesheet" href="http://www.cycfoundation.org/blog/wordpress/wp-content/themes/simplicitybright/style.css" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.cycfoundation.org/blog/?feed=rss2" />
<link rel="alternate" type="text/xml" title="RSS .92" href="http://www.cycfoundation.org/blog/?feed=rss" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="http://www.cycfoundation.org/blog/?feed=atom" />
<link rel="pingback" href="http://www.cycfoundation.org/blog/wordpress/xmlrpc.php" />
	<link rel='archives' title='June 2011' href='http://www.cycfoundation.org/blog/?m=201106' />
	<link rel='archives' title='February 2011' href='http://www.cycfoundation.org/blog/?m=201102' />
	<link rel='archives' title='September 2008' href='http://www.cycfoundation.org/blog/?m=200809' />
	<link rel='archives' title='May 2008' href='http://www.cycfoundation.org/blog/?m=200805' />
	<link rel='archives' title='March 2008' href='http://www.cycfoundation.org/blog/?m=200803' />
	<link rel='archives' title='January 2008' href='http://www.cycfoundation.org/blog/?m=200801' />
	<link rel='archives' title='September 2007' href='http://www.cycfoundation.org/blog/?m=200709' />
	<link rel='archives' title='August 2007' href='http://www.cycfoundation.org/blog/?m=200708' />

	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.cycfoundation.org/blog/wordpress/xmlrpc.php?rsd" />
</head>
<body>
<div id="top">
<div id="topbar">
<ul class="topmenu">
<li><a href="http://www.cycfoundation.org/blog">Home</a></li>
<li class="page_item"><a href="http://www.cycfoundation.org/blog/?page_id=2" title="About">About</a></li>
<li class="page_item"><a href="http://www.cycfoundation.org/blog/?page_id=3" title="Team">Team</a></li>
<li class="page_item"><a href="http://www.cycfoundation.org/blog/?page_id=4" title="Initiatives">Initiatives</a></li>
<li class="page_item"><a href="http://www.cycfoundation.org/blog/?page_id=5" title="Videos">Videos</a></li>
<li class="page_item"><a href="http://www.cycfoundation.org/blog/?page_id=6" title="Suggested Reading">Suggested Reading</a></li>
<li class="page_item"><a href="http://www.cycfoundation.org/blog/?page_id=7" title="Join">Join</a></li>
<li><a href="http://www.cycfoundation.org/blog/?feed=rss2"><img src="http://www.cycfoundation.org/blog/wordpress/wp-content/themes/simplicitybright/images/rss.gif" alt="rssfeed" /></a></li>
</ul>
</div>
</div>

<div id="page">
<div id="header">

<div id="blogname">
<h2><a href="http://www.cycfoundation.org/blog/">The Cyc Foundation</a></h2>
<p>&nbsp;&nbsp;Computable Common Sense</p>
</div>

</div>

<div id="wrapper"><div id="content">

<div class="post">

<h1 id="post-21"><a href="http://www.cycfoundation.org/blog/?p=21" rel="bookmark" title="Permanent Link: &#8220;We&#8217;ve Got to Think About the Game&#8221;">&#8220;We&#8217;ve Got to Think About the Game&#8221;</a></h1>

<div class="entry">

<p><em>Originally posted on 4/20/2006 by John De Oliveira</em></p>
<p>I said I&#8217;d go into more detail about each of the activities in the Cyc Foundation&#8217;s Cyclify initiative. The purpose that cuts across all activities is to grow the Cyc Knowledge Base. Initially, the focus is on what we call breadth or coverage. We want everything one could think of to have a concept term or a way of forming one from functional terms. A concept term is something like #$CreditCard. A term built functionally is something like (#$BorderBetweenFn #$France #$Germany). The &#8216;#$&#8217; is something used internally by Cyc to distinguish Cyc terms from other kinds of symbols. If you&#8217;re not doing programming, you don&#8217;t have to use it. But sometimes it helps as a way of knowing that you&#8217;re talking about #$France the Cyc term as opposed to &#8220;France&#8221; the string or France the country.</p>
<p>Anyway, we want to fill up Cyc with concepts and with useful facts about the concepts. As a result of the way development proceeded with fits and starts based on where funding was coming from, the coverage in Cyc is very broad but spotty. There may be terms for #$Parsley, #$Sage and #$Rosemary, but #$Thyme might be missing. (Sounds like a song.) As for facts, Cyc may know that yelling is louder than talking, but not know that talking is typically louder than whispering.</p>
<p>The games will be one way of helping to fill in the content. The first game presents the player with statements for which she must choose True, False or Skip. Since many of the questions are common sense things that we all know, challenge is introduced in the form of time pressure. The first game will also have other question types; for example, one type allows the player to choose several answers.</p>
<p>The game is fed by statements that you might call prospective facts. There are several ways to come up with these. One is to have Cyc use natural language generation to create partial search strings &#8212; &#8220;The adult elephant can weigh as much as *&#8221; &#8212; and parse what you get back. Another is to use abduction &#8212; find things that might possibly be true and propose that they are true. The statements that feed the game are in what we call &#8220;the pipeline&#8221;.</p>
<p>There are issues in creating the pipeline. We want to create useful prospective facts; and we also want to be able to categorize them, so that you as a player won&#8217;t keep getting shown statements that you know nothing about. That&#8217;s a challenge we need to address presently.</p>
<p>I&#8217;ll continue with more about the game next time.</p>
<p>P.S. Bonus points for whoever can tell what musical the title of this post came from.</p>
</div>

<!--<p class="postmetadata">August 8th, 2007 | <a href="http://www.cycfoundation.org/blog/?cat=1" title="View all posts in Uncategorized" rel="category">Uncategorized</a> | <a href="http://www.cycfoundation.org/blog/?p=21#respond" title="Comment on &#8220;We&#8217;ve Got to Think About the Game&#8221;">0 Comments</a></p>-->
<p class="postmetadata"></p>
</div>

<div class="post">

<h1 id="post-20"><a href="http://www.cycfoundation.org/blog/?p=20" rel="bookmark" title="Permanent Link: What will we be doing?">What will we be doing?</a></h1>

<div class="entry">

<p><em>Originally posted on 4/17/2006 by John De Oliveira</em></p>
<p>Cyclify, the grass-roots initiative of the Cyc Foundation, is composed of the following projects:</p>
<ul>
<li>Games for growing the knowledge base</li>
<li>Wikipedia knowledge collection</li>
<li>Pairing subject-matter experts (SMEs, pronounced &#8220;smees&#8221;) with ontologists</li>
<li>Alignment with other sources (for example, WordNet)</li>
</ul>
<p>I&#8217;ll make a separate post for each of these, in order to go into more detail. Something that applies to all of them is the fact that they depend on the help of people who are not experts in artificial intelligence. We still need the experts, but they&#8217;ll be working side-by-side with people who are life-smart. Experts in other fields, experts at being human (or at least much better at it than computers), and people who can help with coordinating, supporting and motivating everyone&#8217;s play.</p>
<p>Outside of Cyclify, the Cyc Foundation will be working on issues related to standards, ResearchCyc coordination and other things.</p>
<p>We&#8217;ll be using the Basecamp program, which was developed with Ruby on Rails. We&#8217;ll be setting up accounts for people who join the Cyc Foundation. You can request membership by sending an email with your background and interests to johndcyc@gmail.com.</p>
</div>

<!--<p class="postmetadata">August 8th, 2007 | <a href="http://www.cycfoundation.org/blog/?cat=1" title="View all posts in Uncategorized" rel="category">Uncategorized</a> | <a href="http://www.cycfoundation.org/blog/?p=20#respond" title="Comment on What will we be doing?">0 Comments</a></p>-->
<p class="postmetadata"></p>
</div>

<div class="post">

<h1 id="post-19"><a href="http://www.cycfoundation.org/blog/?p=19" rel="bookmark" title="Permanent Link: New Article in New Scientist about Cyc">New Article in New Scientist about Cyc</a></h1>

<div class="entry">

<p><em>Originally posted on 4/16/2006 by John De Oliveira</em></p>
<p>New Scientist just published a <a href="http://www.newscientist.com/channel/opinion/mg19025471.700-the-word-common-sense.html"> new article</a> about Cyc in which they say, &#8220;Cycorp has also just launched a trivia game for the public that will help fill in gaps in Cyc&#8217;s knowledge.&#8221;</p>
<p>The Cyc Foundation is being entrusted with the responsibility for further development of the game. We&#8217;re currently designing a new front-end for the game that will provide an arcade-like feel. We hope it will make game play more compelling. And we&#8217;re planning to extend the kinds of knowledge that the game will gather.</p>
<p>This will be a new genre in gaming: <span style="font-weight: bold">Games that Matter</span>, where every question you answer brings the world a little closer to a truly intelligent computer.</p>
<p>[By the way, a Cyc Foundation website is in the works and is expected next month. In the meantime, we may set up at least a home page in the next few days where we&#8217;ll be able to collect a little information from those of you who would like to help with this effort.]</p>
</div>

<!--<p class="postmetadata">August 8th, 2007 | <a href="http://www.cycfoundation.org/blog/?cat=1" title="View all posts in Uncategorized" rel="category">Uncategorized</a> | <a href="http://www.cycfoundation.org/blog/?p=19#respond" title="Comment on New Article in New Scientist about Cyc">0 Comments</a></p>-->
<p class="postmetadata"></p>
</div>

<div class="post">

<h1 id="post-18"><a href="http://www.cycfoundation.org/blog/?p=18" rel="bookmark" title="Permanent Link: 21st Century Glasnost and Perestroika">21st Century Glasnost and Perestroika</a></h1>

<div class="entry">

<p><em>Originally posted 4/16/2006 by John De Oliveira</em></p>
<p>While I was in college in the mid-Eighties, there was a buzz in the air about Gorbachev&#8217;s <a href="http://en.wikipedia.org/wiki/Glasnost">glasnost </a>and <a href="http://en.wikipedia.org/wiki/Perestroika">perestroika</a>. Those were times filled with anticipation of changing relationships, although few truly knew how much change was coming.</p>
<p>Changes at Cycorp over the last few years remind me of those times. The iron curtain on Cyc is coming down with the release of the full Cyc ontology into open source (glasnost), and there is an opportunity for the Cyc ontology, developed over 20 years, to contribute to the restructuring of the Web (perestroika) that is taking place.</p>
<p>This new glasnost extends beyond the release of an ontology that can be used and extended by all. The entire Cyc system is now available for free for research purposes; and, although inference engine source code is not included, there are over 18,000 functions and macros available for the research community to work with, including those that support natural language parsing and generation. As with Gorbachev, the glasnost is the result of a changing attitude toward working with the outside world.</p>
<p>Cycorp&#8217;s &#8220;Reykjavik Summit&#8221; occurred in 2001, when DARPA invited many of the leading minds of ontology and artificial intelligence to Austin for a summit. It was essentially Cyc&#8217;s coming out party &#8212; a time for Cycorp to say, &#8220;We know we&#8217;ve been keeping mostly to ourselves. We&#8217;re ready to share, and we&#8217;d like to know what you think about what we&#8217;ve been working on.&#8221; Present were <a href="http://en.wikipedia.org/wiki/Marvin_Minsky">Marvin Minsky</a>, <a href="http://ksl.stanford.edu/people/eaf/">Ed Feigenbaum</a>, <a href="http://brachman.org/">Ron Brachman</a> (meeting organizer), <a href="http://wordnet.princeton.edu/%7Egeo/">George Miller</a>, <a href="http://research.sun.com/people/mybio.php?c=406">Bill Woods</a>, <a href="http://www.ksl.stanford.edu/people/dlm/">Deborah McGuinness</a>, <a href="http://www.cs.toronto.edu/%7Ehector/">Hector LeVesque</a>, <a href="http://en.wikipedia.org/wiki/Scott_Fahlman">Scott Fahlman</a>, <a href="http://www2.parc.com/spl/members/bobrow/">Danny Bobrow</a>, <a href="http://www.jfsowa.com/pubs/index.htm">John Sowa</a>, <a href="http://www.amazon.com/gp/product/0080420125/qid=1145239312/sr=1-8/ref=sr_1_8/002-5747722-5016038?s=books&amp;v=glance&amp;n=283155">Fritz Lehmann</a> and more. <a href="http://en.wikipedia.org/wiki/John_McCarthy_%28computer_scientist%29">John McCarthy</a> added his two cents in a separate visit. McCarthy published the paper <a href="http://www-formal.stanford.edu/jmc/mcc59/mcc59.html">Programs with Common Sense</a> back in 1959, in which he asserted, &#8220;In order for a program to be capable of learning something it must first be capable of being told it.&#8221;</p>
<p>By the end, even those expected to be the biggest critics agreed that they would like to get their hands on as much of the Cyc technology as possible &#8212; especially the knowledge base content. That was the beginning of the ResearchCyc project, and it was when the decision was made to have OpenCyc get all of the concept terms that were released in ResearchCyc.</p>
<p>So, that was glasnost. Perestroika is coming in the form of The Cyc Foundation, which has a goal of working cooperatively with as much of the &#8220;Web 2.0&#8243; community as bandwidth permits. For example, we&#8217;re working on a web services interface for the Cyc API. We&#8217;ll be linking Cyc concepts with Wikipedia concepts and, as a result, providing a new way to navigate Wikipedia. We hope to use Ruby on Rails on the interface that administers workflow (we call it &#8220;playflow&#8221;, since it supports games) for the games that add knowledge to the Cyc knowledge base. And we&#8217;d like to work with the social tagging community to give them a way to use a shared tagset without giving up the ease of use and social networking that they are accustomed to. In all cases, we&#8217;ll have to explore with the rest of the Web community how to capitalize on the advantages of our respective technologies.</p>
<p>The wall has been knocked down. I anticipate a time of even greater change, and I&#8217;m looking forward to the next several years!</p>
</div>

<!--<p class="postmetadata">August 8th, 2007 | <a href="http://www.cycfoundation.org/blog/?cat=1" title="View all posts in Uncategorized" rel="category">Uncategorized</a> | <a href="http://www.cycfoundation.org/blog/?p=18#respond" title="Comment on 21st Century Glasnost and Perestroika">0 Comments</a></p>-->
<p class="postmetadata"></p>
</div>

<div class="post">

<h1 id="post-17"><a href="http://www.cycfoundation.org/blog/?p=17" rel="bookmark" title="Permanent Link: The Semantics of Semantics">The Semantics of Semantics</a></h1>

<div class="entry">

<p><em>Originally posted on 4/15/2006 by John De Oliveira</em></p>
<p><a href="http://www.cs.utexas.edu/%7Ebillj/">Bill</a> <a href="http://www.ai.sri.com/people/jarrold/">Jarrold</a> of <a href="http://www.sri.com/">SRI</a> sent me some comments about my presentation on the 13th (see below), and I&#8217;d like to respond. He said the presentation was pretty good, but noted:</p>
<blockquote><p>Some people will differ with your characterization that OWL contains no semantics. People are working on adding rules to OWL and OWL-Full is quite descriptive. OWL-DL is much weaker, but is computationally pretty good (description logics run in polynomial time). But, in spirit, you are right. From what little I know, Tim Berners Lee seems to urge everyone to keep moving, that through common use we will eventually arise at some sort of folksonomy like effect.</p></blockquote>
<p>Okay, I want to clarify what I meant when I was talking about Semantic Web standards.</p>
<p>With regard to representing the meaning in documents, I made the claim that, despite a number of new W3C standards, we&#8217;re in the same situation as we were with Electronic Data Interchange (EDI) 20 years ago. That&#8217;s not true. The W3C standards are actually a huge advance over EDI (by which I really mean <a href="http://www.x12.org/">X12</a>). Currently, however, they don&#8217;t aim to deal with the issue of a common vocabulary that (within the business domain) EDI focused on for 25 years. There is nothing inherent in the W3C standards that keeps us from taking that extra step, so I&#8217;m excited that the Cyc Foundation will be able to offer a part of the solution to that issue.</p>
<p>People often talk about the Semantic Web by comparing &#8220;syntax&#8221; to &#8220;semantics.&#8221; I divide the knowledge representation problem into syntax, vocabulary, ontology and semantics (as defined in my previous blog post). It&#8217;s not completely accurate, but accuracy can be the enemy of clarity sometimes.</p>
<p>OWL has support for semantics. OWL-Full has a quite a bit more support for semantics than OWL-DL. Neither contains a lot of meaning about things in the world, because the intention is to rely on ontologies expressed in OWL. It is up to users of OWL to add the meaningful terms that depend on the semantics that OWL provides.</p>
<p>As a result, we have a proliferation of ontologies from which, it is hoped, a common set of meaningful terms will emerge. At this point, there is some meaning in each of the ontologies, but there is not a shared meaning across ontologies.</p>
<p>I&#8217;m going to save discussion of folksonomies and emergent semantics for another post. For now, suffice it to say: I don&#8217;t oppose ground-up development of ontologies, and there is no inherent contradiction between doing that and having a unifying hub ontology. I look forward to working with the OWL community in creating a sustainable, semantically rich Web.</p>
</div>

<!--<p class="postmetadata">August 8th, 2007 | <a href="http://www.cycfoundation.org/blog/?cat=1" title="View all posts in Uncategorized" rel="category">Uncategorized</a> | <a href="http://www.cycfoundation.org/blog/?p=17#respond" title="Comment on The Semantics of Semantics">0 Comments</a></p>-->
<p class="postmetadata"></p>
</div>

<div class="post">

<h1 id="post-10"><a href="http://www.cycfoundation.org/blog/?p=10" rel="bookmark" title="Permanent Link: Syntax, Semantics and In Between">Syntax, Semantics and In Between</a></h1>

<div class="entry">

<p><em>Originally posted 4/15/2006 by John De Oliveira</em></p>
<p>I&#8217;m about to post a response to a comment I received about Thursday night&#8217;s presentation, but first I want to define some terms. (The fact that I have to try to establish this common ground vocabulary in order to discuss these issues ironically argues my point for me, as I hope you&#8217;ll see in the next post.) I invite corrections to my naive definitions, as long as the corrections can be stated in something close to English.</p>
<p><strong>Syntax</strong> is expressed by the simple grammar rules you get in any computer language. (If you want to be more technical, I&#8217;m talking about the kind of simple prescriptive grammars that can be defined with <a href="http://en.wikipedia.org/wiki/Backus-Naur_form">BNF</a>.) OWL and CycL also have a syntax that can be defined with simple grammar rules.</p>
<p><strong>Vocabulary</strong> is an agreed upon set of terms. There may be an implied connection to the things in the world the terms refer to (&#8221;clock&#8221; is a device we use to tell time), but it is not required that the terms be interrelated in any way. OWL intentionally has a quite small vocabulary. Vocabularies are handled by a proliferation of OWL ontologies.  <a href="http://en.wikipedia.org/wiki/Electronic_Data_Interchange">Electronic Data Interchange</a> (EDI) has a <a href="http://www.x12.org/">large vocabulary</a> of business terms. Cyc currently has a much smaller business vocabulary that EDI. It is also smaller than the sum of the vocabularies in OWL-based ontologies.  Cyc has a very large vocabulary of terms that refer to things in the everyday world.</p>
<p><strong>Ontology</strong> is a formal set of statements, built from a vocabulary, and about the things that the vocabulary terms refer to in the world. If we have a vocabulary that includes &#8220;dog&#8221; and &#8220;mammal&#8221;, an ontology made from that vocabulary would have a statement that the set of all dogs (referred to by the vocabulary term &#8220;dog&#8221;) is a subset of the set of all mammals (referred to by the vocabulary term &#8220;animal&#8221;). More simply, a dog is a kind of animal.</p>
<p>Finally, <strong>semantics</strong> (for the purposes of comparing knowledge representation choices) refers to the meanings of statements (&#8221;Your mother&#8217;s brother is your uncle.&#8221;) expressed in a form suitable for logical manipulation: (implies (and (mother ?X ?M) (brother ?M ?B)) (uncle ?X ?B)). I argue that an important distinction can be made between <em>support</em> for semantics and semantics. OWL has support for semantics (and a small amount of actual semantics involving the language primitives), and every related ontology adds to the actual semantics expressed using OWL. Cyc contains the support for semantics as well as the ontology content that gives it actual semantics.  Cyc is compatible with OWL and can extend its semantics the semantics of OWL in the same way that any other ontology can.</p>
</div>

<!--<p class="postmetadata">August 8th, 2007 | <a href="http://www.cycfoundation.org/blog/?cat=1" title="View all posts in Uncategorized" rel="category">Uncategorized</a> | <a href="http://www.cycfoundation.org/blog/?p=10#respond" title="Comment on Syntax, Semantics and In Between">0 Comments</a></p>-->
<p class="postmetadata"></p>
</div>

<div class="post">

<h1 id="post-8"><a href="http://www.cycfoundation.org/blog/?p=8" rel="bookmark" title="Permanent Link: Cyc Foundation announced at Cyclify meeting">Cyc Foundation announced at Cyclify meeting</a></h1>

<div class="entry">

<p><em>Originally posted 4/14/2006</em></p>
<p>Here&#8217;s an announcement we posted today on the <a href="http://www.opencyc.org/">OpenCyc site</a>.</p>
<p>Austin, TX. April 14, 2006 &#8211;</p>
<p>A new independent non-profit organization was announced Thursday night at the monthly meeting of Cyclify-Austin, the Cyc User&#8217;s group. The Cyc Foundation is now forming to manage the OpenCyc ontology and to grow the ontology and knowledge base exponentially with the help of volunteers from all walks of life.</p>
<p>Foundation president, John De Oliveira, compared the Foundation&#8217;s &#8220;Cyclify&#8221; effort to the Wikipedia project. He said, &#8220;The Wikimedia Foundation asks us to &#8216;Imagine a world in which every single person is given free access to the sum of all human knowledge.&#8217; In the Cyclify project, led by The Cyc Foundation, we ask you to imagine a world in which every single person is given free access to <strong><em>programs that reason with</em></strong> the sum of all human knowledge.&#8221;</p>
<p><a href="http://www.opencyc.org/doc2/foundation/slides/CF-intro.ppt">PPT Slides of the Announcement at the Cyclify Meeting</a><em><br />
(download first &amp; follow along)</em></p>
<p><a href="http://www.opencyc.org/doc2/foundation/podcasts/CF-Intro-2006-04-13.mp3">Podcast of the Announcement at the Cyclify Meeting</a><br />
<em>(duration 1 hr. 18 mins.)</em></p>
</div>

<!--<p class="postmetadata">August 8th, 2007 | <a href="http://www.cycfoundation.org/blog/?cat=1" title="View all posts in Uncategorized" rel="category">Uncategorized</a> | <a href="http://www.cycfoundation.org/blog/?p=8#respond" title="Comment on Cyc Foundation announced at Cyclify meeting">0 Comments</a></p>-->
<p class="postmetadata"></p>
</div>


<div class="pagenavigation2">
<div class="alignleft"><a href="http://www.cycfoundation.org/blog/wordpress/index.php?paged=2"></a></div>
<div class="alignright"><a href="http://www.cycfoundation.org/blog/wordpress/index.php?paged=2">Next Posts &raquo;</a></div>
</div>


</div>

</div>
<div id="sidebar">
<div class="sidelist">
<h2>Search</h2>
<ul>
<li>
<form method="get" class="searchform" action="/blog/wordpress/index.php">
<div>
<input type="text" value="Search term..." name="s" class="s" onblur="if(this.value=='')this.value='Search term...';" onfocus="if(this.value=='Search term...')this.value='';" />
</div>
</form></li>
</ul>
</div>

<div class="sidelist">
<ul>
<li class="page_item"><a href="http://www.cycfoundation.org/blog/?page_id=2" title="About">About</a></li>
<li class="page_item"><a href="http://www.cycfoundation.org/blog/?page_id=3" title="Team">Team</a></li>
<li class="page_item"><a href="http://www.cycfoundation.org/blog/?page_id=4" title="Initiatives">Initiatives</a>
	<ul>
	<li class="page_item"><a href="http://www.cycfoundation.org/blog/?page_id=15" title="Cyclopedia">Cyclopedia</a></li>
	<li class="page_item"><a href="http://www.cycfoundation.org/blog/?page_id=9" title="OpenCyc Concept Browser">OpenCyc Concept Browser</a></li>
	<li class="page_item"><a href="http://www.cycfoundation.org/blog/?page_id=12" title="OpenCyc for the Semantic Web">OpenCyc for the Semantic Web</a></li>
	<li class="page_item"><a href="http://www.cycfoundation.org/blog/?page_id=13" title="OpenCyc Web Services">OpenCyc Web Services</a></li>
	</ul>
</li>
<li class="page_item"><a href="http://www.cycfoundation.org/blog/?page_id=5" title="Videos">Videos</a></li>
<li class="page_item"><a href="http://www.cycfoundation.org/blog/?page_id=6" title="Suggested Reading">Suggested Reading</a></li>
<li class="page_item"><a href="http://www.cycfoundation.org/blog/?page_id=7" title="Join">Join</a></li>
</ul>
</div>


<div class="sidelist">
<!--
<h2>Archive</h2>
<ul>
	<li><a href='http://www.cycfoundation.org/blog/?m=201106' title='June 2011'>June 2011</a></li>
	<li><a href='http://www.cycfoundation.org/blog/?m=201102' title='February 2011'>February 2011</a></li>
	<li><a href='http://www.cycfoundation.org/blog/?m=200809' title='September 2008'>September 2008</a></li>
	<li><a href='http://www.cycfoundation.org/blog/?m=200805' title='May 2008'>May 2008</a></li>
	<li><a href='http://www.cycfoundation.org/blog/?m=200803' title='March 2008'>March 2008</a></li>
	<li><a href='http://www.cycfoundation.org/blog/?m=200801' title='January 2008'>January 2008</a></li>
	<li><a href='http://www.cycfoundation.org/blog/?m=200709' title='September 2007'>September 2007</a></li>
	<li><a href='http://www.cycfoundation.org/blog/?m=200708' title='August 2007'>August 2007</a></li>
</ul>
-->
</div>

<div class="sidelist">
<ul>
<li class="categories"><h2>Categories</h2><ul>	<li><a href="http://www.cycfoundation.org/blog/?cat=4" title="View all posts filed under Facebook">Facebook</a>
</li>
	<li><a href="http://www.cycfoundation.org/blog/?cat=3" title="View all posts filed under Natural Language">Natural Language</a>
</li>
	<li><a href="http://www.cycfoundation.org/blog/?cat=1" title="View all posts filed under Uncategorized">Uncategorized</a>
</li>
</ul></li></ul>
</div>

<div class="sidelist">
<ul>
</ul>
</div>

</div><!--#### Ende Sidebar ###--><br class="clear" />

<div id="bottom">
<!--
<div id="bottom-left">

<h2>Initiatives</h2>
<ul>
<li><a href="#">OpenCyc Concept Browser</a></li>
<li><a href="#">OpenCyc for the Semantic Web</a></li>
<li><a href="#">OpenCyc Web Services</a></li>


</ul>
</div>

<div id="bottom-mid">
<h2>Menu middle</h2>
<ul>
<li><a href="#">Cyclify Community</a></li>
<li><a href="#">Cyclopedia</a></li>
<li><a href="#">Games that Matter</a></li>
</ul>
</div>

<div id="bottom-right">
<h2>Menu right</h2>
<ul>
<li><a href="#">Item 1</a></li>
<li><a href="#">Item 2</a></li>
<li><a href="#">Item 3</a></li>
<li><a href="#">Item 4</a></li>
<li><a href="#">Item 5</a></li>
</ul>
</div> 

</div>
-->
<!-- end of bottom -->


</div>
<div id="footer">
<div>&nbsp;</div>
Copyright 2008. The Cyc Foundation. All rights reserved.
<!--
This Site runs with <a href="http://www.wordpress.de">WordPress 2.2.1</a> and the Theme <a href="http://www.koch-werkstatt.de/2007/03/24/wordpress-theme-simplicity/">Simplicity</a>
-->
<div>&nbsp;</div>
</div>
</body>
</html>


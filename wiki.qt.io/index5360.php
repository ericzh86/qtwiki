<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">

<!-- Mirrored from wiki.qt.io/index.php?title=How_to_make_a_call_or_send_a_sms_on_iOS&printable=yes by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 05 Nov 2015 13:02:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8" />
<title>How to make a call or send a sms on iOS - Qt Wiki</title>
<meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
<meta name="generator" content="MediaWiki 1.23.3" />
<meta name="robots" content="noindex,follow" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="search" type="application/opensearchdescription+xml" href="opensearch_desc.php" title="Qt Wiki (en)" />
<link rel="EditURI" type="application/rsd+xml" href="api251f.php?action=rsd" />
<link rel="alternate" type="application/atom+xml" title="Qt Wiki Atom feed" href="apidf90.php?title=Special:RecentChanges&amp;feed=atom" />
<link rel="stylesheet" href="load6077.css?debug=false&amp;lang=en&amp;modules=mediawiki.legacy.commonPrint%2Cshared%7Cmediawiki.skinning.interface%7Cmediawiki.ui.button%7Cskins.vector.styles&amp;only=styles&amp;printable=1&amp;skin=vector&amp;*" />
<meta name="ResourceLoaderDynamicStyles" content="" />
<link rel="stylesheet" href="load8b5e.css?debug=false&amp;lang=en&amp;modules=site&amp;only=styles&amp;printable=1&amp;skin=vector&amp;*" />
<style>a:lang(ar),a:lang(kk-arab),a:lang(mzn),a:lang(ps),a:lang(ur){text-decoration:none}
/* cache key: qtio_wiki:resourceloader:filter:minify-css:7:e91d7bc946738c8892a88ad5616a59ba */</style>
<script src="load041f.php?debug=false&amp;lang=en&amp;modules=startup&amp;only=scripts&amp;printable=1&amp;skin=vector&amp;*"></script>
<script>if(window.mw){
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"How_to_make_a_call_or_send_a_sms_on_iOS","wgTitle":"How to make a call or send a sms on iOS","wgCurRevisionId":12847,"wgRevisionId":12847,"wgArticleId":963,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"How_to_make_a_call_or_send_a_sms_on_iOS","wgIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[],"wgWikiEditorEnabledModules":{"toolbar":true,"dialogs":true,"hidesig":true,"preview":true,"previewDialog":false,"publish":true}});
}</script><script>if(window.mw){
mw.loader.implement("user.options",function($,jQuery){mw.user.options.set({"ccmeonemails":0,"cols":80,"date":"default","diffonly":0,"disablemail":0,"editfont":"default","editondblclick":0,"editsectiononrightclick":0,"enotifminoredits":0,"enotifrevealaddr":0,"enotifusertalkpages":1,"enotifwatchlistpages":1,"extendwatchlist":0,"fancysig":0,"forceeditsummary":0,"gender":"unknown","hideminor":0,"hidepatrolled":0,"imagesize":2,"math":1,"minordefault":0,"newpageshidepatrolled":0,"nickname":"","norollbackdiff":0,"numberheadings":0,"previewonfirst":0,"previewontop":1,"rcdays":7,"rclimit":50,"rows":25,"showhiddencats":0,"shownumberswatching":1,"showtoolbar":1,"skin":"vector","stubthreshold":0,"thumbsize":2,"underline":2,"uselivepreview":0,"usenewrc":0,"watchcreations":1,"watchdefault":1,"watchdeletion":0,"watchlistdays":3,"watchlisthideanons":0,"watchlisthidebots":0,"watchlisthideliu":0,"watchlisthideminor":0,"watchlisthideown":0,"watchlisthidepatrolled":0,"watchmoves":0,"wllimit":250,
"useeditwarning":1,"prefershttps":1,"usebetatoolbar":1,"usebetatoolbar-cgd":1,"wikieditor-preview":1,"wikieditor-publish":1,"language":"en","variant-gan":"gan","variant-iu":"iu","variant-kk":"kk","variant-ku":"ku","variant-shi":"shi","variant-sr":"sr","variant-tg":"tg","variant-uz":"uz","variant-zh":"zh","searchNs0":true,"searchNs1":false,"searchNs2":false,"searchNs3":false,"searchNs4":false,"searchNs5":false,"searchNs6":false,"searchNs7":false,"searchNs8":false,"searchNs9":false,"searchNs10":false,"searchNs11":false,"searchNs12":false,"searchNs13":false,"searchNs14":false,"searchNs15":false,"searchNs500":false,"searchNs501":false,"searchNs700":false,"searchNs701":false,"variant":"en"});},{},{});mw.loader.implement("user.tokens",function($,jQuery){mw.user.tokens.set({"editToken":"+\\","patrolToken":false,"watchToken":false});},{},{});
/* cache key: qtio_wiki:resourceloader:filter:minify-js:7:9743cb8b8019d46de5946bfe6dfa04d7 */
}</script>
<script>if(window.mw){
mw.loader.load(["mediawiki.page.startup","mediawiki.legacy.wikibits","mediawiki.legacy.ajax","skins.vector.js"]);
}</script>
<style type="text/css">/*<![CDATA[*/
.source-cpp-qt {line-height: normal;}
.source-cpp-qt li, .source-cpp-qt pre {
	line-height: normal; border: 0px none white;
}
/**
 * GeSHi Dynamically Generated Stylesheet
 * --------------------------------------
 * Dynamically generated stylesheet for cpp-qt
 * CSS class: source-cpp-qt, CSS id: 
 * GeSHi (C) 2004 - 2007 Nigel McNie, 2007 - 2008 Benny Baumann
 * (http://qbnz.com/highlighter/ and http://geshi.org/)
 * --------------------------------------
 */
.cpp-qt.source-cpp-qt .de1, .cpp-qt.source-cpp-qt .de2 {font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;font-family: monospace, monospace;}
.cpp-qt.source-cpp-qt  {font-family:monospace;}
.cpp-qt.source-cpp-qt .imp {font-weight: bold; color: red;}
.cpp-qt.source-cpp-qt li, .cpp-qt.source-cpp-qt .li1 {font-weight: normal; vertical-align:top;}
.cpp-qt.source-cpp-qt .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;}
.cpp-qt.source-cpp-qt .li2 {font-weight: bold; vertical-align:top;}
.cpp-qt.source-cpp-qt .kw1 {color: #000000; font-weight:bold;}
.cpp-qt.source-cpp-qt .kw2 {color: #0057AE;}
.cpp-qt.source-cpp-qt .kw3 {color: #2B74C7;}
.cpp-qt.source-cpp-qt .kw4 {color: #0057AE;}
.cpp-qt.source-cpp-qt .kw5 {color: #22aadd;}
.cpp-qt.source-cpp-qt .co1 {color: #888888;}
.cpp-qt.source-cpp-qt .co2 {color: #006E28;}
.cpp-qt.source-cpp-qt .coMULTI {color: #888888; font-style: italic;}
.cpp-qt.source-cpp-qt .es0 {color: #000099; font-weight: bold;}
.cpp-qt.source-cpp-qt .es1 {color: #000099; font-weight: bold;}
.cpp-qt.source-cpp-qt .es2 {color: #660099; font-weight: bold;}
.cpp-qt.source-cpp-qt .es3 {color: #660099; font-weight: bold;}
.cpp-qt.source-cpp-qt .es4 {color: #660099; font-weight: bold;}
.cpp-qt.source-cpp-qt .es5 {color: #006699; font-weight: bold;}
.cpp-qt.source-cpp-qt .br0 {color: #006E28;}
.cpp-qt.source-cpp-qt .sy0 {color: #006E28;}
.cpp-qt.source-cpp-qt .st0 {color: #BF0303;}
.cpp-qt.source-cpp-qt .nu0 {color: #B08000;}
.cpp-qt.source-cpp-qt .nu6 {color: #208080;}
.cpp-qt.source-cpp-qt .nu8 {color: #208080;}
.cpp-qt.source-cpp-qt .nu12 {color: #208080;}
.cpp-qt.source-cpp-qt .nu16 {color:#800080;}
.cpp-qt.source-cpp-qt .nu17 {color:#800080;}
.cpp-qt.source-cpp-qt .nu18 {color:#800080;}
.cpp-qt.source-cpp-qt .nu19 {color:#800080;}
.cpp-qt.source-cpp-qt .me1 {color: #2B74C7;}
.cpp-qt.source-cpp-qt .me2 {color: #2B74C7;}
.cpp-qt.source-cpp-qt .me3 {color: #2B74C7;}
.cpp-qt.source-cpp-qt .ln-xtra, .cpp-qt.source-cpp-qt li.ln-xtra, .cpp-qt.source-cpp-qt div.ln-xtra {background-color: #ffc;}
.cpp-qt.source-cpp-qt span.xtra { display:block; }

/*]]>*/
</style><!--[if lt IE 7]><style type="text/css">body{behavior:url("/skins/vector/csshover.min.htc")}</style><![endif]--></head>
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-How_to_make_a_call_or_send_a_sms_on_iOS skin-vector action-view vector-animateLayout">
		<div id="mw-page-base" class="noprint"></div>
		<div id="mw-head-base" class="noprint"></div>
		<div id="content" class="mw-body" role="main">
			<a id="top"></a>
			<div id="mw-js-message" style="display:none;"></div>
						<h1 id="firstHeading" class="firstHeading" lang="en"><span dir="auto">How to make a call or send a sms on iOS</span></h1>
						<div id="bodyContent">
								<div id="siteSub">From Qt Wiki</div>
								<div id="contentSub"></div>
												<div id="jump-to-nav" class="mw-jump">
					Jump to:					<a href="#mw-navigation">navigation</a>, 					<a href="#p-search">search</a>
				</div>
				<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><h2><span class="mw-headline" id="How_to_start_a_call_from_your_application:">How to start a call from your application:</span></h2>
<p>On iOS, there are two possibilities to start a phone call:
</p><p>1. Start a call directly
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="cpp-qt source-cpp-qt"><pre class="de1"><span class="kw5">QDesktopServices</span><span class="sy0">::</span><span class="me2">openUrl</span><span class="br0">&#40;</span><span class="kw5">QUrl</span><span class="br0">&#40;</span><span class="st0">&quot;tel://+123456789&quot;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre></div></div>
<p>2. Prompt the user before making the call
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="cpp-qt source-cpp-qt"><pre class="de1"><span class="kw5">QDesktopServices</span><span class="sy0">::</span><span class="me2">openUrl</span><span class="br0">&#40;</span><span class="kw5">QUrl</span><span class="br0">&#40;</span><span class="st0">&quot;telprompt://+123456789&quot;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre></div></div>
<h2><span class="mw-headline" id="How_to_start_a_FaceTime_call:">How to start a FaceTime call:</span></h2>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="cpp-qt source-cpp-qt"><pre class="de1"><span class="kw5">QDesktopServices</span><span class="sy0">::</span><span class="me2">openUrl</span><span class="br0">&#40;</span><span class="kw5">QUrl</span><span class="br0">&#40;</span><span class="st0">&quot;facetime://+123456789&quot;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre></div></div>
<h2><span class="mw-headline" id="How_to_send_a_SMS:">How to send a SMS:</span></h2>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="cpp-qt source-cpp-qt"><pre class="de1"><span class="kw5">QDesktopServices</span><span class="sy0">::</span><span class="me2">openUrl</span><span class="br0">&#40;</span><span class="kw5">QUrl</span><span class="br0">&#40;</span><span class="st0">&quot;sms://+123456789&quot;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre></div></div>
<p><br />
Setting the SMS content through this method cannot be done. This would require to use iOS API directly through Objective-C++
</p>
<!-- 
NewPP limit report
CPU time usage: 0.062 seconds
Real time usage: 0.062 seconds
Preprocessor visited node count: 41/1000000
Preprocessor generated node count: 96/1000000
Post‐expand include size: 0/2097152 bytes
Template argument size: 0/2097152 bytes
Highest expansion depth: 2/40
Expensive parser function count: 0/100
-->

<!-- Saved in parser cache with key qtio_wiki:pcache:idhash:963-0!*!*!!*!*!* and timestamp 20151105114504 and revision id 12847
 -->
</div>								<div class="printfooter">
				Retrieved from "<a href="indexf5c9.html?title=How_to_make_a_call_or_send_a_sms_on_iOS&amp;oldid=12847">http://wiki.qt.io/index.php?title=How_to_make_a_call_or_send_a_sms_on_iOS&amp;oldid=12847</a>"				</div>
												<div id='catlinks' class='catlinks catlinks-allhidden'></div>												<div class="visualClear"></div>
							</div>
		</div>
		<div id="mw-navigation">
			<h2>Navigation menu</h2>
			<div id="mw-head">
				<div id="p-personal" role="navigation" class="" aria-labelledby="p-personal-label">
	<h3 id="p-personal-label">Personal tools</h3>
	<ul>
<li id="pt-anonuserpage"><a href="User_10.0.113.html" class="new" title="The user page for the IP address you are editing as [.]" accesskey=".">10.0.113.70</a></li><li id="pt-anontalk"><a href="User_talk_10.0.113.html" class="new" title="Discussion about edits from this IP address [n]" accesskey="n">Talk for this IP address</a></li><li id="pt-login"><a href="index0f96.php?title=Special:QtLogin&amp;returnto=How+to+make+a+call+or+send+a+sms+on+iOS" title="You are encouraged to log in; however, it is not mandatory [o]" accesskey="o">Sign in</a></li>	</ul>
</div>
				<div id="left-navigation">
					<div id="p-namespaces" role="navigation" class="vectorTabs" aria-labelledby="p-namespaces-label">
	<h3 id="p-namespaces-label">Namespaces</h3>
	<ul>
					<li  id="ca-nstab-main" class="selected"><span><a href="How_to_make_a_call_or_send_a_sms_on_iOS.html"  title="View the content page [c]" accesskey="c">Page</a></span></li>
					<li  id="ca-talk" class="new"><span><a href="Talk_How_to_make_a_call_or_send_a_sms_on_iOS?title=Talk:How_to_make_a_call_or_send_a_sms_on_iOS&amp;action=edit&amp;redlink=1"  title="Discussion about the content page [t]" accesskey="t">Discussion</a></span></li>
			</ul>
</div>
<div id="p-variants" role="navigation" class="vectorMenu emptyPortlet" aria-labelledby="p-variants-label">
	<h3 id="mw-vector-current-variant">
		</h3>
	<h3 id="p-variants-label"><span>Variants</span><a href="#"></a></h3>
	<div class="menu">
		<ul>
					</ul>
	</div>
</div>
				</div>
				<div id="right-navigation">
					<div id="p-views" role="navigation" class="vectorTabs" aria-labelledby="p-views-label">
	<h3 id="p-views-label">Views</h3>
	<ul>
					<li id="ca-view" class="selected"><span><a href="How_to_make_a_call_or_send_a_sms_on_iOS.html" >Read</a></span></li>
					<li id="ca-viewsource"><span><a href="index1505.php?title=How_to_make_a_call_or_send_a_sms_on_iOS&amp;action=edit"  title="This page is protected.&#10;You can view its source [e]" accesskey="e">View source</a></span></li>
					<li id="ca-history" class="collapsible"><span><a href="index3b31.php?title=How_to_make_a_call_or_send_a_sms_on_iOS&amp;action=history"  title="Past revisions of this page [h]" accesskey="h">View history</a></span></li>
			</ul>
</div>
<div id="p-cactions" role="navigation" class="vectorMenu emptyPortlet" aria-labelledby="p-cactions-label">
	<h3 id="p-cactions-label"><span>Actions</span><a href="#"></a></h3>
	<div class="menu">
		<ul>
					</ul>
	</div>
</div>
<div id="p-search" role="search">
	<h3><label for="searchInput">Search</label></h3>
	<form action="http://wiki.qt.io/index.php" id="searchform">
					<div id="simpleSearch">
					<input type="search" name="search" placeholder="Search" title="Search Qt Wiki [f]" accesskey="f" id="searchInput" /><input type="hidden" value="Special:Search" name="title" /><input type="submit" name="fulltext" value="Search" title="Search the pages for this text" id="mw-searchButton" class="searchButton mw-fallbackSearchButton" /><input type="submit" name="go" value="Go" title="Go to a page with this exact name if exists" id="searchButton" class="searchButton" />		</div>
	</form>
</div>
				</div>
			</div>
			<div id="mw-panel">
					<div id="p-logo" role="banner"><a style="background-image: url(skins/common/images/wiki.png);" href="Main_Page.html"  title="Visit the main page"></a></div>
				<div class="portal" role="navigation" id='p-navigation' aria-labelledby='p-navigation-label'>
	<h3 id='p-navigation-label'>Navigation</h3>
	<div class="body">
		<ul>
			<li id="n-mainpage-description"><a href="Main_Page.html" title="Visit the main page [z]" accesskey="z">Main page</a></li>
			<li id="n-recentchanges"><a href="Special_RecentChanges.html" title="A list of recent changes in the wiki [r]" accesskey="r">Recent changes</a></li>
			<li id="n-randompage"><a href="How_to_create_columns_in_a_QML_ListView.html" title="Load a random page [x]" accesskey="x">Random page</a></li>
			<li id="n-help"><a href="https://www.mediawiki.org/wiki/Special:MyLanguage/Help:Contents" title="The place to find out">Help</a></li>
		</ul>
	</div>
</div>
<div class="portal" role="navigation" id='p-tb' aria-labelledby='p-tb-label'>
	<h3 id='p-tb-label'>Tools</h3>
	<div class="body">
		<ul>
			<li id="t-whatlinkshere"><a href="Special_WhatLinksHere/How_to_make_a_call_or_send_a_sms_on_iOS.html" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
			<li id="t-recentchangeslinked"><a href="Special_RecentChangesLinked/How_to_make_a_call_or_send_a_sms_on_iOS.html" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
			<li id="t-specialpages"><a href="Special_SpecialPages.html" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
			<li id="t-permalink"><a href="indexf5c9.html?title=How_to_make_a_call_or_send_a_sms_on_iOS&amp;oldid=12847" title="Permanent link to this revision of the page">Permanent link</a></li>
			<li id="t-info"><a href="indexd70a.php?title=How_to_make_a_call_or_send_a_sms_on_iOS&amp;action=info">Page information</a></li>
		</ul>
	</div>
</div>
			</div>
		</div>
		<div id="footer" role="contentinfo">
							<ul id="footer-info">
											<li id="footer-info-lastmod"> This page was last modified on 7 March 2015, at 23:08.</li>
											<li id="footer-info-viewcount">This page has been accessed 598 times.</li>
									</ul>
							<ul id="footer-places">
											<li id="footer-places-terms"><a href='https://developer.qtcloudservices.com/legal/terms'>Käyttöehdot</a></li>
									</ul>
										<ul id="footer-icons" class="noprint">
					<li id="footer-poweredbyico">
						<a href="http://www.mediawiki.org/"><img src="skins/common/images/poweredby_mediawiki_88x31.png" alt="Powered by MediaWiki" width="88" height="31" /></a>
					</li>
				</ul>
						<div style="clear:both"></div>
		</div>
		<script>/*<![CDATA[*/window.jQuery && jQuery.ready();/*]]>*/</script><script>if(window.mw){
mw.loader.state({"site":"loading","user":"ready","user.groups":"ready"});
}</script>
<script>if(window.mw){
mw.loader.load(["mediawiki.action.view.postEdit","mediawiki.user","mediawiki.hidpi","mediawiki.page.ready","mediawiki.searchSuggest","skins.vector.collapsibleNav"],null,true);
}</script>
<script src="load2f85.php?debug=false&amp;lang=en&amp;modules=site&amp;only=scripts&amp;printable=1&amp;skin=vector&amp;*"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54043535-2', 'auto');
  ga('send', 'pageview');

</script>
<script>if(window.mw){
mw.config.set({"wgBackendResponseTime":173});
}</script>
	</body>

<!-- Mirrored from wiki.qt.io/index.php?title=How_to_make_a_call_or_send_a_sms_on_iOS&printable=yes by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 05 Nov 2015 13:02:19 GMT -->
</html>

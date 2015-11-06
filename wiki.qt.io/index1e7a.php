<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">

<!-- Mirrored from wiki.qt.io/index.php?title=Remote_debugging_on_Blackberry_devices&oldid=15383 by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 05 Nov 2015 13:02:36 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8" />
<title>Remote debugging on Blackberry devices - Qt Wiki</title>
<meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
<meta name="generator" content="MediaWiki 1.23.3" />
<meta name="robots" content="noindex,nofollow" />
<link rel="shortcut icon" href="http://wiki.qt.io/favicon.ico" />
<link rel="search" type="application/opensearchdescription+xml" href="http://wiki.qt.io/opensearch_desc.php" title="Qt Wiki (en)" />
<link rel="EditURI" type="application/rsd+xml" href="http://wiki.qt.io/api.php?action=rsd" />
<link rel="alternate" type="application/atom+xml" title="Qt Wiki Atom feed" href="http://wiki.qt.io/index.php?title=Special:RecentChanges&amp;feed=atom" />
<link rel="stylesheet" href="http://wiki.qt.io/load.php?debug=false&amp;lang=en&amp;modules=mediawiki.legacy.commonPrint%2Cshared%7Cmediawiki.skinning.interface%7Cmediawiki.ui.button%7Cskins.vector.styles&amp;only=styles&amp;skin=vector&amp;*" />
<meta name="ResourceLoaderDynamicStyles" content="" />
<link rel="stylesheet" href="http://wiki.qt.io/load.php?debug=false&amp;lang=en&amp;modules=site&amp;only=styles&amp;skin=vector&amp;*" />
<style>a:lang(ar),a:lang(kk-arab),a:lang(mzn),a:lang(ps),a:lang(ur){text-decoration:none}
/* cache key: qtio_wiki:resourceloader:filter:minify-css:7:e91d7bc946738c8892a88ad5616a59ba */</style>
<script src="http://wiki.qt.io/load.php?debug=false&amp;lang=en&amp;modules=startup&amp;only=scripts&amp;skin=vector&amp;*"></script>
<script>if(window.mw){
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Remote_debugging_on_Blackberry_devices","wgTitle":"Remote debugging on Blackberry devices","wgCurRevisionId":15383,"wgRevisionId":15383,"wgArticleId":1907,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":["BlackBerry"],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Remote_debugging_on_Blackberry_devices","wgIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[],"wgWikiEditorEnabledModules":{"toolbar":true,"dialogs":true,"hidesig":true,"preview":true,"previewDialog":false,"publish":true}});
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
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Remote_debugging_on_Blackberry_devices skin-vector action-view vector-animateLayout">
		<div id="mw-page-base" class="noprint"></div>
		<div id="mw-head-base" class="noprint"></div>
		<div id="content" class="mw-body" role="main">
			<a id="top"></a>
			<div id="mw-js-message" style="display:none;"></div>
						<h1 id="firstHeading" class="firstHeading" lang="en"><span dir="auto">Remote debugging on Blackberry devices</span></h1>
						<div id="bodyContent">
								<div id="siteSub">From Qt Wiki</div>
								<div id="contentSub"><div id="mw-revision-info">Revision as of 10:33, 1 April 2015 by <a href="http://wiki.qt.io/index.php?title=User:Henri_Vikki&amp;action=edit&amp;redlink=1" class="new mw-userlink" title="User:Henri Vikki (page does not exist)">Henri Vikki</a>  <span class="mw-usertoollinks">(<a href="http://wiki.qt.io/index.php?title=User_talk:Henri_Vikki&amp;action=edit&amp;redlink=1" class="new" title="User talk:Henri Vikki (page does not exist)">Talk</a> | <a href="http://wiki.qt.io/Special:Contributions/Henri_Vikki" title="Special:Contributions/Henri Vikki">contribs</a>)</span></div><br />
				<div id="mw-revision-nav">(<a href="http://wiki.qt.io/index.php?title=Remote_debugging_on_Blackberry_devices&amp;diff=prev&amp;oldid=15383" title="Remote debugging on Blackberry devices">diff</a>) <a href="http://wiki.qt.io/index.php?title=Remote_debugging_on_Blackberry_devices&amp;direction=prev&amp;oldid=15383" title="Remote debugging on Blackberry devices">← Older revision</a> | Latest revision (diff) | Newer revision → (diff)</div></div>
												<div id="jump-to-nav" class="mw-jump">
					Jump to:					<a href="#mw-navigation">navigation</a>, 					<a href="#p-search">search</a>
				</div>
				<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><p><br />
</p><p><br />
This page is a how-to on how to setup remote debugging for BlackBerry devices with the command-line tools. Currently the instructions are for Linux and Mac, but should be similar on Windows.
</p><p>Please do not miss the <a rel="nofollow" class="external text" href="http://www.gnu.org/software/gdb/documentation/">the GDB manual</a> to learn how to use GDB, the command-line debugger.
</p><p>Note that Qt Creator supports remote debugging for BlackBerry devices as well, see this <a href="http://wiki.qt.io/Qt-Creator-with-BlackBerry-10" title="Qt-Creator-with-BlackBerry-10" class="mw-redirect"> article</a> for details. Qt Creator uses the same steps as outlined below, just wraps it into its IDE.
</p>
<div id="toc" class="toc"><div id="toctitle"><h2>Contents</h2></div>
<ul>
<li class="toclevel-1 tocsection-1"><a href="#Pre-requisites"><span class="tocnumber">1</span> <span class="toctext">Pre-requisites</span></a></li>
<li class="toclevel-1 tocsection-2"><a href="#Deploying_the_application"><span class="tocnumber">2</span> <span class="toctext">Deploying the application</span></a></li>
<li class="toclevel-1 tocsection-3"><a href="#Launching_the_application"><span class="tocnumber">3</span> <span class="toctext">Launching the application</span></a></li>
<li class="toclevel-1 tocsection-4"><a href="#Attach_and_setup_the_debugger"><span class="tocnumber">4</span> <span class="toctext">Attach and setup the debugger</span></a></li>
<li class="toclevel-1 tocsection-5"><a href="#Reading_symbols_from_shared_libraries_might_be_unreliable.E2.80.A6"><span class="tocnumber">5</span> <span class="toctext">Reading symbols from shared libraries might be unreliable…</span></a></li>
<li class="toclevel-1 tocsection-6"><a href="#References"><span class="tocnumber">6</span> <span class="toctext">References</span></a></li>
</ul>
</div>

<h2><span class="mw-headline" id="Pre-requisites">Pre-requisites</span></h2>
<ul>
<li> Allow SSH connections to your BlackBerry device. See the <a href="http://wiki.qt.io/BlackBerry_Hints_n_Tips" title="BlackBerry Hints n Tips"> BlackBerry Hints and Tips</a> article for more details about this.
</li>
<li> Compile your app in the debug mode
</li>
</ul>
<h2><span class="mw-headline" id="Deploying_the_application">Deploying the application</span></h2>
<p>The deployment process is the same as for just testing the application the device:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="cpp-qt source-cpp-qt"><pre class="de1"><span class="sy0">&gt;</span> blackberry<span class="sy0">-</span>nativepackager <span class="sy0">-</span>devMode <span class="sy0">-</span>package myapp.<span class="me1">bar</span> bar<span class="sy0">-</span>descriptor.<span class="me1">xml</span></pre></div></div>
<p>For PlayBook, see the steps described <a rel="nofollow" class="external text" href="http://wiki.qt.io/Building_and_Deploying_Qt_Applications_to_the_Playbook">here</a>
</p>
<h2><span class="mw-headline" id="Launching_the_application">Launching the application</span></h2>
<p>As next, you should launch the app on the device and stop it for debugging. <b>blackberry-deploy</b> will do this for you:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="cpp-qt source-cpp-qt"><pre class="de1"><span class="sy0">&gt;</span> blackberry<span class="sy0">-</span>deploy <span class="sy0">-</span>debugNative <span class="sy0">-</span>device <span class="sy0">&lt;</span>device_ip<span class="sy0">&gt;</span> <span class="sy0">-</span>password <span class="sy0">&lt;</span>device_password<span class="sy0">&gt;</span> <span class="sy0">-</span>launchApp myapp.<span class="me1">bar</span></pre></div></div>
<p>This will stop the execution early on (immediately after the process has been spawned) and wait for the debugger to attach and tell it to continue.
</p><p>The PID is in the output from blackberry-deploy listed as result::&lt;pid&gt;. You will need this &lt;pid&gt; below to attach to the process.
</p>
<h2><span class="mw-headline" id="Attach_and_setup_the_debugger">Attach and setup the debugger</span></h2>
<p>Execute
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="cpp-qt source-cpp-qt"><pre class="de1"><span class="sy0">&gt;</span> ntoarm<span class="sy0">-</span>gdb</pre></div></div>
<p>In the GDB shell, run
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="cpp-qt source-cpp-qt"><pre class="de1"><span class="br0">&#40;</span>gdb<span class="br0">&#41;</span> target qnx <span class="sy0">&lt;</span>device_IP_address<span class="sy0">&gt;:</span><span class="nu0">8000</span>
<span class="br0">&#40;</span>gdb<span class="br0">&#41;</span> attach <span class="sy0">&lt;</span>pid<span class="sy0">&gt;</span>
<span class="br0">&#40;</span>gdb<span class="br0">&#41;</span> file <span class="sy0">/</span>path<span class="sy0">/</span>to<span class="sy0">/</span>app<span class="sy0">/</span>executable<span class="sy0">/</span>on<span class="sy0">/</span>the<span class="sy0">/</span>host
<span class="br0">&#40;</span>gdb<span class="br0">&#41;</span> set solib<span class="sy0">-</span>search<span class="sy0">-</span>path $HOST_QTDIR<span class="sy0">/</span>lib<span class="sy0">:</span>$HOST_QTDIR<span class="sy0">/</span>plugins<span class="sy0">/</span>xyz<span class="sy0">/:</span>$BBNDK<span class="sy0">/</span>target_<span class="sy0">&lt;</span>version<span class="sy0">&gt;/</span>qnx6<span class="sy0">/</span>armle<span class="sy0">-</span>v7<span class="sy0">/</span>lib<span class="sy0">/:</span>$BBNDK<span class="sy0">/</span>target_<span class="sy0">&lt;</span>version<span class="sy0">&gt;/</span>qnx6<span class="sy0">/</span>
armle<span class="sy0">-</span>v7<span class="sy0">/</span>usr<span class="sy0">/</span>lib
<span class="br0">&#40;</span>gdb<span class="br0">&#41;</span> attach <span class="sy0">&lt;</span>pid<span class="sy0">&gt;</span>
<span class="br0">&#40;</span>gdb<span class="br0">&#41;</span> b main
<span class="br0">&#40;</span>gdb<span class="br0">&#41;</span> c</pre></div></div>
<p>With the last command from the above block, the app should stop in in the first call in main().
</p><p>Note: <b>$HOST_QTDIR</b> is a path on the development host machine pointing to the root folder of the Qt build for the ARM target, and <b>not</b> on the device. <b>$BBNDK</b> refers to the folder where the BlackBerry NDK is installed. It can contain multiple versions of target and host files. This is why you have to replace &lt;version&gt; with a value which is valid for your environment.
</p>
<h2><span class="mw-headline" id="Reading_symbols_from_shared_libraries_might_be_unreliable.E2.80.A6">Reading symbols from shared libraries might be unreliable…</span></h2>
<p>If versions of the target libs on the host do not match those on the target, gdb might fail to load symbols from shared libraries. You can check the status of loaded shared libraries by
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="cpp-qt source-cpp-qt"><pre class="de1"><span class="br0">&#40;</span>gdb<span class="br0">&#41;</span> info sharedlibrary</pre></div></div>
<p>You can enforce reloading of the shared libraries by:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="cpp-qt source-cpp-qt"><pre class="de1"><span class="br0">&#40;</span>gdb<span class="br0">&#41;</span> sharedlibrary</pre></div></div>
<p>TBD: add information how to download a runtime matching the device libraries.
</p>
<h2><span class="mw-headline" id="References">References</span></h2>

<!-- 
NewPP limit report
CPU time usage: 0.098 seconds
Real time usage: 0.098 seconds
Preprocessor visited node count: 77/1000000
Preprocessor generated node count: 148/1000000
Post‐expand include size: 0/2097152 bytes
Template argument size: 0/2097152 bytes
Highest expansion depth: 2/40
Expensive parser function count: 0/100
-->

<!-- Saved in parser cache with key qtio_wiki:pcache:idhash:1907-0!*!0!!en!*!* and timestamp 20151105114551 and revision id 15383
 -->
</div>								<div class="printfooter">
				Retrieved from "<a href="http://wiki.qt.io/index.php?title=Remote_debugging_on_Blackberry_devices&amp;oldid=15383">http://wiki.qt.io/index.php?title=Remote_debugging_on_Blackberry_devices&amp;oldid=15383</a>"				</div>
												<div id='catlinks' class='catlinks'><div id="mw-normal-catlinks" class="mw-normal-catlinks"><a href="http://wiki.qt.io/Special:Categories" title="Special:Categories">Category</a>: <ul><li><a href="http://wiki.qt.io/Category:BlackBerry" title="Category:BlackBerry">BlackBerry</a></li></ul></div></div>												<div class="visualClear"></div>
							</div>
		</div>
		<div id="mw-navigation">
			<h2>Navigation menu</h2>
			<div id="mw-head">
				<div id="p-personal" role="navigation" class="" aria-labelledby="p-personal-label">
	<h3 id="p-personal-label">Personal tools</h3>
	<ul>
<li id="pt-anonuserpage"><a href="http://wiki.qt.io/User:10.0.113.70" class="new" title="The user page for the IP address you are editing as [.]" accesskey=".">10.0.113.70</a></li><li id="pt-anontalk"><a href="http://wiki.qt.io/User_talk:10.0.113.70" class="new" title="Discussion about edits from this IP address [n]" accesskey="n">Talk for this IP address</a></li><li id="pt-login"><a href="http://wiki.qt.io/index.php?title=Special:QtLogin&amp;returnto=Remote+debugging+on+Blackberry+devices" title="You are encouraged to log in; however, it is not mandatory [o]" accesskey="o">Sign in</a></li>	</ul>
</div>
				<div id="left-navigation">
					<div id="p-namespaces" role="navigation" class="vectorTabs" aria-labelledby="p-namespaces-label">
	<h3 id="p-namespaces-label">Namespaces</h3>
	<ul>
					<li  id="ca-nstab-main" class="selected"><span><a href="http://wiki.qt.io/Remote_debugging_on_Blackberry_devices"  title="View the content page [c]" accesskey="c">Page</a></span></li>
					<li  id="ca-talk" class="new"><span><a href="http://wiki.qt.io/index.php?title=Talk:Remote_debugging_on_Blackberry_devices&amp;action=edit&amp;redlink=1"  title="Discussion about the content page [t]" accesskey="t">Discussion</a></span></li>
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
					<li id="ca-view" class="selected"><span><a href="http://wiki.qt.io/Remote_debugging_on_Blackberry_devices" >Read</a></span></li>
					<li id="ca-viewsource"><span><a href="http://wiki.qt.io/index.php?title=Remote_debugging_on_Blackberry_devices&amp;action=edit"  title="This page is protected.&#10;You can view its source [e]" accesskey="e">View source</a></span></li>
					<li id="ca-history" class="collapsible"><span><a href="http://wiki.qt.io/index.php?title=Remote_debugging_on_Blackberry_devices&amp;action=history"  title="Past revisions of this page [h]" accesskey="h">View history</a></span></li>
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
					<div id="p-logo" role="banner"><a style="background-image: url(http://wiki.qt.io/skins/common/images/wiki.png);" href="http://wiki.qt.io/Main_Page"  title="Visit the main page"></a></div>
				<div class="portal" role="navigation" id='p-navigation' aria-labelledby='p-navigation-label'>
	<h3 id='p-navigation-label'>Navigation</h3>
	<div class="body">
		<ul>
			<li id="n-mainpage-description"><a href="http://wiki.qt.io/Main_Page" title="Visit the main page [z]" accesskey="z">Main page</a></li>
			<li id="n-recentchanges"><a href="http://wiki.qt.io/Special:RecentChanges" title="A list of recent changes in the wiki [r]" accesskey="r">Recent changes</a></li>
			<li id="n-randompage"><a href="http://wiki.qt.io/Special:Random" title="Load a random page [x]" accesskey="x">Random page</a></li>
			<li id="n-help"><a href="https://www.mediawiki.org/wiki/Special:MyLanguage/Help:Contents" title="The place to find out">Help</a></li>
		</ul>
	</div>
</div>
<div class="portal" role="navigation" id='p-tb' aria-labelledby='p-tb-label'>
	<h3 id='p-tb-label'>Tools</h3>
	<div class="body">
		<ul>
			<li id="t-whatlinkshere"><a href="http://wiki.qt.io/Special:WhatLinksHere/Remote_debugging_on_Blackberry_devices" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
			<li id="t-recentchangeslinked"><a href="http://wiki.qt.io/Special:RecentChangesLinked/Remote_debugging_on_Blackberry_devices" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
			<li id="t-specialpages"><a href="http://wiki.qt.io/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
			<li id="t-print"><a href="http://wiki.qt.io/index.php?title=Remote_debugging_on_Blackberry_devices&amp;oldid=15383&amp;printable=yes" rel="alternate" title="Printable version of this page [p]" accesskey="p">Printable version</a></li>
			<li id="t-permalink"><a href="http://wiki.qt.io/index.php?title=Remote_debugging_on_Blackberry_devices&amp;oldid=15383" title="Permanent link to this revision of the page">Permanent link</a></li>
			<li id="t-info"><a href="http://wiki.qt.io/index.php?title=Remote_debugging_on_Blackberry_devices&amp;action=info">Page information</a></li>
		</ul>
	</div>
</div>
			</div>
		</div>
		<div id="footer" role="contentinfo">
							<ul id="footer-info">
											<li id="footer-info-lastmod"> This page was last modified on 1 April 2015, at 10:33.</li>
											<li id="footer-info-viewcount">This page has been accessed 812 times.</li>
									</ul>
							<ul id="footer-places">
											<li id="footer-places-terms"><a href='https://developer.qtcloudservices.com/legal/terms'>Käyttöehdot</a></li>
									</ul>
										<ul id="footer-icons" class="noprint">
					<li id="footer-poweredbyico">
						<a href="http://www.mediawiki.org/"><img src="http://wiki.qt.io/skins/common/images/poweredby_mediawiki_88x31.png" alt="Powered by MediaWiki" width="88" height="31" /></a>
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
<script src="http://wiki.qt.io/load.php?debug=false&amp;lang=en&amp;modules=site&amp;only=scripts&amp;skin=vector&amp;*"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54043535-2', 'auto');
  ga('send', 'pageview');

</script>
<script>if(window.mw){
mw.config.set({"wgBackendResponseTime":289});
}</script>
	</body>

<!-- Mirrored from wiki.qt.io/index.php?title=Remote_debugging_on_Blackberry_devices&oldid=15383 by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 05 Nov 2015 13:02:36 GMT -->
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">

<!-- Mirrored from wiki.qt.io/index.php?title=How-to-debug-Qt-applications-on-Android-device&action=edit by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 05 Nov 2015 13:02:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8" />
<title>View source for How-to-debug-Qt-applications-on-Android-device - Qt Wiki</title>
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
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"How-to-debug-Qt-applications-on-Android-device","wgTitle":"How-to-debug-Qt-applications-on-Android-device","wgCurRevisionId":19249,"wgRevisionId":0,"wgArticleId":1016,"wgIsArticle":false,"wgIsRedirect":false,"wgAction":"edit","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":true,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"How-to-debug-Qt-applications-on-Android-device","wgIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[],"wgWikiEditorEnabledModules":{"toolbar":true,"dialogs":true,"hidesig":true,"preview":true,"previewDialog":false,"publish":true}});
}</script><script>if(window.mw){
mw.loader.implement("user.options",function($,jQuery){mw.user.options.set({"ccmeonemails":0,"cols":80,"date":"default","diffonly":0,"disablemail":0,"editfont":"default","editondblclick":0,"editsectiononrightclick":0,"enotifminoredits":0,"enotifrevealaddr":0,"enotifusertalkpages":1,"enotifwatchlistpages":1,"extendwatchlist":0,"fancysig":0,"forceeditsummary":0,"gender":"unknown","hideminor":0,"hidepatrolled":0,"imagesize":2,"math":1,"minordefault":0,"newpageshidepatrolled":0,"nickname":"","norollbackdiff":0,"numberheadings":0,"previewonfirst":0,"previewontop":1,"rcdays":7,"rclimit":50,"rows":25,"showhiddencats":0,"shownumberswatching":1,"showtoolbar":1,"skin":"vector","stubthreshold":0,"thumbsize":2,"underline":2,"uselivepreview":0,"usenewrc":0,"watchcreations":1,"watchdefault":1,"watchdeletion":0,"watchlistdays":3,"watchlisthideanons":0,"watchlisthidebots":0,"watchlisthideliu":0,"watchlisthideminor":0,"watchlisthideown":0,"watchlisthidepatrolled":0,"watchmoves":0,"wllimit":250,
"useeditwarning":1,"prefershttps":1,"usebetatoolbar":1,"usebetatoolbar-cgd":1,"wikieditor-preview":1,"wikieditor-publish":1,"language":"en","variant-gan":"gan","variant-iu":"iu","variant-kk":"kk","variant-ku":"ku","variant-shi":"shi","variant-sr":"sr","variant-tg":"tg","variant-uz":"uz","variant-zh":"zh","searchNs0":true,"searchNs1":false,"searchNs2":false,"searchNs3":false,"searchNs4":false,"searchNs5":false,"searchNs6":false,"searchNs7":false,"searchNs8":false,"searchNs9":false,"searchNs10":false,"searchNs11":false,"searchNs12":false,"searchNs13":false,"searchNs14":false,"searchNs15":false,"searchNs500":false,"searchNs501":false,"searchNs700":false,"searchNs701":false,"variant":"en"});},{},{});mw.loader.implement("user.tokens",function($,jQuery){mw.user.tokens.set({"editToken":"+\\","patrolToken":false,"watchToken":false});},{},{});
/* cache key: qtio_wiki:resourceloader:filter:minify-js:7:9743cb8b8019d46de5946bfe6dfa04d7 */
}</script>
<script>if(window.mw){
mw.loader.load(["mediawiki.page.startup","mediawiki.legacy.wikibits","mediawiki.legacy.ajax","skins.vector.js"]);
}</script>
<!--[if lt IE 7]><style type="text/css">body{behavior:url("/skins/vector/csshover.min.htc")}</style><![endif]--></head>
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-How-to-debug-Qt-applications-on-Android-device skin-vector action-edit vector-animateLayout">
		<div id="mw-page-base" class="noprint"></div>
		<div id="mw-head-base" class="noprint"></div>
		<div id="content" class="mw-body" role="main">
			<a id="top"></a>
			<div id="mw-js-message" style="display:none;"></div>
						<h1 id="firstHeading" class="firstHeading" lang="en"><span dir="auto">View source for How-to-debug-Qt-applications-on-Android-device</span></h1>
						<div id="bodyContent">
								<div id="contentSub">← <a href="http://wiki.qt.io/How-to-debug-Qt-applications-on-Android-device" title="How-to-debug-Qt-applications-on-Android-device">How-to-debug-Qt-applications-on-Android-device</a></div>
												<div id="jump-to-nav" class="mw-jump">
					Jump to:					<a href="#mw-navigation">navigation</a>, 					<a href="#p-search">search</a>
				</div>
				<div id="mw-content-text"><p>You do not have permission to edit this page, for the following reason:
</p>
<div class="permissions-errors">
<p>The action you have requested is limited to users in one of the groups: <a href="http://wiki.qt.io/index.php?title=Qt_Wiki:Users&amp;action=edit&amp;redlink=1" class="new" title="Qt Wiki:Users (page does not exist)">Users</a>, KnowledgeBase, QtWS.
</p>
</div>
<hr />
<p>You can view and copy the source of this page:
</p><textarea readonly="" accesskey="," id="wpTextbox1" cols="80" rows="25" style="" lang="en" dir="ltr" name="wpTextbox1">[[Category:HowTo]]

This is a guide on how to enable a real on-device debugging for Qt applications on Android under Linux.
I will show you how to achive this for Samsung device, but the same steps are required for any android device, you just have to know who is a vendor of your device.

You might also need to put the device in "developer mode", that is, enable "USB debugging" in the Settings → Developer Options of the device.

See also [http://developer.android.com/tools/device.html Using Hardware Devices] .

Steps to achieve this are as follows:
1. Run

&lt;code>
lsusb | grep Samsung
&lt;/code>

if you use let's say HTC device just type HTC instead of Samsung after "grep". You will see something like this:

&lt;code>
Bus 001 Device 003: ID 04e8:689e Samsung Electronics Co., Ltd GT-S5670 [Galaxy Fit]
&lt;/code>

Strings 04e8 and 689e are of a key value to get your android device propely recognized.

2. Now make a rule 51-android.rules in the /etc/udev/rules.d/ directory. The number 51 is an information to udev so it can know in which order to load the rules. You can type some other number if you already had some rules defined, but keep in mind the order in which those rules will be applied.

3. In the file 51-android.rules input this:

&lt;code>
SUBSYSTEMS"usb", ATTRS{idVendor}"04e8″, ATTRS{idProduct}=="689e", MODE="0666″
&lt;/code>

If you take a closer look you will see that we used those bold numbers from step 2 so that we can make our rule apply only to our device. So the first string04e8 is an ID of a vendor of the device (in this case vendor is Samsung), and the second string 689e is the ID of the product (in this case product is a GT-S5670 which is a designation of Samsung Galaxy Ace mobile device). MODE="0666" just tells that the node that udev will create should be readable and writable by everyone.

4. After you have saved the file, run this command in order to reload udev's rules: &lt;code>udevadm control —reload-rules&lt;/code>

5. After you have reloaded the udev's rules, you need to restart adb. Go to the folder where you keep your android SDK. Go to the folder platform-tools inside the android SDK directory and run:

&lt;code>
adb kill-server
&lt;/code>

and after that

&lt;code>
adb start-server
&lt;/code>

NOTE: make sure that adb is in your PATH.

This will reload adb server and it should now list your device, just run adb devices and if you see something like this:

&lt;code>
List of devices attached
S5830cba628dc device
&lt;/code>

After this your device is properly recognized.
Now you are set and ready. Next time you hit Run button in Qt-Creator your app will load on your mobile device.
</textarea><div class="templatesUsed"></div><p id="mw-returnto">Return to <a href="http://wiki.qt.io/How-to-debug-Qt-applications-on-Android-device" title="How-to-debug-Qt-applications-on-Android-device">How-to-debug-Qt-applications-on-Android-device</a>.</p>
</div>								<div class="printfooter">
				Retrieved from "<a href="http://wiki.qt.io/How-to-debug-Qt-applications-on-Android-device">http://wiki.qt.io/How-to-debug-Qt-applications-on-Android-device</a>"				</div>
												<div id='catlinks' class='catlinks catlinks-allhidden'></div>												<div class="visualClear"></div>
							</div>
		</div>
		<div id="mw-navigation">
			<h2>Navigation menu</h2>
			<div id="mw-head">
				<div id="p-personal" role="navigation" class="" aria-labelledby="p-personal-label">
	<h3 id="p-personal-label">Personal tools</h3>
	<ul>
<li id="pt-anonuserpage"><a href="http://wiki.qt.io/User:10.0.113.70" class="new" title="The user page for the IP address you are editing as [.]" accesskey=".">10.0.113.70</a></li><li id="pt-anontalk"><a href="http://wiki.qt.io/User_talk:10.0.113.70" class="new" title="Discussion about edits from this IP address [n]" accesskey="n">Talk for this IP address</a></li><li id="pt-login"><a href="http://wiki.qt.io/index.php?title=Special:QtLogin&amp;returnto=How-to-debug-Qt-applications-on-Android-device" title="You are encouraged to log in; however, it is not mandatory [o]" accesskey="o">Sign in</a></li>	</ul>
</div>
				<div id="left-navigation">
					<div id="p-namespaces" role="navigation" class="vectorTabs" aria-labelledby="p-namespaces-label">
	<h3 id="p-namespaces-label">Namespaces</h3>
	<ul>
					<li  id="ca-nstab-main" class="selected"><span><a href="http://wiki.qt.io/How-to-debug-Qt-applications-on-Android-device"  title="View the content page [c]" accesskey="c">Page</a></span></li>
					<li  id="ca-talk" class="new"><span><a href="http://wiki.qt.io/index.php?title=Talk:How-to-debug-Qt-applications-on-Android-device&amp;action=edit&amp;redlink=1"  title="Discussion about the content page [t]" accesskey="t">Discussion</a></span></li>
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
					<li id="ca-view"><span><a href="http://wiki.qt.io/How-to-debug-Qt-applications-on-Android-device" >Read</a></span></li>
					<li id="ca-viewsource" class="selected"><span><a href="http://wiki.qt.io/index.php?title=How-to-debug-Qt-applications-on-Android-device&amp;action=edit"  title="This page is protected.&#10;You can view its source [e]" accesskey="e">View source</a></span></li>
					<li id="ca-history" class="collapsible"><span><a href="http://wiki.qt.io/index.php?title=How-to-debug-Qt-applications-on-Android-device&amp;action=history"  title="Past revisions of this page [h]" accesskey="h">View history</a></span></li>
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
			<li id="t-whatlinkshere"><a href="http://wiki.qt.io/Special:WhatLinksHere/How-to-debug-Qt-applications-on-Android-device" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
			<li id="t-recentchangeslinked"><a href="http://wiki.qt.io/Special:RecentChangesLinked/How-to-debug-Qt-applications-on-Android-device" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
			<li id="t-specialpages"><a href="http://wiki.qt.io/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
			<li id="t-info"><a href="http://wiki.qt.io/index.php?title=How-to-debug-Qt-applications-on-Android-device&amp;action=info">Page information</a></li>
		</ul>
	</div>
</div>
			</div>
		</div>
		<div id="footer" role="contentinfo">
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
mw.loader.load(["mediawiki.action.edit.collapsibleFooter","mediawiki.user","mediawiki.hidpi","mediawiki.page.ready","mediawiki.searchSuggest","skins.vector.collapsibleNav"],null,true);
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
mw.config.set({"wgBackendResponseTime":262});
}</script>
	</body>

<!-- Mirrored from wiki.qt.io/index.php?title=How-to-debug-Qt-applications-on-Android-device&action=edit by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 05 Nov 2015 13:02:27 GMT -->
</html>
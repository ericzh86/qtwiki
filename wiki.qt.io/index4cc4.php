<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">

<!-- Mirrored from wiki.qt.io/index.php?title=Setup_Necessitas_SDK_on_Windows&printable=yes by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 05 Nov 2015 13:02:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8" />
<title>Setup Necessitas SDK on Windows - Qt Wiki</title>
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
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Setup_Necessitas_SDK_on_Windows","wgTitle":"Setup Necessitas SDK on Windows","wgCurRevisionId":19358,"wgRevisionId":19358,"wgArticleId":1960,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":["Articles needing cleanup","Developing with Qt::Ports::Android","Pages with broken file links"],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Setup_Necessitas_SDK_on_Windows","wgIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[],"wgWikiEditorEnabledModules":{"toolbar":true,"dialogs":true,"hidesig":true,"preview":true,"previewDialog":false,"publish":true}});
}</script><script>if(window.mw){
mw.loader.implement("user.options",function($,jQuery){mw.user.options.set({"ccmeonemails":0,"cols":80,"date":"default","diffonly":0,"disablemail":0,"editfont":"default","editondblclick":0,"editsectiononrightclick":0,"enotifminoredits":0,"enotifrevealaddr":0,"enotifusertalkpages":1,"enotifwatchlistpages":1,"extendwatchlist":0,"fancysig":0,"forceeditsummary":0,"gender":"unknown","hideminor":0,"hidepatrolled":0,"imagesize":2,"math":1,"minordefault":0,"newpageshidepatrolled":0,"nickname":"","norollbackdiff":0,"numberheadings":0,"previewonfirst":0,"previewontop":1,"rcdays":7,"rclimit":50,"rows":25,"showhiddencats":0,"shownumberswatching":1,"showtoolbar":1,"skin":"vector","stubthreshold":0,"thumbsize":2,"underline":2,"uselivepreview":0,"usenewrc":0,"watchcreations":1,"watchdefault":1,"watchdeletion":0,"watchlistdays":3,"watchlisthideanons":0,"watchlisthidebots":0,"watchlisthideliu":0,"watchlisthideminor":0,"watchlisthideown":0,"watchlisthidepatrolled":0,"watchmoves":0,"wllimit":250,
"useeditwarning":1,"prefershttps":1,"usebetatoolbar":1,"usebetatoolbar-cgd":1,"wikieditor-preview":1,"wikieditor-publish":1,"language":"en","variant-gan":"gan","variant-iu":"iu","variant-kk":"kk","variant-ku":"ku","variant-shi":"shi","variant-sr":"sr","variant-tg":"tg","variant-uz":"uz","variant-zh":"zh","searchNs0":true,"searchNs1":false,"searchNs2":false,"searchNs3":false,"searchNs4":false,"searchNs5":false,"searchNs6":false,"searchNs7":false,"searchNs8":false,"searchNs9":false,"searchNs10":false,"searchNs11":false,"searchNs12":false,"searchNs13":false,"searchNs14":false,"searchNs15":false,"searchNs500":false,"searchNs501":false,"searchNs700":false,"searchNs701":false,"variant":"en"});},{},{});mw.loader.implement("user.tokens",function($,jQuery){mw.user.tokens.set({"editToken":"+\\","patrolToken":false,"watchToken":false});},{},{});
/* cache key: qtio_wiki:resourceloader:filter:minify-js:7:9743cb8b8019d46de5946bfe6dfa04d7 */
}</script>
<script>if(window.mw){
mw.loader.load(["mediawiki.page.startup","mediawiki.legacy.wikibits","mediawiki.legacy.ajax","skins.vector.js"]);
}</script>
<!--[if lt IE 7]><style type="text/css">body{behavior:url("/skins/vector/csshover.min.htc")}</style><![endif]--></head>
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Setup_Necessitas_SDK_on_Windows skin-vector action-view vector-animateLayout">
		<div id="mw-page-base" class="noprint"></div>
		<div id="mw-head-base" class="noprint"></div>
		<div id="content" class="mw-body" role="main">
			<a id="top"></a>
			<div id="mw-js-message" style="display:none;"></div>
						<h1 id="firstHeading" class="firstHeading" lang="en"><span dir="auto">Setup Necessitas SDK on Windows</span></h1>
						<div id="bodyContent">
								<div id="siteSub">From Qt Wiki</div>
								<div id="contentSub"></div>
												<div id="jump-to-nav" class="mw-jump">
					Jump to:					<a href="#mw-navigation">navigation</a>, 					<a href="#p-search">search</a>
				</div>
				<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><table style="center; margin: -1px auto 0px;border: 1px solid rgb(127, 194, 66); border-left: 10px solid rgb(127, 194, 66); background:rgb(250,250,250); width:600px">

<tr>
<td style="padding: 0.25em 0.5em;"> <b>This article may require cleanup to meet the Qt Wiki's quality standards.</b> Reason: Auto-imported from ExpressionEngine.<br /><small>Please <b><a rel="nofollow" class="external text" href="index4711.html?title=Setup_Necessitas_SDK_on_Windows&amp;action=edit">improve this article</a></b> if you can. Remove the {{cleanup}} tag and add this page to <b><a href="Updated_pages.html" title="Updated pages">Updated pages</a></b> list after it's clean.</small>
</td></tr></table>
<div id="toc" class="toc"><div id="toctitle"><h2>Contents</h2></div>
<ul>
<li class="toclevel-1 tocsection-1"><a href="#Setup_Necessitas_SDK_on_Windows"><span class="tocnumber">1</span> <span class="toctext">Setup Necessitas SDK on Windows</span></a>
<ul>
<li class="toclevel-2 tocsection-2"><a href="#Downloads_and_Installation_locations"><span class="tocnumber">1.1</span> <span class="toctext">Downloads and Installation locations</span></a></li>
<li class="toclevel-2 tocsection-7"><a href="#Configuring"><span class="tocnumber">1.2</span> <span class="toctext">Configuring</span></a></li>
<li class="toclevel-2 tocsection-10"><a href="#Compiling"><span class="tocnumber">1.3</span> <span class="toctext">Compiling</span></a></li>
<li class="toclevel-2 tocsection-16"><a href="#Appendix_:_Environment_variables"><span class="tocnumber">1.4</span> <span class="toctext">Appendix&#160;: Environment variables</span></a></li>
<li class="toclevel-2 tocsection-19"><a href="#Credits"><span class="tocnumber">1.5</span> <span class="toctext">Credits</span></a></li>
</ul>
</li>
</ul>
</div>

<h1><span class="mw-headline" id="Setup_Necessitas_SDK_on_Windows">Setup Necessitas SDK on Windows</span></h1>
<ul>
<li> <b>7 July 2011 Update</b> from the maintainer of Necessitas, Android Qt port. They are planning to install Ant and JDK with the Necessitas installer. When that happens we will no longer need to install them separately.
</li>
</ul>
<h2><span class="mw-headline" id="Downloads_and_Installation_locations">Downloads and Installation locations</span></h2>
<h3><span class="mw-headline" id="Ant">Ant</span></h3>
<p>Necessitas 0.3 Alpha included the download of Ant.
Location: C:lt;Username&gt;-ant-1.8.2
</p>
<ul>
<li> WinAnt- Windows installer for Apache Ant.
</li>
</ul>
<p>Binary: <b>winant-install-v7.exe</b>
SHA1: e02dbd46418fff6b8258ca358ab22368334e857d
Source: <a rel="nofollow" class="external free" href="http://code.google.com/p/winant/">http://code.google.com/p/winant/</a>
</p><p>Windows 32-bit platform - C:/Program Files/WinAnt/bin/ant.bat
Windows 64-bit platform - C:/Program Files (x86)/WinAnt/bin/ant.bat
</p>
<ul>
<li> Apache Ant binary distribution.
</li>
</ul>
<p>Binary: <b>apache-ant-1.8.2-bin.zip</b>
SHA1: 36416061d1ed820583b87a8a924195a681432c6d
Source: <a rel="nofollow" class="external free" href="http://ant.apache.org/bindownload.cgi">http://ant.apache.org/bindownload.cgi</a>
</p>
<h3><span class="mw-headline" id="JDK_.28Java_Development_Kit.29_and_JRE_.28Java_Runtime_Environment.29">JDK (Java Development Kit) and JRE (Java Runtime Environment)</span></h3>
<ul>
<li> JDK (Java Development Kit)
</li>
</ul>
<p>Binary: <b>jdk-7u1-windows-i586.exe</b>
SHA1: ed434b8bc132a5bfda031428b26daf7b8331ecb9
Source: <a rel="nofollow" class="external free" href="http://www.oracle.com/technetwork/java/javase/downloads/index.html">http://www.oracle.com/technetwork/java/javase/downloads/index.html</a>
"Java Platform, Standard Edition" -&gt; "JDK"-&gt; "Download" button.
Choose jdk-7u1-windows-i586.exe in the list and install.
</p>
<ul>
<li> JRE (Java Runtime Environment)
</li>
</ul>
<p>Binary: <b>jre-7u1-windows-i586.exe</b>
SHA1: 26ec209d66c3b21ef3c7b6c1f3b9fa52466420ed
Source: <a rel="nofollow" class="external free" href="http://www.oracle.com/technetwork/java/javase/downloads/index.html">http://www.oracle.com/technetwork/java/javase/downloads/index.html</a>
"Java Platform, Standard Edition" -&gt; "JRE"-&gt; "Download" button.
Choose jre-7u1-windows-i586.exe in the list and install.
</p><p>Windows 32-bit platform - C:Files\Javawith subdirectories jdk1.7.0_01 and jre7
Windows 64-bit platform - C:Files (x86)with subdirectories jdk1.7.0_01 and jre7
</p>
<h3><span class="mw-headline" id="Necessitas_SDK_Windows_online_installer.">Necessitas SDK Windows online installer.</span></h3>
<p>Release date: Saturday, 29 October 2011.
Version: 0.3 Alpha
Binary: <b>necessitas-0.3-online-sdk-installer-windows.exe</b>
SHA1: 0f7578946bd43f5a66fc5ffa8120a8eed6c98425
Source: <a rel="nofollow" class="external free" href="https://sourceforge.net/projects/necessitas/files/">https://sourceforge.net/projects/necessitas/files/</a>
</p><p>Download the Windows online installer.
Use the default install location suggested by the installer: C:lt;Username&gt;
</p>
<h3><span class="mw-headline" id="Ministro_Service">Ministro Service</span></h3>
<p>Binary: <b>Ministro II.apk</b>
SHA1: 82520c34339e405161c36486f7d6e39dcd79ef27
Source: <a rel="nofollow" class="external free" href="https://sourceforge.net/projects/ministro.necessitas.p/files/">https://sourceforge.net/projects/ministro.necessitas.p/files/</a>
</p><p>Binary: <b>MinistroConfigurationTool II.apk</b>
SHA1: 94a90ca876cc25f05b786ec10cd09a5543d14d6b
Source: <a rel="nofollow" class="external free" href="https://sourceforge.net/projects/ministro.necessitas.p/files/">https://sourceforge.net/projects/ministro.necessitas.p/files/</a>
</p><p>Location: C:_test\Ministro II.apk
</p>
<ul>
<li> Hint: Make the whole directory write access and not read only for all of the above! Unblock Ministro.
</li>
</ul>
<h2><span class="mw-headline" id="Configuring">Configuring</span></h2>
<h3><span class="mw-headline" id="Create_AVD_.28Android_Virtual_Device.29">Create AVD (Android Virtual Device)</span></h3>
<p>C:lt;Username&gt;-sdk-windowsSDK-Manager.exe
A popup dialog appears which refreshes the available devices. Ignore it or cancel.
NEVER DO Update and install&#160;: to get other virtual devices. Stick to the ones Necessitas provides.
</p><p>On the left you have a selection list.
Installed packages
It shows you about 8 entries with different versions of Android SDK platforms.
Virtual devices
Here you create your AVD
Click the button new. Give it a name e.g. Android2.3.3. Choose a target e.g. Android 2.3.3 – API level 10. Size&#160;: 1024 mb. Snapshot enabled. Skin&#160;: HVGA
Press the button Create AVD and the name you choose appears in the list.
</p>
<h3><span class="mw-headline" id="Android_Qt_Creator_settings">Android Qt Creator settings</span></h3>
<p><a href="index8124.php?title=Special:Upload&amp;wpDestFile=Http://dl.dropbox.com/u/33544011/necessitas01.png" class="new" title="File:Http://dl.dropbox.com/u/33544011/necessitas01.png">1</a>
<a href="index231b.php?title=Special:Upload&amp;wpDestFile=Http://dl.dropbox.com/u/33544011/necessitas02.png" class="new" title="File:Http://dl.dropbox.com/u/33544011/necessitas02.png">2</a>
</p><p>You only have to set the path to ant.bat. The other fields are filled in automatically.
You can see your AVD target you made earlier.
</p>
<h2><span class="mw-headline" id="Compiling">Compiling</span></h2>
<h3><span class="mw-headline" id="Debug_version">Debug version</span></h3>
<p>In Qt Creator select the build …Arm v 5 Debug and start using the green arrow bug button "Start debugging" or F5. This will make the libYOURPROGRAMNAME.so which you will need later for the next step. It is possible that Qt Creator cannot get through, but that's no problem. The most important is you have the .so file.
</p><p><a href="indexa190.php?title=Special:Upload&amp;wpDestFile=Http://dl.dropbox.com/u/33544011/necessitas03.png" class="new" title="File:Http://dl.dropbox.com/u/33544011/necessitas03.png">3</a>
</p>
<h3><span class="mw-headline" id="Build_version">Build version</span></h3>
<p>The next step is to choose for build …Arm v 5 Release.
</p><p><a href="index5e82.php?title=Special:Upload&amp;wpDestFile=Http://dl.dropbox.com/u/33544011/necessitas04.png" class="new" title="File:Http://dl.dropbox.com/u/33544011/necessitas04.png">4</a>
</p>
<h4><span class="mw-headline" id="On_Tab_Manifest">On Tab Manifest</span></h4>
<p>choose for Android 10
</p>
<h4><span class="mw-headline" id="On_Tab_Permissions">On Tab Permissions</span></h4>
<p>android.permission.INTERNET
android.permission.WRITE_EXTERNAL_STORAGE
</p>
<h4><span class="mw-headline" id="On_Tab_Libraries">On Tab Libraries</span></h4>
<p>Click the button "Read information from application (must be compiled)"
This will read the necessary libraries like libqtCore.so.
You don't have to click the libraries, even if the checkboxes are not checked it will work…
</p><p>Check the option&#160;: "Install Ministro system wide qt shared libraries installer" and click the button "Choose apk" to point to the Ministro-2.0.apk file you installed earlier.
</p><p>Click Run or CTRL + R
Then you see your app icon, it launches and wants to download files (only the first time).
Your app will start automatically now.
</p><p>Have fun!
</p>
<h2><span class="mw-headline" id="Appendix_:_Environment_variables">Appendix&#160;: Environment variables</span></h2>
<h3><span class="mw-headline" id="User_variables">User variables</span></h3>
<p>ANT_HOME
C:Files (x86);
C:lt;Username&gt;-ant-1.8.2; (Downloaded automatically on Necessitas SDK 0.3 Alpha release.)
</p><p>JAVA_HOME
C:Files\Java\jdk1.7.0_01;
</p><p>PATH
C:Files (x86);C:lt;Username&gt;-sdk-windows\tools;C:lt;Username&gt;
</p><p>PYTHONHOME
C:/Users/&lt;Username&gt;/necessitas/gdb-7.2/python;
</p>
<h3><span class="mw-headline" id="System_variables">System variables</span></h3>
<p>CLASSPATH
C:Files (x86)6\lib\ext\QTJava.zip
</p><p>Path (Related Necessitas SDK paths.)
C:.7.4\mingw\bin C:lt;Username&gt;-sdk-windows\tools;
</p><p>PATHEXT
.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;
</p><p>QTJAVA
C:Files (x86)6\lib\ext\QTJava.zip;
</p>
<h2><span class="mw-headline" id="Credits">Credits</span></h2>
<p>Don't know why "Redirect to a more accurate wiki page" does not inherit the article history.
Thanks to all contributors from <a rel="nofollow" class="external text" href="http://developer.qt.nokia.com/wiki/diff/How_to_use_Necessitas_Emulator_on_Windows_7">How_to_use_Necessitas_Emulator_on_Windows_7</a> page.
</p>
<!-- 
NewPP limit report
CPU time usage: 0.027 seconds
Real time usage: 0.033 seconds
Preprocessor visited node count: 93/1000000
Preprocessor generated node count: 152/1000000
Post‐expand include size: 1332/2097152 bytes
Template argument size: 428/2097152 bytes
Highest expansion depth: 5/40
Expensive parser function count: 0/100
-->

<!-- Saved in parser cache with key qtio_wiki:pcache:idhash:1960-0!*!0!!en!2!* and timestamp 20151105114455 and revision id 19358
 -->
</div>								<div class="printfooter">
				Retrieved from "<a href="index6d0f.html?title=Setup_Necessitas_SDK_on_Windows&amp;oldid=19358">http://wiki.qt.io/index.php?title=Setup_Necessitas_SDK_on_Windows&amp;oldid=19358</a>"				</div>
												<div id='catlinks' class='catlinks'><div id="mw-normal-catlinks" class="mw-normal-catlinks"><a href="Special_Categories.html" title="Special:Categories">Categories</a>: <ul><li><a href="Category_Articles_needing_cleanup.html" title="Category:Articles needing cleanup">Articles needing cleanup</a></li><li><a href="Category_Developing_with_Qt__Ports__Android.html?title=Category:Developing_with_Qt::Ports::Android&amp;action=edit&amp;redlink=1" class="new" title="Category:Developing with Qt::Ports::Android (page does not exist)">Developing with Qt::Ports::Android</a></li><li><a href="Category_Pages_with_broken_file_links.html?title=Category:Pages_with_broken_file_links&amp;action=edit&amp;redlink=1" class="new" title="Category:Pages with broken file links (page does not exist)">Pages with broken file links</a></li></ul></div></div>												<div class="visualClear"></div>
							</div>
		</div>
		<div id="mw-navigation">
			<h2>Navigation menu</h2>
			<div id="mw-head">
				<div id="p-personal" role="navigation" class="" aria-labelledby="p-personal-label">
	<h3 id="p-personal-label">Personal tools</h3>
	<ul>
<li id="pt-anonuserpage"><a href="User_10.0.113.html" class="new" title="The user page for the IP address you are editing as [.]" accesskey=".">10.0.113.70</a></li><li id="pt-anontalk"><a href="User_talk_10.0.113.html" class="new" title="Discussion about edits from this IP address [n]" accesskey="n">Talk for this IP address</a></li><li id="pt-login"><a href="indexe0a5.php?title=Special:QtLogin&amp;returnto=Setup+Necessitas+SDK+on+Windows" title="You are encouraged to log in; however, it is not mandatory [o]" accesskey="o">Sign in</a></li>	</ul>
</div>
				<div id="left-navigation">
					<div id="p-namespaces" role="navigation" class="vectorTabs" aria-labelledby="p-namespaces-label">
	<h3 id="p-namespaces-label">Namespaces</h3>
	<ul>
					<li  id="ca-nstab-main" class="selected"><span><a href="Setup_Necessitas_SDK_on_Windows.html"  title="View the content page [c]" accesskey="c">Page</a></span></li>
					<li  id="ca-talk" class="new"><span><a href="index1b2d.php?title=Talk:Setup_Necessitas_SDK_on_Windows&amp;action=edit&amp;redlink=1"  title="Discussion about the content page [t]" accesskey="t">Discussion</a></span></li>
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
					<li id="ca-view" class="selected"><span><a href="Setup_Necessitas_SDK_on_Windows.html" >Read</a></span></li>
					<li id="ca-viewsource"><span><a href="index4711.html?title=Setup_Necessitas_SDK_on_Windows&amp;action=edit"  title="This page is protected.&#10;You can view its source [e]" accesskey="e">View source</a></span></li>
					<li id="ca-history" class="collapsible"><span><a href="indexff74.html?title=Setup_Necessitas_SDK_on_Windows&amp;action=history"  title="Past revisions of this page [h]" accesskey="h">View history</a></span></li>
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
			<li id="t-whatlinkshere"><a href="Special_WhatLinksHere/Setup_Necessitas_SDK_on_Windows.html" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
			<li id="t-recentchangeslinked"><a href="Special_RecentChangesLinked/Setup_Necessitas_SDK_on_Windows" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
			<li id="t-specialpages"><a href="Special_SpecialPages.html" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
			<li id="t-permalink"><a href="index6d0f.html?title=Setup_Necessitas_SDK_on_Windows&amp;oldid=19358" title="Permanent link to this revision of the page">Permanent link</a></li>
			<li id="t-info"><a href="index4808.html?title=Setup_Necessitas_SDK_on_Windows&amp;action=info">Page information</a></li>
		</ul>
	</div>
</div>
			</div>
		</div>
		<div id="footer" role="contentinfo">
							<ul id="footer-info">
											<li id="footer-info-lastmod"> This page was last modified on 23 August 2015, at 13:26.</li>
											<li id="footer-info-viewcount">This page has been accessed 1,766 times.</li>
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
mw.config.set({"wgBackendResponseTime":384});
}</script>
	</body>

<!-- Mirrored from wiki.qt.io/index.php?title=Setup_Necessitas_SDK_on_Windows&printable=yes by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 05 Nov 2015 13:02:16 GMT -->
</html>

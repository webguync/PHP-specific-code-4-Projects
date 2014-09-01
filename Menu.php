<?php
$menu = <<< MENU
<ul id="navlist">
<li class="first"><a href="/About_Me.php" title="My background and Interest">About Me</a></li>
<li><a href="/Skillset.php" title="a list of web related technologies">Skillset</a></li>
<li><a href="/Hireme.php" title="I can do wonders for your web
presence">Hire Me</a></li>
<li><a href="/Portfolio.php"
title="websites,graphics,newsletters">Portfolio</a></li>
<li><a href="/Contact.php"title="how to get in touch with me">Contact</a></li>
<li><a href="/Resume.php"title="Download my resume in multiple formats">R&eacute;sum&eacute;</a></li>
/*<li><a href="/wordpress" title="the
blog of Bruce Gilbert">Blog</a></li>*/
<li class="last"><a href="RSS.php"title="Syndication that is really
simple">RSS</a></li>
</ul>
MENU;
$lines = split("\n", $menu);
foreach ($lines as $line) {
$current = false;
preg_match('/href="([^"]+)"/', $line, $url);
if (substr($_SERVER["REQUEST_URI"], 0, 5) == substr($url[1], 0, 5)) {
$line = str_replace('<a h', '<a id="current" h', $line);
}
echo $line."\n";
}

?>
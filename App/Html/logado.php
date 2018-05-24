<?php 
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['nome'])){

	
	

} else {
	echo "<h4> Você não tem acesso a essa página, clique para fazer <a href='../../public/index.php'> Login</a>?</h4>";

	die();
 
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>GrassyGreen</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,200,500,600,700,800,300" rel="stylesheet" />
	<link href="default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<style>

@charset 'UTF-8';

@font-face
{
	font-family: 'FontAwesome';
	src: url('fonts/fontawesome-webfont.eot?v=3.0.1');
	src: url('fonts/fontawesome-webfont.eot?#iefix&v=3.0.1') format('embedded-opentype'),
	     url('fonts/fontawesome-webfont.woff?v=3.0.1') format('woff'),
	     url('fonts/fontawesome-webfont.ttf?v=3.0.1') format('truetype'),
	     url('fonts/fontawesome-webfont.svg#FontAwesome') format('svg');
	font-weight: normal;
	font-style: normal;
}

@font-face
{
	font-family: 'Font-Awesome-Social';
	src: url('fonts/fontawesome-social-webfont.eot');
	src: url('fonts/fontawesome-social-webfont.eot?#iefix') format('embedded-opentype'),
	     url('fonts/fontawesome-social-webfont.woff') format('woff'),
		 url('fonts/fontawesome-social-webfont.ttf') format('truetype'),
		 url('fonts/fontawesome-social-webfont.svg#Font-Awesome-More') format('svg');
	font-weight: normal;
	font-style: normal;
}

/*********************************************************************************/
/* Icons                                                                         */
/*********************************************************************************/

	/*
		Powered by:
		
		Font Awesome (http://fortawesome.github.com/Font-Awesome/)
		Font Awesome More (http://gregoryloucas.github.com/Font-Awesome-More/)
	*/

	.icon
	{
		text-decoration: none;
	}

		.icon:before
		{
			font-size: 1.25em;
			text-decoration: none;
			font-family: FontAwesome;
			font-weight: normal;
			font-style: normal;
			-webkit-text-rendering: optimizeLegibility;
			-moz-text-rendering: optimizeLegibility;
			-ms-text-rendering: optimizeLegibility;
			-o-text-rendering: optimizeLegibility;
			text-rendering: optimizeLegibility;
			-webkit-font-smoothing: antialiased;
			-moz-font-smoothing: antialiased;
			-ms-font-smoothing: antialiased;
			-o-font-smoothing: antialiased;
			font-smoothing: antialiased;
			-webkit-font-feature-settings: "liga" 1, "dlig" 1;
			-moz-font-feature-settings: "liga=1, dlig=1";
			-ms-font-feature-settings: "liga" 1, "dlig" 1;
			-o-font-feature-settings: "liga" 1, "dlig" 1;
			font-feature-settings: "liga" 1, "dlig" 1;
		}

		.icon-glass:before                { content: "\f000"; }
		.icon-music:before                { content: "\f001"; }
		.icon-search:before               { content: "\f002"; }
		.icon-envelope:before             { content: "\f003"; }
		.icon-heart:before                { content: "\f004"; }
		.icon-star:before                 { content: "\f005"; }
		.icon-star-empty:before           { content: "\f006"; }
		.icon-user:before                 { content: "\f007"; }
		.icon-film:before                 { content: "\f008"; }
		.icon-th-large:before             { content: "\f009"; }
		.icon-th:before                   { content: "\f00a"; }
		.icon-th-list:before              { content: "\f00b"; }
		.icon-ok:before                   { content: "\f00c"; }
		.icon-remove:before               { content: "\f00d"; }
		.icon-zoom-in:before              { content: "\f00e"; }

		.icon-zoom-out:before             { content: "\f010"; }
		.icon-off:before                  { content: "\f011"; }
		.icon-signal:before               { content: "\f012"; }
		.icon-cog:before                  { content: "\f013"; }
		.icon-trash:before                { content: "\f014"; }
		.icon-home:before                 { content: "\f015"; }
		.icon-file:before                 { content: "\f016"; }
		.icon-time:before                 { content: "\f017"; }
		.icon-road:before                 { content: "\f018"; }
		.icon-download-alt:before         { content: "\f019"; }
		.icon-download:before             { content: "\f01a"; }
		.icon-upload:before               { content: "\f01b"; }
		.icon-inbox:before                { content: "\f01c"; }
		.icon-play-circle:before          { content: "\f01d"; }
		.icon-repeat:before               { content: "\f01e"; }

		/* \f020 doesn't work in Safari. all shifted one down */
		.icon-refresh:before              { content: "\f021"; }
		.icon-list-alt:before             { content: "\f022"; }
		.icon-lock:before                 { content: "\f023"; }
		.icon-flag:before                 { content: "\f024"; }
		.icon-headphones:before           { content: "\f025"; }
		.icon-volume-off:before           { content: "\f026"; }
		.icon-volume-down:before          { content: "\f027"; }
		.icon-volume-up:before            { content: "\f028"; }
		.icon-qrcode:before               { content: "\f029"; }
		.icon-barcode:before              { content: "\f02a"; }
		.icon-tag:before                  { content: "\f02b"; }
		.icon-tags:before                 { content: "\f02c"; }
		.icon-book:before                 { content: "\f02d"; }
		.icon-bookmark:before             { content: "\f02e"; }
		.icon-print:before                { content: "\f02f"; }
.icon-camera:before               { content: "\f030"; }
		.icon-font:before                 { content: "\f031"; }
		.icon-bold:before                 { content: "\f032"; }
		.icon-italic:before               { content: "\f033"; }
		.icon-text-height:before          { content: "\f034"; }
		.icon-text-width:before           { content: "\f035"; }
		.icon-align-left:before           { content: "\f036"; }
		.icon-align-center:before         { content: "\f037"; }
		.icon-align-right:before          { content: "\f038"; }
		.icon-align-justify:before        { content: "\f039"; }
		.icon-list:before                 { content: "\f03a"; }
		.icon-indent-left:before          { content: "\f03b"; }
		.icon-indent-right:before         { content: "\f03c"; }
		.icon-facetime-video:before       { content: "\f03d"; }
		.icon-picture:before              { content: "\f03e"; }

		.icon-pencil:before               { content: "\f040"; }
		.icon-map-marker:before           { content: "\f041"; }
		.icon-adjust:before               { content: "\f042"; }
		.icon-tint:before                 { content: "\f043"; }
		.icon-edit:before                 { content: "\f044"; }
		.icon-share:before                { content: "\f045"; }
		.icon-check:before                { content: "\f046"; }
		.icon-move:before                 { content: "\f047"; }
		.icon-step-backward:before        { content: "\f048"; }
		.icon-fast-backward:before        { content: "\f049"; }
		.icon-backward:before             { content: "\f04a"; }
		.icon-play:before                 { content: "\f04b"; }
		.icon-pause:before                { content: "\f04c"; }
		.icon-stop:before                 { content: "\f04d"; }
		.icon-forward:before              { content: "\f04e"; }

		.icon-fast-forward:before         { content: "\f050"; }
		.icon-step-forward:before         { content: "\f051"; }
		.icon-eject:before                { content: "\f052"; }
		.icon-chevron-left:before         { content: "\f053"; }
		.icon-chevron-right:before        { content: "\f054"; }
		.icon-plus-sign:before            { content: "\f055"; }
		.icon-minus-sign:before           { content: "\f056"; }
		.icon-remove-sign:before          { content: "\f057"; }
		.icon-ok-sign:before              { content: "\f058"; }
		.icon-question-sign:before        { content: "\f059"; }
		.icon-info-sign:before            { content: "\f05a"; }
		.icon-screenshot:before           { content: "\f05b"; }
		.icon-remove-circle:before        { content: "\f05c"; }
		.icon-ok-circle:before            { content: "\f05d"; }
		.icon-ban-circle:before           { content: "\f05e"; }

		.icon-arrow-left:before           { content: "\f060"; }
		.icon-arrow-right:before          { content: "\f061"; }
		.icon-arrow-up:before             { content: "\f062"; }
		.icon-arrow-down:before           { content: "\f063"; }
		.icon-share-alt:before            { content: "\f064"; }
		.icon-resize-full:before          { content: "\f065"; }
		.icon-resize-small:before         { content: "\f066"; }
		.icon-plus:before                 { content: "\f067"; }
		.icon-minus:before                { content: "\f068"; }
		.icon-asterisk:before             { content: "\f069"; }
		.icon-exclamation-sign:before     { content: "\f06a"; }
		.icon-gift:before                 { content: "\f06b"; }
		.icon-leaf:before                 { content: "\f06c"; }
		.icon-fire:before                 { content: "\f06d"; }
		.icon-eye-open:before             { content: "\f06e"; }

		.icon-eye-close:before            { content: "\f070"; }
		.icon-warning-sign:before         { content: "\f071"; }
		.icon-plane:before                { content: "\f072"; }
		.icon-calendar:before             { content: "\f073"; }
		.icon-random:before               { content: "\f074"; }
		.icon-comment:before              { content: "\f075"; }
		.icon-magnet:before               { content: "\f076"; }
		.icon-chevron-up:before           { content: "\f077"; }
		.icon-chevron-down:before         { content: "\f078"; }
		.icon-retweet:before              { content: "\f079"; }
		.icon-shopping-cart:before        { content: "\f07a"; }
		.icon-folder-close:before         { content: "\f07b"; }
		.icon-folder-open:before          { content: "\f07c"; }
		.icon-resize-vertical:before      { content: "\f07d"; }
		.icon-resize-horizontal:before    { content: "\f07e"; }

		.icon-bar-chart:before            { content: "\f080"; }
		.icon-twitter-sign:before         { content: "\f081"; }
		.icon-facebook-sign:before        { content: "\f082"; }
		.icon-camera-retro:before         { content: "\f083"; }
		.icon-key:before                  { content: "\f084"; }
		.icon-cogs:before                 { content: "\f085"; }
		.icon-comments:before             { content: "\f086"; }
		.icon-thumbs-up:before            { content: "\f087"; }
		.icon-thumbs-down:before          { content: "\f088"; }
		.icon-star-half:before            { content: "\f089"; }
		.icon-heart-empty:before          { content: "\f08a"; }
		.icon-signout:before              { content: "\f08b"; }
		.icon-linkedin-sign:before        { content: "\f08c"; }
		.icon-pushpin:before              { content: "\f08d"; }
		.icon-external-link:before        { content: "\f08e"; }

		.icon-signin:before               { content: "\f090"; }
		.icon-trophy:before               { content: "\f091"; }
		.icon-github-sign:before          { content: "\f092"; }
		.icon-upload-alt:before           { content: "\f093"; }
		.icon-lemon:before                { content: "\f094"; }
		.icon-phone:before                { content: "\f095"; }
		.icon-check-empty:before          { content: "\f096"; }
		.icon-bookmark-empty:before       { content: "\f097"; }
		.icon-phone-sign:before           { content: "\f098"; }
		.icon-twitter:before              { content: "\f099"; }
		.icon-facebook:before             { content: "\f09a"; }
		.icon-github:before               { content: "\f09b"; }
		.icon-unlock:before               { content: "\f09c"; }
		.icon-credit-card:before          { content: "\f09d"; }
		.icon-rss:before                  { content: "\f09e"; }

		.icon-hdd:before                  { content: "\f0a0"; }
		.icon-bullhorn:before             { content: "\f0a1"; }
		.icon-bell:before                 { content: "\f0a2"; }
		.icon-certificate:before          { content: "\f0a3"; }
		.icon-hand-right:before           { content: "\f0a4"; }
		.icon-hand-left:before            { content: "\f0a5"; }
		.icon-hand-up:before              { content: "\f0a6"; }
		.icon-hand-down:before            { content: "\f0a7"; }
		.icon-circle-arrow-left:before    { content: "\f0a8"; }
		.icon-circle-arrow-right:before   { content: "\f0a9"; }
		.icon-circle-arrow-up:before      { content: "\f0aa"; }
		.icon-circle-arrow-down:before    { content: "\f0ab"; }
		.icon-globe:before                { content: "\f0ac"; }
		.icon-wrench:before               { content: "\f0ad"; }
		.icon-tasks:before                { content: "\f0ae"; }

		.icon-filter:before               { content: "\f0b0"; }
		.icon-briefcase:before            { content: "\f0b1"; }
		.icon-fullscreen:before           { content: "\f0b2"; }

		.icon-group:before                { content: "\f0c0"; }
		.icon-link:before                 { content: "\f0c1"; }
		.icon-cloud:before                { content: "\f0c2"; }
		.icon-beaker:before               { content: "\f0c3"; }
		.icon-cut:before                  { content: "\f0c4"; }
		.icon-copy:before                 { content: "\f0c5"; }
		.icon-paper-clip:before           { content: "\f0c6"; }
		.icon-save:before                 { content: "\f0c7"; }
		.icon-sign-blank:before           { content: "\f0c8"; }
		.icon-reorder:before              { content: "\f0c9"; }
		.icon-list-ul:before              { content: "\f0ca"; }
		.icon-list-ol:before              { content: "\f0cb"; }
		.icon-strikethrough:before        { content: "\f0cc"; }
		.icon-underline:before            { content: "\f0cd"; }
		.icon-table:before                { content: "\f0ce"; }

		.icon-magic:before                { content: "\f0d0"; }
		.icon-truck:before                { content: "\f0d1"; }
		.icon-pinterest:before            { content: "\f0d2"; }
		.icon-pinterest-sign:before       { content: "\f0d3"; }
		.icon-google-plus-sign:before     { content: "\f0d4"; }
		.icon-google-plus:before          { content: "\f0d5"; }
		.icon-money:before                { content: "\f0d6"; }
		.icon-caret-down:before           { content: "\f0d7"; }
		.icon-caret-up:before             { content: "\f0d8"; }
		.icon-caret-left:before           { content: "\f0d9"; }
		.icon-caret-right:before          { content: "\f0da"; }
		.icon-columns:before              { content: "\f0db"; }
		.icon-sort:before                 { content: "\f0dc"; }
		.icon-sort-down:before            { content: "\f0dd"; }
		.icon-sort-up:before              { content: "\f0de"; }

		.icon-envelope-alt:before         { content: "\f0e0"; }
		.icon-linkedin:before             { content: "\f0e1"; }
		.icon-undo:before                 { content: "\f0e2"; }
		.icon-legal:before                { content: "\f0e3"; }
		.icon-dashboard:before            { content: "\f0e4"; }
		.icon-comment-alt:before          { content: "\f0e5"; }
		.icon-comments-alt:before         { content: "\f0e6"; }
		.icon-bolt:before                 { content: "\f0e7"; }
		.icon-sitemap:before              { content: "\f0e8"; }
		.icon-umbrella:before             { content: "\f0e9"; }
		.icon-paste:before                { content: "\f0ea"; }
		.icon-lightbulb:before            { content: "\f0eb"; }
		.icon-exchange:before             { content: "\f0ec"; }
		.icon-cloud-download:before       { content: "\f0ed"; }
		.icon-cloud-upload:before         { content: "\f0ee"; }

		.icon-user-md:before              { content: "\f0f0"; }
		.icon-stethoscope:before          { content: "\f0f1"; }
		.icon-suitcase:before             { content: "\f0f2"; }
		.icon-bell-alt:before             { content: "\f0f3"; }
		.icon-coffee:before               { content: "\f0f4"; }
		.icon-food:before                 { content: "\f0f5"; }
		.icon-file-alt:before             { content: "\f0f6"; }
		.icon-building:before             { content: "\f0f7"; }
		.icon-hospital:before             { content: "\f0f8"; }
		.icon-ambulance:before            { content: "\f0f9"; }
		.icon-medkit:before               { content: "\f0fa"; }
		.icon-fighter-jet:before          { content: "\f0fb"; }
		.icon-beer:before                 { content: "\f0fc"; }
		.icon-h-sign:before               { content: "\f0fd"; }
		.icon-plus-sign-alt:before        { content: "\f0fe"; }

		.icon-double-angle-left:before    { content: "\f100"; }
		.icon-double-angle-right:before   { content: "\f101"; }
		.icon-double-angle-up:before      { content: "\f102"; }
		.icon-double-angle-down:before    { content: "\f103"; }
		.icon-angle-left:before           { content: "\f104"; }
		.icon-angle-right:before          { content: "\f105"; }
		.icon-angle-up:before             { content: "\f106"; }
		.icon-angle-down:before           { content: "\f107"; }
		.icon-desktop:before              { content: "\f108"; }
		.icon-laptop:before               { content: "\f109"; }
		.icon-tablet:before               { content: "\f10a"; }
		.icon-mobile-phone:before         { content: "\f10b"; }
		.icon-circle-blank:before         { content: "\f10c"; }
		.icon-quote-left:before           { content: "\f10d"; }
		.icon-quote-right:before          { content: "\f10e"; }

		.icon-spinner:before              { content: "\f110"; }
		.icon-circle:before               { content: "\f111"; }
		.icon-reply:before                { content: "\f112"; }
		.icon-github-alt:before           { content: "\f113"; }
		.icon-folder-close-alt:before     { content: "\f114"; }
		.icon-folder-open-alt:before      { content: "\f115"; }

		.icon-blogger-sign:before,.icon-blogger:before,.icon-delicious:before,.icon-dribbble-sign:before,.icon-dribbble:before,.icon-dropbox:before,.icon-drupal:before,.icon-evernote-sign:before,.icon-evernote:before,.icon-flickr-sign:before,.icon-flickr:before,.icon-forrst-sign:before,.icon-forrst:before,.icon-foursquare-sign:before,.icon-foursquare:before,.icon-git-fork:before,.icon-hacker-news:before,.icon-instagram:before,.icon-lastfm-sign:before,.icon-lastfm:before,.icon-paypal:before,.icon-picasa-sign:before,.icon-picasa:before,.icon-reddit:before,.icon-share-this-sign:before,.icon-share-this:before,.icon-skype:before,.icon-soundcloud:before,.icon-spotify:before,.icon-stack-overflow:before,.icon-tumblr-sign:before,.icon-tumblr:before,.icon-vimeo-sign:before,.icon-vimeo:before,.icon-wordpress-sign:before,.icon-wordpress:before,.icon-yelp-sign:before,.icon-yelp:before,.icon-youtube-sign:before,.icon-youtube:before              {font-family:'Font-Awesome-Social'; }

		.icon-dropbox:before              { content: "\f300"; }
		.icon-drupal:before               { content: "\f301"; }
		.icon-git-fork:before             { content: "\f302"; }
		.icon-instagram:before            { content: "\f303"; }
		.icon-share-this-sign:before      { content: "\f304"; }
		.icon-share-this:before           { content: "\f305"; }
		.icon-foursquare-sign:before      { content: "\f306"; }
		.icon-foursquare:before           { content: "\f307"; }
		.icon-hacker-news:before          { content: "\f308"; }
		.icon-skype:before                { content: "\f309"; }
		.icon-spotify:before              { content: "\f30a"; }
		.icon-soundcloud:before           { content: "\f30b"; }
		.icon-paypal:before               { content: "\f30c"; }
		.icon-youtube-sign:before         { content: "\f30d"; }
		.icon-youtube:before              { content: "\f30e"; }
		.icon-reddit:before               { content: "\f30f"; }
		.icon-blogger-sign:before         { content: "\f310"; }
		.icon-blogger:before              { content: "\f311"; }
		.icon-dribbble-sign:before        { content: "\f312"; }
		.icon-dribbble:before             { content: "\f313"; }
		.icon-evernote-sign:before        { content: "\f314"; }
		.icon-evernote:before             { content: "\f315"; }
		.icon-flickr-sign:before          { content: "\f316"; }
		.icon-flickr:before               { content: "\f317"; }
		.icon-forrst-sign:before          { content: "\f318"; }
		.icon-forrst:before               { content: "\f319"; }
		.icon-delicious:before            { content: "\f31a"; }
		.icon-lastfm-sign:before          { content: "\f31b"; }
		.icon-lastfm:before               { content: "\f31c"; }
		.icon-picasa-sign:before          { content: "\f31d"; }
		.icon-picasa:before               { content: "\f31e"; }
		.icon-stack-overflow:before       { content: "\f320"; }
		.icon-tumblr-sign:before          { content: "\f321"; }
		.icon-tumblr:before               { content: "\f322"; }
		.icon-vimeo-sign:before           { content: "\f323"; }
		.icon-vimeo:before                { content: "\f324"; }
		.icon-wordpress-sign:before       { content: "\f325"; }
		.icon-wordpress:before            { content: "\f326"; }
		.icon-yelp-sign:before            { content: "\f327"; }
		.icon-yelp:before                 { content: "\f328"; }
		.icon-cloud-upload:before		  { content: "\f0ee"; }
		.icon-cloud-download:before		  { content: "\f0ed"; }


	html, body {
	height: 100%;
}

body {
	margin: 0px;
	padding: 0px;
	background: #16a085;
	font-family: 'Raleway', sans-serif;
	font-size: 11pt;
	font-weight: 400;
	color: #3b0d0b;
}


h1, h2, h3 {
	margin: 0;
	padding: 0;
}

p, ol, ul {
	margin-top: 0px;
}

p {
	line-height: 190%;
}

strong {
}

a {
	color: #171717;
}

a:hover {
	text-decoration: none;
}

a img {
	border: none;
}

	.image
	{
		display: inline-block;
	}
	
		.image img
		{
			display: block;
			width: 100%;
		}

	.image-full
	{
		display: block;
		width: 100%;
		margin: 0 0 2em 0;
	}
	
	.image-left
	{
		float: left;
		margin: 0 2em 2em 0;
	}
	
	.image-centered
	{
		display: block;
		margin: 0 0 2em 0;
	}

		.image-centered img
		{
			margin: 0 auto;
			width: auto;
		}

hr {
	display: none;
}


/*********************************************************************************/
/* List Styles                                                                   */
/*********************************************************************************/

	ul.style1
	{
		margin: 0;
		padding: 0;
		list-style: none;
	}
	
	ul.style1 li
	{
		border-top: solid 1px #E5E5E5;
		padding: 0.80em 0;
	}
	
	ul.style1 li:first-child
	{
		border-top: 0;
		padding-top: 0;
	}

	ul.style2
	{
		margin: 0;
		padding: 0;
		list-style: none;
	}
	
	ul.style2 li
	{
		border-top: solid 1px #E5E5E5;
		padding: 0.80em 0;
	}
	
	ul.style2 li:first-child
	{
		border-top: 0;
		padding-top: 0;
	}

/*********************************************************************************/
/* Social Icon Styles                                                            */
/*********************************************************************************/

	ul.contact
	{
		margin: 0;
		padding: 1.5em 0em 2.5em 0em;
		list-style: none;
	}
	
	ul.contact li
	{
		display: inline-block;
		padding: 0em 0.30em;
		font-size: 1em;
	}
	
	ul.contact li span
	{
		display: none;
		margin: 0;
		padding: 0;
	}
	
	ul.contact li a
	{
		color: #FFF;
	}
	
	ul.contact li a:before
	{
		display: inline-block;
		background: #3b0d0b;
		width: 40px;
		height: 40px;
		line-height: 40px;
		text-align: center;
		color: #FFFFFF;
	}
	
	ul.contact li a.icon-twitter:before { background: #2DAAE4; }
	ul.contact li a.icon-facebook:before { background: #39599F; }
	ul.contact li a.icon-dribbble:before { background: #C4376B;	}
	ul.contact li a.icon-tumblr:before { background: #31516A; }
	ul.contact li a.icon-rss:before { background: #F2600B; }


/*********************************************************************************/
/* Heading Titles                                                                */
/*********************************************************************************/

	.title
	{
		margin-bottom: 2em;
		text-transform: uppercase;
	}

	.title h2
	{
		font-weight: 400;
		font-size: 2em;
		color: #3b0d0b;
	}
	
	.title .byline
	{
		letter-spacing: 0.15em;
		text-transform: uppercase;
		font-weight: 400;
		font-size: 0.90em;
		color: #3b0d0b;
	}

/** WRAPPER */

#wrapper {
	background: #e7ecf1	 url(images/bg01.png) repeat;
}

#footer-wrapper
{
	background: #3b0d0b;
}

.container {
	width: 1200px;
	margin: 0px auto;
}

.clearfix {
	clear: both;
}


/*********************************************************************************/
/* Wrappers                                                                      */
/*********************************************************************************/

#header-wrapper
{
	overflow: hidden;
	background: url(images/bg01.png) repeat;
	background-size: 100%;
	padding: 6em 0em 2em 0em;
	background: #333333;
}


/*********************************************************************************/
/* Header                                                                        */
/*********************************************************************************/

	#header 
	{
		position: relative;
		overflow: hidden;
		text-align: center;
	}

/*********************************************************************************/
/* Logo                                                                          */
/*********************************************************************************/

	#logo 
	{
		width: 500px;
		height: 100px;
		margin: 0 auto;
		padding: 2em 0em;
		text-transform: uppercase;
	}
	
	#logo h1
	{
		letter-spacing: 0.10em;
		font-size: 3em;
	}
	
	#logo p 
	{
		letter-spacing: 0.10em;
		color: #FFF;
	}
	
	#logo a 
	{
		text-decoration: none;
		color: #FFF;
	}

/*********************************************************************************/
/* Banner                                                                        */
/*********************************************************************************/

	#banner 
	{
		overflow: hidden;
		height: 600px;
		background: url(images/pic01.jpg) no-repeat center;
		background-size: cover;
	}
	
	#banner .image
	{
	}
	

/** MENU */

#menu-wrapper
{
	background: #34140b;
}

#menu {
	overflow: hidden;
	height: 100px;
}

#menu ul {
	margin: 0;
	padding: 0px 0px 0px 0px;
	list-style: none;
	line-height: normal;
	text-align: center;
}

#menu li {
	display: inline-block;
}

#menu a {
	display: block;
	letter-spacing: 1px;
	padding: 0px 40px;
	text-decoration: none;
	text-align: center;
	text-transform: uppercase;
	font-size: 0.80em;
	line-height: 100px;
	border: none;
	color: #FFF;
}

#menu a:hover, #menu .current_page_item a {
	text-decoration: none;
}

#menu .current_page_item a {
	background: #5b2f18;
}

/** PAGE */

#page
{
	position: relative;
	overflow: hidden;
	padding: 6em 0em 5em 0em;
}

/** CONTENT */

#content
{
	float: left;
	width: 790px;
}

/*********************************************************************************/
/* Sidebar                                                                       */
/*********************************************************************************/

	#sidebar
	{
		float: right;
		width: 345px;
	}
	
	#sidebar .title h2
	{
		font-size: 1.6em;
	}
	
	#sidebar .box1
	{
		margin-bottom: 3em;
	}


/*********************************************************************************/
/* Copyright                                                                     */
/*********************************************************************************/

	#copyright
	{
		overflow: hidden;
		padding: 5em 0em;
		text-align: center;
	}
	
	#copyright p
	{
		letter-spacing: 0.20em;
		text-align: center;
		text-transform: uppercase;
		font-size: 0.80em;
		color: rgba(255,255,255,.5);
	}
	
	#copyright a
	{
		text-decoration: none;
		color: rgba(255,255,255,.7);
	}

/*********************************************************************************/
/* Welcome                                                                       */
/*********************************************************************************/

	#welcome
	{
		overflow: hidden;
		padding: 5em 0em;
		border-bottom: 1px solid #E5E5E5;
		text-align: center;
	}
	
	#welcome h2
	{
		letter-spacing: 0.20em;
		text-transform: uppercase;
		font-size: 2.6em;
	}
	
	#welcome p
	{
		font-size: 1.3em;
	}

	#welcome .byline
	{
		display: block;
		padding: 0em 0em 1.5em 0em;
		letter-spacing: 0.15em;
		text-transform: uppercase;
		font-weight: 400;
		font-size: 1.2em;
		color: #6F6F6F;
	}

/*********************************************************************************/
/* Portfolio                                                                     */
/*********************************************************************************/

	#portfolio-wrapper
	{
		background: #3b0d0b;
		padding: 6em 0em;
		color: #3b0d0b;
	}
	
	#portfolio
	{
		overflow: hidden;
	}
	
	#portfolio .title h2
	{
		font-size: 1.2em;
		color: #FFF;
	}

	#portfolio .byline
	{
		font-size: 1em;
		color: #EEA7C1;
	}
	
	#column1,
	#column2,
	#column3,
	#column4
	{
		width: 282px;
	}
	
	#column1,
	#column2
	{
		float: left;
		margin-right: 24px;
	}
	
	#column3
	{
		float: left;
	}
	
	#column4
	{
		float: right;
	}
	
/*********************************************************************************/
/* Button Style                                                                  */
/*********************************************************************************/

	.button
	{
		display: inline-block;
		margin-top: 1.5em;
		padding: 1.50em 3em 1.50em 3em;
		background: #5b2f18;
		text-decoration: none;
		text-transform: uppercase;
		font-weight: 400;
		font-size: 0.90em;
		color: #FFF;
	}
	
		.button:before
		{
			display: inline-block;
			width: 40px;
			height: 40px;
			line-height: 40px;
			border-radius: 20px;
			text-align: center;
			color: #FFF;
		}

/*********************************************************************************/
/* Footer                                                                        */
/*********************************************************************************/
	
	#footer-wrapper
	{
		overflow: hidden;
		padding: 5em 0em;
		background: #1E1B1A;
	}

	#footer
	{
		color: #ADADAD;
	}
	
	#footer .title h2
	{
		font-weight: 400;
		font-size: 1.2em;
		color: #FFF;
	}

	#footer .title
	{
		border-color: #2D2926 !important;
	}
	
	#footer .style1 li
	{
		border-color: #2D2926 !important;
	}
	
	#footer .style1 a
	{
		font-size:1em;
		color: #B1B1B1;
	}
	
	#box1
	{
		float: left;
		width: 354px;
		margin-right: 24px;
		padding-right: 30px;
	}
	
	#box2
	{
		float: left;
		width: 354px;
		margin-left: 24px;
		padding-right: 30px;
	}
	
	#box3
	{
		float: left;
		width: 354px;
		margin-right: 24px;
		padding-right: 30px;
	}
</style>

</head>
<body>
	<?php 
	echo "<h4> Você já está logado, deseja <a href='../Script/deslogar.php'> deslogar</a>?</h4>"; ?>
	<div id="wrapper">
		<div id="menu-wrapper">
			<div id="menu" class="container">
				<ul>
					<li class="current_page_item"><a href="#">Início</a></li>
					<li><a href="#">Sobre Nós</a></li>
					<li><a href="#">Objetivos</a></li>
					<li><a href="#">Portfólio</a></li>
					<li><a href="#">Contato</a></li>
				</ul>
			</div>
			<!-- end #menu --> 
			<div id="header-wrapper">
				<div id="header" class="container">
					<div id="logo">
						<h1><a href="#">Don't 4get</a></h1>
						<h2><p>Light <a href="http://templated.co" rel="nofollow"></a></p></h2>
					</div>
				</div>
			</div>
		</div>
		<div id="banner"></div>
		<div id="page" class="container">
			<div id="content">
				<div class="title">
					<h2>Um pouco sobre nós</h2>
					<h3><span class="byline">Don't 4get.Nunca fique no escuro.</span></h3> </div>
					<h3><p>Nosso game <strong>Don't 4get:Light</strong>   remete-nos ao medo mais obscuro da humanidade "O desconhecido da escuridao".  </p>
						<p>Criado intuitivamente a fazer o jogador enfrentar seus maiores medos e assim,entrar em um mundo cercado de criaturas á atormenta-lo </p></h3>

						<h3><p>Pierce,um jovem conhecido pelos feitos como neurocirurgião,em seus dias de folga costumava fazer trilha e em uma de suas aventuras acaba
							ficando preso em uma casa com criaturas estranhas tendo em mãos apenas sua lanterna 
						e seu instinto de sobrevivencia. </p></h3>
					</div>
					<div id="sidebar">
						<div class="box2">
							<div class="title">
								
							</div>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
		

		<div id="footer-wrapper">
			<div id="footer" class="container">
				<div id="box1">
					<div class="title">
						
					</div>
					
				</div>
				<div id="box2">
					<div class="title">
						
					</div>
					
				</div>
				<div id="box3">
					<div class="title">
						<h2>Siga-nos</h2>
					</div>
					<p>Nossas princpais redes sociais. Entre em contato.</p>
					<ul class="contact">
						
						<li><a href="www.facebook.com/VinyWarrior" class="icon icon-facebook"><span>Facebook</span></a></li>
						
						<li><a href="https://www.facebook.com/hiago.freitasrocha" class="icon icon-facebook"><span>Facebook</span></a></li>
						
					</ul>
					<a href="#" class="button">Leia mais</a> </div>
				</div>
			</div>
		</div>
		<div id="copyright" class="container">
			<p>&copy; Untitled. Todos os direitos reservados. | Fotos por <a href="https://www.facebook.com/VinyWarrior">Vinicius</a> | Design por <a href="https://www.facebook.com/hiago.freitasrocha" rel="nofollow">Hiago</a>.</p>
		</div>
	</body>
	</html>
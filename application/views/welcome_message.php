<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cindy Dhedha</title>

<style type="text/css">
	
	html, body, ul, li, h1, h2, h3, h4 {
		margin: 0;
		padding: 0;
		list-style: none;
	}
	img {
		border: 0;
	}
	a {
		color: #fff;
	}
	a:hover {
		color: #F2AB9E;
	}
	.clear {
		clear: both;
	}
	
	body {
		background: black;
		text-align: center;
		color: white;
		font: 11px verdana, sans-serif;
	}
	#wrapper {
		text-align: left;
		margin: 15px auto;
		width: 778px;
		position: relative;
		background: maroon url(images/bg.jpg) repeat-y;
		border: 5px solid #750306;
	}
	#head-1 {
		background: url(images/head_1.jpg) no-repeat;
		width: 409px;
		height: 386px;
		top: 0;
		left: 369px;
		position: absolute;
	}
	#head-2 {
		background: url(images/head_2.jpg) no-repeat;
		width: 156px;
		height: 38px;
		top: 386px;
		left: 622px;
		position: absolute;
	}
	
	#nav {
		margin: 11px 0 25px 35px;
		color: #C15D4B;
	}
	#nav a {
	  text-decoration: none;
	  color: black;
	}
	#nav li {
	  background: bottom left url(images/nav_bg.jpg) no-repeat;
	  _height: 1%;
	  padding: 8px 12px 16px 110px;
	}
	#nav li.last {
	  background: bottom left url(images/nav_bg_last.jpg) no-repeat;
	}
	#gallery img {
		display: block;
	}
	h1 {
	  height: 172px;
	  background: url(images/logo.jpg) no-repeat;
	  color: black;
	  font-weight: normal;
	}
	h1 span {
	  display: block;
	}
	h1 em {
	  font-style: normal;
	  color: white;
	  padding-right: 3px;
	}
	h1 .hone {
	  padding: 65px 0 0 58px;
	  font: 50px Keaton, "Arial Narrow", "Tahoma", arial, sans-serif;
	}
	h1 .htwo {
	  position: relative;
	  top: -0.5em;
	  left: 7.5em;
	  font-size: 18px;
	}
	h1 .hthree {
	  position: relative;
	  top: -1.0em;
	  left: 4.5em;
	  font-size: 12px;
	  letter-spacing: 2px;
	  color: #E3C0C1;
	}
	h2 {
	  background: 120px 0.5em url(images/dot_dot_dash.jpg) no-repeat;
	  font: 24px verdana, sans-serif;
	  font-weight: normal;
	  font-style: italic;
	  color: black;
	}
	h2 em {
	  color: white;
	}
	
	#body-left {
		float: left;
		width: 278px;
		padding-left: 28px;
	}
	#gallery {
		border: 1px solid #9F0408;
		background: #750306;
		margin: 13px 10px 0 6px;
		height: 261px;
		position: relative;
	}
	.gal {
		background: #9F0408;
		padding: 4px;
		position: absolute;
	}
	#gzero {
		top: 13px;
		left: 15px;
		width: 221px;
	}
	#gone {
		top: 200px;
		left: 15px;
		width: 57px;
	}
	#gtwo {
		top: 200px;
		left: 98px;
		width: 57px;
	}
	#gthree {
		top: 200px;
		left: 179px;
		width: 57px;
	}
	
	#body-right {
		float: right;
		width: 388px;
		padding-right: 22px;
	}
	
	#footer {
		text-align: right;
		color: #CD3639;
		border-top: 1px solid #983234;
		padding: 6px 25px 20px 0;
	}
	.spacer {
		height: 18px;
	}

</style>
</head>
<body>

<h1>Welcome to My Website</h1>

<div id="wrapper">
	<h1><span class="hone"><em>C</em>indy</span>
	    <span class="htwo">MY PERSONAL WEBSITE</span>
	    <span class="hthree">THANK YOU FOR VISITING MY WEBSITE</span></h1>
	<div id="head-1"></div>
	<div id="head-2"></div>
	<div id="nav">
		<ul>
		  <li><a href="#">HOME</a></li>
		  <li><a href="#">ABOUT ME</a></li>
		  <li><a href="#">GALLERY</a></li>
		  <li class="last"><a href="#">CONTACT US</a></li>
		</ul>
	</div>
	<div id="body-left">
		<h2><em>G</em>allery</h2>
		<div id="gallery">
			<div class="gal" id="gzero"><a href="#"><img src="images/pic_1.jpg" width="221" height="163" alt="Pic 1" /></a></div>
			<div class="gal" id="gone"><a href="#"><img src="images/pic_2.jpg" width="57" height="41" alt="Pic 2" /></a></div>
			<div class="gal" id="gtwo"><a href="#"><img src="images/pic_3.jpg" width="57" height="41" alt="Pic 3" /></a></div>
			<div class="gal" id="gthree"><a href="#"><img src="images/pic_4.jpg" width="57" height="41" alt="Pic 4" /></a></div>
			<div class="clear"></div>
		</div>
	</div>
	<div id="body-right">
		<h2><em>W</em>elcome</h2>
		<p>Thank you for visiting my website</p>
        <p>
        	I believe in Christianity as I believe that the sun has risen: not only because I see it, but because by it I see everything else.
        	<i> **C. S. Lewis** </i>
        </p>
        <p>
        	Just as the soul fills the body, so God fills the world. Just as the soul bears the body, so God endures the world. Just as the soul sees but is not seen, so God sees but is not seen. Just as the soul feeds the body, so God gives food to the world.
        	<i> **Marcus Tullius Cicero** </i>
        </p>
  </div>
	<div class="clear spacer"></div>
	<div id="footer">
		&copy; Cindy Dhedha
	</div>
</div>

</body>
</html>
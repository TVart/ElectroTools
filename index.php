<?php
require_once './elec/controller.php';
if(!isset($_GET['idp'])){ $_GET['idp'] = 1; }
if(!array_key_exists($_GET['idp'], $pages)){
	$_GET['idp'] = 1;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="iso-8859-1">
		<meta name="description" content="Tools to practice electronic">
		<meta name="keywords" content="tools, electronic">
		<title>Electro Tools - <?php echo ($pages[$_GET['idp']][0]); ?></title>
		<link rel="stylesheet" href="./styles/electools.css">
		<script src="./js/electools.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<header id="main_header">
				<h1>Tools to practice electronic and have a fun</h1>
			</header>
			<nav id="main_menu">
				<ul>
					<li>A Propos</li>
					<li>Electro Tools</li>
					<li>Contact</li>
				</ul>
			</nav>
			<div id="container">
				<section id="main_section">
					<article>
						<header>
							<hgroup>
								<h1><?php echo ($pages[$_GET['idp']][0]); ?></h1>
								<h2>Definition : </h2>
							</hgroup>
							<time datetime="2011-12-10" pubdate>posted 12-10-2011
							</time>
						</header>
						<?php include ('./elec/'.$pages[$_GET['idp']][1])?>
						<!--<figure>
							<img src="http://minkbooks.com/content/myimage.jpg">
							<figcaption>this is the image of the first post</figcaption>
						</figure>-->
						<footer>
							<p>comments (0)</p>
						</footer>
					</article>
				</section>
				<aside id="main_aside">
				<?php foreach($pages as $idp => $pp){ ?>
					<blockquote><a href="index?idp=<?php echo $idp; ?>">
						<?php echo $idp.' - '.($pp[0]); ?>
					</a></blockquote>
				<?php } ?>		
				</aside>
			</div><!-- end container !-->
			<footer id="main_footer">Copyright &copy 2010-2011</footer>
		</div> <!-- end wrapper !-->
	</body>
</html>
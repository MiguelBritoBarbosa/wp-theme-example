<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Theme</title>
	<?php wp_head(); ?>
	<style>
		.fakeimg {
			height: 200px;
			background: #aaa;
		}
	</style>
</head>

<body <?php body_class() ?>>
	<header class="p-5 bg-primary text-white text-center">
		<h1>WordPress Classic Theme with Bootstrap 5, Bootstrap Icoins and TailwindCss</h1>
		<p class="tw-text-blue-200"> classic Wordpress theme just to serve as an example for installing Bootstrap 5,
			Bootstrap
			Icons
			and
			TailwindCss.
		</p>
	</header>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<div class="container-fluid">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" href="#">Active</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Disabled</a>
				</li>
			</ul>
		</div>
	</nav>
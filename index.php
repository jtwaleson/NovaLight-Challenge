<!DOCTYPE html>
<html>
	<head>
		<title>NOVALIGHT: The Ultimate Challenge</title>
		<link rel='stylesheet' href='style.css'/>
	</head>


	<body>
		<div id='stars'></div>
		<div id='wrapper'>
			<div id='banner'>
				<div id='logo'>
					<div><a href='?'>NOVA<span>LIGHT</span></a></div>
					<div id='under'>Business solutions through information technology</div>
				</div>
				
				<ul id='upper_menu'>
					<li class='pill' id='bannerlink1'><a href='mailto:peter.joneleit@novalight.net'>e~mail</a>
					<li class='pill' id='bannerlink2'><a href='#'>RESUME</a>
					<li class='pill' id='bannerlink3'><a href='NOVALIGHT LINKS.html'>LINKS</a>
				</ul>
			</div>
			<?
			if (!isset($_GET['page']))
				include 'pages/overview.html';
			else if (is_numeric($_GET['page']))
				include 'pages/'.$_GET['page'].'.html';
			else
				echo "Unknown page";
			?>
		</div>
		<div id='link_to_original'>
			<a href='the_goal/'>The Original NovaLight Test</a>
		</div>
	</body>
</html>

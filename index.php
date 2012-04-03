<html>
	<head>
		<title>NOVALIGHT: The Ultimate Challenge</title>
		<link rel='stylesheet' href='style.css'/>
	</head>


	<body>
		<div id='wrapper'>
			<div id='banner'>
				<div id='logo'>
					<div><a href='?'>NOVA<span>LIGHT</span></a></div>
					<div id='under'>Business solutions through information technology</div>
				</div>
				
				<ul id='upper_menu'>
					<li class='pill' style='background-color: #990000; color: #cccccc;'>e~mail
					<li class='pill' style='background-color: #666699; color: #9999cc;'>RESUME
					<li class='pill' style='background-color: #beb2d3; color: #666699'>LINKS
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

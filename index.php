<!DOCTYPE html>
<html>
	<head>
		<title>NOVALIGHT: The Ultimate Challenge</title>
		<link rel='stylesheet' href='style.css'/>
	</head>


	<body>
<?
	$stars_per_side = 3;
	$stars = array();
	for($i = 0; $i < $stars_per_side; $i++)
		$stars[] = array(100, rand(0, 100));
	for($i = 0; $i < $stars_per_side; $i++)
		$stars[] = array(0, rand(0, 100));
	for($i = 0; $i < $stars_per_side; $i++)
		$stars[] = array(rand(0, 100), 100);
	for($i = 0; $i < $stars_per_side; $i++)
		$stars[] = array(rand(0, 100), 0);

?>
<style type='text/css'>
.stars{
	position: fixed;
	top: 50%;
	width: 5px;
	background-color: #fff;
	border-radius: 5px;
	overflow:hidden;
	opacity: 0;
	left:50%;
	height: 5px;
	z-index: 0;
	-moz-animation-duration: 1s;
	-moz-animation-iteration-count: infinite;
	-moz-animation-timing-function: linear;
	-webkit-animation-duration: 1s;
	-webkit-animation-iteration-count: infinite;
	-webkit-animation-timing-function: linear;
}
<? foreach($stars as $i => $xy): ?>
	#star<?=$i;?> {
		-moz-animation-name: stars_animation_<?=$i;?>;
		-moz-animation-delay: <?= rand(0, 2000);?>ms;
		-webkit-animation-name: stars_animation_<?=$i;?>;
		-webkit-animation-delay: <?= rand(0, 2000);?>ms;
	}
	@-moz-keyframes stars_animation_<?=$i;?> {
		from {
			-moz-transform: scale(0.5);
			left: 50%;
			top: 50%;
			opacity: 0.2;
		}
		to {
			-moz-transform: scale(1);
			left: <?=$xy[0]?>%;
			top: <?=$xy[1]?>%;
			opacity: 1;
		}
	}
	@-webkit-keyframes stars_animation_<?=$i;?> {
		from {
			-webkit-transform: scale(0.5);
			left: 50%;
			top: 50%;
			opacity: 0.2;
		}
		to {
			-webkit-transform: scale(1);
			left: <?=$xy[0]?>%;
			top: <?=$xy[1]?>%;
			opacity: 1;
		}
	}
<? endforeach;?>
</style>
<? foreach($stars as $i => $xy): ?>
		<div class='stars' id='star<?=$i?>'></div>
<? endforeach;?>
		<div id='wrapper'>
			<div id='banner'>
				<div id='logo'>
					<div><a href='?'>NOVA<span>LIGHT</span></a></div>
					<div id='under'>Business solutions through information technology</div>
				</div>
				
				<ul id='upper_menu'>
					<li class='pill' id='bannerlink1'><a href='mailto:peter.joneleit@novalight.net'>e~mail</a>
					<li class='pill' id='bannerlink2'><a href='#'>R&Eacute;SUM&Eacute;</a>
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
			<div id='link_to_original'>
				<a href='the_goal/'>The Original NovaLight Test</a>
			</div>
		</div>
	</body>
</html>

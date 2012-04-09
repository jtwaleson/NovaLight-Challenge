<?
	$faces = array();
	for ($i = 0; $i < 12; $i++)
		$faces[] = array(rand(0,360), 100+$i*30);
?>
<style type='text/css'>
	.circle {
		width: 400px;
		height: 400px;
		opacity: 0.5;
		position: absolute;
		top: 100px;
		border: 5px solid white;
		border-radius: 200px;
		-moz-animation-duration: 2s;
		-moz-animation-iteration-count: 1;
		-moz-animation-timing-function: linear;
		-moz-animation-fill-mode: forwards;  
		-webkit-animation-duration: 2s;
		-webkit-animation-iteration-count: 1;
		-webkit-animation-timing-function: linear;
		-webkit-animation-fill-mode: forwards;  
	}
	#circle_left {
		border-color: rgba(255, 204, 0, 1.0);
		background-color: rgba(255, 204, 0, 0.5);
		left: 100px;
		-webkit-animation-name: movingToRight;
		-moz-animation-name: movingToRight;
	}
	@-moz-keyframes movingToRight {
		from {
left: 100px;
		}
		to {
left: 250px;
		}
	}
	
	@-webkit-keyframes movingToRight {
		from {
left: 100px;
		}
		to {
left: 250px;
		}
	}
	
	#circle_right {
		border-color: rgba(120, 0, 206, 1.0);
		background-color: rgba(120, 0, 206, 0.5);
		-moz-animation-name: movingToLeft;
		-webkit-animation-name: movingToLeft;
	}
	.face {
position: absolute;
background-color: #fff;
border-radius: 40px;
width: 40px;
height: 40px;
-webkit-animation-duration: 2s;
-webkit-animation-iteration-count: 1;
-webkit-animation-timing-function: linear;
-webkit-animation-fill-mode: forwards;  
	}
	@-moz-keyframes movingToLeft {
		from {
right: 100px;
		}
		to {
right: 250px;
		}
	}
	@-webkit-keyframes movingToLeft {
		from {
right: 100px;
		}
		to {
right: 250px;
		}
	}
	<? foreach ($faces as $i => $pos): ?>
	#face<?=$i;?> {
		-webkit-animation-name: face_<?=$i;?>;
	}
	@-webkit-keyframes face_<?=$i;?> {
		from {
-webkit-transform: scale(1);
left: <?=rand(100,500);?>px;
top: <?=rand(100,500);?>px;
		}
		to {
-webkit-transform: scale(0.4);
left: 484px ;
top: <?=$pos[1];?>px;
		}
	}
	
	<? endforeach;?>
	#innerwrapper {
position: relative;
	}
</style>
<div id='innerwrapper'>
	<div class='circle' id='circle_left'>
	</div>
	<? foreach ($faces as $i => $pos): ?>
	<div class='face' id='face<?=$i;?>'></div>
	<? endforeach; ?>
	<div class='circle' id='circle_right'>
	</div>

</div>

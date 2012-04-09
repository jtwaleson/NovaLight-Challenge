<style type='text/css'>
	.info_box {
position: absolute;
width: 340px;
	}
	.info_box .border {
position: absolute;
top: 0;
width: 40px;
height: 100%;
height: 110px;
border: 4px solid white;
-webkit-animation-duration: 2s;
-webkit-animation-iteration-count: infinite;
-webkit-animation-timing-function: linear;
-webkit-animation-name: pulsing_border_color;
	}
	.info_box .left_border {
border-radius: 10px 0 0 10px;
left: 0;
border-right: none;
	}
	.info_box .right_border {
border-radius: 0 10px 10px 0;
right: 0;
border-left: none;
	}
	@-webkit-keyframes pulsing_border_color {
		from {border-color: red;}
		33% { border-color: blue;}
		66% { border-color: purple;}
		to { border-color: yellow;}
	}
	
	.info_box p {
		font-size: small;
		font-weight: bold;
		margin-top: 0;
	}
	.info_box {

		text-align: center;
	}
	.info_box h3 {
color: purple;
       text-transform: uppercase;
       margin-bottom: 4px;
	}
	.info_box.left {
left: 0;
	}
	.info_box.right {
right: 0;
	}
	.info_box.top {
top: 200px;
	}
	.info_box.bottom {
top: 500px;
	}
	.info_box.left.top .border {-webkit-animation-delay: 0ms; }
	.info_box.right.top .border {-webkit-animation-delay: 500ms; }
	.info_box.right.bottom .border {-webkit-animation-delay: 1000ms; }
	.info_box.left.bottom .border {-webkit-animation-delay: 1500ms; }
</style>

<div class='info_box top left'>
<div class='left_border border'></div>
<h3>IT / Business Management</h3>
<p>Run efficient, cost-effective business unit<br/>
Manage the cost of computing and services delivery<br/>
Design organisation to fit the needs of IS clients</p>
<div class='right_border border'></div>
</div>
<div class='info_box top right'>
<div class='left_border border'></div>
<h3>IT / Business Alignment</h3>
<p>Use IT to create new business capabilities<br/>
IT planning into business strategy<br/>
Align IT capabilities with Corporate strategy<br/>
Anticipate impact of market and regulatory events</p>
<div class='right_border border'></div>
</div>
<div class='info_box bottom left'>
<div class='left_border border'></div>
<h3>Internal Client Services</h3>
<p>Meet key organizational and employee needs<br/>
Deliver projects and applications on time, on budget<br/>
Provide superior customer service and support</p>
<div class='right_border border'></div>
</div>
<div class='info_box bottom right'>
<div class='left_border border'></div>
<h3>Infrastructure Performance</h3>
<p>Design, develop, deply reliable systems<br/>
Operate, maintain reliable systems<br/>
Keep current on new technologies</p>
<div class='right_border border'></div>
</div>

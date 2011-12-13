<style type="text/css">
.red-block {
	width: 100px;
	height: 100px;
	background-color: red;
	margin:2em;
	padding:0.5em;
	text-align:center;
}
.wipe {
	font-size: 28px;
	height: auto;
	width: auto;
}
.slide {
	position: absolute;
	left: 0px;
	top: 100px;
}
.chain {
	opacity: 0;
}
</style>

<script type="text/javascript">
dojo.require("dojo.fx");

function init(){

var fadeOutButton = dojo.byId("fadeOutButton"),
	fadeInButton = dojo.byId("fadeInButton"),
	fadeTarget = dojo.byId("fadeTarget"),
	wipeOutButton = dojo.byId("wipeOutButton"),
	wipeInButton = dojo.byId("wipeInButton"),
	wipeTarget = dojo.byId("wipeTarget"),
	slideAwayButton = dojo.byId("slideAwayButton"),
	slideBackButton = dojo.byId("slideBackButton"),
	slideTarget = dojo.byId("slideTarget");

dojo.connect(fadeOutButton, "onclick", function(evt){
	dojo.fadeOut({ node: fadeTarget }).play();
});
dojo.connect(fadeInButton, "onclick", function(evt){
	dojo.fadeIn({ node: fadeTarget }).play();
});

dojo.connect(wipeOutButton, "onclick", function(evt){
	dojo.fx.wipeOut({ node: wipeTarget }).play();
});
dojo.connect(wipeInButton, "onclick", function(evt){
	dojo.fx.wipeIn({ node: wipeTarget }).play();
});

dojo.connect(slideAwayButton, "onclick", function(evt){
	dojo.fx.slideTo({ node: slideTarget, left: "200", top: "200" }).play();
});
dojo.connect(slideBackButton, "onclick", function(evt){
	dojo.fx.slideTo({ node: slideTarget, left: "0", top: "100" }).play();
});

//Animation functions return a dojo.Animation object with several methods: play, pause, stop, status, and gotoPercent

};

dojo.ready(init);

</script>

</head>

<body>
<?$this->load->view('menu');?>

<h2>Fading</h2>
<button id="fadeOutButton">Fade block out</button>
<button id="fadeInButton">Fade block in</button>

<div id="fadeTarget" class="red-block">
	A red block.
</div>

<h2>Wiping</h2>
<button id="wipeOutButton">Wipe block out</button>
<button id="wipeInButton">Wipe block in</button>

<div id="wipeTarget" class="red-block wipe">
	A red block
</div>

<h2>Sliding</h2>
<button id="slideAwayButton">Slide block out</button>
<button id="slideBackButton">Slide block in</button>

<div id="slideTarget" class="red-block slide">
	A red block
</div>
<script type="text/javascript">

function init(){
var myButton = dojo.byId("myButton"),
	myDiv = dojo.byId("myDiv"),
	myScopedButton1 = dojo.byId("myScopedButton1"),
	myScopedButton2 = dojo.byId("myScopedButton2"),
	myObject = { // specify the scope of a handler
		id: "myObject",
		onClick: function(evt) {
			alert("The scope of this handler is " + this.id);
		}
	},
	myButton5 = {
		onClick: function(evt) {
			alert("The button was clicked.");
		}
	},
	fadeButton = dojo.byId("fadeButton"),
	fadeTarget = dojo.byId("fadeTarget"),
	alertButton = dojo.byId("alertButton"),
	createAlert = dojo.byId("createAlert");

// dojo.connect
dojo.connect(myDiv, "onmouseenter", function(evt){
	dojo.style(myDiv, "backgroundColor", "red");
});
dojo.connect(myDiv, "onmouseleave", function(evt){
	dojo.style(myDiv, "backgroundColor", "");
});

// dojo.disconnect
var handle = dojo.connect(myButton, "onclick", function(evt){
	
	//add disconnect so that event happens only once
	dojo.disconnect(handle);

	dojo.style(myDiv, "backgroundColor", "blue");
	alert("dojo.disconnect causes this to happen only once");
});

dojo.connect(myScopedButton1, "onclick", myObject.onClick); //scope is button id
dojo.connect(myScopedButton2, "onclick", myObject, "onClick"); //scope is myObject
dojo.query(".clickMe").connect("onclick", myObject.onClick); //scope is button id
dojo.query(".clickMeAlso").connect("onclick", myObject, "onClick"); //scope is myObject
dojo.query(".clickMeNext").onclick(myObject.onClick); //scope is button id
dojo.query(".clickMeLast").onclick(myObject, "onClick");  //scope is myObject

dojo.connect(dojo.byId("button5"), "onclick", myButton5, "onClick");

dojo.connect(fadeButton, "onclick", function(evt){
	var anim = dojo.fadeOut({ node: fadeTarget });
	
	dojo.connect(anim, "onEnd", function(){
		alert("The fade has finished");
	});
	
	anim.play();
});

// add to onClick method
dojo.connect(myButton5, "onClick", function(evt) {
	alert("The button was clicked and onClick was called.")
});

// dojo.publish and dojo.subscribe
dojo.connect(alertButton, "onclick", function(evt){
	dojo.publish("alertUser", ["I am alerting you."]);
});

dojo.connect(createAlert, "onclick", function(evt){
	var anotherButton = dojo.create("button", {
		innerHTML: "Another alert button"
	}, createAlert, "after");

	dojo.connect(anotherButton, "onclick", function(evt){
		dojo.publish("alertUser", ["I am also alerting you."]);
	});
});

dojo.subscribe("alertUser", function(text){
	alert(text);
});

};

dojo.ready(init);

</script>

</head>

<body>
<?$this->load->view('menu');?>

<h2>Events with Dojo</h2>
<button id="myButton">Click me!</button>
<button id="myScopedButton1">Click me!</button>
<button id="myScopedButton2">Click me!</button>
<div id="myDiv">Hover over me!</div>

<hr>
<button id="button1" class="clickMe">Click me!</button>
<button id="button2" class="clickMeAlso">Click me!</button>
<button id="button3" class="clickMeNext">Click me next!</button>
<button id="button4" class="clickMeLast">Click me Last!</button>

<hr>
<button id="button5">My button5</button>
<button id="fadeButton">Fade block out.</button>
<div id="fadeTarget" class="red-block">Red block will fade out.</div>

<hr>
<button id="alertButton">Alert the user</button>
<button id="createAlert">Create another alert button</button>


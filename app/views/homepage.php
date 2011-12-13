<script type="text/javascript">

// dojo.byId
function setText(node, text){
	node = dojo.byId(node);
	node.innerHTML = text;
}

// dojo.place
// values for the place can be "before", "after", "replace", "only", "first", and "last"

function moveFirst() {dojo.place(three, list, "first")}
function moveBeforeTwo() {dojo.place(three, two, "before")}
function moveAfterFour() {dojo.place(three, four, "after")}
function moveLast() {dojo.place(three, list)}

//dojo.destroy
function destroyFirst() {
	items = dojo.query("li");
	
	if(items.length){
		dojo.destroy(items[0])
	}
}

//dojo.empty
function destroyAll() {
	dojo.empty("list");	
}

function init(){
	var one = dojo.byId("one"),
		list = dojo.byId("list"),
		three = dojo.byId("three"),
		two = dojo.byId("two"),
		three = dojo.byId("three"),
		four = dojo.byId("four"),
		items = dojo.query("li");
		
// dojo.create
	dojo.create("li", {
		innerHTML: "Six"
	}, list);
	
	dojo.create("li", {
		innerHTML: "Seven",
		className: "seven",
		style: {
			fontWeight: "bold"
		}
	}, "list");
	
	dojo.create("li", {
		innerHTML: "Three and a half"
	}, three, "after");
	
// can pass node as string or DOM node
	setText(one, "One has been set");
	setText("two", "Two has been set as well");
	
//dojo.query
//dojo.connect
	dojo.query(".movefirst").connect("onclick", moveFirst);
	dojo.query(".movebeforetwo").connect("onclick", moveBeforeTwo);
	dojo.query(".moveafterfour").connect("onclick", moveAfterFour);
	dojo.query(".movelast").connect("onclick", moveLast);
	dojo.query(".destroyfirst").connect("onclick", destroyFirst);
	dojo.query(".destroyall").connect("onclick", destroyAll);
};

dojo.ready(init);

</script>

</head>

<body>
<?$this->load->view('menu');?>

<h2>Using dojo.place, dojo.create, dojo.connect</h2>
<button class="movefirst">The first item</button>
<button class="movebeforetwo">Before two</button>
<button class="moveafterfour">After four</button>
<button class="movelast">The last item</button>
<button class="destroyfirst">Destroy the first item</button>
<button class="destroyall">Destroy all</button>

<ul id="list">
	<li id="one">One</li>
	<li id="two">Two</li>
	<li id="three">Three</li>
	<li id="four">Four</li>
	<li id="five">Five</li>
</ul>
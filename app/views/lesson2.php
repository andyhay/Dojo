<script type="text/javascript">


function init(){

var list = dojo.query("#list")[0],
	odds = dojo.query(".odd"), // retrieves all .odd
	odds1 = dojo.query("#list .odd"), // retrieves only .odd from #list
	odds2 = dojo.query(".odd", dojo.byId("list2")), // same as above for large projects
	oddA = dojo.query("a.odd"), // specific target node
	allA = dojo.query("li a"), // retrieves *all* a ancestors of li
	someA = dojo.query("li > a"); // retrieves only direct a ancestors of li
	// list of CSS3 selectors http://docs.dojocampus.org/dojo/query#standard-css3-selectors

/* dojo.query(".odd").forEach(function(node, index, nodelist){
	dojo.addClass(node, "red");
}); */
dojo.query(".odd").addClass("red"); //shorthand for above

/* dojo.query(".even").forEach(function(node, index, nodelist){
	dojo.addClass(node, "blue");
}); */
dojo.query(".even").addClass("blue"); //shorthand for above

//addClass and removeClass
dojo.query(".odd").removeClass("blue").addClass("yellow");

// Other DOM methods are style, toggleClass, replaceClass, place, and empty
dojo.query(".even").style("color","blue").addClass("italic");

//dojo.connect or dojo.on*
//full list of on* methods at http://dojotoolkit.org/reference-guide/dojo/NodeList.html#events-with-nodelists
dojo.query(".hookUp").connect("onclick", function(){
	alert("Hooked UP!");
})

dojo.query(".hookUpToo").onclick(function(){
	alert("Hooked up too!");
});

};

dojo.ready(init);

</script>

</head>

<body>
<?$this->load->view('menu');?>




<h2>Using dojo.query</h2>

<button class="hookUp">Hook it up!</button>
<button class="hookUpToo">Hook it up times two!</button>

<div id="list3">
    <div class="odd">One</div>
    <div class="even">Two</div>
    <div class="odd">Three</div>
    <div class="even">Four</div>
    <div class="odd">Five</div>
    <div class="even">Six</div>
</div>

<ul id="list">
    <li class="odd">
        <div class="bold">
            <a class="odd">Odd</a>
        </div>
    </li>
    <li class="even">
        <div class="italic">
            <a class="even">Even</a>
        </div>
    </li>
    <li class="odd">
        <a class="odd">Odd</a>
    </li>
    <li class="even">
        <div class="bold">
            <a class="even">Even</a>
        </div>
    </li>
    <li class="odd">
        <div class="italic">
            <a class="odd">Odd</a>
        </div>
    </li>
    <li class="even">
        <a class="even">Even</a>
    </li>
</ul>
 
<ul id="list2">
    <li class="odd">Odd<li>
</ul>
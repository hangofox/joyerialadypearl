<?php
header('content-type: text/css');
$id = htmlspecialchars ( $_GET['monid'] , ENT_QUOTES );
?>

.ckclr {clear:both;visibility : hidden;}



/*---------------------------------------------
---	 	menu container						---
----------------------------------------------*/

/* menu */
div#<?php echo $id; ?> {

}

/* container style */
div#<?php echo $id; ?> ul.maximenuck {
	clear:both;
	position : relative;
	z-index:999;
	overflow: visible !important;
	display: block !important;
	float: none !important;
	visibility: visible !important;
	opacity: 1 !important;
	list-style:none;
	padding: 0;
	margin:0 auto;
	zoom:1;
	filter: none;
	min-height : 34px;
	background :  #1a1a1a;
}

div#<?php echo $id; ?>.maximenuckh ul.maximenuck {
	background :  #1a1a1a url(../images/fond_bg.png) top left repeat-x;
}

div#<?php echo $id; ?> ul.maximenuck:after {
	content: " ";
	display: block;
	height: 0;
	clear: both;
	visibility: hidden;
	font-size: 0;
}

/*---------------------------------------------
---	 	Root items - level 1				---
----------------------------------------------*/

div#<?php echo $id; ?> ul.maximenuck li.maximenuck.level1 {
	display: inline-block !important;
	float: none !important;
	position:static;
	margin : 0;
	list-style : none;
	border : none;
	vertical-align: middle;
	text-align: left;
	cursor: pointer;
	filter: none;
	padding : 0 10px;
	background : url(../images/separator.png) top right no-repeat;
}

/** IE 7 only **/
*+html div#<?php echo $id; ?> ul.maximenuck li.maximenuck.level1 {
	display: inline !important;
}

/* vertical menu */
div#<?php echo $id; ?>.maximenuckv ul.maximenuck li.maximenuck.level1 {
	display: block !important;
	margin: 0;
	padding: 0;
	text-align: left;
}

div#<?php echo $id; ?>.maximenuckv ul.maximenuck li.maximenuck.level1:hover,
div#<?php echo $id; ?>.maximenuckv ul.maximenuck li.maximenuck.level1.active {
	background :  #1a1a1a url(../images/fond_bg.png) top left repeat-x;
}

div#<?php echo $id; ?> ul.maximenuck li.maximenuck.level1 > a,
div#<?php echo $id; ?> ul.maximenuck li.maximenuck.level1 > span.separator {
	display:block;
	float : none !important;
	float : left;
	position:relative;
	text-decoration:none;
	outline : none;
	border : none;
	white-space: nowrap;
	filter: none;
	padding : 0 0 6px;
	color : #ccc;
	background : none;
	text-shadow: none;
	box-shadow: none;
	text-indent : 2px;
	min-height : 28px;
}

div#<?php echo $id; ?> ul.maximenuck li.maximenuck.level1 > a span.titreck,
div#<?php echo $id; ?> ul.maximenuck li.maximenuck.level1 > span.separator span.titreck{
	line-height : 25px;
}

/* parent item on mouseover (if subemnus exists) */
div#<?php echo $id; ?> ul.maximenuck li.maximenuck.level1.parent:hover,
div#<?php echo $id; ?> ul.maximenuck li.maximenuck.level1.parent:hover {

}

/* item color on mouseover */
div#<?php echo $id; ?> ul.maximenuck li.maximenuck.level1:hover > a span.titreck,
div#<?php echo $id; ?> ul.maximenuck li.maximenuck.level1.active > a span.titreck,
div#<?php echo $id; ?> ul.maximenuck li.maximenuck.level1:hover > span.separator,
div#<?php echo $id; ?> ul.maximenuck li.maximenuck.level1.active > span.separator {
	color: #fff;
}

/* arrow image for parent item */
div#<?php echo $id; ?>.maximenuckh ul.maximenuck li.level1.parent > a:after,
div#<?php echo $id; ?>.maximenuckh ul.maximenuck li.level1.parent > span.separator:after {
	border-style: solid;
	border-width: 4px 4px 0 4px;
	border-color: #ccc transparent transparent transparent;
	margin: 0 3px;
	bottom: 4px;
	content: "";
	display: block;
	float: right;
	height: 0;
	left: 50%;
	margin: 0 0 0 -4px;
	position: absolute;
	width: 0;
}

div#<?php echo $id; ?> ul.maximenuck li.level1.parent:hover > a:after,
div#<?php echo $id; ?> ul.maximenuck li.level1.parent:hover > span.separator:after {
}

/* vertical menu */
div#<?php echo $id; ?>.maximenuckv ul.maximenuck li.level1.parent > a:after,
div#<?php echo $id; ?>.maximenuckv ul.maximenuck li.level1.parent > span.separator:after {
	display: inline-block;
	content: "";
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 4px 0 4px 4px;
	border-color: transparent transparent transparent #ccc;
	margin: 6px 3px;
	position: absolute;
	right: 3px;
	top: 2px;
}

/* arrow image for submenu parent item */
div#<?php echo $id; ?> ul.maximenuck li.level1.parent li.parent > a:after,
div#<?php echo $id; ?> ul.maximenuck li.level1.parent li.parent > span.separator:after,
div#<?php echo $id; ?> ul.maximenuck li.maximenuck ul.maximenuck2 li.parent:hover > a:after,
div#<?php echo $id; ?> ul.maximenuck li.maximenuck ul.maximenuck2 li.parent.active > a:after {
	display: inline-block;
	content: "";
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 4px 0 4px 4px;
	border-color: transparent transparent transparent #ccc;
	margin: 3px;
	position: absolute;
	right: 3px;
	top: 2px;
}

/* styles for right position */
div#<?php echo $id; ?> ul.maximenuck li.maximenuck.level1.align_right,
div#<?php echo $id; ?> ul.maximenuck li.maximenuck.level1.menu_right,
div#<?php echo $id; ?> ul.maximenuck li.align_right,
div#<?php echo $id; ?> ul.maximenuck li.menu_right {
	float:right !important;
	margin-right:0px !important;
}

div#<?php echo $id; ?> ul.maximenuck li.align_right:not(.fullwidth) div.floatck,
div#<?php echo $id; ?> ul.maximenuck li:not(.fullwidth) div.floatck.fixRight {
	left:auto;
	right:0px;
	top:auto;
}


/* arrow image for submenu parent item to open left */
div#<?php echo $id; ?> ul.maximenuck li.level1.parent div.floatck.fixRight li.parent > a:after,
div#<?php echo $id; ?> ul.maximenuck li.level1.parent div.floatck.fixRight li.parent > span.separator:after,
div#<?php echo $id; ?> ul.maximenuck li.level1.parent.menu_right li.parent > a:after,
div#<?php echo $id; ?> ul.maximenuck li.level1.parent.menu_right li.parent > span.separator:after {
	border-color: transparent #fff transparent transparent;
}

/* margin for right elements that rolls to the left */
div#<?php echo $id; ?> ul.maximenuck li.maximenuck div.floatck div.floatck.fixRight,
div#<?php echo $id; ?> ul.maximenuck li.level1.parent.menu_right div.floatck div.floatck  {
	margin-right : 180px;
}

div#<?php echo $id; ?> ul.maximenuck li div.floatck.fixRight{

}


/*---------------------------------------------
---	 	Sublevel items - level 2 to n		---
----------------------------------------------*/

div#<?php echo $id; ?> ul.maximenuck li div.floatck ul.maximenuck2,
div#<?php echo $id; ?> ul.maximenuck2 {
    z-index:11000;
    clear:left;
    text-align : left;
    background : transparent;
    margin : 0 !important;
    padding : 0 !important;
    border : none !important;
    box-shadow: none !important;
    width : 100%; /* important for Chrome and Safari compatibility */
    position: static !important;
    overflow: visible !important;
    display: block !important;
    float: none !important;
    visibility: visible !important;
}

div#<?php echo $id; ?> ul.maximenuck li ul.maximenuck2 li.maximenuck,
div#<?php echo $id; ?> ul.maximenuck2 li.maximenuck {
	text-align : left;
	z-index : 11001;
	padding : 2px 0 0 0;
	margin : 0 5px;
	position:static;
	float:none !important;
	list-style : none;
	display: block !important;
}

div#<?php echo $id; ?> ul.maximenuck li ul.maximenuck2 li.maximenuck:hover,
div#<?php echo $id; ?> ul.maximenuck2 li.maximenuck:hover {
}

/* all links styles */
div#<?php echo $id; ?> ul.maximenuck li.maximenuck a,
div#<?php echo $id; ?> ul.maximenuck li.maximenuck span.separator,
div#<?php echo $id; ?> ul.maximenuck2 a,
div#<?php echo $id; ?> ul.maximenuck2 li.maximenuck span.separator {
	display: block;
	padding : 3px 0 3px 0;
	margin : 0 2%;
	display:block;
	float : none !important;
	float : left;
	position:relative;
	text-decoration:none;
	outline : none;
	white-space: normal;
	filter: none;
	border-bottom : 1px solid #505050;
	width: 96%;
	clear:both;
	text-shadow: none;
	color: #888;
}

/* submenu link */
div#<?php echo $id; ?> ul.maximenuck li.maximenuck ul.maximenuck2 li a,
div#<?php echo $id; ?> ul.maximenuck2 li a {

}

div#<?php echo $id; ?> ul.maximenuck li.maximenuck ul.maximenuck2 a,
div#<?php echo $id; ?> ul.maximenuck2 a {
	display: block;
}

div#<?php echo $id; ?> ul.maximenuck li.maximenuck ul.maximenuck2 li:hover > a,
div#<?php echo $id; ?> ul.maximenuck li.maximenuck ul.maximenuck2 li:hover > h2 a,
div#<?php echo $id; ?> ul.maximenuck li.maximenuck ul.maximenuck2 li:hover > h3 a,
div#<?php echo $id; ?> ul.maximenuck li.maximenuck ul.maximenuck2 li.active > a,
div#<?php echo $id; ?> ul.maximenuck2 li:hover > a,
div#<?php echo $id; ?> ul.maximenuck2 li:hover > h2 a,
div#<?php echo $id; ?> ul.maximenuck2 li:hover > h3 a,
div#<?php echo $id; ?> ul.maximenuck2 li.active > a{
	color: #ddd;
	background: none !important;
}


/* link image style */
div#<?php echo $id; ?> li.maximenuck > a img {
	margin : 3px;
	border : none;
}

/* img style without link (in separator) */
div#<?php echo $id; ?> li.maximenuck img {
	border : none;
}

/* item title */
div#<?php echo $id; ?> span.titreck {
	/*display : block;*/
	text-transform : none;
	font-weight : normal;
	font-size : 14px;
	line-height : 17px;
	text-decoration : none;
	/*height : 17px;*/
	min-height : 17px;
	float : none !important;
	float : left;
	margin: 0;
}

/* item description */
div#<?php echo $id; ?> span.descck {
	color : #c0c0c0;
	display : block;
	text-transform : none;
	font-size : 10px;
	text-decoration : none;
	min-height : 12px;
	line-height : 12px;
	float : none !important;
	float : left;
	margin: -3px 0 3px 0;
}

/*--------------------------------------------
---		Submenus						------
---------------------------------------------*/

/* submenus container */
div#<?php echo $id; ?> div.floatck {
	position : absolute;
	display: none;
	padding : 0;
	margin : 0 0 0 -10px;
	filter: none;
	/*width : 180px;/ /* default width */
	text-align:left;
	background: #1a1a1a;
	border: 1px solid #707070;
	width: inherit;
	z-index:9999;
	cursor: auto;
}

div#<?php echo $id; ?> div.maxidrop-main {
	width : 180px; /* default width */
}

/* vertical menu */
div#<?php echo $id; ?>.maximenuckv div.floatck {
	margin : -35px 0 0 98%;
}

div#<?php echo $id; ?> .maxipushdownck div.floatck {
	margin: 0;
}

/* child blocks position (from level2 to n) */
div#<?php echo $id; ?> ul.maximenuck li.maximenuck div.floatck div.floatck {
	margin : -30px 0 0 170px;
}

/**
** Show/hide sub menu if mootools is off - horizontal style
**/
div#<?php echo $id; ?> ul.maximenuck li:hover:not(.maximenuckanimation) div.floatck div.floatck, div#<?php echo $id; ?> ul.maximenuck li:hover:not(.maximenuckanimation) div.floatck:hover div.floatck div.floatck, div#<?php echo $id; ?> ul.maximenuck li:hover:not(.maximenuckanimation) div.floatck:hover div.floatck:hover div.floatck div.floatck,
div#<?php echo $id; ?> ul.maximenuck li.sfhover:not(.maximenuckanimation) div.floatck div.floatck, div#<?php echo $id; ?> ul.maximenuck li.sfhover:not(.maximenuckanimation) div.floatck.sfhover div.floatck div.floatck, div#<?php echo $id; ?> ul.maximenuck li.sfhover:not(.maximenuckanimation) div.floatck.sfhover div.floatck.sfhover div.floatck div.floatck {
display: none;
}

div#<?php echo $id; ?> ul.maximenuck li.maximenuck:hover > div.floatck, div#<?php echo $id; ?> ul.maximenuck li.maximenuck:hover > div.floatck li.maximenuck:hover > div.floatck, div#<?php echo $id; ?> ul.maximenuck li.maximenuck:hover>  div.floatck li.maximenuck:hover > div.floatck li.maximenuck:hover > div.floatck, div#<?php echo $id; ?> ul.maximenuck li.maximenuck:hover > div.floatck li.maximenuck:hover > div.floatck li.maximenuck:hover > div.floatck li.maximenuck:hover > div.floatck,
div#<?php echo $id; ?> ul.maximenuck li.sfhover > div.floatck, div#<?php echo $id; ?> ul.maximenuck li.sfhover > div.floatck li.sfhover > div.floatck, div#<?php echo $id; ?> ul.maximenuck li.sfhover > div.floatck li.sfhover > div.floatck li.sfhover > div.floatck, div#<?php echo $id; ?> ul.maximenuck li.sfhover > div.floatck li.sfhover > div.floatck li.sfhover > div.floatck li.sfhover > div.floatck {
display: block;
}

div#<?php echo $id; ?> div.maximenuck_mod ul {
display: block;
}

/*---------------------------------------------
---	 	Columns management					---
----------------------------------------------*/

div#<?php echo $id; ?> ul.maximenuck li div.floatck div.maximenuck2 {
	/*width : 180px;*/ /* default width */
	margin: 0;
	padding: 0;
}


/* h2 title */
div#<?php echo $id; ?> ul.maximenuck li.maximenuck ul.maximenuck2 h2 a,
div#<?php echo $id; ?> ul.maximenuck li.maximenuck ul.maximenuck2 h2 span.separator,
div#<?php echo $id; ?> ul.maximenuck2 h2 a,
div#<?php echo $id; ?> ul.maximenuck2 h2 span.separator {
	font-size:21px;
	font-weight:400;
	letter-spacing:-1px;
	margin:7px 0 14px 0;
	padding-bottom:14px;
	line-height:21px;
	text-align:left;
}

/* h3 title */
div#<?php echo $id; ?> ul.maximenuck li.maximenuck ul.maximenuck2 h3 a,
div#<?php echo $id; ?> ul.maximenuck li.maximenuck ul.maximenuck2 h3 span.separator,
div#<?php echo $id; ?> ul.maximenuck2 h3 a,
div#<?php echo $id; ?> ul.maximenuck2 h3 span.separator {
	font-size:14px;
	margin:7px 0 14px 0;
	padding-bottom:7px;
	line-height:21px;
	text-align:left;
}
    
/* paragraph */
div#<?php echo $id; ?> ul.maximenuck li ul.maximenuck2 li p,
div#<?php echo $id; ?> ul.maximenuck2 li p {
	line-height:18px;
	margin:0 0 10px 0;
	font-size:12px;
	text-align:left;
}




/* image shadow with specific class */
div#<?php echo $id; ?> .imgshadow { /* Better style on light background */
	background:#FFFFFF !important;
	padding:4px;
	border:1px solid #777777;
	margin-top:5px;
	-moz-box-shadow:0px 0px 5px #666666;
	-webkit-box-shadow:0px 0px 5px #666666;
	box-shadow:0px 0px 5px #666666;
}

/* blackbox style */
div#<?php echo $id; ?> ul.maximenuck li ul.maximenuck2 li.blackbox,
div#<?php echo $id; ?> ul.maximenuck2 li.blackbox {
	background-color:#333333 !important;
	color: #eeeeee;
	text-shadow: 1px 1px 1px #000;
	padding:4px 6px 4px 6px !important;
	margin: 0px 4px 4px 4px !important;
	-moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
	/*-webkit-box-shadow:inset 0 0 3px #000000;
	-moz-box-shadow:inset 0 0 3px #000000;
	box-shadow:inset 0 0 3px #000000;*/
	border: 1px solid #000;
}

div#<?php echo $id; ?> ul.maximenuck li ul.maximenuck2 li.blackbox:hover,
div#<?php echo $id; ?> ul.maximenuck2 li.blackbox:hover {
	background-color:#333333 !important;
}

div#<?php echo $id; ?> ul.maximenuck li ul.maximenuck2 li.blackbox a,
div#<?php echo $id; ?> ul.maximenuck2 li.blackbox a {
	color: #fff;
	text-shadow: 1px 1px 1px #000;
	border: none;
	/*display: inline !important;*/
}

div#<?php echo $id; ?> ul.maximenuck li ul.maximenuck2 li.blackbox:hover > a,
div#<?php echo $id; ?> ul.maximenuck2 li.blackbox:hover > a{
	text-decoration: underline;
}

/* greybox style */
div#<?php echo $id; ?> ul.maximenuck li ul.maximenuck2 li.greybox,
div#<?php echo $id; ?> ul.maximenuck2 li.greybox {
	background:#f0f0f0 !important;
	border:1px solid #bbbbbb;
	padding: 4px 6px 4px 6px !important;
	margin: 0px 4px 4px 4px !important;
	-moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -khtml-border-radius: 5px;
    border-radius: 5px;
}

div#<?php echo $id; ?> ul.maximenuck li ul.maximenuck2 li.greybox:hover,
div#<?php echo $id; ?> ul.maximenuck2 li.greybox:hover {
	background:#ffffff !important;
	border:1px solid #aaaaaa;
}

div#<?php echo $id; ?> ul.maximenuck li ul.maximenuck2 li.greybox a,
div#<?php echo $id; ?> ul.maximenuck2 li.greybox a {
	border: none;
}

div#<?php echo $id; ?> ul.maximenuck li ul.maximenuck2 li.greybox:hover > a,
div#<?php echo $id; ?> ul.maximenuck2 li.greybox:hover > a{
	color: #1a1a1a;
}


/*---------------------------------------------
---	 	Module in submenus					---
----------------------------------------------*/

/* module title */
div#<?php echo $id; ?> ul.maximenuck div.maximenuck_mod > div > h3,
div#<?php echo $id; ?> ul.maximenuck2 div.maximenuck_mod > div > h3 {
	width : 100%;
	font-weight : bold;
	font-size: 16px;
}

div#<?php echo $id; ?> div.maximenuck_mod {
	/*width : 100%;*/
	padding : 0;
	color : #ddd;
	white-space : normal;
}

div#<?php echo $id; ?> div.maximenuck_mod div.moduletable {
    border : none;
    background : none;
}

div#<?php echo $id; ?> div.maximenuck_mod  fieldset{
    width : 100%;
    padding : 0;
    margin : 0 auto;
    /*overflow : hidden;*/
    background : transparent;
    border : none;
}

div#<?php echo $id; ?> ul.maximenuck2 div.maximenuck_mod a {
    border : none;
    margin : 0;
    padding : 0;
    display : inline;
    background : transparent;
    color : #888;
    font-weight : normal;
}

div#<?php echo $id; ?> ul.maximenuck2 div.maximenuck_mod a:hover {
    color : #FFF;
}

/* module title */
div#<?php echo $id; ?> ul.maximenuck2 div.maximenuck_mod h3 {
    font-size : 14px;
    width : 100%;
    color : #aaa;
    font-size : 14px;
    font-weight : normal;
    background : #444;
    margin : 5px 0 0 0;
    padding : 3px 0 3px 0;
}

div#<?php echo $id; ?> ul.maximenuck2 div.maximenuck_mod ul {
    margin : 0;
    padding : 0;
    width : 100%;
    background : none;
    border : none;
    text-align : left;
}

div#<?php echo $id; ?> ul.maximenuck2 div.maximenuck_mod li {
    margin : 0 0 0 15px;
    padding : 0;
    background : none;
    border : none;
    text-align : left;
    font-size : 11px;
    float : none;
    display : block;
    line-height : 20px;
    white-space : normal;
}

/* login module */
div#<?php echo $id; ?> ul.maximenuck2 div.maximenuck_mod #form-login ul {
    left : 0;
    margin : 0;
    padding : 0;
    width : 100%;
}

div#<?php echo $id; ?> ul.maximenuck2 div.maximenuck_mod #form-login ul li {
    margin : 2px 0;
    padding : 0 5px;
    height : 20px;
    background : transparent;
}


/*---------------------------------------------
---	 	Fancy styles (floating cursor)		---
----------------------------------------------*/

div#<?php echo $id; ?> .maxiFancybackground {
	position: absolute;
    top : 0;
    list-style : none;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important;
	z-index: -1;
}

div#<?php echo $id; ?> .maxiFancybackground .maxiFancycenter {
	background: url('../images/fancy_bg.png') repeat-x top left;
	height : 34px;
}

div#<?php echo $id; ?> .maxiFancybackground .maxiFancyleft {

}

div#<?php echo $id; ?> .maxiFancybackground .maxiFancyright {

}

div#<?php echo $id; ?> span.maxiclose {
    color: #fff;
}

/*---------------------------------------------
---	 	Button to close on click			---
----------------------------------------------*/

div#<?php echo $id; ?> span.maxiclose {
    color: #fff;
}

/*---------------------------------------------
---	 Stop the dropdown                  ---
----------------------------------------------*/

div#<?php echo $id; ?> ul.maximenuck li.maximenuck.nodropdown div.floatck,
div#<?php echo $id; ?> ul.maximenuck li.maximenuck div.floatck li.maximenuck.nodropdown div.floatck,
div#<?php echo $id; ?> .maxipushdownck div.floatck div.floatck {
	position: static !important;
	background:  none;
	border: none;
	left: auto;
	margin: 3px;
	moz-box-shadow: none;
	-webkit-box-shadow: none;
	box-shadow: none;
	display: block !important;
}

div#<?php echo $id; ?> ul.maximenuck li.level1.parent ul.maximenuck2 li.maximenuck.nodropdown li.maximenuck,
div#<?php echo $id; ?> .maxipushdownck ul.maximenuck2 li.maximenuck.nodropdown li.maximenuck {
	background: none;
	text-indent: 5px;
}

div#<?php echo $id; ?> ul.maximenuck li.maximenuck.level1.parent ul.maximenuck2 li.maximenuck.parent.nodropdown > a,
div#<?php echo $id; ?> ul.maximenuck li.maximenuck.level1.parent ul.maximenuck2 li.maximenuck.parent.nodropdown > span.separator,
div#<?php echo $id; ?> .maxipushdownck ul.maximenuck2 li.maximenuck.parent.nodropdown > a,
div#<?php echo $id; ?> .maxipushdownck ul.maximenuck2 li.maximenuck.parent.nodropdown > span.separator {
	background:  none;
}

/* remove the arrow image for parent item */
div#<?php echo $id; ?> ul.maximenuck li.maximenuck.level1.parent ul.maximenuck2 li.parent.nodropdown > *:after,
div#<?php echo $id; ?> .maxipushdownck ul.maximenuck2 li.parent > *:after {
	display: none;
}

div#<?php echo $id; ?> li.maximenuck.nodropdown > div.floatck > div.maxidrop-main {
	width: auto;
}

/*---------------------------------------------
---	 Full width				                ---
----------------------------------------------*/

div#<?php echo $id; ?>.maximenuckh li.fullwidth > div.floatck {
	margin: 0;
	padding: 0;
	width: auto !important;
	left: 0;
	right: 0;
}

div#<?php echo $id; ?>.maximenuckv li.fullwidth > div.floatck {
	margin: 0 0 0 -5px;
	padding: 0;
	top: 0;
	bottom: 0;
	left: 100%;
	right: auto !important;
}

div#<?php echo $id; ?> li.fullwidth > div.floatck > div.maxidrop-main {
	width: auto !important;
}

div#<?php echo $id; ?>.maximenuckv li.fullwidth > div.floatck > .maxidrop-main {
	height: 100%;
	overflow-y: auto;
}

/*---------------------------------------------
---	 Tabs					                ---
----------------------------------------------*/

div#<?php echo $id; ?> ul.maximenuck li.maximenucktab > div.floatck div.floatck {
	top: 0;
	bottom: 0;
	left: 180px;
	width: calc(100% - 180px);
	margin: 0;
	overflow: auto;
}
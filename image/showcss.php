<?php header("Content-type: text/css"); ?>

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	text-decoration: none;
}

div.head {
	position: fixed;
	top: 0px;
	width :100%;
	height: 50px;
	background-color: blue;
	display: flex;
	align-items: center;
	padding-left: 20px; 
}

h1 a {
	color: #ffca28;
}

div.layout {
	
	color: orange;
	font-size: 20px;
	display: flex;
	height: 50px;
	width: 100%;
	margin-right: 20px;
	justify-content:flex-end;
	align-items: center;  
}

div.layout a {
	color: orange;
	padding-right: 10px;
	text-decoration: none;
}
.image_header {
	height: 25px;
	font-size: 16px;
	line-height: 25px; 
	width: 80%;
	background-color: grey;
	margin: 50px auto 0px auto;
}

div.results-grid {
	width: 80%;
	height:100%;
	margin:10px auto 0 auto;
	background-color: grey;
	display: flex;
	flex-wrap: wrap;
}
div.footer {
	height: 50px;
	width: 100%;
	background-color: black;
	position: fixed;
	bottom: 0px;

}
div.footer p {
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	font-size: 15px;
	color: white;
}

div.results-grid p.grid {
	margin: auto;
	height: 300px;
	width: 200px;
	border: 3px solid orange;
	border-radius: 7px;
	display: flex;
	justify-content: center;
	align-items: center; 
	background-color: #a4a4a4;
}

div.results-grid p.grid img {
	width: 200px;
	height: auto;
}


div.result-list {
	display: none;
	width: 80%;
	height:100%;
	margin:10px auto 0 auto;
	background-color: grey;
	flex-wrap: wrap;	
}
div.result-list div.list {
	width: 438px;
	height: 300px;
	border: 3px solid orange;
	border-radius: 7px;
	display: flex;
	align-items: center; 
	background-color: #a4a4a4;
	margin: auto;
}
div.result-list div.list img {
	width: 200px;
	height: auto;
}
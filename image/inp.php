<?php header("Content-type: text/css"); ?>

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
.bg-image {
	background-image: url("./images/ahoy.jpg");
	filter: blur(8px);
  	-webkit-filter: blur(8px);
  	height: calc(100vh - 80px);
}


h1 {
	height: 80px;
	font-size: 75px;
	display: flex;
	justify-content: center;
	align-items: center;
	background-color: #f2e3d3;
}

.form {
	filter: none;
  	-webkit-filter: none;
	height: 60vh;
	width: 100vw;
	display: flex;
	justify-content: space-around;
	align-items: center;
	flex-direction: column;
	font-family: sans-serif;
	position: absolute;
	top: 100px;
}

.input1 {
	font-size: 16px;
	width: 50%;
	height: 50px;
	position: relative;
	overflow: hidden;
}

.input1 input#trans {
	font-size: 27px;
	width: 100%;
	height: 100%;
	color: #595f6e;
	padding-top: 20px;
	border: none;
	outline: none;
	background-color: #ecead9;
	opacity: 0.4;
}

.input1 label {
	position: absolute;
	bottom: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
	pointer-events: none;
	border-bottom: 1px solid black;

}

.input1 label::after {
	content: "";
	position: absolute;
	left: 0px;
	bottom: -1px;
	height: 100%;
	width: 100%;
	border-bottom: 3px solid #5fa8d3;
	transform: translateX(-100%);
	transition: transform 0.3s ease;
}

.content-name {
	position: absolute;
	bottom: 5px;
	left: 0px;
	transition: all 0.3s ease;
}

.input1 input#trans:focus + .label-name .content-name,
.input1 input#trans:valid + .label-name .content-name {
	transform: translateY(-150%);
	font-size: 14px;
	color: red;
}

.input1 input#trans:focus + .label-name::after, .input1 input#trans:valid + .label-name::after {
	transform: translateX(0%);
}

input#submit {
	width : 10%;
	height: 40px;
	border-left: none;
	border-right: none;

}
input#submit:hover {
	background-color: #ffb6b1;
	border: none;
}
h1 span.h {
	color: red;
}
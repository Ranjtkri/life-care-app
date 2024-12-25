<?php
error_reporting(0);
include("dbconnection.php");
$dt = date("Y-m-d");
$tim = date("H:i:s");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>HMS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<style>
/* Style The Dropdown Button */
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
	background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
<script type="application/javascript">
(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);
</script>
<style>
input[type=submit]{
background-color: #4CAF50; /* Green */ border: none; 
cursor:pointer;
color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;
}
input[type=reset]{
background-color: #4CAF50; /* Green */ border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;
}
input[type=text]{
	display: block;
    width: 75%;
    height: 24px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
input[type=password]{
	display: block;
    width: 75%;
    height: 24px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

input[type=number]{
	display: block;
    width: 75%;
    height: 24px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
</style>
</head>
<body id="top">
<div class="wrapper col1">
<br>
<center><a href="index.php"><img src="images/logo.png" width=200></a>
<br>
<font color=white face="Cooper" size=6>ONLINE HOSPITAL MANAGEMENT SYSTEM</font>
</center>
  <div id="head">
    <div id="topnav1">
	
     <div align="center"><br><br>
        <a  class="a" href="index.php" <?php if(basename($_SERVER['PHP_SELF']) == "index.php"){ echo ' class="active"'; } ?> >Home</a>&nbsp;&nbsp;
        <a class="a" href="aboutus.php" <?php if(basename($_SERVER['PHP_SELF']) == "aboutus.php"){ echo ' class="active"'; } ?>>About US</a>&nbsp;&nbsp;
<?php
if(!isset($_SESSION[patientid]))
{
?>        
        <a class="a" href="patientappointment.php" <?php if(basename($_SERVER['PHP_SELF']) == "patientappointment.php"){ echo ' class="active"'; } ?>>Online Appointment</a>&nbsp;&nbsp;
        <a class="a" href="patientlogin.php" <?php if(basename($_SERVER['PHP_SELF']) == "patientlogin.php"){ echo ' class="active"'; } ?>>Login</a> &nbsp;&nbsp;
        <a class="a" href="patient.php" <?php if(basename($_SERVER['PHP_SELF']) == "patient.php"){ echo ' class="active"'; } ?>>Registration</a>&nbsp;&nbsp;
<?php
}
else
{
?>
<a class="a" href="patientappointment.php" <?php if(basename($_SERVER['PHP_SELF']) == "patientappointment.php"){ echo ' class="active"'; } ?>>Online Appointment</a>&nbsp;&nbsp;
<?php
}
?>        
        <a class="a" href="contactus.php" <?php if(basename($_SERVER['PHP_SELF']) == "contactus.php"){ echo ' class="active"'; } ?>>Contact US</a>&nbsp;&nbsp;
		</div>
    </div>
   
  </div>
</div>
<div style="text-align:center">
<?php
include("menu.php");
?>
</div>

<style>
.a {
	background-color:#3bb3e0;
	padding:10em;
	font-family: 'Open Sans', sans-serif;
	text-decoration:none;
	font-size:1.2em;
	color:#fff;
	);
	-webkit-box-shadow: inset 0px 1px 0px #7fd2f1, 0px 6px 0px #156785;
	-moz-box-shadow: inset 0px 1px 0px #7fd2f1, 0px 6px 0px #156785;
	-o-box-shadow: inset 0px 1px 0px #7fd2f1, 0px 6px 0px #156785;
	box-shadow: inset 0px 1px 0px #7fd2f1, 0px 6px 0px #156785;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	-o-border-radius: 10px;
	border-radius: 10px;
}

.a_demo_two::before {
	
	background-color:#072239;
	content:"";
	display:block;
	position:absolute;
	padding-left:2px;
	padding-right:2px;
	padding-bottom:4px;

	left:5px;
	top:10px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-o-border-radius: 5px;
	border-radius: 5px;
	-webkit-box-shadow: 0px 1px 0px #fff;
	-moz-box-shadow: 0px 1px 0px #fff;
	-o-box-shadow: 0px 1px 0px #fff;
	box-shadow: 0px 1px 0px #fff;
}

.a_demo_two:active {
	color:#156785;
	text-shadow: 0px 1px 1px rgba(255,255,255,0.3);
	background:rgb(44,160,202);
	-webkit-box-shadow: inset 0px 1px 0px #7fd2f1, inset 0px -1px 0px #156785;
	-moz-box-shadow: inset 0px 1px 0px #7fd2f1, inset 0px -1px 0px #156785;
	-o-box-shadow: inset 0px 1px 0px #7fd2f1, inset 0px -1px 0px #156785;
	box-shadow: inset 0px 1px 0px #7fd2f1, inset 0px -1px 0px #156785;
	box-shadow: inset 0px 1px 0px #7fd2f1, inset 0px -1px 0px #156785;
	top:7px;
}

.a_demo_two:active::before {
	top:10px;
}
</style>
<!--<?php
session_start();
   ?>-->
<!DOCTYPE html>
<html>
<head>
<style>

body {
	
   background-image: url("cutie4.jpg");
   background-size:55% 55%
   background-repeat: no-repeat;
   
}



ul
 {
    list-style-type:none;
    margin:0;
	padding:0;
	padding-top:6px;
	padding-bottom:6px;
	overflow:hidden;
 }
li {
	display:inline;
	overflow:hidden;
	//float: left;
	padding:6px;
	padding-top:6px;
	padding-bottom:6px;
	font-weight:bold;
	color:white;
	background-color:DarkTurquoise;
	text-align:center;
	
	text-decoration:none;
	text-transform:uppercase;
	}
h1 {
	color:DarkTurquoise;
	font-family: Arial, Helvetica, sans-serif;
}
.dropdown {
	
    display: inline-block;
	margin=5px;
	}
.dropdown-content {
    display: none;
    position: absolute;
background-color:DarkTurquoise;

	
	}
.dropdown-content a:hover {
	color: black }
	
.dropdown:hover .dropdown-content {
	
    display: block;
	
	}
a{
	color:white; 
	}
 a:link 
 {
	 
 text-decoration: none;
 color: white;
 
	}


table, th, td{
border: 1px solid white;


}
table {
      color: white;
    background-color: DarkTurquoise;
}
th {
    text-align: center;
}

td {
    padding: 15px;
}


  div{
  color: black;
//  background-color:DarkTurquoise;
  font-family: serif;
  font-size: 100%;
  }


</style>
</head>

<body>
<h1> Grocery Store System </h1>


<ul>
<li><a href="home.php">HOME</a></li>

<li><div class="dropdown">
  <span style="color:white">BASIC</span>
   <div class="dropdown-content">
    <ul><a href="insert.php">INSERT</a></ul>
	<ul><a href="update.php">UPDATE</a></ul>
	<ul><a href="delete.php">DELETE</a></ul>
	<ul><a href="search.php">SEARCH</a></ul>
	
  </div>
</div></li>

 
<li><div class="dropdown">
  <span style="color:white">ADVANCED</span>
   <div class="dropdown-content">
    <ul><a href="advancedsearch.php">Advanced Search</a></ul>
    <ul><a href="profit.php">Profit Calc</a></ul>
    
	
  </div>
</div></li>

<li><a href = "about.php">About</a></li>

</ul>



</body>
</html>

<!DOCTYPE html>
<html>
<head>
<title>Navigation bar</title>
<link rel="stylesheet" href="style.css">
<style>
    body {
    margin: 0;
  }
  
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 15%;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
  }
  
  li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
  }
  
  li a.active {
    background-color: #04AA6D;
    color: white;
  }
  
  li a:hover:not(.active) {
    background-color: #555;
    color: white;
  }
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="adddetails.php">ADD Activity</a></li>

  


  <li><a href="#contact">Display Activity</a></li>
  <li><a href="#about">Edit</a></li>
  <li><a href="#about">Download</a></li>
  <li><a href="#about">Edit profile</a></li>
  <li><a href="logout.php">Logout</a></li>

</ul>
<div style="margin-left:15%;padding:1px 16px;height:1000px;">
        <h1 style="text-align:center">  B.V.V SANGHA'S  </h1>
        <h2 style="text-align:center">BASAVESHWAR  ENGINEERING COLLEGE (AUTONOMOUS) BAGALKOT</h2>



</body>
</html>
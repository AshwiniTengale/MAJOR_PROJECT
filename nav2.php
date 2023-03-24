<!DOCTYPE html>
<html>
  <head>
    <style>
      /* Style the navigation menu */
      /* Style for the navigation bar */
nav {
  display: inline-block;
  width: 200px;
  background-color: #f1f1f1;
  height: 100%;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

nav li a {
  display: block;
  padding: 10px;
  text-decoration: none;
  color: #000;
  font-weight: bold;
}

nav li a:hover {
  background-color: #ddd;
}

      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
      }
      li {
        float: left;
      }
      li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }
      /* Change the color of the active link */
      .active {
        background-color: #4CAF50;
      }
      /* Style the dropdown button */
      .dropbtn {
        background-color: #333;
        color: white;
        padding: 14px 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
      }
      /* Style the dropdown content */
      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        z-index: 1;
      }
      .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
      }
      /* Change the color of dropdown links on hover */
      .dropdown-content a:hover {
        background-color: #f1f1f1;
      }
      /* Show the dropdown menu on hover */
      .dropdown:hover .dropdown-content {
        display: block;
      }
      /* Style the main content */
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }
      h1, h2 {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <ul>
      <li><a class="active" href="#home">Home</a></li>
      <li><a href="adddetails.php">ADD Activity</a></li>
      <li class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Dropdown</button>
        <div id="myDropdown" class="dropdown-content">
          <a href="#home">Home</a>
          <a href="#about">About</a>
          <a href="#contact">Contact</a>
        </div>
      </li>
      <li><a href="#contact">Display Activity</a></li>
      <li><a href="#about">Edit</a></li>
      <li><a href="#about">Download</a></li>
      <li><a href="#about">Edit profile</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
    <div style="margin-left:15%;padding:1px 16px;height:1000px;">
      <h1>B.V.V SANGHA'S</h1>
      <h2>BASAVESHWAR ENGINEERING COLLEGE (AUTONOMOUS) BAGALKOT</h2>
    </div>
  </body>
</html>

<!DOCTYPE html>
<html>
<head>
	<style>
		/* Style for navigation bar */
		nav {
			background-color: #333;
			overflow: hidden;
			width: 15%;
			position: fixed;
			height: 100%;
			transition: width 0.5s;
			z-index: 1;
			top: 0;
			left: 0;
			padding-top: 60px;
		}

		nav ul ,button.dropbtn {
			list-style-type: none;
			padding: 0;
			margin: 0;
		}

		nav li a{
			display: block;
			color: white;
			padding: 16px;
			text-decoration: none;
		}

		nav li a:hover,nav button{
			background-color: #4CAF50;
		}

		.active {
			background-color: #4CAF50;
		}

		/* Style for content */
		.content {
			margin-left: 15%;
			padding: 1px 16px;
			height: 1000px;
		}

		@media screen and (max-width: 600px) {
			nav {
				width: 100%;
				height: auto;
				padding-top: 50px;
			}
			nav li,button.dropbtn {
				float: none;
			}
			.content {
				margin-left: 0;
			}
		}

		/* Style for dropdown menu */
		.dropdown {
			position: relative;
			display: inline-block;
		}

		.dropdown-content{
			display: none;
			position: absolute;
			background-color: #000;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
		}

		.dropdown:hover .dropdown-content {
			display: block;
		}
    button.dropbtn {
      padding-left:10px;
      padding-top:20px;
      padding-right:110px;
      padding-bottom:10px;
    }
	</style>
</head>

<body>
    <nav>
      <ul>
        <li><a class="active" href="#home">Home</a></li>
      
        <li class="dropdown">
          <button onclick="myFunction()" class="dropbtn">AddActivity</button>
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
  </nav>
    <div style="margin-left:15%;padding:1px 16px;height:1000px;">
      <h1>B.V.V SANGHA'S</h1>
      <h2>BASAVESHWAR ENGINEERING COLLEGE (AUTONOMOUS) BAGALKOT</h2>
    </div>
  </body>
</html>

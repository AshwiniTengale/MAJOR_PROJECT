<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="bootstrap.css">
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
			padding-top: 20px;
		}

		nav ul {
			list-style-type: none;
			padding: 0;
			margin: 0;
		}

		nav li a,nav button{
			display: block;
			color: white;
			padding: 16px;
			text-decoration: none;
        
		}
		
      

		nav li a:hover,nav button:hover{
			background-color: #4CAF50;
		}

		nav a.active {
			background-color: #4CAF50;
		}

        nav button.active {
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
			nav li, nav button {
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
		.dropdown-content>a{
          padding:10px;
		}
		.dropdown-content{
			display: none;
			position: absolute;
			background-color: gray;
			min-width: 160px;
			
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;

		}

		.dropdown:hover .dropdown-content {
			display: block;
		}
     button.dropbtn {
      
      padding-top:17px;
      padding-right:120px;
      padding-bottom:17px;
      white-space: nowrap;
      border: none;
      background-color: #333;
    } 
.profile-logo p{
color:white;

}
p.user{
	padding-top:5%;
}

	</style>
</head>

<body>
<?php
session_start();

$USER=$_SESSION['USERNAME'];

?>

    <nav>
	<ul>
	    
		<div class="profile-logo" style="text-align:center;">
	       <img src="image/images (1).jpeg" alt="" height="60" width="60" >
		  
		   <br>
		   <p class="user">Welcome,<?php echo $USER ?></p>
          </div>
     <li>
		
	 </li>

        <li><a class="active" href="#home" onclick="setActive(this)">Home</a></li>
        
        <li class="dropdown">
          <button onclick="setActive(this)" class="dropbtn">Add Details</button>
          <div id="myDropdown" class="dropdown-content">
            <a href="book.php" onclick="setActive(this)" value="1" >Books/Book Chapters</a>
            <a href="conference.php" onclick="setActive(this)">Conference Publications</a>
            <a href="journal.php"  onclick="setActive(this)">Journal Papers</a>
            <a href="patent.php" onclick="setActive(this)">Patent</a>
            <a href="phd.php" onclick="setActive(this)">PhD</a>
            <a href="presentation.php" onclick="setActive(this)">Presentation</a>
            <a href="webiner.php" onclick="setActive(this)">Webinar</a>
          </div>
        </li>
        <li><a href="display.php" onclick="setActive(this)">Display Details</a></li>
		<li><a href="#contact" onclick="setActive(this)">Edit</a></li>
        
        <li><a href="#about" onclick="setActive(this)">Download</a></li>
      <li><a href="#about" onclick="setActive(this)">Edit profile</a></li>
      <li><a href="logout.php" onclick="setActive(this)">Logout</a></li>

    </ul>
  </nav>
  <div style="margin-left:15%;padding:1px 16px;height:100%;float:left;">
<!-- 
              <div class="logo" style="text-align:left;">
	       <img src="image/logo.jpg" alt="" height="60px" width="60px"> -->
		   <div class="mt-4;text-center display-4"  >
		   
         </div>
  <div class="row g-2">
    <div class="col-l-3 col-sm-4 col-6">
      <div class="card" style="width: 10rem;border:none;">
        <img src="image/logo.jpg" class="card-img-top img-fluid" alt="...">
        
         
        </div>
</div>
</div>
</div>
        <h1 style="text-align:center;margin-left:15%;padding:1px 16px;padding-top:2%;">  B.V.V SANGHA'S  </h1>
        <h2 style="text-align:center;margin-left:15%; margin-top:1%;padding:1px 16px;">BASAVESHWAR  ENGINEERING COLLEGE, BAGALKOTE</h2>

  
  
    
   
</div>
  </body>
  <script>
    function setActive(link) {
  // Remove active class from previously active link
  var prevActive = document.querySelector('.active');
  if (prevActive) {
    prevActive.classList.remove('active');
  }
  // Add active class to clicked link
  link.classList.add('active');
}
  </script>
</html>




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
// session_start();

// $USER=$_SESSION['USERNAME'];

?>

    <nav>
	<ul>
	    
		<div class="profile-logo" style="text-align:center;">
	       <img src="image/profile.jpeg"   height="60" width="60" default= img src="image/default.png" >
		  
		   <br>
		   <p class="user">Welcome,Admin<?php echo $USER ?></p>
          </div>
     <li>
		
	 </li>

        <li><a class="active" href="admin.php" onclick="setActive(this)">Display Details</a></li>
        
       
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


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=N">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <style>
body{
 
 background-image: url('image/BACKGROUND.jpg');
 background-size: cover;  
 background-position:center center;
 background-repeat:N-repeat;
 height:100vh;
 
 
 }
  </style>
  <body>
    
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
          <h1 class="text-center mb-4">Research Details</h1>
          <form action="admin_view.php" method="post">
          <div class="form-group">
          <label for="name" class="form-label">User ID</label>
          <input type="text" class="form-control" id="userid" name="userid" placeholder="Enter User ID" >
        </div>
            <div class="form-group">

            <label for="selectactivity" class="form-label">Select Activity</label>
    <select class="form-control" id="selectactivity" name="selectactivity" required>
        <option value="" disabled selected hidden>Select Activity</option>
        <option value="All">ALL</option>
        <option value="Book">Books/Book Chapters</option>
        <option value="Conference">Conference Publications</option>
        <option value="Journal">Journal Papers</option>
        <option value="Patent">Patents</option>
        <option value="Phd">PhD</option>
        
                        
    </select>
            </div>
          
            <div class="form-group">
           
              <label for="date" class="form-label">From Date</label>
          <input class="form-control" type="date" id="fromdate"  placeholder="From Date"  default="all" name="fromyear" >
            </div>
            <div class="form-group">
            <label for="date" class="form-label">To Date</label>
          <input class="form-control" type="date" id="todate"  placeholder="To Date"  default="all" name="toyear" >
            </div>
         
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
          </form>
        </div>
      </div>
    </div>
    
  </body>
</html>

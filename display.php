
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Display Details</title>
        <link rel="stylesheet" href="bootstrap.css">
    </head>
  
    <?php 
    include 'nav.php';
    ?>
   
   
 
<body>
    
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
          <h2 class="text-center mb-4">Research Details</h2>
          <form action="displaydetails.php" method="post">
          
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
          <input class="form-control" type="date" id="fromyear"  placeholder="From Date"  default="all" name="fromyear" >
            </div>
            <div class="form-group">
            <label for="date" class="form-label">To Date</label>
          <input class="form-control" type="date" id="toyear"  placeholder="To Date"  default="all" name="toyear" >
            </div>
            <br>
            <div class="form-group">
         <button  style="width:100%;" type="submit" value="Display" class="btn btn-primary btn-block">Submit</button>
         </div>
            
          </form>
        </div>
      </div>
    </div>
    
  </body>
                       
</html>
    
    
                 
</body>
</html>
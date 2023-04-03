<html>
    <?php 
    include 'nav.php';
    ?>
    <head>
        <link rel="stylesheet" href="bootstrap.css">
    </head>
    <body>  

   <form action="displaydetails.php" method="post">
    <div class="mb-3" style="float:left;margin-left:1%;">
    <label for="selectactivity" class="form-label"></label>
    <select class="form-select" id="selectactivity" name="selectactivity">
        <option value="" disabled selected hidden>Select Activity</option>
        <option value="1">Books/Book Chapters</option>
        <option value="2">Conference Publications</option>
        <option value="3">Journal Papers</option>
        <option value="4">Patents</option>
        <option value="5">PhD</option>
        <option value="6">Presentation </option>
        <option value="7">Webinar</option>
                        
    </select><br>
    <label for="scopusindex" class="form-label">Optional</label>
          <input type="date" id="fromyear"  placeholder="From Date"  default="all" name="fromyear"  style="padding-top:5%; width:100%"/> 
     <br><br>
          <input type="date" id="toyear"  placeholder="To Date"  default="all" name="toyear"  style="padding-top:5%; width:100%"/>
     <br><br>
          <input type="submit" value="Display" id="submit" style="padding-top:5%; width:100%;" />
    </div>
</form>
</body>    
                       
</html>
    
    
                 
</body>
</html>
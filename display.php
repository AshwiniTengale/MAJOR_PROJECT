<html>
    <?php 
    include 'nav.php';
    ?>
    <head>
        <link rel="stylesheet" href="bootstrap.css">
    </head>
    <body>  
        <fieldset>

   <form action="displaydetails.php" method="post">
    <div class="mb-3" style="float:left;margin-left:1%;">
    <label for="selectactivity" class="form-label"></label>
    <select class="form-control" id="selectactivity" name="selectactivity">
        <option value="" disabled selected hidden>Select Activity</option>
        <option value="All">ALL</option>
        <option value="Book">Books/Book Chapters</option>
        <option value="Conference">Conference Publications</option>
        <option value="Journal">Journal Papers</option>
        <option value="4">Patents</option>
        <option value="5">PhD</option>
        <option value="6">Presentation </option>
        <option value="7">Webinar</option>
                        
    </select><br>
    <label for="scopusindex" class="form-label">Optional</label>
          <input class="form-control" type="date" id="fromyear"  placeholder="From Date"  default="all" name="fromyear"  style="padding-top:5%; width:100%"/> 
     <br><br>
          <input type="date"class="form-control"  id="toyear"  placeholder="To Date"  default="all" name="toyear"  style="padding-top:5%; width:100%"/>
     <br><br>
          <input type="submit"class="btn btn-primary" value="Display" id="submit" style="padding-top:5%; width:100%;" />
    </div>
</form>
</fieldset>

</body>    
                       
</html>
    
    
                 
</body>
</html>
<?php

include 'connection.php' ;
session_start();
$UID=$_SESSION['ID'];

$table=$_POST['tablename'];
$rowid=$_POST['rowid'];

$sql="Select * From $table where  Id='$rowid'";
$result=mysqli_query($conn,$sql);





       if($result)
     
   {

       $row= mysqli_fetch_assoc($result);
       session_start();
       $_SESSION['RID']=$row['Id'];

    
       ?>
         
     <?php   
   
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    
</head>
<body>
   <?php
   
   
   if($table=='Book'){
?>
<form action="updatedetails.php" method="POST" > 
<div class="container">
  <h1 style="text-align:center">Book/Book Chapters Details</h1>
  <div class="row">
    <div class="col-md-6">


      <div class="mb-3">
        <label for="text" class="form-label">Author</label>
     <input type="text" class="form-control" id="bauthor" name="bauthor" value="<?php echo $row["bauthor"];?>"  >
      </div>
      
      <div>
      <div class="mb-3">

     <div id="textbox" class="mb-3">
         <label for="Coauthor's Name" class="form-label">Coauthor's Name </label>
         <input type="text"class="form-control" id="coauthor" name="coauthor" value="<?php echo $row["coauthor"];?>"  placeholder="Ex:Ramkrishna,Manohar">
     </div>
    
    </div>
  
      <div class="mb-3">
        <label for="doi" class="form-label">Date of Publication</label>
        <input type="date" class="form-control" id="dop" name="dop" value="<?php echo $row["dop"];?>"  >
      </div>

      <div class="mb-3">
        <label for="name" class="form-label">Title of the Chapter</label>
        <input type="text" class="form-control" id="chapter" name="chapter" value="<?php echo $row["chapter"];?>"  >
      </div>

      <div class="mb-3">
        <label for="name" class="form-label">Title of the Book</label>
        <input type="text" class="form-control" id="bname" name="bname"value="<?php echo $row["bname"];?>"  required >
      </div>
      <div class="mb-3">
        <label for="volNo" class="form-label">Volume Number</label>
        <input type="number" class="form-control" id="bvolumeno" name="bvolumeno" value="<?php echo $row["bvolumeno"];?>"  >
      </div>


      <div class="mb-3">
        <label for="issueNo" class="form-label">Issue Number</label>
        <input type="number" class="form-control" id="issueno" name="issueno" value="<?php echo $row["issueno"];?>"   >
      </div>

      

      </div>
       
  </div>
    <div class="col-md-6">
    <div class="mb-3">
       <label for="pageNo" class="form-label">Page Number</label>
       <input type="text" class="form-control" id="pageno" name="pageno" value="<?php echo $row["pageno"];?>" >
       </div>
  

      <div class="mb-3">
    <label for="url" class="form-label">URL</label>
    <input type="url" class="form-control" id="url" name="url" value="<?php echo $row["url"];?>"  >
    </div>
      
    <div class="mb-3">
        <label for="scopusindex" class="form-label">Scopus Index</label>
        <select class="form-control" id="scopusindex" name="scopusindex"  value="<?php echo $row["scopusindex"];?>"  >
        <option  value="<?php echo $row["scopusindex"];?>"><?php echo $row["scopusindex"];?></option>
          <option value="Y">Yes</option>
          <option value="N">No</option>
          
        </select>
      </div>

      <div class="mb-3">
        <label for="webOfscience" class="form-label">Web Of Science</label>
        <select class="form-control" id="webofscience" name="webofscience" value="<?php echo $row["webofscience"];?>"  >
          <option value="<?php echo $row["webofscience"];?>" > <?php echo $row["webofscience"];?></option>
          <option value="Y">Yes</option>
          <option value="N">No</option>
          
        </select>
      </div>

      <div class="mb-3">
          <label for="isn" class="form-label">ISSN</label>
          <input type="text" class="form-control" id="issn" name="issn"value="<?php echo $row["issn"];?>"  >
     </div>

     <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-control" id="category" name="category"  value="<?php echo $row["category"];?>"  >
          <option value="<?php echo $row["category"];?>" ><?php echo $row["category"];?></option>
          <option value="SC">SC</option>
          <option value="ST">ST</option>
          <option value="General">General</option>
        </select>
    </div>

    <div class="mb-3">
      <label for="level" class="form-label">Level</label>
      <select class="form-control" id="level" name="level"value="<?php echo $row["level"];?>"    >
      <option alue="<?php echo $row["level"];?>" ><?php echo $row["level"];?></option>
      <option value="National">National</option>
      <option value="International">International</option>
      
    </select>
   </div>
  
</div>
</div>
<div class="row">
<div class="col-md-6">
<button type="submit" class="btn btn-primary" value="Book" name="submit">Submit</button>
</div>
</div>

</form>
</div>

</body>
</html>
<?php
   }
   elseif($table=='Conference'){
    ?>
<body>
<form  action="updatedetails.php" method="POST" > 
  <div class="container">
    <h1 style="text-align:center">Conference Publications</h1>
    <div class="row">
      <div class="col-md-6">

        <div class="mb-3">
          <label for="cauthor" class="form-label">Author</label>
          <input type="text" class="form-control" id="cauthor" value="<?php echo $row["cauthor"];?>" name="cauthor">
        </div>

        <div class="mb-3">
       
       <div id="textbox">
           <label for="Coauthor's Name " class="form-label">Coauthor's Name </label>
           <input type="text"class="form-control" id="coauthor" name="coauthor" placeholder="Ex:Ramkrishna,Manohar" value="<?php echo $row["coauthor"];?>" >
       </div>
      
      </div>
      
        <div class="mb-3">
          <label for="Date of Publication" class="form-label">Date of Publication</label>
          <input type="date" class="form-control" id="dop" name="dop" value="<?php echo $row["dop"];?>" >
        </div>
        
        <div class="mb-3">
          <label for="Title of the Paper" class="form-label">Title of the Paper</label>
          <input type="text" class="form-control" id="cpaper" name="cpaper" value="<?php echo $row["cpaper"];?>" >

        </div>
        <div class="mb-3">
          <label for="ctitle" class="form-label">Title of the Conference</label>
          <input type="text" class="form-control" id="ctitle" name="ctitle" value="<?php echo $row["ctitle"];?>" >
        </div>
        <div class="mb-3">
          <label for="venue" class="form-label"> Conducted by and Venue</label>
          <input type="text" class="form-control" id="venue" name="venue" placeholder="Ex:Basaveshwar Engg College,Bagalkote" value="<?php echo $row["venue"];?>" >
        </div>
        <div class="mb-3">
          <label for="pageno" class="form-label">Page Number</label>
          <input type="text" class="form-control" id="pageno" name="pageno" value="<?php echo $row["pageno"];?>" >
        </div>
    </div>
      <div class="col-md-6">
      

      <div class="mb-3">
      <label for="url" class="form-label">URL</label>
      <input type="url" class="form-control" id="url" name="url" value="<?php echo $row["url"];?>" >
      </div>
        
      <div class="mb-3">
          <label for="scopusindex" class="form-label">Scopus Index</label>
          <select class="form-control" id="scopusindex" name="scopusindex">
            <option value="<?php echo $row["scopusindex"];?>"><?php echo $row["scopusindex"];?> </option>
            <option value="Y">Yes</option>
            <option value="N">No</option>
            
          </select>
        </div>

        <div class="mb-3">
          <label for="webOfscience" class="form-label">Web Of Science</label>
          <select class="form-control" id="webofscience" name="webofscience">
            <option value="<?php echo $row["webofscience"];?>"><?php echo $row["webofscience"];?> </option>
            <option value="Y">Yes</option>
            <option value="N">No</option>
            
          </select>
        </div>

        <div class="mb-3">
            <label for="issn" class="form-label">ISSN</label>
            <input type="text" class="form-control" id="issn" name="issn" value="<?php echo $row["issn"];?>" >
       </div>

       <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-control" id="category" name="category">
            <option value="<?php echo $row["category"];?>"><?php echo $row["category"];?> </option>
            <option value="SC">SC</option>
            <option value="ST">ST</option>
            <option value="General">General</option>
          </select>
      </div>

      <div class="mb-3">
        <label for="level" class="form-label">Level</label>
        <select class="form-control" id="level" name="level">
        <option value="<?php echo $row["level"];?>"><?php echo $row["level"];?> </option>
        <option value="National">National</option>
        <option value="International">International</option>
        
      </select>
     </div>
      
  </div>
</div>
<div class="row">
  <div class="col-md-6">
<button type="submit" class="btn btn-primary" name="submit" value="Conference">Submit</button>
</div>
</div>

  </form>
</div>

           

</body>


  <?php }
elseif($table=='Journal'){
    ?>
    <body>
<form action="updatedetails.php" method="POST" > 
  <div class="container">
    <h1 style="text-align:center">Journal Papers</h1>
    <div class="row">
      <div class="col-md-6">

        <div class="mb-3">
          <label for="name" class="form-label">Authors</label>
          <input type="text" class="form-control" id="jname" name="jname" value="<?php echo $row["jname"];?>">
        </div>


        <div class="mb-3">
       
       <div id="textbox" style="display:none">
           <label for="Coauthor's Name " class="form-label">Coauthor's Name </label>
           <input type="text"class="form-control" id="coauthor" name="coauthor"value="<?php echo $row["coauthor"];?>" placeholder="Ex:Ramkrishna,Manohar">
       </div>
      
      </div>
        <div class="mb-3">
          <label for="doi" class="form-label">Date of Publication</label>
          <input type="date" class="form-control" id="dop" name="dop" value="<?php echo $row["dop"];?>">
        </div>

        <div class="mb-3">
          <label for="text" class="form-label">Title of the Paper</label>
          <input type="text" class="form-control" id="papertitle" name="papertitle" value="<?php echo $row["papertitle"];?>">
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Title of the Journal</label>
          <input type="text" class="form-control" id="journaltitle" name="journaltitle"value="<?php echo $row["journaltitle"];?>">
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Name of the Publisher</label>
          <input type="text" class="form-control" id="publisher" name="publisher" value="<?php echo $row["publisher"];?>">
        </div>
        
        <div class="mb-3">
          <label for="doi" class="form-label">Volume No</label>
          <input type="number" class="form-control" id="volumeno" name="volumeno" value="<?php echo $row["volumeno"];?>">
        </div>
        <div class="mb-3">
          <label for="doi" class="form-label">Issue No</label>
          <input type="number" class="form-control" id="issueno" name="issueno" value="<?php echo $row["issueno"];?>">
        </div>

      
    </div>
      <div class="col-md-6">
     
      <div class="mb-3">
          <label for="pno" class="form-label">Page No</label>
          <input type="text" class="form-control" id="pageno" name="pageno" value="<?php echo $row["pageno"];?>">
        </div>
      <div class="mb-3">
          <label for="url" class="form-label">URL</label>
          <input type="url" class="form-control" id="url" name="url" value="<?php echo $row["url"];?>">
        </div>

        <div class="mb-3">
          <label for="scopusindex" class="form-label">Scopus Index</label>
          <select class="form-control" id="scopusindex" name="scopusindex">
            <option value="<?php echo $row["scopusindex"];?>"><?php echo $row["scopusindex"];?></option>
            <option value="Y">Yes</option>
            <option value="N">No</option>
            
          </select>
        </div>

        <div class="mb-3">
          <label for="webOfscience" class="form-label">Web Of Science</label>
          <select class="form-control" id="webofscience" name="webofscience">
            <option value="<?php echo $row["webofscience"];?>"><?php echo $row["webofscience"];?></option>
            <option value="Y">Yes</option>
            <option value="N">No</option>
            
          </select>
        </div>

        <div class="mb-3">
          <label for="issn" class="form-label">ISSN</label>
          <input type="text" class="form-control" id="issn" name="issn" value="<?php echo $row["issn"];?>">
        </div>

        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-control" id="category" name="category">
            <option value="<?php echo $row["category"];?>"><?php echo $row["category"];?></option>
            <option value="SC">SC</option>
            <option value="ST">ST</option>
            <option value="General">General</option>
          </select>
      </div>

      <div class="mb-3">
        <label for="level" class="form-label">Level</label>
        <select class="form-control" id="level" name="level">
        <option value="<?php echo $row["level"];?>"><?php echo $row["level"];?></option>
        <option value="National">National</option>
        <option value="International">International</option>
        
      </select>
     </div>
        
      
  </div>
</div>
<div class="row">
  <div class="col-md-6">
  <button type="submit" class="btn btn-primary" name="submit" value="Journal">Submit</button>
</div>
</div>

  </form>
</div>

           

</body>
<?php
}
   ?>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
</body>
</html>
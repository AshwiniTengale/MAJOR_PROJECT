<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
  
</style>
    
</head>
<body>
<form action="adddetails.php" method="POST" > 
  <div class="container">
    <h1 style="text-align:center">Journal Papers</h1>
    <div class="row">
      <div class="col-md-6">

        <div class="mb-3">
          <label for="name" class="form-label">Authors</label>
          <input type="text" class="form-control" id="jname" name="jname">
        </div>


        <div class="mb-3">
        <label for="response" class="form-label" >Are there any co-authors present</label>
            <select id="response" class="form-select" name="response" onchange="showTextBox()" required >
              <option value=""></option>
              <option value="Y">Yes</option>
              <option value="N">No</option>
            </select>
       <div id="textbox" style="display:none">
           <label for="Coauthor's Name " class="form-label">Coauthor's Name </label>
           <input type="text"class="form-control" id="coauthor" name="coauthor" placeholder="Ex:Ramkrishna,Manohar">
       </div>
      
      </div>
        <div class="mb-3">
          <label for="doi" class="form-label">Date of Publication</label>
          <input type="date" class="form-control" id="dop" name="dop">
        </div>

        <div class="mb-3">
          <label for="text" class="form-label">Title of the Paper</label>
          <input type="text" class="form-control" id="papertitle" name="papertitle">
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Title of the Journal</label>
          <input type="text" class="form-control" id="journaltitle" name="journaltitle">
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Name of the Publisher</label>
          <input type="text" class="form-control" id="publisher" name="publisher">
        </div>
        
        <div class="mb-3">
          <label for="doi" class="form-label">Volume No</label>
          <input type="number" class="form-control" id="volumeno" name="volumeno">
        </div>

      
    </div>
      <div class="col-md-6">
      <div class="mb-3">
          <label for="doi" class="form-label">Issue No</label>
          <input type="number" class="form-control" id="issueno" name="issueno">
        </div>
      <div class="mb-3">
          <label for="pno" class="form-label">Page No</label>
          <input type="text" class="form-control" id="pageno" name="pageno">
        </div>
      <div class="mb-3">
          <label for="url" class="form-label">URL</label>
          <input type="url" class="form-control" id="url" name="url">
        </div>

        <div class="mb-3">
          <label for="scopusindex" class="form-label">Scopus Index</label>
          <select class="form-select" id="scopusindex" name="scopusindex">
            <option value=""></option>
            <option value="Y">Yes</option>
            <option value="N">No</option>
            
          </select>
        </div>

        <div class="mb-3">
          <label for="webOfscience" class="form-label">Web Of Science</label>
          <select class="form-select" id="webofscience" name="webofscience">
            <option value=""></option>
            <option value="Y">Yes</option>
            <option value="N">No</option>
            
          </select>
        </div>

        <div class="mb-3">
          <label for="issn" class="form-label">ISSN</label>
          <input type="text" class="form-control" id="issn" name="issn">
        </div>

        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-select" id="category" name="category">
            <option value=""></option>
            <option value="SC">SC</option>
            <option value="ST">ST</option>
            <option value="General">General</option>
          </select>
      </div>

      <div class="mb-3">
        <label for="level" class="form-label">Level</label>
        <select class="form-select" id="level" name="level">
        <option value=""></option>
        <option value="National">National</option>
        <option value="International">International</option>
        
      </select>
     </div>
        
      
  </div>
</div>
<div class="row">
  <div class="col-md-6">
  <button type="submit" class="btn btn-primary" name="submit" value="3">Submit</button>
</div>
</div>

  </form>
</div>

           

</body>
<script>
function showTextBox() {
  var response = document.getElementById("response");
  var textbox = document.getElementById("textbox");
  if (response.value == "Y") {
    textbox.style.display = "block";
  } else {
    textbox.style.display = "none";
  }
}
</script>


</html>
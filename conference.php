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
<form  action="adddetails.php" method="POST" > 
  <div class="container">
    <h1 style="text-align:center">Conference Publications</h1>
    <div class="row">
      <div class="col-md-6">

        <div class="mb-3">
          <label for="cauthor" class="form-label">Author</label>
          <input type="text" class="form-control" id="cauthor" name="cauthor">
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
          <label for="Date of Publication" class="form-label">Date of Publication</label>
          <input type="date" class="form-control" id="dop" name="dop">
        </div>
        
        <div class="mb-3">
          <label for="Title of the Paper" class="form-label">Title of the Paper</label>
          <input type="text" class="form-control" id="cpaper" name="cpaper">

        </div>
        <div class="mb-3">
          <label for="ctitle" class="form-label">Title of the Conference</label>
          <input type="text" class="form-control" id="ctitle" name="ctitle">
        </div>
        <div class="mb-3">
          <label for="venue" class="form-label"> Conducted by and Venue</label>
          <input type="text" class="form-control" id="venue" name="venue" placeholder="Ex:Basaveshwar Engg College,Bagalkote">
        </div>
        <div class="mb-3">
          <label for="pageno" class="form-label">Page Number</label>
          <input type="text" class="form-control" id="pageno" name="pageno">
        </div>
    </div>
      <div class="col-md-6">
      

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
<button type="submit" class="btn btn-primary" name="submit" value="2">Submit</button>
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
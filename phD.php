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
<form action="adddetails.php" method="POST" > 
  <div class="container">
    <h1 style="text-align:center">PhD Details</h1>
     <div class="row">
      <div class="col-md-6">

        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="pname" name="pname">
        </div>

       
        
        <div class="mb-3">
          <label for="publisher" class="form-label">Title of the Thesis</label>
          <input type="text" class="form-control" id="thesis" name="thesis">
        </div>

        <div class="mb-3">
          <label for="doi" class="form-label">Name of the Guide</label>
          <input type="text" class="form-control" id="guide" name="guide">
        </div>

        <div class="mb-3">
           <label for="response" class="form-label" >Are there any Co-guide present</label>
            <select id="response" class="form-control" name="response" onchange="showTextBox()" required >
              <option value=""></option>
              <option value="Y">Yes</option>
              <option value="N">No</option>
            </select>
       <div id="textbox" style="display:none">
           <label for="Coauthor's Name " class="form-label">Co-guide's Name </label>
           <input type="text"class="form-control" id="coguide" name="coguide" placeholder="Ex:Ramkrishna,Manohar">
       </div>
        </div>
       
       
        

      
  
    </div>
      <div class="col-md-6">
      <div class="mb-3">
            <label for="collabrating Institute" class="form-label">Status</label>
            <select class="form-select" id="status" name="status">
            <option value=""></option>
            <option value="Awarded">PhD Awarded</option>
            <option value="Submitted">PhD Submited Details</option>
            <option value="Ongoing">PhD Ongoing Details</option>
            </select>
        </div>

        <div class="mb-3">
          <label for="issueNo" class="form-label"> Date</label>
          <input type="date" class="form-control" id="dop" name="dop">
        </div>

        <div class="mb-3">
          <label for="doi" class="form-label">Research Center</label>
          <input type="text" class="form-control" id="research" name="research">
        </div>
  </div>
</div>

<div class="">
  <div class="col-md-6">
<button type="submit" class="btn btn-primary"  name="submit" value="5">Submit</button>
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
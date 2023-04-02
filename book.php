<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
  .input-field {
    margin-bottom: 10px;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 16px;
    width:70%;
  }
</style>
</head>
<body>
<form>
  <div class="container">
    <h1 style="text-align:center">Book/Book Chapters Details</h1>
    <div class="row">
      <div class="col-md-6">


        <div class="mb-3">
          <label for="text" class="form-label">Author</label>
          <input type="text" class="form-control" id="bauthor" name="bauthor">
        </div>
        <div>
        <div class="mb-3">
        <label for="num-inputs" class="form-label"> Co_Authors</label>
        <select  class="form-select" id="coauthor" name="coauthor">
        <option value="" selected disabled></option>
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select>
      <div id="input-container"class="form-control"></div>
      </div>
    
        <div class="mb-3">
          <label for="doi" class="form-label">Date of Publication</label>
          <input type="date" class="form-control" id="dop" name="dop">
        </div>

        <div class="mb-3">
          <label for="name" class="form-label">Title of the Chapter</label>
          <input type="text" class="form-control" id="chapter" name="chapter">
        </div>

        <div class="mb-3">
          <label for="name" class="form-label">Title of the Book</label>
          <input type="text" class="form-control" id="bname" name="bname">
        </div>
        <div class="mb-3">
          <label for="volNo" class="form-label">Volume Number</label>
          <input type="text" class="form-control" id="bvolumeno" name="abvolumeno">
        </div>


        <div class="mb-3">
          <label for="issueNo" class="form-label">Issue Number</label>
          <input type="text" class="form-control" id="issueno" name="issueno">
        </div>

        

        </div>
         
    </div>
      <div class="col-md-6">
      <div class="mb-3">
         <label for="pageNo" class="form-label">Page Number</label>
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
            <option value="yes">Yes</option>
            <option value="no">No</option>
            
          </select>
        </div>

        <div class="mb-3">
          <label for="webOfscience" class="form-label">Web Of Science</label>
          <select class="form-select" id="webofscience" name="webofscience">
            <option value=""></option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
            
          </select>
        </div>

        <div class="mb-3">
            <label for="isn" class="form-label">ISSN</label>
            <input type="text" class="form-control" id="issn" name="issn">
       </div>

       <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-select" id="category" name="category">
            <option value=""></option>
            <option value="sc">SC</option>
            <option value="st">ST</option>
            <option value="general">General</option>
          </select>
      </div>

      <div class="mb-3">
        <label for="level" class="form-label">Level</label>
        <select class="form-select" id="level" name="level">
        <option value=""></option>
        <option value="national">National</option>
        <option value="international">International</option>
        
      </select>
     </div>
    
  </div>
</div>
<div class="row">
  <div class="col-md-6">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>

  </form>
</div>
</body>
<script>
  const numInputsSelect = document.getElementById("coauthor");
      const inputContainer = document.getElementById("input-container");"<br>"

      numInputsSelect.addEventListener("change", (event) => {
        const numInputs = event.target.value;

        // Clear existing inputs
        inputContainer.innerHTML = "";
        

        // Generate new inputs
        for (let i = 0; i < numInputs; i++) {
          const inputField = document.createElement("input");
          inputField.type = "text";
          inputField.name = `input-${i}`;
          inputField.placeholder = `Enter co_author name`;
          inputField.classList.add("input-field");
       
          inputContainer.appendChild(inputField);
           const lineBreak = document.createElement("br");
          inputContainer.appendChild(lineBreak);
          
        }
      });
</script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference</title>
    <link rel="stylesheet" href="bootstrap.css">
    
</head>
<body>
<form>
  <div class="container">
    <h1 style="text-align:center">Conference  Details</h1>
    <div class="row">
      <div class="col-md-6">

        <div class="mb-3">
          <label for="text" class="form-label">Authors</label>
          <input type="text" class="form-control" id="cauthor" name="cauthor">
        </div>
        <div class="mb-3">
            <label for="Paper Presented" class="form-label">Paper Presented</label>
            <select class="form-select" id="ppresented" name="ppresented">
            <option value=""></option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
            </select>
        </div>
        <div class="mb-3">
          <label for="Title of Paper" class="form-label">Title of Paper</label>
          <input type="text" class="form-control" id="papertitle" name="papertitle">
        </div>
        <div class="mb-3">
            <label for="Paper Published" class="form-label">Paper Published</label>
            <select class="form-select" id="ppublished" name="ppublished">
            <option value="select">Select</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
            </select>
        </div>

        <div class="mb-3">
          <label for="doi" class="form-label">Date of Publication</label>
          <input type="date" class="form-control" id="dop" name="dop">
        </div>

        <div class="mb-3">
          <label for="Title of Conference" class="form-label">Title of Conference</label>
          <input type="text" class="form-control" id="conferencetitle" name="conferencetitle">
        </div>

        

        <div class="mb-3">
          <label for="Conducted by and Venue" class="form-label">Conducted by and Venue</label>
          <input type="text" class="form-control" id="venue" name="venue">
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
</html>
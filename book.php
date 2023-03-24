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
<form>
  <div class="container">
    <h1 style="text-align:center">Add Book Details</h1>
    <div class="row">
      <div class="col-md-6">

        <div class="mb-3">
          <label for="name" class="form-label">Title of the Book</label>
          <input type="text" class="form-control" id="bname" name="bname">
        </div>

        <div class="mb-3">
          <label for="text" class="form-label">Author</label>
          <input type="text" class="form-control" id="bauthor" name="bauthor">
        </div>
        
        <div class="mb-3">
          <label for="publisher" class="form-label">Publisher</label>
          <input type="text" class="form-control" id="bpublisher" name="bpublisher">

        </div>
        <div class="mb-3">
          <label for="doi" class="form-label">Date of Publication</label>
          <input type="date" class="form-control" id="dop" name="dop">
        </div>

        <div class="mb-3">
          <label for="clgName" class="form-label">Collage Name</label>
          <input type="text" class="form-control" id="clgname" name="clgname">
        </div>

        <div class="mb-3">
            <label for="collabrating Institute" class="form-label">Collabrating Institute</label>
            <select class="form-select" id="binstitute" name="binstitute">
            <option value=""></option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
            </select>
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
      <div class="col-md-6">
      <div class="mb-3">
         <label for="pageNo" class="form-label">Page Number</label>
         <input type="text" class="form-control" id="pageno" name="pageno">
         </div>
      <div class="mb-3">
          <label for="doi" class="form-label">Date of Issue</label>
          <input type="date" class="form-control" id="doi" name="doi">
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
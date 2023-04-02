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
<form>
  <div class="container">
    <h1 style="text-align:center">Conference Publications</h1>
    <div class="row">
      <div class="col-md-6">

        <div class="mb-3">
          <label for="name" class="form-label">Author</label>
          <input type="text" class="form-control" id="cname" name="cname">
        </div>

        <div class="mb-3">
        <label for="num-inputs" class="form-label"> Co_Authors</label>
        <input type="text" class="form-control" id="coauthor" name="coauthor" placeholder="Ex:Ramkrishna,Manohar">
      
      </div>
      
        <div class="mb-3">
          <label for="text" class="form-label">Date of Publication</label>
          <input type="date" class="form-control" id="cauthor" name="cauthor">
        </div>
        
        <div class="mb-3">
          <label for="publisher" class="form-label">Title of the Paper</label>
          <input type="text" class="form-control" id="cpublisher" name="cpublisher">

        </div>
        <div class="mb-3">
          <label for="dop" class="form-label">Title of the Conference</label>
          <input type="text" class="form-control" id="dop" name="dop">
        </div>

        <div class="mb-3">
          <label for="conduct" class="form-label">Conducted by</label>
          <input type="text" class="form-control" id="conducted" name="conducted">
        </div>
        <div class="mb-3">
          <label for="venue" class="form-label"> Venue</label>
          <input type="text" class="form-control" id="venue" name="venue">
        </div>

        

         
    </div>
      <div class="col-md-6">
      <div class="mb-3">
          <label for="pageno" class="form-label">Page Number</label>
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
            <label for="issn" class="form-label">ISSN</label>
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
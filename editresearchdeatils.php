<!DOCTYPE html>
<html lang="en">
    <?php
    include 'nav.php';
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">

    <title>Document</title>
</head>
<body>
    <form action="editdetails.php " method="POST">
    <div class="mb-3" style="float:left;margin-left:10%;margin-top:3%;width:35%;">

<div class="form-group">
								
								
								<select class="form-control" id="selectactivity" name="selectactivity" required>
								<option disabled selected>Select activity</option>
                                <option value="Book">Books/Book Chapters</option>
                                <option value="Conference">Conference Publications</option>
                                <option value="Journal">Journal Papers</option>
                                <option value="Patent">Patents</option>
                                <option value="Phd">PhD</option>
                                
								
								</select><br>
                                <input type="submit"class="btn btn-primary" value="Submit" id="submit"> <br><br>
							</div>
                            
</div>

</form>
</body>
</html>
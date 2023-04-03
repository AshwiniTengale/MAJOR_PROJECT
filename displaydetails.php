<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<?php
include 'connection.php' ;

session_start();
$UID=$_SESSION['ID'];


$selectactivity=$_POST['selectactivity'];
$fromyear=$_POST['fromyear'];
$toyear=$_POST['toyear'];

if($selectactivity==1)
{
$sql_query="SELECT * From Book where User_id='$UID'";
$result=mysqli_query($conn,$sql_query);
if ($result->num_rows > 0) {
  
       
          
          ?>
          <h2 ><?php echo "Books/Book Chapters" ?></h2>
          <br>
              <table  class="table table-sm">
                  <thead class="thead-light">
              <tr>
              <th>Sl.No</th>
              <th>Authors</th>
              <th>Year of Publication</th>
              <th>Title of the Chapter </th>
              <th>Title of the Book </th>
              <th>Volume No and Issue No</th>
              <th>Page No</th>
              <th>URL</th>
              <th>Scopus Indexed</th>
              <th>Web of Science</th>
              <th>ISSN/ISBN</th>
              <th>SC/ST/GEN</th>
              <th>International/National</th>
              </tr>        
             </thead>
          
  <?php
  $sl=1;
  
              while($row = mysqli_fetch_assoc($result)) {
  ?>     
           <tr >
            <td><?php echo $sl++; ?></td>
            <td><?php echo $row["bauthor"].",".$row["coauthor"]; ?></td>
            <td><?php echo $row["dop"];?></td>
            <td><?php echo $row["chapter"];?></td>
            <td><?php echo $row["bname"];?></td>
            <td><?php echo $row["bvolumeno"]." and ".$row["issueno"];?></td>
            <td><?php echo $row["pageno"];?></td>
            <td><?php echo $row["url"];?></td>
            <td><?php echo $row["scopusindex"];?></td>
            <td><?php echo $row["webofscience"];?></td>
            <td><?php echo $row["issn"];?></td>
            <td><?php echo $row["category"];?></td>
            <td><?php echo $row["level"];?></td>
          </tr>
     <?php }
              }
     ?>
         </table>   <?php }
         
if($selectactivity==2)
         {
         $sql_query="SELECT * From Conference where User_id='$UID'";
         $result=mysqli_query($conn,$sql_query);
         if ($result->num_rows > 0) {
           
                   
                   ?>
                   <h2 ><?php echo "Conference Publications" ?></h2>
                   <br>
                       <table  class="table table-sm">
                           <thead class="thead-light">
                           <tr>
                           <th>Sl.No</th>
                           <th>Authors</th>
                           <th>Year of Publication</th>
                           <th>Title of Paper </th>
                           <th>Title of Conference </th>
                           <th>Conduted by and Venue</th>
                           <th>Page No</th>
                           <th>URL</th>
                           <th>Scopus Indexed</th>
                           <th>Web of Science</th>
                           <th>ISSN/ISBN</th>
                           <th>SC/ST/GEN</th>
                           <th>International/National</th>
                           </tr>        
                      </thead>
                   
           <?php
           $sl=1;
           
                       while($row = mysqli_fetch_assoc($result)) {
           ?>     
                    <tr >
                     <td><?php echo $sl++; ?></td>
                     <td><?php echo $row["cauthor"].",".$row["coauthor"]; ?></td>
                     <td><?php echo $row["dop"];?></td>
                     <td><?php echo $row["cpaper"];?></td>
                     <td><?php echo $row["ctitle"];?></td>
                     <td><?php echo $row["venue"];?></td>
                     <td><?php echo $row["pageno"];?></td>
                     <td><?php echo $row["url"];?></td>
                     <td><?php echo $row["scopusindex"];?></td>
                     <td><?php echo $row["webofscience"];?></td>
                     <td><?php echo $row["issn"];?></td>
                     <td><?php echo $row["category"];?></td>
                     <td><?php echo $row["level"];?></td>
                   </tr>
              <?php }
                       }
              ?>
                  </table>   <?php }
                  
         
 if($selectactivity==3)
 {
 $sql_query="SELECT * From Journal where User_id='$UID'";
 $result=mysqli_query($conn,$sql_query);
 if ($result->num_rows > 0) {
   
           
           ?>
           <h2 ><?php echo "Journal Papers" ?></h2>
           <br>
   
               <table  class="table table-sm">
                   <thead class="thead-light">
                 <tr>
                       <th>Sl.No</th>
                       <th>Authors</th>
                       <th>Year of Publication</th>
                       <th>Title of the Journal and Publisher </th>
                       <th>Title of the Book </th>
                       <th>Volume No and Issue No</th>
                       <th>Page No</th>
                       <th>URL</th>
                       <th>Scopus Indexed</th>
                       <th>Web of Science</th>
                       <th>ISSN/ISBN</th>
                       <th>SC/ST/GEN</th>
                       <th>International/National</th>
                    
                     </tr>        
              </thead>
           
   <?php
   $sl=1;
   
               while($row = mysqli_fetch_assoc($result)) {
   ?>     
           <tr >
            <td><?php echo $sl++; ?></td>
            <td><?php echo $row["jname"].",".$row["coauthor"]; ?></td>
            <td><?php echo $row["dop"];?></td>
            <td><?php echo $row["papertitle"];?></td>
            <td><?php echo $row["journaltitle"]." and ".$row["publisher"];?></td>
            <td><?php echo $row["volumeno"]." and ".$row["issueno"];?></td>
            <td><?php echo $row["pageno"];?></td>
            <td><?php echo $row["url"];?></td>
            <td><?php echo $row["scopusindex"];?></td>
            <td><?php echo $row["webofscience"];?></td>
            <td><?php echo $row["issn"];?></td>
            <td><?php echo $row["category"];?></td>
            <td><?php echo $row["level"];?></td>
          </tr>
      <?php }
               }
      ?>
          </table>   <?php }
          
 
?>
</html>
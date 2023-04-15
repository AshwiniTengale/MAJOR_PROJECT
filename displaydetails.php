<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
        table,th,td{
            border:1px solid black;
            font-family:"Times New Roman",Times,serif;
            width:1%;
            height:60%;
        }
        
    </style>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.js"></script>

    </script>
    <script src ="pdfs.js"></script>
</head>
<div>
            <button id="download"style="margin-left:5%;">download pdf</button>
            </div>

<?php
include 'connection.php' ;

// include 'htmllink.php';

session_start();
$UID=$_SESSION['ID'];


$tablename=$_POST['selectactivity'];
if($tablename=="All")
{
    $from_query="(SELECT MIN(dop) FROM Book)";
$fromresult=mysqli_query($conn,$from_query);
if($fromresult->num_rows > 0)
{
    if($row = mysqli_fetch_assoc($fromresult)) 
    {
       $Min_date=$row['MIN(dop)'];
    }
}
$fromyear=$_POST['fromyear']==NULL?$Min_date:$_POST['fromyear'];

$to_query="(SELECT MAX(dop) FROM Book)";
$toresult=mysqli_query($conn,$to_query);
if($toresult->num_rows > 0)
{
    if($row = mysqli_fetch_assoc($toresult)) 
    {
        $Max_date=$row['MAX(dop)'];
    }
}
$toyear=$_POST['toyear']==NULL?$Max_date:$_POST['toyear'];;
 
$formatted_fromdate = date("j F Y", strtotime($fromyear));

$formatted_todate = date("j F Y", strtotime($toyear));

?>

 <div id="invoice" style="padding:5%;">
 <!-- c=a>b?a:b; -->



<?php



echo $row['count'];
echo "<p font-size:12pt;font-family:Times New Roman,Times,serif;>","List of Research Publications";
echo "<br>","Name of the Department";
echo "<br>","Research Publications from " . $formatted_fromdate . " to " . $formatted_todate;




$sql_query="SELECT * FROM Book
             WHERE Book.dop BETWEEN '$fromyear' AND '$toyear' AND Book.User_id='$UID'";
$result=mysqli_query($conn,$sql_query);




// $sql_query="SELECT * From Book where User_id='$UID'";
// $result=mysqli_query($conn,$sql_query);
if ($result->num_rows > 0) {
  
       
          
          ?>
          <h2><?php echo "Books/Book Chapters" ?></h2>
         
          <br>
              <table  class="table table-sm">
                  <thead class="thead-light">
              <tr>
              <th >Sl.No</th>
              <th>Authors</th>
              <th>Year of Publication</th>
              <th>Title of the Chapter </th>
              <th>Title of the Book </th>
              <th>Volume No and<br>Issue No</th>
              <th>Page No</th>
              <th>URL</th>
              <th>Scopus Indexed</th>
              <th>Web of Science</th>
              <th>ISSN/<br>ISBN</th>
              <th>SC/<br>ST/<br>GEN</th>
              <th>International/<br>National</th>
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
           
            <td><a href="<?php echo $row["url"]; ?> "><?php echo $row["url"];?></a></td>
            <td><?php echo $row["scopusindex"];?></td>
            <td><?php echo $row["webofscience"];?></td>
            <td><?php echo $row["issn"];?></td>
            <td><?php echo $row["category"];?></td>
            <td><?php echo $row["level"];?></td>
          </tr>
     <?php 
     
    
    
    }
              }
     ?>
         </table>   <?php
        //  $UID=$_SESSION['ID'];

 $sql="SELECT COUNT(scopusindex)
 FROM Book
 WHERE scopusindex='Y' AND webofscience='N' AND Book.dop BETWEEN '$fromyear' AND '$toyear' AND Book.User_id='$UID'  ";

 $result=mysqli_query($conn,$sql);
 
 if($row = mysqli_fetch_assoc($result))
 {
     $count1=$row['COUNT(scopusindex)'];
     echo "Scopus_index_count: $count1 <br>";
 }
 $sql2="SELECT COUNT(webofscience)
FROM Book
WHERE webofscience='Y' AND scopusindex='N'   AND Book.dop BETWEEN '$fromyear' AND '$toyear' AND Book.User_id='$UID'";

$result2=mysqli_query($conn,$sql2);

if($row = mysqli_fetch_assoc($result2))
{
    $count2=$row['COUNT(webofscience)'];
    echo "Webofscience_count: $count2 <br>" ;
}
$sql3="SELECT COUNT(scopusindex)
FROM Book
WHERE scopusindex='N' AND webofscience='N' AND Book.dop BETWEEN '$fromyear' AND '$toyear' AND Book.User_id='$UID'";
$result3=mysqli_query($conn,$sql3);

if($row = mysqli_fetch_assoc($result3))
{
    $Count3=$row['COUNT(scopusindex)'];
    echo "Others: $Count3<br> ";
}


//////////////////////////////////////  CONFERENCE  ////////////////////////////////////////////////

$sql_query2="SELECT * FROM Conference
        WHERE Conference.dop BETWEEN '$fromyear' AND '$toyear' AND Conference.User_id='$UID'";
$result2=mysqli_query($conn,$sql_query2);





if ($result2->num_rows > 0) {
           
                   
    ?><br>
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

        while($row = mysqli_fetch_assoc($result2)) {
?>     
     <tr >
      <td><?php echo $sl++; ?></td>
      <td><?php echo $row["cauthor"].",".$row["coauthor"]; ?></td>
      <td><?php echo $row["dop"];?></td>
      <td><?php echo $row["cpaper"];?></td>
      <td><?php echo $row["ctitle"];?></td>
      <td><?php echo $row["venue"];?></td>
      <td><?php echo $row["pageno"];?></td>
      <td><a href="<?php echo $row["url"]; ?> "><?php echo $row["url"];?></a></td>
      <td><?php echo $row["scopusindex"];?></td>
      <td><?php echo $row["webofscience"];?></td>
      <td><?php echo $row["issn"];?></td>
      <td><?php echo $row["category"];?></td>
      <td><?php echo $row["level"];?></td>
    </tr>
<?php }
        }
    
?>
   </table>   


<?php
$sql="SELECT COUNT(scopusindex)
FROM Conference
WHERE scopusindex='Y' AND webofscience='N' AND Conference.dop BETWEEN '$fromyear' AND '$toyear' AND Conference.User_id='$UID'  ";

$result=mysqli_query($conn,$sql);

if($row = mysqli_fetch_assoc($result))
{
    $count1=$row['COUNT(scopusindex)'];
    echo "Scopus_index_count: $count1 <br>";
}
$sql2="SELECT COUNT(webofscience)
FROM Conference
WHERE webofscience='Y' AND scopusindex='N'   AND Conference.dop BETWEEN '$fromyear' AND '$toyear' AND Conference.User_id='$UID'";

$result2=mysqli_query($conn,$sql2);

if($row = mysqli_fetch_assoc($result2))
{
   $count2=$row['COUNT(webofscience)'];
   echo "Webofscience_count: $count2 <br>" ;
}
$sql3="SELECT COUNT(scopusindex)
FROM Conference
WHERE scopusindex='N' AND webofscience='N' AND Conference.dop BETWEEN '$fromyear' AND '$toyear' AND Conference.User_id='$UID'";
$result3=mysqli_query($conn,$sql3);

if($row = mysqli_fetch_assoc($result3))
{
   $Count3=$row['COUNT(scopusindex)'];
   echo "Others: $Count3<br> ";

}
}
/////////////////////////////////////Journal/////////////////////////////////////////



  
 


    























































else{

$from_query="(SELECT MIN(dop) FROM $tablename)";
$fromresult=mysqli_query($conn,$from_query);
if($fromresult->num_rows > 0)
{
    if($row = mysqli_fetch_assoc($fromresult)) 
    {
       $Min_date=$row['MIN(dop)'];
    }
}
$fromyear=$_POST['fromyear']==NULL?$Min_date:$_POST['fromyear'];

$to_query="(SELECT MAX(dop) FROM $tablename)";
$toresult=mysqli_query($conn,$to_query);
if($toresult->num_rows > 0)
{
    if($row = mysqli_fetch_assoc($toresult)) 
    {
        $Max_date=$row['MAX(dop)'];
    }
}
$toyear=$_POST['toyear']==NULL?$Max_date:$_POST['toyear'];;
 
$formatted_fromdate = date("j F Y", strtotime($fromyear));

$formatted_todate = date("j F Y", strtotime($toyear));

?>

 <div id="invoice" style="padding:5%;">
 <!-- c=a>b?a:b; -->



<?php



echo $row['count'];
echo "<p font-size:12pt;font-family:Times New Roman,Times,serif;>","List of Research Publications";
echo "<br>","Name of the Department";
echo "<br>","Research Publications from " . $formatted_fromdate . " to " . $formatted_todate;



$sql_query="SELECT * FROM $tablename
             WHERE $tablename.dop BETWEEN '$fromyear' AND '$toyear' AND $tablename.User_id='$UID'";
$result=mysqli_query($conn,$sql_query);



if($tablename=='Book')
{
// $sql_query="SELECT * From Book where User_id='$UID'";
// $result=mysqli_query($conn,$sql_query);
if ($result->num_rows > 0) {
  
       
          
          ?>
          <h2 style="margin-left:5%;"><?php echo "Books/Book Chapters" ?></h2>
          <br>
              <table  class="table table-sm">
                  <thead class="thead-light">
              <tr>
              <th >Sl.No</th>
              <th>Authors</th>
              <th>Year of Publication</th>
              <th>Title of the Chapter </th>
              <th>Title of the Book </th>
              <th>Volume No and<br>Issue No</th>
              <th>Page No</th>
              <th>URL</th>
              <th>Scopus Indexed</th>
              <th>Web of Science</th>
              <th>ISSN/<br>ISBN</th>
              <th>SC/<br>ST/<br>GEN</th>
              <th>International/<br>National</th>
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
           
            <td><a href="<?php echo $row["url"]; ?> "><?php echo $row["url"];?></a></td>
            <td><?php echo $row["scopusindex"];?></td>
            <td><?php echo $row["webofscience"];?></td>
            <td><?php echo $row["issn"];?></td>
            <td><?php echo $row["category"];?></td>
            <td><?php echo $row["level"];?></td>
          </tr>
     <?php 
     
    
    
    }
              }
     ?>
         </table>   <?php
        //  $UID=$_SESSION['ID'];

 $sql="SELECT COUNT(scopusindex)
 FROM $tablename
 WHERE scopusindex='Y' AND webofscience='N' AND $tablename.dop BETWEEN '$fromyear' AND '$toyear' AND $tablename.User_id='$UID'  ";

 $result=mysqli_query($conn,$sql);
 
 if($row = mysqli_fetch_assoc($result))
 {
     $count1=$row['COUNT(scopusindex)'];
     echo "Scopus_index_count: $count1 <br>";
 }
 $sql2="SELECT COUNT(webofscience)
FROM $tablename
WHERE webofscience='Y' AND scopusindex='N'   AND $tablename.dop BETWEEN '$fromyear' AND '$toyear' AND $tablename.User_id='$UID'";

$result2=mysqli_query($conn,$sql2);

if($row = mysqli_fetch_assoc($result2))
{
    $count2=$row['COUNT(webofscience)'];
    echo "Webofscience_count: $count2 <br>" ;
}
$sql3="SELECT COUNT(scopusindex)
FROM $tablename
WHERE scopusindex='N' AND webofscience='N' AND $tablename.dop BETWEEN '$fromyear' AND '$toyear' AND $tablename.User_id='$UID'";
$result3=mysqli_query($conn,$sql3);

if($row = mysqli_fetch_assoc($result3))
{
    $Count3=$row['COUNT(scopusindex)'];
    echo "Others: $Count3<br> ";
}
          }
         
if($tablename=='Conference')
         {
        //  $sql_query="SELECT * From Conference where User_id='$UID'";
        //  $result=mysqli_query($conn,$sql_query);
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
                     <td><a href="<?php echo $row["url"]; ?> "><?php echo $row["url"];?></a></td>
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
                  
         
 if($tablename=='Journal')
 {
//  $sql_query="SELECT * From Journal where User_id='$UID'";
//  $result=mysqli_query($conn,$sql_query);
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
            <td><a href="<?php echo $row["url"]; ?> "><?php echo $row["url"];?></a></td>
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
}
          
 
?>
</div>
<!-- <button  id="download">DownloadData</button> -->

</html>
<?php


session_start();
  $_SESSION['']=$row['Id'];
  $_SESSION['USERNAME']=$row['username'];
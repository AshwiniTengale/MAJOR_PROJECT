<?php
include 'connection.php' ;
session_start();
$UID=$_SESSION['ID'];




$submit=$_POST['submit'];

if($submit==1){
    $bauthor=$_POST['bauthor'];
    $coauthor=$_POST['coauthor'];
    $dop=$_POST['dop'];
    $chapter=$_POST['chapter'];
    $bname=$_POST['bname'];
    $bvolumeno=$_POST['bvolumeno'];
    $issueno=$_POST['issueno'];
    $pageno=$_POST['pageno'];
    $url=$_POST['url'];
    $scopusindex=$_POST['scopusindex'];
    $webofscience=$_POST['webofscience'];
    $issn=$_POST['issn'];
    $category=$_POST['category'];
    $level=$_POST['level'];
  


   $book_sql = "INSERT INTO Book (`User_id`,`bauthor`,`coauthor`,`dop`,`chapter`,`bname`,`bvolumeno`,`issueno`,`pageno`,`url`,`scopusindex`,`webofscience`,`issn`,`category`,`level`)
    VALUES ('$UID','$bauthor',".($coauthor==NULL?"NULL" :"'$coauthor'").",'$dop','$chapter','$bname','$bvolumeno','$issueno','$pageno','$url','$scopusindex','$webofscience','$issn','$category','$level')";
  if (mysqli_query($conn,$book_sql))
  {
  ?>
  <script>alert("Inserted Successfully");
  location.href='faculty.php';
 </script>

<?php
 } 
 else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
}

elseif($submit==2){
    $cauthor=$_POST['cauthor'];
    $coauthor=$_POST['coauthor'];
    $dop=$_POST['dop'];
    $cpaper=$_POST['cpaper'];
    $ctitle=$_POST['ctitle'];
    $venue=$_POST['venue'];
    $pageno=$_POST['pageno'];
    $url=$_POST['url'];
    $scopusindex=$_POST['scopusindex'];
    $webofscience=$_POST['webofscience'];
    $issn=$_POST['issn'];
    $category=$_POST['category'];
    $level=$_POST['level'];
    


     $conference_sql = "INSERT INTO Conference (`User_id`,`cauthor`,`coauthor`,`dop`,`cpaper`,`ctitle`,`venue`,`pageno`,`url`,`scopusindex`,`webofscience`,`issn`,`category`,`level`)
    VALUES ('$UID','$cauthor',".($coauthor==NULL?"NULL" :"'$coauthor'").",'$dop','$cpaper','$ctitle','$venue','$pageno','$url','$scopusindex','$webofscience','$issn','$category','$level')";
    if (mysqli_query($conn,$conference_sql))
   {
   ?>
    <script>alert("Inserted Successfully");
     location.href='faculty.php';
    </script>

  <?php
    } 
else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 
 
}
}
if($submit==3){
    $jname=$_POST['jname'];
    $coauthor=$_POST['coauthor'];
    $dop=$_POST['dop'];
    $papertitle=$_POST['papertitle'];
    $journaltitle=$_POST['journaltitle'];
    $publisher=$_POST['publisher'];
    $volumeno=$_POST['volumeno'];
    $issueno=$_POST['issueno'];
    $pageno=$_POST['pageno'];
    $url=$_POST['url'];
    $scopusindex=$_POST['scopusindex'];
    $webofscience=$_POST['webofscience'];
    $issn=$_POST['issn'];
    $category=$_POST['category'];
    $level=$_POST['level'];

    $journal_sql = "INSERT INTO Journal (`User_id`,`jname`,`coauthor`,`dop`,`papertitle`,`journaltitle`,`publisher`,`volumeno`,`issueno`,`pageno`,`url`,`scopusindex`,`webofscience`,`issn`,`category`,`level`)
    VALUES ('$UID','$jname',".($coauthor==NULL?"NULL" :"'$coauthor'").",'$dop','$papertitle','$journaltitle','$publisher','$volumeno','$issueno','$pageno','$url','$scopusindex','$webofscience','$issn','$category','$level')";
    if (mysqli_query($conn,$journal_sql))
   {
   ?>
    <script>alert("Inserted Successfully");
     location.href='faculty.php';
    </script>

  <?php
    } 
else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 
 
}
}
elseif($submit==4){
    
}
?>






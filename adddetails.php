<?php
include 'connection.php' ;
session_start();
$UID=$_SESSION['ID'];




$submit=$_POST['book'];

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
   echo $bauthor,$coauthor,$dop,$chapter,$bname,$bvolumeno,$issueno,$pageno,$url,$scopusindex,$webofscience,$issn,$category,$level;


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
else{
    echo "NO";
}
 
 mysqli_close($conn);

?>






<?php
include 'connection.php';
session_start();

$UID=$_SESSION['ID'];
$RID=$_SESSION['RID'];




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

$cauthor=$_POST['cauthor'];
 $cpaper=$_POST['cpaper'];
 $ctitle=$_POST['ctitle'];
 $venue=$_POST['venue']; 

 $jname=$_POST['jname'];
 $papertitle=$_POST['papertitle'];
 $journaltitle=$_POST['journaltitle'];
 $publisher=$_POST['publisher'];
$volumeno=$_POST['volumeno'];

$submit=$_POST['submit'];

if($submit=="Book"){
   


    
$update="UPDATE Book SET bauthor='$bauthor'
,coauthor='$coauthor',dop='$dop',chapter='$chapter',bname='$bname',
bvolumeno='$bvolumeno',issueno='$issueno',pageno='$pageno',url='$url',scopusindex='$scopusindex',
webofscience='$webofscience',issn='$issn',category='$category',level='$level'
 WHERE Id='$RID' AND User_id='$UID'" ;

 
 
 if(mysqli_query($conn,$update)) {
    
     ?>
       
     <script>
 
     alert("Data Updated Successfully");
 location.href='editresearchdeatils.php';
   </script>
 
 <?php
 }
 else{
 ?>
 <script>
 
 alert("Something when Wrong");
 location.href='editresearchdeatils.php';
 </script>  
 <?php
 }


}

elseif($submit=="Conference"){

    $update="UPDATE Conference SET cauthor='$cauthor'
    ,coauthor='$coauthor',dop='$dop',cpaper='$cpaper',ctitle='$ctitle',
    venue='$venue',pageno='$pageno',url='$url',scopusindex='$scopusindex',
    webofscience='$webofscience',issn='$issn',category='$category',level='$level'
     WHERE Id='$RID' AND User_id='$UID'" ;
 
 
 if(mysqli_query($conn,$update)) {
    
    
    ?>
      
    <script>

    alert("Data Updated Successfully");
    location.href='editresearchdeatils.php';
  </script>

<?php
}

else{
?>
<script>

alert("Something when Wrong");
location.href='editresearchdeatils.php';
</script>  
<?php
}



}

elseif($submit=="Journal"){

    
$update="UPDATE Journal SET jname='$jname'
,coauthor='$coauthor',dop='$dop',papertitle='$papertitle',journaltitle='$journaltitle',publisher='$publisher',
volumeno='$volumeno',issueno='$issueno',pageno='$pageno',url='$url',scopusindex='$scopusindex',
webofscience='$webofscience',issn='$issn',category='$category',level='$level'
 WHERE Id='$RID' AND User_id='$UID'" ;

if(mysqli_query($conn,$update)) {
    
    
    ?>
      
    <script>

    alert("Data Updated Successfully");
    location.href='editresearchdeatils.php';
  </script>

<?php
}

else{
?>
<script>

alert("Something when Wrong");
location.href='editresearchdeatils.php';
</script>  
<?php
}
}






?>
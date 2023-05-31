<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Details</title>
  <link rel="stylesheet" href="bootstrap.css">
    <style>
        table,th,td{
            border:1px solid black;
            font-family:"Times New Roman",Times,serif;
            width:1%;
            height:60%;
        }
      </style>  
</head>
<?php
include 'connection.php';?>
<head>
<style>
        table,th,td{
            border:1px solid black;
            font-family:"Times New Roman",Times,serif;
           
            height:60%;
        }
        table {
  border-collapse: collapse;
}
      </style>  
</head>
<?php

$userid = $_POST['userid'];
$tablename = $_POST['selectactivity'];
$fromdate = $_POST['fromyear'];
$todate = $_POST['toyear'];


$query_for_id="SELECT * FROM Registration WHERE userid='$userid'";

$output=mysqli_query($conn,$query_for_id);

if($output){
    
    $row1= mysqli_fetch_assoc($output);
    
       $facultyid=$row1['Id'];
     
}

if (!empty($tablename)) {
   
           
            if($tablename=='All'){
                  
                                $from_query=$_POST['userid']==NULL?"(SELECT MIN(dop) FROM Book)":"(SELECT MIN(dop) FROM Book WHERE Book.User_id=$facultyid)";
                               
                               
                            $fromresult=mysqli_query($conn,$from_query);
                            if($fromresult->num_rows > 0)
                            {
                                if($row = mysqli_fetch_assoc($fromresult)) 
                                {
                                   $Min_date=$row['MIN(dop)'];
                                }
                            }
                            $fromyear=$_POST['fromyear']==NULL?$Min_date:$_POST['fromyear'];
                    
                            $to_query=$_POST['userid']==NULL?"(SELECT MAX(dop) FROM Book)":"(SELECT MAX(dop) FROM Book WHERE Book.User_id=$facultyid)"; 

                            $toresult=mysqli_query($conn,$to_query);
                            if($toresult->num_rows > 0)    
                            {
                                    if($row = mysqli_fetch_assoc($toresult)) 
                                    {
                                        $Max_date=$row['MAX(dop)'];
                                    }    
                            }
                            $toyear=$_POST['toyear']==NULL?$Max_date:$_POST['toyear'];
                            $formatted_fromdate = date("j F Y", strtotime($fromyear));
                            $formatted_todate = date("j F Y", strtotime($toyear));
                
                       ?>
                 
                     <?php
                
                
                
                            echo $row['count'];
                            echo "<p font-size:12pt;font-family:Times New Roman,Times,serif;>","List of Research Publications";
                            echo "<br>","Name of the Department <br>";
                
                
                
                            
                
                            $sql_query=$_POST['userid']==NULL?"SELECT * FROM Book
                             WHERE Book.dop BETWEEN '$fromyear' AND '$toyear'":"SELECT * FROM Book
                             WHERE Book.dop BETWEEN '$fromyear' AND '$toyear' AND Book.User_id='$facultyid'";
                            $result=mysqli_query($conn,$sql_query);
                
                
                            if ($result->num_rows > 0) {
                                echo "<br>","Research Publications from " . $formatted_fromdate . " to " . $formatted_todate;
                                ?>
                                <h2><?php echo "Books/Book Chapters" ?></h2>  <br>
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
                               
                     ?>
                         </table>   <?php
                        //  $UID=$_SESSION['ID'];
 
                 $sql=$_POST['userid']==NULL?"SELECT COUNT(scopusindex)
                 FROM Book
                 WHERE scopusindex='Y' AND webofscience='N' AND Book.dop BETWEEN '$fromyear' AND '$toyear'":"SELECT COUNT(scopusindex)
                 FROM Book
                 WHERE scopusindex='Y' AND webofscience='N' AND Book.dop BETWEEN '$fromyear' AND '$toyear' AND Book.User_id='$facultyid'";
                

               
                 $result=mysqli_query($conn,$sql);
                 
                 if($row = mysqli_fetch_assoc($result))
                 {
                  
                     $count1=$row['COUNT(scopusindex)'];
                     echo "Scopus_index_count: $count1 <br>";
                 }
                 $sql2=$_POST['userid']==NULL?"SELECT COUNT(webofscience)
                 FROM Book
                   WHERE webofscience='Y' AND scopusindex='N'   AND Book.dop BETWEEN '$fromyear' AND '$toyear'":"SELECT COUNT(webofscience)
                 FROM Book
                   WHERE webofscience='Y' AND scopusindex='N'   AND Book.dop BETWEEN '$fromyear' AND '$toyear' AND Book.User_id='$facultyid'";
                
                   $result2=mysqli_query($conn,$sql2);
                
                   if($row = mysqli_fetch_assoc($result2))
                  {
                    $count2=$row['COUNT(webofscience)'];
                    echo "Web of science_count: $count2 <br>" ;
                  }
                  
                  $sql3=$_POST['userid']==NULL?"SELECT COUNT(scopusindex)
                  FROM Book
                  WHERE scopusindex='N' AND webofscience='N' AND Book.dop BETWEEN '$fromyear' AND '$toyear'":"SELECT COUNT(scopusindex)
                  FROM Book
                  WHERE scopusindex='N' AND webofscience='N' AND Book.dop BETWEEN '$fromyear' AND '$toyear' AND Book.User_id='$facultyid'";
                  
                  $result3=mysqli_query($conn,$sql3);
                
                    if($row = mysqli_fetch_assoc($result3))
                      {
                    $Count3=$row['COUNT(scopusindex)'];
                    echo "Others: $Count3<br> ";
                      }
                      ///
                      $sql4=$_POST['userid']==NULL?"SELECT COUNT(webofscience)
                 FROM Book
                   WHERE webofscience='Y' AND scopusindex='Y'   AND Book.dop BETWEEN '$fromyear' AND '$toyear' ":"SELECT COUNT(webofscience)
                 FROM Book
                   WHERE webofscience='Y' AND scopusindex='Y'   AND Book.dop BETWEEN '$fromyear' AND '$toyear' AND Book.User_id='$facultyid'";
                
                   $result4=mysqli_query($conn,$sql4);
                
                   if($row = mysqli_fetch_assoc($result4))
                  {
                    $count4=$row['COUNT(webofscience)'];
                    echo "Both: $count4 <br>" ;
                  }
                  //
                      }else{
                    echo "<br>  Books/Book Chapters: Nil <br>";
                      } 
                
                
                      //////////////////////////////////////        CONFERENCE  ////////////////////////////////////////////////
                
                      $from_query=$_POST['userid']==NULL?"(SELECT MIN(dop) FROM Conference)":"(SELECT MIN(dop) FROM Conference WHERE Conference.User_id=$facultyid)";
                      $fromresult=mysqli_query($conn,$from_query);
                      if($fromresult->num_rows > 0)
                    {      
                    if($row = mysqli_fetch_assoc($fromresult)) 
                    {
                      
                       $Min_date=$row['MIN(dop)'];
                      
                    }
                        }
                        $fromyear=$_POST['fromyear']==NULL?$Min_date:$_POST['fromyear'];
                
                        $to_query=$_POST['userid']==NULL?"(SELECT MAX(dop) FROM Conference)":"(SELECT MAX(dop) FROM Conference WHERE Conference.User_id=$facultyid)";
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
                
                               $sql_query2=$_POST['userid']==NULL?"SELECT * FROM Conference
                               WHERE Conference.dop BETWEEN '$fromyear' AND '$toyear'":"SELECT * FROM Conference
                               WHERE Conference.dop BETWEEN '$fromyear' AND '$toyear' AND Conference.User_id='$facultyid'";
                               $result2=mysqli_query($conn,$sql_query2);

                               if ($result2->num_rows > 0) {
                           
                        echo "<br>","Research Publications from " . $formatted_fromdate . " to " .        $formatted_todate;           
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
                     <?php   
                    }
                               
                     ?>
                         </table>   <?php
                       
                
                            $sql=$_POST['userid']==NULL?"SELECT COUNT(scopusindex)
                            FROM Conference
                            WHERE scopusindex='Y' AND webofscience='N' AND Conference.dop BETWEEN '$fromyear' AND '$toyear'":"SELECT COUNT(scopusindex)
                            FROM Conference
                            WHERE scopusindex='Y' AND webofscience='N' AND Conference.dop BETWEEN '$fromyear' AND '$toyear' AND Conference.User_id='$facultyid'";
                
                         $result=mysqli_query($conn,$sql);
                
                         if($row = mysqli_fetch_assoc($result))
                         {
                    $count1=$row['COUNT(scopusindex)'];
                    echo "<br>Scopus_index_count: $count1 <br>";
                  }
                     $sql2=$_POST['userid']==NULL?"SELECT COUNT(webofscience)
                     FROM Conference
                   WHERE webofscience='Y' AND scopusindex='N'   AND Conference.dop BETWEEN '$fromyear' AND '$toyear'":"SELECT COUNT(webofscience)
                     FROM Conference
                   WHERE webofscience='Y' AND scopusindex='N'   AND Conference.dop BETWEEN '$fromyear' AND '$toyear' AND Conference.User_id='$facultyid'";
                
                     $result2=mysqli_query($conn,$sql2);
                
                     if($row = mysqli_fetch_assoc($result2))
                    {
                   $count2=$row['COUNT(webofscience)'];
                   echo "Web of science_count: $count2 <br>" ;
                        }


                    $sql3=$_POST['userid']==NULL?"SELECT COUNT(scopusindex)
                  FROM Conference
                  WHERE scopusindex='N' AND webofscience='N' AND Conference.dop BETWEEN '$fromyear' AND '$toyear'":"SELECT COUNT(scopusindex)
                  FROM Conference
                  WHERE scopusindex='N' AND webofscience='N' AND Conference.dop BETWEEN '$fromyear' AND '$toyear' AND Conference.User_id='$facultyid'";
                    $result3=mysqli_query($conn,$sql3);
                      
                      if($row = mysqli_fetch_assoc($result3))
                      {
                   $Count3=$row['COUNT(scopusindex)'];
                   echo "Others: $Count3<br> ";
                
                      }
                      $sql4=$_POST['userid']==NULL?"SELECT COUNT(webofscience)
                      FROM Conference
                        WHERE webofscience='Y' AND scopusindex='Y'   AND Conference.dop BETWEEN '$fromyear' AND '$toyear' ":"SELECT COUNT(webofscience)
                      FROM Conference
                        WHERE webofscience='Y' AND scopusindex='Y'   AND Conference.dop BETWEEN '$fromyear' AND '$toyear' AND Conference.User_id='$facultyid'";
                     
                        $result4=mysqli_query($conn,$sql4);
                     
                        if($row = mysqli_fetch_assoc($result4))
                       {
                         $count4=$row['COUNT(webofscience)'];
                         echo "Both: $count4 <br>" ;
                       } 
                      }else{
                    echo "<br>  Conference Publications=Nil <br>";
                   }   
                   ?>
                
                
                 <?php
                
                 /////////////////////////////////////Journal/////////////////////////////////////////
                
                
                
                 $from_query=$_POST['userid']==NULL?"(SELECT MIN(dop) FROM Journal)":"(SELECT MIN(dop) FROM Journal WHERE Journal.User_id=$facultyid)";
                    $fromresult=mysqli_query($conn,$from_query);
                                if($fromresult->num_rows > 0)
                                {
                    if($row = mysqli_fetch_assoc($fromresult)) 
                    {
                       $Min_date=$row['MIN(dop)'];
                    }
                                }
                                $fromyear=$_POST['fromyear']==NULL?$Min_date:$_POST['fromyear'];
                
                                $to_query=$_POST['userid']==NULL?"(SELECT MAX(dop) FROM Journal)":"(SELECT MAX(dop) FROM Journal WHERE Journal.User_id=$facultyid)";
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
                
                
                            $sql_query3=$_POST['userid']==NULL?"SELECT * FROM Journal
                            WHERE Journal.dop BETWEEN '$fromyear' AND '$toyear'":"SELECT * FROM Journal
                            WHERE Journal.dop BETWEEN '$fromyear' AND '$toyear' AND Journal.User_id='$facultyid'";
                            $result3=mysqli_query($conn,$sql_query3);
                
                
                            if ($result3->num_rows > 0) {
                    echo "<br>","Research Publications from " . $formatted_fromdate . " to " . $formatted_todate;
                           
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
                
                        while($row = mysqli_fetch_assoc($result3)) {
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
                        
                   ?>
                   </table>   <?php
                   
                   $sql=$_POST['userid']==NULL?"SELECT COUNT(scopusindex)
                   FROM Journal
                   WHERE scopusindex='Y' AND webofscience='N' AND Journal.dop BETWEEN '$fromyear' AND '$toyear'":"SELECT COUNT(scopusindex)
                   FROM Journal
                   WHERE scopusindex='Y' AND webofscience='N' AND Journal.dop BETWEEN '$fromyear' AND '$toyear' AND Journal.User_id='$facultyid'";
       
                
                 $result=mysqli_query($conn,$sql);
                 
                 if($row = mysqli_fetch_assoc($result))
                 {
                     $count1=$row['COUNT(scopusindex)'];
                     echo "Scopus_index_count: $count1 <br>";
                 }
                 $sql2=$_POST['userid']==NULL?"SELECT COUNT(webofscience)
                     FROM Journal
                   WHERE webofscience='Y' AND scopusindex='N'   AND Journal.dop BETWEEN '$fromyear' AND '$toyear'":"SELECT COUNT(webofscience)
                     FROM Journal
                   WHERE webofscience='Y' AND scopusindex='N'   AND Journal.dop BETWEEN '$fromyear' AND '$toyear' AND Journal.User_id='$facultyid'";
                
                    $result2=mysqli_query($conn,$sql2);
                
                    if($row = mysqli_fetch_assoc($result2))
                 {
                    $count2=$row['COUNT(webofscience)'];
                    echo "Web of science_count: $count2 <br>" ;
                 }
                 $sql3=$_POST['userid']==NULL?"SELECT COUNT(scopusindex)
                 FROM Journal
                 WHERE scopusindex='N' AND webofscience='N' AND Journal.dop BETWEEN '$fromyear' AND '$toyear'":"SELECT COUNT(scopusindex)
                 FROM Journal
                 WHERE scopusindex='N' AND webofscience='N' AND Journal.dop BETWEEN '$fromyear' AND '$toyear' AND Journal.User_id='$facultyid'";
                   $result3=mysqli_query($conn,$sql3);
                
                    if($row = mysqli_fetch_assoc($result3))
                    {
                    $Count3=$row['COUNT(scopusindex)'];
                    echo "Others: $Count3<br> ";
                    }
                    $sql4=$_POST['userid']==NULL?"SELECT COUNT(webofscience)
                    FROM Journal
                      WHERE webofscience='Y' AND scopusindex='Y'   AND Journal.dop BETWEEN '$fromyear' AND '$toyear' ":"SELECT COUNT(webofscience)
                    FROM Journal
                      WHERE webofscience='Y' AND scopusindex='Y'   AND Journal.dop BETWEEN '$fromyear' AND '$toyear' AND Journal.User_id='$facultyid'";
                   
                      $result4=mysqli_query($conn,$sql4);
                   
                      if($row = mysqli_fetch_assoc($result4))
                     {
                       $count4=$row['COUNT(webofscience)'];
                       echo "Both: $count4 <br>" ;
                     }  
                    }
                    else{
                    echo "<br>  Journal: Nil <br>";
                  } 
                //////////////////// Patent ////////////////
                
                $from_query=$_POST['userid']==NULL?"(SELECT MIN(dop) FROM Patent)":"(SELECT MIN(dop) FROM Patent where Patent.User_id='$facultyid')";
                    $fromresult=mysqli_query($conn,$from_query);
                                if($fromresult->num_rows > 0)
                                {
                    if($row = mysqli_fetch_assoc($fromresult)) 
                    {
                       $Min_date=$row['MIN(dop)'];
                    }
                                }
                                $fromyear=$_POST['fromyear']==NULL?$Min_date:$_POST['fromyear'];
                
                                $to_query=$_POST['userid']==NULL?"(SELECT MAX(dop) FROM Patent)":"(SELECT MAX(dop) FROM Patent where Patent.User_id='$facultyid')";
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
                
                
                            $sql_query3=$_POST['userid']==NULL?"SELECT * FROM Patent
                        WHERE Patent.dop BETWEEN '$fromyear' AND '$toyear' ":"SELECT * FROM Patent
                        WHERE Patent.dop BETWEEN '$fromyear' AND '$toyear' AND Patent.User_id='$facultyid' ";
                            $result3=mysqli_query($conn,$sql_query3);
                
                
                            if ($result3->num_rows > 0) {
                    echo "<br>","Research Publications from " . $formatted_fromdate . " to " . $formatted_todate;
                           
                    ?>
                    <h2 ><?php echo " List of Patents Details " ?></h2>
                    <br>
                
                        <table  class="table table-sm">
                            <thead class="thead-light">
                          <tr>
                                <th>Sl.No</th>
                                <th>Faculty Member</th>
                                <th>Title</th>
                                <th>Application No</th>
                                <th>Ref. and Date</th>
                                <th>Status <br>(Applied/Awarded/Published)</th>
                                
                             
                              </tr>        
                       </thead>
                    
                            <?php
                            $sl=1;
                
                        while($row = mysqli_fetch_assoc($result3)) {
                   ?>     
                    <tr >
                     <td><?php echo $sl++; ?></td>
                     <td><?php echo $row["fmember"]; ?></td>
                     <td><?php echo $row["title"];?></td>
                     <td><?php echo $row["application_no"];?></td>
                     <td><?php echo $row["reference_no"]." and ".$row["dop"];?></td>
                     <td><?php echo $row["status"];?></td>
                     
                   </tr>
                  <?php }
                        
                   ?>
                   </table>   
                  
                <?php
                        }
                        else{
                            echo "<br>  Patent Details: Nil <br>";
                          } 
                 ////////////////PHD///////////////////////////////////////
                
                
                 $from_query=$_POST['userid']==NULL?"(SELECT MIN(dop) FROM Phd)":"(SELECT MIN(dop) FROM Phd where Phd.User_id='$facultyid')";
                 $fromresult=mysqli_query($conn,$from_query);
                             if($fromresult->num_rows > 0)
                             {
                 if($row = mysqli_fetch_assoc($fromresult)) 
                 {
                    $Min_date=$row['MIN(dop)'];
                 }
                             }
                             $fromyear=$_POST['fromyear']==NULL?$Min_date:$_POST['fromyear'];
                
                             $to_query=$_POST['userid']==NULL?"(SELECT MAX(dop) FROM Phd)":"(SELECT MAX(dop) FROM Phd where Phd.User_id='$facultyid')";
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

                             $sql_query3=$_POST['userid']==NULL?"SELECT * FROM Phd
                        WHERE Phd.dop BETWEEN '$fromyear' AND '$toyear' ":"SELECT * FROM Phd
                        WHERE Phd.dop BETWEEN '$fromyear' AND '$toyear' AND Phd.User_id='$facultyid' ";
                                 $result3=mysqli_query($conn,$sql_query3);
                     
                     
                                 if ($result3->num_rows > 0) {
                         echo "<br>","Research Publications from " . $formatted_fromdate . " to " . $formatted_todate;
                                
                         ?>
                         <h2 ><?php echo " List of Phd Details " ?></h2>
                         <br>
                     
                             <table  class="table table-sm">
                                 <thead class="thead-light">
                               <tr>
                                     <th>Sl.No</th>
                                     <th>Research Scholar</th>
                                     <th>Title of the Thesis</th>
                                     <th>Name of the Guide</th>
                                     <th>Name of the Co-Guide</th>
                                     <th>Status <br>(Awarded/Submitted/Ongoing)</th>
                                     <th> Date </th>
                                     <th>Research Center</th>
                                     
                                     
                                  
                                   </tr>        
                            </thead>
                         
                                 <?php
                                 $sl=1;
                     
                             while($row = mysqli_fetch_assoc($result3)) {
                        ?>     
                         <tr >
                          <td><?php echo $sl++; ?></td>
                          <td><?php echo $row["pname"]; ?></td>
                          <td><?php echo $row["thesis"];?></td>
                          <td><?php echo $row["guide"];?></td>
                          <td><?php echo $row["coguide"];?></td>
                          <td><?php echo $row["status"];?></td>
                          <td><?php echo $row["dop"];?></td>
                          <td><?php echo $row["research"];?></td>
                          
                        </tr>
                       <?php }
                             
                        ?>
                        </table>   
                       
                     <?php
                             }
                             else{
                                echo "<br>  Phd Details: Nil <br>";
                              } 
                
                 }
               ///////////////////////////End of All details/////////////
            
           
 else{

  

  $from_query=$_POST['userid']==NULL?"(SELECT MIN(dop) FROM $tablename)":"(SELECT MIN(dop) FROM $tablename WHERE $tablename.User_id=$facultyid)";
     $fromresult=mysqli_query($conn,$from_query);
   if($fromresult->num_rows > 0)
   {
       if($row = mysqli_fetch_assoc($fromresult)) 
       {
          $Min_date=$row['MIN(dop)'];
       }
   }
   $fromyear=$_POST['fromyear']==NULL?$Min_date:$_POST['fromyear'];
   
   $to_query=$_POST['userid']==NULL?"(SELECT MAX(dop) FROM $tablename)":"(SELECT MAX(dop) FROM $tablename WHERE $tablename.User_id=$facultyid)";
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
   
    
   
   
   
   <?php
   
   
   
   echo $row['count'];
   echo "<p font-size:12pt;font-family:Times New Roman,Times,serif;>","List of Research Publications";
   echo "<br>","Name of the Department";
   
   
   
   $sql_query=$_POST['userid']==NULL?"SELECT * FROM $tablename
                            WHERE $tablename.dop BETWEEN '$fromyear' AND '$toyear'":"SELECT * FROM $tablename
                            WHERE $tablename.dop BETWEEN '$fromyear' AND '$toyear' AND $tablename.User_id='$facultyid'";
   $result=mysqli_query($conn,$sql_query);
   
   
   if($tablename=='Book')
   
   {
   
   if ($result->num_rows > 0) {
       echo "<br>","Research Publications from " . $formatted_fromdate . " to " . $formatted_todate;
          
             
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
                 }else{
                   echo "<br>   Book/Book Chapter = Nil <br>";
                 }
               }?>
            </table>   <?php
           //  $UID=$_SESSION['ID'];
   
             
            
   if($tablename=='Conference')
            {
           //  $sql_query="SELECT * From Conference where User_id='$UID'";
           //  $result=mysqli_query($conn,$sql_query);
            if ($result->num_rows > 0) {
               echo "<br>","Research Publications from " . $formatted_fromdate . " to " . $formatted_todate;
               
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
                          else{
                           echo "<br>  Conference Publications=Nil <br>";
                          }
                 ?>
                     </table>   <?php }
                     
            
    if($tablename=='Journal')
    {
  
    if ($result->num_rows > 0) {
       echo "<br>","Research Publications from " . $formatted_fromdate . " to " . $formatted_todate;
              
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
                  }else{
                   echo "<br>   Journal Papers = Nil <br>";
                 }
         ?>
             </table>   <?php }
   
   
   
   
   
   if($tablename=='Patent')
   {
     if ($result->num_rows > 0)
      {
       echo "<br>","Research Publications from " . $formatted_fromdate . " to " . $formatted_todate;
       ?>
       <h2 ><?php echo " List of Patents Applied" ?></h2>
       <br>
   
           <table  class="table table-sm">
               <thead class="thead-light">
             <tr>
                   <th>Sl.No</th>
                   <th>Faculty Member</th>
                   <th>Title</th>
                   <th>Application No </th>
                   <th>Ref. and Date </th>
                   
                   <th style="text-align:center;"> Status<br>(Applied/Awarded/Published)</th>
                   
                
                 </tr>        
          </thead>
       
   <?php
   $sl=1;
   
           while($row = mysqli_fetch_assoc($result))
            {
   ?>     
       <tr >
        <td><?php echo $sl++; ?></td>
        <td><?php echo $row["fmember"]; ?></td>
        <td><?php echo $row["title"];?></td>
        <td><?php echo $row["application_no"];?></td>
        <td><?php echo $row["reference_no"]." & ".$row["dop"];?></td>
        <td><?php echo $row["status"];?></td>
       
        <?php }
                  }
                  else{
                   echo "<br>   Patent Details = Nil <br>";
                 }
         ?>
             </table>   <?php }
   
   if($tablename=='Phd')
   {
     if ($result->num_rows > 0)
      {
       echo "<br>","Research Publications from " . $formatted_fromdate . " to " . $formatted_todate;
       ?>
       <h2 ><?php echo " List of PhD Details" ?></h2>
       <br>
       <br>
        
                <table  class="table table-sm">
                    <thead class="thead-light">
                  <tr>
                        <th>Sl.No</th>
                        <th>Research Scholar</th>
                        <th>Title of the Thesis</th>
                        <th>Name of the Guide</th>
                        <th>Name of the Co-Guide</th>
                        <th>Status <br>(Awarded/Submitted/Ongoing)</th>
                        <th> Date </th>
                        <th>Research Center</th>
                        
                        
                     
                      </tr>        
               </thead>
            
                    <?php
                    $sl=1;
        
                while($row = mysqli_fetch_assoc($result)) {
           ?>     
            <tr >
             <td><?php echo $sl++; ?></td>
             <td><?php echo $row["pname"]; ?></td>
             <td><?php echo $row["thesis"];?></td>
             <td><?php echo $row["guide"];?></td>
             <td><?php echo $row["coguide"];?></td>
             <td><?php echo $row["status"];?></td>
             <td><?php echo $row["dop"];?></td>
             <td><?php echo $row["research"];?></td>
             
           </tr>
          <?php }
                
           ?>
           </table>   
          
        <?php
                } else{
                 echo "<br>   Phd Details = Nil <br>";
               }
       ?>
           </table>   <?php }
   
            
   ?>
   
   <?php
   
   if($result->num_rows > 0){
   
   
    $sql=$_POST['userid']==NULL?"SELECT COUNT(scopusindex)
    FROM $tablename
    WHERE scopusindex='Y' AND webofscience='N' AND $tablename.dop BETWEEN '$fromyear' AND '$toyear'":"SELECT COUNT(scopusindex)
    FROM $tablename
    WHERE scopusindex='Y' AND webofscience='N' AND $tablename.dop BETWEEN '$fromyear' AND '$toyear' AND $tablename.User_id='$facultyid'";
   
   $result=mysqli_query($conn,$sql);
   
   if($row = mysqli_fetch_assoc($result))
   {
       $count1=$row['COUNT(scopusindex)'];
       echo "Scopus_index_count: $count1 <br>";
   }
   $sql2=$_POST['userid']==NULL?"SELECT COUNT(webofscience)
                     FROM $tablename
                   WHERE webofscience='Y' AND scopusindex='N'   AND $tablename.dop BETWEEN '$fromyear' AND '$toyear'":"SELECT COUNT(webofscience)
                     FROM $tablename
                   WHERE webofscience='Y' AND scopusindex='N'   AND $tablename.dop BETWEEN '$fromyear' AND '$toyear' AND $tablename.User_id='$facultyid'";
   
   $result2=mysqli_query($conn,$sql2);
   
   if($row = mysqli_fetch_assoc($result2))
   {
      $count2=$row['COUNT(webofscience)'];
      echo "Webofscience_count: $count2 <br>" ;
   }
   $sql3=$_POST['userid']==NULL?"SELECT COUNT(scopusindex)
                 FROM $tablename
                 WHERE scopusindex='N' AND webofscience='N' AND $tablename.dop BETWEEN '$fromyear' AND '$toyear'":"SELECT COUNT(scopusindex)
                 FROM $tablename
                 WHERE scopusindex='N' AND webofscience='N' AND $tablename.dop BETWEEN '$fromyear' AND '$toyear' AND $tablename.User_id='$facultyid'";
   $result3=mysqli_query($conn,$sql3);
   
   if($row = mysqli_fetch_assoc($result3))
   {
      $Count3=$row['COUNT(scopusindex)'];
      echo "Others: $Count3<br> ";
   }
   $sql4=$_POST['userid']==NULL?"SELECT COUNT(webofscience)
                    FROM $tablename
                      WHERE webofscience='Y' AND scopusindex='Y'   AND $tablename.dop BETWEEN '$fromyear' AND '$toyear' ":"SELECT COUNT(webofscience)
                    FROM $tablename
                      WHERE webofscience='Y' AND scopusindex='Y'   AND $tablename.dop BETWEEN '$fromyear' AND '$toyear' AND $tablename.User_id='$facultyid'";
      
         $result4=mysqli_query($conn,$sql4);
      
         if($row = mysqli_fetch_assoc($result4))
        {
          $count4=$row['COUNT(webofscience)'];
          echo "Both: $count4 <br>" ;
        }  
   }
            
 }
        
    } 
    
   
   
else {
    // $type is not provided
    // Handle the error or show an appropriate message
    echo "error";
}


























?>
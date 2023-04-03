
<?php
include 'connection.php' ;
    


session_start();
$UID=$_SESSION['ID'];


$selectactivity=$_POST['selectactivity'];
$fromyear=$_POST['fromyear'];
$toyear=$_POST['toyear'];


// $sql11=$year==null?"Select * From $table where faculty_id='$uId' AND type_of_activity='$type'":
//  "Select * From $table where faculty_id= '$uId' AND type_of_activity='$type' AND  year(Yearly)='$year'";

 $sql_query="SELECT * From Book where User_id='$UID'";
//  $sql_query2="SELECT * From Book,Conference,Journal where User_id='$UID'";
$result=mysqli_query($conn,$sql_query);

if ($result->num_rows > 0) {
    // output data of each row
    
  
  
      //if ($result) {
        if($selectactivity==1) {
          
          ?>
          <h2 ><?php echo "BOOK DETAILS" ?></h2>
  
             
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
                
  
            //all or yearly condition query
            //   if($row["selectactivity"]=='1'){
  
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

 ?>

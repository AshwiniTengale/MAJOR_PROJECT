<?php
if (isset($_FILES['profile']['name']) AND !empty($_FILES['profile']['name'])) {
         
         
         $img_name = $_FILES['profile']['name'];
         $tmp_name = $_FILES['profile']['tmp_name'];
         $error = $_FILES['profile']['error'];
         echo $img_name."<br>",$tmp_name."<br>",$error."<br>";
         if($error === 0){
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_to_lc = strtolower($img_ex);

            echo  $img_ex."<br>".$img_ex_to_lc;

            $allowed_exs = array('jpg', 'jpeg', 'png');
            if(in_array($img_ex_to_lc, $allowed_exs)){
               $new_img_name = uniqid($uname, true).'.'.$img_ex_to_lc;
               $img_upload_path = 'image/'.$new_img_name;

               echo $new_img_name."<br>".$img_upload_path;

               move_uploaded_file($tmp_name, $img_upload_path);

               // Insert into Database
               $sql = "INSERT INTO users(fname, username, password, profile) 
                 VALUES(?,?,?,?)";
               $stmt = $conn->prepare($sql);
               $stmt->execute([$fname, $uname, $pass, $new_img_name]);

               header("Location: ../index.php?success=Your account has been created successfully");
                exit;
            }else {
               $em = "You can't upload files of this type";
               header("Location: ../index.php?error=$em&$data");
               exit;
            }
         }else {
            $em = "unknown error occurred!";
            header("Location: ../index.php?error=$em&$data");
            exit;
         }

        
      }else {
       	$sql = "INSERT INTO users(fname, username, password) 
       	        VALUES(?,?,?)";
       	$stmt = $conn->prepare($sql);
       	$stmt->execute([$fname, $uname, $pass]);

       	header("Location: ../index.php?success=Your account has been created successfully");
   	    exit;
      }
    ?>
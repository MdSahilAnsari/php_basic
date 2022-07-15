<?php
if(isset($_POST['submit'])){
  //echo "<pre>";
   // print_r($_FILES);
    $err=[];
    $fileName=$_FILES['image']['name'];
    $file_tmp=$_FILES['image']['tmp_name'];
    $file_size=$_FILES['image']['size'];
    $file_type=$_FILES['image']['type'];

        if($file_type==TRUE){
            $destination="upload/".$fileName;
            if(move_uploaded_file($file_tmp,$destination)){
             echo "File Uploaded Succesfully";
            }
            else{
             echo "Try Again";
            }
            
        }
        else{
            echo "Wrong";
        }



   
      
}

$_COOKIE;   
setcookie("name","pankaj",time()-3600);
setcookie("age","35",time()+3600);
print_r($_COOKIE['name']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" name="submit">

</form>

</body>

</html>
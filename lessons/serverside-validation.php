<?php
    if(isset($_POST['btnProcess'])){
        if(isset($_FILES['filImage'])){
            $arrErrors = array();
            $fileName = $_FILES['filImage']['name'];
            $fileSize = $_FILES['filImage']['size'];
            $fileTemp = $_FILES['filImage']['tmp_name'];
            $fileType = $_FILES['filImage']['type'];

            $fileExtTemp = explode('.', $fileName);
            $fileExt = strtolower(end($fileExtTemp));
            echo $fileExt; 

            $arrAllowedFiles = array('jpeg', 'jpg', 'png');

            $uploadDIR = 'uploads/';

            if(in_array($fileExt, $arrAllowedFiles) === false) //needle and haystack
                $arrErrors[] = "Extension File is not allowed, You can only Choose a JPG or PNG file"
                
            if($fileSize > 5000000)
            $arrErrors[] = "File size should be 5mb maximum.";

            if(empty($arrErrors)){
                move_uploaded_file($fileTemp, $uploadDIR . $fileName);
                echo 'File Upload is Successful';
            }
            else{
                echo '<b>File Upload Error(s):</b><br>';
                foreach ($arrErrors as $key => $value){
                    echo $value . '<br>';
                }
            }
        }  
    }
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
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="filImage"><br>
        <input type="submit" name="btnProcess" value="Process">
    
    </form>
</body>
</html>
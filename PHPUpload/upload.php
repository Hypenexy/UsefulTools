<?php
print_r($_FILES);

if(isset($_FILES['file'])){
    $countfiles = count($_FILES['file']['name']);
    for($i=0;$i<$countfiles;$i++){
        echo "eys";
        $filename = $_FILES['file']['name'][$i];
        $uploaddir = "uploads/";
        $uploadfile = $uploaddir . basename( $_FILES['file']['name'][$i]);
        
        if(move_uploaded_file($_FILES['file']['tmp_name'][$i], $uploadfile)){
          echo "The file has been uploaded successfully";
        }
        else{
          echo "There was an error uploading the file";
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
    <form enctype="multipart/form-data" method="post">
        <input name="file[]" type="file" multiple><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
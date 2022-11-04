<?php
if(isset($_POST['submit'])){
    // $file = $_FILES['file'];
    echo '<pre>';
    print_r($_FILES['file']);
 
//     $fileName=$_FILES['file']['name'];
//     $fileTmpName=$_FILES['file']['tmp_name'];
//     $fileSize=$_FILES['file']['size'];
//     $fileError=$_FILES['file']['error'];
//     $fileType=$_FILES['file']['Type'];


//     $fileExt = explode('.', $fileName);
//     $fileActualExxt = strtolower(end($fileExt));

//     $allowed = array('jpg', 'jpeg', 'png', 'pdf' );
//     if(in_array($fileActualExxt, $allowed)){

//     }else{
//         echo "You cannot upload files of this type";
//     }
}



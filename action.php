<?php

//var_dump($_POST);
// var_dump($_FILES['img']['name']);
// var_dump($_POST);

if (($_FILES['img']['name']!="" && $_POST['desc'] !="" && $_POST['price'] != "" && $_POST['productname'] != "")){
// Where the file is going to be stored
 
//sanitize productname
 $productname = mb_ereg_replace("([^\w\s\d\-_~,;\[\]\(\).])", '', $_POST['productname']);
 $productname = mb_ereg_replace("([\.]{2,})", '', $productname);

 $uid = rand(2,100000); //currently randomized for simulate the different users
 $target_dir = "datages/";
 $file = $_FILES['img']['name'];
 $path = pathinfo($file);

 $desc = mb_ereg_replace("([^\w\s\d\-_~,;\[\]\(\).])", '', $_POST['desc']);
 $desc = mb_ereg_replace("([\.]{2,})", '', $desc);
 //$desc = $_POST['desc'];
 
 $price = $_POST['price'];
//Prepare the data for storing
// Make the base string add the date and the Joiner ".*." and the first three characters from old name
 $truncname = substr($path["filename"], 0, 3);

 if(strlen($productname)<20){
     $fullname = "S-p-n-".$productname;
 }else{
     $productname = substr($productname,0,20);
     $fullname = "S-p-n-".$productname;
 }

 $fullname = $fullname."---t-".strval(date("Y-m-d"))."---n-".$truncname;
//Trim the description if its longer than 150 chars.
 if(strlen($desc)<150){
    $fullname = $fullname."---d-".$desc;   
 }else{
    $desc = substr($desc, 0, 149);
    $fullname = $fullname."---d-".$desc;   
 }
 //Chech the length of the price and add it to the name
 if(strlen($price < 11)){
     $fullname = $fullname."---p-".$price;
 }else{
     $price = substr($price,0,7);
     $fullname = $fullname."---p-".$price;
 }
//Add some dynamic fun -  like likes, default will be 0 - other likeHandler.php will handle the likes
 $fullname = $fullname."---l-0";

//Add the user id of the uploader
 $fullname = $fullname."---u-".$uid;


// **** **** ***** Debugging
//  echo "<H2>".$fullname."</H2><br>";
//  echo strlen($fullname)." characters total";
//  echo 250-strlen($fullname)." characters left";


 $filename = $fullname;
 $ext = $path['extension'];
 $temp_name = $_FILES['img']['tmp_name'];
 $path_filename_ext = $target_dir.$filename.".".$ext;
 
// Check if file already exists
if (file_exists($path_filename_ext)) {
 //echo "Sorry, file already exists.";
 }else{
 move_uploaded_file($temp_name,$path_filename_ext);
   echo "
   <div class=\"alert alert-success\" role=\"alert\">
    This is a success alert—check it out!
  </div>";
 }

}

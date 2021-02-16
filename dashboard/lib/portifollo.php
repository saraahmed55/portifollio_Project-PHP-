<?php



function AddNewPro($img,$desc,$user_id){


    $con= mysqli_connect("localhost","root","","bootstrap_website");

   $sql="INSERT INTO `portifollo`( `img`,`description`, `user_id`) VALUES ('$img','$desc','$user_id')";
   mysqli_query($con,$sql);

   $res = mysqli_affected_rows($con);
   if ($res==1){
       return true;
   }
   else{
    return false;
   }
}


function getProtofollo(){

    $con= mysqli_connect("localhost","root","","bootstrap_website");

    $sql="SELECT * FROM `portifolloView` ";
   $q= mysqli_query($con,$sql);

   $projects=[];
   while($res= mysqli_fetch_assoc($q)){
       $projects[]=$res;
   }
   return $projects;

}

function Deletepro($pro_id){


    $con= mysqli_connect("localhost","root","","bootstrap_website");

   $sql="DELETE FROM `portifollo` WHERE  `id` =$pro_id";
   mysqli_query($con,$sql);

   $res = mysqli_affected_rows($con);
   if ($res==1){
       return true;
   }
   else{
    return false;
   }
}
function getProtofolloById($id){

    $con= mysqli_connect("localhost","root","","bootstrap_website");

    $sql="SELECT * FROM `portifolloView` WHERE `id`=$id ";
   $q= mysqli_query($con,$sql);

   
   $res= mysqli_fetch_assoc($q);
   return $res;

}


function updatePro($id,$desc,$img){


    $con= mysqli_connect("localhost","root","","bootstrap_website");

   $sql="UPDATE `portifollo` SET `description`= '$desc'";
   if(!empty($img)){
       $sql .= ", `img`= '$img'";
   }
   $sql .= "WHERE `id` =$id";
   mysqli_query($con,$sql);

   $res = mysqli_affected_rows($con);
   if ($res==1){
       return true;
   }
   else{
    return false;
   }
}
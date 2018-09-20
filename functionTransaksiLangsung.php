<?php

if(isset($_FILES["image"])){
    
    $filetype = $_FILES['image']['type'];
    //echo $filetype;
    $filetmp = $_FILES['image']['tmp_name'];
    $id = 1;
    $image = move_uploaded_file($filetmp, "../../images/Profile/$filename");
    
    echo "Asdf";
    //
    $filename = $_FILES['image']['name'];
    if(!empty($filename)){

        $query = $conn->query("UPDATE `user` SET `foto_profile` = '".$filename."' WHERE `user`.`id_user` = '".$_SESSION["id"]."';");
        if($query){
            echo "sukses";
        }
        else {
            echo "gagal";
        }
    }

}
?>
<?php
require_once('connect.php');    
    if (isset($_POST['submit'])) {

         $bedno = mysqli_real_escape_string($connect, $_POST['bedno']);
          $bedtype = mysqli_real_escape_string($connect, $_POST['bedtype']);
          $desc = mysqli_real_escape_string($connect, $_POST['desc']);
        

        if(empty($bedno) || empty($bedtype) || empty($desc)){
            header("Location:  ../manage_bed.php?signup=empty values");
            exit();
        }

        else {
            //CHECK IF INPUT CHARACTERS ARE VALID
            if(!preg_match("/^[a-zA-Z*S]/", $bedtype) || !preg_match("/^[a-zA-Z*S]/", $desc)){
                header("Location: ../manage_bed.php?signup=invalid values");
                exit();
            }

            else {
                    
                    //INSERTING USER INTO THE DATABASE

                    $sql = "INSERT INTO t_bed (bed_bednumber, bed_bedtype, bed_description) VALUES('$bedno', '$bedtype', '$desc');";
                    var_dump($sql);
                    mysqli_query($connect, $sql);
                    header("Location: ../manage_bed.php?signup=success");
                    exit();
                }
                
            
            } 
     }else{
        header("Location: ../manage_bed.php");
        exit();
    }

?>  
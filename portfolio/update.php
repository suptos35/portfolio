<?php 

include "config.php";

    
if (isset($_POST['update'])) {
        $degree = $_POST['degree'];

        $institute = $_POST['institute'];

        $year = $_POST['year'];

        $id = $_POST['id'];

        

        $sql = "UPDATE `education` SET `degree`='$degree',`institute`='$institute',`year`='$year' WHERE `id`=$id"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }
    }

    else if (isset($_POST['insert'])) {
        $degree = $_POST['degree'];

        $institute = $_POST['institute'];

        $year = $_POST['year'];

        $id = $_POST['id'];

        

        $sql = "INSERT INTO `education` (`id`, `degree`, `institute`, `year`) VALUES ('$id', ' $degree', '$institute', ' $year')"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record inserted successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }
    }

   

    ?>
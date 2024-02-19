<?php
include "conn.php";
session_start();
    //this program is for create profile

    if(isset($_POST['create_profile']))

    $fn = $_POST['fn'];
    $mn = $_POST['mn'];
    $ln = $_POST['ln'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $address = $_POST['address'];
    $citizenship = $_POST['citizenship'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $cn = $_POST['cn'];

    $insert_profile = mysqli_query($conn, "INSERT INTO tronsal 
    VALUES ('0','$fn','$mn', '$ln', '$age', '$sex','$address','$citizenship', '$birthday', '$email', '$cn')");

    if($insert_profile == true){
        ?>
            <script>
                alert("Data is Successfully Inserted!");
                window.location.href="index.php";
            </script>
        <?php
    }else{
        ?>
        <script>
            alert("Data is not Inserted!");
            window.location.href="index.php";
        </script>
    <?php 

    }

?>
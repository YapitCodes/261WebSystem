<?php
    include "connect.php";

    if(isset($_POST['submit']))
        {
            $code = $_POST['code'];
            $description = $_POST['description'];
            $address = $_POST['address'];

            $sql_insert = "INSERT INTO school(code,description,address) 
                            VALUES ('$code', '$description', '$address')";

            if(mysqli_query($conn, $sql_insert))
                {
                    echo "New record created susccessfully!";
                    header("Location: index.php");
                }
        }

    if(isset($_GET['action']) && $_GET['action'] == 'del')
        {
            $id = $_GET['id'];
            $sql_delete = "DELETE FROM school WHERE id = '$id'";

            if(mysqli_query($conn, $sql_delete))
                {
                    echo "Record deleted successfully!";
                    header("Location: index.php");
                }
        }
?>
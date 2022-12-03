<?php 

    include('database/db.php');


    if(isset($_POST['save_contact'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $job = $_POST['job'];
        $company = $_POST['company'];
        $message = $_POST['message'];

        $query = "INSERT INTO contact(name, email, tel, job, company, message ) VALUES ('$name', '$email', '$tel', '$job', '$company', '$message')";
        $result = mysqli_query($con, $query);

        if(!$result) {
            die("Query failed");
        }

        $_SESSION['message'] = 'Datos de contacto enviados';
        $_SESSION['message_type'] = 'success';

        header("location: index.php");
    }

?>
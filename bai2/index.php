<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiem tra du lieu php</title>
    
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $emp_name = trim($_POST['emp_name']);
        $emp_email = trim($_POST['emp_email']);
        $emp_address = trim($_POST['emp_address']);

        // echo $emp_address;

        if ($emp_name == "") {
            $errMsg = "Nhap ten di !";
            $code = 1;
        }

        elseif ($emp_email == "") {
            $errMsg = "Nhap email di !";
            $code = 2;
        }

        elseif ($emp_address == "") {
            $errMsg = "Nhap dia chi di !";
            $code = 3;
        }

        else {
            echo 'Successfully !!!';
        }
    }

    ?>
    <h1>Dang ky thong tin</h1>
    <?php
    if (isset($errMsg)) {
        echo $errMsg;
    }
    ?>
    <form action="#" method="post">
        Name : <input type="text" name="emp_name" id="emp_name"
        value="<?php if (isset($emp_name)) {
            echo $emp_name;
        } ?>"
        > <br>
        <?php
        // if (isset($code) && $code = 1) {
        //    echo $errMsg;
        // }
        ?>
        Email : <input type="email" name="emp_email" id="emp_email"
        value="<?php if (isset($emp_email)) {
            echo $emp_email;
        } ?>"> <br>
        Address : <input type="text" name="emp_address" id="emp_address"
        value="<?php if (isset($emp_address)) {
            echo $emp_address;
        } ?>"> <br> <br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>
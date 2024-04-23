<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file</title>
</head>

<body>

    <?php
    if (isset($_POST['up'])) { // Khi nhan phim submit
        if ($_FILES['file']['name'] != null) { // Da chon file
            // Tien hanh code upload file
            if (
                $_FILES['file']['type'] == "image/jpeg"
                || $_FILES['file']['type'] == "image/png"
                || $_FILES['file']['type'] == "image/gif"
            ) { // La file anh
                // Tien hanh upload file
                if ($_FILES['file']['size'] > 1048576) {
                    echo 'File khong duoc lon hon 1MB';
                } else {
                    // File hop le, tien hanh uploads
                    $path = "uploads/";
                    $tmp_name = $_FILES['file']['tmp_name'];
                    $name = $_FILES['file']['name'];
                    $type = $_FILES['file']['type'];
                    $size = $_FILES['file']['size'];
                }

                // Upload file
                move_uploaded_file($tmp_name, $path . $name);
                echo 'File up loaded ! <br>';
                echo 'File name : ' . $name . ' <br>';
                echo 'File type : ' . $type . ' <br>';
                echo 'File size : ' . $size . ' <br>';
                // $path .= $name;
                echo '<img src="./uploads/'.$name.'" width="100">';

            } else {
                echo 'Kieu file khong hop le !';
            }
        } else {
            echo 'Chon file di nao !';
        }
    }
    ?>
    <hr>
    <form action="#" method="post" enctype="multipart/form-data">
        Files : <input type="file" name="file" id="file"> <br> <br>
        <input type="submit" value="Upload" name="up">
    </form>
</body>

</html>
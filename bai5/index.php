<?php
// Connect
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'dbdemo';
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die('Connect fail !!!');
} else {
    echo 'Connect successfully !!';
}
// Tao DB
$sql = "CREATE Database demo";
if (mysqli_query($conn, $sql)) {
    echo 'Da tao thanh cong CSDL !';
} else {
    echo 'Khong tao duoc CSDL ' . mysqli_error($conn);
}

// Tao Table
$sql = "CREATE TABLE user(id INT AUTO_INCREMENT, name VARCHAR(20) NOT NULL,
        user_salary INT NOT NULL, primary key (id))";
if (mysqli_query($conn, $sql)) {
    echo 'Bang user thanh cong !';
} else {
    echo 'Ban khong the tao bang' . mysqli_error($conn);
}

// Them mau 
$sql = "INSERT INTO user(name, user_salary) values ('Thich thi lai', 9000)";
if (mysqli_query($conn, $sql)) {
    echo 'Da tao thanh cong CSDL !';
} else {
    echo 'Khong tao duoc CSDL ' . mysqli_error($conn);
}


$sql = "UPDATE user SET name = '$name' WHERE id = $id";
$sql = "DELETE FROM user WHERE id = $id";


// Hien thi data trong table
$sql= "SELECT * FROM user";
$retval = mysqli_query($conn, $sql);

if (mysqli_num_rows($retval) > 0) {
    while ($row = mysqli_fetch_assoc($retval)) {
        echo $row['name'] . ' - ' . $row['user_salary'];
    }
}


mysqli_close($conn);

?>
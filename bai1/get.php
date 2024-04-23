<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>POST va GET</title>
</head>
<body>
    <h1>Tran Van Hai dep trai oi !!!!</h1>
    <form action="#" method="get">
        Name : <input type="text" name="name">
        Email : <input type="text" name="email">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    echo $_GET['name']. ' - ' . $_GET['email'];
?>
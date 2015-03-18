<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Logged In</title>
</head>
<body>

<?php
    session_start();
    $con = mysqli_connect("localhost" ,"root", "", "lf_db");
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = sha1($password);
    $output = [];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0){
        $user_info = mysqli_fetch_assoc($result);
        $_SESSION['userinfo'] = $user_info;
        $output['message'] = "User validated and session started";
    }
    else{
        echo "Username/password was incorrect!";   
        $output['message'] = "Could not find username/password match in db";
    }
    echo json_encode($output);
    
?>
    <br>
    <br>
    <br>
    <br>
    <a href="logout.php">Logout</a>

</body>
</html>

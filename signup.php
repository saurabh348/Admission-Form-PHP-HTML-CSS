<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
        <br>
        <div class='container'>
            <form action="" method="post">
            <div class="mb-3 mt-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" placeholder="Enter username" name="user_name">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" name="user_pass">
            </div>

            <button type="submit" name="input_btn" class="btn btn-primary">Submit</button>
            </form> 
        </div>
</body>
</html>

<?php

    $conn = mysqli_connect('localhost', 'root', '', 'project1');
    // if (mysqli_connect_errno()){
    //     echo 'Connection failed.';
    // }
    // else{
    //     echo 'Connection Successful.';
    // }

    if(isset($_POST['input_btn'])){

    $user_name = $_POST['user_name'];
    $user_pass = $_POST['user_pass'];
    $insert = "INSERT INTO users (user_name, user_pass) VALUES ('$user_name', '$user_pass')";

    $run_insert = mysqli_query($conn, $insert);
    
    if($run_insert == true){
        echo 'User has been added.';
    }else{
        echo 'Failed, try again.';
        }

    }

?>

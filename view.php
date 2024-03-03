<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<a href="logout.php" style='float :right;'><button class='btn btn-light' name='logout_btn'>Logout</button></a>
<a href="home.php" style='float :right;'><button class='btn btn-light'>Home</button></a>
<br><br>

<div class="container mt-3">
  <h1 style='text-align:center;'>Admission Forms</h1>        
  <table class="table table-striped table-hover table-bordered">
    <thead class='table-info'>
      <tr>
        <th>Name</th>
        <th>Standard</th>
        <th>Address</th>
        <th>School</th>
        <th>Mobile Number</th>
        <th>Email</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>

    <?php 
      
      session_start();
      if (!$_SESSION['loggedin']){

        header('location:login.php');
      }

      if(isset($_POST['logout_btn'])){
        echo 'Logged out';
        header('location:logout.php');
      }

        $conn = mysqli_connect('localhost', 'root', '', 'project1');

        if (isset($_GET['del'])){
            $delete = $_GET['del'];
            $query = "DELETE FROM admissionform WHERE name = '$delete'";
            $run_query = mysqli_query($conn, $query);
            if ($run_query == true){
                echo 'Form deleted';
            }else{
                echo 'Could not delete. Try again.';
            }
        }
        
        $select = "SELECT * FROM admissionform";
        
        $run = mysqli_query($conn, $select);
        
        while ($result_array = mysqli_fetch_array($run)){

        $name = $result_array['name'];
        $std = $result_array['std'];
        $address = $result_array['address'];
        $school = $result_array['school'];
        $mobile = $result_array['mobile'];
        $email = $result_array['email'];
        
    ?>
    
      <tr>
        <td><?php echo $name ?></td>
        <td><?php echo $std ?></td>
        <td><?php echo $address ?></td>
        <td><?php echo $school ?></td>
        <td><?php echo $mobile ?></td>
        <td><?php echo $email ?></td>
        <td><a href="update.php?update=<?php echo $name?>" class='btn btn-info'>Update</a></td>
        <td><a href="view.php?del=<?php echo $name?>" class='btn btn-danger'>Delete</a></td>
      </tr>

    
    <?php } ?>

    </tbody>
  </table>
</div>

</body>
</html>

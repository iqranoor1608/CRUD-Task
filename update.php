<!-- PHP Code -->
<?php
include 'connect.php';

$id = $_GET['updateid'];

$sql = "select * from crud where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row["name"];
$email = $row["email"];
$mobile = $row["mobile"];
$password = $row["password"];


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE crud SET name='$name', email='$email', mobile='$mobile', password='$password' WHERE id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        //echo "Updated Successfully";
        header('location: display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!-- HTML Code -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>CRUD Operations Web App</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off" 
                value="<?php echo $name?>">
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off"
                value="<?php echo $email?>">
            </div>
            <div class="form-group">
                <label>Mobile Number</label>
                <input type="tel" class="form-control" placeholder="Enter Your Mobile Number" name="mobile"
                    autocomplete="off" value="<?php echo $mobile?>">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter Your Password" name="password"
                    autocomplete="off" Required value="<?php echo $password?>">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>
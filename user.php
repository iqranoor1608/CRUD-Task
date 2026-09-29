<!-- PHP Code -->
<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into crud (name, email, mobile, password)
    values('$name', '$email', '$mobile', '$password')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        //echo "Data Inserted Successfully";
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
	<title>CRUD Operations Web App</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
	
	<style>
	 .heading{
		 color: darkblue;
		 text-align: center;
		 margin-top: 2%;
	 }
	</style>
</head>

<body>
    <h1 class="heading">CRUD</h1>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Mobile Number</label>
                <input type="tel" class="form-control" placeholder="Enter Your Mobile Number" name="mobile"
                    autocomplete="off">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter Your Password" name="password"
                    autocomplete="off" Required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>
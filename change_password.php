<?php
	require_once('DBconnect.php');

	if(isset($_POST['new_pass']) && isset($_POST['con_pass'])){
		$new_pass = $_POST['new_pass'];
		$con_pass = $_POST['con_pass']
		$user = $_GET['userid'];
	
		$sql = "update customer set password = '$new_pass' where user_id = '$user'";
		$result = mysqli_query($conn, $sql);
	
		if($new_pass == $con_pass){
			if(mysqli_query($conn, $sql)){
				echo "<h1>Password change succesful<h1>";
				header("Location: login.php"); 
			}
			else{
				echo "<h1>Error setting new password: </h1>" . mysqli_error($conn);
			}
		}
		else{
			echo "<h1>The New and Confirm doesn't match.</h1>";
		}
	}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Night-night</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body class="bg-light">
    <section style="height:400px;">
        <header class="p-3 text-bg-dark">
            <div class="container">
              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="index.html" class="d-flex align-items-center mb-2 mb-lg-0 mx-3 text-danger text-decoration-none">
                  <img src="./images/moon-stars-fill.svg" class="img-thumbnail mx-2" alt="moon image">
                  <h1>Night-night</h1>
                </a>
        
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li><a href="#" class="nav-link px-2 text-success">Movie list</a></li>
                  <li><a href="#" class="nav-link px-2 text-success">Book Tickets</a></li>
                  <li><a href="#" class="nav-link px-2 text-success">About</a></li>
                </ul>
        
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search" action="keyword_search.php" method="post">
                  <input type="search" class="form-control form-control-dark text-black" name="keyword" placeholder="Search Movies">
                  <input type="submit" class="btn btn-outline-primary mt-2" value="search">
                </form>
        
                <div class="text-end">
                  <a href="login.php"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
                  <a href="sign_up.php"><button type="button" class="btn btn-warning">Sign-up</button></a>
                </div>
              </div>
            </div>
          </header>
    </section>

    <section style="height:400px;">
        <h1 class="text-center">Set up new password</h1>
        <form action="change_password.php" method="post">
            <label for="inputPassword5" class="form-label">New Password</label>
            <input type="password" id="inputPassword5" name="new_pass" class="form-control" aria-describedby="passwordHelpBlock">
            <label for="inputPassword5" class="form-label">Confirm Password</label>
            <input type="password" id="inputPassword5" name="con_pass" class="form-control" aria-describedby="passwordHelpBlock">
            <input type="submit" class="btn btn-outline-success my-4" value="change">
        </form>

    </section>

    <section class="text-bg-secondary">
        <div class="container">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
            
                <div class="col mb-3">
                    <img src="./images/moon-stars-fill.svg" class="img-thumbnail" alt="moon image">
                </div>
            
                <div class="col mb-3">
                    <h5>370 Project</h5>
                    <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Movie Theater</a></li>
                    </ul>
                </div>
            
                <div class="col mb-3">
                    <h5>Group-6 Members</h5>
                    <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Al-Nahian</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Sadman</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Nusrat</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Moontasir</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Akib</a></li>
                    </ul>
                </div>
            
                <div class="col mb-3">
                    <h5>Lab Faculties</h5>
                    <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Rakin Bin Rabbani</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">M. Shafiul Alam</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
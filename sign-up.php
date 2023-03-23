<?php require_once('functions/functions.php');
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="CSS/bootstrap.css">
    </head>
    <body class="bg-dark text-white">

    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
            <div class="card bg-dark mt-5 py-2">

            <div class="card-title">
                <h3 class="text-center mt-2"> Sign Up</h3>
                <hr>
            </div>
            <div class="card-body">
            <?php user_validation(); ?> 
                <form method="POST">

                    <input type="text" name="firstname" placeholder="First Name" class="form-control mb-2 py-2" required>
                    <input type="text" name="lastname" placeholder="Last Name" class="form-control mb-2 py-2"required>
                    
                    <input type="text" name="username" placeholder="User Name" class="form-control mb-2 py-2" required>
                    <input type="email" name="email" placeholder="Email" class="form-control mb-2 py-2" required>
                    <input type="password" name="pass" placeholder="Password" class="form-control mb-2 py-2" required>
                    <input type="password" name="cpass" placeholder="Confirm Password" class="form-control mb-2 py-2" required>

                    <button class="btn btn-success float-right"> Sign Up Now </button>
                </form>
            </div>
            </div>
            </div>
</div>
    </div>



    </body>
</html>
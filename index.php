<?php require_once('functions/functions.php');
require_once('functions/config.php');
require_once('functions/db.php');


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Claimant Portal</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://www.google.com/recaptcha/api.js?" async defer></script>
</head>


<body class="bg-dark text-white" >
<div class="container h-p100">
    <div class="row align-items-center h-p100">
        <div class="col-12">
            <h2 align="center" class="text-white" style="margin-top:10% ;"> Claimant Portal </h2>
            
        </div>
    <div class="row  align-items-center ">
    
        <div  class="m-auto col-4" align="center">
            <form method="POST" action="login.php">
                <hr>
                <div class="form-group mt-40 col-8">

                    <input type="email" name="email" placeholder="User Name" class="form-control m-lg-auto" >
                    <br> 

                    <input type="password" name="password" placeholder="password" class="form-control col-8">
                    <br>
                    <br>
                    <input type="checkbox" name="remember" id="remember" >
                    <label for="remember" class="text-white col-4">
                      Remember me
                    </label>
                </div>

            </form>

        </div>
    <div class="row align-items-center">
        <!--
        <div data-sitekey="YOURSITEKEY" class="g-recaptcha"></div>
        -->

            <div class="col-12" text-center align="center">
                 <button type="submit"   class="btn btn-rounded btn-info mt-20 col-1">Sign In</button>
            </div>
            <div class="m-auto col-4 md-lg mr-10 text-white-50">
                <a href="sign-up.php" class="text-white mr-20 col-8 form-control-lg">Sign Up</a>
            </div>
        </div>

    </div>
</div>    



<?php

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
<?php 
require_once('functions/db.php');
require_once('db.php');


function clean($string){
    return htmlentities($string);
}

function redirect($location){
    return header("location:{$location}");
}

function set_message($msg){
    if(!empty($msg)){
        $_SESSION['Message'] = $msg;
    }
    else{
        $msg = "";

    }
}

//display the msg
function display_message(){
    if(isset($_SESSION['Message']))
    {
    echo $_SESSION['Message'];
    unset($_SESSION['Message']);
    }
}

//generate Token
function Token_Generator(){
    $token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));
    return $token;
}
function Error_validation($Error){
    return '<div class="alert alert-danger text-gray">'.$Error.'</div>';
}
function user_validation(){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $fname = clean($_POST['firstname']);
        $lname = clean($_POST['lastname']);
        $uname = clean($_POST['username']);
        $email = clean($_POST['email']);

        $pass = clean($_POST['pass']);
        $cpass = clean($_POST['cpass']);

        if(Email_Exists($email)){
            $Errors[] = "Email Already Registered";
        }
        if(User_Exists($uname)){
            $Errors[] = "User Already Registered";
        }

        if(!empty($Errors)){
            foreach($Errors  as $Error){
                echo '<div class="alert alert-danger text-gray">'.$Error.'</div>';
            }
        }
        else{
            if(claimant_registration($fname,$lname,$uname,$email,$pass)){
                
                set_message('<p class="bg-success text-center lead">You Have successfully registered</p>');
                redirect('index.php');
            }
        }
    }
}


//Email Exists
function Email_Exists($email){
    $sql = "select * from `claimant-details` where `Email`='$email'";
    $result = Query($sql);
    if(fetch_data($result)){
        return true;
    }
    else{
        return false;
    }
}
function User_Exists($username){
    $sql = "select* from `claimant-details` where `User_Name`='$username'";
    $result = Query($sql);
    if(fetch_data($result)){
        return true;
    }
    else{
        return false;
    }
}

function claimant_registration($fname,$lname,$uname,$email,$pass)
{

    $Fname=escape($fname);
    $Lname=escape($lname);
    $Uname=escape($uname);
    $UEmail=escape($email);
    $Pass=escape($pass);

    if(Email_Exists($UEmail)){
        return true;
    }
    else if(User_Exists($Uname)){
        return true;
    }
    else{
        $Password=md5($Pass);
        
        $Validation_code=md5($Uname.strval(microtime()));

        $sql="insert into `claimant-details`(`First_Name`,`Last_Name`,`User_Name`,`Email`,`Pass_Validation`,`Validation_Code`,`Active`) values('$Fname','$Lname','$Uname','$UEmail','$Password','$Validation_code','0')";
        $result=Query($sql) ;

        
        confirm($result);

       // $row=fetch_data($result);
       // echo $row['Email'];
        //confirm($result);  
        return true;
    }
    }

    function login_validation(){
        $Errors=[];
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $UserEmail = clean($_POST['email']);
            $UserPass=clean($_POST['password']);

            if(empty($UserEmail)){
                $Errors[]="Please Enter YOur Email";
            }
            if(empty($UserPass)){
                $Errors[]="Please Enter YOur Password";
            }
            if(!empty($Errors)){
                foreach($Errors as $Error){
                    echo Error_validation($Error);
                }
            }
            else{
                if(user_login($UserEmail,$UserPass)){
                    redirect("admin.php");

                }
                else{
                    echo Error_validation("Please Enter Correct Email or Password");
                }
            }


             #$sql="select `Pass_Validation` from `claimant-details` where `Email`=$uemail";
             #$sql2="select `User_Name` from `claimant-details` where `Email`=$uemail";
             #$result=Query($sql);
              #confirm($result);

              #$result2=Query($sql2);
              #confirm($result2);
              #$unHPass=md5($result);



              #if($upass==$unHPass){
               # echo '<div class="alert alert-danger text-gray">'.$result2.'</div>';
                #  echo 'present here!';
                 # echo $result2;
             # }
            }

            
    }

    function user_login($UEmail,$UPass){
        $query="select* from `claimant-details` where `Email`='$UEmail'" ;
        
        #edied: and Active='1'
        $result=Query($query);

        if($row=fetch_data($result)){
            $db_pass=$row['Pass_Validation'];
            if(md5($UPass)==$db_pass){
                return true;

            }
            else{
                return false;
            }

        }
    }
?>

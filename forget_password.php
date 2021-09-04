<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'fb2.php' ?>
    <style>
body {
    background: cyan;
    height: 100vh;
    justify-content: center;
    width: 100vw;
    /* text-align: center; */
    align-items: center;
    display: flex;
}
.whole{
    position: relative;
    background: skyblue;
    padding: 32px;
    width: 330px;
    border-radius:25px;
}
.uu1 {
    border-radius: 11px;
    border: 2px solid;
    width: 300px;
    height: 23px;
}
p{
    font-size: 21px;
    margin-bottom: 7px;
    margin-top: 13px;
}
.uu2{
    height: 38px;
    margin-top: 12px;
}
    </style>
</head>
<body>
    <div class="whole">
   <div><h1>forgot your password?</h1></div>
   <div class="second"><p>Don't worry! just fill in your email and if your email exits than u can procced</p></div>
   <form action="" method="POST">
   <div class="third">
       <p>Email Address</p>
       <input type="email" name = "email_ids" class="uu1">
       <p>New password</p>
       <input type="password" name = "password" class = "uu1">
       <p>Confirm New password</p>
       <input type="password" name = "passwords" class= "uu1">

       <input type="submit" name = "submit" class="uu1 uu2">
    </form>
   </div>
</div>
<?php
        if(isset($_POST['submit'])){
            $email_id = $_POST['email_ids'];
            $New_password = $_POST['password'];
            $New_passwords = $_POST['passwords'];
            $fetchs = "select * from fb_info";
            // $update = "update * from fb_info set ";
        $results = mysqli_query($con,$fetchs);
        $yes_no = 0;
        while($row = mysqli_fetch_array($results)){
            if(strcmp($row[1],$email_id) == 0 and strcmp($New_password,$New_passwords) == 0){
                
                
                $row[2] = $New_password;
                $yes_no = 1;
                break;
            }
        }
        if($yes_no == 0){
            ?><script>alert("email id not exits or password not match");</script><?php
        }
        else{
            $updates = "update fb_info set password = '$New_password' where email_id = '$email_id'";
             mysqli_query($con,$updates);
            ?><script>alert("congratulation! password successfully changed....");</script><?php
        }

        }
        
?>
</body>
</html>
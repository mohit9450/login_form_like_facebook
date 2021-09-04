<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'fb2.php' ?>
    <style>
        body{
            background-color:floralwhite;
            padding: 0;
            margin: 0;
            height: 100vh;
           
        }
        .whole1{
            width: 100%;
           
            /* position: relative; */
            margin: 0;
            padding: 0;
            background-color: floralwhite;
        }
        .whole2{
            padding-top: 80px;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            align-content: space-between;
            justify-content: center;
            flex-direction: row;
            border: 4px ;
             position: relative;
        }
        .set1{
            /* background-color: green; */
            border: 4px;
            width: 350px;
            min-width: 220px;
            margin: 10px;

        }
        .set2{
            /* background-color: ; */
            border: 4px;
            width: 350px;
            min-width: 220px;
            margin: 10px; 
        }
        .set1_12{
            font-size: 60px;
            margin-left: 30px;
        }
        .set1_2{
            font-size: 19px;
            padding: 12px;
        }
        .set2{
            padding: 4px;
        }
        .set2_1{

        }
        .set2_12{
            display: flex;
            flex-direction: column;

            justify-content: center;
        }
        .uu2{
            width: 320px;
            justify-content: center;
            display: flex;
        }
        .uu11{
            width: 280px;
        }
        .uu111{
            padding: 14px;
        }
        .same_name{
            border-radius: 7px;
        }
        .uuu{
            margin: 5px;
        }
        .creat{
            text-align: center;
        }

        .who{
            width: 100vw;
            height: 440px;
            display: flex;
            justify-content: center;
            /* transform: translateX(-2000px); */
        }
        .wwho{
            transform: translateX(-1000px);
        }
        .create_page1{
            border-radius: 10px;
            height: 432px;
            width: 416px;
            background: red;
            position: absolute;
            z-index: 10;
            /* transform: translateX(373px); */
            top: 90px;
        }
        .sign_up{
            position: relative;
            display: flex;
            justify-content: space-between;
            margin: 10px 5px;
        }
        .sign_up11{
            font-family: sans-serif;
            font-size: xx-large;
        }
        .sign_up12{
            height: 25px;
            margin: 0px;
        }
        .uu6{
            padding: 10px;
            padding-top: 0px;
        }
        .uu7{
            padding: 10px;
    /* padding-top: 0px; */
            width: 94%;
        }
        .uu8{
            width: 30%;
            height: 35px;
            margin: 0px -4px 5px 10px;
        }
        .uu10{
            display: flex;
            justify-content: space-around;
            margin-left: 11px;
            height: 28px;
            border: 1px solid;
            margin-right: -7px;
        }
        .uu9{
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="whole1">
        <div class="whole2">
            <div class="set1">
                <div class="set1_1"><h1 class="set1_12">facebook</h1></div>
                <div class="set1_2">Facebook helps you connect and share with the people in your life.</div>
            </div>
            <div class="set2">
                <div class="set2_1">
                    
                    <div class="set2_12" style="background-color: white;">
                    <form action="" method="POST" id="ppo">
                        <div class="user_name uu1 uu2 uuu" style="margin-top:16px;"><input type="text" name="user_name44" id="user_name2" class="uu11 uu111 same_name" placeholder="Email address or phone number" ></div>
                        <div class="pass_word uu1 uu2 uuu"><input type="password" name = "password44" placeholder="Password" class="uu11 uu111 same_name" id="pass_word2"></div> 
                        <div class="log_in same_name uuu" ><input type="submit" name="logins" value="submit"></div>
                    </form>

                        <div class="forgotten uu2 uuu"><a href="/forget_password.php" class="for_gotten" class="uu11" style="text-decoration: none;">Forgotten password?</a></div>
                        <hr style="height: 0px; width: 100%;" class="uuu">
                        <div class="creat uuu" style="width: 280px;"><button class="creat_2" onclick="fun()">Create New Account</button></div>
                   

                    </div>
                  
                </div>
                <div class="set2_2"><p class="set2_21"><b>Create a Page</b> for a celebrity, band or business</p></div>
            </div>
        </div>
    </div>
    <div class="who create_page" style="border-radius: 12px;">
        <div class="create_page1 wwho" id="who1">
            <div class="sign_up"><div><strong class="sign_up11">sign Up</strong> <p class="sign_up12">its quick and easy</p></div><div style="height: 20px;" onclick="fun1()"><div style="background-color: white; height: 2px; width: 24px; margin: 2px; transform: rotate(45deg);"></div><div style="background-color: white; height: 2px; width: 24px; margin: 2px; transform: 135deg; transform: rotate(135deg);top: -4px;position: relative;"></div></div></div>  
            <hr style="margin-top: -10px;">
            <form action="" method="POST">
            <div class="form1">
                <!-- <form action="" method="POST"> -->
                    <div class="form11" style="display: flex;">
                        <div class="form111" style="margin: 10px;"><input type="text" class="uu9" style="padding: 10px;" placeholder="First name" name="user_names"></div>
                        <div class="fosrm112" style="margin: 10px; margin-left: 0px;"><input type="text" class="uu9" style="padding: 10px;" placeholder="Surname" name="user_surnames"></div>
                    </div>
                    <div class="form12 uu6"><input type="email" class="uu7 uu9" placeholder="Mobile number or email address" name="emailid"></div>
                    <div class="form13 uu6"><input type="password" name="passwords" class="uu7nuu9 uu7" placeholder="New password"></div>
                    <div class="form14">
                        <p style="margin: 3px 10px;font-family: monospace;">Date of Birth</p>
                        <div class="form141" style="display: flex; ">
                            <select name="date" id="" class="form1411 uu8 uu9">
                                <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20" selected="1">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
                            </select>
                            <select class="form1412 uu8 uu9" name="month">
                                <option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5" selected="1">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>
                            </select>
                            <select name="year" id="" class="form1413 uu8 uu9">
                                <option value="2021" selected="1">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option>
                            </select>
                        </div>
                    </div>
                    <div class="form15">
                        <div class="form151" style="font-family: monospace;"><p style="margin: 6px 10px 0px;">Gender</p></div>
                        <div class="form152" style="display: flex;">
                            <div class="form1521 uu8 uu10 uu9"><label for="">Female</label><input type="radio" name="yy" value="1"></div>
                            <div class="form1522 uu8 uu10 uu9"><label for="">Male</label><input type="radio" name="yy" id="" value="2"></div>
                            <div class="form1523 uu8 uu10 uu9"><label for="">Custom</label><input type="radio" name="yy" id="" value="3"></div>

                        </div>
                    </div>
                <!-- </form> -->
            </div>
            <div class="16"><p style="font-family: monospace;margin: -5px 10px 3px;">By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. You may receive SMS notifications from us and can opt out at any time.</p></div>
            <div class="form17" style="width: 94%;justify-content: center;display: flex;"><input type="submit" name="submit" id="" value="sign Up" style="padding: 6px;width: 135px;height: 35px;"></div>
    </form>
        </div>
    </div>

    <script>
        const c=document.getElementById("who1");
        // const c=document.getElementById("who1").addEventListener("click",)
        function fun(){
            
            c.classList.remove("wwho");
        }
        function fun1(){
            c.classList.add("wwho");
        }
    </script>
    <?php
    if(isset($_POST['submit'])){
        echo "mohit";
        $name=$_POST['user_names'].$_POST['user_surnames'];
        // echo "$name";
        $email_id=$_POST['emailid'];
        // echo "$email_id";
        $password=$_POST['passwords'];
       // $password=password_hash($password1,PASSWORD_BCRYPT);
        // echo "$password";
        $date=$_POST['date'].$_POST['month'].$_POST['year'];
        // echo $date;
        // $gender="male";
        $gender1=$_POST['yy'];
        // $gender1="MALE";
        if($gender1=="2"){
            $gender="MALE";
        }
        else if($gender1=="1"){
            $gender="FEMALE";
        }
        else if($gender1=="3"){
            $gender="NEUTRAL";
        }
        // echo $gender;
    $insertquery="insert into fb_info(name,email_id,password,date,gender) values('$name','$email_id','$password','$date','$gender')";
    $check=mysqli_query($con,$insertquery);
   // echo $check;
   // echo "skdjdkjksjklsdjkldsjlksdjkls";
    // echo "dks";
    if($check){
        ?>
        <script>
            
            alert("successfull");
        </script>
        
        <?php

    }
}
?>
<?php
        if(isset($_POST['logins'])){
            $user_names = $_POST['user_name44'];
            $password_s = $_POST['password44'];
            //$password_s = password_hash($password_s,PASSWORD_BCRYPT);
            $selects = "select * from fb_info";
            $checks = mysqli_query($con,$selects);
            $date = "";
            $gender = "MALE";
            $yes_no = 0;
            echo $password_s;
            while($row = mysqli_fetch_array($checks)){
                echo $row[2];
                
                if(strcmp($row[1],$user_names) == 0 && strcmp($row[2],$password_s) == 0){
                    $yes_no = 1;
                    echo "sjkdjkjs";
                    $date = $row[3];
                    $gender = $row[4];
                    
                    break;
                }
            }
            if($yes_no == 0){
                echo "<script>alert('login unsuccessfull')</script>";
            }
            else{
                echo "<script>alert('login successfull')</script>";
                ?><script>
                    document.getElementById('ppo').action = "/profile.php";
                   // document.getElementById('ppo').value = 
                   // document.getElementById('ppo').submit();
                </script><?php
            }
            
        }
?>
</body>
</html>
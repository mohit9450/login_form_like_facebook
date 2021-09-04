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
            background-color: rgb(255, 254, 254);
            margin: 0;padding: 0;
            min-width: 700px;
        }
        .whole1{
            width: 50vw;
            height: 80vh;
            background-image: url('bg-pattern-top.svg');
            background-size: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .whole{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .info{
            background-image: url('bg-pattern-card.svg');
            width: 80%;
            height: 68%;
            border-radius: 20px;

        }
        .first{
            width: 100%;
            height: 31%;
        }
        .uu{
            position: relative;
            left: 35%;
            top: 57px;
            border-radius: 60px;
            width:90px;
            height: 90px;
        }
        .uu1{
            /* text-align: center; */
            height: 30px;
        }
        .second{
            background-color: white;
            display: flex;
            flex-direction: column;
            height: 36%;
            justify-content: center;
            /* align-content: center; */
            margin: 0px;
        }
        .second1{
            margin-top: 45px;
        }
        .second2{
            margin-bottom: 36px;
            margin-top: -10px;
        }
        /* .third{
            background-color: white;
            display: inline-block;
            width: 100%;
            padding-top: 30px;
            padding-left: 25px;
            box-sizing: border-box;
            height: 112px;
            border-radius: 0px 0px 12px 12px;
        } */
        .uu2{
            display: inline-block;
            text-align: center;
            width: 30%;
            box-sizing: content-box;
        }
        .uu4 {
    padding-right: 4px;
    padding-left: 4px;
    display: flex;
    justify-content: space-between;
    height: 28px;
}
#choose {
    position: relative;
    left: 35%;
    /* visibility: hidden; */
    /* display: none; */
    top: 50px;
    width: 87px;
}
.forth4 {
    display: flex;
    justify-content: space-between;
    /* width: 9px; */
    height: 27px;
}
.uu6{

    width: 36px;
    left: 20px;
    height: 21px;
    position: relative;
    margin: 0px;

}

    </style>
</head>
<body>
    <div class="whole">
        <div class="whole1">
            <div class="info">
                <div class="first"><img src="" alt="" class="uu" id = "chos"></div>
                <input type="file" onchange="previewImage(this)" id="choose" >
                
                
                <div class="second">
                    <div class="second1 uu1" style="position: relative; left: 35%;"><p><b>Victor Crest </b> 26</p></div>
                    <div class="second2 uu1" style="position: relative; left: 39%;"><p>London</p></div>
                </div>
                <hr style="background-color: white; height: 0px; margin: unset;">
                <!-- <div class="third">
                    <div class="third1 uu2">
                        <div class="third11"><b><b>80K</b></b></div>
                        <div class="third12">Followers</div>
                    </div>
                    <div class="third2 uu2">
                        <div class="third21"><b><b>803K</b></b></div>
                        <div class="third22">Likes</div>
                    </div> -->
                    <!-- <div class="third3 uu2">
                        <div class="third31"><b><b>1.4K</b></b></div>
                        <div class="third32">Photos</div>
                    </div> -->
                    
                    <div class="forth">
                        <div class="forth4">
                            <p class="forth41">Name</p>
                            <p id = "forth42"></p>
                            <button value = "edit" class="uu6" onclick='fun()'>edit</button>
                        </div>
                        <div class="forth1 uu4">
                            <p id="forth11">Email id :</p>
                            <p id="forth12"></p>
                            <button value = "edit" class="uu6" onclick='fun()'>edit</button>
                        </div>
                        <div class="forth2 uu4">
                            <p id="forth21">DOB :</p>
                            <p id="forth22">11-may-2000</p>
                            <button value = "edit" class="uu6" onclick='fun()'>edit</button>
                        </div>
                        <div class="forth3 uu4">
                            <p id="forth131">Gender :</p>
                            <p id="forth32">MALE</p>
                            <button value = "edit" class="uu6" onclick='fun()'>edit</button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        var emails= document.getElementById('forth12');
        var dobs = document.getElementById('forth22');
        var gender = document.getElementById('forth32');

        var v = document.getElementById("choose");
        function previewImage(input){
            var reader = new FileReader();
            reader.onload = function(e){
            var c=document.getElementById("chos");
            c.setAttribute("src",e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
            
        }
    </script>
    <script>
    </script>
    <?php
    $email_idd = $_POST['user_name44'];
    //echo $email_idd;
        $selects = "select * from fb_info";
        $check = mysqli_query($con,$selects);
        while($row = mysqli_fetch_array($check)){
            // echo $row[0].$row[1].$row[2].$row[3].$row[4];
            if(strcmp($email_idd,$row[1])==0){
                // echo $row[0].$row[1].$row[2].$row[3].$row[4];
                // echo $row[1];
                echo "<script> document.getElementById('forth42').innerHTML='".$row[0]."'</script>";

                echo "<script> document.getElementById('forth12').innerHTML='".$row[1]."'</script>";
                echo "<script> document.getElementById('forth22').innerHTML='".$row[3]."'</script>";
                echo "<script> document.getElementById('forth32').innerHTML='".$row[4]."'</script>";
                break;
                // echo "<script> document.getElementById('forth12').innerHTML='".$row[0]."'</script>";
            }
        //    echo "<script> document.getElementById('forth12').innerHTML='".$row[0]."'</script>";
        // echo $row[0].$row[1].$row[2].$row[3];
        }
    ?>

</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .container{
        display: block;
        width: 50vw;
        height: 50vh;
        margin: auto;
        margin-top: 25vh;
        border: 1px solid black;
        border-radius: 10px;
       }
       .head{
           display: block;
       }
       h1{
           font-size: 35px;
           font-family: Arial, Helvetica, sans-serif;
       }
       .form{
           display: block;
       }
    </style> 
</head>
<body>
    <?php
    include './dbconnect.php';
    $email = $_SESSION['email'];
    $Orgid = $_GET['id'];
    echo $Orgid."<br>";
    # Algo to make the cvc i.e unique id.sr no og the guy.
    $firstpart = explode('.', $Orgid);
    $actualfirstpart = end($firstpart);
    $sql = "SELECT * from `registration` WHERE `registration`.`email`='$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if($result){
        $srno = $row['sr no'];
        $CVC = $actualfirstpart.$srno;
        $to_email = $email;
        $subject = " CVC ";
        $body = "Heyy, thank you for subscribing to our voting system. 
                This is the CVC for your Voting rights. 
                ".$CVC."";
        $headers = "From: onevote2022@gmail.com";

        if (mail($to_email, $subject, $body, $headers)) {
        echo '    
        <div class="container">
            <div class="head">
                <h1> Hello, please enter the CVC sent to your mail. </h1>
                <p1 id = "countdown"> This page will expire in 1:00 </p1> 
            </div>
            <div class="form" id = "formcontrol">
                <form action="./elections.php?flag='.$actualfirstpart.'" method="post">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="'.$email.'">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input name = "CVC" type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div> ';

        } else {
            echo "Email sending failed...";
        }
    }else{
        echo 'fail';
    }
    ?>
    <!-- <div class="container">
        <div class="head">
            <h1> Hello, please enter the CVC sent to your mail. </h1>
            <p1 id = "countdown"> This page will expire in 1:00 </p1> 
        </div>
        <div class="form" id = "formcontrol">
            <form action="./elections.php" method="post">
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="cm.b.51shashwat.suthar@gmail.com">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword">
                    </div>
                </div>
            </form>
        </div>
    </div>   -->
    <script>
        const startingminutes = 1;
        let time = startingminutes*60;
        const countdownel = document.getElementById("countdown");
        let form = document.getElementById("formcontrol");

        setInterval(updatecountdown, 1000);

        function updatecountdown() {
            const minutes = Math.floor(time / 60);
            let seconds = time % 60;
            seconds = seconds < 2 ? '0' + seconds : seconds;
            countdownel.innerHTML = `This page will expire in ${minutes}:${seconds}`;
            time--;
            if(minutes == 0 && seconds == 0){
            form.style.display = "none";
            countdownel.style.display = "none";
        }
        }
    </script> 
</body>
</html>
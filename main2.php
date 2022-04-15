<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OneVote</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal"></script>

    <style>
    body{
        background-color: black;
        background-color: #ffffff;
        background-color: #000000;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1274%26quot%3b)' fill='none'%3e%3crect width='1440' height='560' x='0' y='0' fill='rgba(0%2c 0%2c 0%2c 1)'%3e%3c/rect%3e%3cg transform='translate(-72%2c 0)' stroke-linecap='round'%3e%3cpath d='M473.5 269.485 L473.5 290.515' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M502.5 220.965 L502.5 242.715' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M502.5 275.34000000000003 L502.5 339.035' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M531.5 211.515 L531.5 233.265' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M531.5 265.89 L531.5 287.64' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M531.5 320.265 L531.5 348.485' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M560.5 191.995 L560.5 235.495' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M560.5 268.12 L560.5 311.62' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M560.5 344.245 L560.5 368.005' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M589.5 236.535 L589.5 323.475' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M618.5 246.515 L618.5 313.485' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M647.5 218.565 L647.5 341.435' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M676.5 236.255 L676.5 258.005' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M676.5 290.63 L676.5 323.755' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M705.5 258.525 L705.5 301.485' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M734.5 232.845 L734.5 254.595' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M734.5 287.22 L734.5 327.145' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M763.5 266.03499999999997 L763.5 293.975' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M792.5 279.165 L792.5 280.835' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M821.5 200.295 L821.5 359.705' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M850.5 232.035 L850.5 327.955' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M879.5 269.165 L879.5 290.835' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M908.5 255.845 L908.5 304.155' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M937.5 228.685 L937.5 250.435' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M937.5 283.06 L937.5 331.315' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M966.5 271.495 L966.5 288.505' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3c/g%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1274'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3c/defs%3e%3c/svg%3e");
        background-attachment: fixed;
        background-size: cover;
    }
    .overheader {
        height: 50px;
        font-family: 'Bebas Neue', cursive;
        /* background-color: whitesmoke; */
    }
    .overheader p {
        float: right; 
        font-size: 20px; color: white;
        margin: 15px 80px;
        margin-right: 20px;
    }
    .overheader a {
        float: right;
        margin: 12px 45px;
        padding: 6px 30px;
    }
    header {
        height: 80px;
        margin-left: -11px;
        margin-right: -11px;
        margin-top: 15px;
        grid-area: header;
        /* background-color: rgb(39, 36, 36); */
        grid-area: header;
        position:sticky;
    }

    .bar {
        display: inline-block;
    }

    #head1 {

        margin: 1px 50px;
        padding: 1px 7px;
        width: 14%;
        grid-area: head1;
        font-size: 43px;
        /* font-family: 'Luckiest Guy', cursive; */
        color: cadetblue;
    }

    #head2 {

        margin: 2px 25px;
        padding: 12px 1px;
        width: 60%;
        grid-area: head2;
        float: right;
        margin-right: 40px;
    }

    nav li {
        list-style-type: none;
        display: inline;
        padding: 15px 13px;
        border-left: 1px solid orangered;
        /* float: right; */
    }
    nav li:last-child{
        border-right: 1px solid orangered;
    }

    nav li a {
        color: orangered;
        padding: 4px 40px;
        text-decoration: none;
    }

    nav li a:hover {
        color: grey;
        text-decoration: underline;
    }
    #head1:hover {
        position:relative;
        animation: logo 3s infinite;
        
    }
    @keyframes logo {
    0% { 
    top:0px; left:0px;}
    25% {
        top: 0px; left: 20px;
    }
    50% {
        top: 20px; left: 20px;
    }
    75% {
        top:20px; left: 0px;
    }
    100%{ top:0px; left:0px;}
    }
    .container1{
        display: grid;
        width: 100vw;
        background-color: chocolate;
        place-items: center;
        grid-template-areas: 'textbox textbox Player Player';
        height: 50vh;
        /* margin-left: -11px;
        margin-right: -11px; */
    }
    .player {
        grid-area: Player;
    }
    .text{
        grid-area: textbox;
        width: 425px;
        height: 70px;
        box-sizing: content-box;
        padding: 50px 30px;
        display: flex;
        background-color: whitesmoke;
        box-shadow: 0 20px 25px rgb(138, 73, 28);
        font-family: 'Bebas Neue', cursive;
        font-size: 60px;
        font-weight: 500;
        border-radius: 10px;
    }
    .words {
        overflow: hidden;
        height: 71px;
        margin: 2px 2px;
    }
    span{
        display: block;
        height: 100%;
        padding: 0px 10px;
        /* border: 1px solid black; */
        animation: spin_words 6s infinite;
        color: chocolate;
    }
    @keyframes spin_words {
        15%{
            transform: translateY(-110%);
        }
        30%{
            transform: translateY(-100%);
        }
        45%{
            transform: translateY(-212%);
        }
        60%{
            transform: translateY(-200%);
        }
        75%{
            transform: translateY(-312%);
        }
        90%{
            transform: translateY(-300%);
        }
        100%{
            transform: translateY(-400%);
        }
        /* 85%{
            transform: translateY(-412%);
        } */
        /* 100%{
            transform: translateY(-400%);
        } */
    }
    .container2{
        width: 100vw;
        display: grid;
        height: 70vh;
        /* background-color: azure; */
        /* border: 1px solid whitesmoke; */
        grid-template-areas: 'tb2 tb2 im im';
        place-items: center;
        margin-top: 100px;
        /* border-top: 3px solid whitesmoke; */
    }
    .textbox2{
        grid-area: tb2;
        width: 500px;
        height: 150px;
        box-sizing: content-box;
        padding: 50px 30px;
        /* display: flex; */
        
        /* box-shadow: 0 20px 25px rgb(240, 239, 239); */
        font-family: 'Bebas Neue', cursive;
        font-size: 40px;
        font-weight: 500;
        border-radius: 10px;
        
    }
    .image{
        grid-area: im;
        height: 70vh;
    }
    .Onevote_img{
        width: 300px;
        height: 450px;
        margin-right: 50px;
    }
    .container3{
        height: 50vh;
        /* background-color: aliceblue; */
        margin-top: 100px;
        font-family: 'Bebas Neue', cursive;
        /* border-top: 3px solid whitesmoke; */
    }
    .textbox3{
        width: 500px;
        height: 300px;
        /* border: 1px solid black; */
        display: inline-block;
        margin-left: 340px;
    }
    .textbox3 h {
        display: inline-block;
        Font-size: 45px;
        color: chocolate;
        /* margin: 0px 50px; */
        margin-right: 50px;
    }
    .poll_img {
        width: 350px;
        height: 350px;
        display: inline-block;
        padding-bottom: 50px;
    }
    footer {
    position: sticky;
    bottom: 0%;
    margin: 4px 4px;
    padding: 21px 189px;
    background-color: aliceblue;
    text-align: center;
    box-shadow: inset;
    grid-area: footer;
    margin-left: -11px;
    margin-right: -11px;
}
    </style>
</head>
<body>
    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    echo '<div class="overheader">
            <a href = "./dashboard.php" type="button" class="btn btn-outline-warning"> Dashboard. </a>
            <p> Welcome '.$_SESSION['username'].'</p> 
        </div>';
    }
    ?>
    <header>
        <div class="bar" id="head1"> One Vote </div>
        <div class="bar" id="head2">
            <nav>
                <ul>
                    <li><a href="main2.php"> HOME </a></li>
                    <li><a href="aboutus.html"> ABOUT US </a></li>
                    <?php
                    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                        if($_SESSION['email']=="cm.b.51shashwat.suthar@gmail.com"){
                            echo '
                            <li><a  href="./Org_form.php"> Admin edit </a></li>';
                        }
                    }
                    else{
                        echo '<li><a href="#"> CONTACT US </a></li>';
                    }
                    ?>
                    <li>
                    <?php
                    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                        echo '<a href="logout.php"> Logout </a>';
                        }
                        else{
                            echo '<a href="login.html"> Login </a>';
                        }
                    ?>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <div class = "container1" style="height: 50vh;"> 
        <div class="text">
            <p1> Now, <br></p1>
            <div class="words">
                <span> Easier </span>
                <span> Faster </span>
                <span> Secure </span>
                <span> Easier</span>
            </div>
            <p> Voting !</p>
        </div>
        <div class="player">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_MtN0BG.json"  background="transparent"  speed="1"  style="width: 400px; height: 300px;"  loop  autoplay></lottie-player>
        </div>
    </div>
    <div class="container2">
        <div class="textbox2">
            <p1 class = "election_title" style="color: chocolate;"> Elections. </p1>
            <p2 style="font-size: 25px; float: left; color: whitesmoke;"> With Onevote you can contribute into any of the following elections</p2> 
            <p3 style="font-size: 30px; float: left; color:chocolate;">Now Voting is just one click away !</p3> 
            <a href = "./elections.php" style="padding: 5px 32px; margin: 2px 120px;" type="button" class="btn btn-outline-warning btn-lg"> Vote </a>
        </div>
        <div class="image">
            <img class = "Onevote_img" src="img/Onevote.jpg" alt="">
        </div>
    </div>
    <div class="container3">
        <div class="textbox3">
            <h class = "Polling_title"> Polling. </h>
            <p style="font-size: 25px; color: white; margin-bottom: 0px;"> Another feature of OneVote includes Polling. </p>
            <p1 style="font-size: 25px; color: white"> Now public descision is just one click away ! </p1>
            <a href = "./polls.php" style="padding: 5px 32px; margin: 2px 4px;" type="button" class="btn btn-outline-warning btn-lg">Start Polling !</a>
        </div>
        <img class = "poll_img" src="img/polling.png" alt="">
    </div>
    <footer>
        <h>Copyrights@ Shashwat suthar</h>
    </footer>
    <script>
        ScrollReveal({
            reset: true,
            distance: '60px',
            duration: 2500,
            delay: 400
        });

        ScrollReveal().reveal('.text, .textbox2, .textbox3', { delay: 500, origin: 'left' });
        ScrollReveal().reveal('.Onevote_img, .poll_img', { delay: 500, origin: 'top' });
    </script>
    
</body>
</html>
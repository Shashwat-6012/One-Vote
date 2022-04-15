<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal"></script>


    <style>
        body {
            display: grid; 
            grid-template-areas: 
            'header header header header'
            'container1 container2 container2 container2';
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1274%26quot%3b)' fill='none'%3e%3crect width='1440' height='560' x='0' y='0' fill='rgba(0%2c 0%2c 0%2c 1)'%3e%3c/rect%3e%3cg transform='translate(-72%2c 0)' stroke-linecap='round'%3e%3cpath d='M473.5 269.485 L473.5 290.515' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M502.5 220.965 L502.5 242.715' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M502.5 275.34000000000003 L502.5 339.035' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M531.5 211.515 L531.5 233.265' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M531.5 265.89 L531.5 287.64' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M531.5 320.265 L531.5 348.485' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M560.5 191.995 L560.5 235.495' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M560.5 268.12 L560.5 311.62' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M560.5 344.245 L560.5 368.005' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M589.5 236.535 L589.5 323.475' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M618.5 246.515 L618.5 313.485' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M647.5 218.565 L647.5 341.435' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M676.5 236.255 L676.5 258.005' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M676.5 290.63 L676.5 323.755' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M705.5 258.525 L705.5 301.485' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M734.5 232.845 L734.5 254.595' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M734.5 287.22 L734.5 327.145' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M763.5 266.03499999999997 L763.5 293.975' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M792.5 279.165 L792.5 280.835' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M821.5 200.295 L821.5 359.705' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M850.5 232.035 L850.5 327.955' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M879.5 269.165 L879.5 290.835' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M908.5 255.845 L908.5 304.155' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M937.5 228.685 L937.5 250.435' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M937.5 283.06 L937.5 331.315' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M966.5 271.495 L966.5 288.505' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3c/g%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1274'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3c/defs%3e%3c/svg%3e");
            background-attachment: fixed;
            background-size: cover;
        }
        .container1{
            grid-area: container1;
            height: 80vh;
            /* border: 2px solid white; */
            width: 30vw;
            font-family: 'Bebas Neue', cursive;
            color: white;
        }
        .container2{
            grid-area: container2;
            height: 80vh;
            /* border: 2px solid white; */
            font-family: 'Bebas Neue', cursive;
            color: white;
            width: 60vw;
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
    .container1 img {
        width: 220px;
        height: 220px;
        margin: 20px 90px;
        border-radius: 50px;
    }
    .container1 button {
        padding: 9px 60px; 
        margin: 10px 104px;
        border-radius: 20px;
    }
    #Poll_button {
        padding: 9px 75px;
        margin: 10px 85px;
        margin-right: 0px;
        margin-left: 105px;
        border-radius: 15px;
    }
    .container1 p {
        color: chocolate;
        font-size: 30px;
        margin: 2px 70px;
        margin-right: 0px;
        margin-left: 95px;
    }
    .textbox1 {
        background-color: #ffffff;
        width: 550px;
        height: 170px;
        margin-left: 80px;
        margin-top: 80px;
        margin-bottom: 10px;
        border-radius: 20px;
        font-family: 'Bebas Neue', cursive;
        /* box-shadow: 0px 20px 25px rgb(138, 73, 28); */
    }
    .textbox1 h { 
        color: chocolate;
        font-size: 100px;
        font-weight: 700;
        margin-left: 20px;
    }
    .textbox1:hover{
        background-color: chocolate;
    }
    .textbox1 h:hover{
        color: whitesmoke;
    }
    #textbox2 {
        width: 600px;
        height: 100px;
        margin: 30px 90px;
        font-family: 'Bebas Neue', cursive;
    }
    #textbox2 p {
        font-size: 25px;
        color: chocolate;
        font-weight: 700;
    }
    #Mypoll_container {
        display: none;
        grid-area: container2;
    }
    .Collapse_button {
        margin: 20px 9px;
    }
    .Result_atag {
        text-decoration: none;
        color: chocolate;
        font-size: 20px;
    }
    #Election_container {
        display: none;
        grid-area: container2;
    }
    #txtbox-E {
        display: grid;
        border-top: 2px solid whitesmoke;
        border-bottom: 2px solid whitesmoke;
        width: 60vw;
        height: 50vh;
        padding-bottom: 20px;
        margin-bottom: 20px;
        grid-template-areas: 
        'head head head head'
        'img para1 para1 para1'
        'img para1 para1 para1'
        'img para2 para2 para2';
    }
    #txtbox-E h {
        grid-area: head;
        font-size: 30px;
        margin: 2px 2px;
        color:darkgray;
        display: inline-block;
    }
    #txtbox-E img {
        grid-area: img;
        width: 250px;
        height: 250px;
        border-radius: 10px;
    }
    #txtbox-E p {
        grid-area: para1;
        display: inline-block;
        margin: 2px 60px;
        font-size: 30px;
        color:chocolate;
        font-weight: 500;
    }
    #txtbox-E p1{
        grid-area: para2;
        display:inline;
        margin: 2px 90px;
        font-size: 20px;
        color:whitesmoke;
        margin-bottom: 50px;
    }
    .txtbox2-E {
        width: 60vw;
        height: 100px;
        /* background-color: #ffffff; */
    }
    </style>
</head>
<body>
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
    <div class="container1">
        <img class = "usr_img" src="img/user img.jpg" alt="">
        <p class = "txt_name" ><?php echo $_SESSION['username'] ?> </p>
        <button id = "Poll_button" type="button" class="btn btn-outline-warning"> My polls.  </button>
        
        <button id = "Election_button" type="button" class="btn btn-outline-warning"> Elections Participated. </button>

    </div>
    <div id="start_container" class="container2">
        <div class ="textbox1" id = "txtbox-s">
            <h> Welcome !</h>
        </div>
        <div id="textbox2">
            <p class = "txt1" > Hello, This is the place where you can access all your contributions. </p>
            <p class = "txt1" style = "color: #ffffff; font-size: 30px; font-weight: 500;"> Just one click away ! </p>
            <p class = "txt1">Check out the tabs on the right for more information. </p>
        </div>
    </div>
    <!-- My polls container  -->
    <div id="Mypoll_container">
        <div class ="textbox1">
            <h> My polls </h>
        </div>
        <div id="textbox2">
            <p> Hello, This is the place where you can access all your polls. </p>
            <?php
            include './dbconnect.php';
            $name = $_SESSION['username'];
            $sql = "SELECT * FROM `polls` WHERE user_name = '$name'"; 
            $result = mysqli_query($conn, $sql);
            $i = 1;
            while($row = mysqli_fetch_assoc($result)){
            echo '
            <p class = "Collapse_button" >
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                  '.$i.') '.$row['poll_question'].'
                </button>
            </p>
            <div class="collapse" id="collapseExample1">
                <div class="card card-body">
                    <a  class = "Result_atag" href=""> Results are declared !, click here </a>
                </div>
            </div>';}
            ?>
        </div>
    </div>
    <!-- Organization container  -->
    <div id="Election_container">
        <div id = "txtbox-E">
            <h> Your Organization </h>
            <img src="Org_logos/Google Developers social club.jpg" alt="">
            <p> Number of Elections conducted: <br> <b style = "font-size: 35px; color: whitesmoke;"> <?php 
            include './dbconnect.php';
            $sql1 = "SELECT count(Org_name) from election_details WHERE Org_name = 'Google Developers student club'";
            $result = mysqli_query($conn, $sql1);
            $row = mysqli_fetch_assoc($result);
            echo $row['count(Org_name)'];
            ?></b><br> About the Organization: </p> 
            <p1> 
                <?php
                include './dbconnect.php';
                $sql2 = "SELECT Org_about FROM election_details WHERE Org_name = 'Google Developers student club'";
                $result = mysqli_query($conn, $sql2);
                $row = mysqli_fetch_assoc($result);
                echo $row['Org_about'];
                ?>
            </p1>
        </div>
        <div class = "txtbox2-E">
            <h1 style="font-size: 30px; color: chocolate;"> Organizations Voted in: </h1>
            <table class="table table-dark table-stripped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Organization name</th>
                    <!-- <th scope="col">Position </th> -->
                    <th scope="col">Results</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                include './dbconnect.php';
                $name = $_SESSION['username'];
                $sql3 = "SELECT Voted_in FROM `registration` WHERE `registration`.`name` = '$name'";
                $result = mysqli_query($conn, $sql3);
                $row = mysqli_fetch_assoc($result);
                $Votedlist = explode(",", $row['Voted_in']);
                $num = count($Votedlist);
                for ($i = 0; $i<$num; $i++){
                $rowno = $i + 1;
                echo '
                  <tr>
                    <th scope="row">'.$rowno.'</th>
                    <td>'.$Votedlist[$i].'</td>
                    <td>Results will be declared.</td>
                  </tr>';
                }
                ?>
                </tbody>
              </table>
        </div>
    </div>
    <!-- Script for the scroll reveal !  -->
    <script>
        ScrollReveal({
            reset: true,
            distance: '60px',
            duration: 2500,
            delay: 400
        });

        ScrollReveal().reveal('.usr_img, #Poll_button, #Organization_button, #Election_button', { delay: 500, origin: 'left' });
        ScrollReveal().reveal('.txt_name, #txtbox-s, .txt1', { delay: 500, origin: 'bottom' });
    </script>

    <!-- Script for the button grid  -->
    <script>
        var P_button = document.getElementById("Poll_button");
        // var O_button = document.getElementById("Organization_button");
        var E_button = document.getElementById("Election_button");
        var S_contain = document.getElementById("start_container");
        var P_contain = document.getElementById("Mypoll_container");
        var E_contain = document.getElementById("Election_container");

        P_button.onclick = function () {
                S_contain.style.display = "none";
                P_contain.style.display = "block";
                E_contain.style.display = "none";
            }
        E_button.onclick = function(e) {
            S_contain.style.display = "none";
            E_contain.style.display = "block";
            P_contain.style.display = "none";
        }
    </script>
    <!-- Bootstrap script  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
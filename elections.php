<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elections.</title>
  <link rel="stylesheet" href="sidebar.css" >
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<style>
  body {
    display: grid;
    /* background-image: url(img/back2.jpg); */
        background-color: black;
        background-color: #ffffff;
        background-color: #000000;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1274%26quot%3b)' fill='none'%3e%3crect width='1440' height='560' x='0' y='0' fill='rgba(0%2c 0%2c 0%2c 1)'%3e%3c/rect%3e%3cg transform='translate(-72%2c 0)' stroke-linecap='round'%3e%3cpath d='M473.5 269.485 L473.5 290.515' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M502.5 220.965 L502.5 242.715' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M502.5 275.34000000000003 L502.5 339.035' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M531.5 211.515 L531.5 233.265' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M531.5 265.89 L531.5 287.64' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M531.5 320.265 L531.5 348.485' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M560.5 191.995 L560.5 235.495' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M560.5 268.12 L560.5 311.62' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M560.5 344.245 L560.5 368.005' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M589.5 236.535 L589.5 323.475' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M618.5 246.515 L618.5 313.485' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M647.5 218.565 L647.5 341.435' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M676.5 236.255 L676.5 258.005' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M676.5 290.63 L676.5 323.755' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M705.5 258.525 L705.5 301.485' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M734.5 232.845 L734.5 254.595' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M734.5 287.22 L734.5 327.145' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M763.5 266.03499999999997 L763.5 293.975' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M792.5 279.165 L792.5 280.835' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M821.5 200.295 L821.5 359.705' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M850.5 232.035 L850.5 327.955' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M879.5 269.165 L879.5 290.835' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M908.5 255.845 L908.5 304.155' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M937.5 228.685 L937.5 250.435' stroke-width='21.75' stroke='%233a7cc3'%3e%3c/path%3e%3cpath d='M937.5 283.06 L937.5 331.315' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3cpath d='M966.5 271.495 L966.5 288.505' stroke-width='21.75' stroke='rgba(195%2c 26%2c 26%2c 1)'%3e%3c/path%3e%3c/g%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1274'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3c/defs%3e%3c/svg%3e");
        background-attachment: fixed;
        background-size: cover;
    /* layout for the body */
    grid-template-areas:
      'header header header header'
      'ssc ssc ssc ssc'
      'head head head head'
      'container1 container1 container2 container2'
      'footer footer footer footer';

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

  * {
    box-sizing: border-box
  }

  /* Slideshow container */
  .slideshow-container {
    max-width: 100vw;
    position: relative;
    margin: auto;
    grid-area: ssc;
    margin-left: -11px;
    margin-right: -11px;
    border-top: 3px solid #cf3434;
    border-bottom: 3px solid #cf3434;
    height: 60vh;
  }

  /* Hide the images by default */
  .mySlides {
    display: none;
  }

  /* Caption text */
  .text {
    color: #f2f2f2;
    font-size: 30px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }

  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

  /* The dots/bullets/indicators */
  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  .active,
  .dot:hover {
    background-color: #717171;
  }

  /* Fading animation */
  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
  }

  @-webkit-keyframes fade {
    from {
      opacity: .4
    }

    to {
      opacity: 1
    }
  }

  @keyframes fade {
    from {
      opacity: .4
    }

    to {
      opacity: 1
    }
  }

  .img {
    height: 60vh;
  }

  .container1 {
    grid-area: container1;
    /* height: 40vh; */
    margin: 2px;
    color: white;
    width: 0vw;
    font-family: 'Bebas Neue', cursive;
  }

  .container2 {
    grid-area: container2;
    /* height: 60vh; */
    margin: 2px;
    display: grid;
    grid-template-areas: 'card1 card1 card2 card2';
    font-family: 'Bebas Neue', cursive;
  }

  #heading {
    grid-area: head;
    height: 10vh;
    font-family: Arial, Helvetica, sans-serif;
    margin-left: -11px;
    margin-right: -11px;
    border-top: 4px solid black;
    color: white;
  }

  footer {
    grid-area: footer;
    height: 6vh;
    background-color: white;
    margin-left: -11px;
    margin-right: -11px;
  }

  footer h {
    text-align: center;
    margin: auto;
    padding: 9px 2px;
    display: block;

  }

  #heading h1 {
    text-align: center;
    margin: auto;
    padding: 9px 2px;
    display: block;
  }

  .table {
    margin: 20px 0px;
    padding: 4px 4px;
    text-decoration: none;
    border: 2px solid whitesmoke;
    border-radius: 32px;
    width: 100px;
    list-style-type: none;
    margin-left: 70px;
    margin-right: -80px;
    /* display: block;
    margin: auto;
    margin-bottom: 10px; */

  }

  .table a {
    margin: 4px 15px;
    padding: 0%;
    text-align: center center;
    color: #f0f8ff;
    text-decoration: none;
  }

  .table a:hover {

    font-size: 20px;
    text-decoration: underline;
    color: black;
    box-sizing: border-box;
  }

  #btn {
    padding: 15px 15px;
    border: 'none';
    background-image: url(img/menulogo.png);
    background-size: cover;
    border-radius: 36px;
  }

  .container1 h3 {
    display: block;
    margin: auto;
  }

  #card1 {
    /* background-color: red; */
    grid-area: card1;
    margin-left: 25vw;

  }

  #card2 {

    grid-area: card2;
  }

  #card1 h1 {
    font-size: 20px;
    margin: 2px 38px;
  }

  #card2 h1 {
    font-size: 20px;
    margin: 2px 38px;
  }

  .electclub {
    height: 150px;
    width: 200px;
  }

  .electclub:hover {
    height: 160px;
    width: 210px;
  }
.container{
    margin: 4px;
    height: 25vh;
    display: grid;
}
#top{
    grid-area: top;
    background-color: red;
    grid-template-areas: 'img info info info';
}
#right{
    grid-area: right;
    /* background-color: blue; */
}
#left{
    grid-area: left;
    /* background-color: black; */
}
.info{
    height: 25vh;
}
</style>

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
  <!-- Slideshow container -->
  <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img class="img" src="https://source.unsplash.com/1600x900/?nature,water" style="width:100%">
      <div class="text">Caption one</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img class="img" src="https://source.unsplash.com/1600x900/?nature,fire" style="width:100%">
      <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img class="img" src="https://source.unsplash.com/1600x900/?nature,land" style="width:100%">
      <div class="text">Caption Three</div>
    </div>

  </div>
  <br>

  <div id="heading">
    <h1> Election catalogs.</h1>
  </div>
  <div class="container1">
    <h3 id="Heading"> <button onclick="func()" id="btn"></button> Menu:</h3>
    <div id="rightnav">
      <div class="table" id="row1">
       <?php
                    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                        
                        echo '<a href="logout.php"> Logout </a>';
                        }
                        else{
                            echo '<a href="login.html"> Login </a>';
                        }
                    
                    ?> 

      </div>
      <div class="table" id="row2"><a href="dashboard.html">Dashboard </a></div>
      <div class="table" id="row3"><a href="polls.html"> Polls </a></div>
    </div>
  </div>
  <div class="container2">
    <?php
    include '.\dbconnect.php';
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
      $username = $_SESSION['username'];
      $sql1 = "SELECT * FROM `registration` WHERE `registration`.`name` = '$username'";
      $result = mysqli_query($conn, $sql1);
      $row = mysqli_fetch_assoc($result);
      $Votedlistarray = explode(",", $row['Voted_in']);
    }
    $sql = "SELECT * from `election_details` WHERE 1";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
      $tablename = $row['Org_name']." ".$row['Org_position']." Candidates";
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        if(in_array($tablename, $Votedlistarray)){
          echo '<div class="card" style="width: 15rem; margin-top: 50px;">
                  <img src="./org_logos/'.$row['Org_name'].".jpg".'" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">'.$row['Org_name'].'</h5>
                    <p class="card-text">'.$row['Org_about'].'</p>
                    <a class="btn btn-primary">Voted ! </a>
                  </div>
                </div>';
        }else{
          echo '<div class="card" style="width: 15rem; margin-top: 50px;">
                  <img src="./org_logos/'.$row['Org_name'].".jpg".'" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">'.$row['Org_name'].'</h5>
                    <p class="card-text">'.$row['Org_about'].'</p>
                    <a class ="btn btn-primary" href = "./_checkCVC.php?id='.$row['Org_id'].'">Vote</a>
                  </div>
                </div>';
        }
      }else{
        echo '<div class="card" style="width: 15rem; margin-top: 50px;">
                <img src="./org_logos/'.$row['Org_name'].".jpg".'" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">'.$row['Org_name'].'</h5>
                  <p class="card-text">'.$row['Org_about'].'</p>
                  <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Login" data-bs-content="Hello, you are not logged in. Right?">Please Login!</button>
                </div>
              </div>';
      }
    }
      ?>
  </div>

  <footer>
    <h> Copyrights@shashwat suthar </h>
  </footer>

  <!-- Sidebar start -->
  <div id="mySidebar" class="sidebar">
        <?php
        include './dbconnect.php';
        $firstpart = $_GET['flag'];
        $sql = "SELECT * FROM `one vote`.`election_details` WHERE `Org_id` LIKE '%$firstpart'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $tablename = $row['Org_name']." ".$row['Org_position']." Candidates";
        echo '
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <h1> Welcome </h1>
        <p1> <b>to the '.$row['Org_name'].' elections 2021 </b></p1>
        <div class="container">
              <img src="img/rotract.jpg" alt="" class="image">
              <p2> 
                  '.$row['Org_about'].'
              </p2>
        </div>';
        ?>
        <div class="card-container">
          <h1> PARTICIPANTS </h1>
        <?php
        include './dbconnect.php';
        $sql1 = "SELECT * FROM `$tablename` WHERE 1";
        $result = mysqli_query($conn, $sql1);
        while($row = mysqli_fetch_assoc($result)){
        echo '
          <a href="./_vote.php?id='.$row['sr no'].'&name='.$tablename.'" class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="img/user-img.png" alt="Avatar" style="width:200px;height:200px; border-radius: 10px;">
              </div>
              <div class="flip-card-back">
                <h1>'.$row['p_name'].'</h1>
                <p>'.$row['p_about'].'</p>
              </div>
            </div>
          </a>';
        }
        ?>
      </div>
    </div>
    <!-- siderbar ends  -->

  <!-- // scripts start here -->
  <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) { slideIndex = 1 }
      slides[slideIndex - 1].style.display = "block";
      setTimeout(showSlides, 5000); // Change image every 5 seconds
    }
  </script>

  <script>
    function func() {
      let btn = document.getElementById('btn');
      let rightnav = document.getElementById('rightnav');
      if (rightnav.style.display != 'none') {
        rightnav.style.display = 'none';
      }
      else {
        rightnav.style.display = 'block';
      }
    }</script>

    <!-- Script for sidebar -->
      
        <?php            // this will Fetch the details abt the cvc. 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $email = $_SESSION['email'];
          $cvccheck = $_POST['CVC'];
          
          $sql = "SELECT * FROM `registration` WHERE  `registration`.`email` = '$email'";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          $id = $row['sr no'];
          $actualcvc = $firstpart.$id;
          if($cvccheck = $actualcvc){
            $flag = 1;
            echo $flag;
          }else{
            $flag = 0;
            echo $flag;
          }
        }
        ?>
        <script>
          var jsflag = '<?=$flag?>';
          window.onload = function(){
          if(jsflag == 1){
            document.getElementById("mySidebar").style.width = "400px";
            document.getElementById("main").style.marginLeft = "400px";
          }
          };
        /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
</body>

</html>
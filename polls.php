<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>polls </title>
    <link rel="stylesheet" href="styles/pollsstyle.css" class="href">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: black;
            background-color: #ffffff;
            background-color: #000000;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1600 900'%3E%3Cdefs%3E%3ClinearGradient id='a' x1='0' x2='0' y1='1' y2='0'%3E%3Cstop offset='0' stop-color='%230FF'/%3E%3Cstop offset='1' stop-color='%23CF6'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' x1='0' x2='0' y1='0' y2='1'%3E%3Cstop offset='0' stop-color='%23F00'/%3E%3Cstop offset='1' stop-color='%23FF9D49'/%3E%3C/linearGradient%3E%3C/defs%3E%3Cg fill='%23FFF' fill-opacity='0' stroke-miterlimit='10'%3E%3Cg stroke='url(%23a)' stroke-width='3.3'%3E%3Cpath transform='translate(-150.5 34.4) rotate(21.5 1409 581) scale(1.086)' d='M1409 581 1450.35 511 1490 581z'/%3E%3Ccircle stroke-width='1.1' transform='translate(-86 86) rotate(25.8 800 450) scale(1.043)' cx='500' cy='100' r='40'/%3E%3Cpath transform='translate(77.4 -258) rotate(258 401 736) scale(1.043)' d='M400.86 735.5h-83.73c0-23.12 18.74-41.87 41.87-41.87S400.86 712.38 400.86 735.5z'/%3E%3C/g%3E%3Cg stroke='url(%23b)' stroke-width='1'%3E%3Cpath transform='translate(516 -34.4) rotate(8.6 150 345) scale(0.914)' d='M149.8 345.2 118.4 389.8 149.8 434.4 181.2 389.8z'/%3E%3Crect stroke-width='2.2' transform='translate(-344 -215) rotate(309.6 1089 759)' x='1039' y='709' width='100' height='100'/%3E%3Cpath transform='translate(-516 172) rotate(51.6 1400 132)' d='M1426.8 132.4 1405.7 168.8 1363.7 168.8 1342.7 132.4 1363.7 96 1405.7 96z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
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
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0px;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            margin: 3px 15px;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Modal Body */
        .modal-body {
            padding: 2px 16px;
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: 60px auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        /* Add Animation */
        @keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }

            to {
                top: 0;
                opacity: 1
            }
        }

        #form input {
            outline: 0;
            border: 1px solid #ddd;
            font-size: 16px;
            width: 100%;
            padding: 15px 10px;
            outline: 0;
            border-radius: 5px;
        }

        .poll-form {
            margin: 0px 270px;
        }

        #form p {
            font-size: 25px;
            margin-bottom: 7px;
        }

        .poll-form button {
            font-size: 18px;
            font-weight: bold;
            margin: auto;
            padding: 10px 15px;
            width: 50%;
            border-radius: 5px;
            border: 0;
            cursor: pointer;
            border-radius: 4px;
        }

        .poll-form button:hover {
            background-color: aqua;
        }
        .dropbtn {
            display: block;
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  border-radius: 10px;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: block;
  margin-bottom: 50px;
  border-radius: 10px;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  /* min-width: 160px; */
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  border-radius: 10px;
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}

    </style>
</head>

<body id="body">
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
    <div class="container" id="container1">
        <h1 style="margin: 44px 155px; margin-right: 10px;"> Welcome </h1>
        <h2> to <br></h2>
        <h3> Polling </h3>

    </div>
    <div class="container" id="container2">
        <p>The Informal polling is a salient feature of our website.</p>
        <p>There several ongoing public events on which you </p>
        <p> can conduct polling For example social disputes, public events etc.</p>
        <p> Please select the given options if you want to </p>
        <p> <b> CONDUCT</b> or <b> Vote </b>in a ongoing poll. </p>

    </div>
    <div id="container3" class="container">
        <h><b> Ongoing polls (Select to partcipate or vote) </b></h>
        <div id="EC">
            <?php
            include '.\dbconnect.php';
            $timezone = date_default_timezone_set('Asia/Kolkata');
            $time1 = date("d");
            $sql = "SELECT * FROM `polls`";
            $result = mysqli_query($conn , $sql);
            while($row = mysqli_fetch_assoc($result)){
                $time2 = date("d", strtotime($row['time']. '+ 7 days'));
                if($time2 <= $time1){
                    // $declartion = "Results are declared";
                    echo '
                    <div class="dropdown">
                        <a class="dropbtn">'. $row['user_name'].'</a>
                        <div class="dropdown-content">
                            <a href="./presult.php?p_id='.$row['poll id'].'"> Results are declared, click here to view them. </a>
                        </div>
                    </div>';
                }
                else{
                    // $declartion = "Results will be  declared";
                    echo '
                    <div class="dropdown">
                        <a class="dropbtn">'. $row['user_name'].'</a>
                        <div class="dropdown-content">
                            <a href="#">Results will be  declared </a>
                        </div>
                    </div>';
                }
            }
            ?>
        </div>
        <button id="myBtn">Add Event</button>
    </div>
    <footer>
        <h>Copyrights@ Shashwat suthar</h>
    </footer>
    <!-- Modal for the link events button  -->
    <div id="myModal1" class="modal">

        <!-- Modal content -->
        <div class="modal-content" id="mc">
            <span class="close">&times;</span>
            <h> Hii this is the event modal </h> 
        </div>
    </div>
        
        <!-- The add event modals  starts here -->
     <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content" id="mc">
            <span class="close">&times;</span>
            <div class="poll-form">
                <form action="./_polls.php" method="post" id="form">
                    <p> poll Query</p>
                    <input type="Query" name="Query" placeholder="Enter poll Query">
                    <p> Option 1 </p>
                    <input type="Option1" name="Option1" placeholder="Option1">
                    <p> Option 2 </p>
                    <input type="Option2" name="Option2" placeholder="Option2">
                    <br><br>
                    <button type="submit"> post </a></button>
                    <!-- <a href="./register.html" class="href"> Click here to Register </a> -->

                </form>
            </div>
        </div>

    </div>
                

        <!-- <script>
        function func() {
            let container = document.getElementById('EC');
            var x = document.createElement("a");
            var t = document.createTextNode("Event no: $");
            x.setAttribute("href", "#");
            x.setAttribute("class", "Events");
            x.appendChild(t);
            container.appendChild(x);

        }
    </script> -->
        <!-- This is script for the modal  -->
        <script>
            
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            var mc = document.getElementById("mc");
            // When the user clicks on the button, open the modal
            btn.onclick = function () {
                modal.style.display = "block";

            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function () {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                     modal.style.display = "none";
                }
            }

        </script>
        <script>
            var b = document.getElementsById("Elink");
            var span = document.getElementsByClassName("close")[0];

            var modal1 = document.getElementById("myModal1");
            b.onclick = function(){
                modal1.style.display = "block";
            }

            span.onclick = function () {
                modal1.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal1.style.display = "none";
                }
            }
            </script>
</body>

</html>
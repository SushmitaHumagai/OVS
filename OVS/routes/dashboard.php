<?php
    session_start();
    if(!isset($_SESSION['userdata'])){
        header("location:../");
    }
?>
<html>
   <head>
       <title>Online Voting System</title>

   </head>
   <body>
       <button>Back</button>
       <button>Log out</button>

    <h1>Online Voting System</h1>
    <hr>
   
    <div id="Profile"></div>
    <div id="Group"></div>
   </body>
 </html>


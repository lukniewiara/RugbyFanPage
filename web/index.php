<?php


$page=isset($_GET['page']) ? $_GET['page'] : "main"; 
include("header.php");
include("naglowek.php");

if($page=="main"){
    include("menu_.php");
    include("terminarz_small.php");
    include("Newsy_small.php");
}
else{
    include("menu.php");
    include($page . ".php");
}
include("footer.php");

<?php
session_start();
if(isset($_SESSION['username'])){
    echo "You are currently logged in as " . $_SESSION['username'];
}else{
    echo "You are currently logged out. <a href='https://www.untone.uk/id/utauth?client_id=7'>Log in with UNTONE</a>";
}
?>
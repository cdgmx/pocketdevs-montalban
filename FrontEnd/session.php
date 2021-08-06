

<?php  
// isset($_SESSION['username']
session_start();
    if(isset($_SESSION['firstname'])){
        $username = $_SESSION['firstname'];
        echo "<a> Welcome $username</a> <a onclick='logout()''> Logout </a>";
    }
    else{
        echo "<a href='login.php'>Login</a>";
    }   
?>
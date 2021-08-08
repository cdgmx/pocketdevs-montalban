

<?php  
// isset($_SESSION['username']
session_start();
    if(isset($_SESSION['firstname'])){
        $username = $_SESSION['firstname'];
        echo "<a> Welcome $username</a> <a onclick='logout()''> Logout </a>";
    }
    else{
        echo "<form action='login.php'>
            <button type='submit'>Login</button>
        </form>";
        // echo "<button href='login.php'>Login</button>";
    }   
?>
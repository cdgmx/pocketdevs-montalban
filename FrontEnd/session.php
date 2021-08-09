

<?php  
// isset($_SESSION['username']
session_start();
    if(isset($_SESSION['firstname'])){
        $username = $_SESSION['firstname'];
        echo "<a> Welcome $username</a> <a onclick='logout()''> Logout </a>";
    }
    else{
        echo "<form action='login.php'>
        <input type='submit' name='signin'  value='Sign in'></input>
    </form>
    <form action='register.php'>
        <input type='submit' name='signup' value='Sign up'></input>
    </form>";
        // echo "<button href='login.php'>Login</button>";
    }   
?>


<?php  
// isset($_SESSION['username']
$res =  (object)[]; 
    session_start();
        if(isset($_SESSION['firstname'])){
            $username = $_SESSION['firstname'];
            $res->status = true;
            $res->data = $username;
            echo json_encode($res);
            exit();
        }
        else{
            $res->status = false;
            echo json_encode($res);
            exit();
        }   
?>
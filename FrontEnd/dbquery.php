<?php
session_start();
include "db.php";
ob_start();

//change post submit name


if ($_POST['submit'] === 'Login'){
  loginUser();
}

if ($_POST['submit'] === 'Register'){
  registerUser();
}

if ($_POST['submit'] === 'Logout'){
  logoutUser();
}

function logoutUser(){
  unset($_SESSION);
  session_destroy();
  exit();
}


function checkUser(){
  global $conn;
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
  $result = mysqli_query($conn,$sql);

  if ((mysqli_num_rows($result) === 1)) {
    echo "username found";
  } else {
    echo "not found";
  }
  mysqli_close($conn);
}

function hashPassword($password){
  $newPass = password_hash($password,PASSWORD_DEFAULT);
  return $newPass;
}

function validatePass($dbPass,$inputPass){
  return password_verify($inputPass,$dbPass);
}


function loginUser(){
  global $conn;
  $res =  (object)[]; //create a class for this
  $username = $_POST['username'];
  $password = $_POST['password'];

  $dbRes = "SELECT * FROM users WHERE   username = '$username' ";
  // $dbRes = "SELECT * FROM users";
  $result = mysqli_query($conn,$dbRes);
  $resFetch = mysqli_fetch_array($result,MYSQLI_ASSOC);
  // || mysqli_num_rows($result) === 1
  if (!$result || mysqli_num_rows($result) > 0) {
    $match = validatePass($resFetch['password'], $password);
    if($match){
      
      $_SESSION['firstname'] = $resFetch['firstname'];
      $_SESSION['user_id']  = $resFetch['user_id'];
      
      $res->query = 'success';
      $res->data = "You sucessfuly logged in";
      $res->querydata = $resFetch;
      echo json_encode($res);
      exit();
    }else{
      $res->query = 'error';
      $res->data = "Wrong credentials";
      $res->querydata = $resFetch;
      echo json_encode($res);
      exit();
    }
  } else {
    $res->query = 'error';
    $res->data = "user not found";
    $res->querydata = $resFetch;
    echo json_encode($res);
    exit();
  }
  mysqli_close($conn);
}



function registerUser(){
  global $conn;
  $res =  (object)[];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];

  $hashedPass= hashPassword($password);



  $dbUserName = "SELECT * FROM users WHERE username = '$username'";
  $userResult = mysqli_query($conn,$dbUserName);
  
  if(mysqli_num_rows($userResult) === 1 ){
    $res->query = "error";
    $res->data = "User already exists";
    echo json_encode($res);
    exit();

  }else{

    $sql = "INSERT INTO users (firstname,lastname,username,password)
    VALUES('$firstname','$lastname', '$username','$hashedPass')";

    if (mysqli_query($conn, $sql)) {
      $res->query = "success";
      echo json_encode($res);
      exit();
    }else{
      $res->query = "error";
      $res->data = "Insert Error DB";
      echo json_encode($res);
      exit();

    }
   
  }

  mysqli_close($conn);


 
}

?>

<?php 
error_reporting(0); 
session_start(); 
if ($_GET['ask'] == 'auto'){
    setcookie('username',$_SESSION['username'],time()+60*60*24*365);
    setcookie('password',$_SESSION['password'],time()+60*60*24*365);
    setcookie('user',$_SESSION['user'],time()+60*60*24*365);
    setcookie('port',$_SESSION['port'],time()+60*60*24*365);
    setcookie('bhsa',$_SESSION['bhsa'],time()+60*60*24*365);
}elseif ($_GET['ask'] == 'in' and $_SESSION['vpnexpired'] == "OK" and isset($_SESSION['username'])){
    setcookie('username',$_SESSION['username'],time()+60*60*24*365);
    setcookie('password',$_SESSION['password'],time()+60*60*24*365);
    setcookie('user',$_SESSION['user'],time()+60*60*24*365);
    setcookie('port',$_SESSION['port'],time()+60*60*24*365);
    setcookie('bhsa',$_SESSION['bhsa'],time()+60*60*24*365);
    $gt = str_replace('%','hO8s0rB1',str_replace('=','kQ2m7gp4',str_replace('+','Uc9Ts3L0',base64_encode(base64_decode(base64_decode($_SESSION['username'])).','.$_SESSION['user'].','.base64_decode(base64_decode($_SESSION['password'])).','.$_SESSION['port'].','.$_SESSION['bhsa'].','.$_SESSION['namamikrotik'])))).'yR5z3kM7';
    $id = $gt.substr(str_replace($gt,'',$_COOKIE['id']),0,1000);
    setcookie('id',$id,time()+60*60*24*365);
    header('location:http://'.$_SERVER['HTTP_HOST']);
}elseif ($_GET['ask'] == 'remove' and isset($_SESSION['username'])){
    $gt = str_replace('%','hO8s0rB1',str_replace('=','kQ2m7gp4',str_replace('+','Uc9Ts3L0',base64_encode(base64_decode(base64_decode($_SESSION['username'])).','.$_SESSION['user'].','.base64_decode(base64_decode($_SESSION['password'])).','.$_SESSION['port'].','.$_SESSION['bhsa'].','.$_SESSION['namamikrotik'])))).'yR5z3kM7';
    $id = str_replace($gt,'',$_COOKIE['id']);
    setcookie('id',$id,time()+60*60*24*365);
    header('location:http://'.$_SERVER['HTTP_HOST']);
}elseif ($_GET['ask'] == 'out'){
    session_unset(); 
    session_destroy();
    setcookie('username','');
    setcookie('password','');
    setcookie('user','');
    setcookie('port','');
    setcookie('bhsa','');
    if (file_exists('offline.txt')) {unlink ('offline.ico');}
    header('location:http://'.$_SERVER['HTTP_HOST']);
}else{
    header('location:http://'.$_SERVER['HTTP_HOST']);
}
?>
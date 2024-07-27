<?php 
error_reporting(0);
session_start();
echo '<!DOCTYPE html>';
echo '<html lang="id" id="MiniTik">';
$logintime = strtotime("now");
$sturlxa = $_SERVER["QUERY_STRING"];
if (isset($_POST['btn_update'])){
	$_SESSION['username'] = base64_encode(base64_encode($_POST['username']));
    $_SESSION['password'] = base64_encode(base64_encode($_POST['password']));
    $_SESSION['user'] = $_POST['user'];
	$_SESSION['port'] = $_POST['port'];
	$_SESSION['bhsa'] = $_POST['bhsa'];
	if (file_exists('offline.txt')) {
        $id = str_replace('=','kQ2m7gp4',str_replace('+','Uc9Ts3L0',base64_encode(base64_decode(base64_decode($_SESSION['username'])).','.$_SESSION['user'].','.base64_decode(base64_decode($_SESSION['password'])).','.$_SESSION['port'])));
        $fp = fopen("offline.ico", "w");
        fwrite($fp, '<?php $ylcqnmskj = '."'".$id."'".'; ?>');
        fclose($fp);
    }
}elseif (isset($_GET['a'])){
    $dloginall = explode(',', base64_decode(str_replace('Uc9Ts3L0','+',str_replace('kQ2m7gp4','=',str_replace('hO8s0rB1','%',$_GET['a'])))));
    $hg = '0';
    foreach ($dloginall as $dlogin){
        $hg = $hg + 1;
        $slogin[$hg] = $dlogin;
    }
    setcookie('username','');
    setcookie('password','');
    setcookie('user','');
    setcookie('port','');
    setcookie('bhsa','');
    $_SESSION['username'] = base64_encode(base64_encode($slogin[1]));
    $_SESSION['password'] = base64_encode(base64_encode($slogin[3]));
    $_SESSION['user'] = $slogin[2];
    $_SESSION['port'] = $slogin[4];
    $_SESSION['bhsa'] = $slogin[5];
    if (file_exists('offline.txt')) {
        $id = str_replace('=','kQ2m7gp4',str_replace('+','Uc9Ts3L0',base64_encode(base64_decode(base64_decode($_SESSION['username'])).','.$_SESSION['user'].','.base64_decode(base64_decode($_SESSION['password'])).','.$_SESSION['port'])));
        $fp = fopen("offline.ico", "w");
        fwrite($fp, '<?php $ylcqnmskj = '."'".$id."'".'; ?>');
        fclose($fp);
    }
    echo '<script>window.location = "http://'.$_SERVER['HTTP_HOST'].'";</script>';
}elseif ($_GET['fbclid'] <> ''){
    echo '<script>window.location = "http://'.$_SERVER['HTTP_HOST'].'.substr($sturlxa,0,strpos($sturlxa,'fbclid')).'";</script>';
}elseif(isset($_GET['e'])){
    $_SESSION['e'] = $_GET['e'];
    echo '<script>window.location = "http://'.$_SERVER['HTTP_HOST'].'";</script>';
}elseif ($sturlxa <> ''){
    header("".$sturlxa);
    exit();
}elseif (file_exists('offline.txt')) {
    include_once('offline.ico');
    $dloginall = explode(',', base64_decode(str_replace('Uc9Ts3L0','+',str_replace('kQ2m7gp4','=',$ylcqnmskj))));
    $hg = '0';
    foreach ($dloginall as $dlogin){
        $hg = $hg + 1;
        $slogin[$hg] = $dlogin;
    }
	$_SESSION['username'] = base64_encode(base64_encode($slogin[1]));
    $_SESSION['password'] = base64_encode(base64_encode($slogin[3]));
    $_SESSION['user'] = $slogin[2];
	$_SESSION['port'] = $slogin[4];
}elseif ($_COOKIE['username'] <> ''){
	$_SESSION['username'] = $_COOKIE['username'];
    $_SESSION['password'] = $_COOKIE['password'];
    $_SESSION['user'] = $_COOKIE['user'];
	$_SESSION['port'] = $_COOKIE['port'];
	$_SESSION['bhsa'] = $_COOKIE['bhsa'];
}
if ($_SESSION['bhsa'] <> ''){
    $bahasa = $_SESSION['bhsa'];
    include('tools/bahasa/'.$bahasa.'.php');
}else{
    include('tools/bahasa/default.php');
}

echo '<head>';
include('header.php');
echo '</head><body>';
if($_SESSION['infopesan'] <> ''){
    echo '<script>cmodal("Informasi", " '.$_SESSION['infopesan'].'", "information")</script>';
    $_SESSION['infopesan'] = '';
}
$gaglogfile = "tools/totalkunjungan.txt";
$gagfile = fopen($gaglogfile,"r");
$gagfiledata = fread($gagfile,filesize($gaglogfile));
fclose($gagfile);
$gagfr = fopen($gaglogfile, 'w');
fwrite($gagfr, ($gagfiledata + 1));
fclose($gagfr);
$berlogfile = "tools/totalberhasillogin.txt";
$berfile = fopen($berlogfile,"r");
$berfiledata = fread($berfile,filesize($berlogfile));
fclose($berfile);
use PEAR2\Net\RouterOS;
require_once 'PEAR2/Autoload.php';
try {
    $util = new RouterOS\Util($client = new RouterOS\Client(base64_decode(base64_decode($_SESSION['username'])),$_SESSION['user'],base64_decode(base64_decode($_SESSION['password'])),$_SESSION['port'],false,10));
    $anctgg = ['%3C','%3E','&lt','&gt','<','>'];
    $_SESSION['namamikrotik'] = str_replace($anctgg,'',$util->setMenu('/system identity')->get(null, 'name'));
    $groupikrotik = str_replace($anctgg,'',$util->setMenu('/user')->get(RouterOS\Query::where('name', $_SESSION['user']), 'group'));
    $hmvcrqckgnrt = str_replace($anctgg,'',$util->setMenu('/user group')->get(RouterOS\Query::where('name', $groupikrotik), 'comment'));
    if ($_SESSION['vpnexpired'] == "OK"){
        echo '<iframe src="logout.php?ask=auto" scrolling="no" style="width:1px; height:1px; border:0px; padding:0; overflow:hidden;" allowtransparency="true"></iframe>';
    }
    if ($groupikrotik == 'full' or $groupikrotik == 'write'){
        include_once('home.php');
    }else{
        include_once('reseller.php');
    }
    $berfr = fopen($berlogfile, 'w');
    fwrite($berfr, ($berfiledata + 1));
    fclose($berfr);
}
catch (Exception $e) {
    if ((strtotime("now") - $logintime) > 8){$_SESSION['infologin'] = 'TimeOut';}else{$_SESSION['infologin'] = 'Normal';}
    include_once('settings.php');
    echo '<br>';
}
echo '</body></html>';
?>

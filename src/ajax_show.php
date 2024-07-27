<?php 
error_reporting(0);
session_start();
use PEAR2\Net\RouterOS;
require_once 'PEAR2/Autoload.php';
try {
    $util = new RouterOS\Util($client = new RouterOS\Client(base64_decode(base64_decode($_SESSION['username'])),$_SESSION['user'],base64_decode(base64_decode($_SESSION['password'])),$_SESSION['port']));
}catch (Exception $e) {
    $_SESSION['infopesan'] = 'Koneksi terputus, Silahkan coba login kembali..!';
    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uc3bk5Wa35').strrev('2bpRXYj9Gb').strrev('0RHaiASPg4').strrev('50akwLvoDc').'tqka05tq')))).$_SERVER['HTTP_HOST'].'";</script>';
}

if($_GET["show"] == 'profile'){
    if (isset($_GET['name'])){$name = $_GET['name'];}
    if ($name <> '') {
        $btin = '0';
        $btout = '0';
        $uptm = '00:00:00';
        foreach ($util->setMenu('/ip hotspot user')->getAll() as $counprof){
            if ($counprof('profile') == $name){
                $btin = $btin + $counprof('bytes-in');
                $btout = $btout + $counprof('bytes-out');
            }
        }
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('3cpRXY0NlI').strrev('vJHUgM3YpR').strrev('CIsISZslmZ').strrev('uV3Zn5WZQJ').strrev('GdhRGIuFWY').strrev('slmZvJHcgE').'ZSAka05tq')))).$name.'<br>Upload: '.round(($btin/1000000000)).'Gb<br>Download: '.round(($btout/1000000000)).'Gb<br>TOTAL: '.round((($btin + $btout)/1000000000)).'Gb<br>Catatan: Data dari seluruh user yang belum di hapus..!", "success")</script>';
    }else{
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('3cpRXY0NlI').strrev('vJHUgM3YpR').strrev('CIsISZslmZ').strrev('tBya1RnbVJ').strrev('GbpBXbh5WZ').strrev('0FGdzBibht').strrev('GIzNWa0NXa').strrev('vJHcgkmchR').strrev('2cgwSZslmZ').strrev('g4WYrhWYsl').strrev('GdggWaslGc').strrev('ggWaiVGbyV').strrev('iL1xWdoFGZ').strrev('hdnIgwiIh4').strrev('CLicmbp5mc').strrev('yN2cvwTKiI').strrev('50akgP0BXa').'tqka05tq'))));
    }
} 

if($_GET["show"] == 'remoteiplocal'){
    if (isset($_GET['ip'])){$ip = $_GET['ip'];}
    if (isset($_GET['port'])){$port = $_GET['port'];}
    if (isset($_GET['off'])){$off = $_GET['off'];}
    if ($ip <> '' and $port <> '') {
        if (!empty($util->setMenu('/ip address')->find(RouterOS\Query::where('interface', 'MiniTik-VPN')))){
            $ipvpnx = explode('.',str_replace('/24','',str_replace('/32','',$util->get(RouterOS\Query::where('interface', 'MiniTik-VPN'),'address'))));
            $srcaddress = $ipvpnx[0].'.'.$ipvpnx[1].'.'.$ipvpnx[2].'.'.($ipvpnx[3]-1);
            $dstaddress = $ipvpnx[0].'.'.$ipvpnx[1].'.'.$ipvpnx[2].'.'.$ipvpnx[3];
            $util->setMenu('/ip hotspot ip-binding')->remove(RouterOS\Query::where('comment', 'BypassRemoteIP'));
            $util->setMenu('/ip firewall nat')->remove(RouterOS\Query::where('comment', 'RedirectRemoteIP'));
            $util->setMenu('/ip firewall nat')->remove(RouterOS\Query::where('comment', 'MasqueradeRemoteIP'));
            $util->setMenu('/system scheduler')->remove(RouterOS\Query::where('name', 'RemoveRemoteIP'));
            if (empty($util->setMenu('/ip hotspot ip-binding')->find(RouterOS\Query::where('address', $ip)))){
                $util->add(array('address' => "$ip", 'type' => 'bypass', 'comment' => 'BypassRemoteIP'));
            }
            if (empty($util->setMenu('/ip firewall nat')->find(RouterOS\Query::where('comment', 'RedirectRemoteIP')))){
                $util->add(array('action' => 'dst-nat', 'chain' => 'dstnat', 'dst-address' => "$dstaddress", 'dst-port' => '8727', 'protocol' => 'tcp', 'src-address' => "$srcaddress", 'to-addresses' => "$ip", 'to-ports' => "$port", 'comment' => 'RedirectRemoteIP'));
            }
            if (empty($util->setMenu('/ip firewall nat')->find(RouterOS\Query::where('comment', 'MasqueradeRemoteIP')))){
                $util->add(array('action' => 'masquerade', 'chain' => 'srcnat', 'dst-address' => "$ip", 'dst-port' => "$port", 'protocol' => 'tcp', 'src-address' => "$srcaddress", 'comment' => 'MasqueradeRemoteIP'));
            }
            if (empty($util->setMenu('/system scheduler')->find(RouterOS\Query::where('name', 'RemoveRemoteIP')))){
                $util->add(array('name' => 'RemoveRemoteIP', 'interval' => "$off", 'on-event' => '/ip hotspot ip-binding remove [find comment=BypassRemoteIP]; /ip firewall nat remove [find comment=RedirectRemoteIP]; /ip firewall nat remove [find comment=MasqueradeRemoteIP]; /system scheduler remove [find name=RemoveRemoteIP];'));
            }
        }
        echo base64_decode('MS4gPGEgaHJlZj0iaHR0cDovLw==').gethostbyname('vpn.mitik.my.id').':'.($_SESSION['port']+3).'"><b>http://'.gethostbyname('vpn.mitik.my.id').':'.($_SESSION['port']+3).'</b></a><br>2. <a href="http://vpn.mitik.my.id:'.($_SESSION['port']+3).'"><b>http://vpn.mitik.my.id:'.($_SESSION['port']+3).'</b></a><script>window.open("http://'.gethostbyname('vpn.mitik.my.id').':'.($_SESSION['port']+3).'");</script>';
    }else{
        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('owWYk9Wbj5').strrev('3cpRXY0NlI').strrev('vJHUgM3YpR').strrev('CIsISZslmZ').strrev('tBya1RnbVJ').strrev('GbpBXbh5WZ').strrev('0FGdzBibht').strrev('GIzNWa0NXa').strrev('vJHcgkmchR').strrev('2cgwSZslmZ').strrev('g4WYrhWYsl').strrev('GdggWaslGc').strrev('ggWaiVGbyV').strrev('iL1xWdoFGZ').strrev('hdnIgwiIh4').strrev('CLicmbp5mc').strrev('yN2cvwTKiI').strrev('50akgP0BXa').'tqka05tq'))));
    }
} 
?>
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

if($_GET["edit"] == 'system'){
    if (isset($_GET['namemikrotik'])){$namemikrotik = $_GET['namemikrotik'];}
    if (isset($_GET['loginpage'])){$loginpage = $_GET['loginpage'];}
    if (isset($_GET['speedisp'])){$speedisp = $_GET['speedisp'];}
    if (isset($_GET['autodate'])){$autodate = $_GET['autodate'];}
    if (isset($_GET['autoreboot'])){$autoreboot = $_GET['autoreboot'];}
    if (isset($_GET['autobackup'])){$autobackup = $_GET['autobackup'];}
    if (isset($_GET['looping'])){$looping = $_GET['looping'];}
    if (isset($_GET['bruteforce'])){$bruteforce = $_GET['bruteforce'];}
    if (isset($_GET['notifemail'])){$notifemail = $_GET['notifemail'];}
    if (isset($_GET['idemail'])){$idemail = $_GET['idemail'];}
    if (isset($_GET['pwemail'])){$pwemail = $_GET['pwemail'];}
    if (isset($_GET['ebackmik'])){$ebackmik = $_GET['ebackmik'];}
    if (isset($_GET['eperpen'])){$eperpen = $_GET['eperpen'];}
    if (isset($_GET['elaphar'])){$elaphar = $_GET['elaphar'];}
    if ($namemikrotik <> '') {
        $util->setMenu('/system identity')->set(null, array('name' => $namemikrotik));
    }
    if ($loginpage <> '') {
        foreach ($util->setMenu('/ip hotspot profile')->getAll() as $item) {
            $dnsname = $item('name');
            $util->set($dnsname, array('dns-name' => $loginpage));
		}
    }
    if (!empty($speedisp)) {
        $upload = round($speedisp / 5);
        $upgger = floor($speedisp / 5 * 90 / 100);
        $bigger = round($speedisp * 90 / 100);
        $util->setMenu('/queue simple');
        if (!empty($util->find(RouterOS\Query::where('name', 'MAX-SPEED')))){
            $util->set('MAX-SPEED', array('max-limit' => ($upload * 1000000).'/'.($speedisp * 1000000), 'limit-at' => '2000000/10000000'));
        }
        if (!empty($util->find(RouterOS\Query::where('name', 'Max-Bigger')))){
            $util->set('Max-Bigger', array('max-limit' => ($upgger * 1000000).'/'.($bigger * 1000000), 'limit-at' => '1000000/5000000'));
        }
        if (!empty($util->find(RouterOS\Query::where('name', 'Max-Default')))){
            $util->set('Max-Default', array('max-limit' => ($upload * 1000000).'/'.($speedisp * 1000000), 'limit-at' => '2000000/10000000'));
        }
    }
    if (!empty($autodate)) {
        $util->setMenu('/system scheduler');
        if (empty($util->find(RouterOS\Query::where('name', '--AutoTime--')))){
            $util->add(array('name' => '--AutoTime--', 'start-time' => 'startup', 'disabled' => "no", 'on-event' => '/tool netwatch enable [find comment="MiniTik-UpdateWaktu"];'));
        }
        $util->setMenu('/tool netwatch');
        if (empty($util->find(RouterOS\Query::where('comment', 'MiniTik-UpdateWaktu')))){
            $util->add(array('host' => '8.8.8.8', 'interval' => '00:00:03', 'disabled' => "no", 'up-script' => '/system ntp client set enabled=no; /system clock set time-zone-name='.$autodate.' time-zone-autodetect=yes; /system ntp client set primary-ntp=[:resolve time1.google.com] secondary-ntp=[:resolve time2.google.com] enabled=yes; /tool netwatch disable [find comment="MiniTik-UpdateWaktu"];', 'comment' => 'MiniTik-UpdateWaktu'));
        }
    }else{
        $util->setMenu('/system scheduler')->remove(RouterOS\Query::where('name', "--AutoTime--"));
        $util->setMenu('/tool netwatch')->remove(RouterOS\Query::where('comment', "MiniTik-UpdateWaktu"));
    }
    if (!empty($autoreboot)) {
        $util->setMenu('/system scheduler');
        if (empty($util->find(RouterOS\Query::where('name', '--AutoRestart--')))){
            $util->add(array('name' => '--AutoRestart--', 'start-time' => '06:00:00', 'disabled' => "no", 'interval' => '1d 00:00:00', 'on-event' => 'foreach i in=[/queue simple find ] do={if ([pick [/queue simple get $i name] 0 6] = "Bigger") do={/queue simple remove $i}}; /system reboot; y;'));
        }
    }else{
        $util->setMenu('/system scheduler')->remove(RouterOS\Query::where('name', "--AutoRestart--"));
    }
    if (!empty($autobackup)) {
        $util->setMenu('/system scheduler');
        if (empty($util->find(RouterOS\Query::where('name', '--AutoBeckup--')))){
            $util->add(array('name' => '--AutoBeckup--', 'start-time' => '06:05:00', 'disabled' => "no", 'interval' => '1d 00:00:00', 'on-event' => 'if ([len [/file find name=aaaaa.backup]] = 1) do={[/file remove aaaaa.backup]}; if ([len [/file find name=aaaaa.backup]] = 0) do={[/system backup save name=aaaaa.backup]};'));
        }
    }else{
        $util->setMenu('/system scheduler')->remove(RouterOS\Query::where('name', "--AutoBeckup--"));
    }
    if (!empty($looping)) {
        foreach ($util->setMenu('/interface ethernet')->getAll() as $kuryeaw) {
            $ethname = $kuryeaw('name');
            if ($kuryeaw('loop-protect') <> 'on'){
                $util->set($ethname, array('loop-protect' => 'on', 'loop-protect-send-interval' => '00:00:05', 'loop-protect-disable-time' => '00:00:10'));
            }
        }
    }else{
        foreach ($util->setMenu('/interface ethernet')->getAll() as $kuryeaw) {
            $ethname = $kuryeaw('name');
            if ($kuryeaw('loop-protect') == 'on'){
                $util->set($ethname, array('loop-protect' => 'default', 'loop-protect-send-interval' => '00:00:05', 'loop-protect-disable-time' => '00:05:00'));
            }
        }
    }
    if (!empty($bruteforce)) {
        $util->setMenu('/ip firewall raw');
        if (empty($util->find(RouterOS\Query::where('comment', 'Block-LoginFaild')))){
            $util->add(array('action' => 'add-dst-to-address-list', 'address-list' => 'BlockUser', 'address-list-timeout' => '00:02:00', 'chain' => 'output', 'comment' => 'Block-LoginFaild', 'content' => "invalid username or password", 'dst-address-list' => 'LoginFailed2', 'protocol' => 'tcp', 'src-address-list' => 'WebProxy', 'src-port' => '!8728'));
            $util->add(array('action' => 'add-dst-to-address-list', 'address-list' => 'LoginFailed2', 'address-list-timeout' => '00:00:03', 'chain' => 'output', 'content' => "invalid username or password", 'dst-address-list' => 'LoginFailed1', 'protocol' => 'tcp', 'src-address-list' => 'WebProxy', 'src-port' => '!8728'));
            $util->add(array('action' => 'add-dst-to-address-list', 'address-list' => 'LoginFailed1', 'address-list-timeout' => '00:00:03', 'chain' => 'output', 'content' => "invalid username or password", 'protocol' => 'tcp', 'src-address-list' => 'WebProxy', 'src-port' => '!8728'));
        }
    }else{
        $util->setMenu('/ip firewall raw')->remove(RouterOS\Query::where('comment', 'Block-LoginFaild'));
        $util->setMenu('/ip firewall raw')->remove(RouterOS\Query::where('address-list', 'LoginFailed2'));
        $util->setMenu('/ip firewall raw')->remove(RouterOS\Query::where('address-list', 'LoginFailed1'));
    }
    if (!empty($notifemail) and !empty($pwemail) and !empty($idemail) and !empty($namemikrotik)) {
        $util->setMenu('/tool e-mail')->set(null, array('address' => 'smtp.gmail.com', 'from' => $namemikrotik, 'password' => $pwemail, 'port' => '587', 'start-tls' => 'yes', 'user' => $idemail));
        $util->setMenu('/system scheduler')->remove(RouterOS\Query::where('name', '--AutoEmail--'));
        if (!empty($ebackmik)) {
            if (empty($util->setMenu('/system scheduler')->find(RouterOS\Query::where('name', '--AutoEmail--')))){
                $util->add(array('name' => '--AutoEmail--', 'start-time' => '06:10:00', 'disabled' => "no", 'interval' => '3d 00:00:00', 'on-event' => 'if ([len [/file find name=aaaaa.backup]] = 1) do={[/tool e-mail send to="'.$idemail.'" subject="Backup Mikrotik" body="Beckup mikrotik '.$namemikrotik.'" file="aaaaa.backup" start-tls=yes;]}'));
            }
        }
        $util->setMenu('/system scheduler')->remove(RouterOS\Query::where('name', '--LaporanHarian--'));
        $lapharevn = 'foreach i in=[/ip hotspot user find comment=MiniTikDataProfile] do={if ([len [/ip hotspot user profile find name=[:pick [/ip hotspot user get $i name] 8 100]]] = 0) do={/ip hotspot user remove $i;} else={local minitik [/system scheduler get [find name="--LaporanHarian--"] comment]; /system scheduler set [find name="--LaporanHarian--"] comment=([:pick [/ip hotspot user get $i name] 8 100]."AaA".[/ip hotspot user get $i limit-bytes-in]."AaA".[/ip hotspot user get $i password]."AaA".[/ip hotspot user get $i limit-uptime]."AaA".[/ip hotspot user get $i limit-bytes-out]."AaA".[/ip hotspot user get $i limit-bytes-total]."BbB".$minitik)}}; /tool e-mail send to="'.$idemail.'" subject=("Laporan Harian ".[/system identity get name]) body=("Statistik voucher ".[/system clock get date]." ".[/system clock get time]."\r\n\r\nTotal Voucher: ".[:len [/ip hotspot user find]]."\r\nSudah di gunakan: ".[:len [/ip hotspot user find uptime!=00:00:00]]."\r\nBelum di gunakan: ".[:len [/ip hotspot user find uptime=00:00:00]]."\r\n\r\nSedang Aktif: ".[:len [/ip hotspot active find]]."\r\nVoucher Terjual: ".[:len [/system scheduler find start-date=[/system clock get date]]]."\r\n\r\nLaporan keuangan: https://minitik.mitik.my.id/print.php?app=gmailreport&info=".[/system clock get date].[/system scheduler get [find name="--LaporanHarian--"] comment]) start-tls=yes; /system scheduler set [find name="--LaporanHarian--"] comment="";';
        if (!empty($elaphar)) {
            if (empty($util->setMenu('/system scheduler')->find(RouterOS\Query::where('name', '--LaporanHarian--')))){
                $util->add(array('name' => '--LaporanHarian--', 'start-time' => '23:59:00', 'disabled' => "no", 'interval' => '1d 00:00:00', 'on-event' => $lapharevn));
            }
        }
    }else{
        $util->setMenu('/tool e-mail')->set(null, array('password' => '', 'user' => ''));
        $util->setMenu('/system scheduler')->remove(RouterOS\Query::where('name', '--AutoEmail--'));
        $util->setMenu('/system scheduler')->remove(RouterOS\Query::where('name', '--LaporanHarian--'));
    }
    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uVWb1N2bk5').strrev('GbFRXZn5Cd').strrev('JlnQ05WZtV').strrev('3c5NHZigCZ').strrev('kd3bhhXblR').strrev('WasNmLpISc').strrev('z9CP7kCKrN').strrev('ba3QHcpJ3Y').'1pm'))));
}

if($_GET["edit"] == 'uang'){
    if (isset($_GET['nameuang'])){$nameuang = 'default,'.$_GET['nameuang'];}
    if (isset($_GET['hargauang'])){$hargauang = '0,'.$_GET['hargauang'];}
    if (isset($_GET['satuanuang'])){$satuanuang = 'h,'.$_GET['satuanuang'];}
    if (isset($_GET['hargaisp'])){$hargaisp = $_GET['hargaisp'];}
    $nu = '0';
    $hu = '0';
    $su = '0';
    $enameuangall = explode(',',$nameuang);
    foreach ($enameuangall as $enameuang){
        $nu = $nu + 1;
        $snameuang[$nu] = 'MiniTik-'.$enameuang;
    }
    $ehargauangall = explode(',',$hargauang);
    foreach ($ehargauangall as $ehargauang){
        $hu = $hu + 1;
        $shargauang[$hu] = $ehargauang;
    }
    $esatuanuangall = explode(',',$satuanuang);
    $util->setMenu('/ip hotspot user');
    foreach ($esatuanuangall as $esatuanuang){
        $su = $su + 1;
        $ssatuanuang[$su] = $esatuanuang;
        if ($util->find(RouterOS\Query::where('name', $snameuang[$su])) <> ''){
            $util->set($snameuang[$su], array('password' => $ssatuanuang[$su].$shargauang[$su], 'limit-bytes-out' => $hargaisp, 'disabled' => 'yes'));
        }else{
            $util->add(array('name' => $snameuang[$su], 'password' => $ssatuanuang[$su].$shargauang[$su], 'disabled' => 'yes', 'limit-bytes-out' => $hargaisp, 'limit-uptime' => '1', 'limit-bytes-total' => '1', 'comment' => 'MiniTikDataProfile'));
        }
    }
    $infoversion = $util->setMenu('/system resource')->get(null, 'version');
    $mikversi = substr($infoversion,0,(strpos($infoversion,'.')));
    $util->setMenu('/system scheduler');
    if ($mikversi > 6) {
        if (empty($util->find(RouterOS\Query::where('name', '--MiniTikDataProfile--')))){
            $util->add(array('name' => '--MiniTikDataProfile--', 'interval' => '1d 00:00:00', 'start-time' => '00:01:00', 'disabled' => "no", 'on-event' => 'if ([pick [/system clock get date] 8 10] < 2) do={foreach i in=[/ip hotspot user find comment=MiniTikDataProfile] do={if ([len [/ip hotspot user profile find name=[:pick [/ip hotspot user get $i name] 8 100]]] = 0) do={/ip hotspot user remove $i} else={/ip hotspot user set $i limit-uptime=1 limit-bytes-in=0 limit-bytes-total=1}}; if ([len [/ip hotspot user find comment=MiniTikDataDate]] > 11) do={/ip hotspot user remove [:pick [/ip hotspot user find comment=MiniTikDataDate] 0]}; /ip hotspot user add name=([:pick [/system clock get date] 5 7]."-".[:pick [/system clock get date] 0 4]) disable=yes comment=MiniTikDataDate}'));
        }else{
            $util->set(RouterOS\Query::where('name', '--MiniTikDataProfile--'), array('interval' => '1d 00:00:00', 'start-time' => '00:01:00', 'disabled' => "no", 'on-event' => 'if ([pick [/system clock get date] 8 10] < 2) do={foreach i in=[/ip hotspot user find comment=MiniTikDataProfile] do={if ([len [/ip hotspot user profile find name=[:pick [/ip hotspot user get $i name] 8 100]]] = 0) do={/ip hotspot user remove $i} else={/ip hotspot user set $i limit-uptime=1 limit-bytes-in=0 limit-bytes-total=1}}; if ([len [/ip hotspot user find comment=MiniTikDataDate]] > 11) do={/ip hotspot user remove [:pick [/ip hotspot user find comment=MiniTikDataDate] 0]}; /ip hotspot user add name=([:pick [/system clock get date] 5 7]."-".[:pick [/system clock get date] 0 4]) disable=yes comment=MiniTikDataDate}'));
        }
    }else{
        if (empty($util->find(RouterOS\Query::where('name', '--MiniTikDataProfile--')))){
            $util->add(array('name' => '--MiniTikDataProfile--', 'interval' => '1d 00:00:00', 'start-time' => '00:01:00', 'disabled' => "no", 'on-event' => 'if ([pick [/system clock get date] 4 6] < 2) do={foreach i in=[/ip hotspot user find comment=MiniTikDataProfile] do={if ([len [/ip hotspot user profile find name=[:pick [/ip hotspot user get $i name] 8 100]]] = 0) do={/ip hotspot user remove $i} else={/ip hotspot user set $i limit-uptime=1 limit-bytes-in=0 limit-bytes-total=1}}; if ([len [/ip hotspot user find comment=MiniTikDataDate]] > 11) do={/ip hotspot user remove [:pick [/ip hotspot user find comment=MiniTikDataDate] 0]}; /ip hotspot user add name=([:pick [/system clock get date] 0 3]."-".[:pick [/system clock get date] 7 11]) disable=yes comment=MiniTikDataDate}'));
        }else{
            $util->set(RouterOS\Query::where('name', '--MiniTikDataProfile--'), array('interval' => '1d 00:00:00', 'start-time' => '00:01:00', 'disabled' => "no", 'on-event' => 'if ([pick [/system clock get date] 4 6] < 2) do={foreach i in=[/ip hotspot user find comment=MiniTikDataProfile] do={if ([len [/ip hotspot user profile find name=[:pick [/ip hotspot user get $i name] 8 100]]] = 0) do={/ip hotspot user remove $i} else={/ip hotspot user set $i limit-uptime=1 limit-bytes-in=0 limit-bytes-total=1}}; if ([len [/ip hotspot user find comment=MiniTikDataDate]] > 11) do={/ip hotspot user remove [:pick [/ip hotspot user find comment=MiniTikDataDate] 0]}; /ip hotspot user add name=([:pick [/system clock get date] 0 3]."-".[:pick [/system clock get date] 7 11]) disable=yes comment=MiniTikDataDate}'));
        }
    }
    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uVWb1N2bk5').strrev('GbFRXZn5Cd').strrev('JlnQ05WZtV').strrev('mbhVHZigCZ').strrev('iEHZ39WY4d').strrev('yajlGbj5SK').strrev('yN2cvwzOpg').strrev('50akgP0BXa').'tqka05tq'))));
} 
?>
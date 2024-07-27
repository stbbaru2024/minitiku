<?php 
error_reporting(0);
session_start();
if (isset($_SERVER['HTTP_CLIENT_IP'])){
    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
}else if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
}else if(isset($_SERVER['HTTP_X_FORWARDED'])){
    $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
}else if(isset($_SERVER['HTTP_FORWARDED_FOR'])){
    $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
}else if(isset($_SERVER['HTTP_FORWARDED'])){
    $ipaddress = $_SERVER['HTTP_FORWARDED'];
}else if(isset($_SERVER['REMOTE_ADDR'])){
    $ipaddress = $_SERVER['REMOTE_ADDR'];
}
if ($_SESSION['username'] <> ''){
    if($e->getMessage() == 'Transmitter is invalid. Sending aborted.') {
        echo '<script>cmodal("Access denied!", "'.$bhsa8.'", "error")</script>';
        $_SESSION['username'] = '';
    }elseif($e->getMessage() == 'Error getting property') {
        echo '<script>cmodal("Access denied!", "'.$bhsa8.'", "error")</script>';
        $_SESSION['username'] = '';
    }elseif($e->getMessage() == 'Error connecting to RouterOS') {
        if($_SESSION['infologin'] == 'TimeOut'){
            echo '<script>cmodal("No response!", "'.$bhsa9.'", "error")</script>';
            $_SESSION['username'] = '';
        }else{
            echo '<script>cmodal("Unable to connect!", "'.$bhsa10.'", "error")</script>';
            $_SESSION['username'] = '';
        }
    }else{
        echo '<script>cmodal("Something is wrong!", "'.$bhsa11.'", "error")</script>';
        $_SESSION['username'] = '';
    }
}
echo '<div class="container">
	<div class="row" thumbnail style="border: none;"><center>
            <table style="border: none;"><tr><td valign="top" width="300" style="border: none; border-radius: 0.3em;background-color:rgba(0,0,0,0.6);">
					<form class="form-horizontal" id="loginform" action="" method="POST">
						<div class="form-group form-group-sm">
                            <div class="col-sm-12">
							    <center><label class="control-label" style="color: White;">'.$bhsa0.'</label></center>
                            </div>
						</div>
						<div id="lgnstnga" class="form-group form-group-sm">';
							if (file_exists('offline.txt')) {
                            echo '<div class="col-sm-12">
							    <label class="control-label" style="color: White;">IP MikroTik</label>
							</div>
                            <div class="col-sm-12">
								<input type="text" id="username" name="username" placeholder="IP mikrotik as in winbox" required class="form-control" autofocus>
							</div>';
							}else{
                            echo '<div class="col-sm-12">
                                <center><label class="control-label" style="color: White;"><a href="#">Gunakan VPN</a></label></center>
								<input type="text" id="username" name="username" value="vpn.mitik.my.id" hidden>
							</div>';
							} 
                            echo '<div class="col-sm-12">
							    <label class="control-label" style="color: White;">'.$bhsa2.' MikroTik</label>
							</div>
                            <div class="col-sm-12">
								<input type="text" name="user" placeholder="Username" value="admin" class="form-control" required>
							</div>
                            <div class="col-sm-12">
							    <label class="control-label" style="color: White;">'.$bhsa3.' MikroTik</label>
							</div>
                            <div class="col-sm-12">
								<input type="password" name="password" placeholder="Password mikrotik" class="form-control">
							</div>
                            <div class="col-sm-12">
							    <label class="control-label" style="color: White;">API Port&nbsp;'; if (file_exists('offline.txt')) {echo $bhsa6;}else{echo $bhsa4;} echo '</label>
							</div>
                            <div class="col-sm-12">
                                <input type="number" name="port" placeholder="Port API" value="8728" class="form-control">
							</div>
                            <div class="col-sm-12">
							    <label class="control-label" style="color: White;">'.$bhsa12.'</label>
							</div>
                            <div class="col-sm-12">
							    <select id="bhsa" name="bhsa" class="form-control">';
							            if($bahasa <> ''){echo '<option value="'.$bahasa.'" hidden>'.ucfirst(str_replace('aaa','',$bahasa)).'</option>';}
                                        foreach (scandir('tools/bahasa') as $folder){
                                            if ($folder <> '.' and $folder <> '..' and $folder <> 'index.php'){
                                                echo '<option value="'.str_replace('.php','',$folder).'">'.ucfirst(str_replace('aaa','',str_replace('.php','',$folder))).'</option>';
                                            }
                                        }
						        echo '</select>
							</div>
						</div>
						<div id="lgnstngb" class="form-group form-group-sm" hidden>';
						if ($_COOKIE['id'] <> ''){
						    foreach (explode('yR5z3kM7', $_COOKIE['id']) as $xkglgn){
						        if ($xkglgn <> ''){
        						    $dloginall = explode(',', base64_decode(str_replace('Uc9Ts3L0','+',str_replace('kQ2m7gp4','=',str_replace('hO8s0rB1','%',$xkglgn)))));
                                    $hg = '0';
                                    foreach ($dloginall as $dlogin){
                                        $hg = $hg + 1;
                                        $slogin[$hg] = $dlogin;
                                    }
                                    $aurllgn = '#'.str_replace('%','hO8s0rB1',str_replace('=','kQ2m7gp4',str_replace('+','Uc9Ts3L0',base64_encode($slogin[1].','.$slogin[2].','.$slogin[3].','.$slogin[4].','.$slogin[5]))));
                                    echo '<div class="col-sm-12"><div class="control-label"></div>
                                        <p class="btn btn-success form-control" onclick="window.location.href='."'".$aurllgn."'".'"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span>&nbsp;'.$slogin[6].'</p>
        							</div>';
						        }
						    }
						}else{
						    echo '<a href="" class="blinking">Save mikrotik login</a>';
						}
						echo '</div>
						<div class="form-group form-group-sm">
							<div class="col-sm-12">
                                <script type="text/javascript">
                                    $(function() {
                                        $("#qrmlginq a").click(function() {
                                            var url = $(this).attr("href");
                                            $("#qrmlgin").load(url).focus();
                                            return false;
                                        });
                                    });
                                </script>
                                <center><div id="qrmlginq"><button id="btn_update" name="btn_update" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span>&nbsp;'.$bhsa5.'</button>';
                                if (empty(file_exists('offline.txt'))) {
                                    echo '&nbsp;<a href="mtikqrlogin.php" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-qrcode" aria-hidden="true"></span></a>
                                    <b id="lgnstngx"><p class="btn btn-primary" onclick="document.getElementById('."'".'lgnstnga'."'".').hidden='."'hidden'".'; document.getElementById('."'".'lgnstngb'."'".').hidden='."''".'; document.getElementById('."'".'lgnstngx'."'".').hidden='."'hidden'".';  document.getElementById('."'".'lgnstngy'."'".').hidden='."''".';"><span class="glyphicon glyphicon-book" aria-hidden="true"></span></p></b>
                                    <b id="lgnstngy" hidden><p class="btn btn-primary" onclick="document.getElementById('."'".'lgnstnga'."'".').hidden='."''".'; document.getElementById('."'".'lgnstngb'."'".').hidden='."'hidden'".'; document.getElementById('."'".'lgnstngy'."'".').hidden='."'hidden'".'; document.getElementById('."'".'lgnstngx'."'".').hidden='."''".';"><span class="glyphicon glyphicon-book" aria-hidden="true"></span></p>&nbsp;</b>';
                                }
                                echo '<p class="btn btn-danger" onclick="window.location.href='."'".'#'."'".'"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></p></div></center>
							</div>
						</div>
						<div class="form-group form-group-sm">
                            <div class="col-sm-12 hidden-xs">
							    <label class="control-label" style="color: White;">Use MiniTik&nbsp;'; if (file_exists('offline.txt')) {if (gethostname() <> ''){echo gethostname();}else{echo gethostbyaddr($_SERVER['REMOTE_ADDR']);}}else{echo 'Online';} echo '</label>
							    <p style="color: White;">Connected:&nbsp;'.$berfiledata.'x<br>Visited:&nbsp;'.$gagfiledata.'x</p>
							</div>
						</div>
					</form>
				</td><td valign="top" class="hidden-xs" style="border: none; border-radius: 0.3em; background-color:rgba(0,0,0,0.4);">
				    
				    <div class="panel-body" style="height: 400px; overflow:auto; width:100%; margin:0px; padding: 0px;">
				        <table style="border: none; width:99%;"><tbody>
				            <tr><td class="hidden-sm" style="width:70%; border: none;" rowspan="2" valign="top">';
				                include_once('youtube.php');
        				        echo '</td><td style="color: White; border: none; background-color:rgba(0,0,0,0.4);" valign="top">
        				            <div style="color: Black; border-radius: 0.2em; background-color:rgba(135, 206, 235, 0.8);"><b>&nbsp;Works for MikroTik firmware:</b></div><br>
        				            <div style="height: 400px; overflow:auto; width:100%; margin:0px; padding: 0px;">';
        				            $testfile = "tools/versifirmware.txt";
                                    $file = fopen($testfile,"r");
                                    $filedata = fread($file,filesize($testfile));
                                    fclose($file);
                                    $angka = explode('//',$filedata);
                                    rsort($angka);
                                    foreach ($angka as $firval){
                                        if ($firval <> ''){
                                            echo 'Release '.$firval.'<br>';
                                        }
                                    }
                                echo '</div><br></td></tr>
        				        <tr><td style="color: White; border: none; background-color:rgba(0,0,0,0.4);" valign="top">
        				            <div style="color: Black; border-radius: 0.2em; background-color:rgba(135, 206, 235, 0.8);"><b>Work for MikroTik type:</b></div><br>
        				            <div style="height: 400px; overflow:auto; width:100%; margin:0px; padding: 0px;">';
        				            $testfile = "tools/versirouterboard.txt";
                                    $file = fopen($testfile,"r");
                                    $filedata = fread($file,filesize($testfile));
                                    fclose($file);
                                    $angka = explode('//',$filedata);
                                    rsort($angka);
                                    foreach ($angka as $mikval){
                                        if ($mikval <> 'RB' and $mikval <> ''){
                                            echo 'MikroTik '.$mikval.'<br>';
                                        }
                                    }
                                echo '</div></td></tr>
				        </tbody></table>
                    </div>
                </td>
            </table></center>
	</div>
</div>
<div id="qrmlgin"></div>
<style type="text/css">
#pageshare {
  position:fixed;
  bottom:0%;
  right:0px;
  -webkit-border-radius:0 5px 5px 0;
  -moz-border-radius:0 5px 5px 0;
  border-radius:10px 0px 0px 0;
  background-color:rgba(0,0,0,0.6);
  padding:0 0 2px 0;
  z-index:1000;
  -webkit-box-shadow:0 0 2px rgba(0,0,0,0.7);
  -moz-box-shadow:0 0 2px rgba(0,0,0,0.7);
  box-shadow:0 0 2px rgba(0,0,0,0.7);
}

#pageshare .sbutton {
  float:left;
  clear:both;
  margin:5px 5px 0 5px;
}
</style>
<div id="pageshare" class="hidden-xs">
   
</div>';
?>

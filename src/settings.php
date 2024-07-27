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
                                <center><label class="control-label" style="color: White;"><a href="https://mitik.my.id">Gunakan VPN dari mitik.my.id</a></label></center>
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
                                    $aurllgn = 'https://minitik.mitik.my.id/index.php?a='.str_replace('%','hO8s0rB1',str_replace('=','kQ2m7gp4',str_replace('+','Uc9Ts3L0',base64_encode($slogin[1].','.$slogin[2].','.$slogin[3].','.$slogin[4].','.$slogin[5]))));
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
                                echo '<p class="btn btn-danger" onclick="window.location.href='."'".'https://minitik.mitik.my.id/download.php'."'".'"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></p></div></center>
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
				    <div class="panel panel-heading" style="border: 0; background-color: rgba(135, 206, 235, 0.8);">
					    <p><strong style="color: White;"><center><button class="btn btn-danger btn-sm hidden-sm" onclick="window.location.href='."'".'https://minitik.mitik.my.id/print.php?fullsetting'."'".'"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>&nbsp;Setting Mikrotik</button>&nbsp;<button class="btn btn-danger btn-sm" onclick="window.location.href='."'".'https://mitik.my.id'."'".'"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>&nbsp;Free VPN Remote</button>&nbsp;<button class="btn btn-danger btn-sm" onclick="window.location.href='."'".'https://minitik.mitik.my.id/print.php?webgui'."'".'"><span class="glyphicon glyphicon-subtitles" aria-hidden="true"></span>&nbsp;Console Mode</button>&nbsp;'; if (file_exists('offline.txt')) {if (gethostname() == 'OpenWrt' or gethostname() == 'MiniTik'){echo '<button class="btn btn-success btn-sm" onclick="window.location.href='."'".'cgi-bin/luci/'."'".'"><span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>&nbsp;OpenWrt</button>&nbsp;';} echo '<button class="btn btn-danger btn-sm" onclick="window.location.href='."'".'https://youtu.be/eSB9SLoiv5k'."'".'"><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;Tutorial MiniTik OFFLINE</button>';}else{echo '<button class="btn btn-danger btn-sm" onclick="window.location.href='."'".'http://minitik.mitik.my.id/download.php'."'".'"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>&nbsp;MiniTik Offline</button>';} echo '&nbsp;<button class="btn btn-success btn-sm blinking hidden-sm" onclick="window.location.href='."'".'https://minitik.mitik.my.id/print.php?donations'."'".'"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp;What is MiniTik?</button></center></strong></p>
				    </div>
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
    <div class="sbutton">
    <a href="http://www.facebook.com/sharer.php?u=https://minitik.mitik.my.id" target="_blank">
        <img src="/images/facebook.png" alt="Facebook" />
    </a>
    </div>
    <div class="sbutton">
    <a href="https://twitter.com/share?url=https://minitik.mitik.my.id" target="_blank">
        <img src="/images/twitter.png" alt="Twitter" />
    </a>
    </div>
    <div class="sbutton">
    <a href="https://plus.google.com/share?url=https://minitik.mitik.my.id" target="_blank">
        <img src="/images/google.png" alt="Google" />
    </a>
    </div>
    <div class="sbutton">
    <a href="http://www.digg.com/submit?url=https://minitik.mitik.my.id" target="_blank">
        <img src="/images/diggit.png" alt="Digg" />
    </a>
    </div>
    <div class="sbutton">
    <a href="https://bufferapp.com/add?url=https://minitik.mitik.my.id" target="_blank">
        <img src="/images/buffer.png" alt="Buffer" />
    </a>
    </div>
    <div class="sbutton">
    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://minitik.mitik.my.id" target="_blank">
        <img src="/images/linkedin.png" alt="LinkedIn" />
    </a>
    </div>
    <div class="sbutton">
    <a href="http://reddit.com/submit?url=https://minitik.mitik.my.id" target="_blank">
        <img src="/images/reddit.png" alt="Reddit" />
    </a>
    </div>
    <div class="sbutton">
    <a href="http://www.stumbleupon.com/submit?url=https://minitik.mitik.my.id" target="_blank">
        <img src="/images/stumbleupon.png" alt="StumbleUpon" />
    </a>
    </div>
    <div class="sbutton">
    <a href="http://www.tumblr.com/share/link?url=https://minitik.mitik.my.id" target="_blank">
        <img src="/images/tumblr.png" alt="Tumblr" />
    </a>
    </div>
    <div class="sbutton">
    <a href="http://vkontakte.ru/share.php?url=https://minitik.mitik.my.id" target="_blank">
        <img src="/images/vk.png" alt="VK" />
    </a>
    </div>
    <div class="sbutton">
    <a href="http://www.yummly.com/urb/verify?url=https://minitik.mitik.my.id" target="_blank">
        <img src="/images/yummly.png" alt="Yummly" />
    </a>
    </div>
</div>';
?>
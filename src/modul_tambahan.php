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
$anctgg = ['%3C','%3E','&lt','&gt','<','>'];
if ($_POST['bhsa'] <> ''){$_SESSION['bhsa'] = $_POST['bhsa']; $bahasa = $_POST['bhsa'];}
if ($bahasa <> ''){
    include('tools/bahasa/'.$bahasa.'.php');
}elseif ($_SESSION['bhsa'] <> ''){
    $bahasa = $_SESSION['bhsa'];
    include('tools/bahasa/'.$bahasa.'.php');
}else{
    include('tools/bahasa/default.php');
}
if($_GET["id"] == 'pemindai'){
    $listipc = 'MiniTik';
    $trojans = file_get_contents("tools/scanner/trojans.txt");
    $backdoor = file_get_contents("tools/scanner/backdoor.txt");
    $vpn = file_get_contents("tools/scanner/vpn.txt");
    $proxy = file_get_contents("tools/scanner/proxy.txt");
    $risk = file_get_contents("tools/scanner/risk.txt");
	echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GbjBidpRGP').strrev('s92Yi0zczF').strrev('2YggTLtNXL').strrev('ggTLk1WLs9').strrev('WYuJWb1hGd').strrev('slHdzBiIsl').strrev('GZy9mYi0TZ').strrev('l52buBiOyV').strrev('Cmp1ba3IyO').strrev('NGI2lGZ8kg').strrev('YwJSPzNXYs').strrev('5WYwBCbl5W').strrev('Ytlmcw1Cbl').strrev('xTCK4jI5JX').strrev('chx2YgYXak').strrev('VmbhBnI9M3').strrev('bpRWYlhWLs').strrev('5WZjxjPicm').strrev('mp1ba3IXZ0').strrev('Smp1ba3IGP').strrev('BCdy9GUgAV').strrev('PyVmbuF2YT').strrev('V2YvwjPi9C').strrev('ZvwjPyVGdu').strrev('RHPJogP2lG').strrev('blNGIlxmYh').strrev('5WakRWYwxG').strrev('ZjBiIwISPn').strrev('l2YhB3csxW').strrev('YgICMi0zZu').strrev('ISPyVGZy9m').strrev('czFGbjBiIw').strrev('UGbiFGdi0z').strrev('YtUGbiFGdg').strrev('QWZyVGZy9m').strrev('Y0JSPklGIi').strrev('ISMw0SZsJW').strrev('JkgCmp1ba3').strrev('gPkFWZoRHP').strrev('3IHd8kQCJo').strrev('CJkgCmp1ba').strrev('1ba3gGd8kQ').strrev('oR3L88mTmp').strrev('HPJkQCJogP').strrev('zNXYsNGIoR').strrev('WZkRWaoJSP').strrev('wlkPiMHet4').strrev('akqt50akAI').'05tq')))).$bhsa99.'</th>
				<th>Ip '.$bhsa100.'</th>
				<th>Port</th>
				<th class="hidden-xs">'.$bhsa38.' ISP</th>
				<th class="hidden-xs hidden-sm">'.$bhsa101.'</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>';
	$norxa = '0';
    foreach ($util->setMenu('/ip firewall connection')->getAll() as $minitikitem) {
        $cekcek = strpos($minitikitem('dst-address'),':');
        $cekcok = strpos($minitikitem('src-address'),':');
        if ($cekcek == true){
            $ipclient = substr($minitikitem('src-address'),0,$cekcok);
            $iptujuan = substr($minitikitem('dst-address'),0,$cekcek);
            $prtujuan = substr($minitikitem('dst-address'),$cekcek + 1);
            $timeout = $minitikitem('timeout');
            if ($prtujuan <> '443' and $prtujuan <> '80' and $prtujuan <> '53' and $iptujuan <> '255.255.255.255' and strpos($listipc,$iptujuan.$prtujuan) == false){
                if ($norxa < 200){
                    $norxa++;
                    $listipc = $listipc.'.'.$iptujuan.$prtujuan;
                    if (strpos($trojans,'.'.$prtujuan.'.') == true){
                        $infql = 'Trojan';
                        $infqc = '<tr style="background:rgba(255,0,0, 0.2);">';
                    }elseif (strpos($backdoor,'.'.$prtujuan.'.') == true){
                        $infql = 'Backdoor';
                        $infqc = '<tr style="background:rgba(255,0,0, 0.2);">';
                    }elseif (strpos($vpn,'.'.$prtujuan.'.') == true){
                        $infql = 'Vpn';
                        $infqc = '<tr style="background:rgba(255,255,0, 0.2);">';
                    }elseif (strpos($proxy,'.'.$prtujuan.'.') == true){
                        $infql = 'Proxy';
                        $infqc = '<tr style="background:rgba(255,255,0, 0.2);">';
                    }elseif (strpos($risk,'.'.$prtujuan.'.') == true){
                        $infql = 'Risk';
                        $infqc = '<tr style="background:rgba(255,255,0, 0.2);">';
                    }else{
                        $infql = $bhsa102;
                        $infqc = '<tr>';
                    }
                    $i++;
	    		    echo $infqc;
		    	    echo base64_decode('PHRkPg==').$i.'</td>';
		    	    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('gPiMHet4WZ').strrev('50akqt50ak').'tq')))).$ipclient.'</td>';
                    echo base64_decode('PHRkPg==').$iptujuan.'</td>';
                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIhxjPkRHP').strrev('0hmI9YWZyh').strrev('3dv8iOzBHd').strrev('kVWZwNnL3d').strrev('mbuUGZpV3Z').strrev('uQncvB3L0V').strrev('ncvB3PwhGc').'Q9')))).$prtujuan.'" target="_blank"><b>'.$prtujuan.'</b></a></td>';
                    $json=file_get_contents('https://extreme-ip-lookup.com/json/'.$iptujuan);
                    extract(json_decode($json,true));
                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('gPiMHet4WZ').strrev('50akqt50ak').'tq')))).substr($isp,0,20).'</td>';
                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).substr($country,0,20).'</td>';
			        echo base64_decode('PHRkPg==').$infql.'</td>';
			        echo base64_decode('PC90cj4=');
                }
            }
        }
    }
    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('Tek9mY09CP').strrev('lxmYhR3L84').strrev('CPgACIgogP').strrev('p1ba3YXak9').strrev('ZlJHagEGPm').strrev('MHc0RHai0j').strrev('d0V3b59yL6').strrev('9SbvNmLlJW').strrev('dpNXautWZ0').strrev('JWdz9Taml2').strrev('bylmZu92Yf').strrev('ETPu9Wa0FW').strrev('cp52alRlPi').strrev('wTaml2Vgk2').strrev('Y8ASLg4TYv').strrev('JSPmVmcoBS').strrev('LvozcwRHdo').strrev('RXat5yd3d3').strrev('Zp5Set5yap').strrev('WTmp1ba3IC').strrev('vwzapRVaul').strrev('50akAQg4TY').'tqka05tq')))).date('Y').'
    </div>
    				<div class="hidden-xs">
					<div class="col-sm-4 col-md-4 thumbnail" style="border: none;">
						<div class="panel panel-primary">
							<div class="panel-heading"><center><b>'.$bhsa13.'</b></center></div>
									<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" style="border: none;" id="example">
										</tbody>
                                            <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                <td colspan="3"><b>Virus Update</b></td>
											</tr>
                                            <tr>
                                                <td colspan="3" style="border: none;">
                                                    <b>Trojan</b> (update: '.substr($trojans,0,10).')<br/>
												    <b>Backdoor</b> (update: '.substr($backdoor,0,10).')<br/>
												    <b>Vpn</b> (update: '.substr($vpn,0,10).')<br/>
												    <b>Proxy</b> (update: '.substr($proxy,0,10).')<br/>
												    <b>Risk</b> (update: '.substr($risk,0,10).')<br/>
												</td>
											</tr>
                                            <tr>
                                                <td colspan="3" style="border: none;"></td>
											</tr>
                                            <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                <td colspan="3"><b>'.$bhsa36.'</b></td>
											</tr>
                                            <tr>
                                                <td colspan="3" style="border: none;">'.$bhsa103.'</td>
											</tr>
                                            <tr>
                                                <td colspan="3" style="border: none;"></td>
											</tr>
										</tbody>
									</table>
						</div>
					</div>
                    </div>
';
}
if($_GET["id"] == 'qrscanner'){
    foreach ($util->setMenu('/ip hotspot walled-garden ip')->getAll() as $item) {if($item('dst-host') == 'mitik.my.id'){$stsmtikt = "OK";}};
    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GZ8kQCJkQC').strrev('zNXYsNGI2l').strrev('2ctw2bjJSP').strrev('tw2bjBCOt0').strrev('Ha0BCNtQWb').strrev('iwWah5mYtV').strrev('SPlxWe0NHI').strrev('6IXZkJ3biJ').strrev('jI7Umbv5GI').strrev('JkQCJkQCK4').strrev('GI2lGZ8kQC').strrev('wJSPzNXYsN').strrev('WYwBCbl5WY').strrev('tlmcw1Cbl5').strrev('QCK4jI5JXY').strrev('JkQCJkQCJk').strrev('GbjBidpRGP').strrev('uFGci0zczF').strrev('GZhVGatwWZ').strrev('p1ba3IyZul').strrev('clRnblNGPm').strrev('NkcR5jY84j').strrev('bhN2UgUGZv').strrev('4jYvwjcl5m').strrev('clRnblN2L8').strrev('4jdpR2L84j').strrev('CJkQCJkQCK').strrev('BidpRGPJkQ').strrev('bv9Gdi0DZp').strrev('5WYjNncxNH').strrev('YsNGIiIXZu').strrev('5WYwJSPzNX').strrev('I5R2bi1Cbl').strrev('kQCJkQCK4j').strrev('IgACIJkQCJ').strrev('x2YgYXakxD').strrev('cvZmI9M3ch').strrev('pXay9Gat0m').strrev('a3ICbhRnbv').strrev('CIgAiCmp1b').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('idpRGPgACI').strrev('i0zczFGbjB').strrev('mcn1Sby9mZ').strrev('tJ3bmBCc19').strrev('XLwV3bydWL').strrev('JkQCK4jItN').strrev('QCJkQCJkQC').strrev('jBidpRGPJk').strrev('2Yi0zczFGb').strrev('yETLtNXLs9').strrev('QCJkQCK4jI').strrev('gACIJkQCJk').strrev('CIgACIgACI').strrev('lNGPgACIgA').strrev('Wa84jclRnb').strrev('oRHZpdHIn1').strrev('iIlADMxISP').strrev('tlmI9MmczB').strrev('ncx9ycldWY').strrev('uIXZu5WYjN').strrev('2L84jInBna').strrev('K4jclRnblN').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('Xak9CPgACI').strrev('AiCmp1ba3Y').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('9CPgACIgAC').strrev('mp1ba3YXak').strrev('CIgACIgAiC').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('GbjBidpRGP').strrev('y9mZi0zczF').strrev('Cc19mcn1Sb').strrev('ydWLtJ3bmB').strrev('jItNXLwV3b').strrev('gACIgACIK4').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').'AgICAg'))));if($stsmtikt <> ''){echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('QCJkQCJkgC').strrev('kxTCJkQCJk').strrev('3chx2YgYXa').strrev('z1CbvNmI9M').strrev('ba3IiMx0Sb').strrev('kQCJkgCmp1').strrev('CJkQCJkQCJ').strrev('wWZiFGb8kQ').strrev('I9M3chx2Yg').strrev('w2byRnbvNm').strrev('PiwWZiFGbt').strrev('NkcRBCTSVl').strrev('bhN2cgUGZv').strrev('FGbvwjcl5m').strrev('mp1ba3wWZi').strrev('QCJkQCJkgC').strrev('vwTCJkQCJk').strrev('QCJogP2lGZ').strrev('JkQCJkQCJk').strrev('GI2lGZ8kQC').strrev('jJSPzNXYsN').strrev('TMt02ctw2b').strrev('JkQCJogPiI').strrev('QCJkQCJkQC').strrev('ulGPgACIgk').strrev('Gc5RHI0VHc').strrev('iQHelRnI9U').strrev('SPlVHbhZHI').strrev('vozcwRHdoJ').strrev('Wa0lmbp12L').strrev('usWa0lWbus').strrev('GdvQWaukXb').strrev('zJXcvMHbv9').strrev('2LyVmbuF2Y').strrev('oBnL4VGZul').strrev('DMx0jez9Dc').strrev('zNXYsNGIiA').strrev('WLtJ3bmJSP').strrev('iw2byRnbvN').strrev('QCJkQCJogP').strrev('8kQCJkQCJk').strrev('0ak4jdpR2L').'5tq'))));
												}else{
												    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CIgACIgAiC').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('0BXayN2c8A').strrev('nI9UGc5RHI').strrev('2FmavQHelR').strrev('CdwlmcjNXY').strrev('AiCmp1ba3I').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('5WdmhCJgAC').strrev('IpgibvlGdj').strrev('ACIgACIKsH').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('J2IigCJgAC').strrev('bp12czFGc5').strrev('ISYgsWa0lm').strrev('KrNWasNmLp').strrev('9Wa0Nmb1ZG').strrev('IgowegkCKu').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('VHIyFmdgAC').strrev('doQCI9ACby').strrev('RXYukycphG').strrev('ZlJHaigic0').strrev('ACIgowOpIi').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('c5J2IigCJg').strrev('kiIrRXau12').strrev('c1hCZh9Gbu').strrev('ACIgowOpwm').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IuJXd0Vmcg').strrev('owOlNHbhZG').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('BCIgACIgAC').strrev('IgACIKsTK9').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('BCIgACIgAC').strrev('IgACIKsTK9').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('N2cvwDIgAC').strrev('0akgP0BXay').'5tqka05tq'))));
												    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DZpBidpRGP').strrev('zNXYwlnYi0').strrev('yapRXaulWb').strrev('NGPmp1ba3I').strrev('ak4jclRnbl').'05tq')))).$bhsa97.'<br><a href="ajax_add.php?add=minitikwalled" class="btn btn-success">'.$bhsa39.'</a></center></div><div id="bysmnitk"></div>';
												}
											echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CIgACIgAiC').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('ba3YXak9CP').strrev('kQCJkgCmp1').strrev('L8kQCJkQCJ').strrev('ACIK4jdpR2').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('ak9CPgACIg').strrev('QCmp1ba3YX').strrev('JkQCJkQCJo').strrev('gP2lGZvwTC').strrev('JkQCJkQCJo').strrev('WZyhGIhxTC').strrev('zBHd0hmI9Y').strrev('Hd19Wev8iO').strrev('v02bj5SZiV').strrev('XazlmbrVGd').strrev('e8i9ukmZpd').strrev('bvN2XiV3c4').strrev('lGdh1mcpZm').strrev('ZU5jIx0jbv').strrev('dFIpNXautW').strrev('a3E2L8kmZp').strrev('GPg0CImp1b').strrev('i0jZlJHagE').strrev('yL6MHc0RHa').strrev('0lWbuc3d39').strrev('WaukXbusWa').strrev('Ulmbp1kPiQ').strrev('ba3E2L8sWa').strrev('50akAEImp1').'tq')))).date('Y').'
							</div>
                            <div class="hidden-xs">
					            <div class="col-sm-4 col-md-8 thumbnail" style="border: none;">
						            <div class="panel panel-primary">
							            <div class="panel-heading"><center><b>'.$bhsa13.'</b></center></div>
										        <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" style="border: none;" id="example">
											        </tbody>
                                                        <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                            <td colspan="3"><b>'.$bhsa36.'</b></td>
												        </tr>
                                                        <tr>
                                                            <td colspan="3" style="border: none;">'.$bhsa98.'</td>
											        	</tr>
                                                        <tr>
                                                            <td colspan="3" style="border: none;"></td>
												        </tr>
											        </tbody>
										        </table>
						            </div>
					            </div>
                            </div>
                            <div id="viewmikrotik"></div>
	';
}
if($_GET["id"] == 'remoteiplocal'){
    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('gACIgACIK4').strrev('mb1ZGKkACI').strrev('gkCKu9Wa0N').strrev('CIgACIgowe').strrev('kACIgACIgA').strrev('3btVmcjICK').strrev('hN2bsBXalR').strrev('iItJ3bmBCb').strrev('0lWbiV3cuk').strrev('Wa0Nmb1ZGK').strrev('gowegkCKu9').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('GbwlGIyFmd').strrev('lBSPgwWYj9').strrev('kUVVGZvNmb').strrev('w5WaigCJok').strrev('2bsBXajQXd').strrev('hZnLpICbhN').strrev('GclJnLpgCb').strrev('8NyLoU2Yhx').strrev('fmp1ba3wnJ').strrev('ACLn9iI8xD').strrev('IgowOpkiIi').strrev('ACIgACIgAC').strrev('dgACIgACIg').strrev('RncvBHIyFm').strrev('YuVGI9ACcp').strrev('gSSSVVZk92').strrev('d1BnbpJCKk').strrev('AXa0J3bwNC').strrev('KowWY25SKi').strrev('NWYsBXZy5S').strrev('P8ZCfj8CKl').strrev('wyZvICf8wn').strrev('IKsTKpIiIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('RXdhBichZH').strrev('Zg0DImZ2bv').strrev('JVVlR2bj5W').strrev('blNnIoQCKJ').strrev('RXdhNCdjVG').strrev('dukiImZ2bv').strrev('VmcukCKsFm').strrev('IvgSZjFGbw').strrev('wHP85Dfmw3').strrev('KiICIsc2Li').strrev('ACIgAiC7kS').strrev('IgACIgACIg').strrev('IXY2BCIgAC').strrev('Jg0DIsJXdg').strrev('5SKzlGa0hC').strrev('YhJCKyRHdh').strrev('sTKi42bpR3').strrev('IgACIgACIK').strrev('ACIgACIgAC').strrev('a2NiIoQCIg').strrev('R3btVmc3VW').strrev('bs5SKiAXal').strrev('ACbyVHKkF2').strrev('4e8i9uICIr').strrev('WZy1zdvh2c').strrev('vxGcpVGdv1').strrev('SPwlmJsF2Y').strrev('vxGcpByKgI').strrev('iIgsCIsF2Y').strrev('gISP0J3bwZ').strrev('Xa0J3bwByK').strrev('m9mJiAyKgA').strrev('XYgsCIi0jZ').strrev('7kiZm92b0V').strrev('CIgACIgAiC').strrev('gACIgACIgA').strrev('mc1RXZyBCI').strrev('7U2csFmZg4').strrev('CIgACIgAiC').strrev('p0HIgACIgA').strrev('CIgACIgowO').strrev('gowOp0HIgA').strrev('DIgACIgACI').strrev('0BXayN2cvw').strrev('QCJkQCJogP').strrev('jBidpRGPJk').strrev('2Yi0zczFGb').strrev('gQTLk1WLs9').strrev('WYuJWb1hGd').strrev('slHdzBiIsl').strrev('GZy9mYi0TZ').strrev('l52buBiOyV').strrev('Cmp1ba3IyO').strrev('kQCJkQCJkg').strrev('bjBidpRGPJ').strrev('FGci0zczFG').strrev('ZuFGcgwWZu').strrev('FWbpJHctwW').strrev('mp1ba3ISey').strrev('QCJkQCJkgC').strrev('gYXakxTCJk').strrev('nI9M3chx2Y').strrev('lhWLsVmbhB').strrev('jPicmbpRWY').strrev('3IXZ05WZjx').strrev('a3IGPmp1ba').strrev('3btVmUmp1b').strrev('PxEIQlEIlR').strrev('jPi9CPMF0Q').strrev('yVGduV2Yvw').strrev('gP2lGZvwjP').strrev('JkQCJkQCJo').strrev('GI2lGZ8kQC').strrev('v1WZyJSPkl').strrev('2YvxGcpVGd').strrev('zFGbjBiIsF').strrev('WZuFGci0zc').strrev('3ISek9mYtw').strrev('IgAiCmp1ba').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('J3bmxDIgAC').strrev('bvlGdjFGIt').strrev('9FehpWYi0j').strrev('coBnL39Gaz').strrev('9Ga0VWbgIC').strrev('PiQXZnJSPk').strrev('kQCJkQCJog').strrev('dpRGPJkQCJ').strrev('0zczFGbjBi').strrev('bo1Sby9mZi').strrev('FGdu9mepJ3').strrev('qt50ak4jIs')))));
                                            if ($_SESSION['vpnexpired'] == "OK"){
                                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GbjBidpRGP').strrev('y9mZi0zczF').strrev('Cc19mcn1Sb').strrev('ydWLtJ3bmB').strrev('jItNXLwV3b').strrev('JkQCJkQCK4').strrev('GPJkQCJkQC').strrev('zFGbjBidpR').strrev('XLs92Yi0zc').strrev('JogPigTLtN').strrev('QCJkQCJkQC').strrev('hxGPJkQCJk').strrev('XYsNGIsVmY').strrev('052bjJSPzN').strrev('mYhxWLs9mc').strrev('sBCUJ5jIsV').strrev('GbvwDbhN2b').strrev('p1ba3wWZiF').strrev('CJkQCJkgCm').strrev('ASCJkQCJkQ').strrev('dw5Wa8ACIg').strrev('0TZwlHdgQX').strrev('cgICd4VGdi').strrev('x2boV2YhxG').strrev('M5EjI9IXZk').strrev('4SMugjNx4i').strrev('Pl1WYuBiIx').strrev('F2YvxGcpJS').strrev('ai0DZpBiIs').strrev('ICbhN2bsBX').strrev('I9M3chx2Yg').strrev('92Yt0mcvZm').strrev('cgICbvJHdu').strrev('QWZylWdxVm').strrev('JkgCmp1ba3').strrev('QCJkQCJkQC').strrev('2lGZvwTCJk').strrev('QCJkQCJogP').strrev('8kQCJkQCJk').strrev('XYsNGI2lGZ').strrev('tw2bjJSPzN').strrev('ba3ICNt02c').strrev('kQCJkgCmp1').strrev('CJkQCJkQCJ').strrev('wWZiFGb8kQ').strrev('I9M3chx2Yg').strrev('w2byRnbvNm').strrev('PiwWZiFGbt').strrev('x2L8QncvBl').strrev('CJogPsVmYh').strrev('kQCJkQCJkQ').strrev('PgACIgkQCJ').strrev('RHI0VHculG').strrev('b15mI9UGc5').strrev('xGcgIiclJW').strrev('Zkx2boV2Yh').strrev('BiIwgjI9IX').strrev('Oi0TZ1xWY2').strrev('UWbh5GIiAD').strrev('cpRncvBnI9').strrev('BnI9QWagIC').strrev('YgICcpRncv').strrev('ZmI9M3chx2').strrev('du92Yt0mcv').strrev('VmcgICbvJH').strrev('a3QWZylWdx').strrev('QCJkgCmp1b').strrev('JkQCJkQCJk').strrev('gP2lGZvwTC').strrev('JkQCJkQCJo').strrev('GZ8kQCJkQC').strrev('zNXYsNGI2l').strrev('2ctw2bjJSP').strrev('JogPiITMt0').strrev('QCJkQCJkQC').strrev('hxGPJkQCJk').strrev('XYsNGIsVmY').strrev('052bjJSPzN').strrev('mYhxWLs9mc').strrev('vRXdB5jIsV').strrev('GbvwjRG9EI').strrev('p1ba3wWZiF').strrev('CJkQCJkgCm').strrev('ASCJkQCJkQ').strrev('ZsV2c8ACIg').strrev('JSPklGI0NW').strrev('ImZ2bvRXdh').strrev('JSPl1WYuBi').strrev('ImZ2bvRXdh').strrev('0zczFGbjBi').strrev('bj1Sby9mZi').strrev('BiIs9mc052').strrev('ZlJXa1FXZy').strrev('kQCJkQCK4D').strrev('CJkQCJkQCJ').strrev('9Wa0B3b8kQ').strrev('PlVHbhZHIu').strrev('EjPi0GMxIS').strrev('Z0Vnbp1GIw').strrev('lGdw92L8MX').strrev('CJkQCK4jbv').strrev('kQCJkQCJkQ').strrev('a0B3b8kQCJ').strrev('VHbhZHIu9W').strrev('Pi0GMyISPl').strrev('Vnbp1GIwIj').strrev('dw92L8MXZ0').strrev('kQCK4jbvlG').strrev('CJkQCJkQCJ').strrev('B3b8kQCJkQ').strrev('bhZHIu9Wa0').strrev('0GMzISPlVH').strrev('djVGblNHIi').strrev('1GIwMjPkVG').strrev('L8MXZ0Vnbp').strrev('4jbvlGdw92').strrev('CJkQCJkQCK').strrev('kQCJkQCJkQ').strrev('Iu9Wa0B3b8').strrev('ISPlVHbhZH').strrev('IwQjPi0GM0').strrev('MXZ0Vnbp1G').strrev('bvlGdw92L8').strrev('kQCJkQCK4j').strrev('CJkQCJkQCJ').strrev('9Wa0B3b8kQ').strrev('PlVHbhZHIu').strrev('UjPi0GM1IS').strrev('Z0Vnbp1GIw').strrev('lGdw92L8MX').strrev('CJkQCK4jbv').strrev('kQCJkQCJkQ').strrev('a0B3b8kQCJ').strrev('VHbhZHIu9W').strrev('Pi0GM2ISPl').strrev('Vnbp1GIwYj').strrev('dw92L8MXZ0').strrev('kQCK4jbvlG').strrev('CJkQCJkQCJ').strrev('V2cvwTCJkQ').strrev('CJogP0NWZs').strrev('kQCJkQCJkQ').strrev('dpR2L8kQCJ').strrev('kQCJkQCK4j').strrev('L8kQCJkQCJ').strrev('kQCK4jdpR2').strrev('CJkQCJkQCJ').strrev('NGI2lGZ8kQ').strrev('bmJSPzNXYs').strrev('V3bydWLtJ3').strrev('Zt0mcvZGIw').strrev('02ctAXdvJ3').strrev('CJkQCJogPi').strrev('kQCJkQCJkQ').strrev('YsNGI2lGZ8').strrev('w2bjJSPzNX').strrev('PiITMt02ct').strrev('kQCJkQCJog').strrev('PJkQCJkQCJ').strrev('FGbjBidpRG').strrev('Ls92Yi0zcz').strrev('92YgMTLtNX').strrev('Zm9WLtNXLs').strrev('4jIz0CdlNn').strrev('CJkQCJkQCK').strrev('kQCJkQCJkQ').strrev('YsNGI2lGZ8').strrev('xWdwJSPzNX').strrev('I0h2ZpJXLs').strrev('kQCJkQCK4j').strrev('CJkQCJkQCJ').strrev('RHd1JGPJkQ').strrev('PlBXe0Bibv').strrev('QXatJWdzJS').strrev('PzNXYsNGIi').strrev('RnYg4GdiJS').strrev('clN2Y1NXLu').strrev('ACIgogPiM3').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('Yg4WYwNHPg').strrev('dmI9M3chx2').strrev('bvNWaoBXes').strrev('lGawlHbnBi').strrev('cvxmZt42bj').strrev('VmdhNXL5BH').strrev('YwN3L84jIk').strrev('mJmp1ba34W').strrev('lB3T7A3ci5').strrev('CIgACIgogb').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('Hd1J2L8ACI').strrev('JkQCK4jbvR').strrev('QCJkQCJkQC').strrev('pR2L8kQCJk').strrev('QCJkQCK4jd').strrev('JkQCJkQCJk').strrev('gP2lGZvwTC').strrev('JkQCJkQCJo').strrev('GPJkQCJkQC').strrev('zFGbjBidpR').strrev('XLs92Yi0zc').strrev('JogPiMTLtN').strrev('QCJkQCJkQC').strrev('kxTCJkQCJk').strrev('3chx2YgYXa').strrev('twGb1BnI9M').strrev('ba3ICdmVGb').strrev('kQCJkgCmp1').strrev('CJkQCJkQCJ').strrev('RXdixTCJkQ').strrev('Y0FGZg42b0').strrev('NXatNXak1S').strrev('bhR2btJSPz').strrev('M3chx2YgIC').strrev('diBib0JmI9').strrev('lmbyF2dt4G').strrev('bj52bgIyZu').strrev('l2di0zajlG').strrev('YvxmL39GZu').strrev('hmLu9Wa0F2').'yZWY9'))))."'".''."'".'" disabled><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;Tutorial</button>
														</div>
													</div>
												</div>
											</div>';
											}else{
												echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('jclRnblNGP').strrev('zlGaU5jY84').strrev('mc1RXYlZGI').strrev('s52bgMXagU').strrev('WTgI3bmBSe').strrev('WByapRVaul').strrev('nclNXdg4EU').strrev('ixjPi9CPuM').strrev('Cmp1ba38ic').strrev('ACIgACIgAi').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('c1RGIOBlVo').strrev('FGIu9Wa0Fm').strrev('ZgcDIlZ3bi').strrev('N2L8kyc5FG').strrev('ak4jclRnbl').'05tq'))));
											}
										echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('ba3YXak9CP').strrev('kQCJkgCmp1').strrev('ZvwTCJkQCJ').strrev('ACIK4Tby9m').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('ak9CPgACIg').strrev('gCmp1ba3YX').strrev('JkQCJkQCJk').strrev('ba3YXak9CP').strrev('kQCJkgCmp1').strrev('agEGPJkQCJ').strrev('RHai0jZlJH').strrev('b59yL6MHc0').strrev('NmLlJWd0V3').strrev('autWZ09Sbv').strrev('9Taml2dpNX').strrev('Zu92YfJWdz').strrev('9Wa0FWbylm').strrev('alRlPiETPu').strrev('l2Vgk2cp52').strrev('Lg4TYvwTam').strrev('VmcoBSY8AS').strrev('cwRHdoJSPm').strrev('5yd3d3Lvoz').strrev('et5yapRXat').strrev('1ba3ICZp5S').strrev('pRVaulWTmp').strrev('AQg4TYvwza').strrev('50akqt50ak').'tq')))).date('Y').'
							</div>
				            <div class="col-md-8 thumbnail hidden-xs" style="border: none;">
					            <div class="panel panel-primary">
						            <div class="panel-heading"><center><b>'.$bhsa36.'</b></center></div>
										    <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered hidden-xs" style="border: none;" id="example">
	    								        </tbody>
												    <tr>
                                                        <td colspan="3" style="border: none;">
                                                            <b>1.</b> Fitur ini hanya untuk pengguna VPNremote berdurasi di atas 7 hari.<br/>
                                                            <b>2.</b> Pastikan IP lokal yang di remote 1 subnet dengan IP mikrotik.<br/>
									    	                <b>3.</b> Karena mengandung bypass maka jangan remote IP user / client.<br/>
									    	                <b>4.</b> Allow pop up atau kunjungi link ini<br/>
									    	                <div id="viewremoteip"></div>
									    	            </td>
									            	</tr>
                                                    <tr>
                                                        <td colspan="3" style="border: none;"></td>
											        </tr>
										        </tbody>
    								        </table>
						            </div>
					            </div>
				            </div>
	';
}
if($_GET["id"] == 'loginssl'){
    foreach ($util->setMenu('/ip hotspot profile')->getAll() as $cekurlloginwifi) {
        $lgnsslwfi = str_replace($anctgg,'',$cekurlloginwifi('dns-name'));
        $xcdrslwfi = str_replace($anctgg,'',$cekurlloginwifi('hotspot-address'));
        if(!empty($lgnsslwfi) and !empty($xcdrslwfi) and $xcdrslwfi <> '0.0.0.0'){
            $adrsslwfi = $xcdrslwfi;
            if (strpos($lgnsslwfi, 'mitik.my.id') == true){
                $lgnhttpswfi = $lgnsslwfi;
                $lgnbysslwfi = str_replace($anctgg,'',$cekurlloginwifi('login-by'));
                $crtfcsslwfi = str_replace($anctgg,'',$cekurlloginwifi('ssl-certificate'));
                $slllweraqex = $util->setMenu('/certificate')->get(RouterOS\Query::where('name', 'ssl.mitik.my.id'),'invalid-after');
                $slllweraqey = $util->get(RouterOS\Query::where('name', 'ssl.mitik.my.id'),'expires-after');
            }elseif (strpos($lgnsslwfi, 'minitik.net') == true){
                $lgnhttpswfi = $lgnsslwfi;
                $lgnbysslwfi = str_replace($anctgg,'',$cekurlloginwifi('login-by'));
                $crtfcsslwfi = str_replace($anctgg,'',$cekurlloginwifi('ssl-certificate'));
                $slllweraqex = $util->setMenu('/certificate')->get(RouterOS\Query::where('name', 'ssl.minitik.net'),'invalid-after');
                $slllweraqey = $util->get(RouterOS\Query::where('name', 'ssl.minitik.net'),'expires-after');
            }else{
                $lgnhttpswfi = 'Not Used';
                $lgnhttpwfi = $lgnsslwfi;
            }
        }
    }
    if (strpos('minitik'.$lgnbysslwfi,'https') == true and $crtfcsslwfi == 'ssl.mitik.my.id'){
        if (!empty($util->setMenu('/certificate')->find(RouterOS\Query::where('name', 'ssl.mitik.my.id')))){
            if ($util->get(RouterOS\Query::where('name', 'ssl.mitik.my.id'),'crl') == 'true'){
                $pmtrsansll = 'Ok';
            }elseif ($util->get(RouterOS\Query::where('name', 'ssl.mitik.my.id_1'),'crl') == 'true'){
                $pmtrsansll = 'Ok';
            }elseif ($util->get(RouterOS\Query::where('name', 'ssl.mitik.my.id_2'),'crl') == 'true'){
                $pmtrsansll = 'Ok';
            }else{
                $sslerrr = 'tools/loginsslwifi/sslnotrust.txt';
                $mrfxle = file_get_contents($sslerrr);
                $mrfile = fopen($sslerrr, "w");
                $dmnsslwfi = str_replace('.mitik.my.id','',$lgnsslwfi);
                fwrite($mrfile, $dmnsslwfi."\n".str_replace($dmnsslwfi."\n",'',$mrfxle));
                fclose($mrfile);
            }
        }
        $pmsngansll = 'Ok';
    }
    if (empty($lgnhttpwfi) and !empty($util->setMenu('/ip dns static')->find(RouterOS\Query::where('comment', 'BackupLogin')))){
        $lgnhttpwfi = $util->get(RouterOS\Query::where('comment', 'BackupLogin'),'name');
    }
    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('gACIgACIK4').strrev('mb1ZGKkACI').strrev('gkCKu9Wa0N').strrev('CIgACIgowe').strrev('kACIgACIgA').strrev('mYtFGdjICK').strrev('gw2cz5WYoF').strrev('nLpISby9mZ').strrev('mhCdp1mY1N').strrev('ibvlGdj5Wd').strrev('gACIKsHIpg').strrev('CIgACIgACI').strrev('hZHIgACIgA').strrev('mZulWb0Bic').strrev('lBSPgw2cz9').strrev('kUVVGZvNmb').strrev('w5WaigCJok').strrev('mbp1GdjQXd').strrev('ukiIsN3cvZ').strrev('mcukCKsFmd').strrev('vgSZjFGbwV').strrev('HP85Dfmw3I').strrev('iICIsc2Liw').strrev('CIgAiC7kSK').strrev('gACIgACIgA').strrev('XY2BCIgACI').strrev('g0DIsJXdgI').strrev('SKzlGa0hCJ').strrev('hJCKyRHdh5').strrev('TKi42bpR3Y').strrev('gACIgACIKs').strrev('CIgACIgACI').strrev('2NiIoQCIgA').strrev('iIsN3c3VWa').strrev('1hCZh9Gbuk').strrev('2PiAyKgwmc').strrev('h12bk1DZkF').strrev('2cmw2cz5Wa').strrev('0FWZyNWP0V').strrev('3bm5WatRnJ').strrev('gsCIi0DbzN').strrev('3cvZmbp1Gd').strrev('0ZiIgsCIsN').'bXBvcnQ9')))).$_SESSION['port'].'&blg='.$lgnhttpwfi.'&bip='.$adrsslwfi.'");
                return false;
            });
        });
        </script>   
                            <div class="col-md-4 thumbnail hidden-xs hidden-sm" style="border: none;">
								<div class="panel panel-primary">
									<div class="panel-heading"><center><b>'.$bhsa28.' '.$bhsa129.' SSL</b></center></div>
									<div id="tambahanssl" class="panel-body">
                                    <form action="ajax_add.php" method="get">
										<div class="form-horizontal">
                                            <div class="form-group form-group-sm">
												<div class="col-sm-12">
									               <center><img width="100%" src="images/letsencrypt.jpg"></center>
                                                </div>';
                                                if ($_SESSION['vpnexpired'] == "OK"){
                                                echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GbjBidpRGP').strrev('s92Yi0zczF').strrev('jIyETLtNXL').strrev('JkQCJkQCK4').strrev('CIJkQCJkQC').strrev('lJWYsxDIgA').strrev('zczFGbjBCb').strrev('vJHdu92Yi0').strrev('CblJWYs1Cb').'I3ab1pm')))).$bhsa38.'</label>
												    <input type="text" placeholder="'.$bhsa38.' '.$bhsa129.'" name="tminfossl" id="tminfossl" class="form-control" disabled>
												    Silahkan pilih dari list domain SSL yang tersedia, atau silahkan request ke WA: 089507712362
												</div>';
                                                }
                                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('ba3YXak9CP').strrev('kQCJkgCmp1').strrev('PJkQCJkQCJ').strrev('FGbjBidpRG').strrev('by9mZi0zcz').strrev('BCc19mcn1S').strrev('bydWLtJ3bm').strrev('4jItNXLwV3').strrev('CJkQCJkQCK').strrev('RGPJkQCJkQ').strrev('czFGbjBidp').strrev('NXLs92Yi0z').strrev('ak4jIyETLt').'05tq'))));
												    if ($_SESSION['vpnexpired'] == "OK"){
													echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GbjBidpRGP').strrev('s92Yi0zczF').strrev('2YgMTLtNXL').strrev('m9WLtNXLs9').strrev('jIz0CdlNnZ').strrev('JkQCJkQCK4').strrev('QCJkQCJkQC').strrev('sNGI2lGZ8k').strrev('WdwJSPzNXY').strrev('0h2ZpJXLsx').strrev('QCJkQCK4jI').strrev('JkQCJkQCJk').strrev('Hd1JGPJkQC').strrev('lBXe0BibvR').strrev('XatJWdzJSP').strrev('zNXYsNGIiQ').strrev('nYg4GdiJSP').strrev('lN2Y1NXLuR').strrev('2cpRGIiM3c').strrev('gogPkVGbiF').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('WYwNHPgACI').strrev('9M3chx2Yg4').strrev('WaoBXesdmI').strrev('wlHbnBibvN').strrev('mZt42bjlGa').strrev('hNXL5BHcvx').strrev('3L84jIkVmd').strrev('p1ba34WYwN').strrev('T7A3ci5mJm').strrev('ACIgACIKs2').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('RXdi9CPgAC').strrev('mp1ba342b0').strrev('QCJkQCJkgC').strrev('JkQCJkQCJk').strrev('ba3YXak9CP').strrev('kQCJkgCmp1').strrev('CJkQCJkQCJ').strrev('4jdpR2L8kQ').strrev('CJkQCJkQCK').strrev('xTCJkQCJkQ').strrev('chx2YgYXak').strrev('1CbvNmI9M3').strrev('CK4jIz0Sbz').strrev('kQCJkQCJkQ').strrev('Z8kQCJkQCJ').strrev('NXYsNGI2lG').strrev('LsxWdwJSPz').strrev('ogPiQnZlxW').strrev('CJkQCJkQCJ').strrev('kQCJkQCJkQ').strrev('Iu9Gd0VnY8').strrev('lGZtEGdhRG').strrev('bi0zczlWbz').strrev('NGIiwWYk9W').strrev('diJSPzNXYs').strrev('dXLuRnYg4G').strrev('Ygcmbp5mch').strrev('cmbptmbpxm').strrev('Ypx2Yu9GIi').strrev('RmbpdnI9s2').strrev('dhN2bs5ydv').strrev('Vmco5ibvlG').strrev('kqt50akQPm').'a05tq'))))."'".'https://youtu.be/oMN2LkYASS4'."'".'"><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;Tutorial</button>
														</div>
													</div>';
												    }else{
												        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('jclRnblNGP').strrev('zlGaU5jY84').strrev('mc1RXYlZGI').strrev('s52bgMXagU').strrev('WTgI3bmBSe').strrev('WByapRVaul').strrev('nclNXdg4EU').strrev('ixjPi9CPuM').strrev('Cmp1ba38ic').strrev('ACIgACIgAi').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('TQZFKgACIg').strrev('lGdhJXdkBi').strrev('Z29mYhBibv').strrev('MXehRGI3AS').strrev('Z05WZj9CPp').'XI3ab1pm'))));
												    }
												echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('ba3YXak9CP').strrev('kQCJkgCmp1').strrev('PJkQCJkQCJ').strrev('1ba3YXak9C').strrev('JkQCJkgCmp').strrev('2L8kQCJkQC').strrev('JkQCK4jdpR').strrev('CPJkQCJkQC').strrev('gogPtJ3bm9').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('2L8ACIgACI').strrev('JkgCJ4jdpR').strrev('CPJkQCJkQC').strrev('p1ba3YXak9').strrev('CJkQCJkgCm').strrev('JHagEGPJkQ').strrev('c0RHai0jZl').strrev('V3b59yL6MH').strrev('bvNmLlJWd0').strrev('NXautWZ09S').strrev('dz9Taml2dp').strrev('lmZu92YfJW').strrev('Pu9Wa0FWby').strrev('52alRlPiET').strrev('aml2Vgk2cp').strrev('ASLg4TYvwT').strrev('PmVmcoBSY8').strrev('ozcwRHdoJS').strrev('at5yd3d3Lv').strrev('5Set5yapRX').strrev('mp1ba3ICZp').strrev('zapRVaulWT').strrev('akAQg4TYvw').strrev('qt50akqt50'))))).date('Y').'
							</div>
				            <div class="col-md-8 thumbnail" style="border: none;">
					            <div class="panel panel-primary">
						            <div class="panel-heading"><center><b>'.$bhsa13.' '.$bhsa129.' SSL</b></center></div>
                                        <script type="text/javascript">
                                            $(function() {
                                                $("#pasangsslsitus btnssl").click(function() {
                                                    var url = $(this).attr("href");
                                                    $("#hasilsslsitus").load(url);
                                                    return false;
                                                });
                                            });
                                        </script>
                                        <div id="pasangsslsitus">
									    <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered hidden-xs" style="border: none;" id="example">
										    </tbody>
                                                <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                    <td colspan="3"><b>'.$bhsa36.'</b></td>
												</tr>
												<tr>
                                                    <td style="border: none;">
                                                        Login Wifi (https): <a href="https://'.$lgnhttpswfi.'/status" target="_blank"><b>'.preg_replace('/[^a-zA-Z0-9.]/', '',$lgnhttpswfi).'</b></a><br/>
                                                        Login Wifi (http): <a href="http://'.$lgnhttpwfi.'/" target="_blank"><b>'.preg_replace('/[^a-zA-Z0-9.]/', '',$lgnhttpwfi).'</b></a><br/>
                                                        Login Wifi (IP): <a href="http://'.$adrsslwfi.'/" target="_blank"><b>'.preg_replace('/[^a-zA-Z0-9.]/', '',$adrsslwfi).'</b></a><br/>
								                    </td>
                                                    <td style="border: none;">
                                                        <center class="blinking">Your ssl active period<br/><b>'.$slllweraqex.'</b><br/>
                                                        ('.$slllweraqey.')</center>
								                    </td>
					                            </tr>
							                </tbody>
			                            </table>
                                        <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="table-01">
						                    <thead>
							                    <tr>
								                    <th>No</th>
								                    <th class="hidden-sm hidden-xs">'.$bhsa38.'</th>
								                    <th>Login wifi</th>
								                    <th class="hidden-sm hidden-xs">SSL active</th>
								                    <th>Status</th>
							                    </tr>
						                    </thead>
						                    <tbody>';
									        $i = 0;
                                            $oifkgqdf = 'admin|_wildcard_|vpn|cpanel|cpcalendars|cpcontacts|mail|webdisk|webmail';
                                            $flr = substr($_SERVER['DOCUMENT_ROOT'],0,-7);
                                            foreach (scandir($flr.'ssl/certs') as $folder){
                                                if (strpos('MiniTik'.$folder,'.crt') == true and strpos('MiniTik'.$folder,'cache') == false){
                                                    $posdb = substr($folder,0,strpos($folder,'_mitik_my_id_'));
                                                    $cdssl = substr(str_replace($posdb.'_mitik_my_id_','',$folder),0,11);
                                                    if(!empty($posdb)){
                                                        $crtsl = filemtime($flr.'ssl/certs/'.$folder);
                                                        $nmfssl[$crtsl] = $posdb;
                                                        $ncdssl[$crtsl] = $cdssl;
                                                        $allfilessl = $crtsl.'|'.$allfilessl;
                                                    }
                                                }
                                            }
                                            $sslexpwer = explode('|', $allfilessl);
                                            arsort($sslexpwer);
                                            foreach ($sslexpwer as $sslexp){
                                                if(!empty($nmfssl[$sslexp]) and strpos('minitik'.$nmfssl[$sslexp],'www') == false and strpos('minitik'.$oifkgqdf,$nmfssl[$sslexp]) == false){
                                                    $i++;
                                                    echo base64_decode('PHRyPjx0ZD4=').$i.'</td>
                                                    <td class="hidden-sm hidden-xs">'.$nmfssl[$sslexp].'</td>
                                                    <td>'.$nmfssl[$sslexp].'.mitik.my.id</td>';
                                                    if ($_SESSION['vpnexpired'] == "OK"){
                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('Gag02ct4WZ').strrev('zhXLuVGZkl').'Ij4ka05tq')))).date('d F Y',$sslexp).' - '.date('d F Y', (strtotime('+88 days', $sslexp))).'</td>';
                                                        if ($pmsngansll == 'Ok' and $nmfssl[$sslexp].'.mitik.my.id' == $lgnhttpswfi){
                                                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GdixjPkRHP').strrev('hx2Ygw2cz5').strrev('ib0JmI9M3c').strrev('pJHct4GdiB').strrev('HagISeyFWb').strrev('hpWYi0jZlJ').strrev('GcuQGZh9Fe').strrev('k1DZkF2Pwh').strrev('2cz5Wah12b').strrev('lJXP0V2cmw').strrev('Wb0ZSZ29Wb').strrev('9w2cz9mZul'))))).$nmfssl[$sslexp].'&sslkey='.$ncdssl[$sslexp].'&tmport='.$_SESSION['port'].'&blg='.$lgnhttpwfi.'&bip='.$adrsslwfi.'"><b>Success</b></btnssl></td>';
                                                        }else{
                                                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GdixjPkRHP').strrev('hx2Ygw2cz5').strrev('ib0JmI9M3c').strrev('jV3ct4GdiB').strrev('HagIyczV2Y').strrev('hpWYi0jZlJ').strrev('GcuQGZh9Fe').strrev('k1DZkF2Pwh').strrev('2cz5Wah12b').strrev('zVXP0V2cmw').strrev('mZulWb0ZSZ').'9zc2w9')))).$nmfssl[$sslexp].'&sslkey='.$ncdssl[$sslexp].'&tmport='.$_SESSION['port'].'&blg='.$lgnhttpwfi.'&bip='.$adrsslwfi.'"><b>Use SSL</b></btnssl></td>';
                                                        }
                                                    }else{
                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('HbvNGIkRHP').strrev('iIjI94WYwN').strrev('XZ05WZjxjP').strrev('52Tmp1ba3I').strrev('TgI3bmBSes').strrev('ByapRVaulW').strrev('clNXdg4EUW').strrev('hGIhxDIuMn').strrev('d0hmI9YWZy').strrev('lWbv8iOzBH').strrev('aukXbusWa0').strrev('9kPixjPiQW').strrev('clhGIyVGZy').strrev('I2L8EiLuUm').strrev('h9CPmp1ba3').strrev('GduV2YvwjP').strrev('3QGdvwjPyV').'ab1pm'))));
                                                    }
                                                    echo base64_decode('PC90cj4=');
                                                    $x++;
                                                    $oifkgqdf = $oifkgqdf.'|'.$nmfssl[$sslexp];
                                                }
                                            }
                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('Tek9mY09CP').strrev('lxmYhR3L84').strrev('CIgACIgogP').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('lNGPgACIgA').strrev('QCK4jclRnb').strrev('gACIgkQCJk').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('GduV2YvwDI').strrev('JkQCJogPyV').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('3YXak9CPgA').strrev('dpRGPmp1ba').strrev('FGai0DZpBi').strrev('azx2czxWaz').strrev('1ba3Iyc1RX').strrev('3YXak9CPmp').strrev('CJkgCmp1ba').strrev('ACIgACIJkQ').strrev('PgACIgACIg').strrev('1ba3YXak9C').strrev('gkQCJkgCmp').strrev('CIgACIgACI').strrev('pR2L8ACIgA').strrev('CIgACIK4jd').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('WagYXakxDI').strrev('zdXZpZnI9Q').strrev('GZvwjPiw2c').'l2PgoJ'))));
	echo $gcrltrs;
}
 ?>

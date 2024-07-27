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
if ($_POST['bhsa'] <> ''){$_SESSION['bhsa'] = $_POST['bhsa']; $bahasa = $_POST['bhsa'];}
if ($bahasa <> ''){
    include('tools/bahasa/'.$bahasa.'.php');
}elseif ($_SESSION['bhsa'] <> ''){
    $bahasa = $_SESSION['bhsa'];
    include('tools/bahasa/'.$bahasa.'.php');
}else{
    include('tools/bahasa/default.php');
}
$anctgg = ['%3C','%3E','&lt','&gt','<','>'];
function clean($string) {
   return preg_replace('/[^A-Za-z0-9]/', '', $string); // Removes special chars.
}

if($_GET["id"] == 'profile'){
    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('gACIgACIK4').strrev('mb1ZGKkACI').strrev('gkCKu9Wa0N').strrev('CIgACIgowe').strrev('kACIgACIgA').strrev('nclNXdjICK').strrev('gUGbpZ2byB').strrev('nLpISby9mZ').strrev('mhCdp1mY1N').strrev('ibvlGdj5Wd').strrev('gACIKsHIpg').strrev('CIgACIgACI').strrev('hZHIgACIgA').strrev('Wam9mcwBic').strrev('j5WZg0DIlx').strrev('CKJJVVlR2b').strrev('0VHculmIoQ').strrev('2dpZmc6B3I').strrev('owWY25SKiw').strrev('WYsBXZy5SK').strrev('8ZCfj8CKlN').strrev('yZvICf8wnP').strrev('KsTKpIiIgw').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('Gc1BichZHI').strrev('lBSPgQWYvx').strrev('kUVVGZvNmb').strrev('sV2cigCJok').strrev('GbwV3I0NWZ').strrev('hZnLpICZh9').strrev('GclJnLpgCb').strrev('8NyLoU2Yhx').strrev('fmp1ba3wnJ').strrev('ACLn9iI8xD').strrev('IgowOpkiIi').strrev('ACIgACIgAC').strrev('dgACIgACIg').strrev('52dvRGIyFm').strrev('Zg0DIkF2bs').strrev('JVVlR2bj5W').strrev('blNnIoQCKJ').strrev('d3bkNCdjVG').strrev('LpICZh9Gbu').strrev('JnLpgCbhZn').strrev('LoU2YhxGcl').strrev('1ba3wnJ8Ny').strrev('n9iI8xDfmp').strrev('wOpkiIiACL').strrev('gACIgACIgo').strrev('CIgACIgACI').strrev('p1GIyFmdgA').strrev('GI9ACbwVnb').strrev('SVVZk92YuV').strrev('WZzJCKkgSS').strrev('ulWbjQ3Ylx').strrev('mdukiIsBXd').strrev('wVmcukCKsF').strrev('3IvgSZjFGb').strrev('iwHP85Dfmw').strrev('SKiICIsc2L').strrev('gACIgAiC7k').strrev('CIgACIgACI').strrev('gIXY2BCIgA').strrev('ib39GZulWb').strrev('k92YuVGI9A').strrev('CKkgSSSVVZ').strrev('jQ3YlxWZzJ').strrev('ib39GZulWb').strrev('pgCbhZnLpI').strrev('2YhxGclJnL').strrev('3wnJ8NyLoU').strrev('I8xDfmp1ba').strrev('kiIiACLn9i').strrev('IgACIgowOp').strrev('ACIgACIgAC').strrev('IyFmdgACIg').strrev('VHZlJXYoNH').strrev('blBSPgIXZz').strrev('kkUVVGZvNm').strrev('dw5WaigCJo').strrev('Vmchh2cjQX').strrev('LpIiclNXdk').strrev('JnLpgCbhZn').strrev('LoU2YhxGcl').strrev('1ba3wnJ8Ny').strrev('n9iI8xDfmp').strrev('wOpkiIiACL').strrev('gACIgACIgo').strrev('CIgACIgACI').strrev('oNHIyFmdgA').strrev('WZwNHZlJXY').strrev('j5WZg0DIkV').strrev('CKJJVVlR2b').strrev('jVGblNnIoQ').strrev('WZyFGazNCd').strrev('pICZlVGczR').strrev('nLpgCbhZnL').strrev('oU2YhxGclJ').strrev('ba3wnJ8NyL').strrev('9iI8xDfmp1').strrev('OpkiIiACLn').strrev('ACIgACIgow').strrev('IgACIgACIg').strrev('NHIyFmdgAC').strrev('c1RGZlJXYo').strrev('VGI9ASazFm').strrev('SSVVZk92Yu').strrev('xWZzJCKkgS').strrev('chh2cjQ3Yl').strrev('NXYyVHZkVm').strrev('KsFmdukiIp').strrev('FGbwVmcukC').strrev('fmw3IvgSZj').strrev('c2LiwHP85D').strrev('C7kSKiICIs').strrev('ACIgACIgAi').strrev('IgACIgACIg').strrev('VXYgIXY2BC').strrev('Iul2Zvx2b0').strrev('R2bj5WZg0D').strrev('IoQCKJJVVl').strrev('NCdjVGblNn').strrev('an9GbvRXdh').strrev('wWY25SKi4W').strrev('YsBXZy5SKo').strrev('ZCfj8CKlNW').strrev('ZvICf8wnP8').strrev('sTKpIiIgwy').strrev('IgACIgACIK').strrev('ACIgACIgAC').strrev('dkBichZHIg').strrev('BSPgk2chJX').strrev('UVVGZvNmbl').strrev('V2cigCJokk').strrev('c1R2I0NWZs').strrev('ZnLpISazFm').strrev('clJnLpgCbh').strrev('NyLoU2YhxG').strrev('mp1ba3wnJ8').strrev('CLn9iI8xDf').strrev('gowOpkiIiA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3cvhGIyFmd').strrev('g0DIl1WYuR').strrev('VVlR2bj5WZ').strrev('lNnIoQCKJJ').strrev('3boNCdjVGb').strrev('pISZtFmb0N').strrev('nLpgCbhZnL').strrev('oU2YhxGclJ').strrev('ba3wnJ8NyL').strrev('9iI8xDfmp1').strrev('OpkiIiACLn').strrev('ACIgACIgow').strrev('IgACIgACIg').strrev('1GIyFmdgAC').strrev('clJHZkF2Yh').strrev('NmblBSPgM3').strrev('JokkUVVGZv').strrev('NWZsV2cigC').strrev('ZkF2Yh12I0').strrev('5SKiM3clJH').strrev('Zy5SKowWY2').strrev('8CKlNWYsBX').strrev('f8wnP8ZCfj').strrev('IiIgwyZvIC').strrev('IgACIKsTKp').strrev('ACIgACIgAC').strrev('chZHIgACIg').strrev('JHZkFGcpBi').strrev('blBSPgM3cl').strrev('kkUVVGZvNm').strrev('ZsV2cigCJo').strrev('RWYwl2I0NW').strrev('LpIyczVmck').strrev('JnLpgCbhZn').strrev('LoU2YhxGcl').strrev('1ba3wnJ8Ny').strrev('n9iI8xDfmp').strrev('wOpkiIiACL').strrev('gACIgACIgo').strrev('CIgACIgACI').strrev('yBHIyFmdgA').strrev('DI5RXay9Wa').strrev('lR2bj5WZg0').strrev('nIoQCKJJVV').strrev('wNCdjVGblN').strrev('Se0lmcvlmc').strrev('pgCbhZnLpI').strrev('2YhxGclJnL').strrev('3wnJ8NyLoU').strrev('I8xDfmp1ba').strrev('kiIiACLn9i').strrev('IgACIgowOp').strrev('ACIgACIgAC').strrev('IyFmdgACIg').strrev('RWYzNXYsNG').strrev('I9AyczVmck').strrev('VVZk92YuVG').strrev('ZzJCKkgSSS').strrev('x2YjQ3YlxW').strrev('ZyRGZhN3ch').strrev('FmdukiIzNX').strrev('bwVmcukCKs').strrev('w3IvgSZjFG').strrev('LiwHP85Dfm').strrev('kSKiICIsc2').strrev('IgACIgAiC7').strrev('ACIgACIgAC').strrev('ZgIXY2BCIg').strrev('YWa0tWYwVn').strrev('ZvNmblBSPg').strrev('gCJokkUVVG').strrev('I0NWZsV2ci').strrev('lGdrFGc1Z2').strrev('KsFmdukiIm').strrev('FGbwVmcukC').strrev('fmw3IvgSZj').strrev('c2LiwHP85D').strrev('C7kSKiICIs').strrev('ACIgACIgAi').strrev('IgACIgACIg').strrev('VnZgIXY2BC').strrev('PgQXatlGbw').strrev('VGZvNmblBS').strrev('cigCJokkUV').strrev('Z2I0NWZsV2').strrev('I0lWbpxGc1').strrev('kCKsFmduki').strrev('ZjFGbwVmcu').strrev('5Dfmw3IvgS').strrev('Isc2LiwHP8').strrev('AiC7kSKiIC').strrev('IgACIgACIg').strrev('BCIgACIgAC').strrev('dwVnZgIXY2').strrev('0DIkF2bsBX').strrev('VlR2bj5WZg').strrev('NnIoQCKJJV').strrev('dmNCdjVGbl').strrev('QWYvxGc1BX').strrev('KowWY25SKi').strrev('NWYsBXZy5S').strrev('P8ZCfj8CKl').strrev('wyZvICf8wn').strrev('IKsTKpIiIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('BXdmBichZH').strrev('Zh9Gbud3bk').strrev('92YuVGI9AC').strrev('KkgSSSVVZk').strrev('Q3YlxWZzJC').strrev('b39GZwVnZj').strrev('5SKiQWYvxm').strrev('Zy5SKowWY2').strrev('8CKlNWYsBX').strrev('f8wnP8ZCfj').strrev('IiIgwyZvIC').strrev('IgACIKsTKp').strrev('ACIgACIgAC').strrev('chZHIgACIg').strrev('xGc1BnZtBi').strrev('blBSPgQWYv').strrev('kkUVVGZvNm').strrev('ZsV2cigCJo').strrev('VHcm12I0NW').strrev('LpICZh9Gbw').strrev('JnLpgCbhZn').strrev('LoU2YhxGcl').strrev('1ba3wnJ8Ny').strrev('n9iI8xDfmp').strrev('wOpkiIiACL').strrev('gACIgACIgo').strrev('CIgACIgACI').strrev('m1GIyFmdgA').strrev('2bs52dvRGc').strrev('j5WZg0DIkF').strrev('CKJJVVlR2b').strrev('jVGblNnIoQ').strrev('3bkBnZtNCd').strrev('pICZh9Gbud').strrev('nLpgCbhZnL').strrev('oU2YhxGclJ').strrev('ba3wnJ8NyL').strrev('9iI8xDfmp1').strrev('OpkiIiACLn').strrev('ACIgACIgow').strrev('IgACIgACIg').strrev('RHIyFmdgAC').strrev('ZulmclhGdl').strrev('92YuVGI9Ay').strrev('KkgSSSVVZk').strrev('Q3YlxWZzJC').strrev('ayVGa0VGdj').strrev('FmdukiIn5W').strrev('bwVmcukCKs').strrev('w3IvgSZjFG').strrev('LiwHP85Dfm').strrev('kSKiICIsc2').strrev('IgACIgAiC7').strrev('ACIgACIgAC').strrev('agIXY2BCIg').strrev('Z2brxGdjR2').strrev('bj5WZg0DIm').strrev('QCKJJVVlR2').strrev('djVGblNnIo').strrev('tGb0NGZrNC').strrev('Y25SKiYmZv').strrev('BXZy5SKowW').strrev('fj8CKlNWYs').strrev('ICf8wnP8ZC').strrev('KpIiIgwyZv').strrev('ACIgACIKsT').strrev('IgACIgACIg').strrev('BichZHIgAC').strrev('bvtGb0NGZr').strrev('92YuVGI9Ai').strrev('KkgSSSVVZk').strrev('Q3YlxWZzJC').strrev('brxGdjR2aj').strrev('wWY25SKi42').strrev('YsBXZy5SKo').strrev('ZCfj8CKlNW').strrev('ZvICf8wnP8').strrev('sTKpIiIgwy').strrev('IgACIgACIK').strrev('ACIgACIgAC').strrev('ciBichZHIg').strrev('AiZ0t2YyR3').strrev('Zk92YuVGI9').strrev('JCKkgSSSVV').strrev('YjQ3YlxWZz').strrev('YGdrNmc0Nn').strrev('KowWY25SKi').strrev('NWYsBXZy5S').strrev('P8ZCfj8CKl').strrev('wyZvICf8wn').strrev('IKsTKpIiIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('1WY0BichZH').strrev('blBSPgQXak').strrev('kkUVVGZvNm').strrev('dw5WaigCJo').strrev('lGZtFGdjQX').strrev('KsFmdukiI0').strrev('FGbwVmcukC').strrev('fmw3IvgSZj').strrev('c2LiwHP85D').strrev('C7kSKiICIs').strrev('ACIgACIgAi').strrev('IgACIgACIg').strrev('JXdgIXY2BC').strrev('a0hCJg0DIs').strrev('RHdh5SKzlG').strrev('bpR3YhJCKy').strrev('ACIKsTKi42').strrev('IgACIgACIg').strrev('QCIgACIgAC').strrev('c3VWa2NiIo').strrev('ISZslmZvJH').strrev('doQWYvxmLp').strrev('9jIgsCIsJX').strrev('ZvJHc9QGZh').strrev('9mcwZSZslm').strrev('KgISPlxWam').strrev('xWam9mcwBy').strrev('c1ZiIgsCIl').strrev('AiI9QWYvxG').strrev('Zh9GbwVHIr').strrev('9GZmICIrAC').strrev('I9QWYvxmb3').strrev('52dvRGIrAi').strrev('IgsCIkF2bs').strrev('wGc15WatZi').strrev('bp1GIrAiI9').strrev('ICIrACbwVn').strrev('b39GZulWbm').strrev('lWbgsCIi0j').strrev('IrAib39GZu').strrev('Vmchh2cmIC').strrev('Ii0jclNXdk').strrev('Vmchh2cgsC').strrev('IrAiclNXdk').strrev('Vmchh2cmIC').strrev('I9QWZlB3ck').strrev('JXYoNHIrAi').strrev('IkVWZwNHZl').strrev('FGazZiIgsC').strrev('chJXdkRWZy').strrev('NHIrAiI9k2').strrev('c1RGZlJXYo').strrev('ICIrASazFm').strrev('Zvx2b0VXYm').strrev('ByKgISPul2').strrev('an9GbvRXdh').strrev('RmJiAyKg4W').strrev('Ii0TazFmc1').strrev('NXYyVHZgsC').strrev('boZiIgsCIp').strrev('0TZtFmb0N3').strrev('dz9GagsCIi').strrev('AyKgUWbh5G').strrev('ZkF2Yh1mJi').strrev('AiI9M3clJH').strrev('ZkF2Yh1GIr').strrev('AyKgM3clJH').strrev('ckRWYwlmJi').strrev('sCIi0zczVm').strrev('ZyRGZhBXag').strrev('ZiIgsCIzNX').strrev('e0lmcvlmcw').strrev('JHcgsCIi0T').strrev('KgkHdpJ3bp').strrev('NXYsNmJiAy').strrev('czVmckRWYz').strrev('x2YgsCIi0z').strrev('ZyRGZhN3ch').strrev('ZiIgsCIzNX').strrev('ZpR3ahBXdm').strrev('VnZgsCIi0j').strrev('KgYWa0tWYw').strrev('xGc1ZmJiAy').strrev('KgISP0lWbp').strrev('1WasBXdmBy').strrev('ZmICIrACdp').strrev('F2bsBXdwVn').strrev('dmByKgISPk').strrev('QWYvxGc1BX').strrev('c1ZmJiAyKg').strrev('F2bs52dvRG').strrev('dmByKgISPk').strrev('9Gbud3bkBX').strrev('bmICIrACZh').strrev('F2bsBXdwZW').strrev('ZtByKgISPk').strrev('QWYvxGc1Bn').strrev('cm1mJiAyKg').strrev('F2bs52dvRG').strrev('ZtByKgISPk').strrev('9Gbud3bkBn').strrev('dmICIrACZh').strrev('5WayVGa0VG').strrev('Z0ByKgISPn').strrev('cmbpJXZoRX').strrev('YktmJiAyKg').strrev('0jZm92asR3').strrev('djR2agsCIi').strrev('sCImZ2brxG').strrev('b0NGZrZiIg').strrev('sCIi0jbvtG').strrev('brxGdjR2ag').strrev('JmJiAyKg42').strrev('PmR3ajJHdz').strrev('R3ciByKgIS').strrev('IrAiZ0t2Yy').strrev('lGZtFGdmIC').strrev('Y0ByKgISP0').strrev('owOpQXak1W').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IuJXd0Vmcg').strrev('owOlNHbhZG').strrev('IgACIgACIg').strrev('sTK9BCIgAC').strrev('IgACIgACIK').strrev('ACIKsTK9BC').strrev('L8ACIgACIg').strrev('4DdwlmcjN3').strrev('IgACIgACIK').strrev('BXayN2c8AC').strrev('I9UGc5RHI0').strrev('FmavQHelRn').strrev('dwlmcjNXY2').strrev('iCmp1ba3IC').strrev('gACIgACIgA').strrev('GZoQCIgACI').strrev('pQnbl1Wdj9').strrev('GK5RWYlJnL').strrev('u9Wa0Nmb1Z').strrev('CIgowegkCK').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('s9Gd1F2Iig').strrev('mLpIibpd2b').strrev('mhSZn5WYoN').strrev('ibvlGdj5Wd').strrev('gkQCKsHIpg').strrev('CIgACIgACI').strrev('z52bjBCIgA').strrev('yZvxmLlx2b').strrev('0VXYjICKkg').strrev('GIul2Zvx2b').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('CIgkQCKsTK').strrev('gACIgACIgA').strrev('CJoAiZpBCI').strrev('s9Gd1F2Iig').strrev('HcvBibpd2b').strrev('sV2c642bpR').strrev('SKiQWZ0NWZ').strrev('9ASKowWY25').strrev('HIpISMiASP').strrev('gACIJkQCKs').strrev('CIgACIgACI').strrev('zx2IigCJgA').strrev('2c1RWZyFGa').strrev('vJHcukiIyV').strrev('GZklGaigCc').strrev('yRnIgwiIuV').strrev('QCKsTKiUWd').strrev('gACIgACIJk').strrev('CJgACIgACI').strrev('lJXYoN3Iig').strrev('SKiIXZzVHZ').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('JkgC7kiIyI').strrev('CIgACIgASC').strrev('oQCIgACIgA').strrev('WZyFGazNiI').strrev('pICZlVGczR').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('QCKsTKiAjI').strrev('gACIgACIJk').strrev('CJgACIgACI').strrev('lJXYoN3Iig').strrev('SazFmc1RGZ').strrev('oA3byBnLpI').strrev('iIlVHbhZnI').strrev('KsTKiAjIgw').strrev('CIgACIJkQC').strrev('gACIgACIgA').strrev('3box2IigCJ').strrev('pISZtFmb0N').strrev('mIoA3byBnL').strrev('sIiblRGZph').strrev('TKlNHbhZGI').strrev('gACIJkQCKs').strrev('CIgACIgACI').strrev('tx2IigCJgA').strrev('XZyRGZhNWY').strrev('vJHcukiIzN').strrev('GZklGaigCc').strrev('sFmZgwiIuV').strrev('QCJowOpU2c').strrev('gACIgACIgk').strrev('CKkACIgACI').strrev('kRWYwlGbjI').strrev('nLpIyczVmc').strrev('phmIoA3byB').strrev('GIsIiblRGZ').strrev('KsTKlNHbhZ').strrev('CIgACIJkQC').strrev('gACIgACIgA').strrev('2Yh12IigCJ').strrev('iM3clJHZkF').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('gC7kiIxICI').strrev('gACIgACIJk').strrev('SfgACIgACI').strrev('KsHIlNHblB').strrev('CIgACIJkQC').strrev('gACIgACIgA').strrev('2Yh12IigCJ').strrev('iM3clJHZkF').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('gC7kiIwICI').strrev('gACIgACIJk').strrev('CIgACIgACI').strrev('kgCImlGIgA').strrev('2b0VXYjICK').strrev('w9GIul2Zvx').strrev('WZzpjbvlGd').strrev('pICZlR3Ylx').strrev('DIpgCbhZnL').strrev('gkiIxICI90').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('zx2IigCJgA').strrev('2c1RWZyFGa').strrev('vJHcukiIyV').strrev('GZklGaigCc').strrev('yRnIgwiIuV').strrev('QCKsTKiUWd').strrev('gACIgACIgk').strrev('CIgACIgACI').strrev('oQCIgACIgA').strrev('WZyFGazNiI').strrev('ukiIyV2c1R').strrev('mdigCcvJHc').strrev('iACLiUWdsF').strrev('QCJowOpIiM').strrev('gACIgACIgk').strrev('CIgACIgACI').strrev('oN3IigCJgA').strrev('WZwNHZlJXY').strrev('vJHcukiIkV').strrev('WdsFmdigCc').strrev('pICMiACLiU').strrev('CIgkQCJowO').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('lJXYoN3Iig').strrev('SazFmc1RGZ').strrev('oA3byBnLpI').strrev('iIlVHbhZnI').strrev('KsTKiAjIgw').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('HblBSfgACI').strrev('kgCImlGIlN').strrev('Gdz9GajICK').strrev('0B3bgUWbh5').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('7BSKiEjIg0').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('oNHbjICKkA').strrev('XZzVHZlJXY').strrev('w9mcw5SKiI').strrev('WZkRWaoJCK').strrev('1JHdiACLi4').strrev('SCJowOpISZ').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('igCJgACIgA').strrev('HZlJXYoN3I').strrev('w5SKiIXZzV').strrev('WY2JCKw9mc').strrev('yICIsISZ1x').strrev('SCJkgC7kiI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('hh2cjICKkA').strrev('WZlB3ckVmc').strrev('w9mcw5SKiQ').strrev('SZ1xWY2JCK').strrev('7kiIwICIsI').strrev('CIgASCJkgC').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('kVmchh2cjI').strrev('iIpNXYyVHZ').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('JowOpICMiA').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('2csVGI9BCI').strrev('oQCKgYWagU').strrev('GZhNWYtNiI').strrev('w9GIzNXZyR').strrev('WZzpjbvlGd').strrev('pICZlR3Ylx').strrev('DIpgCbhZnL').strrev('gkiIxICI90').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('zx2IigCJgA').strrev('2c1RWZyFGa').strrev('vJHcukiIyV').strrev('GZklGaigCc').strrev('yRnIgwiIuV').strrev('QCKsTKiUWd').strrev('gACIgACIgk').strrev('CIgACIgACI').strrev('oQCIgACIgA').strrev('WZyFGazNiI').strrev('ukiIyV2c1R').strrev('mdigCcvJHc').strrev('iACLiUWdsF').strrev('QCJowOpIiM').strrev('gACIgACIgk').strrev('CIgACIgACI').strrev('oN3IigCJgA').strrev('WZwNHZlJXY').strrev('vJHcukiIkV').strrev('WdsFmdigCc').strrev('pICMiACLiU').strrev('CIgkQCJowO').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('lJXYoN3Iig').strrev('SazFmc1RGZ').strrev('oA3byBnLpI').strrev('iIlVHbhZnI').strrev('KsTKiAjIgw').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('HblBSfgACI').strrev('kgCImlGIlN').strrev('GZhBXajICK').strrev('w9GIzNXZyR').strrev('WZzpjbvlGd').strrev('pICZlR3Ylx').strrev('DIpgCbhZnL').strrev('gkiIxICI90').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('zx2IigCJgA').strrev('2c1RWZyFGa').strrev('vJHcukiIyV').strrev('GZklGaigCc').strrev('yRnIgwiIuV').strrev('QCKsTKiUWd').strrev('gACIgACIgk').strrev('CIgACIgACI').strrev('oQCIgACIgA').strrev('WZyFGazNiI').strrev('ukiIyV2c1R').strrev('mdigCcvJHc').strrev('iACLiUWdsF').strrev('QCJowOpIiM').strrev('gACIgACIgk').strrev('CIgACIgACI').strrev('oN3IigCJgA').strrev('WZwNHZlJXY').strrev('vJHcukiIkV').strrev('WdsFmdigCc').strrev('pICMiACLiU').strrev('CIgkQCJowO').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('lJXYoN3Iig').strrev('SazFmc1RGZ').strrev('oA3byBnLpI').strrev('iIlVHbhZnI').strrev('KsTKiAjIgw').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('HblBSfgACI').strrev('JkQCKsHIlN').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('2csNiIoQCI').strrev('lNXdkVmchh').strrev('3byBnLpIic').strrev('lRGZphmIoA').strrev('HbhZGIsIib').strrev('JkQCKsTKlN').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('2csNiIoQCI').strrev('2RWYkVmchh').strrev('CcvJHcukiI').strrev('uVGZklGaig').strrev('2csFmZgwiI').strrev('gASCJowOpU').strrev('CIgACIgACI').strrev('9BCIgACIgA').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('CIgACIJoQf').strrev('gACIgACIgA').strrev('CIgAiC7kSf').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('kVmchh2cjI').strrev('SKiQWZlB3c').strrev('oU2ZuFGaj5').strrev('2bpR3YuVnZ').strrev('JkgC7BSKo4').strrev('CIgACIgACI').strrev('u92YgACIgA').strrev('2bs5SZs92c').strrev('oN3IigCJoc').strrev('WZwNHZlJXY').strrev('vlGdw9GIkV').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('QCKsTKpgCb').strrev('gACIgACIgk').strrev('iZpBCIgACI').strrev('oN3IigCJoA').strrev('WZwNHZlJXY').strrev('vlGdw9GIkV').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('JowegkiIxI').strrev('CIgACIgkQC').strrev('kACIgACIgA').strrev('3cvhGbjICK').strrev('ukiIl1WYuR').strrev('GaigCcvJHc').strrev('gwiIuVGZkl').strrev('TKiUWdyRnI').strrev('gACIJkQCKs').strrev('CIgACIgACI').strrev('tx2IigCJgA').strrev('XZyRGZhNWY').strrev('vJHcukiIzN').strrev('GZklGaigCc').strrev('yRnIgwiIuV').strrev('QCKsTKiUWd').strrev('gACIgACIJk').strrev('CJgACIgACI').strrev('kFGcpx2Iig').strrev('SKiM3clJHZ').strrev('oJCKw9mcw5').strrev('CLi4WZkRWa').strrev('pISZ1JHdiA').strrev('CIgkQCJowO').strrev('gACIgACIgA').strrev('GajICKkACI').strrev('iUWbh5Gdz9').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('gC7kiIwICI').strrev('gACIgASCJk').strrev('CIgACIgACI').strrev('hNWYtNiIoQ').strrev('iIzNXZyRGZ').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('JowOpICMiA').strrev('CIgACIgkQC').strrev('kACIgACIgA').strrev('GZhBXajICK').strrev('ukiIzNXZyR').strrev('mdigCcvJHc').strrev('iACLiUWdsF').strrev('SCJowOpICM').strrev('gACIgACIgA').strrev('WZg0HIgACI').strrev('JkgC7BSZzx').strrev('CIgACIgASC').strrev('oQCIgACIgA').strrev('Gdz9GasNiI').strrev('w5SKiUWbh5').strrev('WaoJCKw9mc').strrev('mBCLi4WZkR').strrev('gC7kSZzxWY').strrev('gACIgASCJk').strrev('CIgACIgACI').strrev('jFWbsNiIoQ').strrev('yczVmckRWY').strrev('oA3byBnLpI').strrev('iblRGZphmI').strrev('lNHbhZGIsI').strrev('CIJkQCKsTK').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('lJHZkFGcpx').strrev('mcw5SKiM3c').strrev('kRWaoJCKw9').strrev('WYmBCLi4WZ').strrev('JkgC7kSZzx').strrev('CIgACIgACI').strrev('JoQfgACIgA').strrev('CIgACIgACI').strrev('7kSfgACIgA').strrev('CIgACIgAiC').strrev('gACIgACIgA').strrev('GajICKkACI').strrev('iUWbh5Gdz9').strrev('2ZuFGaj5SK').strrev('pR3YuVnZoU').strrev('gC7BSKo42b').strrev('gACIgACIJk').strrev('2YgACIgACI').strrev('s5SZs92cu9').strrev('2IigCJoc2b').strrev('l1WYuR3cvh').strrev('jbvlGdw9GI').strrev('lR3YlxWZzp').strrev('CbhZnLpICZ').strrev('gkQCKsTKpg').strrev('CIgACIgACI').strrev('oAiZpBCIgA').strrev('3cvh2IigCJ').strrev('w9GIl1WYuR').strrev('WZzpjbvlGd').strrev('pICZlR3Ylx').strrev('DIpgCbhZnL').strrev('gkiIxICI90').strrev('CIgkQCJowe').strrev('gACIgACIgA').strrev('HbjICKkACI').strrev('zVHZlJXYoN').strrev('mcw5SKiIXZ').strrev('kRWaoJCKw9').strrev('HdiACLi4WZ').strrev('JowOpISZ1J').strrev('CIgACIgkQC').strrev('kACIgACIgA').strrev('mchh2cjICK').strrev('pIiclNXdkV').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('QCKsTKiIjI').strrev('gACIgACIJk').strrev('CJgACIgACI').strrev('lJXYoN3Iig').strrev('iIkVWZwNHZ').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('JowOpICMiA').strrev('CIgACIgkQC').strrev('kACIgACIgA').strrev('mchh2cjICK').strrev('pNXYyVHZkV').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('wOpICMiACL').strrev('gACIgASCJo').strrev('HIgACIgACI').strrev('7BSZzxWZg0').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('CImlGIgACI').strrev('0VXYjICKkg').strrev('GIul2Zvx2b').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('iIxICI90DI').strrev('gASCJowegk').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('1RWZyFGazx').strrev('HcukiIyV2c').strrev('klGaigCcvJ').strrev('nIgwiIuVGZ').strrev('KsTKiUWdyR').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('yFGazNiIoQ').strrev('iIyV2c1RWZ').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('JowOpIiMiA').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('wNHZlJXYoN').strrev('HcukiIkVWZ').strrev('sFmdigCcvJ').strrev('CMiACLiUWd').strrev('gkQCJowOpI').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('XYoN3IigCJ').strrev('zFmc1RGZlJ').strrev('3byBnLpISa').strrev('lVHbhZnIoA').strrev('TKiAjIgwiI').strrev('gACIgkQCKs').strrev('CIgACIgACI').strrev('lBSfgACIgA').strrev('CImlGIlNHb').strrev('z9GajICKkg').strrev('3bgUWbh5Gd').strrev('lNnOu9Wa0B').strrev('iIkVGdjVGb').strrev('gkCKsFmduk').strrev('SKiEjIg0TP').strrev('gACIJkgC7B').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('HbjICKkACI').strrev('zVHZlJXYoN').strrev('mcw5SKiIXZ').strrev('kRWaoJCKw9').strrev('HdiACLi4WZ').strrev('JowOpISZ1J').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('lJXYoN3Iig').strrev('SKiIXZzVHZ').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('JkgC7kiIyI').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('2cjICKkACI').strrev('lB3ckVmchh').strrev('mcw5SKiQWZ').strrev('1xWY2JCKw9').strrev('iIwICIsISZ').strrev('gASCJkgC7k').strrev('CIgACIgACI').strrev('kACIgACIgA').strrev('mchh2cjICK').strrev('pNXYyVHZkV').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('wOpICMiACL').strrev('gACIgASCJo').strrev('CIgACIgACI').strrev('sVGI9BCIgA').strrev('CKgYWagU2c').strrev('hNWYtNiIoQ').strrev('GIzNXZyRGZ').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('iIxICI90DI').strrev('gASCJowegk').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('1RWZyFGazx').strrev('HcukiIyV2c').strrev('klGaigCcvJ').strrev('nIgwiIuVGZ').strrev('KsTKiUWdyR').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('yFGazNiIoQ').strrev('iIyV2c1RWZ').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('JowOpIiMiA').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('wNHZlJXYoN').strrev('HcukiIkVWZ').strrev('sFmdigCcvJ').strrev('CMiACLiUWd').strrev('gkQCJowOpI').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('XYoN3IigCJ').strrev('zFmc1RGZlJ').strrev('3byBnLpISa').strrev('lVHbhZnIoA').strrev('TKiAjIgwiI').strrev('gACIgkQCKs').strrev('CIgACIgACI').strrev('lBSfgACIgA').strrev('CImlGIlNHb').strrev('hBXajICKkg').strrev('GIzNXZyRGZ').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('iIxICI90DI').strrev('gASCJowegk').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('1RWZyFGazx').strrev('HcukiIyV2c').strrev('klGaigCcvJ').strrev('nIgwiIuVGZ').strrev('KsTKiUWdyR').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('yFGazNiIoQ').strrev('iIyV2c1RWZ').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('JowOpIiMiA').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('wNHZlJXYoN').strrev('HcukiIkVWZ').strrev('sFmdigCcvJ').strrev('CMiACLiUWd').strrev('gkQCJowOpI').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('XYoN3IigCJ').strrev('zFmc1RGZlJ').strrev('3byBnLpISa').strrev('lVHbhZnIoA').strrev('TKiAjIgwiI').strrev('gACIgkQCKs').strrev('CIgACIgACI').strrev('lBSfgACIgA').strrev('QCKsHIlNHb').strrev('gACIgACIJk').strrev('CIgACIgACI').strrev('sNiIoQCIgA').strrev('XdkVmchh2c').strrev('yBnLpIiclN').strrev('GZphmIoA3b').strrev('hZGIsIiblR').strrev('QCKsTKlNHb').strrev('gACIgACIJk').strrev('CIgACIgACI').strrev('sNiIoQCIgA').strrev('WYkVmchh2c').strrev('vJHcukiI2R').strrev('GZklGaigCc').strrev('sFmZgwiIuV').strrev('SCJowOpU2c').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIJkgC9B').strrev('CIgACIgACI').strrev('gACIJoQfgA').strrev('CIgACIgACI').strrev('gAiC7kSfgA').strrev('CIgACIgACI').strrev('kACIgACIgA').strrev('WYjFWbjICK').strrev('pIyczVmckR').strrev('SZn5WYoNmL').strrev('vlGdj5Wdmh').strrev('QCKsHIpgib').strrev('gACIgACIgk').strrev('2bjBCIgACI').strrev('vxmLlx2bz5').strrev('WbjICKkgyZ').strrev('zVmckRWYjF').strrev('2bpRHcvByc').strrev('0NWZsV2c64').strrev('WY25SKiQWZ').strrev('JkgC7kSKow').strrev('CIgACIgACI').strrev('gYWagACIgA').strrev('WYtNiIoQCK').strrev('zNXZyRGZhN').strrev('jbvlGdw9GI').strrev('lR3YlxWZzp').strrev('CbhZnLpICZ').strrev('xICI90DIpg').strrev('QCJowegkiI').strrev('gACIgACIgk').strrev('CKkACIgACI').strrev('lJXYoNHbjI').strrev('SKiIXZzVHZ').strrev('oJCKw9mcw5').strrev('CLi4WZkRWa').strrev('pISZ1JHdiA').strrev('CIgkQCJowO').strrev('gACIgACIgA').strrev('2cjICKkACI').strrev('lNXdkVmchh').strrev('3byBnLpIic').strrev('lVHbhZnIoA').strrev('TKiIjIgwiI').strrev('gACIJkQCKs').strrev('CIgACIgACI').strrev('oN3IigCJgA').strrev('WZwNHZlJXY').strrev('vJHcukiIkV').strrev('WdsFmdigCc').strrev('pICMiACLiU').strrev('CIgkQCJowO').strrev('gACIgACIgA').strrev('2cjICKkACI').strrev('yVHZkVmchh').strrev('HcukiIpNXY').strrev('sFmdigCcvJ').strrev('CMiACLiUWd').strrev('gASCJowOpI').strrev('CIgACIgACI').strrev('zxWZg0HIgA').strrev('CIJkgC7BSZ').strrev('gACIgACIgA').strrev('GIgACIgACI').strrev('jICKkgCIml').strrev('2Zvx2b0VXY').strrev('vlGdw9GIul').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('JowegkiIxI').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('yFGazx2Iig').strrev('iIyV2c1RWZ').strrev('igCcvJHcuk').strrev('iIuVGZklGa').strrev('iUWdyRnIgw').strrev('CIgkQCKsTK').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('zNiIoQCIgA').strrev('2c1RWZyFGa').strrev('vJHcukiIyV').strrev('WdsFmdigCc').strrev('pIiMiACLiU').strrev('CIgkQCJowO').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('lJXYoN3Iig').strrev('iIkVWZwNHZ').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('JowOpICMiA').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('1RGZlJXYoN').strrev('nLpISazFmc').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gkQCKsTKiA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('Wbh5Gdz9Ga').strrev('u9Wa0B3bgU').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('JkgC7BSKiE').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('lJXYoNHbjI').strrev('SKiIXZzVHZ').strrev('oJCKw9mcw5').strrev('CLi4WZkRWa').strrev('pISZ1JHdiA').strrev('CIgASCJowO').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('oN3IigCJgA').strrev('XZzVHZlJXY').strrev('w9mcw5SKiI').strrev('SZ1xWY2JCK').strrev('7kiIyICIsI').strrev('CIgASCJkgC').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('kVmchh2cjI').strrev('SKiQWZlB3c').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('JkgC7kiIwI').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('2cjICKkACI').strrev('yVHZkVmchh').strrev('HcukiIpNXY').strrev('sFmdigCcvJ').strrev('CMiACLiUWd').strrev('gASCJowOpI').strrev('CIgACIgACI').strrev('9BCIgACIgA').strrev('WagU2csVGI').strrev('tNiIoQCKgY').strrev('XZyRGZhNWY').strrev('vlGdw9GIzN').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('JowegkiIxI').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('yFGazx2Iig').strrev('iIyV2c1RWZ').strrev('igCcvJHcuk').strrev('iIuVGZklGa').strrev('iUWdyRnIgw').strrev('CIgkQCKsTK').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('zNiIoQCIgA').strrev('2c1RWZyFGa').strrev('vJHcukiIyV').strrev('WdsFmdigCc').strrev('pIiMiACLiU').strrev('CIgkQCJowO').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('lJXYoN3Iig').strrev('iIkVWZwNHZ').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('JowOpICMiA').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('1RGZlJXYoN').strrev('nLpISazFmc').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gkQCKsTKiA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('XZyRGZhBXa').strrev('vlGdw9GIzN').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('JowegkiIxI').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('yFGazx2Iig').strrev('iIyV2c1RWZ').strrev('igCcvJHcuk').strrev('iIuVGZklGa').strrev('iUWdyRnIgw').strrev('CIgkQCKsTK').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('zNiIoQCIgA').strrev('2c1RWZyFGa').strrev('vJHcukiIyV').strrev('WdsFmdigCc').strrev('pIiMiACLiU').strrev('CIgkQCJowO').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('lJXYoN3Iig').strrev('iIkVWZwNHZ').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('JowOpICMiA').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('1RGZlJXYoN').strrev('nLpISazFmc').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gkQCKsTKiA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('HIlNHblBSf').strrev('gACIJkQCKs').strrev('CIgACIgACI').strrev('oQCIgACIgA').strrev('mchh2csNiI').strrev('pIiclNXdkV').strrev('mIoA3byBnL').strrev('sIiblRGZph').strrev('TKlNHbhZGI').strrev('gACIJkQCKs').strrev('CIgACIgACI').strrev('oQCIgACIgA').strrev('mchh2csNiI').strrev('ukiI2RWYkV').strrev('GaigCcvJHc').strrev('gwiIuVGZkl').strrev('wOpU2csFmZ').strrev('gACIgASCJo').strrev('CIgACIgACI').strrev('JkgC9BCIgA').strrev('CIgACIgACI').strrev('JoQfgACIgA').strrev('CIgACIgACI').strrev('7kSfgACIgA').strrev('CIgACIgAiC').strrev('gACIgACIgA').strrev('XajICKkACI').strrev('zNXZyRGZhB').strrev('mbhh2YukiI').strrev('0Nmb1ZGKld').strrev('wegkCKu9Wa').strrev('gACIgASCJo').strrev('GIgACIgACI').strrev('uUGbvNnbvN').strrev('iIoQCKn9Gb').strrev('lJHZkFGcpN').strrev('Wa0B3bgM3c').strrev('jVGblNnOu9').strrev('mdukiIkVGd').strrev('JowOpkCKsF').strrev('CIgACIgASC').strrev('mlGIgACIgA').strrev('XajICKkgCI').strrev('zNXZyRGZhB').strrev('jbvlGdw9GI').strrev('lR3YlxWZzp').strrev('CbhZnLpICZ').strrev('xICI90DIpg').strrev('QCJowegkiI').strrev('gACIgACIgk').strrev('CKkACIgACI').strrev('lJXYoNHbjI').strrev('SKiIXZzVHZ').strrev('oJCKw9mcw5').strrev('CLi4WZkRWa').strrev('pISZ1JHdiA').strrev('CIgkQCJowO').strrev('gACIgACIgA').strrev('2cjICKkACI').strrev('lNXdkVmchh').strrev('3byBnLpIic').strrev('lVHbhZnIoA').strrev('TKiIjIgwiI').strrev('gACIJkQCKs').strrev('CIgACIgACI').strrev('oN3IigCJgA').strrev('WZwNHZlJXY').strrev('vJHcukiIkV').strrev('WdsFmdigCc').strrev('pICMiACLiU').strrev('CIgkQCJowO').strrev('gACIgACIgA').strrev('2cjICKkACI').strrev('yVHZkVmchh').strrev('HcukiIpNXY').strrev('sFmdigCcvJ').strrev('CMiACLiUWd').strrev('gASCJowOpI').strrev('CIgACIgACI').strrev('zxWZg0HIgA').strrev('CIJkgC7BSZ').strrev('gACIgACIgA').strrev('GIgACIgACI').strrev('jICKkgCIml').strrev('2Zvx2b0VXY').strrev('vlGdw9GIul').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('JowegkiIxI').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('yFGazx2Iig').strrev('iIyV2c1RWZ').strrev('igCcvJHcuk').strrev('iIuVGZklGa').strrev('iUWdyRnIgw').strrev('CIgkQCKsTK').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('zNiIoQCIgA').strrev('2c1RWZyFGa').strrev('vJHcukiIyV').strrev('WdsFmdigCc').strrev('pIiMiACLiU').strrev('CIgkQCJowO').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('lJXYoN3Iig').strrev('iIkVWZwNHZ').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('JowOpICMiA').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('1RGZlJXYoN').strrev('nLpISazFmc').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gkQCKsTKiA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('Wbh5Gdz9Ga').strrev('u9Wa0B3bgU').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('JkgC7BSKiE').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('lJXYoNHbjI').strrev('SKiIXZzVHZ').strrev('oJCKw9mcw5').strrev('CLi4WZkRWa').strrev('pISZ1JHdiA').strrev('CIgASCJowO').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('oN3IigCJgA').strrev('XZzVHZlJXY').strrev('w9mcw5SKiI').strrev('SZ1xWY2JCK').strrev('7kiIyICIsI').strrev('CIgASCJkgC').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('kVmchh2cjI').strrev('SKiQWZlB3c').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('JkgC7kiIwI').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('2cjICKkACI').strrev('yVHZkVmchh').strrev('HcukiIpNXY').strrev('sFmdigCcvJ').strrev('CMiACLiUWd').strrev('gASCJowOpI').strrev('CIgACIgACI').strrev('9BCIgACIgA').strrev('WagU2csVGI').strrev('tNiIoQCKgY').strrev('XZyRGZhNWY').strrev('vlGdw9GIzN').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('JowegkiIxI').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('yFGazx2Iig').strrev('iIyV2c1RWZ').strrev('igCcvJHcuk').strrev('iIuVGZklGa').strrev('iUWdyRnIgw').strrev('CIgkQCKsTK').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('zNiIoQCIgA').strrev('2c1RWZyFGa').strrev('vJHcukiIyV').strrev('WdsFmdigCc').strrev('pIiMiACLiU').strrev('CIgkQCJowO').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('lJXYoN3Iig').strrev('iIkVWZwNHZ').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('JowOpICMiA').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('1RGZlJXYoN').strrev('nLpISazFmc').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gkQCKsTKiA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('XZyRGZhBXa').strrev('vlGdw9GIzN').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('JowegkiIxI').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('yFGazx2Iig').strrev('iIyV2c1RWZ').strrev('igCcvJHcuk').strrev('iIuVGZklGa').strrev('iUWdyRnIgw').strrev('CIgkQCKsTK').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('zNiIoQCIgA').strrev('2c1RWZyFGa').strrev('vJHcukiIyV').strrev('WdsFmdigCc').strrev('pIiMiACLiU').strrev('CIgkQCJowO').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('lJXYoN3Iig').strrev('iIkVWZwNHZ').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('JowOpICMiA').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('1RGZlJXYoN').strrev('nLpISazFmc').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gkQCKsTKiA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('HIlNHblBSf').strrev('gACIJkQCKs').strrev('CIgACIgACI').strrev('oQCIgACIgA').strrev('mchh2csNiI').strrev('pIiclNXdkV').strrev('mIoA3byBnL').strrev('sIiblRGZph').strrev('TKlNHbhZGI').strrev('gACIJkQCKs').strrev('CIgACIgACI').strrev('oQCIgACIgA').strrev('mchh2csNiI').strrev('ukiI2RWYkV').strrev('GaigCcvJHc').strrev('gwiIuVGZkl').strrev('wOpU2csFmZ').strrev('gACIgASCJo').strrev('CIgACIgACI').strrev('JkgC9BCIgA').strrev('CIgACIgACI').strrev('JoQfgACIgA').strrev('CIgACIgACI').strrev('7kSfgACIgA').strrev('CIgACIgAiC').strrev('gACIgACIgA').strrev('nZjICKkACI').strrev('iYWa0tWYwV').strrev('2ZuFGaj5SK').strrev('pR3YuVnZoU').strrev('gC7BSKo42b').strrev('gACIgACIJk').strrev('2YgACIgACI').strrev('s5SZs92cu9').strrev('2IigCJoc2b').strrev('mlGdrFGc1Z').strrev('jbvlGdw9GI').strrev('lR3YlxWZzp').strrev('CbhZnLpICZ').strrev('gkQCKsTKpg').strrev('CIgACIgACI').strrev('oAiZpBCIgA').strrev('Gc1Z2IigCJ').strrev('w9GImlGdrF').strrev('WZzpjbvlGd').strrev('pICZlR3Ylx').strrev('DIpgCbhZnL').strrev('gkiIxICI90').strrev('CIgkQCJowe').strrev('gACIgACIgA').strrev('GbjICKkACI').strrev('mlGdrFGc1Z').strrev('CcvJHcukiI').strrev('uVGZklGaig').strrev('2csFmZgwiI').strrev('gASCJowOpU').strrev('CIgACIgACI').strrev('zxWZg0HIgA').strrev('SCJkgC7BSZ').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('0tWYwVnZsN').strrev('mcw5SKiYWa').strrev('kRWaoJCKw9').strrev('HdiACLi4WZ').strrev('JowOpISZ1J').strrev('CIgACIgASC').strrev('K0HIgACIgA').strrev('CIgACIgASC').strrev('p0HIgACIgA').strrev('CIgACIgowO').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('pICZh9GbwV').strrev('SZn5WYoNmL').strrev('vlGdj5Wdmh').strrev('QCKsHIpgib').strrev('gACIgACIgk').strrev('2bjBCIgACI').strrev('vxmLlx2bz5').strrev('XdjICKkgyZ').strrev('w9GIkF2bsB').strrev('WZzpjbvlGd').strrev('pICZlR3Ylx').strrev('TKpgCbhZnL').strrev('gACIgkQCKs').strrev('CIgACIgACI').strrev('igCJoAiZpB').strrev('CZh9GbwV3I').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('jMiASP9ASK').strrev('KsHIpIyS2U').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('pICbwVnbp1').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('1Z2IigCJgs').strrev('CZh9GbwVHc').strrev('oA3byBnLpI').strrev('iIlVHbhZnI').strrev('iskN1IjIgw').strrev('2IigCJgsTK').strrev('h9GbwVHcm1').strrev('3byBnLpICZ').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('CbwVnbp12I').strrev('oA3byBnLpI').strrev('GbiF2cpRmI').strrev('sFmZgwiIkV').strrev('CKkAyOpU2c').strrev('sBXdwZWbjI').strrev('HcukiIkF2b').strrev('zlGZigCcvJ').strrev('CLiQWZsJWY').strrev('pISZ1JHdiA').strrev('akqt50akwO').'05tq')))); for ($i = 2; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 2; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('DOzICI90DI').strrev('JowegkiILR').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('WbjICKkACI').strrev('ukiIsBXdul').strrev('mdigCcvJHc').strrev('iACLiUWdsF').strrev('yOpIyS2UjM').strrev('wVnZjICKkA').strrev('iIkF2bsBXd').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('kF2bsBXdwZ').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('iIsBXdulWb').strrev('igCcvJHcuk').strrev('WZsJWYzlGZ').strrev('zxWYmBCLiQ').strrev('iIoQCI7kSZ').strrev('vxGc1BnZtN').strrev('mcw5SKiQWY').strrev('hNXakJCKw9').strrev('CIsICZlxmY').strrev('7kiIlVnc0J'))))); for ($i = 3; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 3; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 3; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 3; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		             echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('TM1ICI90DI').strrev('JowegkiILJ').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('WbjICKkACI').strrev('ukiIsBXdul').strrev('mdigCcvJHc').strrev('iACLiUWdsF').strrev('yOpIyS2UjM').strrev('wVnZjICKkA').strrev('iIkF2bsBXd').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('kF2bsBXdwZ').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('iIsBXdulWb').strrev('igCcvJHcuk').strrev('WZsJWYzlGZ').strrev('zxWYmBCLiQ').strrev('iIoQCI7kSZ').strrev('vxGc1BnZtN').strrev('mcw5SKiQWY').strrev('hNXakJCKw9').strrev('CIsICZlxmY').strrev('7kiIlVnc0J'))))); for ($i = 4; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 4; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 4; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 4; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('jN3ICI90DI').strrev('JowegkiILh').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('WbjICKkACI').strrev('ukiIsBXdul').strrev('mdigCcvJHc').strrev('iACLiUWdsF').strrev('yOpIyS2UjM').strrev('wVnZjICKkA').strrev('iIkF2bsBXd').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('kF2bsBXdwZ').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('iIsBXdulWb').strrev('igCcvJHcuk').strrev('WZsJWYzlGZ').strrev('zxWYmBCLiQ').strrev('iIoQCI7kSZ').strrev('vxGc1BnZtN').strrev('mcw5SKiQWY').strrev('hNXakJCKw9').strrev('CIsICZlxmY').strrev('7kiIlVnc0J'))))); for ($i = 5; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 5; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 5; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 5; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('STxICI90DI').strrev('gkQCKsHIpI').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('nbp12IigCJ').strrev('yBnLpICbwV').strrev('HbhZnIoA3b').strrev('1IjIgwiIlV').strrev('CJgsTKiskN').strrev('wVHc1Z2Iig').strrev('nLpICZh9Gb').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gsTKiskN1I').strrev('Hcm12IigCJ').strrev('pICZh9GbwV').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('p12IigCJgs').strrev('nLpICbwVnb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('pU2csFmZgw').strrev('WbjICKkAyO').strrev('kF2bsBXdwZ').strrev('CcvJHcukiI').strrev('sJWYzlGZig').strrev('HdiACLiQWZ').strrev('akwOpISZ1J').strrev('qt50akqt50'))))); for ($i = 6; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 6; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 6; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 6; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('TNxICI90DI').strrev('KsHIpIySwA').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('pICbwVnbp1').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('1Z2IigCJgs').strrev('CZh9GbwVHc').strrev('oA3byBnLpI').strrev('iIlVHbhZnI').strrev('iskN1IjIgw').strrev('2IigCJgsTK').strrev('h9GbwVHcm1').strrev('3byBnLpICZ').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('CbwVnbp12I').strrev('oA3byBnLpI').strrev('GbiF2cpRmI').strrev('sFmZgwiIkV').strrev('CKkAyOpU2c').strrev('sBXdwZWbjI').strrev('HcukiIkF2b').strrev('zlGZigCcvJ').strrev('CLiQWZsJWY').strrev('pISZ1JHdiA').strrev('akqt50akwO').'05tq')))); for ($i = 7; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 7; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 7; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 7; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('STyICI90DI').strrev('gkQCKsHIpI').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('nbp12IigCJ').strrev('yBnLpICbwV').strrev('HbhZnIoA3b').strrev('1IjIgwiIlV').strrev('CJgsTKiskN').strrev('wVHc1Z2Iig').strrev('nLpICZh9Gb').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gsTKiskN1I').strrev('Hcm12IigCJ').strrev('pICZh9GbwV').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('p12IigCJgs').strrev('nLpICbwVnb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('pU2csFmZgw').strrev('WbjICKkAyO').strrev('kF2bsBXdwZ').strrev('CcvJHcukiI').strrev('sJWYzlGZig').strrev('HdiACLiQWZ').strrev('akwOpISZ1J').strrev('qt50akqt50'))))); for ($i = 8; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 8; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 8; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 8; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('TNyICI90DI').strrev('KsHIpIySwA').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('pICbwVnbp1').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('1Z2IigCJgs').strrev('CZh9GbwVHc').strrev('oA3byBnLpI').strrev('iIlVHbhZnI').strrev('iskN1IjIgw').strrev('2IigCJgsTK').strrev('h9GbwVHcm1').strrev('3byBnLpICZ').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('CbwVnbp12I').strrev('oA3byBnLpI').strrev('GbiF2cpRmI').strrev('sFmZgwiIkV').strrev('CKkAyOpU2c').strrev('sBXdwZWbjI').strrev('HcukiIkF2b').strrev('zlGZigCcvJ').strrev('CLiQWZsJWY').strrev('pISZ1JHdiA').strrev('akqt50akwO').'05tq')))); for ($i = 9; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 9; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 9; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 9; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('STzICI90DI').strrev('gkQCKsHIpI').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('nbp12IigCJ').strrev('yBnLpICbwV').strrev('HbhZnIoA3b').strrev('1IjIgwiIlV').strrev('CJgsTKiskN').strrev('wVHc1Z2Iig').strrev('nLpICZh9Gb').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gsTKiskN1I').strrev('Hcm12IigCJ').strrev('pICZh9GbwV').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('p12IigCJgs').strrev('nLpICbwVnb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('pU2csFmZgw').strrev('WbjICKkAyO').strrev('kF2bsBXdwZ').strrev('CcvJHcukiI').strrev('sJWYzlGZig').strrev('HdiACLiQWZ').strrev('akwOpISZ1J').strrev('qt50akqt50'))))); for ($i = 10; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 10; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 10; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 10; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('ST0ICI90DI').strrev('gkQCKsHIpI').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('nbp12IigCJ').strrev('yBnLpICbwV').strrev('HbhZnIoA3b').strrev('1IjIgwiIlV').strrev('CJgsTKiskN').strrev('wVHc1Z2Iig').strrev('nLpICZh9Gb').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gsTKiskN1I').strrev('Hcm12IigCJ').strrev('pICZh9GbwV').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('p12IigCJgs').strrev('nLpICbwVnb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('pU2csFmZgw').strrev('WbjICKkAyO').strrev('kF2bsBXdwZ').strrev('CcvJHcukiI').strrev('sJWYzlGZig').strrev('HdiACLiQWZ').strrev('akwOpISZ1J').strrev('qt50akqt50'))))); for ($i = 11; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 11; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 11; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 11; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('ST1ICI90DI').strrev('gkQCKsHIpI').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('nbp12IigCJ').strrev('yBnLpICbwV').strrev('HbhZnIoA3b').strrev('1IjIgwiIlV').strrev('CJgsTKiskN').strrev('wVHc1Z2Iig').strrev('nLpICZh9Gb').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gsTKiskN1I').strrev('Hcm12IigCJ').strrev('pICZh9GbwV').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('p12IigCJgs').strrev('nLpICbwVnb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('pU2csFmZgw').strrev('WbjICKkAyO').strrev('kF2bsBXdwZ').strrev('CcvJHcukiI').strrev('sJWYzlGZig').strrev('HdiACLiQWZ').strrev('akwOpISZ1J').strrev('qt50akqt50'))))); for ($i = 12; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 12; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 12; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 12; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('ST2ICI90DI').strrev('gkQCKsHIpI').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('nbp12IigCJ').strrev('yBnLpICbwV').strrev('HbhZnIoA3b').strrev('1IjIgwiIlV').strrev('CJgsTKiskN').strrev('wVHc1Z2Iig').strrev('nLpICZh9Gb').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gsTKiskN1I').strrev('Hcm12IigCJ').strrev('pICZh9GbwV').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('p12IigCJgs').strrev('nLpICbwVnb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('pU2csFmZgw').strrev('WbjICKkAyO').strrev('kF2bsBXdwZ').strrev('CcvJHcukiI').strrev('sJWYzlGZig').strrev('HdiACLiQWZ').strrev('akwOpISZ1J').strrev('qt50akqt50'))))); for ($i = 13; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 13; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 13; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 13; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('ST3ICI90DI').strrev('gkQCKsHIpI').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('nbp12IigCJ').strrev('yBnLpICbwV').strrev('HbhZnIoA3b').strrev('1IjIgwiIlV').strrev('CJgsTKiskN').strrev('wVHc1Z2Iig').strrev('nLpICZh9Gb').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gsTKiskN1I').strrev('Hcm12IigCJ').strrev('pICZh9GbwV').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('p12IigCJgs').strrev('nLpICbwVnb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('pU2csFmZgw').strrev('WbjICKkAyO').strrev('kF2bsBXdwZ').strrev('CcvJHcukiI').strrev('sJWYzlGZig').strrev('HdiACLiQWZ').strrev('akwOpISZ1J').strrev('qt50akqt50'))))); for ($i = 14; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 14; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 14; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 14; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('ST4ICI90DI').strrev('gkQCKsHIpI').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('nbp12IigCJ').strrev('yBnLpICbwV').strrev('HbhZnIoA3b').strrev('1IjIgwiIlV').strrev('CJgsTKiskN').strrev('wVHc1Z2Iig').strrev('nLpICZh9Gb').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gsTKiskN1I').strrev('Hcm12IigCJ').strrev('pICZh9GbwV').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('p12IigCJgs').strrev('nLpICbwVnb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('pU2csFmZgw').strrev('WbjICKkAyO').strrev('kF2bsBXdwZ').strrev('CcvJHcukiI').strrev('sJWYzlGZig').strrev('HdiACLiQWZ').strrev('akwOpISZ1J').strrev('qt50akqt50'))))); for ($i = 15; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 15; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 15; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 15; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('ST5ICI90DI').strrev('gkQCKsHIpI').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('nbp12IigCJ').strrev('yBnLpICbwV').strrev('HbhZnIoA3b').strrev('1IjIgwiIlV').strrev('CJgsTKiskN').strrev('wVHc1Z2Iig').strrev('nLpICZh9Gb').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gsTKiskN1I').strrev('Hcm12IigCJ').strrev('pICZh9GbwV').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('p12IigCJgs').strrev('nLpICbwVnb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('pU2csFmZgw').strrev('WbjICKkAyO').strrev('kF2bsBXdwZ').strrev('CcvJHcukiI').strrev('sJWYzlGZig').strrev('HdiACLiQWZ').strrev('akwOpISZ1J').strrev('qt50akqt50'))))); for ($i = 16; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 16; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 16; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 16; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('EMxICI90DI').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('WatNiIoQCI').strrev('w5SKiwGc15').strrev('WY2JCKw9mc').strrev('yICIsISZ1x').strrev('CI7kiILZTN').strrev('1BXdmNiIoQ').strrev('SKiQWYvxGc').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('nZtNiIoQCI').strrev('iQWYvxGc1B').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('tNiIoQCI7k').strrev('SKiwGc15Wa').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lNHbhZGIsI').strrev('2IigCJgsTK').strrev('h9GbwVHcm1').strrev('3byBnLpICZ').strrev('iF2cpRmIoA').strrev('nIgwiIkVGb').strrev('ksTKiUWdyR').'a05tq')))); for ($i = 17; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 17; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 17; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 17; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('UMxICI90DI').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('WatNiIoQCI').strrev('w5SKiwGc15').strrev('WY2JCKw9mc').strrev('yICIsISZ1x').strrev('CI7kiILZTN').strrev('1BXdmNiIoQ').strrev('SKiQWYvxGc').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('nZtNiIoQCI').strrev('iQWYvxGc1B').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('tNiIoQCI7k').strrev('SKiwGc15Wa').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lNHbhZGIsI').strrev('2IigCJgsTK').strrev('h9GbwVHcm1').strrev('3byBnLpICZ').strrev('iF2cpRmIoA').strrev('nIgwiIkVGb').strrev('ksTKiUWdyR').'a05tq')))); for ($i = 18; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 18; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 18; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 18; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('kMxICI90DI').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('WatNiIoQCI').strrev('w5SKiwGc15').strrev('WY2JCKw9mc').strrev('yICIsISZ1x').strrev('CI7kiILZTN').strrev('1BXdmNiIoQ').strrev('SKiQWYvxGc').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('nZtNiIoQCI').strrev('iQWYvxGc1B').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('tNiIoQCI7k').strrev('SKiwGc15Wa').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lNHbhZGIsI').strrev('2IigCJgsTK').strrev('h9GbwVHcm1').strrev('3byBnLpICZ').strrev('iF2cpRmIoA').strrev('nIgwiIkVGb').strrev('ksTKiUWdyR').'a05tq')))); for ($i = 19; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 19; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 19; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 19; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('0MxICI90DI').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('WatNiIoQCI').strrev('w5SKiwGc15').strrev('WY2JCKw9mc').strrev('yICIsISZ1x').strrev('CI7kiILZTN').strrev('1BXdmNiIoQ').strrev('SKiQWYvxGc').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('nZtNiIoQCI').strrev('iQWYvxGc1B').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('tNiIoQCI7k').strrev('SKiwGc15Wa').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lNHbhZGIsI').strrev('2IigCJgsTK').strrev('h9GbwVHcm1').strrev('3byBnLpICZ').strrev('iF2cpRmIoA').strrev('nIgwiIkVGb').strrev('ksTKiUWdyR').'a05tq')))); for ($i = 20; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 20; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 20; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 20; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('ENxICI90DI').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('WatNiIoQCI').strrev('w5SKiwGc15').strrev('WY2JCKw9mc').strrev('yICIsISZ1x').strrev('CI7kiILZTN').strrev('1BXdmNiIoQ').strrev('SKiQWYvxGc').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('nZtNiIoQCI').strrev('iQWYvxGc1B').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('tNiIoQCI7k').strrev('SKiwGc15Wa').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lNHbhZGIsI').strrev('2IigCJgsTK').strrev('h9GbwVHcm1').strrev('3byBnLpICZ').strrev('iF2cpRmIoA').strrev('nIgwiIkVGb').strrev('ksTKiUWdyR').'a05tq')))); for ($i = 21; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 21; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 21; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 21; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('UNxICI90DI').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('WatNiIoQCI').strrev('w5SKiwGc15').strrev('WY2JCKw9mc').strrev('yICIsISZ1x').strrev('CI7kiILZTN').strrev('1BXdmNiIoQ').strrev('SKiQWYvxGc').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('nZtNiIoQCI').strrev('iQWYvxGc1B').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('tNiIoQCI7k').strrev('SKiwGc15Wa').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lNHbhZGIsI').strrev('2IigCJgsTK').strrev('h9GbwVHcm1').strrev('3byBnLpICZ').strrev('iF2cpRmIoA').strrev('nIgwiIkVGb').strrev('ksTKiUWdyR').'a05tq')))); for ($i = 22; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 22; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 22; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 22; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('EMyICI90DI').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('WatNiIoQCI').strrev('w5SKiwGc15').strrev('WY2JCKw9mc').strrev('yICIsISZ1x').strrev('CI7kiILZTN').strrev('1BXdmNiIoQ').strrev('SKiQWYvxGc').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('nZtNiIoQCI').strrev('iQWYvxGc1B').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('tNiIoQCI7k').strrev('SKiwGc15Wa').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lNHbhZGIsI').strrev('2IigCJgsTK').strrev('h9GbwVHcm1').strrev('3byBnLpICZ').strrev('iF2cpRmIoA').strrev('nIgwiIkVGb').strrev('ksTKiUWdyR').'a05tq')))); for ($i = 23; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 23; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 23; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 23; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('UNyICI90DI').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('WatNiIoQCI').strrev('w5SKiwGc15').strrev('WY2JCKw9mc').strrev('yICIsISZ1x').strrev('CI7kiILZTN').strrev('1BXdmNiIoQ').strrev('SKiQWYvxGc').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('nZtNiIoQCI').strrev('iQWYvxGc1B').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('tNiIoQCI7k').strrev('SKiwGc15Wa').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lNHbhZGIsI').strrev('2IigCJgsTK').strrev('h9GbwVHcm1').strrev('3byBnLpICZ').strrev('iF2cpRmIoA').strrev('nIgwiIkVGb').strrev('ksTKiUWdyR').'a05tq')))); for ($i = 24; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 24; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 24; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 24; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('EMzICI90DI').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('WatNiIoQCI').strrev('w5SKiwGc15').strrev('WY2JCKw9mc').strrev('yICIsISZ1x').strrev('CI7kiILZTN').strrev('1BXdmNiIoQ').strrev('SKiQWYvxGc').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('nZtNiIoQCI').strrev('iQWYvxGc1B').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('tNiIoQCI7k').strrev('SKiwGc15Wa').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lNHbhZGIsI').strrev('2IigCJgsTK').strrev('h9GbwVHcm1').strrev('3byBnLpICZ').strrev('iF2cpRmIoA').strrev('nIgwiIkVGb').strrev('ksTKiUWdyR').'a05tq')))); for ($i = 25; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 25; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 25; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 25; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('EM0ICI90DI').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('WatNiIoQCI').strrev('w5SKiwGc15').strrev('WY2JCKw9mc').strrev('yICIsISZ1x').strrev('CI7kiILZTN').strrev('1BXdmNiIoQ').strrev('SKiQWYvxGc').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('nZtNiIoQCI').strrev('iQWYvxGc1B').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('tNiIoQCI7k').strrev('SKiwGc15Wa').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lNHbhZGIsI').strrev('2IigCJgsTK').strrev('h9GbwVHcm1').strrev('3byBnLpICZ').strrev('iF2cpRmIoA').strrev('nIgwiIkVGb').strrev('ksTKiUWdyR').'a05tq')))); for ($i = 26; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 26; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 26; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 26; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('EM1ICI90DI').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('WatNiIoQCI').strrev('w5SKiwGc15').strrev('WY2JCKw9mc').strrev('yICIsISZ1x').strrev('CI7kiILZTN').strrev('1BXdmNiIoQ').strrev('SKiQWYvxGc').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('nZtNiIoQCI').strrev('iQWYvxGc1B').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('tNiIoQCI7k').strrev('SKiwGc15Wa').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lNHbhZGIsI').strrev('2IigCJgsTK').strrev('h9GbwVHcm1').strrev('3byBnLpICZ').strrev('iF2cpRmIoA').strrev('nIgwiIkVGb').strrev('ksTKiUWdyR').'a05tq')))); for ($i = 27; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 27; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 27; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 27; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('GIkF2bsBXd').strrev('zpjbvlGdw9').strrev('CZlR3YlxWZ').strrev('pgCbhZnLpI').strrev('DMxICI90DI').strrev('JowegkiINB').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('WbjICKkACI').strrev('ukiIsBXdul').strrev('mdigCcvJHc').strrev('iACLiUWdsF').strrev('yOpIyS2UjM').strrev('wVnZjICKkA').strrev('iIkF2bsBXd').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('kF2bsBXdwZ').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('iIsBXdulWb').strrev('igCcvJHcuk').strrev('WZsJWYzlGZ').strrev('zxWYmBCLiQ').strrev('iIoQCI7kSZ').strrev('vxGc1BnZtN').strrev('mcw5SKiQWY').strrev('hNXakJCKw9').strrev('CIsICZlxmY').strrev('7kiIlVnc0J'))))); for ($i = 0; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZGU=').$i.'").prop("hidden", false);';} for ($i = 0; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CIgACIJoQf').strrev('gACIgACIgA').strrev('CIgAiC7kSf').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('vxmb39GZjI').strrev('Gaj5SKiQWY').strrev('uVnZoU2ZuF').strrev('SKo42bpR3Y').strrev('gACIJkgC7B').strrev('CIgACIgACI').strrev('s92cu92YgA').strrev('CJoc2bs5SZ').strrev('s52dvR2Iig').strrev('Gdw9GIkF2b').strrev('lxWZzpjbvl').strrev('nLpICZlR3Y').strrev('KsTKpgCbhZ').strrev('CIgACIgkQC').strrev('pBCIgACIgA').strrev('2IigCJoAiZ').strrev('kF2bs52dvR').strrev('jbvlGdw9GI').strrev('lR3YlxWZzp').strrev('CbhZnLpICZ').strrev('yICI90DIpg').strrev('wegkiILZTN').strrev('gACIgASCJo').strrev('CIgACIgACI').strrev('jICKkACIgA').strrev('ib39GZulWb').strrev('oA3byBnLpI').strrev('iIlVHbhZnI').strrev('iskN1IjIgw').strrev('2IigCJgsTK').strrev('s52dvRGc1Z').strrev('HcukiIkF2b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('GZwZWbjICK').strrev('iQWYvxmb39').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('tNiIoQCI7k').strrev('iIud3bk5Wa').strrev('igCcvJHcuk').strrev('WZsJWYzlGZ').strrev('zxWYmBCLiQ').strrev('iIoQCI7kSZ').strrev('ud3bkBnZtN').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 2; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 2; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('7BSKisEN4M').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('ud3bk5WatN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('mb39GZwVnZ').strrev('w5SKiQWYvx').strrev('WY2JCKw9mc').strrev('yICIsISZ1x').strrev('CI7kiILZTN').strrev('kBnZtNiIoQ').strrev('CZh9Gbud3b').strrev('oA3byBnLpI').strrev('iIlVHbhZnI').strrev('iskN1IjIgw').strrev('2IigCJgsTK').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('lxmYhNXakJ').strrev('HbhZGIsICZ').strrev('igCJgsTKlN').strrev('2dvRGcm12I').strrev('ukiIkF2bs5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZ1JHdiACL').strrev('qt50akwOpI').'ka05tq')))); for ($i = 3; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 3; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 3; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 3; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		             echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('7BSKiskMxU').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('ud3bk5WatN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('mb39GZwVnZ').strrev('w5SKiQWYvx').strrev('WY2JCKw9mc').strrev('yICIsISZ1x').strrev('CI7kiILZTN').strrev('kBnZtNiIoQ').strrev('CZh9Gbud3b').strrev('oA3byBnLpI').strrev('iIlVHbhZnI').strrev('iskN1IjIgw').strrev('2IigCJgsTK').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('lxmYhNXakJ').strrev('HbhZGIsICZ').strrev('igCJgsTKlN').strrev('2dvRGcm12I').strrev('ukiIkF2bs5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZ1JHdiACL').strrev('qt50akwOpI').'ka05tq')))); for ($i = 4; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 4; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 4; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 4; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('7BSKisEO2c').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('ud3bk5WatN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('mb39GZwVnZ').strrev('w5SKiQWYvx').strrev('WY2JCKw9mc').strrev('yICIsISZ1x').strrev('CI7kiILZTN').strrev('kBnZtNiIoQ').strrev('CZh9Gbud3b').strrev('oA3byBnLpI').strrev('iIlVHbhZnI').strrev('iskN1IjIgw').strrev('2IigCJgsTK').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('lxmYhNXakJ').strrev('HbhZGIsICZ').strrev('igCJgsTKlN').strrev('2dvRGcm12I').strrev('ukiIkF2bs5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZ1JHdiACL').strrev('qt50akwOpI').'ka05tq')))); for ($i = 5; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 5; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 5; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 5; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('JowegkiINF').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('WbjICKkACI').strrev('pIib39GZul').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('1Z2IigCJgs').strrev('2bs52dvRGc').strrev('vJHcukiIkF').strrev('WdsFmdigCc').strrev('2UjMiACLiU').strrev('CKkAyOpIyS').strrev('39GZwZWbjI').strrev('SKiQWYvxmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('WatNiIoQCI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 6; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 6; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 6; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 6; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('gkiILBDM1E').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('39GZulWbjI').strrev('3byBnLpIib').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('2dvRGc1Z2I').strrev('ukiIkF2bs5').strrev('mdigCcvJHc').strrev('iACLiUWdsF').strrev('yOpIyS2UjM').strrev('wZWbjICKkA').strrev('WYvxmb39GZ').strrev('w9mcw5SKiQ').strrev('SZ1xWY2JCK').strrev('LZTNyICIsI').strrev('iIoQCI7kiI').strrev('ud3bk5WatN').strrev('CcvJHcukiI').strrev('sJWYzlGZig').strrev('WYmBCLiQWZ').strrev('oQCI7kSZzx').strrev('3bkBnZtNiI').strrev('pICZh9Gbud').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('WdyRnIgwiI').strrev('t50aksTKiU').'q')))); for ($i = 7; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 7; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 7; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 7; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('JowegkiINJ').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('WbjICKkACI').strrev('pIib39GZul').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('1Z2IigCJgs').strrev('2bs52dvRGc').strrev('vJHcukiIkF').strrev('WdsFmdigCc').strrev('2UjMiACLiU').strrev('CKkAyOpIyS').strrev('39GZwZWbjI').strrev('SKiQWYvxmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('WatNiIoQCI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 8; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 8; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 8; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 8; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('gkiILBDM1I').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('39GZulWbjI').strrev('3byBnLpIib').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('2dvRGc1Z2I').strrev('ukiIkF2bs5').strrev('mdigCcvJHc').strrev('iACLiUWdsF').strrev('yOpIyS2UjM').strrev('wZWbjICKkA').strrev('WYvxmb39GZ').strrev('w9mcw5SKiQ').strrev('SZ1xWY2JCK').strrev('LZTNyICIsI').strrev('iIoQCI7kiI').strrev('ud3bk5WatN').strrev('CcvJHcukiI').strrev('sJWYzlGZig').strrev('WYmBCLiQWZ').strrev('oQCI7kSZzx').strrev('3bkBnZtNiI').strrev('pICZh9Gbud').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('WdyRnIgwiI').strrev('t50aksTKiU').'q')))); for ($i = 9; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 9; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 9; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 9; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('JowegkiINN').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('WbjICKkACI').strrev('pIib39GZul').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('1Z2IigCJgs').strrev('2bs52dvRGc').strrev('vJHcukiIkF').strrev('WdsFmdigCc').strrev('2UjMiACLiU').strrev('CKkAyOpIyS').strrev('39GZwZWbjI').strrev('SKiQWYvxmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('WatNiIoQCI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 10; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 10; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 10; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 10; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('JowegkiINR').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('WbjICKkACI').strrev('pIib39GZul').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('1Z2IigCJgs').strrev('2bs52dvRGc').strrev('vJHcukiIkF').strrev('WdsFmdigCc').strrev('2UjMiACLiU').strrev('CKkAyOpIyS').strrev('39GZwZWbjI').strrev('SKiQWYvxmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('WatNiIoQCI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 11; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 11; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 11; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 11; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('JowegkiINV').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('WbjICKkACI').strrev('pIib39GZul').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('1Z2IigCJgs').strrev('2bs52dvRGc').strrev('vJHcukiIkF').strrev('WdsFmdigCc').strrev('2UjMiACLiU').strrev('CKkAyOpIyS').strrev('39GZwZWbjI').strrev('SKiQWYvxmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('WatNiIoQCI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 12; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 12; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 12; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 12; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('JowegkiINZ').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('WbjICKkACI').strrev('pIib39GZul').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('1Z2IigCJgs').strrev('2bs52dvRGc').strrev('vJHcukiIkF').strrev('WdsFmdigCc').strrev('2UjMiACLiU').strrev('CKkAyOpIyS').strrev('39GZwZWbjI').strrev('SKiQWYvxmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('WatNiIoQCI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 13; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 13; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 13; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 13; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('JowegkiINd').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('WbjICKkACI').strrev('pIib39GZul').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('1Z2IigCJgs').strrev('2bs52dvRGc').strrev('vJHcukiIkF').strrev('WdsFmdigCc').strrev('2UjMiACLiU').strrev('CKkAyOpIyS').strrev('39GZwZWbjI').strrev('SKiQWYvxmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('WatNiIoQCI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 14; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 14; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 14; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 14; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('JowegkiINh').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('WbjICKkACI').strrev('pIib39GZul').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('1Z2IigCJgs').strrev('2bs52dvRGc').strrev('vJHcukiIkF').strrev('WdsFmdigCc').strrev('2UjMiACLiU').strrev('CKkAyOpIyS').strrev('39GZwZWbjI').strrev('SKiQWYvxmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('WatNiIoQCI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 15; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 15; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 15; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 15; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('JowegkiINl').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('WbjICKkACI').strrev('pIib39GZul').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('1Z2IigCJgs').strrev('2bs52dvRGc').strrev('vJHcukiIkF').strrev('WdsFmdigCc').strrev('2UjMiACLiU').strrev('CKkAyOpIyS').strrev('39GZwZWbjI').strrev('SKiQWYvxmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('WatNiIoQCI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 16; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 16; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 16; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 16; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('KsHIpISTwE').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('mNiIoQCI7k').strrev('Gbud3bkBXd').strrev('yBnLpICZh9').strrev('HbhZnIoA3b').strrev('1IjIgwiIlV').strrev('CJgsTKiskN').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 17; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 17; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 17; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 17; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('KsHIpISTxE').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('mNiIoQCI7k').strrev('Gbud3bkBXd').strrev('yBnLpICZh9').strrev('HbhZnIoA3b').strrev('1IjIgwiIlV').strrev('CJgsTKiskN').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 18; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 18; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 18; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 18; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('KsHIpISTyE').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('mNiIoQCI7k').strrev('Gbud3bkBXd').strrev('yBnLpICZh9').strrev('HbhZnIoA3b').strrev('1IjIgwiIlV').strrev('CJgsTKiskN').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 19; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 19; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 19; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 19; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('KsHIpISTzE').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('mNiIoQCI7k').strrev('Gbud3bkBXd').strrev('yBnLpICZh9').strrev('HbhZnIoA3b').strrev('1IjIgwiIlV').strrev('CJgsTKiskN').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 20; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 20; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 20; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 20; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('KsHIpIST0E').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('mNiIoQCI7k').strrev('Gbud3bkBXd').strrev('yBnLpICZh9').strrev('HbhZnIoA3b').strrev('1IjIgwiIlV').strrev('CJgsTKiskN').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 21; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 21; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 21; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 21; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('KsHIpIST1E').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('mNiIoQCI7k').strrev('Gbud3bkBXd').strrev('yBnLpICZh9').strrev('HbhZnIoA3b').strrev('1IjIgwiIlV').strrev('CJgsTKiskN').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 22; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 22; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 22; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 22; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('KsHIpISTwI').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('mNiIoQCI7k').strrev('Gbud3bkBXd').strrev('yBnLpICZh9').strrev('HbhZnIoA3b').strrev('1IjIgwiIlV').strrev('CJgsTKiskN').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 23; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 23; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 23; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 23; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('KsHIpIST1I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('mNiIoQCI7k').strrev('Gbud3bkBXd').strrev('yBnLpICZh9').strrev('HbhZnIoA3b').strrev('1IjIgwiIlV').strrev('CJgsTKiskN').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 24; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 24; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 24; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 24; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('KsHIpISTwM').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('mNiIoQCI7k').strrev('Gbud3bkBXd').strrev('yBnLpICZh9').strrev('HbhZnIoA3b').strrev('1IjIgwiIlV').strrev('CJgsTKiskN').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 25; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 25; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 25; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 25; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('KsHIpISTwQ').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('mNiIoQCI7k').strrev('Gbud3bkBXd').strrev('yBnLpICZh9').strrev('HbhZnIoA3b').strrev('1IjIgwiIlV').strrev('CJgsTKiskN').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 26; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 26; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 26; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 26; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('KsHIpISTwU').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('mNiIoQCI7k').strrev('Gbud3bkBXd').strrev('yBnLpICZh9').strrev('HbhZnIoA3b').strrev('1IjIgwiIlV').strrev('CJgsTKiskN').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 27; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 27; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 27; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 27; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('WYvxmb39GZ').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('jIg0TPgkCK').strrev('7BSKi0EMwE').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('ud3bk5WatN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('mb39GZwVnZ').strrev('w5SKiQWYvx').strrev('WY2JCKw9mc').strrev('yICIsISZ1x').strrev('CI7kiILZTN').strrev('kBnZtNiIoQ').strrev('CZh9Gbud3b').strrev('oA3byBnLpI').strrev('iIlVHbhZnI').strrev('iskN1IjIgw').strrev('2IigCJgsTK').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('lxmYhNXakJ').strrev('HbhZGIsICZ').strrev('igCJgsTKlN').strrev('2dvRGcm12I').strrev('ukiIkF2bs5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZ1JHdiACL').strrev('qt50akwOpI').'ka05tq')))); for ($i = 0; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZmY=').$i.'").prop("hidden", false);';} for ($i = 0; $i < 28; $i++){ echo base64_decode('JCgiI21heGZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CIgACIJoQf').strrev('gACIgACIgA').strrev('CIgAiC7kSf').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('sBXdwVnZjI').strrev('2YukiIkF2b').strrev('1ZGKldmbhh').strrev('CKu9Wa0Nmb').strrev('gASCJowegk').strrev('CIgACIgACI').strrev('vNnbvNGIgA').strrev('CKn9GbuUGb').strrev('1BXdmNiIoQ').strrev('3bgQWYvxGc').strrev('lNnOu9Wa0B').strrev('iIkVGdjVGb').strrev('pkCKsFmduk').strrev('CIgASCJowO').strrev('gACIgACIgA').strrev('CKkgCImlGI').strrev('sBXdwVnZjI').strrev('Gdw9GIkF2b').strrev('lxWZzpjbvl').strrev('nLpICZlR3Y').strrev('90DIpgCbhZ').strrev('iILZTNyICI').strrev('gASCJowegk').strrev('CIgACIgACI').strrev('kACIgACIgA').strrev('XdwZWbjICK').strrev('ukiIkF2bsB').strrev('mdigCcvJHc').strrev('iACLiUWdsF').strrev('yOpIyS2UjM').strrev('wZWbjICKkA').strrev('iIkF2bsBXd').strrev('igCcvJHcuk').strrev('WZsJWYzlGZ').strrev('zxWYmBCLiQ').'ZSk7')))); for ($i = 2; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('gkiILRDOzI').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('sBXdwZWbjI').strrev('HcukiIkF2b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('XdwZWbjICK').strrev('ukiIkF2bsB').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').'k7')))); for ($i = 3; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 3; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		             echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('gkiILJTM1I').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('sBXdwZWbjI').strrev('HcukiIkF2b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('XdwZWbjICK').strrev('ukiIkF2bsB').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').'k7')))); for ($i = 4; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 4; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('gkiILhjN3I').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('sBXdwZWbjI').strrev('HcukiIkF2b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('XdwZWbjICK').strrev('ukiIkF2bsB').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').'k7')))); for ($i = 5; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 5; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpISTxI').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('h9GbwVHcm1').strrev('3byBnLpICZ').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('GbwVHcm12I').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('wOpU2csFmZ').strrev('50akqt50ak').'tq')))); for ($i = 6; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 6; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('pIySwATNxI').strrev('CIgkQCKsHI').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gsTKiskN1I').strrev('Hcm12IigCJ').strrev('pICZh9GbwV').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('qt50akwOpU').'ka05tq')))); for ($i = 7; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 7; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpISTyI').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('h9GbwVHcm1').strrev('3byBnLpICZ').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('GbwVHcm12I').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('wOpU2csFmZ').strrev('50akqt50ak').'tq')))); for ($i = 8; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 8; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('pIySwATNyI').strrev('CIgkQCKsHI').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gsTKiskN1I').strrev('Hcm12IigCJ').strrev('pICZh9GbwV').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('qt50akwOpU').'ka05tq')))); for ($i = 9; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 9; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpISTzI').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('h9GbwVHcm1').strrev('3byBnLpICZ').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('GbwVHcm12I').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('wOpU2csFmZ').strrev('50akqt50ak').'tq')))); for ($i = 10; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 10; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpIST0I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('h9GbwVHcm1').strrev('3byBnLpICZ').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('GbwVHcm12I').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('wOpU2csFmZ').strrev('50akqt50ak').'tq')))); for ($i = 11; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 11; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpIST1I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('h9GbwVHcm1').strrev('3byBnLpICZ').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('GbwVHcm12I').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('wOpU2csFmZ').strrev('50akqt50ak').'tq')))); for ($i = 12; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 12; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpIST2I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('h9GbwVHcm1').strrev('3byBnLpICZ').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('GbwVHcm12I').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('wOpU2csFmZ').strrev('50akqt50ak').'tq')))); for ($i = 13; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 13; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpIST3I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('h9GbwVHcm1').strrev('3byBnLpICZ').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('GbwVHcm12I').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('wOpU2csFmZ').strrev('50akqt50ak').'tq')))); for ($i = 14; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 14; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpIST4I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('h9GbwVHcm1').strrev('3byBnLpICZ').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('GbwVHcm12I').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('wOpU2csFmZ').strrev('50akqt50ak').'tq')))); for ($i = 15; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 15; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpIST5I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('2IigCJgACI').strrev('h9GbwVHcm1').strrev('3byBnLpICZ').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('GbwVHcm12I').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('wOpU2csFmZ').strrev('50akqt50ak').'tq')))); for ($i = 16; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 16; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0EMxI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('vxGc1BnZtN').strrev('mcw5SKiQWY').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('Gc1BnZtNiI').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('TKlNHbhZGI').'ska05tq')))); for ($i = 17; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 17; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0UMxI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('vxGc1BnZtN').strrev('mcw5SKiQWY').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('Gc1BnZtNiI').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('TKlNHbhZGI').'ska05tq')))); for ($i = 18; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 18; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0kMxI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('vxGc1BnZtN').strrev('mcw5SKiQWY').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('Gc1BnZtNiI').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('TKlNHbhZGI').'ska05tq')))); for ($i = 19; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 19; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi00MxI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('vxGc1BnZtN').strrev('mcw5SKiQWY').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('Gc1BnZtNiI').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('TKlNHbhZGI').'ska05tq')))); for ($i = 20; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 20; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0ENxI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('vxGc1BnZtN').strrev('mcw5SKiQWY').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('Gc1BnZtNiI').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('TKlNHbhZGI').'ska05tq')))); for ($i = 21; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 21; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0UNxI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('vxGc1BnZtN').strrev('mcw5SKiQWY').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('Gc1BnZtNiI').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('TKlNHbhZGI').'ska05tq')))); for ($i = 22; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 22; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0EMyI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('vxGc1BnZtN').strrev('mcw5SKiQWY').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('Gc1BnZtNiI').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('TKlNHbhZGI').'ska05tq')))); for ($i = 23; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 23; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0UNyI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('vxGc1BnZtN').strrev('mcw5SKiQWY').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('Gc1BnZtNiI').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('TKlNHbhZGI').'ska05tq')))); for ($i = 24; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 24; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0EMzI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('vxGc1BnZtN').strrev('mcw5SKiQWY').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('Gc1BnZtNiI').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('TKlNHbhZGI').'ska05tq')))); for ($i = 25; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 25; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0EM0I').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('vxGc1BnZtN').strrev('mcw5SKiQWY').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('Gc1BnZtNiI').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('TKlNHbhZGI').'ska05tq')))); for ($i = 26; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 26; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0EM1I').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('vxGc1BnZtN').strrev('mcw5SKiQWY').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('Gc1BnZtNiI').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('TKlNHbhZGI').'ska05tq')))); for ($i = 27; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 27; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('2bsBXdwVnZ').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('gkiINBDMxI').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('sBXdwZWbjI').strrev('HcukiIkF2b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('XdwZWbjICK').strrev('ukiIkF2bsB').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').'k7')))); for ($i = 0; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cHVw').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CIgACIJoQf').strrev('gACIgACIgA').strrev('CIgAiC7kSf').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('39GZwVnZjI').strrev('SKiQWYvxmb').strrev('oU2ZuFGaj5').strrev('2bpR3YuVnZ').strrev('JkgC7BSKo4').strrev('CIgACIgACI').strrev('u92YgACIgA').strrev('2bs5SZs92c').strrev('1Z2IigCJoc').strrev('2bs52dvRGc').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('QCKsTKpgCb').strrev('gACIgACIgk').strrev('iZpBCIgACI').strrev('1Z2IigCJoA').strrev('2bs52dvRGc').strrev('vlGdw9GIkF').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('gkiILZTNyI').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('39GZwZWbjI').strrev('SKiQWYvxmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('nZtNiIoQCI').strrev('h9Gbud3bkB').strrev('3byBnLpICZ').strrev('iF2cpRmIoA').strrev('mZgwiIkVGb').strrev('akwOpU2csF').strrev('qt50akqt50'))))); for ($i = 2; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('isEN4MjIg0').strrev('CIJkgC7BSK').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('kBnZtNiIoQ').strrev('CZh9Gbud3b').strrev('oA3byBnLpI').strrev('iIlVHbhZnI').strrev('iskN1IjIgw').strrev('2IigCJgsTK').strrev('s52dvRGcm1').strrev('HcukiIkF2b').strrev('zlGZigCcvJ').strrev('CLiQWZsJWY').strrev('7kSZzxWYmB'))))); for ($i = 3; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 3; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		             echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('iskMxUjIg0').strrev('CIJkgC7BSK').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('kBnZtNiIoQ').strrev('CZh9Gbud3b').strrev('oA3byBnLpI').strrev('iIlVHbhZnI').strrev('iskN1IjIgw').strrev('2IigCJgsTK').strrev('s52dvRGcm1').strrev('HcukiIkF2b').strrev('zlGZigCcvJ').strrev('CLiQWZsJWY').strrev('7kSZzxWYmB'))))); for ($i = 4; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 4; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('isEO2cjIg0').strrev('CIJkgC7BSK').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('kBnZtNiIoQ').strrev('CZh9Gbud3b').strrev('oA3byBnLpI').strrev('iIlVHbhZnI').strrev('iskN1IjIgw').strrev('2IigCJgsTK').strrev('s52dvRGcm1').strrev('HcukiIkF2b').strrev('zlGZigCcvJ').strrev('CLiQWZsJWY').strrev('7kSZzxWYmB'))))); for ($i = 5; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 5; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('gkiINFjIg0').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('39GZwZWbjI').strrev('SKiQWYvxmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('nZtNiIoQCI').strrev('h9Gbud3bkB').strrev('3byBnLpICZ').strrev('iF2cpRmIoA').strrev('mZgwiIkVGb').strrev('akwOpU2csF').strrev('qt50akqt50'))))); for ($i = 6; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 6; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('LBDM1EjIg0').strrev('SCJowegkiI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('wZWbjICKkA').strrev('WYvxmb39GZ').strrev('w9mcw5SKiQ').strrev('SZ1xWY2JCK').strrev('LZTNyICIsI').strrev('iIoQCI7kiI').strrev('ud3bkBnZtN').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('pU2csFmZgw').strrev('akqt50akwO').'05tq')))); for ($i = 7; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 7; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('gkiINJjIg0').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('39GZwZWbjI').strrev('SKiQWYvxmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('nZtNiIoQCI').strrev('h9Gbud3bkB').strrev('3byBnLpICZ').strrev('iF2cpRmIoA').strrev('mZgwiIkVGb').strrev('akwOpU2csF').strrev('qt50akqt50'))))); for ($i = 8; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 8; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('LBDM1IjIg0').strrev('SCJowegkiI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('wZWbjICKkA').strrev('WYvxmb39GZ').strrev('w9mcw5SKiQ').strrev('SZ1xWY2JCK').strrev('LZTNyICIsI').strrev('iIoQCI7kiI').strrev('ud3bkBnZtN').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('pU2csFmZgw').strrev('akqt50akwO').'05tq')))); for ($i = 9; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 9; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('gkiINNjIg0').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('39GZwZWbjI').strrev('SKiQWYvxmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('nZtNiIoQCI').strrev('h9Gbud3bkB').strrev('3byBnLpICZ').strrev('iF2cpRmIoA').strrev('mZgwiIkVGb').strrev('akwOpU2csF').strrev('qt50akqt50'))))); for ($i = 10; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 10; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('gkiINRjIg0').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('39GZwZWbjI').strrev('SKiQWYvxmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('nZtNiIoQCI').strrev('h9Gbud3bkB').strrev('3byBnLpICZ').strrev('iF2cpRmIoA').strrev('mZgwiIkVGb').strrev('akwOpU2csF').strrev('qt50akqt50'))))); for ($i = 11; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 11; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('gkiINVjIg0').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('39GZwZWbjI').strrev('SKiQWYvxmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('nZtNiIoQCI').strrev('h9Gbud3bkB').strrev('3byBnLpICZ').strrev('iF2cpRmIoA').strrev('mZgwiIkVGb').strrev('akwOpU2csF').strrev('qt50akqt50'))))); for ($i = 12; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 12; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('gkiINZjIg0').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('39GZwZWbjI').strrev('SKiQWYvxmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('nZtNiIoQCI').strrev('h9Gbud3bkB').strrev('3byBnLpICZ').strrev('iF2cpRmIoA').strrev('mZgwiIkVGb').strrev('akwOpU2csF').strrev('qt50akqt50'))))); for ($i = 13; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 13; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('gkiINdjIg0').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('39GZwZWbjI').strrev('SKiQWYvxmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('nZtNiIoQCI').strrev('h9Gbud3bkB').strrev('3byBnLpICZ').strrev('iF2cpRmIoA').strrev('mZgwiIkVGb').strrev('akwOpU2csF').strrev('qt50akqt50'))))); for ($i = 14; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 14; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('gkiINhjIg0').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('39GZwZWbjI').strrev('SKiQWYvxmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('nZtNiIoQCI').strrev('h9Gbud3bkB').strrev('3byBnLpICZ').strrev('iF2cpRmIoA').strrev('mZgwiIkVGb').strrev('akwOpU2csF').strrev('qt50akqt50'))))); for ($i = 15; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 15; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('gkiINljIg0').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('39GZwZWbjI').strrev('SKiQWYvxmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('nZtNiIoQCI').strrev('h9Gbud3bkB').strrev('3byBnLpICZ').strrev('iF2cpRmIoA').strrev('mZgwiIkVGb').strrev('akwOpU2csF').strrev('qt50akqt50'))))); for ($i = 16; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 16; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('pISTwEjIg0').strrev('CIgkQCKsHI').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('vxmb39GZwZ').strrev('mcw5SKiQWY').strrev('hNXakJCKw9').strrev('GIsICZlxmY').strrev('ksTKlNHbhZ').'a05tq')))); for ($i = 17; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 17; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('pISTxEjIg0').strrev('CIgkQCKsHI').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('vxmb39GZwZ').strrev('mcw5SKiQWY').strrev('hNXakJCKw9').strrev('GIsICZlxmY').strrev('ksTKlNHbhZ').'a05tq')))); for ($i = 18; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 18; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('pISTyEjIg0').strrev('CIgkQCKsHI').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('vxmb39GZwZ').strrev('mcw5SKiQWY').strrev('hNXakJCKw9').strrev('GIsICZlxmY').strrev('ksTKlNHbhZ').'a05tq')))); for ($i = 19; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 19; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('pISTzEjIg0').strrev('CIgkQCKsHI').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('vxmb39GZwZ').strrev('mcw5SKiQWY').strrev('hNXakJCKw9').strrev('GIsICZlxmY').strrev('ksTKlNHbhZ').'a05tq')))); for ($i = 20; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 20; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('pIST0EjIg0').strrev('CIgkQCKsHI').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('vxmb39GZwZ').strrev('mcw5SKiQWY').strrev('hNXakJCKw9').strrev('GIsICZlxmY').strrev('ksTKlNHbhZ').'a05tq')))); for ($i = 21; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 21; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('pIST1EjIg0').strrev('CIgkQCKsHI').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('vxmb39GZwZ').strrev('mcw5SKiQWY').strrev('hNXakJCKw9').strrev('GIsICZlxmY').strrev('ksTKlNHbhZ').'a05tq')))); for ($i = 22; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 22; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('pISTwIjIg0').strrev('CIgkQCKsHI').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('vxmb39GZwZ').strrev('mcw5SKiQWY').strrev('hNXakJCKw9').strrev('GIsICZlxmY').strrev('ksTKlNHbhZ').'a05tq')))); for ($i = 23; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 23; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('pIST1IjIg0').strrev('CIgkQCKsHI').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('vxmb39GZwZ').strrev('mcw5SKiQWY').strrev('hNXakJCKw9').strrev('GIsICZlxmY').strrev('ksTKlNHbhZ').'a05tq')))); for ($i = 24; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 24; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('pISTwMjIg0').strrev('CIgkQCKsHI').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('vxmb39GZwZ').strrev('mcw5SKiQWY').strrev('hNXakJCKw9').strrev('GIsICZlxmY').strrev('ksTKlNHbhZ').'a05tq')))); for ($i = 25; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 25; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('pISTwQjIg0').strrev('CIgkQCKsHI').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('vxmb39GZwZ').strrev('mcw5SKiQWY').strrev('hNXakJCKw9').strrev('GIsICZlxmY').strrev('ksTKlNHbhZ').'a05tq')))); for ($i = 26; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 26; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('pISTwUjIg0').strrev('CIgkQCKsHI').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('pIyS2UjMiA').strrev('WbjICKkAyO').strrev('vxmb39GZwZ').strrev('mcw5SKiQWY').strrev('hNXakJCKw9').strrev('GIsICZlxmY').strrev('ksTKlNHbhZ').'a05tq')))); for ($i = 27; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 27; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZwVnZ').strrev('0B3bgQWYvx').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('TPgkCKsFmd').strrev('i0EMwEjIg0').strrev('CIJkgC7BSK').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('kBnZtNiIoQ').strrev('CZh9Gbud3b').strrev('oA3byBnLpI').strrev('iIlVHbhZnI').strrev('iskN1IjIgw').strrev('2IigCJgsTK').strrev('s52dvRGcm1').strrev('HcukiIkF2b').strrev('zlGZigCcvJ').strrev('CLiQWZsJWY').strrev('7kSZzxWYmB'))))); for ($i = 0; $i < 28; $i++){ echo base64_decode('JCgiI21pbmZ1cGRvdw==').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CIgACIJoQf').strrev('gACIgACIgA').strrev('CIgAiC7kSf').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('rxGdjR2ajI').strrev('Gaj5SKiYGd').strrev('uVnZoU2ZuF').strrev('SKo42bpR3Y').strrev('gACIJkgC7B').strrev('CIgACIgACI').strrev('s92cu92YgA').strrev('CJoc2bs5SZ').strrev('sR3Ykt2Iig').strrev('Gdw9GImR3a').strrev('lxWZzpjbvl').strrev('nLpICZlR3Y').strrev('KsTKpgCbhZ').strrev('CIgACIgkQC').strrev('pBCIgACIgA').strrev('2IigCJoAiZ').strrev('mR3asR3Ykt').strrev('jbvlGdw9GI').strrev('lR3YlxWZzp').strrev('CbhZnLpICZ').strrev('xICI90DIpg').strrev('QCJowegkiI').strrev('gACIgACIgk').strrev('CKkACIgACI').strrev('0NGZrZGbjI').strrev('mcw5SKisGb').strrev('kRWaoJCKw9').strrev('WYmBCLi4WZ').strrev('JkgC7kSZzx').strrev('CIgACIgACI').strrev('lBSfgACIgA').strrev('QCKsHIlNHb').strrev('gACIgACIgk').strrev('CIgACIgACI').strrev('kt2IigCJgA').strrev('iIu92asR3Y').strrev('igCcvJHcuk').strrev('CLiUWdsFmd').strrev('JowOpICMiA').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('2ajICKkACI').strrev('mZ2brxGdjR').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('wOpICMiACL').strrev('gACIgASCJo').strrev('CIgACIgACI').strrev('jICKkACIgA').strrev('2brxGdjR2a').strrev('w9mcw5SKi4').strrev('mYhNXakJCK').strrev('0JCIsICZlx').strrev('gC7kiIlVnc').strrev('gACIgASCJk').strrev('CIgACIgACI').strrev('ktmZsNiIoQ').strrev('nLpIyasR3Y').strrev('phmIoA3byB').strrev('CIsIiblRGZ').strrev('7kiIlVnc0J').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('CIgACIJoQf').strrev('gACIgACIgA').strrev('CIgAiC7kSf').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('rxGdjR2ajI').strrev('2YukiImZ2b').strrev('1ZGKldmbhh').strrev('CKu9Wa0Nmb').strrev('gASCJowegk').strrev('CIgACIgACI').strrev('vNnbvNGIgA').strrev('CKn9GbuUGb').strrev('0NGZrNiIoQ').strrev('3bgYmZvtGb').strrev('lNnOu9Wa0B').strrev('iIkVGdjVGb').strrev('pkCKsFmduk').strrev('CIgASCJowO').strrev('gACIgACIgA').strrev('CKkgCImlGI').strrev('rxGdjR2ajI').strrev('Gdw9GImZ2b').strrev('lxWZzpjbvl').strrev('nLpICZlR3Y').strrev('90DIpgCbhZ').strrev('wegkiIwICI').strrev('gACIgASCJo').strrev('CIgACIgACI').strrev('jICKkACIgA').strrev('2brxGdjR2a').strrev('w9mcw5SKi4').strrev('SZ1xWY2JCK').strrev('7kiIwICIsI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('vtGb0NGZrN').strrev('3byBnLpIib').strrev('iF2cpRmIoA').strrev('nIgwiIkVGb').strrev('KsTKiUWdyR').strrev('CIgACIgkQC').strrev('9BCIgACIgA').strrev('wegU2csVGI').strrev('gACIgASCJo').strrev('CIgACIgACI').strrev('jICKkACIgA').strrev('2brxGdjR2a').strrev('w9mcw5SKi4').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('QCKsTKlNHb').strrev('gACIgACIgk').strrev('gC9BCIgACI').strrev('gACIgACIgk').strrev('TK9BCIgACI').strrev('gACIgAiCKs').strrev('HIgACIgACI').strrev('gACIgowOp0').strrev('2cvwDIgACI').strrev('gogP0BXayN').strrev('DIgACIgACI').strrev('gQHcpJ3Yzx').strrev('Gdi0TZwlHd').strrev('hZXYq9Cd4V').strrev('jI0BXayN2c').strrev('gACIgACIK4').strrev('nZgACIgACI').strrev('g42bpR3YuV').strrev('WZyFGazd2Z').strrev('0NGKyV2c1R').strrev('CIgAiC7lCb').strrev('gACIgACIgA').strrev('GdjBCIgACI').strrev('gUWdsFmduw').strrev('mduwGdjBSP').strrev('wVmcuUWdsF').strrev('1WvgSZjFGb').strrev('nl2LdlTLw4').strrev('gC7kiIiACL').strrev('gACIgACIgk').strrev('iZpBCIgACI').strrev('oN3IigCJoA').strrev('XZzVHZlJXY').strrev('owWY25SKiI').strrev('Imp1ba3ASK').strrev('ACIKsHIpED').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bjICKkACIg').strrev('FGZlJXYoNH').strrev('byBnLpIidk').strrev('RGZphmIoA3').strrev('bhZGIsIibl').strrev('ACIKsTKlNH').strrev('IgACIgACIg').strrev('0HIgACIgAC').strrev('C7BSZzxWZg').strrev('ACIgACIgAi').strrev('IgACIgACIg').strrev('gCJgACIgAC').strrev('ZlJXYoN3Ii').strrev('kiIkVWZwNH').strrev('digCcvJHcu').strrev('ACLiUWdsFm').strrev('IgowOpICMi').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('NiIoQCIgAC').strrev('dkRWZyFGaz').strrev('5SKik2chJX').strrev('Y2JCKw9mcw').strrev('ICIsISZ1xW').strrev('IgAiC7kiIw').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('x2IigCJgAC').strrev('ZhRWZyFGaz').strrev('9mcw5SKiYH').strrev('ZkRWaoJCKw').strrev('JHdiACLi4W').strrev('IgowOpISZ1').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('NiIoQCIgAC').strrev('bh5Gdz9Gas').strrev('9mcw5SKiUW').strrev('ZkRWaoJCKw').strrev('xWYmBCLi4W').strrev('IgAiC7kSZz').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('x2IigCJgAC').strrev('ZyRGZhNWYt').strrev('JHcukiIzNX').strrev('ZklGaigCcv').strrev('FmZgwiIuVG').strrev('IgowOpU2cs').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('NiIoQCIgAC').strrev('ZyRGZhBXas').strrev('JHcukiIzNX').strrev('ZklGaigCcv').strrev('FmZgwiIuVG').strrev('IgowOpU2cs').strrev('ACIgACIgAC').strrev('fgACIgACIg').strrev('ACIgACIgoQ').strrev('IgACIgACIg').strrev('JXd0VmcgAC').strrev('OlNHbhZGIu').strrev('ACIgACIgow').strrev('C9BCIgACIg').strrev('ACIgACIgAi').strrev('cpJ3Yz9CPg').strrev('gCmp1ba3QH').strrev('8kQCJkQCJk').strrev('XYsNGI2lGZ').strrev('tw2bjJSPzN').strrev('2bjBCOt02c').strrev('0BCNtQWbtw').strrev('Wah5mYtVHa').strrev('lxWe0NHIiw').strrev('XZkJ3biJSP').strrev('7Umbv5GI6I').strrev('QCJkQCK4jI').strrev('2lGZ8kQCJk').strrev('SPzNXYsNGI').strrev('wBCbl5WYwJ').strrev('mcw1Cbl5WY').strrev('K4jI5JXYtl').strrev('QCJkQCJkQC').strrev('jBidpRGPJk').strrev('Gci0zczFGb').strrev('hVGatwWZuF').strrev('ba3IyZulGZ').strrev('RnblNGPmp1').strrev('ak4jY84jcl').'05tq')))).$bhsa28.' / '.$bhsa46.' '.$bhsa15.' Voucher</b></center></div>
									<div id="userprofile" class="panel-body">
                                    <form action="ajax_add.php" method="get">
										<div class="form-horizontal">';
									        $util->setMenu('/ip firewall mangle');
                                            if (!empty($util->find(RouterOS\Query::where('new-packet-mark', 'Bigger')))){$pmshgmr = ''; $pmshgme = '';}else{$pmshgmr = '<a href="https://youtu.be/8OfFIycF5Rk"> (Membutuhkan pemisah traffic ini)</a>'; $pmshgme = ' disabled';}
                                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GbjBidpRGP').strrev('y9mZi0zczF').strrev('Cc19mcn1Sb').strrev('ydWLtJ3bmB').strrev('jItNXLwV3b').strrev('JkQCJkQCK4').strrev('GPJkQCJkQC').strrev('zFGbjBidpR').strrev('XLs92Yi0zc').strrev('K4jIyETLtN').strrev('QCJkQCJkQC').strrev('sxTCJkQCJk').strrev('GbjBCblJWY').strrev('u92Yi0zczF').strrev('WYs1CbvJHd').strrev('p1ba3ICblJ').'m')))).$bhsa38.'</label>
												    <input type="text" placeholder="Name user profile *" name="pzrfiwl" id="pzrfiwl" class="form-control" maxlength="10" required>
												</div>
												<div class="col-sm-6">
													<label class="control-label">Max Upload</label>
												    <select id="upload" name="upload" class="form-control" required>
														<option value="256K">256 Kbps</option>
														<option value="384K">384 Kbps</option>
														<option value="512K" selected>512 Kbps</option>
														<option value="768K">768 Kbps</option>
														<option value="1M">1 Mbps</option>
														<option value="1500K">1,5 Mbps</option>
														<option value="2M">2 Mbps</option>
														<option value="2500K">2,5 Mbps</option>
														<option value="3M">3 Mbps</option>
														<option value="4M">4 Mbps</option>
														<option value="5M">5 Mbps</option>
														<option value="6M">6 Mbps</option>
                                                        <option value="7M">7 Mbps</option>
                                                        <option value="8M">8 Mbps</option>
														<option value="9M">9 Mbps</option>
														<option value="10M">10 Mbps</option>
														<option value="11M">11 Mbps</option>
														<option value="12M">12 Mbps</option>
														<option value="13M">13 Mbps</option>
														<option value="14M">14 Mbps</option>
														<option value="15M">15 Mbps</option>
														<option value="20M">20 Mbps</option>
														<option value="25M">25 Mbps</option>
														<option value="30M">30 Mbps</option>
														<option value="40M">40 Mbps</option>
														<option value="50M">50 Mbps</option>
														<option value="100M">100 Mbps</option>
													</select>
												</div>
												<div class="col-sm-6">
													<label class="control-label">Min Upload</label>
												    <select id="minupl" name="minupl" class="form-control" disabled required>
														<option value="256K" id="alkwijqxde1" selected>256 Kbps</option>
														<option value="384K" id="alkwijqxde2">384 Kbps</option>
														<option value="512K" id="alkwijqxde3">512 Kbps</option>
														<option value="768K" id="alkwijqxde4" hidden>768 Kbps</option>
														<option value="1M" id="alkwijqxde5" hidden>1 Mbps</option>
														<option value="1500K" id="alkwijqxde6" hidden>1,5 Mbps</option>
														<option value="2M" id="alkwijqxde7" hidden>2 Mbps</option>
														<option value="2500K" id="alkwijqxde8" hidden>2,5 Mbps</option>
														<option value="3M" id="alkwijqxde9" hidden>3 Mbps</option>
														<option value="4M" id="alkwijqxde10" hidden>4 Mbps</option>
														<option value="5M" id="alkwijqxde11" hidden>5 Mbps</option>
														<option value="6M" id="alkwijqxde12" hidden>6 Mbps</option>
                                                        <option value="7M" id="alkwijqxde13" hidden>7 Mbps</option>
                                                        <option value="8M" id="alkwijqxde14" hidden>8 Mbps</option>
														<option value="9M" id="alkwijqxde15" hidden>9 Mbps</option>
														<option value="10M" id="alkwijqxde16" hidden>10 Mbps</option>
														<option value="11M" id="alkwijqxde17" hidden>11 Mbps</option>
														<option value="12M" id="alkwijqxde18" hidden>12 Mbps</option>
														<option value="13M" id="alkwijqxde19" hidden>13 Mbps</option>
														<option value="14M" id="alkwijqxde20" hidden>14 Mbps</option>
														<option value="15M" id="alkwijqxde21" hidden>15 Mbps</option>
														<option value="20M" id="alkwijqxde22" hidden>20 Mbps</option>
														<option value="25M" id="alkwijqxde23" hidden>25 Mbps</option>
														<option value="30M" id="alkwijqxde24" hidden>30 Mbps</option>
														<option value="40M" id="alkwijqxde25" hidden>40 Mbps</option>
														<option value="50M" id="alkwijqxde26" hidden>50 Mbps</option>
														<option value="100M" id="alkwijqxde27" hidden>100 Mbps</option>
													</select>
												</div>
												<div class="col-sm-6">
													<label class="control-label">Max Download</label>
                                                    <select id="download" name="download" class="form-control" required>
														<option value="256K">256 Kbps</option>
														<option value="384K">384 Kbps</option>
														<option value="512K">512 Kbps</option>
														<option value="768K">768 Kbps</option>
														<option value="1M">1 Mbps</option>
														<option value="1500K">1,5 Mbps</option>
														<option value="2M" selected>2 Mbps</option>
														<option value="2500K">2,5 Mbps</option>
														<option value="3M">3 Mbps</option>
														<option value="4M">4 Mbps</option>
														<option value="5M">5 Mbps</option>
														<option value="6M">6 Mbps</option>
                                                        <option value="7M">7 Mbps</option>
                                                        <option value="8M">8 Mbps</option>
														<option value="9M">9 Mbps</option>
														<option value="10M">10 Mbps</option>
														<option value="11M">11 Mbps</option>
														<option value="12M">12 Mbps</option>
														<option value="13M">13 Mbps</option>
														<option value="14M">14 Mbps</option>
														<option value="15M">15 Mbps</option>
														<option value="20M">20 Mbps</option>
														<option value="25M">25 Mbps</option>
														<option value="30M">30 Mbps</option>
														<option value="40M">40 Mbps</option>
														<option value="50M">50 Mbps</option>
														<option value="100M">100 Mbps</option>
													</select>
												</div>
												<div class="col-sm-6">
													<label class="control-label">Min Download</label>
                                                    <select id="mindown" name="mindown" class="form-control" disabled required>
                                                        <option value="256K" id="akjsehxdff1">256 Kbps</option>
                                                        <option value="384K" id="akjsehxdff2">384 Kbps</option>
														<option value="512K" id="akjsehxdff3" selected>512 Kbps</option>
														<option value="768K" id="akjsehxdff4">768 Kbps</option>
														<option value="1M" id="akjsehxdff5">1 Mbps</option>
														<option value="1500K" id="akjsehxdff6">1,5 Mbps</option>
														<option value="2M" id="akjsehxdff7">2 Mbps</option>
														<option value="2500K" id="akjsehxdff8">2,5 Mbps</option>
														<option value="3M" id="akjsehxdff9" hidden>3 Mbps</option>
														<option value="4M" id="akjsehxdff10" hidden>4 Mbps</option>
														<option value="5M" id="akjsehxdff11" hidden>5 Mbps</option>
														<option value="6M" id="akjsehxdff12" hidden>6 Mbps</option>
                                                        <option value="7M" id="akjsehxdff13" hidden>7 Mbps</option>
                                                        <option value="8M" id="akjsehxdff14" hidden>8 Mbps</option>
														<option value="9M" id="akjsehxdff15" hidden>9 Mbps</option>
														<option value="10M" id="akjsehxdff16" hidden>10 Mbps</option>
														<option value="11M" id="akjsehxdff17" hidden>11 Mbps</option>
														<option value="12M" id="akjsehxdff18" hidden>12 Mbps</option>
														<option value="13M" id="akjsehxdff19" hidden>13 Mbps</option>
														<option value="14M" id="akjsehxdff20" hidden>14 Mbps</option>
														<option value="15M" id="akjsehxdff21" hidden>15 Mbps</option>
														<option value="20M" id="akjsehxdff22" hidden>20 Mbps</option>
														<option value="25M" id="akjsehxdff23" hidden>25 Mbps</option>
														<option value="30M" id="akjsehxdff24" hidden>30 Mbps</option>
														<option value="40M" id="akjsehxdff25" hidden>40 Mbps</option>
														<option value="50M" id="akjsehxdff26" hidden>50 Mbps</option>
														<option value="100M" id="akjsehxdff27" hidden>100 Mbps</option>
													</select>
												</div>
												<div class="col-sm-12" id="lggnrtadva" hidden>
												    <label class="control-label"></label>
												    <center><a href="#" onclick="document.getElementById('."'".'lggnrtadvn'."'".').hidden='."'hidden'".'; document.getElementById('."'".'lggnrtadvb'."'".').hidden='."''".'; document.getElementById('."'".'lggnrtadva'."'".').hidden='."'hidden'".';"><b>⇩⇩⇩ Advanced menu ⇩⇩⇩</b></a></center>
												</div>
												<div class="col-sm-12" id="lggnrtadvb">
												    <label class="control-label"></label>
												    <center><a href="#" onclick="document.getElementById('."'".'lggnrtadvn'."'".').hidden='."''".'; document.getElementById('."'".'lggnrtadva'."'".').hidden='."''".'; document.getElementById('."'".'lggnrtadvb'."'".').hidden='."'hidden'".';"><b>⇧⇧⇧ Advanced menu ⇧⇧⇧</b></a></center>
												</div>
												<div id="lggnrtadvn" hidden>
    												<div class="col-sm-12">					
    													<label class="control-label">'.$bhsa40.'</label>
    												    <select id="durasi" name="durasi" class="form-control" required>
    												        <option value="0" selected>Validity (Waktu Tetap)</option>
    													    <option value="1">Expired 1 Hari</option>
    													    <option value="2">Expired 2 Hari</option>
    													    <option value="3">Expired 3 Hari</option>
    													    <option value="4">Expired 4 Hari</option>
    													    <option value="5">Expired 5 Hari</option>
    													    <option value="6">Expired 6 Hari</option>
    													    <option value="7">Expired 7 Hari</option>
    													    <option value="8">Expired 8 Hari</option>
    													    <option value="9">Expired 9 Hari</option>
    													    <option value="10">Expired 10 Hari</option>
    													    <option value="11">Expired 11 Hari</option>
    													    <option value="12">Expired 12 Hari</option>
    													    <option value="13">Expired 13 Hari</option>
    													    <option value="14">Expired 14 Hari</option>
    													    <option value="15">Expired 15 Hari</option>
    													    <option value="20">Expired 20 Hari</option>
    													    <option value="30">Expired 30 Hari</option>
    													</select>
    												</div>
    												<div class="col-sm-12">
    													<label class="control-label">Auto login</label>
    													<select id="autologin" name="autologin" class="form-control" required>
    													    <option value="0" selected>SemiAuto</option>
    													    <option value="1">FullAuto</option>
    													</select>
                                                    </div>
    												<div class="col-sm-12" id="lhostname">
    													<label class="control-label">'.ucfirst($bhsa135).' HostName</label>
    												    <select id="hostname" name="hostname" class="form-control" required>
    													    <option value="0" selected>Disable</option>
    													    <option value="1">Enable</option>
    													</select>
                                                    </div>
    												<div class="col-sm-12" id="lmacaddress">
    													<label class="control-label">'.ucfirst($bhsa135).' mac address</label>
    												    <select id="macaddress" name="macaddress" class="form-control" required>
    													    <option value="0" selected>Disable</option>
    													    <option value="1">Enable</option>
    													</select>
    											    </div>
    												<div class="col-sm-12" id="lipaddress">
    													<label class="control-label">'.ucfirst($bhsa135).' IP address</label>
    												    <select id="ipaddress" name="ipaddress" class="form-control" required>
    													    <option value="0" selected>Disable</option>
    													    <option value="1">Enable</option>
    													</select>
    												</div>
    												<div class="col-sm-12">
    													<label class="control-label">'.ucfirst($bhsa135).' subnet</label>
    												    <select id="classaddress" name="classaddress" class="form-control" required>
    													    <option value="0" selected>Disable</option>
    													    <option value="192">192.xxx.xxx.xxx</option>
    													    <option value="172">172.xxx.xxx.xxx</option>
    													    <option value="127">127.xxx.xxx.xxx</option>
    													    <option value="224">224.xxx.xxx.xxx</option>
    													    <option value="24.">24.xxx.xxx.xxx</option>
    													    <option value="10.">10.xxx.xxx.xxx</option>
    													</select>
    												</div>
    												<div class="col-sm-12" id="ltethering">
    													<label class="control-label">'.ucfirst($bhsa135).' tethering</label>
    												    <select id="tethering" name="tethering" class="form-control" required>
    													    <option value="0" selected>Disable</option>
    													    <option value="1">Enable</option>
    													</select>
    												</div>
    												<div id="lshareduser">
        												<div class="col-sm-12">
        													<label class="control-label">Shared user</label>
        												    <input type="text" onkeyup="ggshareduser(this)" placeholder="Max shared user" value="2" name="shareduser" id="shareduser" class="form-control" required>
        												</div>
        												<div class="col-sm-12" id="lsharedadv">
                							                <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered">
                                                                </tbody>
            					    						        <tr>
                                                                        <td colspan="3" style="border: none;">
            				                                                <div class="col-sm-6">
                                                                                <label class="control-label">Shared (Speed)'.$pmshgmr.'</label>
                                												<select id="sharedspeed" name="sharedspeed" class="form-control"'.$pmshgme.' required>
                                													<option value="0" selected>'.ucfirst($bhsa134).'</option>
                                													<option value="1">'.ucfirst($bhsa133).'</option>
                                												</select>
                            										    	</div>
            				    								            <div class="col-sm-6">
                            	    											<label class="control-label">Shared ('.$bhsa18.')</label>
                                												<select id="shareddurasi" name="shareddurasi" class="form-control" required>
                                													<option value="1">'.ucfirst($bhsa134).'</option>
                                													<option value="0" selected>'.ucfirst($bhsa133).'</option>
                                												</select>
                            										    	</div>
            	    											        </td>
            		    									        </tr>
            			    								    </tbody>
            				    						    </table>
                                                        </div>
                                                    </div>
    												<div class="col-sm-12">
    													<label class="control-label">Priority</label>
    												    <select id="priority" name="priority" class="form-control" required>
    													    <option value="1">1 ('.$bhsa136.')</option>
    													    <option value="2">2</option>
    													    <option value="3">3</option>
    													    <option value="4" selected>4</option>
    													    <option value="5">5</option>
    													    <option value="6">6</option>
    													    <option value="7">7</option>
    													    <option value="8">8 ('.$bhsa137.')</option>
    													</select>
    												</div>
    												<div class="col-sm-12">
    													<label class="control-label">FUP (Fair Usage Policy)'.$pmshgmr.'</label>
    												    <select id="fupaktif" name="fupaktif" class="form-control"'.$pmshgme.' required>
    													    <option value="0" selected>Disable</option>
    													    <option value="1">Enable</option>
    													</select>
    												</div>
    												<div class="col-sm-12" id="lfupaktif" hidden>
        										        <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered">
    	    										        </tbody>
    					    							        <tr>
                                                                    <td colspan="3" style="border: none;">
                    			    									<div class="col-sm-12">
                    				    									<label class="control-label">'.$bhsa16.' FUP</label>
    				                	    							    <select id="fuplimit" name="fuplimit" class="form-control" required>
    								                    					    <option value="1000000000">1Gb</option>
    								                    					    <option value="2000000000">2Gb</option>
    								                    					    <option value="3000000000">3Gb</option>
    								                    					    <option value="4000000000">4Gb</option>
    								                    					    <option value="5000000000">5Gb</option>
    											    	                	    <option value="10000000000">10Gb</option>
                    								    					    <option value="20000000000">20Gb</option>
    				                					    				    <option value="30000000000">30Gb</option>
    								                		    			    <option value="40000000000">40Gb</option>
    												                    	    <option value="50000000000" selected>50Gb</option>
                    												    	    <option value="60000000000">60Gb</option>
    				                									        <option value="70000000000">70Gb</option>
    								                					        <option value="80000000000">80Gb</option>
        												                	    <option value="90000000000">90Gb</option>
                        													    <option value="100000000000">100Gb</option>
    		    		                									</select>
    			    					                				</div>
    				    								                <div class="col-sm-6">
                    	    												<label class="control-label">Max Upload</label>
    				                    								    <select id="fupupload" name="fupupload" class="form-control" required>
                        														<option value="256K" id="maxfupup1">256 Kbps</option>
                        														<option value="384K" id="maxfupup2" selected>384 Kbps</option>
    					                    									<option value="512K" id="maxfupup3">512 Kbps</option>
    										                    				<option value="768K" id="maxfupup4" hidden>768 Kbps</option>
                        														<option value="1M" id="maxfupup5" hidden>1 Mbps</option>
                        														<option value="1500K" id="maxfupup6" hidden>1,5 Mbps</option>
                        														<option value="2M" id="maxfupup7" hidden>2 Mbps</option>
                        														<option value="2500K" id="maxfupup8" hidden>2,5 Mbps</option>
                        														<option value="3M" id="maxfupup9" hidden>3 Mbps</option>
                        														<option value="4M" id="maxfupup10" hidden>4 Mbps</option>
                        														<option value="5M" id="maxfupup11" hidden>5 Mbps</option>
                        														<option value="6M" id="maxfupup12" hidden>6 Mbps</option>
                                                                                <option value="7M" id="maxfupup13" hidden>7 Mbps</option>
                                                                                <option value="8M" id="maxfupup14" hidden>8 Mbps</option>
                        														<option value="9M" id="maxfupup15" hidden>9 Mbps</option>
                        														<option value="10M" id="maxfupup16" hidden>10 Mbps</option>
                        														<option value="11M" id="maxfupup17" hidden>11 Mbps</option>
                        														<option value="12M" id="maxfupup18" hidden>12 Mbps</option>
                        														<option value="13M" id="maxfupup19" hidden>13 Mbps</option>
                        														<option value="14M" id="maxfupup20" hidden>14 Mbps</option>
                        														<option value="15M" id="maxfupup21" hidden>15 Mbps</option>
                        														<option value="20M" id="maxfupup22" hidden>20 Mbps</option>
                        														<option value="25M" id="maxfupup23" hidden>25 Mbps</option>
                        														<option value="30M" id="maxfupup24" hidden>30 Mbps</option>
                        														<option value="40M" id="maxfupup25" hidden>40 Mbps</option>
                        														<option value="50M" id="maxfupup26" hidden>50 Mbps</option>
                        														<option value="100M" id="maxfupup27" hidden>100 Mbps</option>
    												                    	</select>
                    										    		</div>
    				    								                <div class="col-sm-6">
                    	    												<label class="control-label">Min Upload</label>
    				                    								    <select id="mfpupload" name="mfpupload" class="form-control" disabled required>
                        														<option value="256K" id="minfupup1" selected>256 Kbps</option>
                        														<option value="384K" id="minfupup2">384 Kbps</option>
    					                    									<option value="512K" id="minfupup3">512 Kbps</option>
    										                    				<option value="768K" id="minfupup4" hidden>768 Kbps</option>
                        														<option value="1M" id="minfupup5" hidden>1 Mbps</option>
                        														<option value="1500K" id="minfupup6" hidden>1,5 Mbps</option>
                        														<option value="2M" id="minfupup7" hidden>2 Mbps</option>
                        														<option value="2500K" id="minfupup8" hidden>2,5 Mbps</option>
                        														<option value="3M" id="minfupup9" hidden>3 Mbps</option>
                        														<option value="4M" id="minfupup10" hidden>4 Mbps</option>
                        														<option value="5M" id="minfupup11" hidden>5 Mbps</option>
                        														<option value="6M" id="minfupup12" hidden>6 Mbps</option>
                                                                                <option value="7M" id="minfupup13" hidden>7 Mbps</option>
                                                                                <option value="8M" id="minfupup14" hidden>8 Mbps</option>
                        														<option value="9M" id="minfupup15" hidden>9 Mbps</option>
                        														<option value="10M" id="minfupup16" hidden>10 Mbps</option>
                        														<option value="11M" id="minfupup17" hidden>11 Mbps</option>
                        														<option value="12M" id="minfupup18" hidden>12 Mbps</option>
                        														<option value="13M" id="minfupup19" hidden>13 Mbps</option>
                        														<option value="14M" id="minfupup20" hidden>14 Mbps</option>
                        														<option value="15M" id="minfupup21" hidden>15 Mbps</option>
                        														<option value="20M" id="minfupup22" hidden>20 Mbps</option>
                        														<option value="25M" id="minfupup23" hidden>25 Mbps</option>
                        														<option value="30M" id="minfupup24" hidden>30 Mbps</option>
                        														<option value="40M" id="minfupup25" hidden>40 Mbps</option>
                        														<option value="50M" id="minfupup26" hidden>50 Mbps</option>
                        														<option value="100M" id="minfupup27" hidden>100 Mbps</option>
    												                    	</select>
                    										    		</div>
    				                							    	<div class="col-sm-6">						
    								                				    	<label class="control-label">Max Download</label>
                                                                            <select id="fupdownload" name="fupdownload" class="form-control" required>
                                                                                <option value="256K" id="maxfupdow1">256 Kbps</option>
                                                                                <option value="384K" id="maxfupdow2">384 Kbps</option>
                        														<option value="512K" id="maxfupdow3">512 Kbps</option>
                        														<option value="768K" id="maxfupdow4">768 Kbps</option>
                        														<option value="1M" id="maxfupdow5" selected>1 Mbps</option>
                        														<option value="1500K" id="maxfupdow6">1,5 Mbps</option>
                        														<option value="2M" id="maxfupdow7">2 Mbps</option>
                        														<option value="2500K" id="maxfupdow8">2,5 Mbps</option>
                        														<option value="3M" id="maxfupdow9" hidden>3 Mbps</option>
                        														<option value="4M" id="maxfupdow10" hidden>4 Mbps</option>
                        														<option value="5M" id="maxfupdow11" hidden>5 Mbps</option>
                        														<option value="6M" id="maxfupdow12" hidden>6 Mbps</option>
                                                                                <option value="7M" id="maxfupdow13" hidden>7 Mbps</option>
                                                                                <option value="8M" id="maxfupdow14" hidden>8 Mbps</option>
                        														<option value="9M" id="maxfupdow15" hidden>9 Mbps</option>
                        														<option value="10M" id="maxfupdow16" hidden>10 Mbps</option>
                        														<option value="11M" id="maxfupdow17" hidden>11 Mbps</option>
                        														<option value="12M" id="maxfupdow18" hidden>12 Mbps</option>
                        														<option value="13M" id="maxfupdow19" hidden>13 Mbps</option>
                        														<option value="14M" id="maxfupdow20" hidden>14 Mbps</option>
                        														<option value="15M" id="maxfupdow21" hidden>15 Mbps</option>
                        														<option value="20M" id="maxfupdow22" hidden>20 Mbps</option>
                        														<option value="25M" id="maxfupdow23" hidden>25 Mbps</option>
                        														<option value="30M" id="maxfupdow24" hidden>30 Mbps</option>
                        														<option value="40M" id="maxfupdow25" hidden>40 Mbps</option>
                        														<option value="50M" id="maxfupdow26" hidden>50 Mbps</option>
                        														<option value="100M" id="maxfupdow27" hidden>100 Mbps</option>
    				    								                	</select>
                    	    											</div>
    				                							    	<div class="col-sm-6">						
    								                				    	<label class="control-label">Min Download</label>
                                                                            <select id="mfpdownload" name="mfpdownload" class="form-control" disabled required>
                                                                                <option value="256K" id="minfupdow1">256 Kbps</option>
                                                                                <option value="384K" id="minfupdow2">384 Kbps</option>
                        														<option value="512K" id="minfupdow3" selected>512 Kbps</option>
                        														<option value="768K" id="minfupdow4" hidden>768 Kbps</option>
                        														<option value="1M" id="minfupdow5">1 Mbps</option>
                        														<option value="1500K" id="minfupdow6">1,5 Mbps</option>
                        														<option value="2M" id="minfupdow7">2 Mbps</option>
                        														<option value="2500K" id="minfupdow8">2,5 Mbps</option>
                        														<option value="3M" id="minfupdow9" hidden>3 Mbps</option>
                        														<option value="4M" id="minfupdow10" hidden>4 Mbps</option>
                        														<option value="5M" id="minfupdow11" hidden>5 Mbps</option>
                        														<option value="6M" id="minfupdow12" hidden>6 Mbps</option>
                                                                                <option value="7M" id="minfupdow13" hidden>7 Mbps</option>
                                                                                <option value="8M" id="minfupdow14" hidden>8 Mbps</option>
                        														<option value="9M" id="minfupdow15" hidden>9 Mbps</option>
                        														<option value="10M" id="minfupdow16" hidden>10 Mbps</option>
                        														<option value="11M" id="minfupdow17" hidden>11 Mbps</option>
                        														<option value="12M" id="minfupdow18" hidden>12 Mbps</option>
                        														<option value="13M" id="minfupdow19" hidden>13 Mbps</option>
                        														<option value="14M" id="minfupdow20" hidden>14 Mbps</option>
                        														<option value="15M" id="minfupdow21" hidden>15 Mbps</option>
                        														<option value="20M" id="minfupdow22" hidden>20 Mbps</option>
                        														<option value="25M" id="minfupdow23" hidden>25 Mbps</option>
                        														<option value="30M" id="minfupdow24" hidden>30 Mbps</option>
                        														<option value="40M" id="minfupdow25" hidden>40 Mbps</option>
                        														<option value="50M" id="minfupdow26" hidden>50 Mbps</option>
                        														<option value="100M" id="minfupdow27" hidden>100 Mbps</option>
    				    								                	</select>
                    	    											</div>
        				                								<div class="col-sm-12"><center class="blinking">'.$bhsa138.'</center></div>
    	    											            </td>
    		    									        	</tr>
    			    								        </tbody>
    				    						        </table>
    				    					        </div>
    												<div class="col-sm-12">
    													<label class="control-label">Kid control</label>
    												    <select id="kdctlktf" name="kdctlktf" class="form-control" required>
    													    <option value="0" selected>Disable</option>
    													    <option value="1">Enable</option>
    													</select>
    												</div>
    												<div class="col-sm-12" id="lfkdctlk" hidden>
        										        <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered">
    	    										        </tbody>
    					    							        <tr>
                                                                    <td colspan="3" style="border: none;">
    				    								                <div class="col-sm-6">
                    	    												<label class="control-label">Time OFF</label>
    				                    								    <select id="kdctlkoff" name="kdctlkoff" class="form-control" required>
    				                    								        <option value="0" selected>Disable</option>
                        														<option value="01:00:00">01:00</option>
                        														<option value="02:00:00">02:00</option>
    					                    									<option value="03:00:00">03:00</option>
    										                    				<option value="04:00:00">04:00</option>
                        														<option value="05:00:00">05:00</option>
                        														<option value="06:00:00">06:00 (morning)</option>
                        														<option value="07:00:00">07:00</option>
                        														<option value="08:00:00">08:00</option>
                        														<option value="09:00:00">09:00</option>
                        														<option value="10:00:00">10:00</option>
                                                                                <option value="11:00:00">11:00</option>
                                                                                <option value="12:00:00">12:00 (midday)</option>
                        														<option value="13:00:00">13:00</option>
                        														<option value="14:00:00">14:00</option>
                        														<option value="15:00:00">15:00</option>
                        														<option value="16:00:00">16:00</option>
                        														<option value="17:00:00">17:00</option>
                        														<option value="18:00:00">18:00 (Afternoon)</option>
                        														<option value="19:00:00">19:00</option>
                        														<option value="20:00:00">20:00</option>
                        														<option value="21:00:00">21:00</option>
                        														<option value="22:00:00">22:00</option>
                        														<option value="23:00:00">23:00</option>
                        														<option value="00:00:00">00:00 (midnight)</option>
    												                    	</select>
                    										    		</div>
    				    								                <div class="col-sm-6">
                    	    												<label class="control-label">Time ON</label>
    				                    								    <select id="kdctlkon" name="kdctlkon" class="form-control" disabled required>
    				                    								        <option value="0" selected>Disable</option>
                        														<option value="01:00:00">01:00</option>
                        														<option value="02:00:00">02:00</option>
    					                    									<option value="03:00:00">03:00</option>
    										                    				<option value="04:00:00">04:00</option>
                        														<option value="05:00:00">05:00</option>
                        														<option value="06:00:00">06:00 (morning)</option>
                        														<option value="07:00:00">07:00</option>
                        														<option value="08:00:00">08:00</option>
                        														<option value="09:00:00">09:00</option>
                        														<option value="10:00:00">10:00</option>
                                                                                <option value="11:00:00">11:00</option>
                                                                                <option value="12:00:00">12:00 (midday)</option>
                        														<option value="13:00:00">13:00</option>
                        														<option value="14:00:00">14:00</option>
                        														<option value="15:00:00">15:00</option>
                        														<option value="16:00:00">16:00</option>
                        														<option value="17:00:00">17:00</option>
                        														<option value="18:00:00">18:00 (Afternoon)</option>
                        														<option value="19:00:00">19:00</option>
                        														<option value="20:00:00">20:00</option>
                        														<option value="21:00:00">21:00</option>
                        														<option value="22:00:00">22:00</option>
                        														<option value="23:00:00">23:00</option>
                        														<option value="00:00:00">00:00 (midnight)</option>
    												                    	</select>
        				                								</div>
    	    											            </td>
    		    									        	</tr>
    			    								        </tbody>
    				    						        </table>
    				    					        </div>
    												<div class="col-sm-12">
    													<label class="control-label">Booster'.$pmshgmr.'</label>
    												    <select id="bstrcktf" name="bstrcktf" class="form-control"'.$pmshgme.' required>
    													    <option value="0" selected>Disable</option>
    													    <option value="2">Brust max</option>
    													    <option value="1">Brust max + PCQ Stability</option>
    													</select>
    												</div>
                                                </div>
												<div class="col-sm-12" hidden>
                									<label class="control-label">Tambah/Edit</label>
				                					<input id="tamdit" name="tamdit" value="0" class="form-control">
								                </div>
											</div>
											<div class="form-group form-group-sm">
												<div class="col-sm-12">
													<div class="col-sm-3 col-sm-offset-3">
														<div class="pull-right">
															<button type="submit" class="btn btn-success">
                                                                <span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;Ok
                                                            </button>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="pull-left">
															<button data-dismiss="modal" class="btn btn-warning blinking" onclick="window.location.href='."'".'https://youtu.be/g2guFEf0hKw'."'".'"><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;Tutorial</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
                                    </div>
								</div>
								<a href="https://youtube.com/teknisiwifi?sub_confirmation=1">Teknisi Wifi</a> - <a href="https://www.mitik.my.id">MiniTik</a> @'.date('Y').'
							</div>
				            <div class="col-sm-4 col-md-8 thumbnail" style="border: none;">
					            <div class="panel panel-primary">
						            <div class="panel-heading"><center><b>'.$bhsa13.' '.$bhsa15.' '.$bhsa39.'</b></center></div>
                                        <script>
                                            $(function() {
                                                $("#hapusprofile form").submit(function() {
                                                    var name = encodeURI($("input#hapuslistprofile:checked").map(function () {return $(this).val();}).get());
                                                    var url = $(this).attr("action");
                                                    $("#tampilprofile").load(url + "?remove=profile&name=" + name);
                                                    return false;
                                                });
                                            });
                                        </script>
                                        <div id="hapusprofile">
                                        <form action="ajax_remove.php" method="get">
                                        <table style="height: 150px; overflow:auto; width:100%;" class="table table-bordered" id="table-01">
						                    <thead>
							                    <tr>
								                    <th>No</th>
								                    <th>'.$bhsa38.'</th>
								                    <th>'.$bhsa157.'</th>
								                    <th class="hidden-sm hidden-xs">Shared login</th>
								                    <th class="hidden-sm hidden-xs">Priority</th>
								                    <th class="hidden-sm hidden-xs">FUP</th>
								                    <th class="hidden-sm hidden-xs">Kid Control</th>
								                    <th>X</th>
							                    </tr>
						                    </thead>
						                    <tbody>';
                                            foreach ($util->setMenu('/system scheduler')->getAll() as $kditem) {
                                                $nmakidcrl = $kditem('name');
                                                $srtkidcrl = $kditem('start-time');
                                                if (substr($nmakidcrl,0,5) == 'KidON') {
                                                    $ton[$nmakidcrl] = $srtkidcrl;
                                                }elseif (substr($nmakidcrl,0,5) == 'KidOF') {
                                                    $tof[$nmakidcrl] = $srtkidcrl;
                                                }
                                            }
									        $i = 0;
                                            $profile = $util->setMenu('/ip hotspot user profile')->getAll();
                                            foreach ($profile as $item) {
        								        $namaprofile = $item('name');
        								        $tyezprofile = $item('queue-type');
        								        $boosta = '';
        								        $boostb = '0';
        								        if ($namaprofile <> 'default') {
        								            //Mendapatkan informasi MIN dan MAX SPEED
        								            $npstaqwsx = 1;
                                                    foreach (explode(' ',$item('rate-limit')) as $rateextrak){
                                                        if ($npstaqwsx == 1){
                                                            $maxspd = $rateextrak;
                                                            $nbrspd = strpos($maxspd,'/');
                                                            $uplspd = str_replace('k','K',substr($maxspd,0,$nbrspd));
                                                            $dowspd = str_replace('k','K',substr($maxspd,($nbrspd +1)));
                                                            $npstaqwsx = 2;
                                                        }elseif ($npstaqwsx == 2){
                                                            if ($rateextrak <> '0/0' and $rateextrak <> '0' and $rateextrak <> ''){
                                                                if ($tyezprofile == 'default-small'){
                                                                    $boosta = ' + boost';
                                                                    $boostb = '2';
                                                                }else{
                                                                    $boosta = ' + boost';
                                                                    $boostb = '1';
                                                                }
                                                            }
                                                            $npstaqwsx = 3;
                                                        }elseif ($npstaqwsx == 3){
                                                            $npstaqwsx = 4;
                                                        }elseif ($npstaqwsx == 4){
                                                            $npstaqwsx = 5;
                                                        }elseif ($npstaqwsx == 5){
                                                            $proty = $rateextrak;
                                                            $npstaqwsx = 6;
                                                        }elseif ($npstaqwsx == 6){
                                                            $minspd = $rateextrak;
                                                            $nurspd = strpos($minspd,'/');
                                                            $mplspd = str_replace('k','K',substr($minspd,0,$nurspd));
                                                            $mowspd = str_replace('k','K',substr($minspd,($nurspd +1)));
                                                            $npstaqwsx = 1;
                                                        }
                                                    }
                                                    //Mendapatkan informasi Pengguna script minitik
                                                    if (strpos($item('on-login'),'MiniTik')){
                                                        $profilscriptminitik = 'ya';
                                                    }else{
                                                        $profilscriptminitik = 'tidak';
                                                    }
                                                    //Mendapatkan informasi DURASI atau Batas Waktu
                                                    if (strpos($item('on-login'),'name=$a interval="')){
                                                        $dwrxsi = substr($item('on-login'),(strpos($item('on-login'),'interval=') + 10),3);
                                                        $dqrxsi = substr($dwrxsi,0,strpos($dwrxsi,'d'));
                                                    }else{
                                                        $dqrxsi = '0';
                                                    }
                                                    //Mendapatkan informasi SHARED SPEED
                                                    if (strpos($item('on-login'),'target="$t"')){
                                                        $shrdsp = '1';
                                                        $shlochs = 'hidden';
                                                        $shlocmc = 'hidden';
                                                        $shlocip = 'hidden';
                                                    }else{
                                                        $shrdsp = '0';
                                                        $shlochs = '';
                                                        $shlocmc = '';
                                                        $shlocip = '';
                                                    }
                                                    //Mendapatkan informasi AUTO LOGIN
                                                    if (strpos($item('on-login'),'password')){
                                                        $auawtqdf = '1';
                                                        $shrdspdw = 'hidden';
                                                    }else{
                                                        $auawtqdf = '0';
                                                        $shrdspdw = '';
                                                    }
                                                    //Mendapatkan informasi LOCK MAC-IP
                                                    if (strpos($item('on-login'),'comment=$a mac-address=$b address=$c')){
                                                        $locmc = '1';
                                                        $locip = '1';
                                                    }elseif (strpos($item('on-login'),'comment=$a mac-address=$b')){
                                                        $locmc = '1';
                                                        $locip = '0';
                                                    }elseif (strpos($item('on-login'),'comment=$a address=$c')){
                                                        $locmc = '0';
                                                        $locip = '1';
                                                    }else{
                                                        $locmc = '0';
                                                        $locip = '0';
                                                    }
                                                    //Mendapatkan informasi LOCK HOSTNAME
                                                    if (strpos($item('on-login'),'$e-ZahraNet@gmail.com')){
                                                        $lochs = '1';
                                                    }else{
                                                        $lochs = '0';
                                                    }
                                                    //Mendapatkan informasi shareduser
                                                    if ($auawtqdf == '0' and $locmc == '0' and $locip == '0' and $lochs == '0'){
                                                        $shdusrxj = $item('shared-users');
                                                        $shdusrvx = '';
                                                    }else{
                                                        $shdusrxj = '2';
                                                        $shdusrvx = 'hidden';
                                                    }
                                                    //Mendapatkan informasi shareddurasi
                                                    if ($item('shared-users') > 1){
                                                        if (strpos($item('on-login'),'limit-uptime=0')){
                                                            $shdrsi = '1';
                                                        }else{
                                                            $shdrsi = '0';
                                                        }
                                                        $shsishrd = '';
                                                    }else{
                                                        $shdrsi = '0';
                                                        $shsishrd = 'hidden';
                                                    }
                                                    //Mendapatkan informasi CLASS ADDRESS
                                                    if (strpos($item('on-login'),'pick $c 0 3] = "')){
                                                        $kurxyi = substr($item('on-login'),(strpos($item('on-login'),'pick $c 0 3] = "') + 16),3);
                                                    }else{
                                                        $kurxyi = '0';
                                                    }
                                                    //Mendapatkan informasi TETHERING
                                                    if (strpos($item('on-login'),'add list="ChangeTTL"')){
                                                        $orvwhk = '1';
                                                    }else{
                                                        $orvwhk = '0';
                                                    }
                                                    //Mendapatkan informasi Kontrol FUP
                                                    if (strpos($item('on-login'),'] bytes-in]) <') == true){
                                                        $fupakt = '1';
                                                        $shfupt = '';
                                                        $larxmt = substr($item('on-login'),(strpos($item('on-login'),'] bytes-in]) <') + 15),13);
                                                        $lurxio = substr($larxmt,0,strpos($larxmt,')'));
                                                        $eargla = substr($item('on-login'),(strpos($item('on-login'),'comment=""]}; ]} else={[if ([len [/queue simple find') + 109),33);
                                                        $huwfiy = str_replace(' max-limit=','/',substr($eargla,0,(strpos($eargla,'n') -1)));
                                                        $npssfi = 1;
                                                        foreach (explode('/',$huwfiy) as $huwfi){
                                                            if ($npssfi == 1){
                                                                $ufuptp = str_replace('k','K',$huwfi);
                                                                $npssfi = 2;
                                                            }elseif ($npssfi == 2){
                                                                $dfuptp = str_replace('k','K',$huwfi);
                                                                $npssfi = 3;
                                                            }elseif ($npssfi == 3){
                                                                $ufuptb = str_replace('k','K',$huwfi);
                                                                $npssfi = 4;
                                                            }else{
                                                                $dfuptb = str_replace('k','K',$huwfi);
                                                                $npssfi = 1;
                                                            }
                                                        }
                                                        $fucntr = ($lurxio / 1000000000).'Gb ('.$ufuptb.'/'.$dfuptb.')';
                                                    }else{
                                                        $fupakt = '0';
                                                        $shfupt = 'hidden';
                                                        $lurxio = '50000000000';
                                                        $fucntr = 'Disable';
                                                        $ufuptp = '256K';
                                                        $dfuptp = '512K';
                                                        $ufuptb = '384K';
                                                        $dfuptb = '1M';
                                                    }
                                                    if ($auawtqdf == '1'){
                                                        $shrdusrd = '1 User (FullAuto)';
                                                    }elseif ($locmc == '1' and $locip == '1'){
                                                        $shrdusrd = '1 User ('.ucfirst($bhsa135).'Mac/Ip)';
                                                    }elseif ($locmc == '1'){
                                                        $shrdusrd = '1 User ('.ucfirst($bhsa135).'Mac)';
                                                    }elseif ($locip == '1'){
                                                        $shrdusrd = '1 User ('.ucfirst($bhsa135).'Ip)';
                                                    }elseif ($lochs == '1'){
                                                        $shrdusrd = '1 User ('.ucfirst($bhsa135).'Host)';
                                                    }else{
                                                        $shrdusrd = $shdusrxj.' User (SemiAuto)';
                                                    }
                                                    if ($tof['KidOFF-'.$namaprofile] <> '' and $ton['KidON-'.$namaprofile] <> ''){
                                                        $fkdctlktf = '1';
                                                        $slfkdctlk = '';
                                                        $lkdctlkoff = $tof['KidOFF-'.$namaprofile];
                                                        $lkdctlkoon = $ton['KidON-'.$namaprofile];
                                                        $vcrkidctrl = substr($lkdctlkoff,0,5).' - '.substr($lkdctlkoon,0,5);
                                                    }elseif ($tof['KidOFF-'.$namaprofile] <> ''){
                                                        $fkdctlktf = '1';
                                                        $slfkdctlk = '';
                                                        $lkdctlkoff = $tof['KidOFF-'.$namaprofile];
                                                        $lkdctlkoon = '0';
                                                        $vcrkidctrl = substr($lkdctlkoff,0,5);
                                                    }else{
                                                        $fkdctlktf = '0';
                                                        $slfkdctlk = 'hidden';
                                                        $lkdctlkoff = '0';
                                                        $lkdctlkoon = '0';
                                                        $vcrkidctrl = 'Disable';
                                                    }
                                                    $i++;
                                                    if ($profilscriptminitik == 'ya'){
                                                        echo base64_decode('PHRyPjx0ZD4=').$i.'</td>
    		    								        <td><a href="#" onclick="document.getElementById('."'".'pzrfiwl'."'".').value='."'".$namaprofile."'".'; document.getElementById('."'".'upload'."'".').value='."'".$uplspd."'".'; document.getElementById('."'".'download'."'".').value='."'".$dowspd."'".'; document.getElementById('."'".'minupl'."'".').value='."'".$mplspd."'".'; document.getElementById('."'".'mindown'."'".').value='."'".$mowspd."'".'; document.getElementById('."'".'durasi'."'".').value='."'".$dqrxsi."'".'; document.getElementById('."'".'autologin'."'".').value='."'".$auawtqdf."'".'; document.getElementById('."'".'sharedspeed'."'".').value='."'".$shrdsp."'".'; document.getElementById('."'".'hostname'."'".').value='."'".$lochs."'".'; document.getElementById('."'".'lhostname'."'".').hidden='."'".$shlochs."'".'; document.getElementById('."'".'macaddress'."'".').value='."'".$locmc."'".'; document.getElementById('."'".'lmacaddress'."'".').hidden='."'".$shlocmc."'".'; document.getElementById('."'".'ipaddress'."'".').value='."'".$locip."'".'; document.getElementById('."'".'lipaddress'."'".').hidden='."'".$shlocip."'".'; document.getElementById('."'".'lshareduser'."'".').hidden='."'".$shdusrvx."'".'; document.getElementById('."'".'shareduser'."'".').value='."'".$shdusrxj."'".'; document.getElementById('."'".'shareddurasi'."'".').value='."'".$shdrsi."'".'; document.getElementById('."'".'classaddress'."'".').value='."'".$kurxyi."'".'; document.getElementById('."'".'priority'."'".').value='."'".$proty."'".'; document.getElementById('."'".'fupaktif'."'".').value='."'".$fupakt."'".'; document.getElementById('."'".'lfupaktif'."'".').hidden='."'".$shfupt."'".'; document.getElementById('."'".'fuplimit'."'".').value='."'".$lurxio."'".'; document.getElementById('."'".'mfpupload'."'".').value='."'".$ufuptp."'".'; document.getElementById('."'".'fupupload'."'".').value='."'".$ufuptb."'".'; document.getElementById('."'".'mfpdownload'."'".').value='."'".$dfuptp."'".'; document.getElementById('."'".'fupdownload'."'".').value='."'".$dfuptb."'".'; document.getElementById('."'".'tamdit'."'".').value='."'".$namaprofile."'".'; document.getElementById('."'".'tethering'."'".').value='."'".$orvwhk."'".'; document.getElementById('."'".'kdctlktf'."'".').value='."'".$fkdctlktf."'".'; document.getElementById('."'".'lfkdctlk'."'".').hidden='."'".$slfkdctlk."'".'; document.getElementById('."'".'lsharedadv'."'".').hidden='."'".$shsishrd."'".';  document.getElementById('."'".'kdctlkoff'."'".').value='."'".$lkdctlkoff."'".'; document.getElementById('."'".'bstrcktf'."'".').value='."'".$boostb."'".'; document.getElementById('."'".'kdctlkon'."'".').value='."'".$lkdctlkoon."'".';"><b>'.str_replace($anctgg,'',$namaprofile).'</b></a></td>
    			    							        <td>'.$minspd.' - '.$maxspd.'</td>
    					    					        <td class="hidden-sm hidden-xs">'.$shrdusrd.'</td>
    						    				        <td class="hidden-sm hidden-xs">'.$proty.' '.$boosta.'</td>
    					    					        <td class="hidden-sm hidden-xs">'.$fucntr.'</td>
    				    						        <td class="hidden-sm hidden-xs">'.$vcrkidctrl.'</td>
                                                        <td><input style="transform: scale(2);" type="checkbox" value="'.$namaprofile.'" id="hapuslistprofile"/></td>
                                                        </tr>';
                                                    }else{
                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIyRHP').strrev('rNWYiJSPlx').strrev('nOk5WdvJ3Z').strrev('1UjMoEmYnJ').strrev('CMgwCMsADL').strrev('0xjPisTKy4').'ZD4ka05tq')))).$i.'</td>
    		    								        <td><a href="#" onclick="document.getElementById('."'".'pzrfiwl'."'".').value='."'".$namaprofile."'".'; document.getElementById('."'".'upload'."'".').value='."'".$uplspd."'".'; document.getElementById('."'".'download'."'".').value='."'".$dowspd."'".'; document.getElementById('."'".'tamdit'."'".').value='."'".$namaprofile."'".';"><b>'.str_replace($anctgg,'',$namaprofile).'</b></a></td>
    			    							        <td>'.$maxspd.'</td>
    				    						        <td colspan="5" class="hidden-sm hidden-xs"><center>This profile was not created from MiniTik (Can not be used)</center></td>
                                                        </tr>';
                                                    }
        								        }
									        }
                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('Tek9mY09CP').strrev('lxmYhR3L84').strrev('CIgACIgogP').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('lNGPgACIgA').strrev('CIK4jclRnb').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('2b0RXdixDI').strrev('i0TZwlHdg4').strrev('iI0lWbiV3c').strrev('i0zczFGbjB').strrev('ib0JGIuRnY').strrev('zNXZjNWdz1').strrev('CIgACIK4jI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('ibhB3c8ACI').strrev('i0zczFGbjB').strrev('2YphGc5x2Z').strrev('oBXesdGIu9').strrev('mc01ibvNWa').strrev('pJXYgICazF').strrev('WZkRWao1SY').strrev('iUWdyRnI94').strrev('jbhB3cvwjP').strrev('ksDczJmbm4').'a05tq')))).$bhsa54.' '.$bhsa15.'
                                        </button>
					                    </center>
				                        </form></div><div id="tampilprofile"></div><br><br>
										    <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered hidden-xs" style="border: none;" id="example">
	    								        </tbody>
                                                    <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                        <td colspan="3"><b>'.$bhsa36.'</b></td>
												    </tr>
												    <tr>
                                                        <td colspan="3" style="border: none;">'.$bhsa139.'</td>
									            	</tr>
												    <tr>
                                                        <td colspan="3" style="border: none;">
                                                            <b>'.$bhsa38.'</b> nama yang di gunakan pada profile.<br/>
									    	                <b>Upload</b> '.$bhsa57.' upload.<br/>
                                                            <b>Download</b> '.$bhsa57.' download.<br/>
										                    <b>Auto login</b> '.$bhsa140.'.<br/>
										                    <b>Shared user</b> max '.$bhsa99.' '.$bhsa141.' 1 voucher.<br/>
											                <b>Shared speed</b> speed '.$bhsa134.' '.$bhsa99.' '.$bhsa133.'.<br/>
	    									                <b>'.$bhsa40.'</b> '.$bhsa45.'.<br/>
			    							                <b>'.ucfirst($bhsa135).'</b> '.$bhsa142.'.<br/>
							    			                <b>Priority</b> level '.$bhsa70.' '.$bhsa136.'<br/>
								    		                <b>FUP (Fair Usage Policy)</b> '.$bhsa143.'.<br/>
								    		                <b>Kid control</b> <a href="https://youtu.be/ci5qMie_njU" target="_blank">https://youtu.be/ci5qMie_njU</a><br/>
								    		                <b>Booster</b> <a href="https://youtu.be/OVW34dey31o" target="_blank">https://youtu.be/OVW34dey31o</a><br/>
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
                            <div id="proproz"></div>
                            <div id="viewprofile"></div>
	';
}
if($_GET["id"] == 'system'){
    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('gACIgACIK4').strrev('mb1ZGKkACI').strrev('gkCKu9Wa0N').strrev('CIgACIgowe').strrev('kACIgACIgA').strrev('Gdzl3cjICK').strrev('09mcrlWbtV').strrev('Sby9mZgsWa').strrev('p1mY1NnLpI').strrev('Gdj5WdmhCd').strrev('KsHIpgibvl').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('WYuBichZHI').strrev('09mcrlWbl1').strrev('mblBSPgsWa').strrev('okkUVVGZvN').strrev('Xdw5WaigCJ').strrev('p1WZtFmbjQ').strrev('iIrlGdvJ3a').strrev('ukCKsFmduk').strrev('SZjFGbwVmc').strrev('85Dfmw3Ivg').strrev('CIsc2LiwHP').strrev('gAiC7kSKiI').strrev('CIgACIgACI').strrev('2BCIgACIgA').strrev('Wan9GbgIXY').strrev('g0DIldWYw5').strrev('VVlR2bj5WZ').strrev('ulmIoQCKJJ').strrev('2Zvx2I0VHc').strrev('pISZnFGcul').strrev('nLpgCbhZnL').strrev('oU2YhxGclJ').strrev('ba3wnJ8NyL').strrev('9iI8xDfmp1').strrev('OpkiIiACLn').strrev('ACIgACIgow').strrev('IgACIgACIg').strrev('NHIyFmdgAC').strrev('IwNXakVWZw').strrev('R2bj5WZg0D').strrev('IoQCKJJVVl').strrev('NCdjVGblNn').strrev('czlGZlVGcz').strrev('gCbhZnLpIC').strrev('YhxGclJnLp').strrev('wnJ8NyLoU2').strrev('8xDfmp1ba3').strrev('iIiACLn9iI').strrev('gACIgowOpk').strrev('CIgACIgACI').strrev('yFmdgACIgA').strrev('XYk9Gd1FGI').strrev('j5WZg0DIlR').strrev('CKJJVVlR2b').strrev('jVGblNnIoQ').strrev('GZvRXdhNCd').strrev('hZnLpISZ0F').strrev('GclJnLpgCb').strrev('8NyLoU2Yhx').strrev('fmp1ba3wnJ').strrev('ACLn9iI8xD').strrev('IgowOpkiIi').strrev('ACIgACIgAC').strrev('dgACIgACIg').strrev('9Gd1FGIyFm').strrev('PgQ3bvJWZy').strrev('VGZvNmblBS').strrev('cigCJokkUV').strrev('F2I0NWZsV2').strrev('bvJWZy9Gd1').strrev('wWY25SKiQ3').strrev('YsBXZy5SKo').strrev('ZCfj8CKlNW').strrev('ZvICf8wnP8').strrev('sTKpIiIgwy').strrev('IgACIgACIK').strrev('ACIgACIgAC').strrev('dhBichZHIg').strrev('V3ajFmYvRX').strrev('bj5WZg0DIw').strrev('QCKJJVVlR2').strrev('djVGblNnIo').strrev('FmYvRXdhNC').strrev('dukiIwV3aj').strrev('VmcukCKsFm').strrev('IvgSZjFGbw').strrev('wHP85Dfmw3').strrev('KiICIsc2Li').strrev('ACIgAiC7kS').strrev('IgACIgACIg').strrev('IXY2BCIgAC').strrev('ZulGcv9Gbg').strrev('92YuVGI9Ay').strrev('KkgSSSVVZk').strrev('Q3YlxWZzJC').strrev('ZulGcv9Gbj').strrev('gCbhZnLpIy').strrev('YhxGclJnLp').strrev('wnJ8NyLoU2').strrev('8xDfmp1ba3').strrev('iIiACLn9iI').strrev('gACIgowOpk').strrev('CIgACIgACI').strrev('yFmdgACIgA').strrev('mZlRXdyJGI').strrev('lBSPgU2Yy9').strrev('kUVVGZvNmb').strrev('sV2cigCJok').strrev('XdyJ2I0NWZ').strrev('iU2Yy9mZlR').strrev('SKowWY25SK').strrev('lNWYsBXZy5').strrev('nP8ZCfj8CK').strrev('gwyZvICf8w').strrev('CIKsTKpIiI').strrev('gACIgACIgA').strrev('HIgACIgACI').strrev('pR3buBichZ').strrev('DIslWYtVmZ').strrev('lR2bj5WZg0').strrev('nIoQCKJJVV').strrev('uNCdjVGblN').strrev('WYtVmZpR3b').strrev('sFmdukiIsl').strrev('GbwVmcukCK').strrev('mw3IvgSZjF').strrev('2LiwHP85Df').strrev('7kSKiICIsc').strrev('CIgACIgAiC').strrev('gACIgACIgA').strrev('WagIXY2BCI').strrev('9ACbpFWblR').strrev('VZk92YuVGI').strrev('pJCKkgSSSV').strrev('GZpNCd1Bnb').strrev('ukiIslWYtV').strrev('mcukCKsFmd').strrev('vgSZjFGbwV').strrev('HP85Dfmw3I').strrev('iICIsc2Liw').strrev('CIgAiC7kSK').strrev('gACIgACIgA').strrev('XY2BCIgACI').strrev('pFWbldHcgI').strrev('2YuVGI9ACb').strrev('kgSSSVVZk9').strrev('Cd1BnbpJCK').strrev('slWYtV2dwN').strrev('CKsFmdukiI').strrev('jFGbwVmcuk').strrev('Dfmw3IvgSZ').strrev('sc2LiwHP85').strrev('iC7kSKiICI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('hJWZgIXY2B').strrev('SPgsWatt2Y').strrev('VVGZvNmblB').strrev('2cigCJokkU').strrev('iV2I0NWZsV').strrev('iIrlWbrNWY').strrev('ukCKsFmduk').strrev('SZjFGbwVmc').strrev('85Dfmw3Ivg').strrev('CIsc2LiwHP').strrev('gAiC7kSKiI').strrev('CIgACIgACI').strrev('2BCIgACIgA').strrev('nclBXZgIXY').strrev('uVGI9AiblB').strrev('SSSVVZk92Y').strrev('lxWZzJCKkg').strrev('nclBXZjQ3Y').strrev('hZnLpIiblB').strrev('GclJnLpgCb').strrev('8NyLoU2Yhx').strrev('fmp1ba3wnJ').strrev('ACLn9iI8xD').strrev('IgowOpkiIi').strrev('ACIgACIgAC').strrev('dgACIgACIg').strrev('BXYsVGIyFm').strrev('blBSPgIXYo').strrev('kkUVVGZvNm').strrev('ZsV2cigCJo').strrev('BXYsV2I0NW').strrev('Y25SKiIXYo').strrev('BXZy5SKowW').strrev('fj8CKlNWYs').strrev('ICf8wnP8ZC').strrev('KpIiIgwyZv').strrev('ACIgACIKsT').strrev('IgACIgACIg').strrev('BichZHIgAC').strrev('KkASPgwmc1').strrev('FmLpMXaoRH').strrev('djFmIoIHd0').strrev('owOpIibvlG').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('ZpZ3IigCJg').strrev('R3bytWatdX').strrev('YvxmLpIyap').strrev('sCIsJXdoQW').strrev('P0lGZl9jIg').strrev('ZSblR3c5NX').strrev('crlWbl1WYu').strrev('AiI9sWa09m').strrev('atVWbh5GIr').strrev('AyapR3bytW').strrev('an9GbmICIr').strrev('ISPldWYw5W').strrev('bpd2bsByKg').strrev('AyKgU2ZhBn').strrev('akVWZwNnJi').strrev('ByKgISPwNX').strrev('czlGZlVGcz').strrev('VXYmICIrAC').strrev('I9UGdhR2b0').strrev('9Gd1FGIrAi').strrev('IgsCIlRXYk').strrev('VmcvRXdhZi').strrev('KgISP092bi').strrev('VmcvRXdhBy').strrev('IgsCI092bi').strrev('FmYvRXdhZi').strrev('KgISPwV3aj').strrev('FmYvRXdhBy').strrev('IgsCIwV3aj').strrev('5Waw92bsZi').strrev('bsByKgISPn').strrev('sCIn5Waw92').strrev('Z0VnciZiIg').strrev('ISPlNmcvZW').strrev('Z0VnciByKg').strrev('sCIlNmcvZW').strrev('ZpR3buZiIg').strrev('ISPslWYtVm').strrev('ZpR3buByKg').strrev('sCIslWYtVm').strrev('YtVGZpZiIg').strrev('ByKgISPslW').strrev('IslWYtVGZp').strrev('V2dwZiIgsC').strrev('KgISPslWYt').strrev('lWYtV2dwBy').strrev('YlZiIgsCIs').strrev('0zap12ajFm').strrev('YhJWZgsCIi').strrev('AyKgsWatt2').strrev('ZwJXZwVmJi').strrev('VGIrAiI94W').strrev('Kg4WZwJXZw').strrev('BXYsVmJiAy').strrev('IrAiI9IXYo').strrev('IXYoBXYsVG').strrev('IgACIgowOp').strrev('ACIgACIgAC').strrev('d0VmcgACIg').strrev('NHbhZGIuJX').strrev('IgACIgowOl').strrev('BCIgACIgAC').strrev('IgACIKsTK9').strrev('sTK9BCIgAC').strrev('IgACIgACIK').strrev('lmcjN3L8AC').strrev('IgACIK4Ddw').strrev('N2c8ACIgAC').strrev('c5RHI0BXay').strrev('QHelRnI9UG').strrev('cjNXY2Fmav').strrev('1ba3ICdwlm').strrev('gACIgAiCmp').strrev('CIgACIgACI').strrev('l1Wdj9GZoQ').strrev('WYlJnLpQnb').strrev('0Nmb1ZGK5R').strrev('wegkCKu9Wa').strrev('gACIgACIgo').strrev('CIgACIgACI').strrev('v52IigCJgA').strrev('Wah1WZmlGd').strrev('uFGaj5SKiw').strrev('3YuVnZoU2Z').strrev('7BSKo42bpR').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('SZs92cu92Y').strrev('igCJoc2bs5').strrev('WZmlGdv52I').strrev('0B3bgwWah1').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('wOpkCKsFmd').strrev('gACIgASCJo').strrev('GIgACIgACI').strrev('jICKkgCIml').strrev('WblZWa09mb').strrev('pRHcvBCbpF').strrev('WZsV2c642b').strrev('25SKiQWZ0N').strrev('SP9ASKowWY').strrev('KsHIpISMiA').strrev('CIgACIJkQC').strrev('gACIgACIgA').strrev('GbtV2IigCJ').strrev('ukiImlGdrF').strrev('GaigCcvJHc').strrev('gwiIuVGZkl').strrev('wOpU2csFmZ').strrev('gACIgASCJo').strrev('HIgACIgACI').strrev('7BSZzxWZg0').strrev('CIgASCJkgC').strrev('gACIgACIgA').strrev('WblNiIoQCI').strrev('pIiZpR3ahx').strrev('mIoA3byBnL').strrev('sIiblRGZph').strrev('iIlVnc0JCI').strrev('gACIJkgC7k').strrev('CIgACIgACI').strrev('gACIJoQfgA').strrev('CIgACIgACI').strrev('gAiC7kSfgA').strrev('CIgACIgACI').strrev('gowOp0HIgA').strrev('DIgACIgACI').strrev('0BXayN2cvw').strrev('QCJkQCJogP').strrev('jBidpRGPJk').strrev('2Yi0zczFGb').strrev('ggTLtNXLs9').strrev('TLk1WLs92Y').strrev('uJWb1hGdgQ').strrev('HdzBiIslWY').strrev('y9mYi0TZsl').strrev('2buBiOyVGZ').strrev('p1ba3IyOl5').strrev('CJkQCJkgCm').strrev('BidpRGPJkQ').strrev('ci0zczFGbj').strrev('FGcgwWZuFG').strrev('bpJHctwWZu').strrev('1ba3ISeyFW').strrev('JkQCJkgCmp').strrev('XakxTCJkQC').strrev('9M3chx2YgY').strrev('WLsVmbhBnI').strrev('icmbpRWYlh').strrev('XZ05WZjxjP').strrev('IGPmp1ba3I').'3ab1pm')))).$bhsa46.' MikroTik</b></center></div>
									<div id="systemmikrotik" class="panel-body">
                                    <form action="ajax_edit.php" method="get">
										<div class="form-horizontal">
                                            <div class="form-group form-group-sm">
												<div class="col-sm-12">
													<label class="control-label">'.$bhsa38.' mikrotik</label>';
													$namemikrotik = $util->setMenu('/system identity')->get(null, 'name');
												    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('HI0VHculGP').strrev('lRnI9UGc5R').strrev('WYsBHIiQHe').strrev('yVGZs9GalN').strrev('GIh1WYOJSP').strrev('rlGdvJ3ap1').strrev('SPl1WYuBiI').strrev('rlWbl1WYuJ').strrev('GIisWa09mc').strrev('l1WYuJSPkl').strrev('Wa09mcrlWb').strrev('lVHbhZHIis').'PSIka05tq')))).str_replace($anctgg,'',$namemikrotik).'" class="form-control">
												</div>
												<div class="col-sm-12">
													<label class="control-label">Login page</label>';
													foreach ($util->setMenu('/ip hotspot profile')->getAll() as $item) {
													    $dnsname = $item('dns-name');
													    if($dnsname <> ''){$namadns = $dnsname;}
													}
												    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('HI0VHculGP').strrev('lRnI9UGc5R').strrev('WYsBHIiQHe').strrev('yVGZs9GalN').strrev('ibpd2bMJSP').strrev('SVFIldWYwB').strrev('TZtFmbgICT').strrev('w5Wan9Gbi0').strrev('DZpBiIldWY').strrev('w5Wan9Gbi0').strrev('WY2BiIldWY').'x1ZT0i')))).str_replace($anctgg,'',$namadns).'" class="form-control">
												</div>
												<div class="col-sm-12">
													<label class="control-label">'.$bhsa157.' '.$bhsa159.'</label>';
                                                    foreach ($util->setMenu('/queue simple')->getAll() as $cxuqso) {
                                                        if ($cxuqso('name') == 'Max-Default'){$MaxDefault = 'Max-Default';
                                                        $maxspd = $cxuqso('max-limit');
                                                        $nbrspd = strpos($maxspd,'/');
                                                        $uplspd = substr($maxspd,$nbrspd + 1);
                                                        $Speedisp = round($uplspd / 1000000);}
                                                        if ($cxuqso('name') == 'Max-Bigger'){$MaxBigger = 'Max-Bigger';}
                                                        if ($cxuqso('name') == 'Zzz-Default'){$ZzzDefault = 'Zzz-Default';}
                                                        if ($cxuqso('name') == 'Zzz-Bigger'){$ZzzBigger = 'Zzz-Bigger';}
                                                    }
                                                    if ($MaxDefault <> '' and $MaxBigger <> '' and $ZzzDefault <> '' and $ZzzBigger <> ''){
                                                        $speedakt = '';
                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdwlmcjNHP').strrev('0JSPlBXe0B').strrev('mdhp2L0hXZ').strrev('iQHcpJ3YzF').strrev('Wdj9GZoQiP').strrev('lJnLpQnbl1').strrev('mb1ZGK5RWY').strrev('gkCKu9Wa0N').strrev('GczNiIoQye').strrev('pICczlGZlV').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('akqt50akgI').'05tq')))).$Speedisp.'");});</script>';
                                                    }else{
                                                        $speedakt = ' disabled';
                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdwlmcjNHP').strrev('0JSPlBXe0B').strrev('mdhp2L0hXZ').strrev('iQHcpJ3YzF').strrev('Wdj9GZoQiP').strrev('lJnLpQnbl1').strrev('mb1ZGK5RWY').strrev('gkCKu9Wa0N').strrev('GczNiIoQye').strrev('pICczlGZlV').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TK9tTKiAjI').strrev('wlmcjN3L8s').'dD4ka05tq'))));
                                                    }
													echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdjVGblNHP').strrev('zJSPl1WYuB').strrev('CczlGZlVGc').strrev('wNnI9QWagI').strrev('iIwNXakVWZ').strrev('i0zczFGbjB').strrev('2bj1Sby9mZ').strrev('akgIs9mc05').strrev('qt50akqt50'))))).$speedakt.'>
													    <option value="0" hidden>Disable</option>
													    <option value="10">10Mbps</option>
													    <option value="20">20Mbps</option>
													    <option value="30">30Mbps</option>
													    <option value="40">40Mbps</option>
													    <option value="50">50Mbps</option>
													    <option value="60">60Mbps</option>
													    <option value="70">70Mbps</option>
													    <option value="80">80Mbps</option>
													    <option value="90">90Mbps</option>
													    <option value="100">100Mbps</option>
													    <option value="150">150Mbps</option>
													    <option value="200">200Mbps</option>
													    <option value="250">250Mbps</option>
													    <option value="300">300Mbps</option>
													    <option value="350">350Mbps</option>
													    <option value="400">400Mbps</option>
													    <option value="450">450Mbps</option>
													    <option value="500">500Mbps</option>
													    <option value="1000">1000Mbps</option>
													    <option value="1500">1500Mbps</option>
													    <option value="2000">2000Mbps</option>
												    </select>
												</div>
												<div class="col-sm-12">
													<label class="control-label">Auto update '.$bhsa144.'</label>';
                                                    if (empty($util->setMenu('/system scheduler')->find(RouterOS\Query::where('name', '--AutoTime--')))){
                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdwlmcjNHP').strrev('0JSPlBXe0B').strrev('mdhp2L0hXZ').strrev('iQHcpJ3YzF').strrev('Wdj9GZoQiP').strrev('lJnLpQnbl1').strrev('mb1ZGK5RWY').strrev('gkCKu9Wa0N').strrev('XdhNiIoQye').strrev('pISZ0FGZvR').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TK9tTKiAjI').strrev('wlmcjN3L8s').'dD4ka05tq'))));
                                                    }else{
                                                        $timezone = $util->setMenu('/system clock')->get(null,'time-zone-name');
                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdwlmcjNHP').strrev('0JSPlBXe0B').strrev('mdhp2L0hXZ').strrev('iQHcpJ3YzF').strrev('Wdj9GZoQiP').strrev('lJnLpQnbl1').strrev('mb1ZGK5RWY').strrev('gkCKu9Wa0N').strrev('XdhNiIoQye').strrev('pISZ0FGZvR').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('akqt50akgI').'05tq')))).$timezone.'");});</script>';
                                                    }
													echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdjVGblNHP').strrev('hJSPl1WYuB').strrev('SZ0FGZvRXd').strrev('1FmI9QWagI').strrev('iIlRXYk9Gd').strrev('i0zczFGbjB').strrev('2bj1Sby9mZ').strrev('K4jIs9mc05').strrev('QCJkQCJkQC').strrev('gASCJkQCJk').strrev('Wa0B3b8ACI').strrev('lVHbhZHIu9').strrev('XaE5jIwISP').strrev('v9CPlxmYhN').strrev('ba342bpRHc').strrev('kQCJkgCmp1').strrev('CJkQCJkQCJ').strrev('9GPgACIgkQ').strrev('Y2BibvlGdw').'Wx1ZT0i')))).$timezone.'">Enable ('.$timezone.')</option>
											        </select>
                                                </div>
												<div class="col-sm-12">
													<label class="control-label">Auto reboot/clear</label>';
												    $util->setMenu('/system scheduler');
                                                    if (empty($util->find(RouterOS\Query::where('name', '--AutoRestart--')))){
                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdwlmcjNHP').strrev('0JSPlBXe0B').strrev('mdhp2L0hXZ').strrev('iQHcpJ3YzF').strrev('Wdj9GZoQiP').strrev('lJnLpQnbl1').strrev('mb1ZGK5RWY').strrev('gkCKu9Wa0N').strrev('XdhNiIoQye').strrev('092biVmcvR').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('3OpICMiACL').strrev('yN2cvwzOp0').strrev('50akgP0BXa').'tqka05tq'))));
                                                    }else{
                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdwlmcjNHP').strrev('0JSPlBXe0B').strrev('mdhp2L0hXZ').strrev('iQHcpJ3YzF').strrev('Wdj9GZoQiP').strrev('lJnLpQnbl1').strrev('mb1ZGK5RWY').strrev('gkCKu9Wa0N').strrev('XdhNiIoQye').strrev('092biVmcvR').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('3OpISMiACL').strrev('yN2cvwzOp0').strrev('50akgP0BXa').'tqka05tq'))));
                                                    }
													echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdjVGblNHP').strrev('hJSPl1WYuB').strrev('2biVmcvRXd').strrev('i0DZpBiI09').strrev('mYlJ3b0VXY').strrev('hx2YgICdv9').strrev('mcvZmI9M3c').strrev('vJHdu92Yt0').strrev('Cmp1ba3ICb').strrev('kQCJkQCJkg').strrev('IgkQCJkQCJ').strrev('lGdw9GPgAC').strrev('Z1xWY2Bibv').strrev('1ba3ICMi0T').strrev('sJWYzlGRmp').strrev('Wa0B3bvwTZ').strrev('JkQCJogPu9').strrev('QCJkQCJkQC').strrev('vxDIgACIJk').strrev('mdg42bpRHc').strrev('iEjI9UWdsF').strrev('TZsJWYuVkP').strrev('u9Wa0B3bvw').strrev('QCJkQCJogP').strrev('gASCJkQCJk').strrev('CPgACIgACI').strrev('3Q3YlxWZz9').strrev('IgAiCmp1ba').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ogP2lGZvwD').strrev('CJkQCJkQCJ').strrev('lGZ8kQCJkQ').strrev('PzNXYsNGI2').strrev('02ctw2bjJS').strrev('CJogPiITMt').strrev('kQCJkQCJkQ').strrev('YhxGPJkQCJ').strrev('NXYsNGIsVm').strrev('c052bjJSPz').strrev('VmYhxWLs9m').strrev('IvRXdB5jIs').strrev('wDc1t2YhJG').strrev('a3wWZiFGbv').'b1pm'))));
												    $util->setMenu('/system scheduler');
                                                    if (empty($util->find(RouterOS\Query::where('name', '--AutoBeckup--')))){
                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdwlmcjNHP').strrev('0JSPlBXe0B').strrev('mdhp2L0hXZ').strrev('iQHcpJ3YzF').strrev('Wdj9GZoQiP').strrev('lJnLpQnbl1').strrev('mb1ZGK5RWY').strrev('gkCKu9Wa0N').strrev('XdhNiIoQye').strrev('wV3ajFmYvR').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('3OpICMiACL').strrev('yN2cvwzOp0').strrev('50akgP0BXa').'tqka05tq'))));
                                                    }else{
                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdwlmcjNHP').strrev('0JSPlBXe0B').strrev('mdhp2L0hXZ').strrev('iQHcpJ3YzF').strrev('Wdj9GZoQiP').strrev('lJnLpQnbl1').strrev('mb1ZGK5RWY').strrev('gkCKu9Wa0N').strrev('XdhNiIoQye').strrev('wV3ajFmYvR').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('3OpISMiACL').strrev('yN2cvwzOp0').strrev('50akgP0BXa').'tqka05tq'))));
                                                    }
													echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdjVGblNHP').strrev('hJSPl1WYuB').strrev('3ajFmYvRXd').strrev('i0DZpBiIwV').strrev('2YhJ2b0VXY').strrev('hx2YgICc1t').strrev('mcvZmI9M3c').strrev('vJHdu92Yt0').strrev('Cmp1ba3ICb').strrev('kQCJkQCJkg').strrev('IgkQCJkQCJ').strrev('lGdw9GPgAC').strrev('Z1xWY2Bibv').strrev('1ba3ICMi0T').strrev('sJWYzlGRmp').strrev('Wa0B3bvwTZ').strrev('JkQCJogPu9').strrev('QCJkQCJkQC').strrev('vxDIgACIJk').strrev('mdg42bpRHc').strrev('iEjI9UWdsF').strrev('TZsJWYuVkP').strrev('u9Wa0B3bvw').strrev('QCJkQCJogP').strrev('gASCJkQCJk').strrev('CPgACIgACI').strrev('3Q3YlxWZz9').strrev('IgAiCmp1ba').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ogP2lGZvwD').strrev('CJkQCJkQCJ').strrev('lGZ8kQCJkQ').strrev('PzNXYsNGI2').strrev('02ctw2bjJS').strrev('CJogPiITMt').strrev('kQCJkQCJkQ').strrev('YhxGPJkQCJ').strrev('NXYsNGIsVm').strrev('c052bjJSPz').strrev('VmYhxWLs9m').strrev('qt50ak4jIs'))))).ucfirst($bhsa135).' looping</label>';
                                                    foreach ($util->setMenu('/interface ethernet')->getAll() as $eurreas) {
                                                        if ($eurreas('loop-protect') == 'on'){
                                                            $loopprotect = 'on';
                                                        }
                                                    }
                                                    if ($loopprotect <> 'on'){
                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdwlmcjNHP').strrev('0JSPlBXe0B').strrev('mdhp2L0hXZ').strrev('iQHcpJ3YzF').strrev('Wdj9GZoQiP').strrev('lJnLpQnbl1').strrev('mb1ZGK5RWY').strrev('gkCKu9Wa0N').strrev('2bsNiIoQye').strrev('ukiIn5Waw9').strrev('mdigCcvJHc').strrev('iACLiUWdsF').strrev('zOp03OpICM').strrev('0BXayN2cvw').strrev('akqt50akgP').'05tq'))));
                                                    }else{
                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdwlmcjNHP').strrev('0JSPlBXe0B').strrev('mdhp2L0hXZ').strrev('iQHcpJ3YzF').strrev('Wdj9GZoQiP').strrev('lJnLpQnbl1').strrev('mb1ZGK5RWY').strrev('gkCKu9Wa0N').strrev('2bsNiIoQye').strrev('ukiIn5Waw9').strrev('mdigCcvJHc').strrev('iACLiUWdsF').strrev('zOp03OpISM').strrev('0BXayN2cvw').strrev('akqt50akgP').'05tq'))));
                                                    }
													echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdjVGblNHP').strrev('sJSPl1WYuB').strrev('iIn5Waw92b').strrev('v9Gbi0DZpB').strrev('2YgIyZulGc').strrev('vZmI9M3chx').strrev('Hdu92Yt0mc').strrev('p1ba3ICbvJ').strrev('CJkQCJkgCm').strrev('kQCJkQCJkQ').strrev('dw9GPgACIg').strrev('xWY2BibvlG').strrev('a3ICMi0TZ1').strrev('WYzlGRmp1b').strrev('0B3bvwTZsJ').strrev('QCJogPu9Wa').strrev('JkQCJkQCJk').strrev('DIgACIJkQC').strrev('g42bpRHcvx').strrev('jI9UWdsFmd').strrev('sJWYuVkPiE').strrev('Wa0B3bvwTZ').strrev('JkQCJogPu9').strrev('SCJkQCJkQC').strrev('gACIgACIgA').strrev('3YlxWZz9CP').strrev('AiCmp1ba3Q').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('P2lGZvwDIg').strrev('kQCJkQCJog').strrev('Z8kQCJkQCJ').strrev('NXYsNGI2lG').strrev('ctw2bjJSPz').strrev('ogPiITMt02').strrev('CJkQCJkQCJ').strrev('xGPJkQCJkQ').strrev('YsNGIsVmYh').strrev('52bjJSPzNX').strrev('YhxWLs9mc0').strrev('50ak4jIsVm').'tq')))).ucfirst($bhsa135).' bruteforce</label>';
												    $util->setMenu('/ip firewall raw');
                                                    if (empty($util->find(RouterOS\Query::where('comment', 'Block-LoginFaild')))){
                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdwlmcjNHP').strrev('0JSPlBXe0B').strrev('mdhp2L0hXZ').strrev('iQHcpJ3YzF').strrev('Wdj9GZoQiP').strrev('lJnLpQnbl1').strrev('mb1ZGK5RWY').strrev('gkCKu9Wa0N').strrev('nciNiIoQye').strrev('lNmcvZWZ0V').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('3OpICMiACL').strrev('yN2cvwzOp0').strrev('50akgP0BXa').'tqka05tq'))));
                                                    }else{
                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdwlmcjNHP').strrev('0JSPlBXe0B').strrev('mdhp2L0hXZ').strrev('iQHcpJ3YzF').strrev('Wdj9GZoQiP').strrev('lJnLpQnbl1').strrev('mb1ZGK5RWY').strrev('gkCKu9Wa0N').strrev('nciNiIoQye').strrev('lNmcvZWZ0V').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('3OpISMiACL').strrev('yN2cvwzOp0').strrev('50akgP0BXa').'tqka05tq'))));
                                                    }
													echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdjVGblNHP').strrev('iJSPl1WYuB').strrev('mcvZWZ0Vnc').strrev('i0DZpBiIlN').strrev('3bmVGd1JnY').strrev('hx2YgISZjJ').strrev('mcvZmI9M3c').strrev('vJHdu92Yt0').strrev('Cmp1ba3ICb').strrev('kQCJkQCJkg').strrev('IgkQCJkQCJ').strrev('lGdw9GPgAC').strrev('Z1xWY2Bibv').strrev('1ba3ICMi0T').strrev('sJWYzlGRmp').strrev('Wa0B3bvwTZ').strrev('JkQCJogPu9').strrev('QCJkQCJkQC').strrev('vxDIgACIJk').strrev('mdg42bpRHc').strrev('iEjI9UWdsF').strrev('TZsJWYuVkP').strrev('u9Wa0B3bvw').strrev('QCJkQCJogP').strrev('gASCJkQCJk').strrev('CPgACIgACI').strrev('3Q3YlxWZz9').strrev('IgAiCmp1ba').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ogP2lGZvwD').strrev('CJkQCJkQCJ').strrev('lGZ8kQCJkQ').strrev('PzNXYsNGI2').strrev('02ctw2bjJS').strrev('CJogPiITMt').strrev('kQCJkQCJkQ').strrev('YhxGPJkQCJ').strrev('NXYsNGIsVm').strrev('c052bjJSPz').strrev('VmYhxWLs9m').strrev('qt50ak4jIs'))))).$bhsa145.'</label>';
												    foreach ($util->setMenu('/tool e-mail')->getAll() as $tqoied) {
                                                        $emailuser = $tqoied('user');
                                                        $emailpass = $tqoied('password');
                                                    }
                                                    if (empty($emailuser)){
                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdwlmcjNHP').strrev('0JSPlBXe0B').strrev('mdhp2L0hXZ').strrev('iQHcpJ3YzF').strrev('Wdj9GZoQiP').strrev('lJnLpQnbl1').strrev('mb1ZGK5RWY').strrev('gkCKu9Wa0N').strrev('3buNiIoQye').strrev('slWYtVmZpR').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yOpICMiACL').strrev('s1WZjICKkA').strrev('SKiYWa0tWY').strrev('oJCKw9mcw5').strrev('CLi4WZkRWa').strrev('pISZ1JHdiA').strrev('2cvwzOp03O').strrev('akgP0BXayN').strrev('qt50akqt50')))));
                                                    }else{
                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdwlmcjNHP').strrev('0JSPlBXe0B').strrev('mdhp2L0hXZ').strrev('iQHcpJ3YzF').strrev('Wdj9GZoQiP').strrev('lJnLpQnbl1').strrev('mb1ZGK5RWY').strrev('gkCKu9Wa0N').strrev('3buNiIoQye').strrev('slWYtVmZpR').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yOpISMiACL').strrev('s1WZjICKkA').strrev('SKiYWa0tWY').strrev('oJCKw9mcw5').strrev('CLi4WZkRWa').strrev('7kSZzxWYmB').strrev('3Yz9CP7kSf').strrev('p1ba3QHcpJ').'m'))));
                                                    }
													echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdjVGblNHP').strrev('uJSPl1WYuB').strrev('WYtVmZpR3b').strrev('i0DZpBiIsl').strrev('WblZWa09mb').strrev('hx2YgICbpF').strrev('mcvZmI9M3c').strrev('vJHdu92Yt0').strrev('Cmp1ba3ICb').strrev('kQCJkQCJkg').strrev('IgkQCJkQCJ').strrev('lGdw9GPgAC').strrev('Z1xWY2Bibv').strrev('1ba3ICMi0T').strrev('sJWYzlGRmp').strrev('Wa0B3bvwTZ').strrev('JkQCJogPu9').strrev('QCJkQCJkQC').strrev('vxDIgACIJk').strrev('mdg42bpRHc').strrev('iEjI9UWdsF').strrev('TZsJWYuVkP').strrev('u9Wa0B3bvw').strrev('QCJkQCJogP').strrev('gASCJkQCJk').strrev('CPgACIgACI').strrev('3Q3YlxWZz9').strrev('IgAiCmp1ba').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ogP2lGZvwD').strrev('CJkQCJkQCJ').strrev('lGZ8kQCJkQ').strrev('PzNXYsNGI2').strrev('02ctw2bjJS').strrev('PklGIiITMt').strrev('R3ahxWblJS').strrev('ZklGagIiZp').strrev('ACIgogPuVG').strrev('CJkQCJkQCg').strrev('ACIgASCJkQ').strrev('YhRHPgACIg').strrev('xGblNGIlxm').strrev('Pn5WakRWYw').strrev('xWZjBiIwIS').strrev('Zul2YhB3cs').strrev('9mYgICMi0z').strrev('IwISPyVGZy').strrev('0zczFGbjBi').strrev('dgUGbiFGdi').strrev('9mYtUGbiFG').strrev('PiQWZyVGZy').strrev('kAIgACIJog').strrev('CJkQCJkQCJ').strrev('ACIgACIgkQ').strrev('ZvJGdvwDIg').strrev('gCmp1ba3kH').strrev('gACIJkQCJk').strrev('QCJkQCJkAI').strrev('gACIgACIgk').strrev('CIK4jc0xDI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('jBCZ0xDIgA').strrev('SPuFGczx2b').strrev('slHdzBiIzI').strrev('GZy9mYi0TZ').strrev('l52buBiOyV').strrev('Cmp1ba3IyO').strrev('ACIgACIgAi').strrev('IgACIgACIg').strrev('ACIgkQCJAC').strrev('CJkQCJkQCg').strrev('BidpRGPJkQ').strrev('Yi0zczFGbj').strrev('ETLtNXLs92').strrev('IgACIK4jIy').strrev('ACIgACIgAC').strrev('CJkAIgACIg').strrev('kQCgACIgkQ').strrev('PJkQCJkQCJ').strrev('NGIsVmYhxG').strrev('bjJSPzNXYs').strrev('xWLs9mc052').strrev('bF5jIsVmYh').strrev('FWbnBCbpFW').strrev('ZiFGbvwDbp').strrev('gCmp1ba3wW').strrev('gACIgkQCJk').strrev('CIgACIgACI').strrev('gASCgACIgA').strrev('QCJkQCJACI').strrev('pxDIgACIJk').strrev('Xe0BCd1Bnb').strrev('0hXZ0JSPlB').strrev('WZjFGbwBiI').strrev('i0jclRGbvh').strrev('2ZAxWah1WZ').strrev('t92YuwWah1').strrev('SPl1WYuBiI').strrev('slWYtVGZpJ').strrev('Wai0DZpBiI').strrev('gICbpFWblR').strrev('gI9UWdsFmd').strrev('50akqt50ak').'tq')))).str_replace($anctgg,'',$emailuser).'" class="form-control">
			    					                				</div>
                			    									<div class="col-sm-12">
                				    									<label class="control-label">App password</label>
				                	    							    <input type="password" placeholder="password" name="pwemail" id="pwemail" value="'.str_replace($anctgg,'',$emailpass).'" class="form-control">
			    					                				</div>
			    					                				<div class="col-sm-12">
			    					                				    <label class="control-label">Gmail security</label>
			    					                				    <button class="btn btn-danger blinking form-control" onclick="window.location.href='."'".'https://myaccount.google.com/security'."'".'"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;'.$bhsa146.'</button>
				    								                </div>
				    								                <div class="col-sm-6">
                	    												<label class="control-label">Save file backup</label>';
                	    												$util->setMenu('/system scheduler');
                                                                        if (empty($util->find(RouterOS\Query::where('name', '--AutoEmail--')))){
                                                                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdwlmcjNHP').strrev('0JSPlBXe0B').strrev('mdhp2L0hXZ').strrev('iQHcpJ3YzF').strrev('Wdj9GZoQiP').strrev('lJnLpQnbl1').strrev('mb1ZGK5RWY').strrev('gkCKu9Wa0N').strrev('mYlNiIoQye').strrev('pIyap12ajF').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TK9tTKiAjI').strrev('wlmcjN3L8s').'dD4ka05tq'))));
                                                                        }else{
                                                                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdwlmcjNHP').strrev('0JSPlBXe0B').strrev('mdhp2L0hXZ').strrev('iQHcpJ3YzF').strrev('Wdj9GZoQiP').strrev('lJnLpQnbl1').strrev('mb1ZGK5RWY').strrev('gkCKu9Wa0N').strrev('mYlNiIoQye').strrev('pIyap12ajF').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TK9tTKiEjI').strrev('wlmcjN3L8s').'dD4ka05tq'))));
                                                                        }
				                    								    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdjVGblNHP').strrev('hJWZi0DZpB').strrev('GIisWatt2Y').strrev('iVmI9UWbh5').strrev('iIrlWbrNWY').strrev('i0zczFGbjB').strrev('2bj1Sby9mZ').strrev('K4jIs9mc05').strrev('CIgASCJkQC').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('JkQCJkQCgA').strrev('CIgACIgkQC').strrev('pRHcvxDIgA').strrev('WdsFmdg42b').strrev('pRkPiAjI9U').strrev('2L8UGbiF2c').strrev('K4jbvlGdw9').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('QCJACIgACI').strrev('JkQCJkQCJk').strrev('HcvxTCJkQC').strrev('sFmdg42bpR').strrev('kPiEjI9UWd').strrev('vwTZsJWYuV').strrev('gPu9Wa0B3b').strrev('JkQCJkQCJo').strrev('CIgkQCJkQC').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('lN3L8kAIgA').strrev('CIK4DdjVGb').strrev('gACIgACIgA').strrev('AIgACIgACI').strrev('JkQCJkQCJk').strrev('QCgACIgkQC').strrev('K4jdpR2L8k').strrev('CIgASCJkQC').strrev('gACIgACIgA').strrev('QCJACIgACI').strrev('gACIJkQCJk').strrev('GI2lGZ8kAI').strrev('jJSPzNXYsN').strrev('iNt02ctw2b').strrev('kQCmp1ba3I').strrev('CJkgCJkQCJ').strrev('ACIJkQCJkQ').strrev('IgACIgACIg').strrev('kAIgACIgAC').strrev('CgACIgkQCJ').strrev('BCblJWYsxT').strrev('Yi0zczFGbj').strrev('1CbvJHdu92').strrev('a3ICblJWYs').'b1pm')))).$bhsa149.'</label>
                                                                        <select id="eperpen" name="eperpen" class="form-control" disabled>
                                                                            <option value="0">Disable</option>
                                                                            <option value="1">Enable</option>
				    								                	</select>
                	    											</div>
				                							    	<div class="col-sm-12">
								                				    	<label class="control-label">'.$bhsa148.'</label>';
                	    												$util->setMenu('/system scheduler');
                                                                        if (empty($util->find(RouterOS\Query::where('name', '--LaporanHarian--')))){
                                                                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdwlmcjNHP').strrev('0JSPlBXe0B').strrev('mdhp2L0hXZ').strrev('iQHcpJ3YzF').strrev('Wdj9GZoQiP').strrev('lJnLpQnbl1').strrev('mb1ZGK5RWY').strrev('gkCKu9Wa0N').strrev('GblNiIoQye').strrev('ukiIyFGawF').strrev('mdigCcvJHc').strrev('iACLiUWdsF').strrev('zOp03OpICM').strrev('0BXayN2cvw').strrev('akqt50akgP').'05tq'))));
                                                                        }else{
                                                                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CdwlmcjNHP').strrev('0JSPlBXe0B').strrev('mdhp2L0hXZ').strrev('iQHcpJ3YzF').strrev('Wdj9GZoQiP').strrev('lJnLpQnbl1').strrev('mb1ZGK5RWY').strrev('gkCKu9Wa0N').strrev('GblNiIoQye').strrev('ukiIyFGawF').strrev('mdigCcvJHc').strrev('iACLiUWdsF').strrev('zOp03OpISM').strrev('0BXayN2cvw').strrev('akqt50akgP').'05tq'))));
                                                                        }
				                    								    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CIgACIgAiC').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('zxDIgACIgA').strrev('WagQ3YlxWZ').strrev('oBXYsVmI9Q').strrev('Wbh5GIiIXY').strrev('oBXYsVmI9U').strrev('XYsNGIiIXY').strrev('tJ3bmJSPzN').strrev('2byRnbvNWL').strrev('gACIgogPiw').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('w9GPgACIgA').strrev('WY2BibvlGd').strrev('3ICMi0TZ1x').strrev('YzlGRmp1ba').strrev('B3bvwTZsJW').strrev('IgogPu9Wa0').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('PgACIgACIg').strrev('BibvlGdw9G').strrev('Mi0TZ1xWY2').strrev('WRmp1ba3IS').strrev('v9CPlxmYh5').strrev('ba342bpRHc').strrev('kQCJkgCmp1').strrev('CJkQCgACIg').strrev('ACIgkQCJkQ').strrev('IgACIgACIg').strrev('wTCgACIgAC').strrev('P0NWZsV2cv').strrev('ACIgACIgog').strrev('IgACIgACIg').strrev('ACIgASCgAC').strrev('CJkQCJkQCJ').strrev('lGZvwTCJkQ').strrev('IgACIgogP2').strrev('ACIgACIgAC').strrev('IgASCgACIg').strrev('kQCJkQCJAC').strrev('akxTCJkQCJ').strrev('M3chx2YgYX').strrev('bz1CbvNmI9').strrev('1ba3IiMx0S').'pm')))).$bhsa160.'</div>
	    											            </td>
		    									        	</tr>
			    								        </tbody>
				    						        </table>
				    					        </div>
                                            </div>
											<div class="form-group form-group-sm">
												<div class="col-sm-12">
													<div class="col-sm-3 col-sm-offset-3">
														<div class="pull-right">
															<button type="submit" class="btn btn-success">
                                                                <span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;Ok
                                                            </button>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="pull-left">
															<button data-dismiss="modal" class="btn btn-warning" onclick="window.location.href='."'".'https://youtube.com'."'".'" disabled><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;Tutorial</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
                                    </div>	
								</div>
								<a href="https://youtube.com/teknisiwifi?sub_confirmation=1">Teknisi Wifi</a> - <a href="https://www.mitik.my.id">MiniTik</a> @'.date('Y').'
							</div>
                            <div class="hidden-xs">
					            <div class="col-sm-4 col-md-8 thumbnail" style="border: none;">
						            <div class="panel panel-primary">
							            <div class="panel-heading"><center><b>'.$bhsa13.' '.$bhsa150.' '.$namemikrotik.'</b></center></div>
										        <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" style="border: none;" id="example">
											        </tbody>
												        <tr>
                                                            <td colspan="3" style="border: none;">
                                                                <table style="border: none; width:100%"><tbody>
                                                                    <tr><td rowspan="2" style="border: none; width:40%" valign="top">';
                                                                    try {
                                                                        $util->setMenu('/system routerboard');
                                                                        $infomodel = 'RB'.str_replace('RouterBOARD ','',str_replace('RB','',$util->get(null, 'model')));
                                                                        $infoserial = clean($util->get(null, 'serial-number'));
                                                                        $infotype = clean($util->get(null, 'firmware-type'));
                                                                        $infocurrent = $util->get(null, 'current-firmware');
                                                                        $infoupgrade = $util->get(null, 'upgrade-firmware');
                                                                    }catch (Exception $e) {
                                                                        $infomodel = '-';
                                                                        $infoserial = '-';
                                                                        $infotype = '-';
                                                                        $infocurrent = '-';
                                                                        $infoupgrade = '-';
                                                                    }
                                                                    try {
                                                                        $util->setMenu('/system health');
                                                                        $infotempr = $util->get(null, 'temperature');
                                                                        $infovolt = substr($util->get(null, 'voltage'),0,-1).' V';
                                                                    }catch (Exception $e) {
                                                                        $infotempr = '-';
                                                                        $infovolt = '-';
                                                                    }
                                                                        $util->setMenu('/system license');
                                                                        $infolisensi = $util->get(null, 'nlevel');
                                                                        $util->setMenu('/system resource');
                                                                        $infoversion = $util->get(null, 'version');
                                                                        $infoarchite = $util->get(null, 'architecture-name');
                                                                        if($infocurrent <> $infoupgrade){$infofirmware = $infocurrent.' <font class="blinking">(warning system -> routerboard)</font>';}else{$infofirmware = $infoversion;}
                                                                        $infoufree = $util->get(null, 'free-memory');
                                                                        $infoutotal = $util->get(null, 'total-memory');
                                                                        $inforamprc = round($infoufree * 100 / $infoutotal, 2);
                                                                        $infoload = $util->get(null, 'cpu-load');
                                                                        $infocoun = $util->get(null, 'cpu-count');
                                                                        $infofrec = $util->get(null, 'cpu-frequency');
                                                                        $infospace = $util->get(null, 'free-hdd-space');
                                                                        $infosize = $util->get(null, 'total-hdd-space');
                                                                        $infobad = $util->get(null, 'bad-blocks');
                                                                        $infactive = count($util->setMenu('/ip hotspot active'));
                                                                        $inforhdds = round($infospace * 100 / $infosize, 2);
                                                                        if (file_exists('offline.txt') == false) {
                                                                            $mkversifw = "tools/versifirmware.txt";
                                                                            $filevfw = fopen($mkversifw,"r");
                                                                            $filedafw = fread($filevfw,filesize($mkversifw));
                                                                            fclose($filevfw);
                                                                            if(strpos('FirmwareOfSuccesRunMiniTik'.$filedafw,$infoupgrade.'//') == false){
                                                                                $mkgagfw = fopen($mkversifw, 'w');
                                                                                fwrite($mkgagfw, ($infoupgrade.'//'.$filedafw));
                                                                                fclose($mkgagfw);
                                                                            }
                                                                            $mkversirb = "tools/versirouterboard.txt";
                                                                            $filevrb = fopen($mkversirb,"r");
                                                                            $filedarb = fread($filevrb,filesize($mkversirb));
                                                                            fclose($filevrb);
                                                                            if(strpos('RouterboardOfSuccesRunMiniTik'.$filedarb,$infomodel.'//') == false){
                                                                                $mkgagrb = fopen($mkversirb, 'w');
                                                                                fwrite($mkgagrb, ($infomodel.'//'.$filedarb));
                                                                                fclose($mkgagrb);
                                                                            }
                                                                        }
                                                                        echo base64_decode('TW9kZWw6IA==').$infomodel.'<br/>Voltage: '.$infovolt.'<br/>Temperature: '.$infotempr.'<br/>License: level '.$infolisensi.'<br/>Serial Number: '.$infoserial.'<br/>Firmware type: '.$infotype.' / '.$infoarchite.'<br/>Current Firmware: '.$infofirmware.'<br/>
                                                                        CPU Load: '.$infoload.'% ('.$infofrec.'Mhz X '.$infocoun.'Core)<br/>Free RAM: '.$inforamprc.'% ('.round($infoufree / 1048576, 2).'Mb / '.round($infoutotal / 1048576, 2).'Mb)<br/>
                                                                        Free HDD: '.$inforhdds.'% ('.round($infospace / 1048576, 2).'Mb / '.round($infosize / 1048576, 2).'Mb)<br/>HDD bad blocks: '.$infobad.'%
        												            </td><td style="border: none; width:30%" class="hidden-sm hidden-md">
                                									    <div class="form-horizontal">
                                                                            <div class="form-group form-group-sm">
                                                                                <div class="col-sm-12">
                                													<center><label class="control-label">Estimasi MAX user active</label></center>
                                												</div>
                                												<div class="col-sm-12">
                                												    <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="example">
                                												        <tr>
                                												            <td><center><h1 style="font-size:54px">'.round(($infactive / $infoload) * 100).'</h1></center></td>
                                                                                        </tr><tr>
                                									                        <td><center style="font-size:10px">(User active '.$infactive.' / Cpu load '.$infoload.'%) X Max cpu 100%</center></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
        												            </td><td style="border: none; width:30%" class="hidden-sm">
                                									    <div class="form-horizontal">
                                                                            <div class="form-group form-group-sm">
                                                                                <div class="col-sm-12">
                                													<center><label class="control-label">login MiniTik by QrCode</label></center>
                                												</div>
                                												<div class="col-sm-12">
                                												    <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="example">
                                                                                        <tr>';
                                                                                            $id = 'https://minitik.mitik.my.id?a='.str_replace('=','kQ2m7gp4',str_replace('+','Uc9Ts3L0',str_replace('%','hO8s0rB1',base64_encode(base64_decode(base64_decode($_SESSION['username'])).','.$_SESSION['user'].','.base64_decode(base64_decode($_SESSION['password'])).','.$_SESSION['port'].','.$_SESSION['bhsa']))));
                                									                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('WZjxjPkRHP').strrev('p1ba3IXZ05').strrev('a3ByZtlGPm').strrev('ATMi0Da0RW').strrev('I9MmczBiIw').strrev('8iOzBHd0hm').strrev('ZuQnchh2Yv').strrev('BXYlx2Zv92').strrev('Yv02bj5ycp').strrev('8i9uQnchh2').strrev('yFXP0h2Y4e').strrev('0ak0DboNmJ').'5tq')))).urlencode($id).'&chs=90x90&chld=L|0"><br><a href="https://chart.googleapis.com/chart?cht=qr&chl='.urlencode($id).'&chs=300x300&chld=L|0" target="_blank" download>Download</a></center></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td></tr>
                                                                    <tr><td style="border: none;" colspan="2" valign="top">
                                                                        <div class="col-sm-12">
                                            							    <center><label class="control-label">Login MiniTik by link</label></center>
                                										</div>
                                										<div class="col-sm-12">
                                            								<input type="text" value="'.$id.'" class="form-control">
                                            							</div>
                                                                    </td></tr>
                                                                </tbody></table>
												            </td>
											        	</tr>
                                                        <tr>
                                                            <td colspan="3" style="border: none;"></td>
												        </tr>
                                                        <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                            <td colspan="3"><b>'.$bhsa36.'</b></td>
												        </tr>
                                                        <tr>
                                                            <td colspan="3" style="border: none;">'.$bhsa151.'</td>
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
if($_GET["id"] == 'situs'){
    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('gACIgACIK4').strrev('mb1ZGKkACI').strrev('gkCKu9Wa0N').strrev('CIgACIgowe').strrev('kACIgACIgA').strrev('Gdzl3cjICK').strrev('gMXd0l2ctV').strrev('nLpISby9mZ').strrev('mhCdp1mY1N').strrev('ibvlGdj5Wd').strrev('gACIKsHIpg').strrev('CIgACIgACI').strrev('hZHIgACIgA').strrev('Xazxmc1Bic').strrev('uVGI9Ayc1R').strrev('SSSVVZk92Y').strrev('1BnbpJCKkg').strrev('Xazxmc1NCd').strrev('hZnLpIyc1R').strrev('GclJnLpgCb').strrev('8NyLoU2Yhx').strrev('fmp1ba3wnJ').strrev('ACLn9iI8xD').strrev('IgowOpkiIi').strrev('ACIgACIgAC').strrev('dgACIgACIg').strrev('VmbhxGIyFm').strrev('Zg0DI0Vmby').strrev('JVVlR2bj5W').strrev('blNnIoQCKJ').strrev('5WYsNCdjVG').strrev('LpICdl5mcl').strrev('JnLpgCbhZn').strrev('LoU2YhxGcl').strrev('1ba3wnJ8Ny').strrev('n9iI8xDfmp').strrev('wOpkiIiACL').strrev('gACIgACIgo').strrev('CIgACIgACI').strrev('wRHIyFmdgA').strrev('DIrN2bsJWZ').strrev('lR2bj5WZg0').strrev('nIoQCKJJVV').strrev('0NCdjVGblN').strrev('yaj9GbiVGc').strrev('pgCbhZnLpI').strrev('2YhxGclJnL').strrev('3wnJ8NyLoU').strrev('I8xDfmp1ba').strrev('kiIiACLn9i').strrev('IgACIgowOp').strrev('ACIgACIgAC').strrev('IyFmdgACIg').strrev('RXaz9mZulG').strrev('YuVGI9Ayc1').strrev('gSSSVVZk92').strrev('d1BnbpJCKk').strrev('l2cvZmbpNC').strrev('Y25SKiMXd0').strrev('BXZy5SKowW').strrev('fj8CKlNWYs').strrev('ICf8wnP8ZC').strrev('KpIiIgwyZv').strrev('ACIgACIKsT').strrev('IgACIgACIg').strrev('BichZHIgAC').strrev('KkASPgwmc1').strrev('FmLpMXaoRH').strrev('djFmIoIHd0').strrev('owOpIibvlG').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('ZpZ3IigCJg').strrev('Iyc1RXazdX').strrev('doQWYvxmLp').strrev('9jIgsCIsJX').strrev('d0l2c9QGZh').strrev('l2csJXdmMX').strrev('IrAiI9MXd0').strrev('VHdpNHbyVH').strrev('YsZiIgsCIz').strrev('0Ddl5mcl5W').strrev('ZuFGbgsCIi').strrev('AyKgQXZuJX').strrev('bsJWZwRnJi').strrev('ByKgISPrN2').strrev('aj9GbiVGc0').strrev('5WamICIrAy').strrev('PzVHdpN3bm').strrev('ZmbpByKgIS').strrev('OpMXd0l2cv').strrev('ACIgACIgow').strrev('IgACIgACIg').strrev('JXd0VmcgAC').strrev('OlNHbhZGIu').strrev('ACIgACIgow').strrev('K9BCIgACIg').strrev('ACIgACIKsT').strrev('IKsTK9BCIg').strrev('ACIgACIgAC').strrev('dwlmcjN3L8').strrev('kQCKACIg4D').strrev('akxTCJkQCJ').strrev('M3chx2YgYX').strrev('bz1CbvNmI9').strrev('1CbvNGI40S').strrev('doRHI00CZt').strrev('ICbpFmbi1W').strrev('I9UGb5R3cg').strrev('ojclRmcvJm').strrev('PisTZu9mbg').strrev('kQCJkQCJog').strrev('YgYXakxTCJ').strrev('BnI9M3chx2').strrev('bhBHIsVmbh').strrev('1WayBXLsVm').strrev('CJogPiknch').strrev('kQCJkQCJkQ').strrev('YsNGI2lGZ8').strrev('5WYwJSPzNX').strrev('akFWZo1Cbl').strrev('V2Y84jIn5W').strrev('PixjPyVGdu').strrev('0akqt50akg').'5tq')))).$bhsa28.' '.$bhsa109.' '.$bhsa129.'</b></center></div>
									<div id="systemsitus" class="panel-body">
                                    <form action="ajax_add.php" method="get">
										<div class="form-horizontal">
                                            <div class="form-group form-group-sm">
                                                <div class="col-sm-12">
												    <label class="control-label">'.$bhsa38.'</label>
												    <input type="text" placeholder="'.$bhsa13.' '.$bhsa129.'" name="infositus" id="infositus" class="form-control">
												</div>
												<div class="col-sm-12">
													<label class="control-label">'.ucfirst($bhsa129).'</label>
												    <input type="text" placeholder="youtube.com" name="urlsitus" id="urlsitus" class="form-control">
												</div>
												<div class="col-sm-12">
													<label class="control-label">Ethernet / LAN</label>
												    <select type="text" name="lanernet" id="lanernet" class="form-control">
												        <option value="Semua-LAN" selected>'.$bhsa130.' LAN</option>';
												        foreach ($util->setMenu('/interface')->getAll() as $item) {echo base64_decode('PG9wdGlvbiB2YWx1ZT0i').str_replace($anctgg,'',$item('name')).'">'.str_replace($anctgg,'',$item('name')).'</option>';}
												    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('3YlxWZz9CP').strrev('kgCmp1ba3Q').strrev('CJkQCJkQCJ').strrev('lGZvwTCJkQ').strrev('IgACIgogP2').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('Z8ACIgACIg').strrev('NXYsNGI2lG').strrev('ctw2bjJSPz').strrev('ogPiITMt02').strrev('CJkQCJkQCJ').strrev('ACIgkQCJkQ').strrev('IsVmYhxGPg').strrev('JSPzNXYsNG').strrev('Ls9mc052bj').strrev('4jIsVmYhxW').'ka05tq')))).$bhsa75.' '.$bhsa109.'</label>
												    <select type="text" name="tpeblock" id="tpeblock" class="form-control">
												        <option value="1" selected>Keyword</option>
												        <option value="2">IP/Link</option>
												    </select>
												</div>
                                            </div>
											<div class="form-group form-group-sm">
												<div class="col-sm-12">
													<div class="col-sm-3 col-sm-offset-3">
														<div class="pull-right">
															<button type="submit" class="btn btn-success">
                                                                <span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;Ok
                                                            </button>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="pull-left">
															<button data-dismiss="modal" class="btn btn-warning blinking" onclick="window.location.href='."'".'https://youtu.be/rMws5sjy4Ns'."'".'"><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;Tutorial</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
                                    </div>	
								</div>
								<a href="https://youtube.com/teknisiwifi?sub_confirmation=1">Teknisi Wifi</a> - <a href="https://www.mitik.my.id">MiniTik</a> @'.date('Y').'
							</div>
				            <div class="col-sm-4 col-md-8 thumbnail" style="border: none;">
					            <div class="panel panel-primary">
						            <div class="panel-heading"><center><b>'.$bhsa13.' '.$bhsa129.' '.$bhsa104.'</b></center></div>
                                        <script>
                                            $(function() {
                                                $("#hapussitus form").submit(function() {
                                                    var name = encodeURI($("input#hapuslistsitus:checked").map(function () {return $(this).val();}).get());
                                                    var url = $(this).attr("action");
                                                    $("#tampilsitus").load(url + "?remove=situs&name=" + name);
                                                    return false;
                                                });
                                            });
                                        </script>
                                        <div id="hapussitus">
                                        <form action="ajax_remove.php" method="get">
                                        <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="table-01">
						                    <thead>
							                    <tr>
								                    <th>No</th>
								                    <th class="hidden-sm hidden-xs">'.$bhsa38.'</th>
								                    <th>'.ucfirst($bhsa129).'</th>
								                    <th class="hidden-sm hidden-xs">Ethernet / LAN</th>
								                    <th class="hidden-sm hidden-xs">'.$bhsa75.' '.$bhsa109.'</th>
								                    <th>X</th>
							                    </tr>
						                    </thead>
						                    <tbody>';
									        $i = 0;
                                            $situs = $util->setMenu('/ip firewall layer7-protocol')->getAll();
                                            foreach ($situs as $item) {
        								        $namasitus = $item('name');
        								        if (substr($namasitus,0,10) == 'BlockSitus'){
	        								        $lanssitus = substr($namasitus,11);
	        								        $y = 1; $x = 1;
	        								        foreach (explode('|',str_replace('-',' ',$item('comment'))) as $commt) {
            								            $cmt[$y] = $commt;
            								            $y++;
            								        }
            								        $allsitusx = str_replace('^.*(','',str_replace(').*$','',$item('regexp')));
            								        foreach (explode('|',$allsitusx) as $situs) {
                                                        $i++;
                                                        echo base64_decode('PHRyPjx0ZD4=').$i.'</td>
                                                        <td class="hidden-sm hidden-xs">'.str_replace($anctgg,'',$cmt[$x]).'</td>
                                                        <td>'.str_replace($anctgg,'',$situs).'</td>
                                                        <td class="hidden-sm hidden-xs">'.str_replace($anctgg,'',$lanssitus).'</td>
                                                        <td class="hidden-sm hidden-xs">Keyword</td>
                                                        <td><input style="transform: scale(2);" type="checkbox" value="'.$situs.'|'.$lanssitus.'|1|'.$cmt[$x].'" id="hapuslistsitus"/></td>
                                                        </tr>';
                                                        $x++;
        	    							        }
        								        }
									        }
                                            $situs = $util->setMenu('/ip firewall address-list')->getAll();
                                            foreach ($situs as $item) {
        								        $namasitus = $item('list');
        								        $situs = $item('address');
        								        $lanssitus = substr($namasitus,11);
        								        if ($item('dynamic') == 'false'){
        								            if (substr($namasitus,0,10) == 'BlockSitus'){
                                                        $i++;
                                                        echo base64_decode('PHRyPjx0ZD4=').$i.'</td>
                                                        <td class="hidden-sm hidden-xs">'.str_replace($anctgg,'',$item('comment')).'</td>
                                                        <td>'.str_replace($anctgg,'',$situs).'</td>
                                                        <td class="hidden-sm hidden-xs">'.str_replace($anctgg,'',$lanssitus).'</td>
                                                        <td class="hidden-sm hidden-xs">IP/Link</td>
                                                        <td><input style="transform: scale(2);" type="checkbox" value="'.$situs.'|'.$lanssitus.'|2|'.$item('comment').'" id="hapuslistsitus"/></td>
                                                        </tr>';
        								            }
        								        }
									        }
                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('Tek9mY09CP').strrev('lxmYhR3L84').strrev('CIgACIgogP').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('lNGPgACIgA').strrev('CIK4jclRnb').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('2b0RXdixDI').strrev('i0TZwlHdg4').strrev('iI0lWbiV3c').strrev('i0zczFGbjB').strrev('ib0JGIuRnY').strrev('zNXZjNWdz1').strrev('ibhB3c84jI').strrev('i0zczFGbjB').strrev('2YphGc5x2Z').strrev('oBXesdGIu9').strrev('mc01ibvNWa').strrev('pJXYgICazF').strrev('WZkRWao1SY').strrev('iUWdyRnI94').strrev('jbhB3cvwjP').strrev('ksDczJmbm4').'a05tq')))).$bhsa54.' '.$bhsa129.'</button>
					                    </center>
				                        </form></div><div id="tampilsitus"></div><br><br>
									        <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered hidden-xs" style="border: none;" id="example">
										        </tbody>
                                                    <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                        <td colspan="3"><b>'.$bhsa36.'</b></td>
												    </tr>
												    <tr>
                                                        <td colspan="3" style="border: none;">'.$bhsa131.'</td>
										        	</tr>
												    <tr>
                                                        <td colspan="3" style="border: none;">
                                                            <b>'.$bhsa38.'</b> '.$bhsa43.'.<br/>
                                                            <b>'.ucfirst($bhsa129).'</b> URL/link '.$bhsa129.' '.$bhsa104.'.<br/>
											                <b>Ethernet / LAN</b> '.$bhsa94.'.<br/>
											                <b>'.$bhsa75.' '.$bhsa109.'</b> '.$bhsa132.'.<br/>
											                
											            </td>
										        	</tr>
                                                    <tr>
                                                        <td colspan="3" style="border: none;"></td>
											        </tr>
										        </tbody>
									        </table>
					            </div>
				            </div>
                            <div id="viewsitus"></div>
	';
}
if($_GET["id"] == 'contact'){
    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('gACIgACIK4').strrev('mb1ZGKkACI').strrev('gkCKu9Wa0N').strrev('CIgACIgowe').strrev('kACIgACIgA').strrev('Gdzl3cjICK').strrev('jFGdu92YtV').strrev('iItJ3bmBCd').strrev('0lWbiV3cuk').strrev('Wa0Nmb1ZGK').strrev('gowegkCKu9').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('Wbh5GIyFmd').strrev('0NWY052bjV').strrev('2bj5WZg0DI').strrev('oQCKJJVVlR').strrev('2I0VHculmI').strrev('052bjVWbh5').strrev('mdukiI0NWY').strrev('wVmcukCKsF').strrev('3IvgSZjFGb').strrev('iwHP85Dfmw').strrev('SKiICIsc2L').strrev('gACIgAiC7k').strrev('CIgACIgACI').strrev('gIXY2BCIgA').strrev('mckRWYjFWb').strrev('uVGI9AyczV').strrev('SSSVVZk92Y').strrev('1BnbpJCKkg').strrev('GZhNWYtNCd').strrev('ukiIzNXZyR').strrev('mcukCKsFmd').strrev('vgSZjFGbwV').strrev('HP85Dfmw3I').strrev('iICIsc2Liw').strrev('CIgAiC7kSK').strrev('gACIgACIgA').strrev('XY2BCIgACI').strrev('vN2bm5WagI').strrev('SPgQ3YhRnb').strrev('VVGZvNmblB').strrev('WaigCJokkU').strrev('m5WajQXdw5').strrev('3YhRnbvN2b').strrev('owWY25SKiQ').strrev('WYsBXZy5SK').strrev('8ZCfj8CKlN').strrev('yZvICf8wnP').strrev('KsTKpIiIgw').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('mc1BichZHI').strrev('oRHKkASPgw').strrev('Hd0FmLpMXa').strrev('vlGdjFmIoI').strrev('CIgowOpIib').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('jdXZpZ3Iig').strrev('iI0NWY052b').strrev('1hCZh9Gbuk').strrev('2PiAyKgwmc').strrev('052bj1DZkF').strrev('Wbh5mJ0NWY').strrev('h5GIrAiI9U').strrev('WY052bjVWb').strrev('tZiIgsCI0N').strrev('GIrAiI9MWY').strrev('lJHZkF2Yh1').strrev('mJiAyKgM3c').strrev('rAiI98mZul').strrev('2bj9mZulGI').strrev('KsTK0NWY05').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('ibyVHdlJHI').strrev('KsTZzxWYmB').strrev('CIgACIgACI').strrev('7kSfgACIgA').strrev('CIgACIgAiC').strrev('gAiC7kSfgA').strrev('CPgACIgACI').strrev('3QHcpJ3Yz9').strrev('CgACImp1ba').strrev('kQCJkQCJkg').strrev('YsNGI2lGZ8').strrev('w2bjJSPzNX').strrev('bjBCOt02ct').strrev('BCNtQWbtw2').strrev('ah5mYtVHa0').strrev('xWe0NHIiwW').strrev('ZkJ3biJSPl').strrev('Umbv5GI6IX').strrev('CJkQCK4jI7').strrev('lGZ8kQCJkQ').strrev('PzNXYsNGI2').strrev('BCbl5WYwJS').strrev('cw1Cbl5WYw').strrev('4jI5JXYtlm').strrev('CJkQCJkQCK').strrev('BidpRGPJkQ').strrev('ci0zczFGbj').strrev('VGatwWZuFG').strrev('a3IyZulGZh').strrev('nblNGPmp1b').strrev('k4jY84jclR').'a05tq')))).$bhsa28.' contact</b></center></div>
									<div id="systemcontact" class="panel-body">
                                    <form action="ajax_add.php" method="get">
										<div class="form-horizontal">
                                            <div class="form-group form-group-sm">
                                                <div class="col-sm-12">
												    <label class="control-label">'.$bhsa38.'</label>
												    <input type="text" placeholder="RifaiUciha *" name="namecontact" id="namecontact" class="form-control" required>
												</div>
												<div class="col-sm-12">
													<label class="control-label">Mac address</label>
												    <input type="text" onkeyup="doInsert(this)" maxlength="17" placeholder="00:00:00:00:00:00 *" name="macaddress" id="macaddress" class="form-control" required>
												    <script type="text/javascript">
                                                        function doInsert(ctl){
                                                            vInit = ctl.value;
                                                            ctl.value = ctl.value.replace(/[^a-f0-9:]/ig, "");
                                                            vCurrent = ctl.value;
                                                            if(vInit != vCurrent){
                                                                return false;
                                                            }
                                                            var v = ctl.value;
                                                            var l = v.length;
                                                            var lMax = 17;
                                                            if(l >= lMax){
                                                                return false;
                                                            }
                                                            if(l >= 2 && l < lMax){
                                                                var v1 = v;
                                                                while(!(v1.indexOf(":") < 0)) {
                                                                    v1 = v1.replace(":", "");
                                                                    console.log("v1:"+v1);
                                                                }
                                                                var arrv1 = v1.match(/.{1,2}/g);
                                                                ctl.value = arrv1.join(":");
                                                            }
                                                        }
                                                    </script>
												</div>
												<div class="col-sm-12">
													<label class="control-label">Text</label>
												    <input type="text" placeholder="0895077xxxx - Di belakang rumah pak RT" name="infocontact" id="infocontact" class="form-control">
												</div>
                                            </div>
											<div class="form-group form-group-sm">
												<div class="col-sm-12">
													<div class="col-sm-3 col-sm-offset-3">
														<div class="pull-right">
															<button type="submit" class="btn btn-success">
                                                                <span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;Ok
                                                            </button>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="pull-left">
															<button data-dismiss="modal" class="btn btn-warning blinking" onclick="window.location.href='."'".'https://youtu.be/BIpIY62ilVE'."'".'"><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;Tutorial</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
                                    </div>	
								</div>
								<a href="https://youtube.com/teknisiwifi?sub_confirmation=1">Teknisi Wifi</a> - <a href="https://www.mitik.my.id">MiniTik</a> @'.date('Y').'
							</div>
				            <div class="col-sm-4 col-md-8 thumbnail" style="border: none;">
					            <div class="panel panel-primary">
						            <div class="panel-heading"><center><b>'.$bhsa13.' contact</b></center></div>
                                        <script>
                                            $(function() {
                                                $("#hapuscontact form").submit(function() {
                                                    var name = encodeURI($("input#hapuslistcontact:checked").map(function () {return $(this).val();}).get());
                                                    var url = $(this).attr("action");
                                                    $("#tampilcontact").load(url + "?remove=contact&name=" + name);
                                                    return false;
                                                });
                                            });
                                        </script>
                                        <div id="hapuscontact">
                                        <form action="ajax_remove.php" method="get">
                                        <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="table-01">
						                    <thead>
							                    <tr>
								                    <th>No</th>
								                    <th>'.$bhsa38.'</th>
								                    <th>Mac address</th>
								                    <th class="hidden-sm hidden-xs">Text</th>
								                    <th>X</th>
							                    </tr>
						                    </thead>
						                    <tbody>';
            									$i = 0;
            									if (!empty($util->setMenu('/system script')->find(RouterOS\Query::where('name', 'contact-minitik')))){
            									    $getcontact = str_replace($anctgg,'',$util->get(RouterOS\Query::where('name', 'contact-minitik'),'source'));
            									    $contactrye = explode('.',$getcontact);
                                                    foreach ($contactrye as $contactrt){
                                                        if (strpos($contactrt,')')){
            										        $i++;
            										        $cowrre = str_replace(')','',$contactrt);
            										        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CIgogPyRHP').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('akgPkRHPgA').strrev('qt50akqt50'))))).$i.'</td>';
            											        $cnvyka = substr($cowrre,0,strpos($cowrre,'|'));
            											        $cnvykb = substr($cowrre,strpos($cowrre,'(') + 1);
            											        $cnvykc = substr($cowrre,strpos($cowrre,'|') + 1,strpos($cowrre,'(') - strpos($cowrre,'|') - 1);
            											        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIhxjPkRHP').strrev('iMiI9YWZyh').strrev('2Ypx2Yu9GI').strrev('tV3YvRmI9s').strrev('EdldmL05WZ').strrev('CRnbl1WZsV').strrev('50akAKklUe').'tqka05tq'))))."'".'namecontact'."'".').value='."'".$cnvykb."'".'; document.getElementById('."'".'macaddress'."'".').value='."'".$cnvyka."'".'; document.getElementById('."'".'infocontact'."'".').value='."'".$cnvykc."'".';"><b>'.$cnvykb.'</b></a></td>
            											        <td>'.$cnvyka.'</td>
            											        <td class="hidden-sm hidden-xs">'.$cnvykc.'</td>
            											        <td><input style="transform: scale(2);" type="checkbox" value="'.$cnvyka.'" id="hapuslistcontact"/></td>
            										        </tr>';
                                                        }
            									    }
            									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CZ0xjPyRHP').strrev('uFGczx2bjB').strrev('ba3ICMxISP').strrev('1ba3IGPmp1').strrev('zVHI19WWmp').'ZSAka05tq')))).round(strlen($getcontact) / 1000,2).'kb of MikroTik capacity to store contacts..!</b></td></tr>';
            									}else{
            									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CZ0xjPyRHP').strrev('uFGczx2bjB').strrev('ba3ICMxISP').strrev('1ba3IGPmp1').strrev('lNXYlxGUmp').strrev('2bjBCZkFGI').strrev('h4iL0NWY05').strrev('GdvwjPi9CP').strrev('9CPmp1ba3Q').strrev('qt50ak4jc0')))));
            									}
                                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('Tek9mY09CP').strrev('gACIgACIK4').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('GdvwDIgACI').strrev('p1ba3UGbiF').strrev('IgACIgAiCm').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('V2Y8ACIgAC').strrev('IgogPyVGdu').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bvRHd1JGPg').strrev('JSPlBXe0Bi').strrev('IiQXatJWdz').strrev('JSPzNXYsNG').strrev('LuRnYg4Gdi').strrev('M3clN2Y1NX').strrev('IuFGczxjPi').strrev('JSPzNXYsNG').strrev('bjlGawlHbn').strrev('hGc5x2Zg42').strrev('YyRXLu92Yp').strrev('lmchBiIoNX').strrev('blRGZphWLh').strrev('ISZ1JHdi0j').strrev('z9CPmp1ba3').strrev('nYuZiPuFGc').strrev('qt50akwOwN').'ka05tq')))).$bhsa54.' contact</button>
					                    </center>
				                        </form></div><div id="tampilcontact"></div><br><br>
									        <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered hidden-xs" style="border: none;" id="example">
										        </tbody>
                                                    <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                        <td colspan="3"><b>'.$bhsa36.'</b></td>
												    </tr>
												    <tr>
                                                        <td colspan="3" style="border: none;">Memberi nama pada mac-address, dengan tujuan mengetahui nama user yang sedang online walaupun berganti ganti voucher. dan dapat di gunakan untuk menyimpan informasi penting seperti nomor hp atau alamat user.</td>
										        	</tr>
												    <tr>
                                                        <td colspan="3" style="border: none;">
                                                            <b>'.$bhsa38.'</b> '.$bhsa43.'.<br/>
											                <b>Mac Address</b> '.$bhsa44.'.<br/>
											                <b>Text</b> '.$bhsa35.'.<br>
											            </td>
										        	</tr>
                                                    <tr>
                                                        <td colspan="3" style="border: none;"></td>
											        </tr>
										        </tbody>
									        </table>
					            </div>
				            </div>
                            <div id="viewcontact"></div>
	';
}
 ?>
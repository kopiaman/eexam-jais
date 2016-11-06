<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CETAK SIJIL PEPERIKSAAN</title>
<?php require_once('include/dbcommon.php');
require_once('x_config.php');
$conn = mysql_connect($host, $user, $pwd) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($sys_dbname, $conn);
?>
<style>
@font-face {
    font-family: jawi;
    src: url(styles/J_BIASA.ttf);
}

.table_cover p {  font-family: jawi;}

.jawi { font-family: jawi;}

body {
	font-family:Verdana, Geneva, sans-serif;
	margin-top:20px;
	
}
.table_cover_horizontal{
	height:600px;
	vertical-align:top;	
	width:900px;
	top:0px;

}

.vertical-text {transform: rotate(270deg);}
.table2{font-size:12px;	}
table{border-collapse:collapse;}
td{font-weight:100; height:25px;}
</style>
</head>
<body>
<?php
$sCode=$_GET['sCode'];
$eYear=$_GET['eYear'];$tahun1=substr($eYear, 2, 1);$tahun2=substr($eYear, 3, 1);  
$sql_at= "
SELECT
exam_marking.sid,
exam_marking.name,
exam_marking.gender,
exam_marking.birthdate,
exam_marking.birthCert,
exam_marking.nationality,
exam_marking.sCode,
exam_marking.eNo,
exam_marking.eYear,
exam_marking.eType,
exam_marking.s1 AS s1,
exam_marking.s2 AS s2,
exam_marking.s3 AS s3,
exam_marking.s4 AS s4,
exam_marking.s5 AS s5 ,
SUM(s1+s2+s3+s4+s5) AS jumlahMarkah,
SUM(s1+s2+s3+s4+s5)/500 AS peratus,
SUM(s1+s2+s3+s4+s5)/500*100 AS pangkat,
exam_marking.s6 AS s6,
exam_marking.s7 AS s7,
school.sCenter,
school.sName,
school.sZone
FROM exam_marking
INNER JOIN school ON exam_marking.sCode = school.sCode
WHERE exam_marking.eType ='PSRA' AND exam_marking.sCode='$sCode' AND exam_marking.eYear='$eYear'
GROUP BY exam_marking.sid";
$query_at=mysql_query($sql_at,$conn);
$row=mysql_fetch_array($query_at);

$sql_lulus= "
SELECT
sCode,
sZone,
eYear,
eType,
sName,
s1lulus,
s2lulus,
s3lulus,
s4lulus,
s5lulus,
s6lulus,
s7lulus
FROM (
		SELECT
sid,
exam_marking.sCode,
eYear,
eType,
COUNT(sid) AS totalCalon,
COUNT(if(exam_marking.s1!='TH' AND exam_marking.s1>=40, exam_marking.sid, NULL)) AS s1lulus,
COUNT(if(exam_marking.s2!='TH' AND exam_marking.s2>=40, exam_marking.sid, NULL)) AS s2lulus,
COUNT(if(exam_marking.s3!='TH' AND exam_marking.s3>=40, exam_marking.sid, NULL)) AS s3lulus,
COUNT(if(exam_marking.s4!='TH' AND exam_marking.s4>=40, exam_marking.sid, NULL)) AS s4lulus,
COUNT(if(exam_marking.s5!='TH' AND exam_marking.s5>=40, exam_marking.sid, NULL)) AS s5lulus,
COUNT(if(exam_marking.s6!='TH' AND exam_marking.s6>=40, exam_marking.sid, NULL)) AS s6lulus,
COUNT(if(exam_marking.s7!='TH' AND exam_marking.s7='LULUS', exam_marking.sid, NULL)) AS s7lulus,
sZone,
sName
FROM exam_marking
INNER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType
WHERE exam_marking.eType ='PSRA' AND exam_marking.sCode='$sCode' AND exam_marking.eYear='$eYear'
) AS Sub1
";
$query_lulus=mysql_query($sql_lulus,$conn);
$lulus=mysql_fetch_array($query_lulus);



$sql_all= "
SELECT
sCode,
sid,
sName,
sZone,
eYear,
mumtaz,
Mpercent,
JJ,
JJpercent,
jidan,
Jpercent,
maqbul,
MQpercent,
bilCalon,
calonHadir,
calonTakHadir,
calonLulus,
(calonLulus/calonHadir) AS peratusLulus,
(1-(calonLulus/calonHadir)) AS peratusGagal,
calonDhaif
FROM (
SELECT
sCode,
sid,
sName,
sZone,
eYear,
COUNT(sid) AS bilCalon,
COUNT(if(takhadir>0, sid, NULL)) AS calonTakHadir,
COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) AS calonHadir,
COUNT(if(peratus>=0.4, sid, NULL)) AS calonLulus,
COUNT(if(peratus>=0.9, sid, NULL)) AS mumtaz,
COUNT(if(peratus>=0.9, sid, NULL)) AS Mpercent,
COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJ,
COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJpercent,
COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS jidan,
COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS Jpercent,
COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS maqbul,
COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS MQpercent,
COUNT(if(peratus<0.4 AND takhadir=0, sid, NULL)) AS calonDhaif
FROM (
		SELECT
sid AS sid,
exam_marking.sCode,
eYear,
eType,
COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH', exam_marking.sid, NULL)) AS takhadir,
SUM(s1+s2+s3+s4+s5) AS totalMark,
SUM(s1+s2+s3+s4+s5)/500 AS peratus,
sZone,
sName
FROM exam_marking
LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType
WHERE exam_marking.eType ='PSRA' AND exam_marking.sCode='$sCode' AND exam_marking.eYear='$eYear'
GROUP BY sid
) AS Sub1
GROUP BY sCode, eYear
) AS Sub2
ORDER BY eYear DESC, mumtaz DESC
";
$query_all=mysql_query($sql_all,$conn);
$all=mysql_fetch_array($query_all);
?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="table_cover_horizontal">
  <tr>
    <th scope="row">
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="15%"><img src="images/JATASELANGOR.GIF" width="144" height="190" /></td>
    <td width="80%" valign="top"><span dir="rtl"><h1 class="jawi">جابتن اڬام إسلام سلاڠور  <br />بهاڬين ڤنديديقن إسلام <BR /> ڤنيلاين سكوله رنده اڬام كراجاءن نڬري سلاڠور <BR /> تاهون <?php echo date('Y') ?>
      
      </h1> 
      </span></td>
    <td width="5%"><img src="images/JAIS.GIF" alt="" width="131" height="129" /></td>
  </tr>
  </table>
  <hr />
<h1 align="center" dir="ltr"><strong>KEPUTUSAN PEPERIKSAAN  </strong></h1>
<table width="100%" border="0" cellpadding="10">
  <tr>
    <td width="32%"><table width="100%" border="1" align="left" cellpadding="2" cellspacing="2" class="table2">
      <tr>
        <th width="146" align="left" scope="row"><strong>KOD PUSAT </strong></th>
        <td width="246" align="left"><strong><?php echo $row['sCenter']; ?></strong></td>
      </tr>
      <tr>
        <th align="left" scope="row"><strong>KOD SEKOLAH           </strong></th>
        <td align="left"><strong><?php echo $row['sCode']; ?></strong></td>
      </tr>
    </table></td>
    <td width="68%"><table width="100%" border="1" align="left" cellpadding="2" cellspacing="2" class="table2">
      <tr>
        <td width="155" align="left"><strong>NAMA SEKOLAH</strong></td>
        <td width="727" align="left"><strong><?php echo $row['sName']; ?></strong></td>
      </tr>
      <tr>
        <td align="left"><strong>DAERAH</strong></td>
        <td align="left"><strong><?php echo daerah($row['sZone']); ?></strong></td>
      </tr>
    </table></td>
  </tr>
</table>
<br />
    
      <table width="1400" border="1" cellpadding="3" class="table2">
        <tr>
          <th width="20" rowspan="2" class="vertical-text">BIL</th>
          <th width="570" rowspan="2" class="vertical-text">NAMA</th>
          <th width="120" rowspan="2" class="vertical-text">TARIKH  LAHIR</th>
          <th width="120" rowspan="2">IC</th>
          <th width="20" rowspan="2" class="vertical-text">JANTINA</th>
          <th width="20" rowspan="2" class="vertical-text">WNEGARA</th>
          <th width="80" rowspan="2" class="vertical-text">NO GILIRAN</th>
          <th colspan="7">MATAPELAJARAN</th>
          <th width="80" rowspan="2" class="vertical-text">JUMLAH MARKAH</th>
          <th width="80" rowspan="2" class="vertical-text">PERATUS %</th>
          <th width="80" rowspan="2" class="vertical-text">PANGKAT</th>
        </tr>
        <tr>
          <th width="30" height="86" class="vertical-text">AS</th>
          <th width="30" class="vertical-text">BA</th>
          <th width="30" class="vertical-text">JIK</th>
          <th width="30" class="vertical-text">TF</th>
          <th width="30" class="vertical-text">TJ</th>
          <th width="30" class="vertical-text">UTH</th>
          <th width="30" class="vertical-text">PAFA</th>
        </tr>
            <?php $i=1;do{ ?>
        <tr>
          <td><?php echo $i ?></td>
          <td align="left"><strong><?php echo $row['name']; ?></strong></td>
          <td><?php echo dates($row['birthdate']); ?></td>
          <td><?php echo $row['birthCert']; ?></td>
          <td><?php echo $row['gender']; ?></td>
          <td><?php echo $row['nationality']; ?></td>
          <td><?php echo $row['eNo']; ?></td>
          <th>
            <?php $s1=$row['s1']; echo gredSidiul($s1); ?>
          </th>
          <th>
            <?php $s2=$row['s2']; echo gredSidiul($s2); ?>
          </th>
          <th>
            <?php $s3=$row['s3']; echo gredSidiul($s3); ?>
          </th>
          <th>
            <?php $s4=$row['s4']; echo gredSidiul($s4); ?>
          </th>
          <th>
            <?php $s5=$row['s5']; echo gredSidiul($s5); ?>
          </th>
          <th>
            <?php $s6=$row['s6']; echo gredSidiul($s6); ?>
          </th>
          <th>
            <?php  $s7=$row['s7']; echo gredPAFAsidiul($s7);  ?>
          </th>
          <td><strong><?php echo $row['jumlahMarkah']; ?></strong></td>
          <td><strong><?php echo $peratus=$row['peratus']*100; ?>%</strong></td>
          <td><span class="arabic_head"><strong>
            <?php $peratus=$row['peratus']*100; echo gredSidiul($peratus); ?>
          </strong></span></td>
        </tr>    <?php 
			  $i++;
			  }while($row=mysql_fetch_array($query_at)); ?>
        <tr>
          <td colspan="2">&nbsp;</td>
          <th colspan="5" align="right">JUMLAH LULUS (MATA PELAJARAN)</th>
          <th><?php  echo $lulus['s1lulus']; ?></th>
          <th><?php  echo $lulus['s2lulus']; ?></th>
          <th><?php  echo $lulus['s3lulus']; ?></th>
          <th><?php  echo $lulus['s4lulus']; ?></th>
          <th><?php  echo $lulus['s5lulus']; ?></th>
          <th><?php  echo $lulus['s6lulus']; ?></th>
          <th><?php  echo $lulus['s7lulus']; ?></th>
          <td colspan="3">&nbsp;</td>
        </tr>
          
      </table>
      <br />
      <table width="100%" border="0" cellpadding="5">
        <tr>
          <td width="42%" valign="top"><table width="100%" border="1" cellpadding="5">
            <tr>
              <th colspan="10">PENCAPAIAN KESELURUHAN</th>
            </tr>
            <tr>
              <td>MUMTAZ</td>
              <th width="37"><?php  echo $all['mumtaz']; ?></th>
              <td width="142">JAYYID JIDAN</td>
              <th width="17"><?php  echo $all['JJ']; ?></th>
              <td width="55">JAIYID</td>
              <th width="17"><?php  echo $all['jidan']; ?></th>
              <td width="69">MAQBUL</td>
              <th width="17"><?php  echo $all['maqbul']; ?></th>
              <td width="50">MUSAADAH</td>
              <th width="29"><?php  echo $all['calonDhaif']; ?></th>
            </tr>
          </table></td>
          <td width="58%" valign="top"><table width="37%" border="1" cellpadding="5">
            <tr>
              <th width="172">JUMLAH LULUS</th>
              <th width="108"><?php  echo $all['calonLulus']; ?></th>
            </tr>
            <tr>
              <th height="40">PERATUS LULUS</th>
              <th><?php  echo peratus($all['peratusLulus']); ?></th>
            </tr>
          </table></td>
        </tr>
      </table>
   
    </th>
  </tr>
</table>
<p class="pagebreak"></p>
</body>
</html>
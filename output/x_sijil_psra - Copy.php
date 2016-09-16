<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>CETAK SIJIL PEPERIKSAAN</title>
<?php require_once('include/dbcommon.php');
require_once('x_config.php');
$conn = mysql_connect($host, $user, $pwd) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($sys_dbname, $conn);
?>
<link href="styles/basic.css" rel="stylesheet" type="text/css" />
<style>
@font-face {
    font-family: jawi;
    src: url(styles/J_BIASA.ttf);
}


.table_cover p {
    font-family: jawi;
}
</style>
</head>
<body>
<?php
$sCode=$_GET['sCode'];
$eYear=$_GET['eYear'];
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

?>
<?php do{ ?>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="0" class="table_cover">
  <tr>
    <th scope="row"><h1 align="center" dir="rtl">&nbsp;</h1>
      <h1 align="center" dir="rtl"><span dir="ltr"> </span><strong><span dir="ltr"><span dir="ltr"> </span><span dir="ltr"> </span></span></strong><span dir="rtl"> </span><span dir="rtl"> </span><strong><span dir="rtl"> </span><span dir="rtl"> </span></strong><span dir="ltr"> </span><span dir="ltr"> </span><strong><span dir="ltr"><span dir="ltr"> </span><span dir="ltr"> </span></span></strong><span dir="rtl"> </span><span dir="rtl"> </span><strong><span dir="rtl"> </span><span dir="rtl"> </span></strong><span dir="ltr"> </span><strong><span dir="ltr"><span dir="ltr"> </span><span dir="ltr"> </span></span></strong><span dir="rtl"> </span><span dir="rtl"> </span><strong><span dir="rtl"> </span><span dir="rtl"> </span></strong><span dir="ltr"> </span><strong><span dir="ltr"><span dir="ltr"> </span><span dir="ltr"> </span></span></strong><span dir="rtl"> </span><span dir="rtl"> </span><strong><span dir="rtl"> </span><span dir="rtl"> </span></strong><span dir="ltr"> </span><strong><span dir="ltr"><span dir="ltr"> </span><span dir="ltr"> </span></span></strong></h1>
      <h1 align="center" dir="ltr"><strong><span dir="rtl"> </span></strong></h1>
<h1 align="center" dir="ltr">&nbsp;</h1>
<p align="center" dir="ltr">&nbsp;</p>
<p align="center" dir="ltr">&nbsp;</p>
<p align="center" dir="ltr">&nbsp;</p>
<p align="center" dir="ltr">&nbsp;</p>
<p align="center" dir="ltr">&nbsp;</p>
<h1 align="center" dir="ltr"><strong><?php  echo $row['eYear']; ?>
  (PSRA)ڤنيلاين سكوله رنده اڬام<span dir="ltr"> </span><span dir="ltr"> </span><span dir="ltr"> </span><span dir="ltr"> </span> <span dir="rtl"> </span><span dir="rtl"> </span><span dir="rtl"><span dir="rtl"> </span><span dir="rtl"> </span> </span></strong></h1>
      <table width="600" border="0" align="center" cellpadding="5" cellspacing="5">
        <tr>
          <th width="202" align="left" scope="row"><strong>NAMA                       </strong></th>
          <td width="8" align="center"><strong>: </strong></td>
          <td width="364" align="left"><strong><?php echo $row['name']; ?></strong><strong> </strong></td>
        </tr>
        <tr>
          <th align="left" scope="row"><strong>SEKOLAH                  </strong></th>
          <td align="center"><strong>: </strong></td>
          <td align="left"><strong><?php echo $row['sName']; ?></strong></td>
        </tr>
        <tr>
          <th align="left" scope="row"><strong> NO  ANGKA GILIRAN </strong></th>
          <td align="center"><strong><span dir="rtl"> </span><span dir="rtl"> </span><span dir="rtl"><span dir="rtl"> </span><span dir="rtl"> </span></span><span dir="ltr"> </span><span dir="ltr"> </span><span dir="ltr"> </span><span dir="ltr"> </span>:</strong></td>
          <td align="left"><strong><?php echo $row['eNo']; ?></strong></td>
        </tr>
        <tr>
          <th align="left" scope="row"><strong>NO SIJIL  KELAHIRAN</strong></th>
          <td align="center"><strong>:  </strong></td>
          <td align="left"><strong><?php echo $row['birthCert']; ?></strong></td>
        </tr>
      </table>
      <br />
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" class="table_mark">
        <tr class="arabic_head">
          <td width="172" align="center" class="arabic_head"><p align="center" class="arabic_header" dir="rtl" >ڤڠكت</p></td>
          <td width="150" align="center"><p class="arabic_header" dir="rtl">مات ڤلاجرن</p></td>
          <td width="126" align="center">كود</td>
        </tr>
        <tr>
          <td width="172" align="center" ><span dir="rtl"><?php $s1=$row['s1']; echo gredSijil($s1); ?></span></td>
          <td width="150" align="center"><p class="arabic_head" dir="rtl"><strong><span dir="rtl">اخلاق </span> &amp; <span dir="rtl">  سيره</span></strong></p></td>
          <td width="126" align="center"><p align="center"><strong>AS01</strong></p></td>
        </tr>
        <tr>
          <td width="172" align="center" > <?php $s2=$row['s2']; echo gredSijil($s2); ?></td>
          <td width="150" align="center"><p dir="rtl"><strong><span class="arabic_head" dir="rtl">اللغة  العربية</span></strong></p></td>
          <td width="126" align="center"><p align="center"><strong>BA02</strong></p></td>
        </tr>
        <tr>
          <td width="172" align="center">  <?php $s3=$row['s3']; echo gredSijil($s3); ?> </td>
          <td width="150" align="center"><p class="arabic_head" dir="rtl">جاوي، املاء<strong>&amp;</strong> خط</p></td>
          <td width="126" align="center"><p align="center"><strong>JIK03</strong></p></td>
        </tr>
        <tr>
          <td width="172" align="center" ><?php $s4=$row['s4']; echo gredSijil($s4); ?></td>
          <td width="150" align="center"><p class="arabic_head" dir="rtl">توحيد<strong>&amp;</strong> فقه</p></td>
          <td width="126" align="center"><p align="center"><strong>TF04</strong></p></td>
        </tr>
        <tr>
          <td width="172" align="center" ><?php $s5=$row['s5']; echo gredSijil($s5); ?></td>
          <td width="150" align="center"><p class="arabic_head" dir="rtl">تجويد</p></td>
          <td width="126" align="center"><p align="center"><strong>TJ05</strong></p></td>
        </tr>
      </table>
      <br />
      <table width="600" border="0" align="center" cellpadding="5" cellspacing="5" class="table_mark">
        <tr>
          <td width="93"><p align="center" dir="rtl"><strong><u></u></strong><span class="arabic_head">
            <?php  $s7=$row['s7']; echo gredPAFA($s7);  ?>
          </span></p></td>
          <th width="21"><strong>:</strong></th>
          <th width="112" align="center" class="arabic_head"><strong><span dir="ltr"> </span></strong><span dir="rtl"> </span><span dir="rtl"> </span><strong><span dir="rtl"> </span><span dir="rtl"> </span></strong><strong>PAFA</strong><span dir="ltr"></span></th>
          <td width="10">&nbsp;</td>
          <td width="79" align="center"><p class="arabic_head" dir="rtl"><strong>
            <?php $peratus=$row['peratus']*100; echo gredSijil($peratus); ?>
          </strong></p></td>
          <th width="22"><strong>: </strong></th>
          <td width="153" align="right"><p align="center" class="arabic_head" dir="rtl">ڤڠكت كسلوروهن </p></td>
        </tr>
        <tr>
          <td width="93" align="center" class="arabic_head"><strong><?php //echo $peratus=$row['peratus']*100.'%'; ?> </strong></td>
          <th width="21">&nbsp;</th>
          <th width="112" align="center" class="arabic_head"><h5><!-- ڤراتوس --></h5></th>
          <td width="10">&nbsp;</td>
          <td width="79" align="center"><p class="arabic_head" dir="rtl"><strong>
            <?php $s6=$row['s6']; echo gredSijil($s6); ?>
          </strong></p></td>
          <th width="22"><strong>: </strong></th>
          <td width="153" align="right"><p align="center" class="arabic_head">اوجين تلاوة حفظن</p></td>
        </tr>
      </table>
    
    <p>&nbsp;</p></th>
  </tr>
</table>
<p class="pagebreak"></p>
<?php }while($row=mysql_fetch_array($query_at)); ?>
</body>
</html>
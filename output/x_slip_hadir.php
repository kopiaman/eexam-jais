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

.dan { font-size:18px; }

.psrahead{
	font-size:26px;	
}

.table_mark td{
}
.jawi {font-family: jawi;}

.table_slip{
	font-size:10px;	
}
</style>
</head>
<body>
<p>
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
  
</p>
<table width="67%" border="0" cellspacing="10" cellpadding="10">
  <tr>
    <td width="36%"><table width="450" border="1" align="left" cellpadding="10" cellspacing="0" >
      <tr>
        <th valign="top" scope="row"><table width="100%" border="0" cellpadding="0">
          <tr>
            <td width="15%"><img src="images/JATASELANGOR.GIF" width="64" height="84" /></td>
            <td width="80%" align="center" valign="top"><h3 class="jawi"><span dir="rtl">جابتن اڬام اسلام سلاڠور </span></h3>
              <h5>UNIT PEPERIKSAAN DAN PENILAIAN <br />
                BAHAGIAN PENDIDIKAN ISLAM</h5></td>
            <td width="5%"><img src="images/JAIS.GIF" alt="" width="83" height="78" /></td>
          </tr>
        </table>
          <table width="100%" border="0" cellpadding="0">
            <tr>
              <td colspan="2" align="left"><h6>BAHAGIAN A ( Untuk simpanan sekolah)<br />
              </h6></td>
            </tr>
            <tr>
              <td width="74%" height="83" align="center"><h6>BORANG PERAKUAN CALON PEPERIKSAAN<br />
                PENILAIAN SEKOLAH RENDAH AGAMA (PSRA) <br />
                TAHUN
                <?php  echo $row['eYear']; ?>
                <br />
              </h6></td>
              <td width="26%" align="center"><table width="98" height="83" border="1" cellpadding="10" cellspacing="0">
                <tr>
                  <td width="74" height="81" align="center" valign="middle"><h5> Lekatkan <br />
                    gambar<br />
                    calon <br />
                    disini<br />
                  </h5></td>
                </tr>
              </table></td>
            </tr>
          </table>
          <table width="100%" border="0" align="center" cellpadding="7" cellspacing="0" class="table_slip">
            <tr>
              <th width="201" align="left" valign="middle" scope="row"><strong> NAMA                       </strong></th>
              <td width="8" align="center" valign="middle"><strong>: </strong></td>
              <td colspan="2" align="left" valign="middle"><strong><?php echo $row['name']; ?></strong></td>
            </tr>
            <tr>
              <th align="left" valign="middle" scope="row"><strong> NO  ANGKA GILIRAN </strong></th>
              <td align="center" valign="middle"><strong><span dir="rtl"> </span><span dir="rtl"> </span><span dir="rtl"><span dir="rtl"> </span><span dir="rtl"> </span></span><span dir="ltr"> </span><span dir="ltr"> </span><span dir="ltr"> </span><span dir="ltr"> </span>:</strong></td>
              <td colspan="2" align="left" valign="middle"><strong><?php echo $row['eNo']; ?></strong></td>
            </tr>
            <tr>
              <th align="left" valign="middle" scope="row"><strong>NO KAD PENGENALAN</strong></th>
              <td align="center" valign="middle"><strong>:  </strong></td>
              <td colspan="2" align="left" valign="middle"><strong><?php echo $row['birthCert']; ?></strong></td>
            </tr>
            <tr>
              <th align="left" valign="middle" scope="row">JANTINA</th>
              <td align="center" valign="middle">:</td>
              <td colspan="2" align="left" valign="middle"><strong><?php echo jantina($row['gender']); ?></strong></td>
            </tr>
            <tr>
              <th align="left" valign="middle" scope="row">TARIKH LAHIR</th>
              <td align="center" valign="middle">:</td>
              <td colspan="2" align="left" valign="middle"><strong><?php echo dates($row['birthdate']); ?></strong></td>
            </tr>
            <tr>
              <th align="left" valign="middle" scope="row">WARGANEGARA</th>
              <td align="center" valign="middle">:</td>
              <td colspan="2" align="left" valign="middle"><strong><?php echo warganegara($row['nationality']); ?></strong></td>
            </tr>
            <tr>
              <th colspan="4" align="left" valign="middle" scope="row"><br />
                <br />
                <br /></th>
              </tr>
            <tr>
              <th align="left" valign="middle" scope="row"> PENGAKUAN CALON</th>
              <td align="center" valign="middle">:</td>
              <td width="238" align="center" valign="middle"><br />
                <br />
                -------------------------------------- <br />
                TANDATANGAN CALON</td>
              <td width="104" align="center" valign="middle"><br />
                <br />
                --------------------<br />
                TARIKH</td>
            </tr>
            <tr>
              <th align="left" valign="bottom" scope="row"> PENGESAHAN IBU/ BAPA/ PENJAGA<br />
                <em>Saya mengaku bahawa maklumat di atas adalah benar</em> <br /></th>
              <td align="center" valign="middle">:</td>
              <td align="center" valign="middle"><br />
                <br />
                -------------------------------------- <br />
                TANDATANGAN </td>
              <td align="center" valign="middle"><br />
                <br />
                --------------------<br />
                TARIKH</td>
            </tr>
            <tr>
              <th align="left" valign="middle" scope="row"> PENGESAHAN GURU BESAR/ KETUA GURU</th>
              <td align="center" valign="middle">:</td>
              <td align="center" valign="middle"><br />
                <br />
                -------------------------------------- <br />
                TANDATANGAN &amp; COP</td>
              <td align="center" valign="middle"><br />
                <br />
                --------------------<br />
                TARIKH</td>
            </tr>
          </table>
        </th>
      </tr>
    </table></td>
    <td width="64%"><table width="450" border="1" align="left" cellpadding="10" cellspacing="0" >
      <tr>
        <th valign="top" scope="row"><table width="100%" border="0" cellpadding="0">
          <tr>
            <td width="15%"><img src="images/JATASELANGOR.GIF" width="64" height="84" /></td>
            <td width="80%" align="center" valign="top"><h3 class="jawi"><span dir="rtl">جابتن اڬام اسلام سلاڠور </span></h3>
              <h5>UNIT PEPERIKSAAN DAN PENILAIAN <br />
                BAHAGIAN PENDIDIKAN ISLAM</h5></td>
            <td width="5%"><img src="images/JAIS.GIF" alt="" width="83" height="78" /></td>
          </tr>
        </table>
          <table width="100%" border="0" cellpadding="0">
            <tr>
              <td colspan="2" align="left"><h6>BAHAGIAN B ( Sila bawa borang ini semasa menduduki peperiksaan)<br />
              </h6></td>
            </tr>
            <tr>
              <td width="74%" height="83" align="center"><h6>BORANG PERAKUAN CALON PEPERIKSAAN<br />
                PENILAIAN SEKOLAH RENDAH AGAMA (PSRA) <br />
                TAHUN
                <?php  echo $row['eYear']; ?>
                <br />
              </h6></td>
              <td width="26%" align="center"><table width="98" height="83" border="1" cellpadding="10" cellspacing="0">
                <tr>
                  <td width="74" height="81" align="center" valign="middle"><h5> Lekatkan <br />
                    gambar<br />
                    calon <br />
                    disini<br />
                  </h5></td>
                </tr>
              </table></td>
            </tr>
          </table>
          <table width="100%" border="0" align="center" cellpadding="7" cellspacing="0" class="table_slip">
            <tr>
              <th width="201" align="left" valign="middle" scope="row"><strong> NAMA                       </strong></th>
              <td width="8" align="center" valign="middle"><strong>: </strong></td>
              <td colspan="2" align="left" valign="middle"><strong><?php echo $row['name']; ?></strong></td>
            </tr>
            <tr>
              <th align="left" valign="middle" scope="row"><strong> NO  ANGKA GILIRAN </strong></th>
              <td align="center" valign="middle"><strong><span dir="rtl"> </span><span dir="rtl"> </span><span dir="rtl"><span dir="rtl"> </span><span dir="rtl"> </span></span><span dir="ltr"> </span><span dir="ltr"> </span><span dir="ltr"> </span><span dir="ltr"> </span>:</strong></td>
              <td colspan="2" align="left" valign="middle"><strong><?php echo $row['eNo']; ?></strong></td>
            </tr>
            <tr>
              <th align="left" valign="middle" scope="row"><strong>NO KAD PENGENALAN</strong></th>
              <td align="center" valign="middle"><strong>:  </strong></td>
              <td colspan="2" align="left" valign="middle"><strong><?php echo $row['birthCert']; ?></strong></td>
            </tr>
            <tr>
              <th align="left" valign="middle" scope="row">JANTINA</th>
              <td align="center" valign="middle">:</td>
              <td colspan="2" align="left" valign="middle"><strong><?php echo jantina($row['gender']); ?></strong></td>
            </tr>
            <tr>
              <th align="left" valign="middle" scope="row">TARIKH LAHIR</th>
              <td align="center" valign="middle">:</td>
              <td colspan="2" align="left" valign="middle"><strong><?php echo dates($row['birthdate']); ?></strong></td>
            </tr>
            <tr>
              <th align="left" valign="middle" scope="row">WARGANEGARA</th>
              <td align="center" valign="middle">:</td>
              <td colspan="2" align="left" valign="middle"><strong><?php echo warganegara($row['nationality']); ?></strong></td>
            </tr>
            <tr>
              <th colspan="4" align="left" valign="middle" scope="row"><br />
                <br />
                <br /></th>
            </tr>
            <tr>
              <th align="left" valign="middle" scope="row"> PENGAKUAN CALON</th>
              <td align="center" valign="middle">:</td>
              <td width="238" align="center" valign="middle"><br />
                <br />
                -------------------------------------- <br />
                TANDATANGAN CALON</td>
              <td width="104" align="center" valign="middle"><br />
                <br />
                --------------------<br />
                TARIKH</td>
            </tr>
            <tr>
              <th align="left" valign="bottom" scope="row"> PENGESAHAN IBU/ BAPA/ PENJAGA<br />
                <em>Saya mengaku bahawa maklumat di atas adalah benar</em> <br /></th>
              <td align="center" valign="middle">:</td>
              <td align="center" valign="middle"><br />
                <br />
                -------------------------------------- <br />
                TANDATANGAN </td>
              <td align="center" valign="middle"><br />
                <br />
                --------------------<br />
                TARIKH</td>
            </tr>
            <tr>
              <th align="left" valign="middle" scope="row"> PENGESAHAN GURU BESAR/ KETUA GURU</th>
              <td align="center" valign="middle">:</td>
              <td align="center" valign="middle"><br />
                <br />
                -------------------------------------- <br />
                TANDATANGAN &amp; COP</td>
              <td align="center" valign="middle"><br />
                <br />
                --------------------<br />
                TARIKH</td>
            </tr>
          </table>
        </th>
      </tr>
    </table></td>
  </tr>
</table>
<br/><p class="pagebreak"></p>
<?php }while($row=mysql_fetch_array($query_at)); ?>
</body>
</html>
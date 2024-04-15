<?php 
$error = "";
function domail($to, $subject, $message, $headers)
{
	if (isset($to) && $to != "")
	{
		mail($to, $subject, $message, $headers);
		$done = 1;
	}
	return $done;
}
if (isset($_POST['submit']) && $_POST['submit'] != "")
{
	$to = "principal@gpcmandsaur.com";
	$subject = "Alumni Registration";
	$message = " <table width='400' align='center' cellpadding='0' cellspacing='0'>
	<tr>
	<td width='172' height='30'>Name of Alumnus</ td>
	<td width='226' height='30'>".$_POST[name]."</ td>
	</ tr>
	<tr>
	<td width='172' height='30'>Branch of Engineering</ td>
	<td width='226' height='30'>".$_POST[branch]."</ td>
	</ tr>
	<tr>
	<td width='172' height='30'>Passed Year</ td>
	<td width='226' height='30'>".$_POST[year]."</ td>
	</ tr>
	<tr>
	<td width='172' height='30'>Roll No.</ td>
	<td width='226' height='30'>".$_POST[roll]."</ td>
	</ tr>
	<tr>
	<td width='172' height='30'>Presently working</ td>
	<td width='226' height='30'>".$_POST[work]."</ td>
	</ tr>
	
	<tr>
	<td height='30'>Phone</td>
	<td height='30'>".$_POST[phone]."</ td>
	</ tr>
	<tr>
	<td height='30'>Mobile</ td>
	<td height='30'>".$_POST[mobile]."</ td>
	</ tr>
		<tr>
	<td height='30'>E-mail</ td>
	<td height='0'>".$_POST[email]."</ td>
	</ tr>
	<tr>
	<td height='30'>Professional Achievements till date</ td>
	<td height='0'>".$_POST[achiv]."</ td>
	</ tr>
	<tr>
	<td height='30'>rememberable experience</ td>
	<td height='30'>".$_POST[exp]."</ td>
	</ tr>
	
	<tr>
	<td height='30' colspan='2'> Mode of Alumni Fee of Rs.1000/- in favour of Govt Poly. College, Mandsaur-Alumni payable at Mandsaur.</ td>
	
	</ tr>
	
	<tr>
	<td height='30' colspan='2'> in lump Sum for the life membership. </ td>
	
	</ tr>
	
	
	
	<tr>
	<td height='30'> Cheque/D.D/Mo.No</ td>
	<td height='30'>".$_POST[dd]."</ td>
	</ tr>
	
	<tr>
	<td height='30'>Residence Address</ td>
	<td height='30'>".$_POST[add]."</ td>
	</ tr>
	
	<tr>
	<td height='30'>&nbsp;</ td>
	<td height='30'>&nbsp;</ td></ tr></ table>";
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	/* additional headers */
	$headers .= "From: Alumni Registration <".$_POST['email'].">\r\n";
	$fire = domail($to, $subject, $message, $headers);
	/*echo "<li>$to";
	echo "<li>$subject";
	echo "<li>$message";
	echo "<li>$header";*/	
	if (isset($fire) && $fire == 1)
	{
		header('Location: thanks.html');
	}
	else
	{
		$error = "Sorry! Mail could not send...!";
	}
}
?>



<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome To Goverment Polytechnic College Mandsaur</title>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
<link href="css/Mandsaur.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="959" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><table width="959" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td  ><table width="949" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td valign="top"><?php include("includes/header.php"); ?></td>
            </tr>
            <tr>
              <td><table width="949" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="200" valign="top"  class="bg_left"><table width="209" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td valign="top"><?php include("includes/left.php"); ?></td>
                        </tr>
                    </table></td>
                    <td width="733" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        
                        <tr>
                          <td valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                              
                              <tr>
                                <td height="30" class="pagehead">Online Alumni Registration Form</td>
                              </tr>
                              <tr>
                                <td valign="top" class="content1"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><table border="0" align="center" cellpadding="2" cellspacing="2">
                                      <tr>
                                        <td height="20" align="center" class="sublinks"><a href="alumni.php">Message for Alumnus</a></td>
                                        <td align="center" class="sublinks"><a href="alumni_photo.php">Alumni Photo's</a></td>
                                        <td align="center" class="sublinks"><a href="alumni_form.php">Alumni Member Form</a></td>
                                        <td align="center" class="sublinks"><a href="alumni_studentlist.php">Alumni Member List</a></td>
                                      </tr>
                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                  
                                  <tr>
                                    <td align="center"><a href="images/form_alumnimembership.doc"><img src="images/img_aluform.jpg" width="395" height="74" border="0" /></a></td>
                                  </tr>
                                  <tr>
                                    <td align="center">
                                    
                                    
                                    <table width="100%" align="center" cellpadding="0" cellspacing="0" class="text3">
  <tr>
    <td height="40" align="center" valign="middle" class="txt_bold">Online Alumni Registration Form</td>
  </tr>
  <tr>
    <td align="center" valign="top"><table width="516" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="left" background="images/box2.jpg"><form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" name="form" id="form" onSubmit="MM_validateForm('name','','R','fax','','R','mail','','RisEmail');return document.MM_returnValue">
          <table width="600" align="center" cellpadding="0" cellspacing="0" class="form_txt">
            <?php if (isset($error) && $error != "") {?>
            <tr>
              <td height="30" colspan="2"><?=$error?></td>
            </tr>
            <?php }?>
            <tr>
              <td height="30">&nbsp;</td>
              <td height="30">&nbsp;</td>
            </tr>
            <tr>
              <td width="226" height="30"><strong>Name of Alumnus (Ex. Student)</strong></td>
              <td width="226" height="30"><input name="name" type="text" class="txt_box" id="name" title="Name" size="35" /></td>
              </tr>
            <tr>
              <td height="30"><strong>Branch of Engineering</strong></td>
              <td height="30"><input name="branch" type="text" class="txt_box" id="branch" title="Name" size="35" /></td>
            </tr>
            <tr>
              <td height="30"><strong>Batch-Passed out in the year</strong></td>
              <td height="30"><input name="year" type="text" class="txt_box" id="year" title="Name" size="35" /></td>
            </tr>
            <tr>
              <td height="30"><strong>Roll No</strong></td>
              <td height="30"><input name="roll" type="text" class="txt_box" id="roll" title="Name" size="35" /></td>
            </tr>
            <tr>
              <td height="30"><strong>Presently working with Organization<br>
(Complete Address)</strong></td>
              <td height="30"><input name="work" type="text" class="txt_box" id="work" title="Name" size="35" /></td>
            </tr>
            <tr>
              <td height="30"><strong>Phone</strong></td>
              <td height="30"><input name="phone" type="text" class="txt_box" id="phone" size="35" /></td>
            </tr>
            <tr>
              <td height="30"><strong>Mobile</strong></td>
              <td height="30"><input name="mobile" type="text" class="txt_box" id="mobile" title="Fax" size="35" /></td>
            </tr>
            <tr>
              <td height="30"><strong>E-mail</strong></td>
              <td height="30"><input name="email" type="text" class="txt_box" id="mail" title="Email Address" size="35" /></td>
            </tr>
            <tr>
              <td height="30"><strong>Professional Achievements till date</strong></td>
              <td height="30"><input name="achiv" type="text" class="txt_box" id="mail2" title="Email Address" size="35" /></td>
            </tr>
            <tr>
              <td height="30" colspan="2" valign="middle"><strong>Any rememberable experience during days at: - Govt. Polytechnic College, Mandsaur</strong></td>
              </tr>
            <tr>
              <td height="33" colspan="2" valign="top"><textarea name="exp" cols="65" rows="5" class="txt_box" id="exp"></textarea></td>
            </tr>
           
            <tr>
              <td height="30" valign="middle"><strong>Residence Address</strong></td>
              <td height="30">&nbsp;</td>
              </tr>
            <tr>
              <td height="30" colspan="2"><textarea name="add" cols="65" rows="5" class="txt_box" id="add"></textarea></td>
              </tr>
            <tr>
              <td height="30">&nbsp;</td>
              <td height="30"><input name="submit" type="submit" class="txt_box" value="submit" /></td>
              </tr>
            </table>
          </form></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
</table>
                                    
                                    </td>
                                  </tr>
                                  
                                  
                                </table></td>
                              </tr>
                              
                              <tr>
                                <td class="content1">&nbsp;</td>
                              </tr>
                              
                              
                              <tr>
                                <td></td>
                              </tr>
                              
                          </table></td>
                        </tr>
                    </table></td>
                  </tr>
              </table></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <?php include("includes/footer.php"); ?>
  </tr>
</table>
</body>
</html>

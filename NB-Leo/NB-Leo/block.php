<?
// HERE IS WHERE FRAMES AND BLOCKS ARE DEFINED
//
// By Nikkbu
//

//BEGIN FRAME
function begin_frame($caption = "-", $align = "justify"){
if ($CURUSER) {
    $ss_a = @mysql_fetch_array(@mysql_query("select uri from stylesheets where id=" . $CURUSER["stylesheet"]));
    if ($ss_a) $ss_uri = $ss_a["uri"];
}
if (!$ss_uri) {
    ($r = mysql_query("SELECT uri FROM stylesheets WHERE id=1")) or die(mysql_error());
    ($a = mysql_fetch_array($r)) or die(mysql_error());
    $ss_uri = $a["uri"];
}
?>
<br>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="31" height="27"><img src="themes/NB-Leo/images/ftl.png" width="31" height="27" /></td>
<td height="27" align="center" background="themes/NB-Leo/images/ftm.png"><font color="#FFFFFF">&nbsp;&nbsp;<b><? print("$caption");?></b></font></td>
<td width="16" height="27"><img src="themes/NB-Leo/images/ftr.png" width="16" height="27" /></td>
</tr>
</table></td>
</tr>
</table><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="6" background="themes/NB-Leo/images/fml.jpg"><img src="themes/NB-Leo/images/blank.gif" width="6" height="1" /></td>
<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td class="cont" width="100%" align="<? print("$align");?>" background="themes/NB-Leo/images/fmm.jpg">
<?
}
//ATTACH FRAME
function attach_frame($padding = 0) {
    print("\n");
}

//END FRAME
function end_frame(){
?>
</td>
</tr>
</table>
</td>
<td width="6" background="themes/NB-Leo/images/fmr.jpg"><img src="themes/NB-Leo/images/blank.gif" width="6" height="1" /></td>
</tr>
</table>
</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="6" height="6"><img src="themes/NB-Leo/images/fbl.jpg" width="6" height="6" /></td>
<td background="themes/NB-Leo/images/fbm.jpg"><img src="themes/NB-Leo/images/blank.gif" width="1" height="6" /></td>
<td width="6" height="6"><img src="themes/NB-Leo/images/fbr.jpg" width="6" height="6" /></td>
</tr>
</table></td>
</tr>
</table>
</td>
</tr>
</table>
<?
}

//BEGIN BLOCK
function begin_block($caption = "-", $align = "justify"){
if ($CURUSER) {
    $ss_a = @mysql_fetch_array(@mysql_query("select uri from stylesheets where id=" . $CURUSER["stylesheet"]));
    if ($ss_a) $ss_uri = $ss_a["uri"];
}

if (!$ss_uri) {
    ($r = mysql_query("SELECT uri FROM stylesheets WHERE id=1")) or die(mysql_error());
    ($a = mysql_fetch_array($r)) or die(mysql_error());
    $ss_uri = $a["uri"];
}
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="31" height="27"><img src="themes/NB-Leo/images/ftl.png" width="31" height="27" /></td>
<td height="27" align="center" background="themes/NB-Leo/images/ftm.png"><font color="#FFFFFF">&nbsp;&nbsp;<b><? print("$caption");?></b></font></td>
<td width="16" height="27"><img src="themes/NB-Leo/images/ftr.png" width="16" height="27" /></td>
</tr>
</table></td>
</tr>
</table><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="6" background="themes/NB-Leo/images/fml.jpg"><img src="themes/NB-Leo/images/blank.gif" width="6" height="1" /></td>
<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td class="cont" width="100%" align="<? print("$align");?>" background="themes/NB-Leo/images/fmm.jpg">
<?
}

//END BLOCK
function end_block(){
?>
</td>
</tr>
</table>
</td>
<td width="6" background="themes/NB-Leo/images/fmr.jpg"><img src="themes/NB-Leo/images/blank.gif" width="6" height="1" /></td>
</tr>
</table>
</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="6" height="6"><img src="themes/NB-Leo/images/fbl.jpg" width="6" height="6" /></td>
<td background="themes/NB-Leo/images/fbm.jpg"><img src="themes/NB-Leo/images/blank.gif" width="1" height="6" /></td>
<td width="6" height="6"><img src="themes/NB-Leo/images/fbr.jpg" width="6" height="6" /></td>
</tr>
</table></td>
</tr>
</table>
</td>
</tr>
</table>
<br>
<?
}

?>
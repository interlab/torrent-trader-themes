<?
//
//
//	THIS FILE IS WHERE YOU DEFINE THE BLOCKS AND FRAMES LAYOUT
//
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
<br><table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td align="left" valign="top" width="15" height="33"><img src="themes/NB-clan/images/frame_top_left.png"></td>
<td align="center" valign="middle" background="themes/NB-clan/images/frame_top.png" width="100%" height="30">
<font class="option" color="#ffffff">&nbsp;&nbsp;<b><? print("$caption");?></b></font>
</td>
<td align="left" valign="top" width="15" height="33"><img src="themes/NB-clan/images/frame_top_right.png"></td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td width="15" align="left" valign="top" background="themes/NB-clan/images/frame_middle_left.png"><img src="themes/NB-clan/images/spacer.png"></td>
<td background="themes/NB-clan/images/frame_middle.png"><table border="0" cellpadding="3" cellspacing="0" width="100%">
  <tr valign="top">
    <td width="100%" align="<? print("$align");?>"><?
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
</table></td>
<td width="15" align="left" valign="top" background="themes/NB-clan/images/frame_middle_right.png"><img src="themes/NB-clan/images/spacer.png"></td>
</tr></table>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr valign="top">
<td width="15" height="31" align="left" valign="top"><img src="themes/NB-clan/images/frame_bottom_left.png"></td>
<td width="100%" height="31" background="themes/NB-clan/images/frame_bottom.png">&nbsp;</td>
<td width="15" height="31" align="left" valign="top"><img src="themes/NB-clan/images/frame_bottom_right.png"></td>
</table>
</td></tr></table>
</td></tr></table>

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
<br><table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td align="left" valign="top" width="15" height="33"><img src="themes/NB-clan/images/frame_top_left.png"></td>
<td align="center" valign="middle" background="themes/NB-clan/images/frame_top.png" width="100%" height="30">
<font class="option" color="#ffffff">&nbsp;&nbsp;<b><? print("$caption");?></b></font>
</td>
<td align="left" valign="top" width="15" height="33"><img src="themes/NB-clan/images/frame_top_right.png"></td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td width="15" align="left" valign="top" background="themes/NB-clan/images/frame_middle_left.png"><img src="themes/NB-clan/images/spacer.png"></td>
<td background="themes/NB-clan/images/frame_middle.png"><table border="0" cellpadding="3" cellspacing="0" width="100%">
  <tr valign="top">
    <td width="100%" align="<? print("$align");?>"><?
}

//END BLOCK
function end_block(){
?>
    </td>
  </tr>
</table></td>
<td width="15" align="left" valign="top" background="themes/NB-clan/images/frame_middle_right.png"><img src="themes/NB-clan/images/spacer.png"></td>
</tr></table>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr valign="top">
<td width="15" height="31" align="left" valign="top"><img src="themes/NB-clan/images/frame_bottom_left.png"></td>
<td width="100%" height="31" background="themes/NB-clan/images/frame_bottom.png">&nbsp;</td>
<td width="15" height="31" align="left" valign="top"><img src="themes/NB-clan/images/frame_bottom_right.png"></td>
</table>
</td></tr></table>
</td></tr></table>

<?
}

?>
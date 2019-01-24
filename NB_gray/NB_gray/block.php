<?
//
//
//	THIS FILE IS WHERE YOU DEFINE THE BLOCKS AND FRAMES LAYOUT
//
//


//BEGIN FRAME
function begin_frame($caption = "-", $align = "justify"){
    global $THEME, $site_config;
?>
<br><table border="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="100%">
<tr>
<td>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td align="left" valign="top" width="40" height="60"><img src="themes/NB_gray/images/frame_01.jpg"></td>
<td align="center" valign="middle" background="themes/NB_gray/images/frame_02.jpg" width="100%" height="60">
<font color="#000000" size="1" class="option"><strong>&nbsp;&nbsp;<? print("$caption");?></strong></font></td>
<td align="left" valign="top" width="40" height="60"><img src="themes/NB_gray/images/frame_04.jpg"></td>
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
<td width="12" align="left" valign="top" background="themes/NB_gray/images/frame_05.jpg"><img src="themes/NB_gray/images/frame_05.jpg"></td>
<td bgcolor="CDCDCD"><table border="0" cellpadding="3" cellspacing="0" width="100%">
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
<td width="12" align="left" valign="top" background="themes/NB_gray/images/frame_07.jpg"><img src="themes/NB_gray/images/frame_07.jpg"></td>
</tr></table>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr valign="top">
<td width="59" height="55" align="left" valign="top"><img src="themes/NB_gray/images/frame_09.jpg"></td>
<td width="100%" height="55" background="themes/NB_gray/images/frame_10.jpg">&nbsp;</td>
<td width="59" height="55" align="left" valign="top"><img src="themes/NB_gray/images/frame_12.jpg"></td>
</table>
</td></tr></table>
</td></tr></table>

<?
}

//BEGIN BLOCK
function begin_block($caption = "-", $align = "justify"){
if (isset($CURUSER)) {
    $ss_a = @mysql_fetch_array(@mysql_query("select uri from stylesheets where id=" . $CURUSER["stylesheet"]));
    if ($ss_a) $ss_uri = $ss_a["uri"];
}

if (!(isset($ss_uri))) {
    ($r = SQL_Query_exec("SELECT uri FROM stylesheets WHERE id=1"));
    ($a = mysql_fetch_array($r));
    $ss_uri = $a["uri"];
}

?>
<table border="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="100%">
<tr>
<td>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td align="left" valign="top" width="35" height="72"><img src="themes/NB_gray/images/block_01.jpg"></td>
<td align="center" valign="middle" background="themes/NB_gray/images/block_02.jpg" width="100%" height="72">
<font class="option" color="000">&nbsp;<strong>&nbsp;<? print("$caption");?></strong></font></td>
<td align="left" valign="top" width="35" height="72"><img src="themes/NB_gray/images/block_04.jpg"></td>
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
<td width="19" align="left" valign="top" background="themes/NB_gray/images/block_05.jpg"><img src="themes/NB_gray/images/block_05.jpg"></td>
<td bgcolor="CDCDCD"><table border="0" cellpadding="3" cellspacing="0" width="100%">
  <tr valign="top">
    <td width="100%" align="<? print("$align");?>"><?
}

//END BLOCK
function end_block(){
?>
    </td>
  </tr>
</table></td>
<td width="19" align="left" valign="top" background="themes/NB_gray/images/block_08.jpg"><img src="themes/NB_gray/images/block_08.jpg"></td>
</tr></table>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr valign="top">
<td width="30" height="50" align="left" valign="top"><img src="themes/NB_gray/images/block_10.jpg"></td>
<td width="100%" height="50" background="themes/NB_gray/images/block_11.jpg">&nbsp;</td>
<td width="30" height="50" align="left" valign="top"><img src="themes/NB_gray/images/block_13.jpg"></td>
</table>
</td></tr></table>
</td></tr></table><br>

<?
}

function begin_table(){
    print("<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"ttable_headouter\" width=\"100%\"><tr><td><table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"ttable_headinner\" width=\"100%\">\n");
}

function end_table()  {
    print("</table></td></tr></table>\n");
}

function tr($x,$y,$noesc=0) {
    if ($noesc)
        $a = $y;
    else {
        $a = htmlspecialchars($y);
        $a = str_replace("\n", "<br />\n", $a);
    }
    print("<tr><td class=\"heading\" valign=\"top\" align=\"right\">$x</td><td valign=\"top\" align=\"left\">$a</td></tr>\n");
}


?>
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
<table class="NB-frame" width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td valign="top" align="center" width="100%">
<table class="NB-fhead" width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="100%" height="28" class="NB-ftm"><? print("$caption");?></td>
</tr>
</table>
<table class="NB-fbody" width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td valign="top" class="NB-fmm" align="<? print("$align");?>">
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
</table></td>
</tr>
</table>
<BR>
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
<table class="NB-block" width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td valign="top" width="100%">
<table class="NB-bhead" width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="100%" height="28" class="NB-btm"><? print("$caption");?></td>
</tr>
</table>
<table class="NB-bbody" width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td valign="top" class="NB-bmm" align="<? print("$align");?>">
<?
}

//END BLOCK
function end_block(){
?>
</td>
</tr>
</table></td>
</tr>
</table>
<BR>
<?
}

?>
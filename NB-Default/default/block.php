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

print("<br /><table cellpadding=0 cellspacing=0 border=0 width=100% align=center>\n"
		."\t<tr>\n"
		."\t\t<TD class=frame_top_left><img src=themes/" . $ss_uri . "/images/frame_top_left.gif></TD>\n"
		."\t\t<TD class=frame_top align=center  valign=middle><b>$caption</b></TD>\n"
		."\t\t<TD class=frame_top_right><img src=themes/" . $ss_uri . "/images/frame_top_right.gif></TD>\n"
		."\t</tr>\n"
		."\t<tr>\n"
		."\t\t<TD class=frame_middle_left><span class=space></span></TD>\n"
		."\t\t<TD class=frame_middle width=100% align=$align valign=top><br>");
}

//ATTACH FRAME
function attach_frame($padding = 0) {
    print("\n");
}

//END FRAME
function end_frame() {
print("\t\t</td>\n"
		."\t\t<td class=frame_middle_right><span class=space></span></TD></td>\n"
		."\t</tr>\n"
		."\t<tr>\n"
		."\t\t<td class=frame_bottom_left><span class=space></span></TD></td>\n"
		."\t\t<td class=frame_bottom></TD></td>\n"
		."\t\t<td class=frame_bottom_right><span class=space></span></TD></td>\n"
		."\t</tr>\n"
		."</table>");
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

print("<br /><table cellpadding=0 cellspacing=0 border=0 width=100% align=center>\n"
		."\t<tr>\n"
		."\t\t<TD><img src=themes/" . $ss_uri . "/images/block_top_left.gif></TD>\n"
		."\t\t<TD class=block_top align=center valign=top><b>$caption</b></TD>
		\n"
		."\t\t<TD><img src=themes/" . $ss_uri . "/images/block_top_right.gif></TD>\n"
		."\t</tr>\n"
		."\t<tr>\n"
		."\t\t<TD class=block_left width=15><span class=space></span></TD>\n"
		."\t\t<TD class=block_bg width=100% align=$align valign=top>");
}

//END BLOCK
function end_block(){
print("\t\t</td>\n"
		."\t\t<td class=block_right width=15><span class=space></span></TD></td>\n"
		."\t</tr>\n"
		."\t<tr>\n"
		."\t\t<td class=block_bottoml width=15 height=23><span class=space></span></TD></td>\n"
		."\t\t<td class=block_bottom></TD></td>\n"
		."\t\t<td class=block_bottomr width=15 height=23><span class=space></span></TD></td>\n"
		."\t</tr>\n"
		."</table>");
}

?>
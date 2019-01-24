<?php
//BEGIN FRAME
function begin_frame($caption = "-", $align = "justify"){
    global $THEME;
    global $site_config;
    print("<table class='NB-frame' width='100%' border='0' cellspacing='0' cellpadding='0'>
	<tr>
	<td valign='top' align='center' width='100%'>
	<table class='NB-fhead' width='100%' border='0' cellspacing='0' cellpadding='0'>
	<tr>
	<td width='12' height='30' class='NB-ftl'><img src='".$site_config['SITEURL']."/themes/NB-40-v2/images/blank.gif' style='display: block;' height='30' width='12'></td>
	<td width='100%' height='30' class='NB-ftm'>$caption</td>
	<td width='12' height='30' class='NB-ftr'><img src='".$site_config['SITEURL']."/themes/NB-40-v2/images/blank.gif' style='display: block;' height='30' width='12'></td>
	</tr>
	</table>
	<table class='NB-fbody' width='100%' border='0' cellspacing='0' cellpadding='0'>
	<tr>
	<td width='8' class='NB-ml'><img src='".$site_config['SITEURL']."/themes/NB-40-v2/images/blank.gif' style='display: block;' height='2' width='8'></td>
	<td valign='top' class='NB-mm'>");
}


//END FRAME
function end_frame() {
    global $THEME;
    global $site_config;
    print("</td>
	<td width='8' class='NB-mr'><img src='".$site_config['SITEURL']."/themes/NB-40-v2/images/blank.gif' style='display: block;' height='2' width='8'></td>
	</tr>
	</table>
	<table class='NB-ffoot' width='100%' border='0' cellspacing='0' cellpadding='0'>
	<tr>
	<td width='12' height='12' class='NB-bl'><img src='".$site_config['SITEURL']."/themes/NB-40-v2/images/blank.gif' style='display: block;' height='12' width='12'></td>
	<td width='100%' height='12' class='NB-bm'><img src='".$site_config['SITEURL']."/themes/NB-40-v2/images/blank.gif' style='display: block;' height='12' width='100%'></td>
	<td width='12' height='12' class='NB-br'><img src='".$site_config['SITEURL']."/themes/NB-40-v2/images/blank.gif' style='display: block;' height='12' width='12'></td>
	</tr>
	</table></td>
	</tr>
	</table>
	<BR>");
}

//BEGIN BLOCK
function begin_block($caption = "-", $align = "justify"){
    global $THEME;
    global $site_config;
    print("<table class='NB-block' width='100%' border='0' cellspacing='0' cellpadding='0'>
	<tr>
	<td valign='top' width='100%'>
	<table class='NB-bhead' width='100%' border='0' cellspacing='0' cellpadding='0'>
	<tr>
	<td width='12' height='30' class='NB-btl'><img src='".$site_config['SITEURL']."/themes/NB-40-v2/images/blank.gif' style='display: block;' height='30' width='12'></td>
	<td width='100%' height='30' class='NB-btm'>$caption</td>
	<td width='12' height='30' class='NB-btr'><img src='".$site_config['SITEURL']."/themes/NB-40-v2/images/blank.gif' style='display: block;' height='30' width='12'></td>
	</tr>
	</table>
	<table class='NB-bbody' width='100%' border='0' cellspacing='0' cellpadding='0'>
	<tr>
	<td width='8' class='NB-ml'><img src='".$site_config['SITEURL']."/themes/NB-40-v2/images/blank.gif' style='display: block;' height='2' width='8'></td>
	<td valign='top' class='NB-mm'>");
}

//END BLOCK
function end_block(){
    global $THEME;
    global $site_config;
    print("</td>
	<td width='8' class='NB-mr'><img src='".$site_config['SITEURL']."/themes/NB-40-v2/images/blank.gif' style='display: block;' height='2' width='8'></td>
	</tr>
	</table>
	<table class='NB-bfoot' width='100%' border='0' cellspacing='0' cellpadding='0'>
	<tr>
	<td width='12' height='12' class='NB-bl'><img src='".$site_config['SITEURL']."/themes/NB-40-v2/images/blank.gif' style='display: block;' height='12' width='12'></td>
	<td width='100%' height='12' class='NB-bm'><img src='".$site_config['SITEURL']."/themes/NB-40-v2/images/blank.gif' style='display: block;' height='12' width='100%'></td>
	<td width='12' height='12' class='NB-br'><img src='".$site_config['SITEURL']."/themes/NB-40-v2/images/blank.gif' style='display: block;' height='12' width='12'></td>
	</tr>
	</table></td>
	</tr>
	</table>
	<BR>");
}

function begin_table(){
    print("<div class='ttable_headouter'><table align=center cellpadding='0' cellspacing='0' class='ttable_headinner' width=100%>\n");
}

function end_table()  {
    print("</table></div>\n");
}

function tr($x,$y,$noesc=0) {
    if ($noesc)
        $a = $y;
    else {
        $a = htmlspecialchars($y);
        $a = str_replace("\n", "<br />\n", $a);
    }
    print("<tr><td class='heading' valign='top' align='right'>$x</td><td valign='top' align=left>$a</td></tr>\n");
}
?>
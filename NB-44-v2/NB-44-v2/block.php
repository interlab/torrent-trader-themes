
<?php
//BEGIN FRAME
function begin_frame($caption = "-", $align = "justify"){
    global $THEME;
    global $site_config;
    print("<table class='NB-frame' width='100%' border='0' cellspacing='0' cellpadding='0'>
	<tr>
	<td valign='top' align='center' width='100%' height='59'>
	<table class='NB-fhead' width='100%' border='0' cellspacing='0' cellpadding='0'>
	<tr>
	<td width='19' height='59' class='NB-ftl'><img src='".$site_config['SITEURL']."/themes/NB-44-v2/images/blank.gif' block;' height='59' width='19'></td>
	<td width='100%' height='59' align='left' class='NB-ftm'>
	<table border='0' align='left' cellpadding='0' cellspacing='0'>
	<tr>
	<td class='NB-caption' height='59'>$caption</td>
	<td class='NB-cap-r' align='center' width='48' height='59'><img src='".$site_config['SITEURL']."/themes/NB-44-v2/images/blank.gif' block;' height='59' width='48'></td>
	</tr>
	</table>
	</td>
	<td width='14' height='59' class='NB-ftr'><img src='".$site_config['SITEURL']."/themes/NB-44-v2/images/blank.gif' block;' height='59' width='14'></td>
	</tr>
	</table>
	<table class='NB-fbody' width='100%' border='0' cellspacing='0' cellpadding='0'>
	<tr>
	<td width='12' class='NB-fml'><img src='".$site_config['SITEURL']."/themes/NB-44-v2/images/blank.gif' block;' height='2' width='12'></td>
	<td valign='top' class='NB-fmm'>");
}


//END FRAME
function end_frame() {
    global $THEME;
    global $site_config;
    print("</td>
	<td width='12' class='NB-fmr'><img src='".$site_config['SITEURL']."/themes/NB-44-v2/images/blank.gif' block;' height='2' width='12'></td>
	</tr>
	</table>
	<table class='NB-ffoot' width='100%' border='0' cellspacing='0' cellpadding='0'>
	<tr>
	<td width='215' height='31' class='NB-fbl'><img src='".$site_config['SITEURL']."/themes/NB-44-v2/images/blank.gif' block;' height='31' width='215'></td>
	<td width='100%' height='31' class='NB-fbm'><img src='".$site_config['SITEURL']."/themes/NB-44-v2/images/blank.gif' block;' height='31' width='100%'></td>
	<td width='14' height='31' class='NB-fbr'><img src='".$site_config['SITEURL']."/themes/NB-44-v2/images/blank.gif' block;' height='31' width='14'></td>
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
	<td valign='top' width='100%' height='30'>
	<table class='NB-bhead' width='100%' border='0' cellspacing='0' cellpadding='0'>
	<tr>
	<td width='10' height='30' class='NB-btl'><img src='".$site_config['SITEURL']."/themes/NB-44-v2/images/blank.gif' block;' height='30' width='10'></td>
	<td width='100%' height='30' class='NB-btm'>$caption</td>
	<td width='10' height='30' class='NB-btr'><img src='".$site_config['SITEURL']."/themes/NB-44-v2/images/blank.gif' block;' height='30' width='10'></td>
	</tr>
	</table>
	<table class='NB-bbody' width='100%' border='0' cellspacing='0' cellpadding='0'>
	<tr>
	<td width='9' class='NB-bml'><img src='".$site_config['SITEURL']."/themes/NB-44-v2/images/blank.gif' block;' height='2' width='9'></td>
	<td valign='top' align='left' class='NB-bmm'>");
}

//END BLOCK
function end_block(){
    global $THEME;
    global $site_config;
    print("</td>
	<td width='9' class='NB-bmr'><img src='".$site_config['SITEURL']."/themes/NB-44-v2/images/blank.gif' block;' height='2' width='9'></td>
	</tr>
	</table>
	<table class='NB-bfoot' width='100%' border='0' cellspacing='0' cellpadding='0'>
	<tr>
	<td width='9' height='9' class='NB-bbl'><img src='".$site_config['SITEURL']."/themes/NB-44-v2/images/blank.gif' block;' height='9' width='9'></td>
	<td width='100%' height='10' class='NB-bbm'><img src='".$site_config['SITEURL']."/themes/NB-44-v2/images/blank.gif' block;' height='9' width='100%'></td>
	<td width='9' height='9' class='NB-bbr'><img src='".$site_config['SITEURL']."/themes/NB-44-v2/images/blank.gif' block;' height='9' width='9'></td>
	</tr>
	</table></td>
	</tr>
	</table>
	<BR>");
}

function begin_table(){
    print("<table align=center cellpadding='0' cellspacing='0' class='ttable_headouter' width=100%><tr><td><table align=center cellpadding='0' cellspacing='0' class='ttable_headinner' width=100%>\n");
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
    print("<tr><td class='heading' valign='top' align='right'>$x</td><td valign='top' align=left>$a</td></tr>\n");
}
?>

<?
//BEGIN FRAME
function begin_frame($caption = "-", $align = "justify"){
    global $THEME;
    global $site_config;
    print("<table class='NB-frame' width='100%' border='0' cellspacing='0' cellpadding='2'>
	<tr>
	<td valign='top' align='center' width='100%'>
	<table class='NB-fhead' width='100%' border='0' cellspacing='0' cellpadding='0'>
	<tr>
	<td width='10' height='39' class='NB-ftl'><img src='".$site_config['SITEURL']."/themes/NB-43-v2/images/blank.gif' style='display: block;' height='39' width='10'></td>
	<td width='100%' height='39' class='NB-ftm'>$caption</td>
	<td width='10' height='39' class='NB-ftr'><img src='".$site_config['SITEURL']."/themes/NB-43-v2/images/blank.gif' style='display: block;' height='39' width='10'></td>
	</tr>
	</table>
	<table class='NB-fbody' width='100%' border='0' cellspacing='0' cellpadding='0'>
	<tr>
	<td valign='top' width='100%' class='NB-fmm'>");
}


//END FRAME
function end_frame() {
    global $THEME;
    global $site_config;
    print("</td>
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
    print("<table class='NB-frame' width='100%' border='0' cellspacing='0' cellpadding='2'>
	<tr>
	<td valign='top' align='center' width='100%'>
	<table class='NB-fhead' width='100%' border='0' cellspacing='0' cellpadding='0'>
	<tr>
	<td width='10' height='39' class='NB-ftl'><img src='".$site_config['SITEURL']."/themes/NB-43-v2/images/blank.gif' style='display: block;' height='39' width='10'></td>
	<td width='100%' height='39' class='NB-btm'>$caption</td>
	<td width='10' height='39' class='NB-ftr'><img src='".$site_config['SITEURL']."/themes/NB-43-v2/images/blank.gif' style='display: block;' height='39' width='10'></td>
	</tr>
	</table>
	<table class='NB-fbody' width='100%' border='0' cellspacing='0' cellpadding='0'>
	<tr>
	<td valign='top' width='100%' class='NB-bmm'>");
}

//END BLOCK
function end_block(){
    global $THEME;
    global $site_config;
    print("</td>
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
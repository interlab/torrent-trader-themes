
<?
//BEGIN FRAME
function begin_frame($caption = "-", $align = "justify"){
    global $THEME;
    global $site_config;
    print("<div class='my_block'>
      <div class='b_caption'>$caption</div>
      <div class='b_content'>");
}


//END FRAME
function end_frame() {
    global $THEME;
    global $site_config;
    print("</div>
    </div>");
}

//BEGIN BLOCK
function begin_block($caption = "-", $align = "justify"){
    global $THEME;
    global $site_config;
    print("<div class='my_block'>
      <div class='b_caption'>$caption</div>
      <div class='b_content'>");
}

//END BLOCK
function end_block(){
    global $THEME;
    global $site_config;
    print("</div>
    </div>");
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
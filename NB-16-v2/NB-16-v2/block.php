<?
//BEGIN FRAME
function begin_frame($caption = "-", $align = "justify"){
    global $THEME;
    global $site_config;
    print("<div class='myFrame'>
    <div class='frameT'>
      <div class='frameC'>
        <div class='frameCap'>$caption</div>
      </div>
    </div>
    <div class='frameCon'>");
}


//END FRAME
function end_frame() {
    global $THEME;
    global $site_config;
    print("</div>
</div><BR>");
}

//BEGIN BLOCK
function begin_block($caption = "-", $align = "justify"){
    global $THEME;
    global $site_config;
    print("<div class='myFrame'>
    <div class='frameT'>
      <div class='frameC'>
        <div class='frameCap'>$caption</div>
      </div>
    </div>
    <div class='frameCon'>");
}

//END BLOCK
function end_block(){
    global $THEME;
    global $site_config;
    print("</div>
</div><BR>");
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
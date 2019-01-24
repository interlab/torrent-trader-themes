<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<script language="JavaScript">
<!--
function Smilies(Smilie)
{
document.Form.body.value+=Smilie+" ";
document.Form.body.focus();
}
//-->
</script>
<title><?= $title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" type="text/css" href="themes/NB-Leo/theme.css" />

<script>

var myimages=new Array()
function preloadimages(){
for (i=0;i<preloadimages.arguments.length;i++){
myimages[i]=new Image()
myimages[i].src=preloadimages.arguments[i]
}
}

preloadimages("images/space.gif")

</script>

<script>

var g_nExpando=0;
// To make the cross clickable in every browser
function putItemInState(n,bState)
{
   var oItem,oGif;
      oItem=document.getElementById("descr"+n);
   oGif=document.getElementById("expandoGif"+n);
   
   if (bState=='toggle')
     bState=(oItem.style.display=='block');

   if(bState)
   {
       bState=(oItem.style.display='none');
       bState=(oGif.src='images/cross.gif');
   }
   else
   {
       bState=(oItem.style.display='block');
       bState=(oGif.src='images/noncross.gif');
   }
}



function expand(nItem)
{
    putItemInState(nItem,'toggle');
}


function expandAll()
{
    if (!g_nExpando)
    {
        document.all.chkFlag.checked=false;
        return;
    }
    var bState=!document.all.chkFlag.checked;
    for(var i=0; i<g_nExpando; i++)
        putItemInState(i,bState);
}

</script>

<script>

var tns6=document.getElementById&&!document.all
var ie=document.all

function show_text(thetext, whichdiv){
if (ie) {eval("document.all."+whichdiv).innerHTML=thetext;}
else if (tns6) {document.getElementById(whichdiv).innerHTML=thetext;}
}

function resetit(whichdiv){
if (ie) eval("document.all."+whichdiv).innerHTML=''
else if (tns6) document.getElementById(whichdiv).innerHTML=''
}

</script>

</head>

<BODY LEFTMARGIN="0" TOPMARGIN="0" MARGINWIDTH="0" MARGINHEIGHT="0" align="center">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="379" height="89" background="themes/NB-Leo/images/leo_01.jpg"><img src="themes/NB-Leo/images/leo_logo.jpg" width="379" height="89" /></td>
            <td align="right" valign="bottom" background="themes/NB-Leo/images/leo_01.jpg" class="login">
	    <? if ($CURUSER) {
				print $CURUSER[username]; 
				echo "(<a href=account-logout.php><font color=#ffffff><b>Logout</b></font></a>)";

		// ger user ratio
		if ($CURUSER["downloaded"] > 0){
				$userratio = number_format($CURUSER["uploaded"] / $CURUSER["downloaded"], 2);
		}else{
				if ($CURUSER["uploaded"] > 0)
					$userratio = "Inf.";
				else
					$userratio = "NA";
		}
		//end

		// get unread messages
		$res12 = mysql_query("SELECT COUNT(*) FROM messages WHERE receiver=" . $CURUSER["id"] . " and unread='yes'") or print(mysql_error());
		$arr12 = mysql_fetch_row($res12);
		$unreadmail = $arr12[0];
		//end
			?>
&nbsp;<b>&#8595;</b>&nbsp;<font color=red><? print mksize($CURUSER[downloaded]);?></font> - <b>&#8593;&nbsp;</b><font color=#03db03><? print mksize($CURUSER[uploaded]);?></font> - <? print("" . RATIO . "\n"); ?>: <? print $userratio; ?> &nbsp;
<?if ($unread) {	print("<a href=\"account.php\"><b><font color=#FF0000>New PM" . ($messages != 1 ? "s" : "") . " ($unread)</b></a></font>");}?>
<?
			}else{
				echo "<a href=account-login.php><font color=#FF0000>". LOGIN . "</font></a> <B>:</B> <a href=account-signup.php><font color=#FF0000>" . REGISTERNEW . "</font></a>";
			}
			?>
      </td>
          </tr>
        </table>
          <table width="100%" border="0" cellpadding="0" cellspacing="0" background="themes/NB-Leo/images/leo_02.jpg">
  <tr>
    <td width="1" height="35"><img src="themes/NB-Leo/images/blank.gif" width="1" height="35" /></td>
    <td align="center" valign="middle" class="subnav"><a href=index.php><? print("" . HOME . "\n"); ?></a><span class="subnav">|</span>
      <?if ($FORUMS) {?>
        <a href=forums.php><? print("" . FORUMS . "\n"); ?></a><span class="subnav">|</span>
        <?}?>
        <?if ($IRCCHAT) {?>
        <a href=irc.php><? print("" . CHAT . "\n"); ?></a><span class="subnav">|</span>
        <?}?>
        <a href=browse.php><? print("" . BROWSE_TORRENTS . "\n"); ?></a><span class="subnav">|</span><a href=torrents-search.php><? print("" . SEARCH . "\n"); ?></a><span class="subnav">|</span><a href=torrents-upload.php><? print("" . UPLOADT . "\n"); ?></a><span class="subnav">|</span><a href=faq.php><? print("" . FAQ . "\n"); ?></a></td>
  </tr>
</table>
</td>
      </tr>
    </table><table width="100%" border="0" cellspacing="0" cellpadding="0">
	<TBODY>
  <tr>
    <td><table class="mbody" width="100%" border="0" cellspacing="0" cellpadding="6">
	<TBODY>
      <tr>
	<TD vAlign="top" width="180">
	<br>
<?
if (!$CURUSER)

{

begin_block("" . Login . "");
?>
<table border=0 width=100% cellspacing=0 cellpadding=0>
	<tr>
		<form method=post action=account-login.php><td>
		<div align=center>
		<table border=0 cellpadding=5">
			<tr><td>
				<p align=center><font face=Verdana size=1><b><? print("" . USER . "\n"); ?>:</b></font></td><td align=left>
				<input type=text size=10 name=username style="font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-width: 1px; background-color: #C0C0C0" /></td></tr>
			<tr><td><font face=Verdana size=1><b><? print("" . PASS . "\n"); ?>:</b></font></td><td align=left>
				<input type=password size=10 name=password style="font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-width: 1px; background-color: #C0C0C0" /></td></tr>
			<tr><td>&nbsp;</td><td align=left>
				<input type=submit value=Verify style="font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-width: 1px"></td></tr>
		</table>
		</td></form>
	</tr>
	<tr>
<td align="center"><a href="account-delete.php"><?echo "" . DELETE_ACCOUNT . "";?></a><br><a href="account-recover.php"><?echo "" . RECOVER_ACCOUNT . "";?></a></td> </tr>
	</table>
<?
end_block();

} else {

$ss_r = mysql_query("SELECT * from stylesheets") or die;
$ss_sa = array();
while ($ss_a = mysql_fetch_array($ss_r))
{
  $ss_id = $ss_a["id"];
  $ss_name = $ss_a["name"];
  $ss_sa[$ss_name] = $ss_id;
}
ksort($ss_sa);
reset($ss_sa);
while (list($ss_name, $ss_id) = each($ss_sa))
{
  if ($ss_id == $CURUSER["stylesheet"]) $ss = " selected"; else $ss = "";
  $stylesheets .= "<option value=$ss_id$ss>$ss_name</option>\n";
}

$lang_r = mysql_query("SELECT * from languages") or die;
$lang_sa = array();
while ($lang_a = mysql_fetch_array($lang_r))
{
  $lang_id = $lang_a["id"];
  $lang_name = $lang_a["name"];
  $lang_sa[$lang_name] = $lang_id;
}
ksort($lang_sa);
reset($lang_sa);
while (list($lang_name, $lang_id) = each($lang_sa))
{
  if ($lang_id == $CURUSER["language"]) $lang = " selected"; else $lang = "";
  $languages .= "<option value=$lang_id$lang>$lang_name</option>\n";
}

begin_block("$CURUSER[username]");
?>
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><form method="post" action="take-theme.php"><td>
<table border=0 cellspacing=0 cellpadding="6" width=100%>
<tr><td align="center"><B><? print("" . THEME . ""); ?> </B>
	<select name=stylesheet style="font-family: Verdana; font-size: 8pt; color: #000000; border: 1px solid #808080; background-color: #C0C0C0" size="1"><?=$stylesheets?></select></td></tr>
<tr><td align="center"><B><? print("" . LANG . ""); ?> </B>
	<select name=language style="font-family: Verdana; font-size: 8pt; color: #000000; border: 1px solid #808080; background-color: #C0C0C0" size="1"><?=$languages?></select></td></tr>
<tr><td align="center">
	<input type="submit" value="<? print("" . APPLY . ""); ?>" style="font-family: Verdana; font-size: 8pt; color: #000000; border: 1px solid #808080; background-color: #C0C0C0"></td></tr>
</table></form></td></tr>
<tr>
<td align="center"><a href="account.php"><? print("" . ACCOUNT . "\n"); ?></a> <br> <? if (get_user_class() > UC_VIP) {
print("<a href=admin.php>" . STAFFCP . "</a>");}?></font></tr>

</table>
<?
end_block();

}

// invite block
if ($CURUSER)
{
	if ($INVITEONLY){
		$invites = $CURUSER["invites"];
		begin_block("" . INVITES . "");
		?>
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
		<tr><td align="center"><? print("" . YOUHAVE . "\n"); ?> <?=$invites?> <? print("" . INVITES . "\n"); ?><br></td></tr>
		<?if ($invites > 0 ){?>
		<tr><td align="center"><a href=invite.php><? print("" . SENDANINVITE . "\n"); ?></a><br></td></tr>
		<?}?>
		</table>
		<?
		end_block();
	}
}
//end invite block

begin_block("" . NAVIGATION . "");
?>

· <a href="index.php"><? print("" . HOME . "\n"); ?></a><br />
&nbsp;&nbsp;· <a href="torrents-search.php"><? print("" . SEARCH_TITLE . "\n"); ?></a><br />
&nbsp;&nbsp;· <a href="torrents-upload.php"><? print("" . UPLOADT . "\n"); ?></a><br />
&nbsp;&nbsp;· <a href="torrents-needseed.php"><? print("" . UNSEEDED . "\n"); ?></a><br />
&nbsp;&nbsp;· <a href="viewrequests.php"><? print("" . REQUESTED . "\n"); ?></a><br />
&nbsp;&nbsp;· <a href="today.php"><? print("" . TODAYS_TORRENTS . "\n"); ?></a><br /><br />
				  <CENTER><a href="rssinfo.php"><img src="images/rss2.gif" border=0 alt="XML RSS Feed"></a></CENTER>
				  <hr>
· <a href="faq.php"><? print("" . FAQ . "\n"); ?></a><br />
· <a href="extras-stats.php"><? print("" . TRACKER_STATISTICS . "\n"); ?></a><br />
<?if ($FORUMS) {?>· <a href="forums.php"><? print("" . FORUMS . "\n"); ?></a><br /><?}?>
<?if ($IRCCHAT) {?>· <a href="irc.php"><? print("" . CHAT . "\n"); ?></a><br /><?}?>
· <a href="formats.php"><? print("" . FILE_FORMATS . "\n"); ?></a><br />
· <a href="videoformats.php"><? print("" . MOVIE_FORMATS . "\n"); ?></a><br />
· <a href="staff.php"><? print("" . STAFF . "\n"); ?></a><br />
· <a href="rules.php"><? print("" . SITE_RULES . "\n"); ?></a><br />
· <a href="extras-users.php"><? print("" . MEMBERS . "\n"); ?></a><br /><hr>
· <a href="visitorsnow.php"><? print("" . ONLINE_USERS . "\n"); ?></a><br />
· <a href="visitorstoday.php"><? print("" . VISITORS_TODAY . "\n"); ?></a><br />

<?if(get_user_class() > UC_VIP) {?><hr>
· <a href="admin.php"><? print("" . STAFFCP . "\n"); ?></a><br /><?}?>
<br />

 <?
end_block();


if ($DONATEON)
{
begin_block("" . DONATIONS . "", center);
$res9 = mysql_query("SELECT * FROM site_settings ") or sqlerr(__FILE__, __LINE__);
$arr9 = mysql_fetch_assoc($res9);
$mothlydonated = $arr9['donations'];
$requireddonations = $arr9['requireddonations'];
echo "<br><b>" . TARGET . ": </b><font color=\"red\">$" . $requireddonations . "</font><br><b>" . DONATIONS . ": </b><font color=\"green\">$" . $mothlydonated . "</font></center><br>";
print "<div align=left><B><font color=#FF6600>&#187;</font></B> <a href=\"donate.php\">" . DONATE . "</a><br>";
end_block();
}
//Here we decide if the block is on or off
if ($NEWSON)
{
begin_block("". SITENEWS . "", center);
//-----------------------------News------------------------//
$query = 'SELECT max_display, scrolling, titles, subc, subs, comment, sspeed FROM news_options';
$nopt = mysql_query($query) or die(mysql_error());
while ($arow = mysql_fetch_array($nopt)){
if ($arow['scrolling'] == 'on'){
     //  begin_frame("SCROLLING NEWS");
       ?>
       <script language="JavaScript1.2">

//  Distributed by http://www.hypergurl.com

var scrollerwidth="150px"

var scrollerheight="180px"

var scrollerspeed=<?echo'' . $arow['sspeed'] . '';?>

var scrollercontent='<div align="center"><? $query = 'SELECT id, title, user, date, text FROM news ORDER BY id DESC LIMIT ' . $arow['max_display'] . ''; $resu = mysql_query($query) or die(mysql_error()); while ($row = mysql_fetch_array($resu)){ echo'<font face="Arial" size="' . $arow['titles'] . '"><a href="./show-archived.php?id=' . $row['id'] . '">' . $row['title'] . '</a><br></font><font face="Arial" color="' . $arow['subc'] . '" size="' . $arow['subs'] . '"><I>posted by ' . $row['user'] . ' On ' . $row['date'] . '</i><br><br>'; } ?></font></div>'

var pauseit=1

scrollerspeed=(document.all)? scrollerspeed : Math.max(1, scrollerspeed-1) //slow speed down by 1 for NS
var copyspeed=scrollerspeed
var iedom=document.all||document.getElementById
var actualheight=''
var cross_scroller, ns_scroller
var pausespeed=(pauseit==0)? copyspeed: 0

function populate(){
if (iedom){
cross_scroller=document.getElementById? document.getElementById("iescroller") : document.all.iescroller
cross_scroller.style.top=parseInt(scrollerheight)+8+"px"
cross_scroller.innerHTML=scrollercontent
actualheight=cross_scroller.offsetHeight
}
else if (document.layers){
ns_scroller=document.ns_scroller.document.ns_scroller2
ns_scroller.top=parseInt(scrollerheight)+8
ns_scroller.document.write(scrollercontent)
ns_scroller.document.close()
actualheight=ns_scroller.document.height
}
lefttime=setInterval("scrollscroller()",20)
}
window.onload=populate

function scrollscroller(){

if (iedom){
if (parseInt(cross_scroller.style.top)>(actualheight*(-1)+8))
cross_scroller.style.top=parseInt(cross_scroller.style.top)-copyspeed+"px"
else
cross_scroller.style.top=parseInt(scrollerheight)+8+"px"
}
else if (document.layers){
if (ns_scroller.top>(actualheight*(-1)+8))
ns_scroller.top-=copyspeed
else
ns_scroller.top=parseInt(scrollerheight)+8
}
}

if (iedom||document.layers){
with (document){
if (iedom){
write('<div style="position:relative;width:'+scrollerwidth+';height:'+scrollerheight+';overflow:hidden" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=scrollerspeed">')
write('<div id="iescroller" style="position:absolute;left:0px;top:0px;width:100%;">')
write('</div></div>')
}
else if (document.layers){
write('<ilayer width='+scrollerwidth+' height='+scrollerheight+' name="ns_scroller">')
write('<layer name="ns_scroller2" width='+scrollerwidth+' height='+scrollerheight+' left=0 top=0 onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=scrollerspeed"></layer>')
write('</ilayer>')
}
}
}

</script>
<?
    //   end_frame();
}else{
       begin_frame("NEWS ITEMS");
$query = 'SELECT id, title, user, date, text, comments FROM news ORDER BY id DESC LIMIT ' . $arow['max_display'] . '';
$resu = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($resu)){

begin_frame("" . $row['title'] . "");
print("" . $row['text'] . " <br><br><I>Posted By " . $row['user'] . "</i> On " . $row['date'] . "\n");
if ($arow['comment'] == 'on'){
       echo'<br><a class=menu_blink href="./show-archived.php?id=' . $row['id'] . '">Comment on this article. (' . $row['comments'] . ') Replys so far';
       }
       //}
end_frame();
}

end_frame();
}
}
echo '<a class=menu_blink href=news-archive.php>View Archive</a>';
end_block();
}
//---------------------End News-----------------------------//
//start side banner
echo "<br><CENTER>";
$contents = join ('', file ('sponsors.txt'));
$s_cons = split("~",$contents);
$bannerss = rand(0,(count($s_cons)-1));
echo $s_cons[$bannerss];
echo "</CENTER><br>";
//end side banner


?>
</TD>
<TD align="center" vAlign="top">

<CENTER>
<?
$content = join ('', file ('banners.txt'));
$s_con = split("~",$content);

$banners = rand(0,(count($s_con)-1));
echo $s_con[$banners];
?>
</CENTER>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<!-- Theme css -->
<link rel="shortcut icon" href="<?php echo $site_config["SITEURL"]; ?>/themes/NB_gray/images/favicon.ico" />

<!-- JS -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js" type="text/javascript"></script> 
<script type="text/javascript" src="<?php echo $site_config["SITEURL"]; ?>/backend/java_klappe.js"></script>

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
<link rel="stylesheet" type="text/css" href="themes/NB_gray/theme.css" />

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
<!--
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

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<link rel="stylesheet" href="themes/NB_gray/tooltip.css" type="text/css" />

<style type="text/css">
<!--
body {
	background-image: url(themes/NB_gray/images/bkg.jpg);
}
-->
</style></head>
<BODY BGCOLOR=#C7D3D7 LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 onLoad="MM_preloadImages('themes/NB_gray/images/10a_12b.jpg','themes/NB_gray/images/10a_13b.jpg','themes/NB_gray/images/10a_14b.jpg','themes/NB_grayimages/10a_15b.jpg','themes/NB_gray/images/10a_16b.jpg','themes/NB_gray/images/10a_17b.jpg')">
<div align="center">
<!--- DEBUT header --->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr valign="top"> 
<td width="198" height="138" rowspan="2"><p><img src="themes/NB_gray/images/10a_01.jpg" width="198" height="138"></p>  </td>
<td height="111" align="center" valign="top" background="themes/NB_gray/images/10a_02a.jpg"><img src="themes/NB_gray/images/10a_logo.jpg" width="270" height="111"></td>
<td width="198" height="138" rowspan="2"><img src="themes/NB_gray/images/10a_06.jpg" width="198" height="138"></td>
</tr>
<tr valign="top">
  <td height="27" align="center" valign="middle" background="themes/NB_gray/images/10a_02b.jpg"><FONT COLOR=#000000>
    <? if ($CURUSER) {
				print $CURUSER['username']; 
				echo "(<a href=account-logout.php><font color=#000000><b>".T_("LOGOUT")."</b></font></a>)";

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
		$res12 = SQL_Query_exec("SELECT COUNT(*) FROM messages WHERE receiver=" . $CURUSER["id"] . " and unread='yes'");
		$arr12 = mysql_fetch_row($res12);
		$unreadmail = $arr12[0];
		//end
			?>
&nbsp;&#8595;&nbsp;<font color=blue><? print mksize($CURUSER['downloaded']);?></font> - <b>&#8593;&nbsp;</b><font color=green><? print mksize($CURUSER['uploaded']);?></font> - <? print(T_("RATIO")); ?>: <? print $userratio; ?> &nbsp;
<?if (isset($unreadmail)) {	print("<a href=\"account.php\"><b><font color=#000000>".T_("NEWPM")." " . (isset($messages) != 1 ? "s" : "") . " ($unreadmail)</b></a></font>");}?>
<?
			}else{
				echo "<a href=account-login.php><font color=#000000>". T_("LOGIN") . "</font></a> <B>:</B> <a href=account-signup.php><font color=#000000>" . T_("REGISTER"). "</font></a>";
			}
			?>
  </FONT></td>
  </tr>
</table>
<!--- FIN header --->

<!--- DEBUT menu --->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="24" height="35"><img src="themes/NB_gray/images/10a_07.jpg" width="24" height="35"></td>
    <td align="center" background="themes/NB_gray/images/10a_08.jpg" bgcolor="#C7D3D7">&nbsp;</td>
    <td width="63" align="center" background="themes/NB_gray/images/10a_08.jpg" bgcolor="#C7D3D7"><img src="themes/NB_gray/images/10a_12.jpg" width="63" height="35" id="Image1" onClick="MM_goToURL('parent','index.php');return document.MM_returnValue" onMouseOver="MM_swapImage('Image1','','themes/NB_gray/images/10a_12b.jpg',1)" onMouseOut="MM_swapImgRestore()"></td>
    <td width="67" align="center" background="themes/NB_gray/images/10a_08.jpg" bgcolor="#C7D3D7"><img src="themes/NB_gray/images/10a_13.jpg" width="67" height="35" id="Image2" onClick="MM_goToURL('parent','forums.php');return document.MM_returnValue" onMouseOver="MM_swapImage('Image2','','themes/NB_gray/images/10a_13b.jpg',1)" onMouseOut="MM_swapImgRestore()"></td>
    <td width="133" align="center" background="themes/NB_gray/images/10a_08.jpg" bgcolor="#C7D3D7"><img src="themes/NB_gray/images/10a_14.jpg" width="133" height="35" id="Image3" onClick="MM_goToURL('parent','torrents.php');return document.MM_returnValue" onMouseOver="MM_swapImage('Image3','','themes/NB_gray/images/10a_14b.jpg',1)" onMouseOut="MM_swapImgRestore()"></td>
    <td width="71" align="center" background="themes/NB_gray/images/10a_08.jpg" bgcolor="#C7D3D7"><img src="themes/NB_gray/images/10a_15.jpg" width="71" height="35" id="Image4" onClick="MM_goToURL('parent','torrents-search.php');return document.MM_returnValue" onMouseOver="MM_swapImage('Image4','','themes/NB_gray/images/10a_15b.jpg',1)" onMouseOut="MM_swapImgRestore()"></td>
    <td width="118" align="center" background="themes/NB_gray/images/10a_08.jpg" bgcolor="#C7D3D7"><img src="themes/NB_gray/images/10a_16.jpg" width="118" height="35" id="Image5" onClick="MM_goToURL('parent','torrents-upload.php');return document.MM_returnValue" onMouseOver="MM_swapImage('Image5','','themes/NB_gray/images/10a_16b.jpg',1)" onMouseOut="MM_swapImgRestore()"></td>
    <td width="50" align="center" background="themes/NB_gray/images/10a_08.jpg" bgcolor="#C7D3D7"><img src="themes/NB_gray/images/10a_17.jpg" width="50" height="35" id="Image6" onClick="MM_goToURL('parent','faq.php');return document.MM_returnValue" onMouseOver="MM_swapImage('Image6','','themes/NB_gray/images/10a_17b.jpg',1)" onMouseOut="MM_swapImgRestore()"></td>
    <td align="center" background="themes/NB_gray/images/10a_08.jpg" bgcolor="#C7D3D7">&nbsp;</td>
    <td width="24" height="35"><img src="themes/NB_gray/images/10a_19.jpg" width="24" height="35"></td>
  </tr>
</table>
<!--- FIN menu --->        

<!--- DEBUT table de contenu --->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr> 
<td width="24" valign="top" background="themes/NB_gray/images/10a_20.jpg"><IMG SRC="themes/NB_gray/images/10a_20.jpg" WIDTH=24 HEIGHT=50 ALT=""></td>
<td>
<div align="center">
<table width="99%" border="0" cellspacing="0" cellpadding="3">
<tr>
<!--- DEBUT colonne de gauche --->
<td width="180" valign="top"></td>

<table cellspacing="0" cellpadding="7" width="100%" border="0">
     <tr>
          <?php if ($site_config["LEFTNAV"]){?>
          <!-- START LEFT COLUM -->
          <td valign="top" width="170">
		  <?php leftblocks();?>
          </td>
          <!-- END LEFT COLUM -->
          <?php } //LEFTNAV ON/OFF END?>
          <!-- START MAIN COLUM -->
          <td valign="top"

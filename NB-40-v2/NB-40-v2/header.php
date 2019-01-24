<?php
/*
+ ----------------------------------------------------------------------------+
|     ©Nikkbu 2016
|     Site: http://www.wolf-designs.com
|     eMail: nikkbu@wolf-designs.com
|     Theme: NB-40-v2 -- v1.0.1
|     TT Version: v2.08
|     Date: 21/02/2016
|     Author: Nikkbu (N.Burgin)
+----------------------------------------------------------------------------+
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $site_config["CHARSET"]; ?>" />
<title><?php echo $title; ?></title>
<meta name="author" content="Nikkbu, TorrentTrader" />
<meta name="generator" content="TorrentTrader <?php echo $site_config['ttversion']; ?>" />
<meta name="description" content="TorrentTrader is a feature packed and highly customisable PHP/MySQL Based BitTorrent tracker. Featuring intergrated forums, and plenty of administration options. Please visit www.torrenttrader.org for the support forums. " />
<meta name="keywords" content="http://nikkbu.info, http://www.torrenttrader.org" />

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo $site_config["SITEURL"]; ?>/themes/NB-40-v2/theme.css">

<!-- JS -->
<script type="text/javascript" src="<?php echo $site_config["SITEURL"]; ?>/backend/java_klappe.js"></script>
<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
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
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
</script>
</head>

<BODY class="index_body" onload="MM_preloadImages('themes/NB-40-v2/images/NB_toph.jpg')">

<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="3" bgcolor="#404849"><img src="themes/NB-40-v2/images/blank.gif" width="100%" height="3" /></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="24" height="37"><img src="themes/NB-40-v2/images/NB_01.jpg" width="24" height="37" /></td>
    <td height="37" align="right" background="themes/NB-40-v2/images/NB_02.jpg"><table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="28" height="37"><img src="themes/NB-40-v2/images/NB_infol.jpg" width="28" height="37" /></td>
        <td class="infobar" height="37" background="themes/NB-40-v2/images/NB_infom.jpg">
                <!-- START INFOBAR CODE -->
                <?php
                    if (!$CURUSER){
                        echo "[<a href='account-login.php'>".T_("LOGIN")."</a>]<b> ".T_("OR")." </b>[<a href='account-signup.php'>".T_("SIGNUP")."</a>]";
                    }else{
                        print (T_("LOGGED_IN_AS").": ".$CURUSER["username"].""); 
                        echo " [<a href='account-logout.php'>".T_("LOGOUT")."</a>] ";
                        if ($CURUSER["control_panel"]=="yes") {
                            print("[<a href='admincp.php'>".T_("STAFFCP")."</a>] ");
                        }
                
                        //check for new pm's
                        $res = SQL_Query_exec("SELECT COUNT(*) FROM messages WHERE receiver=" . $CURUSER["id"] . " and unread='yes' AND location IN ('in','both')");
                        $arr = mysql_fetch_row($res);
                        $unreadmail = $arr[0];
                        if ($unreadmail){
                            print("[<b><a href='mailbox.php?inbox'>".T_("NEW_MESSAGE")." <font color='#ff0000'>$unreadmail</font></a></b>] ");
                        }else{
                            print("[<a href='mailbox.php'>".T_("YOUR_MESSAGES")."</a>] ");
                        }
                        //end check for pm's
                    }
                ?>
                <!-- END INFOBAR CODE -->
             </td>
          </tr>
        </table></td>
        <td width="63" height="37"><img src="themes/NB-40-v2/images/NB_infor.jpg" width="63" height="37" /></td>
      </tr>
    </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="500" height="97"><img src="themes/NB-40-v2/images/NB_logo.jpg" width="500" height="97" /></td>
          <td height="97" background="themes/NB-40-v2/images/NB_03.jpg">&nbsp;</td>
          <td width="24" height="97"><img src="themes/NB-40-v2/images/NB_04.jpg" width="24" height="97" /></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="49" height="35"><img src="themes/NB-40-v2/images/NB_navl.jpg" width="49" height="35" /></td>
          <td class="subnav" height="35" background="themes/NB-40-v2/images/NB_navm.jpg"><div id="nav">
                <ul>
                  <li><a href="index.php"><span><?php echo T_("HOME");?></span></a></li>
                  <li><a href="forums.php"><span><?php echo T_("FORUMS");?></span></a></li>
                  <li><a href="torrents-upload.php"><span><?php echo T_("UPLOAD_TORRENT");?></span></a></li>
                  <li><a href="torrents.php"><span><?php echo T_("BROWSE_TORRENTS");?></span></a></li>
                  <li><a href="torrents-today.php"><span><?php echo T_("TODAYS_TORRENTS");?></span></a></li>
                  <li><a href="torrents-search.php"><span><?php echo T_("SEARCH_TORRENTS");?></span></a></li>
                </ul>
              </div></td>
          <td width="37" height="35"><img src="themes/NB-40-v2/images/NB_navr.jpg" width="37" height="35" /></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="22" height="12"><img src="themes/NB-40-v2/images/NB_body-tl.jpg" width="22" height="12" /></td>
          <td height="12" background="themes/NB-40-v2/images/NB_body-tm.jpg"><img src="themes/NB-40-v2/images/NB_body-tm.jpg" width="100%" height="12" /></td>
          <td width="22" height="12"><img src="themes/NB-40-v2/images/NB_body-tr.jpg" width="22" height="12" /></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="22" background="themes/NB-40-v2/images/NB_body-ml.jpg"><img src="themes/NB-40-v2/images/NB_body-ml.jpg" width="22" height="1" /></td>
          <td bgcolor="#7e898c"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          
            <tr>
              <td><TABLE cellSpacing="4" cellPadding="0" width="100%" border="0" >
	
	<TR>

	<?php if ($site_config["LEFTNAV"]){?>
	<TD vAlign="top" width="180">
	<?php leftblocks();?>
	</TD>
	<?php } //LEFTNAV ON/OFF END?>

	<TD vAlign="top"><!-- MAIN CENTER CONTENT START -->

	<?php
	if ($site_config["MIDDLENAV"]){
		middleblocks();
	} //MIDDLENAV ON/OFF END
	?>

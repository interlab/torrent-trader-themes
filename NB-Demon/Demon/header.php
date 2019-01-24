<?php
$GLOBALS['tstart'] = array_sum(explode(" ", microtime()));
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title><?= $title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $site_config["CHARSET"]; ?>" />
<meta name="author" content="Evolution , Cod3r" />
<meta name="generator" content="Evolution <?php echo $site_config['evolution']; ?>" />
<meta name="description" content="Evolution is a feature packed and highly customisable PHP/MySQL Based BitTorrent tracker. Featuring intergrated forums, and plenty of administration options. Please visit www.afterdawn.com/guides/archive/bittorrent_faq.cfm for the support forums. " />
<meta name="keywords" content="Evolution" />
<link rel="shortcut icon" href="<?php echo $site_config["SITEURL"]; ?>/themes/Demon/images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="<?= $site_config["SITEURL"]; ?>/themes/Demon/theme.css">
<script type="text/javascript" src="<?php echo $site_config["SITEURL"]; ?>/backend/java_klappe.js"></script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js'></script>
<script type="text/javascript" src="js/overlib.js"></script>
</head>
<BODY LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0><table width="100%" border="0" cellspacing="0" cellpadding="0">
     <tr>
        <td height="162" colspan="3" align="right" valign="middle"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
     <tr>
        <td width="176" height="162"><img src="themes/Demon/images/01.gif" width="176" height="162"></td>
        <td align="center" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td width="270" height="66" background="themes/Demon/images/02.gif"><a href="index.php"><img src="themes/Demon/images/logo.gif" alt="logo" width="270" height="66" border="0"></a></td>
        <td align="right" valign="bottom" background="themes/Demon/images/02.gif">
<?
	if (!$CURUSER){
		echo "<a href=\"account-login.php\">".T_("LOGIN")."</a><B> ".T_("OR")." </B><a href=\"account-signup.php\">".T_("SIGNUP")."</a> - ";
	    }else{
		print (T_("LOGGED_IN_AS").": ".class_user($CURUSER[username])."");
		    $res = SQL_Query_exec("SELECT COUNT(*) FROM messages WHERE receiver=" . $CURUSER["id"] . " and unread='yes' AND location IN ('in','both')") or print(mysql_error());
		    $arr = mysql_fetch_row($res);
		    $unreadmail = $arr[0];
		if ($unreadmail){
			print("<font color=#FF0000><B>[New PM] (<a href=mailbox.php?inbox>$unreadmail</a>)</b></a></font>");
		    }else{
			print("<a href=mailbox.php>[My Messages]</a>");
		    }
}
?>
                 <br>
                 </td>
                 </tr>
                 <tr>
                    <td height="86" colspan="2" align="left" background="themes/Demon/images/04.gif">&nbsp;</td>
                 </tr>
                 <tr>
                    <td height="10" colspan="2" background="themes/Demon/images/05.gif"><img src="themes/Demon/images/05.gif" width="3" height="10"></td>
                 </tr>
           </table>
                 </td>
                    <td width="31" height="162"><img src="themes/Demon/images/03.gif" width="31" height="162"></td>
                 </tr>
            </table>
                 </td>
               </tr>
    <tr valign="top">
                    <td width="8" height="32" rowspan="2"><img src="themes/Demon/images/06.gif" width="8" height="32"></td>
                    <td width="100%" height="23" align="center" valign="middle" background="themes/Demon/images/07.gif"><p class="info"><a href="index.php"><B>Home</B></a>  &bull; <a href=torrents-upload.php ><B>Upload Torrent</B></a> &bull; <a href=torrents.php ><B>Browse Torrents</B></a> &bull; <a href=torrents-today.php ><B>Todays Torrents</B></a> &bull; <a href=torrents-search.php ><B>Search</B></a>  &bull; <a href=forums.php ><B>Forums</B></a></td>
                    <td width="8" height="32" rowspan="2"><img src="themes/Demon/images/08.gif" width="8" height="32"></td>
                </tr>
    <tr valign="top">
                    <td height="9" align="center" valign="middle" background="themes/Demon/images/09.gif"><img src="themes/Demon/images/09.gif" width="3" height="9"></td>
                </tr>
             </table>
                     <table width="100%" border="0" cellspacing="0" cellpadding="0">
                 <tr>
                     <td width="8" valign="top" background="themes/Demon/images/10.gif"><IMG SRC="themes/Demon/images/10.gif" WIDTH=8 HEIGHT=1 ALT=""></td>
                     <td background="themes/Demon/images/bkg.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                   <tbody>
                 <td>
                     <table width="100%" border="0" cellspacing="0" cellpadding="6">
             <tr>
     <tbody>
<?if ($site_config["LEFTNAV"]){?>
<td width="180" valign="top">
<br>
<?leftblocks();?>
</td>
<? } ?>
<td valign="top">
<br>
<?
	if ($site_config["MIDDLENAV"]){
		middleblocks();
}
?>
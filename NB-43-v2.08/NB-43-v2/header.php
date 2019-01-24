<?php
/*
+ ----------------------------------------------------------------------------+
|     ©Nikkbu 2016
|     Site: http://www.wolf-designs.com
|     eMail: nikkbu@wolf-designs.com
|     Theme: NB-43-v2 -- v1.0.1
|     TT Version: v2.08
|     Date: 22/02/2016
|     Author: Nikkbu (N.Burgin)
+----------------------------------------------------------------------------+
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title; ?></title>
<meta http-equiv='Content-Type' content='text/html; charset=<?php echo $site_config["CHARSET"]; ?>' />
<meta name='author' content='Nikkbu, N.Burgin, TorrentTrader' />
<meta name='generator' content='TorrentTrader <?php echo $site_config['ttversion']; ?>' />
<meta name='description' content='TorrentTrader is a feature packed and highly customisable PHP/MySQL Based BitTorrent tracker. Featuring intergrated forums, and plenty of administration options. Please visit www.torrenttrader.org for the support forums. ' />
<meta name='keywords' content='http://www.wolf-designs.com, http://www.torrenttrader.org' />

<!-- CSS -->
<link rel='stylesheet' type='text/css' href='<?php echo $site_config["SITEURL"]; ?>/themes/NB-43-v2/theme.css'>

<!-- JS -->
<script type='text/javascript' src='<?php echo $site_config["SITEURL"]; ?>/backend/java_klappe.js'></script>

<!-- PHP -->
<?php
	$page = $_SERVER['REQUEST_URI'];
	$page = str_replace("/","",$page);
	$page = str_replace(".php","",$page);
	$page = str_replace("v208","",$page); /*-- IN CASE TRACKER INSTALLED IN A SUB FOLDER --*/
	$page = str_replace("?search=","",$page);
	$page = $page ? $page : 'index'
?>

</head>

<BODY id="NB-Body">
<table width="88%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td id="NB-left" width="8" valign="top"><img src="themes/NB-43-v2/images/blank.gif" width="8" height="100" /></td>
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" background="themes/NB-43-v2/images/NB-header-bg.gif">
        <tr>
          <td width="500" height="88" background="themes/NB-43-v2/images/NB-logo.gif"><img src="themes/NB-43-v2/images/blank.gif" width="500" height="88" /></td>
          <td valign="top" background="themes/NB-43-v2/images/NB-header-bg.gif"><div id="infobar">
              <div id="infobar-l">
                <div id="infobar-r">
                  <div id="info">
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
                  </div>
                </div>
              </div>
            </div></td>
          <td width="10" height="88" background="themes/NB-43-v2/images/NB-header-r.gif"><img src="themes/NB-43-v2/images/blank.gif" width="10" height="88" /></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="6" background="themes/NB-43-v2/images/NB-body-l.gif"><img src="themes/NB-43-v2/images/blank.gif" width="6" height="2" /></td>
          <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="40" background="themes/NB-43-v2/images/NB-nav-bg.gif"><!-- START SUBNAV CODE -->
                  <div id="nav">
                    <ul id="<?php echo $page ?>">
                      <li class='index'><a href="index.php"><span><?php echo T_("HOME");?></span></a></li>
                      <li class='forums'><a href="forums.php"><span><?php echo T_("FORUMS");?></span></a></li>
                      <li class='torrents-upload'><a href="torrents-upload.php"><span><?php echo T_("UPLOAD_TORRENT");?></span></a></li>
                      <li class='torrents'><a href="torrents.php"><span><?php echo T_("BROWSE_TORRENTS");?></span></a></li>
                      <li class='torrents-today'><a href="torrents-today.php"><span><?php echo T_("TODAYS_TORRENTS");?></span></a></li>
                      <li class='torrents-search'><a href="torrents-search.php"><span><?php echo T_("SEARCH_TORRENTS");?></span></a></li>
                    </ul>
                  </div>
                  <!-- END SUBNAV CODE -->
                </td>
              </tr>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td background="themes/NB-43-v2/images/NB-bar-bg.gif"><img src="themes/NB-43-v2/images/blank.gif" width="100%" height="12" /></td>
              </tr>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <TBODY>
                <tr>
                  <td valign="top" bgcolor="#1E1E1E"><!-- START CONTENT CODE -->
                    <TABLE cellSpacing='0' cellPadding='0' border='0' width='100%'>
                      <TBODY>
                        <TR>
                        
                          <?php if ($site_config["LEFTNAV"]) { ?>
                          <!-- START LEFT COLUMN -->
                          <TD id='lcol' vAlign='top' width="180"><?php leftblocks();?>
                          </TD>
                          <!-- END LEFT COLUMN -->
                          <?php } ?>
                          
                          <!-- MAIN CENTER CONTENT START -->
                          <TD id='mcol' vAlign='top'>

<?php
/*
+ ----------------------------------------------------------------------------+
|     ©Nikkbu 2016
|     Site: http://www.wolf-designs.com
|     eMail: nikkbu@wolf-designs.com
|     Theme: NB-44-v2 -- v1.0.2
|     TT Version: v2.08
|     Date: 20/02/2016
|     Author: Nikkbu (N.Burgin)
+----------------------------------------------------------------------------+
*/
?>
<html>
<head>
<title><?php echo $title; ?></title>
<meta http-equiv='Content-Type' content='text/html; charset=<?php echo $site_config["CHARSET"]; ?>' />
<meta http-equiv='X-UA-Compatible' content='IE=edge' />
<meta http-equiv='X-UA-Compatible' content='IE=9' />
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='pragma' content='no-cache'>
<meta name='author' content='Nikkbu, N.Burgin, TorrentTrader' />
<meta name='generator' content='TorrentTrader <?php echo $site_config['ttversion']; ?>' />
<meta name='description' content='TorrentTrader is a feature packed and highly customisable PHP/MySQL Based BitTorrent tracker. Featuring intergrated forums, and plenty of administration options. Please visit www.torrenttrader.org for the support forums. ' />
<meta name='keywords' content='http://www.wolf-designs.com, http://www.torrenttrader.org' />
<meta name='viewport' content='width=device-width'>

<!-- CSS -->
<link rel='stylesheet' type='text/css' href='<?php echo $site_config["SITEURL"]; ?>/themes/NB-44-v2/reset.css'>
<link rel='stylesheet' type='text/css' href='<?php echo $site_config["SITEURL"]; ?>/themes/NB-44-v2/theme.css'>

<!-- JS -->
<script type='text/javascript' src='<?php echo $site_config["SITEURL"]; ?>/backend/java_klappe.js'></script>

<!-- PHP -->
<?php
	$page = $_SERVER['REQUEST_URI'];
	$page = str_replace("/","",$page);
	$page = str_replace(".php","",$page);
	$page = str_replace("ttv2","",$page);  /* -- IN CASE TRACKER IS INSTALLED IN A SUB FOLDER -- */
	$page = str_replace("?search=","",$page);
	$page = $page ? $page : 'index'
?>

</head>

<BODY>
<div id='wrapper'>
  <header>
    <div id='infobar'>
      <div class='infobar'>
        <!-- START INFOBAR CODE -->
	  <?php
            if (!$CURUSER){
                echo "[<a href=\"account-login.php\">".T_("LOGIN")."</a>]<b> ".T_("OR")." </b>[<a href=\"account-signup.php\">".T_("SIGNUP")."</a>]";
            }else{
                print (T_("LOGGED_IN_AS").": ".$CURUSER["username"].""); 
                echo " [<a href=\"account-logout.php\">".T_("LOGOUT")."</a>] ";
                if ($CURUSER["control_panel"]=="yes") {
                    print("[<a href='admincp.php'>".T_("STAFFCP")."</a>] ");
                }
        
                //check for new pm's
                $res = SQL_Query_exec("SELECT COUNT(*) FROM messages WHERE receiver=" . $CURUSER["id"] . " and unread='yes' AND location IN ('in','both')");
                $arr = mysql_fetch_row($res);
                $unreadmail = $arr[0];
                if ($unreadmail){
                    print("[<a href='mailbox.php?inbox'><b><font color='#ff0000'>$unreadmail</font> ".P_("NEWPM", $unreadmail)."</b></a>]");  
                }else{
                    print("[<a href='mailbox.php'>".T_("YOUR_MESSAGES")."</a>] ");
                }
                //end check for pm's
            }
         ?>
        <!-- END INFOBAR CODE -->
      </div>
    </div>
    <div id='logo'><img src='themes/NB-44-v2/images/blank.gif'></div>
    <menu>
    <div id='menu'>
    <ul id="<?php echo $page ?>">
      <li><a href="index.php"><span><?php echo T_("HOME");?></span></a></li>
      <li><a href="forums.php"><span><?php echo T_("FORUMS");?></span></a></li>
      <li><a href="torrents-upload.php"><span><?php echo T_("UPLOAD_TORRENT");?></span></a></li>
      <li><a href="torrents.php"><span><?php echo T_("BROWSE_TORRENTS");?></span></a></li>
      <li><a href="torrents-today.php"><span><?php echo T_("TODAYS_TORRENTS");?></span></a></li>
      <li><a href="torrents-search.php"><span><?php echo T_("SEARCH_TORRENTS");?></span></a></li>
    </ul>
    </div>
    </menu></header>
  <!-- START CONTENT CODE -->
  <div class='content'>
    <TABLE border='0' cellspacing='12' cellpadding='0' width='100%'>
        <TBODY>
        <TR>
    
        <?php if ($site_config["LEFTNAV"]) { ?>
        <!-- START LEFT COLUMN -->
        <TD width='180' id='lcol' vAlign='top'>
        <?php leftblocks();?>
        </TD>
        <!-- END LEFT COLUMN -->
        <?php } ?>
        <!-- MAIN CENTER CONTENT START -->
        <TD id='mcol' vAlign='top'>
        
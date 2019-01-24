<?php
/*
+ ----------------------------------------------------------------------------+
|     �Nikkbu 2016
|     Site: http://www.wolf-designs.com
|     eMail: nikkbu@wolf-designs.com
|     Theme: NB-30-v2 -- v1.0.1
|     TT Version: v2.08
|     Date: 01/03/2016
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
<link rel='stylesheet' type='text/css' href='<?php echo $site_config["SITEURL"]; ?>/themes/NB-30-v2/reset.css'>
<link rel='stylesheet' type='text/css' href='<?php echo $site_config["SITEURL"]; ?>/themes/NB-30-v2/theme.css'>

<!-- JS -->
<script type='text/javascript' src='<?php echo $site_config["SITEURL"]; ?>/backend/java_klappe.js'></script>
<!--[if lt IE 9]>
	<script src='http://html5shim.googlecode.com/svn/trunk/html5.js'></script>
<![endif]-->

<!-- PHP -->
<?php
	$page = $_SERVER['REQUEST_URI'];
	$page = str_replace("/","",$page);
	$page = str_replace(".php","",$page);
	$page = str_replace("v208","",$page);  /* -- IN CASE TRACKER IS INSTALLED IN A SUB FOLDER -- */
	$page = str_replace("?search=","",$page);
	$page = $page ? $page : 'index'
?>

</head>

<body>
<div class='wrapper'>
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
  <header>
    <h1><?php echo $site_config['SITENAME'] ?></h1>
    <h2><?php echo $site_config['SITEURL'] ?></h2>
  </header>
  <!-- START NAV CODE -->
  <menu>
    <ul id='<?php echo $page ?>'>
      <li class='index'><a href='index.php'><?php echo T_("HOME");?></a></li>
      <li class='forums'><a href='forums.php'><?php echo T_("FORUMS");?></a></li>
      <li class='torrents-upload'><a href='torrents-upload.php'><?php echo T_("UPLOAD_TORRENT");?></a></li>
      <li class='torrents'><a href='torrents.php'><?php echo T_("BROWSE_TORRENTS");?></a></li>
      <li class='torrents-today'><a href='torrents-today.php'><?php echo T_("TODAYS_TORRENTS");?></a></li>
      <li class='torrents-search'><a href='torrents-search.php'><?php echo T_("SEARCH_TORRENTS");?></a></li>
    </ul>
  </menu>
  <!-- END NAV CODE -->
  
	<?php if ($site_config["LEFTNAV"]) { ?>
    <!-- START LEFT COLUMN -->
    <div class='lCol'><?php leftblocks();?></div>
    <!-- END LEFT COLUMN -->
	<?php } ?>
  
	<?php if ($site_config["RIGHTNAV"]) { ?>
    <!-- START RIGHT COLUMN -->
    <div class='rCol'><?php rightblocks(); ?></div>
    <!-- END RIGHT COLUMN -->
    <?php } ?>
  
    <!-- MAIN CENTER CONTENT START -->
    <div class='mCol'>

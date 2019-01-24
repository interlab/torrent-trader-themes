<?php
/*
+ ----------------------------------------------------------------------------+
|     ©Nikkbu 2012
|     Site: http://nikkbu.info
|     eMail: nikkbu@nikkbu.info
|     Theme: NB-16-v2 -- 2.0.0
|     TT Version: v2.08
|     TT Revision: 1108
|     Date: 17/05/2012
|     Author: Nikkbu
+----------------------------------------------------------------------------+
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $site_config["CHARSET"]; ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="X-UA-Compatible" content="IE=9" />
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="pragma" content="no-cache">
<meta name="author" content="Nikkbu, TorrentTrader" />
<meta name="generator" content="TorrentTrader <?php echo $site_config['ttversion']; ?>" />
<meta name="description" content="TorrentTrader is a feature packed and highly customisable PHP/MySQL Based BitTorrent tracker. Featuring intergrated forums, and plenty of administration options. Please visit www.torrenttrader.org for the support forums. " />
<meta name="keywords" content="http://nikkbu.info, http://www.torrenttrader.org" />
<!-- CSS -->
<!-- Theme css -->
<link rel="shortcut icon" href="<?php echo $site_config["SITEURL"]; ?>/themes/NB-16-v2/images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="<?php echo $site_config["SITEURL"]; ?>/themes/NB-16-v2/theme.css" />
<!--[if IE]>
    <link rel="stylesheet" type="text/css" href="<?php echo $site_config["SITEURL"]; ?>/themes/NB-16-v2/css/ie.css" />
<![endif]-->
<!-- JS -->
<script type="text/javascript" src="<?php echo $site_config["SITEURL"]; ?>/backend/java_klappe.js"></script>
<!--[if lte IE 6]>
    <script type="text/javascript" src="<?php echo $site_config["SITEURL"]; ?>/themes/NB-16-v2/js/pngfix/supersleight-min.js"></script>
<![endif]-->
</head>
<body>
<div id='wrapper'>
  <div id="header">
    <div id="infobar">
<!-- START INFOBAR -->
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
	print("[<b><a href='mailbox.php?inbox'>".T_("NEW_MESSAGE")." <font color='#ff0000'>$unreadmail</font></a></b>] ");
	}else{
	print("[<a href='mailbox.php'>".T_("YOUR_MESSAGES")."</a>] ");
	}
	//end check for pm's
	}
?>
<!-- END INFOBAR -->
    </div>
  </div>
  <div id="menu">
  <table border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center">
            <!-- START NAVIGATION -->
          <ul class='menu'>
            <li class='myLink1'><a href="index.php"><span><?php echo T_("HOME");?></span></a></li>
              <li class='myLink2'><a href="forums.php"><span><?php echo T_("FORUMS");?></span></a></li>
              <li class='myLink3'><a href="torrents-upload.php"><span><?php echo T_("UPLOAD_TORRENT");?></span></a></li>
              <li class='myLink4'><a href="torrents.php"><span><?php echo T_("BROWSE_TORRENTS");?></span></a></li>
              <li class='myLink5'><a href="torrents-today.php"><span><?php echo T_("TODAYS_TORRENTS");?></span></a></li>
              <li class='myLink6'><a href="torrents-search.php"><span><?php echo T_("SEARCH_TORRENTS");?></span></a></li>
              <li class='myLink7'><a href="staff.php"><span>Staff</span></a></li>
            </ul>
            <!-- END NAVIGATION -->
        </td>
      </tr>
    </table>

  </div>
</div>
<br />
<div class="myTable">
  <div class="myTrow">
    <!-- START LEFT COLUM -->
    <?php if ($site_config["LEFTNAV"]){?>
    <div class="myTcell" id="lCol">
      <?php leftblocks();?>
    </div>
    <?php } //LEFTNAV ON/OFF END?>
    <!-- END LEFT COLUM -->
    <!-- START MAIN COLUM -->
    <div class="myTcell" id="mCol">

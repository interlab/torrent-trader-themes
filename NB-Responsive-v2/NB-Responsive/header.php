<?php
/*
+ ----------------------------------------------------------------------------+
|     ©Nikkbu 2013
|     Site: http://www.wolf-designs.com
|     eMail: nikkbu@wolf-designs.com
|     Theme: NB-Responsive -- v1.0.0
|     TT Version: v2.08
|     Date: 19/02/2013
|     Author: Nikkbu (N.Burgin)
+----------------------------------------------------------------------------+
*/
?>
<html lang='en'>
<head>
<title><?php echo $title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $site_config["CHARSET"]; ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="X-UA-Compatible" content="IE=9" />
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="pragma" content="no-cache">
<meta name="author" content="Nikkbu, N.Burgin, TorrentTrader" />
<meta name="generator" content="TorrentTrader <?php echo $site_config['ttversion']; ?>" />
<meta name="description" content="TorrentTrader is a feature packed and highly customisable PHP/MySQL Based BitTorrent tracker. Featuring intergrated forums, and plenty of administration options. Please visit www.torrenttrader.org for the support forums. " />
<meta name="keywords" content="http://www.wolf-designs.com, http://www.torrenttrader.org" />
<meta name='viewport' content='width=device-width'>

<!-- CSS -->
<style type="text/css">
<?php if (!$CURUSER) { ?>
p#flip
{
	background-position: left top;
}
<?php } else { ?>
p#flip
{
	background-position: right top;
}
<?php } ?>
</style>
<!-- Theme css -->
<link rel="shortcut icon" href="<?php echo $site_config["SITEURL"]; ?>/themes/NB-Responsive/images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="<?php echo $site_config["SITEURL"]; ?>/themes/NB-Responsive/reset.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $site_config["SITEURL"]; ?>/themes/NB-Responsive/theme.css" />
<!--[if IE]>
    <link rel="stylesheet" type="text/css" href="<?php echo $site_config["SITEURL"]; ?>/themes/NB-Responsive/css/ie.css" />
<![endif]-->

<!-- JS -->
<script type="text/javascript" src="<?php echo $site_config["SITEURL"]; ?>/backend/java_klappe.js"></script>
<!--[if lt IE 8]>
    <script type="text/javascript" src="<?php echo $site_config["SITEURL"]; ?>/themes/NB-Responsive/js/pngfix/supersleight-min.js"></script>
<![endif]-->
<!-- html5.js for IE less than 9 -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- css3-mediaqueries.js for IE less than 9 -->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>
<body>
<div id="wrapper">
  <section id='infobar'>
    <div class="infobar">
      <div class="info-l">
    <?php
        if (!$CURUSER){
            echo "[<a href=\"account-login.php\">".T_("LOGIN")."</a>]<B> ".T_("OR")." </B>[<a href=\"account-signup.php\">".T_("SIGNUP")."</a>]";
        
        }else{
        
        print (T_("LOGGED_IN_AS").": ".$CURUSER["username"]. "");
        
        echo " <a class='profile' href='account.php'><img src='themes/NB-Responsive/images/account.png' border='none' height='20' width='20' alt='Your account' title='Your account'></a> <a class='account' href='account-details.php?id=$CURUSER[id]'><img src='themes/NB-Responsive/images/profile.png' border='none' height='20' width='20' alt='Profile' title='Profile'></a> <a class='logout' href=\"account-logout.php\"><img src='themes/NB-Responsive/images/logout.png' border='none' height='20' width='20' alt='Logout' title='Logout'></a> ";
        if ($CURUSER["control_panel"]=="yes") {
        print("<a href='admincp.php'><img src='themes/NB-Responsive/images/admin.png' border='none' height='20' width='20' alt='Admin CP' title='Admin CP'></a> ");
        }
            
        //check for new pm's
        
        $res = mysql_query("SELECT COUNT(*) FROM messages WHERE receiver=" . $CURUSER["id"] . " and unread='yes' AND location IN ('in','both')") or print(mysql_error());
        
        $arr = mysql_fetch_row($res);
        
        $unreadmail = $arr[0];
        
        if ($unreadmail){
        
            print("<a class='mail_n' href=mailbox.php?inbox><img src='themes/NB-Responsive/images/new_mail.png' border='none' height='20' width='20' alt='New Messages' title='($unreadmail) New Messages'><font color='red'>($unreadmail)</font></a>&nbsp;");
        
        }else{
        
            print("<a class='mail' href=mailbox.php><img src='themes/NB-Responsive/images/mail.png' border='none' height='20' width='20' alt='My Messages' title='My Messages'></a>&nbsp;");
        
        }
        
        //end check for pm's
        
        }
    ?>
    </div>
      <?php
        if ($CURUSER){
        
        $userdownloaded = mksize($CURUSER["downloaded"]);
        $useruploaded = mksize($CURUSER["uploaded"]);
        
        if ($CURUSER["uploaded"] > 0 && $CURUSER["downloaded"] == 0)
        $userratio = "Inf.";
        elseif ($CURUSER["downloaded"] > 0)
        $userratio = number_format($CURUSER["uploaded"] / $CURUSER["downloaded"], 2);
        else
        $userratio = "---";
        
        print ("<div class='info-r'>
        <img src='themes/NB-Responsive/images/download.png' border='none' height='20' width='20' alt='Downloaded' title='Downloaded'> <font color='#CC0000'>$userdownloaded </font> <img src='themes/NB-Responsive/images/upload.png' border='none' height='20' width='20' alt='Uploaded' title='Uploaded'> <font color='#009900'>$useruploaded</font> <img src='themes/NB-Responsive/images/ratio.png' border='none' height='20' width='20' alt='Ratio' title='Ratio'> $userratio</div>");
        
        }
    ?>
    </div>
  </section>
<section id='header'>
    <div class="header">
      <div id="logo"><img src="themes/NB-Responsive/images/logo.png" width="100%" ></div>
      <div class="s_network">
        <ul>
          <li><a href='#'><img src="themes/NB-Responsive/images/facebook.png" border="0" width="100%" /></a></li>
          <li><a href='#'><img src="themes/NB-Responsive/images/twitter.png" border="0" width="100%" /></a></li>
          <li><a href='#'><img src="themes/NB-Responsive/images/rss.png" border="0" width="100%" /></a></li>
        </ul>
      </div>
      <div class="mySearch">
        <form method="get" action="torrents-search.php">
          <input value="Search ..." onFocus="if (this.value == 'Search ...') this.value = '';" onBlur="if (this.value == '') this.value = 'Search ...';" name="search" id="q" class="mySearch-t" type="text">
          <input name="incldead" value="1" type="hidden">
          <input value="" class="mySearch-b" type="submit">
        </form>
      </div>
      <menu>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="forums.php">Forums</a></li>
        <li><a href="torrents-upload.php">Upload</a></li>
        <li><a href="torrents.php">Browse</a></li>
        <li><a href="torrents-today.php">Today's</a></li>
        <li><a href="faq.php">FAQ</a></li>
      </ul>
      </menu>
      <nav>
        <form name="menuform">
          <select name="menu2" onChange="top.location.href = this.form.menu2.options[this.form.menu2.selectedIndex].value;return false;">
            <option selected  value='#'>Navigation</option>
            <option  value='index.php'>Home</option>
            <option value='forums.php'>Forums</option>
            <option value='torrents-upload.php'>Upload Torrent</option>
            <option value='torrents.php'>Browse Torrents</option>
            <option value='torrents-today.php'>Today's Torrents</option>
            <option value='torrents-search.php'>Search Torrents</option>
            <option value='faq.php'>FAQ</option>
          </select>
        </form>
      </nav>
    </div>
  </section>
  <section id='content'>
    <div class="tRow">
	<?php if ($site_config["LEFTNAV"]){?>
      <aside id='lCol'>
        <?php leftblocks();?>
      </aside>
	<?php } //LEFTNAV ON/OFF END?>
      <div id="mCol">

      <?php
if ($site_config["MIDDLENAV"]){
	middleblocks();
} //MIDDLENAV ON/OFF END
?>
    </div>
    <!-- END MAIN COLUM -->
    <!-- START RIGHT COLUMN -->
    <?php if ($site_config["RIGHTNAV"]){ ?>
    <div class="myTcell" id="rCol">
      <?php rightblocks(); ?>
    </div>
    <?php } ?>
    <!-- END RIGHT COLUMN -->
  </div>
</div>
  <br />
  
<!-- START FOOTER CODE -->
<?php
//
// *************************************************************************************************************************************
//			PLEASE DO NOT REMOVE THE POWERED BY LINE, SHOW SOME SUPPORT! WE WILL NOT SUPPORT ANYONE WHO HAS THIS LINE EDITED OR REMOVED!
// *************************************************************************************************************************************
print ("<CENTER>Powered by <a href=\"http://www.torrenttrader.org\" target=\"_blank\">TorrentTrader v".$site_config["ttversion"]."</a> - ");
$totaltime = array_sum(explode(" ", microtime())) - $GLOBALS['tstart'];
printf("Page generated in %f", $totaltime);
print (" - <a href='rss.php'><img src='".$site_config["SITEURL"]."/images/icon_rss.gif' border='0' width='13' height='13' alt='' /> - <a href=rss.php?custom=1>Feed Info</a> - Theme By: <a href=\"http://nikkbu.info\" target=\"_blank\">Nikkbu</a></CENTER>");
//
// *************************************************************************************************************************************
//			PLEASE DO NOT REMOVE THE POWERED BY LINE, SHOW SOME SUPPORT! WE WILL NOT SUPPORT ANYONE WHO HAS THIS LINE EDITED OR REMOVED!
// *************************************************************************************************************************************
//
?>
<!-- END FOOTER CODE -->
<br /><br />
</body>
</html>
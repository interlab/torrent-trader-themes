        <?php if ($site_config["MIDDLENAV"]) {  middleblocks();  } ?>
        
        </TD>
        <!-- END MAIN CONTENT AREA -->
    
        <?php if ($site_config["RIGHTNAV"]) { ?>
        <!-- START RIGHT COLUMN -->
        <TD width='180' id='rcol' vAlign='top'>
        <?php rightblocks(); ?>
        </TD>
        <!-- END RIGHT COLUMN -->
        <?php } ?>
        
        </TR>
    </TABLE>
  </div>
  <!-- END CONTENT CODE -->
  <footer>
    <div id='credits'>
    <table border='0' cellspacing='0' cellpadding='0'>
          <tr>
            <td width='36' height='32'><img src='themes/NB-44-v2/images/credits-l.jpg' width='36' height='32' /></td>
            <td height='32' class='credits'>
            <div>
            <!-- START FOOTER CODE -->
            <?php
            //
            // *************************************************************************************************************************************
            //			PLEASE DO NOT REMOVE THE POWERED BY LINE, SHOW SOME SUPPORT! WE WILL NOT SUPPORT ANYONE WHO HAS THIS LINE EDITED OR REMOVED!
            // *************************************************************************************************************************************
            print ("<CENTER>Powered by <a href=\"http://www.torrenttrader.org\" target=\"_blank\">TorrentTrader v".$site_config["ttversion"]."</a> - ");
            $totaltime = array_sum(explode(" ", microtime())) - $GLOBALS['tstart'];
            printf("Page generated in %f", $totaltime);
            print (" - <a href=rss.php><img src=".$site_config["SITEURL"]."/images/icon_rss.gif height=11 width=11 border=0></a> - <a href=rss.php>RSS Feed</a> - <a href=rss.php?custom=1>Feed Info</a> - Theme By: <a href=\"http://www.wolf-designs.com\" target=\"_blank\">Wolf-Designs</a></CENTER>");
            //
            // *************************************************************************************************************************************
            //			PLEASE DO NOT REMOVE THE POWERED BY LINE, SHOW SOME SUPPORT! WE WILL NOT SUPPORT ANYONE WHO HAS THIS LINE EDITED OR REMOVED!
            // *************************************************************************************************************************************
            
            ?> 
            <!-- END FOOTER CODE -->
            </div>
            </td>
            <td width='36' height='32'><img src='themes/NB-44-v2/images/credits-r.jpg' width='36' height='32' /></td>
          </tr>
    </table>
    </div>
  </footer>
</div>
</BODY>
</HTML>
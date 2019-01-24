            
            <?php if ($site_config["MIDDLENAV"]) {  middleblocks();  } ?>
            
            </td>
            <!-- END MAIN CONTENT AREA -->
        
            <?php if ($site_config["RIGHTNAV"]) { ?>
            <!-- START RIGHT COLUMN -->
            <td id='rcol' vAlign='top' width='180'>
            <?php rightblocks(); ?>
            </td>
            <!-- END RIGHT COLUMN -->
            <?php } ?>
            
            </tr>
        </table>
        <!-- END CONTENT CODE -->

      <footer>
        <!-- START FOOTER CODE -->
        <?php
        //
        // *************************************************************************************************************************************
        //			PLEASE DO NOT REMOVE THE POWERED BY LINE, SHOW SOME SUPPORT! WE WILL NOT SUPPORT ANYONE WHO HAS THIS LINE EDITED OR REMOVED!
        // *************************************************************************************************************************************
        print ("<CENTER>Powered by <a href='http://www.torrenttrader.org' target='_blank'>TorrentTrader v".$site_config["ttversion"]."</a> - ");
        $totaltime = array_sum(explode(" ", microtime())) - $GLOBALS['tstart'];
        printf("Page generated in %f", $totaltime);
        print (" - <a href=rss.php><img src=".$site_config["SITEURL"]."/images/icon_rss.gif height=11 width=11 border=0></a> <a href=rss.php>RSS Feed</a> - <a href=rss.php?custom=1>Feed Info</a> - Theme By: <a href='http://nikkbu.info' target='_blank'>Nikkbu</a></CENTER>");
        //
        // *************************************************************************************************************************************
        //			PLEASE DO NOT REMOVE THE POWERED BY LINE, SHOW SOME SUPPORT! WE WILL NOT SUPPORT ANYONE WHO HAS THIS LINE EDITED OR REMOVED!
        // *************************************************************************************************************************************
        
        ?> 
        <!-- END FOOTER CODE -->
      </footer>
    </div>
  </div>
</div>
</body>
</html>
              <?php
				if ($site_config["MIDDLENAV"]){
					middleblocks();
				} //MIDDLENAV ON/OFF END
			  ?>
              <!-- END MAIN COLUM -->
            </td>
            <!-- START RIGHT COLUMN -->
            <?php if ($site_config["RIGHTNAV"]){ ?>
            <td width='180' valign='top'><?php rightblocks(); ?>
            </td>
            <?php } ?>
            <!-- END RIGHT COLUMN -->
          </tr>
        </table>
        <div id='footer'>
        <!-- START FOOTER CODE -->
        <?php
        //
        // *************************************************************************************************************************************
        //			PLEASE DO NOT REMOVE THE POWERED BY LINE, SHOW SOME SUPPORT! WE WILL NOT SUPPORT ANYONE WHO HAS THIS LINE EDITED OR REMOVED!
        // *************************************************************************************************************************************
        print ("<CENTER>Powered by <a href=\"http://www.torrenttrader.org\" target=\"_blank\">TorrentTrader v".$site_config["ttversion"]."</a> - ");
        $totaltime = array_sum(explode(" ", microtime())) - $GLOBALS['tstart'];
        printf("Page generated in %f", $totaltime);
        print (" - Theme By: <a href=\"http://nikkbu.info\" target=\"_blank\">Nikkbu</a></CENTER>");
        //
        // *************************************************************************************************************************************
        //			PLEASE DO NOT REMOVE THE POWERED BY LINE, SHOW SOME SUPPORT! WE WILL NOT SUPPORT ANYONE WHO HAS THIS LINE EDITED OR REMOVED!
        // *************************************************************************************************************************************
        //
        ?>
        <!-- END FOOTER CODE -->
        </div>
      </div>
      <div class='shad-r'><img src='themes/NB-H20-3c/images/blank.gif' width='9px' height='9px' /></div>
    </div>
    <div class='myTrow'>
      <div class='shad-bl'><img src='themes/NB-H20-3c/images/blank.gif' width='9px' height='9px' /></div>
      <div class='shad-b'><img src='themes/NB-H20-3c/images/blank.gif' width='9px' height='9px' /></div>
      <div class='shad-br'><img src='themes/NB-H20-3c/images/blank.gif' width='9px' height='9px' /></div>
    </div>
  </div>
  <br />
  <div class="fltLeft">
        <?php
        //
        // *************************************************************************************************************************************
        print ("<a href='rss.php'><img src='".$site_config["SITEURL"]."/images/icon_rss.gif' border='0' width='13' height='13' alt='' /> - <a href=rss.php?custom=1>Feed Info</a>");
		// *************************************************************************************************************************************
        //
        ?>
  </div>
</div>
<br />
<br />
<br />
</body>
</html>
<?php ob_end_flush(); ?>

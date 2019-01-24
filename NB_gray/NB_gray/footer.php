<?php function_exists('T_') or die;

			if ($site_config["MIDDLENAV"]){
				middleblocks();
			} //MIDDLENAV ON/OFF END
			?>
          </td>
          <!-- END MAIN COLUM -->
          <?php if ($site_config["RIGHTNAV"]){ ?>
          <!-- START RIGHT COLUMN -->
          <td valign="top" width="170">
		  <?php rightblocks(); ?>
          </td>
          <!-- END RIGHT COLUMN -->
          <?php } ?>
        </tr>
    </table>

	<td width="24" valign="top" background="themes/NB_gray/images/10a_22.jpg"><IMG SRC="themes/NB_gray/images/10a_22.jpg" WIDTH=24 HEIGHT=50 ALT=""></td>
</tr>
</table>
<!--- FIN table de contenu --->      

<!--- DEBUT footer --->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="250" height="88"><img src="themes/NB_gray/images/10a_26.jpg" width="250" height="88" /></td>
<td background="themes/NB_gray/images/10a_28.jpg" width=100% valign=middle>
<CENTER>
 <div class='credits'>
        <?php
        //
        // *************************************************************************************************************************************
        //			PLEASE DO NOT REMOVE THE POWERED BY LINE, SHOW SOME SUPPORT! WE WILL NOT SUPPORT ANYONE WHO HAS THIS LINE EDITED OR REMOVED!
        // *************************************************************************************************************************************
        printf (T_("POWERED_BY_TT")." -|- ", $site_config["ttversion"]);
        $totaltime = array_sum(explode(" ", microtime())) - $GLOBALS['tstart'];
        printf(T_("PAGE_GENERATED_IN"), $totaltime);
        print ("<br /><a href=\"https://www.torrenttrader.org\" target=\"_blank\">www.torrenttrader.org</a> -|- <a href='rss.php'><img src='".$site_config["SITEURL"]."/images/icon_rss.gif' border='0' width='13' height='13' alt='' /></a> -|- <a href='rss.php'>".T_("RSS_FEED")."</a> -|- <a href='rss.php?custom=1'>".T_("FEED_INFO")."</a><br />Theme By: <a href='http://nikkbu.info' target='_blank'>Nikkbu</a>");
        //
        // *************************************************************************************************************************************
        //			PLEASE DO NOT REMOVE THE POWERED BY LINE, SHOW SOME SUPPORT! WE WILL NOT SUPPORT ANYONE WHO HAS THIS LINE EDITED OR REMOVED!
        // *************************************************************************************************************************************
        
        ?>
      </div>
      <!-- END FOOTER CODE -->
</CENTER>
</td>
<td width="250" height="88"><img src="themes/NB_gray/images/10a_30.jpg" width="250" height="88" /></td>
</tr>
</table>
<!--- FIN footer --->
</div>
</BODY>
</HTML>
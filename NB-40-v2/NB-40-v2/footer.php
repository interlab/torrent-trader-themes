	</TD><!-- END MAIN CONTENT AREA -->

<?php if ($site_config["RIGHTNAV"]){ ?>
<!-- RIGHT COLUMN -->
<TD vAlign="top" width="180">
<?php rightblocks();?>
</TD>
<!-- END RIGHT COLUMN -->
<?php } ?>

</TR>
</TABLE></td>
            </tr>
          </table></td>
          <td width="22" background="themes/NB-40-v2/images/NB_body-mr.jpg"><img src="themes/NB-40-v2/images/NB_body-mr.jpg" width="22" height="1" /></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="30" height="62"><img src="themes/NB-40-v2/images/NB_05.jpg" width="30" height="62" /></td>
          <td background="themes/NB-40-v2/images/NB_07.jpg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="left"><table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td valign="bottom" background="themes/NB-40-v2/images/NB_foot-bg.jpg" class="footer">
                        <!-- START FOOTER CODE -->
                        <?php
                        //
                        // *************************************************************************************************************************************
                        //			PLEASE DO NOT REMOVE THE POWERED BY LINE, SHOW SOME SUPPORT! WE WILL NOT SUPPORT ANYONE WHO HAS THIS LINE EDITED OR REMOVED!
                        // *************************************************************************************************************************************
                        print ("<CENTER>Powered by <a href='http://www.torrenttrader.org' target='_blank'>TorrentTrader v".$site_config["ttversion"]."</a> - ");
                        $totaltime = array_sum(explode(" ", microtime())) - $GLOBALS['tstart'];
                        printf("Page generated in %f", $totaltime);
                        print ("<a href=rss.php><img src=".$site_config["SITEURL"]."/images/icon_rss.gif height=11 width=11 border=0></a> <a href=rss.php>RSS Feed</a> - <a href=rss.php?custom=1>Feed Info</a> - Theme By: <a href='http://www.wolf-desigms.com' target='_blank'>Wolf-Designs</a></CENTER>");
                        //
                        // *************************************************************************************************************************************
                        //			PLEASE DO NOT REMOVE THE POWERED BY LINE, SHOW SOME SUPPORT! WE WILL NOT SUPPORT ANYONE WHO HAS THIS LINE EDITED OR REMOVED!
                        // *************************************************************************************************************************************
                        
                        ?> 
                        <!-- END FOOTER CODE -->
                        </td>
                  <td width="34" height="30"><img src="themes/NB-40-v2/images/NB_foot-r.jpg" width="34" height="30" /></td>
                </tr>
              </table></td>
              <td width="74" height="30"><img src="themes/NB-40-v2/images/NB_top.jpg" width="74" height="30" id="Image1" onclick="MM_goToURL('top','');return document.MM_returnValue" onmouseover="MM_swapImage('Image1','','themes/NB-40-v2/images/NB_toph.jpg',1)" onmouseout="MM_swapImgRestore()" /></td>
            </tr>
          </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="196" height="32"><img src="themes/NB-40-v2/images/NB_06.jpg" width="196" height="32" /></td>
                <td>&nbsp;</td>
                <td width="74" height="32"><img src="themes/NB-40-v2/images/NB_08.jpg" width="74" height="32" /></td>
              </tr>
            </table></td>
          <td width="54" height="62"><img src="themes/NB-40-v2/images/NB_09.jpg" width="54" height="62" /></td>
        </tr>
    </table></td>
  </tr>
</table>
</BODY>
</HTML>
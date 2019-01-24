

						  <?php
                            if ($site_config["MIDDLENAV"]){
                                middleblocks();
                            } //MIDDLENAV ON/OFF END
                          ?>
                          </TD>
                          <!-- END MAIN CONTENT AREA -->
                          
                          <?php if ($site_config["RIGHTNAV"]) { ?>
                          <!-- START RIGHT COLUMN -->
                          <TD id='rcol' vAlign='top' width="180"><?php rightblocks(); ?>
                          </TD>
                          <!-- END RIGHT COLUMN -->
                          <?php } ?>
                          
                        </TR>
                    </TABLE>
                    <!-- END CONTENT CODE -->
                  </td>
                </tr>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center" valign="middle" bgcolor="#1E1E1E" id="footer"><!-- START FOOTER CODE -->
                  <?php
					//
					// *************************************************************************************************************************************
					//			PLEASE DO NOT REMOVE THE POWERED BY LINE, SHOW SOME SUPPORT! WE WILL NOT SUPPORT ANYONE WHO HAS THIS LINE EDITED OR REMOVED!
					// *************************************************************************************************************************************
					print ("<CENTER>Powered by <a href='http://www.torrenttrader.org' target='_blank'>TorrentTrader v".$site_config["ttversion"]."</a> - ");
					$totaltime = array_sum(explode(" ", microtime())) - $GLOBALS['tstart'];
					printf("Page generated in %f", $totaltime);
					print (" - <a href=rss.php><img src=".$site_config["SITEURL"]."/images/icon_rss.gif height=11 width=11 border=0></a> <a href=rss.php>RSS Feed</a> - <a href=rss.php?custom=1>Feed Info</a> - Theme By: <a href='http://wolf-designs.com' target='_blank'>Wolf-Designs</a></CENTER>");
					//
					// *************************************************************************************************************************************
					//			PLEASE DO NOT REMOVE THE POWERED BY LINE, SHOW SOME SUPPORT! WE WILL NOT SUPPORT ANYONE WHO HAS THIS LINE EDITED OR REMOVED!
					// *************************************************************************************************************************************
					
					?>
                  <!-- END FOOTER CODE -->
                </td>
              </tr>
            </table></td>
          <td width="6" background="themes/NB-43-v2/images/NB-body-r.gif"><img src="themes/NB-43-v2/images/blank.gif" width="6" height="2" /></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="7" height="7"><img src="themes/NB-43-v2/images/NB-body-bl.gif" width="7" height="7" /></td>
          <td height="7" background="themes/NB-43-v2/images/NB-body-bm.gif"><img src="themes/NB-43-v2/images/blank.gif" width="100%" height="7" /></td>
          <td width="7" height="7" background="themes/NB-43-v2/images/NB-body-br.gif"><img src="themes/NB-43-v2/images/blank.gif" width="7" height="7" /></td>
        </tr>
      </table></td>
    <td id="NB-right" width="8" valign="top"><img src="themes/NB-43-v2/images/blank.gif" width="8" height="100" /></td>
  </tr>
</table>
<br>
<br>
</body>
</html>


<!--START OF FOOTER.PHP -->
                       </td>
                      <td width="19" valign="top" background="themes/NB-wii/images/NB-wii_21.gif"><img src="themes/NB-wii/images/NB-wii_15.gif" width="19" height="264" /></td>
                    </tr>
                  </table></td>
                  </tr>
                <tr>
                  <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="20" height="50"><img src="themes/NB-wii/images/NB-wii_20.gif" width="20" height="50" /></td>
              <td class="subnav" align="center" background="themes/NB-wii/images/NB-wii_25.gif">
<CENTER>
<?
// Variables for Start Time 
$mtime = microtime(); // Get Current Time 
$mtime = explode (" ", $mtime); // Split Seconds and Microseconds   
$mtime = $mtime[1] + $mtime[0];  // Create a single value for start time 
$tstart = $mtime; // Start time 

// Variables for Start Time 
$mtime = microtime(); 
$mtime = explode (" ", $mtime); 
$mtime = $mtime[1] + $mtime[0]; 
$tend = $mtime; // End time 
$totaltime = ($tend - $tstart); 
printf ("Page Generated in %f seconds!", $totaltime); 
echo " - Powered by TorrentTrader Classic v{$GLOBALS['ttversion']} - <a href=http://www.torrenttrader.org target=_blank>www.torrenttrader.org</a> - Theme By: <a href=http://nikkbu.info target=_blank>Nikkbu</a>";
//
// *******************************************************************************
//			PLEASE DO NOT REMOVE THE POWERED BY LINE, SHOW SOME SUPPORT!
// *******************************************************************************
?>
</CENTER>
              </td>
              <td width="58" height="50"><img src="themes/NB-wii/images/NB-wii_26.gif" width="58" height="50" /></td>
            </tr>
          </table></td>
                  </tr>
              </table></td>
            </tr>
          </table></td>
        </tr>
    </table>
      </td>
  </tr>
</table>
</BODY>
</HTML>
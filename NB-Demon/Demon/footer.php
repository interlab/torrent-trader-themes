</td>
<? if ($site_config["RIGHTNAV"]){ ?>
<td width="180" valign="top">
<br>
<?rightblocks();?>
</td>
<?}?>
       </tr>
        </table>
       </td>
       </tr>
       </table>
       </td>
            <td width="8" valign="top" background="themes/Demon/images/11.gif"><IMG SRC="themes/Demon/images/11.gif" WIDTH=8 HEIGHT=8 ALT=""></td>
       </tr>
       </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td height="50" background="themes/Demon/images/13.gif"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td width="28" height="50"><img src="themes/Demon/images/12.gif" width="28" height="50" /></td>
        <td>&nbsp;</td>
            <td width="28" height="50"><img src="themes/Demon/images/14.gif" width="28" height="50" /></td>
        </tr>
        </table>
        </td>
        </tr>
        <tr>
           <td height="81">
           <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
           <td width="50" height="81"><img src="themes/Demon/images/15.gif" width="50" height="81" /></td>
           <td align="center" valign="top" background="themes/Demon/images/16.gif">
<CENTER>
<?
//
// *************************************************************************************************************************************
//			PLEASE DO NOT REMOVE THE POWERED BY LINE, SHOW SOME SUPPORT! WE WILL NOT SUPPORT ANYONE WHO HAS THIS LINE EDITED OR REMOVED!
// *************************************************************************************************************************************
print ("<CENTER><BR>Powered by - Evolution v".$site_config["evolution"]."<br>");
$totaltime = array_sum(explode(" ", microtime())) - $GLOBALS['tstart'];
printf("Page generated in %f", $totaltime);
print ("<br><a href='rss.php'><img src='".$site_config["SITEURL"]."/images/icon_rss.gif' border='0' width='13' height='13' alt='' /> - <a href=rss.php?custom=1>Feed Info</a> - Firefox By: <a <a href='https://www.mozilla.com/en-US/firefox/' title='Get Firefox - The Browser, Reloaded.'>With 1280*1024 in Resolution</a></CENTER>");
//
// *************************************************************************************************************************************
//			PLEASE DO NOT REMOVE THE POWERED BY LINE, SHOW SOME SUPPORT! WE WILL NOT SUPPORT ANYONE WHO HAS THIS LINE EDITED OR REMOVED!
// *************************************************************************************************************************************
?>
</CENTER>
         </td>
              <td width="50" height="81"><img src="themes/Demon/images/17.gif" width="50" height="81" /></td>
         </tr>
         </table>
         </td>
         </tr>
         </table>
         </body>
         </HTML>
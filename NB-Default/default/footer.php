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
echo "<BR>Powered by TorrentTrader Classic v1.06<br><a href=http://www.torrenttrader.org target=_blank>www.torrenttrader.org</a>";
echo "<BR>Theme By <a href=http://www.nikkbu.com target=_blank><B>Nikkbu</B></a>";
//
// *******************************************************************************
//                    Do Not Remove The "Theme By Nikkbu"
// *******************************************************************************
//			PLEASE DO NOT REMOVE THE POWERED BY LINE, SHOW SOME SUPPORT!
// *******************************************************************************
//
?>
</CENTER>

</TD>
	</TR>
	</TABLE><br><br>
</td>
  </tr>
</table>
	</BODY></HTML>
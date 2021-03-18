</td>
<!--- FIN colonne de droite --->
</tr>
</table>
</div>
</td>
<td width="24" valign="top" background="themes/NB-clan/images/page_10.jpg"><IMG SRC="themes/NB-clan/images/page_10.jpg" WIDTH=24 HEIGHT=11 ALT=""></td>
</tr>
</table>
<!--- FIN table de contenu --->      

<!--- DEBUT footer --->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="24" height="40"><IMG SRC="themes/NB-clan/images/page_15.jpg" WIDTH=24 HEIGHT=40 ALT=""></td>
<td height="40" valign=middle background="themes/NB-clan/images/page_16.jpg">
<CENTER>
  <p><?
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
echo "<BR>Powered by <a href=http://www.torrenttrader.com target=_blank>TorrentTrader Classic Beta 4</a><br>&nbsp;";
?>
    </p>
  </CENTER></td>
<td width="24" height="40"><IMG SRC="themes/NB-clan/images/page_18.jpg" WIDTH=24 HEIGHT=40 ALT=""></td>
</tr>
</table>
<!--- FIN footer --->
</div>
</BODY>
</HTML>
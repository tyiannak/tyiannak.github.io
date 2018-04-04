<HTML>
<HEAD>
	<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=windows-1252">
	<TITLE>Theodoros Giannakopoulos - Personal Web Page</TITLE>
	<META NAME="CREATED" CONTENT="20060626;16102164">
	<META NAME="CHANGED" CONTENT="20060626;16123251">		
	<link rel="stylesheet" href="menu.css">
	<style type="text/css">
	<!--
	body { font-size: 12px; font-family: Arial, Helvetica, sans-serif; margin-top: 20px; margin-left: 20px }
	td { font-size: 15px; font-family: Arial, Helvetica, sans-serif }
	h2 { font-size: 17px; font-family: Arial, Helvetica, sans-serif ; line-height: 12px }
	.small { font-size: 10px; font-family: Arial, Helvetica, sans-serif; line-height: 14px }
.style1 {
	color: #009900;
	font-weight: bold;
}
.style2 {color: #009900}
.style3 {
	color: #006600;
	font-weight: bold;
}
.style5 {color: #006633}
	-->
	</style>
</HEAD>
<BODY LANG="el-GR" BGCOLOR="#d0dfd5" DIR="LTR">
<table width="90%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
    <td align="center"> <font size = 5 color = "#118833" face = "Verdana">Theodoros Giannakopoulos: Personal Web Page <br>
        <a href="Software.html"><font color="#118833">SOFTWARE</font></a> / <strong>Subtitle-based film rating recognition Demo</strong></font></td>	
	<td>								
	</td>
</tr>

</table>
<HR>

<!--<HR>-->
<TABLE width="90%" CELLPADDING=2 CELLSPACING=2 align="center">
  <TR VALIGN=TOP> 
    <TD WIDTH=140> 
      <script language="JavaScript" src="menu.js"></script>
      <script language="JavaScript" src="menu_items.js"></script>
      <script language="JavaScript" src="menu_tpl.js"></script>
      <script language="JavaScript">
		
			new menu (MENU_ITEMS, MENU_POS);
			</script>

    </TD>


<TD bgcolor="#f0fff5"> 

<p><font color="005522" face="Verdana"><b>General Information:</font</b>

<div align="left">
  <table border="0" align="center">
    <tr bgcolor="#eafff5">
      <td width="147"><span class="style1">Name</span></td>
      <td width="335"><span class="style2">Subtitle-based film rating recognition</span></td>
    </tr>
    <tr bgcolor="#e8f5ef">
      <td><span class="style2"><strong>Version</strong></span></td>
      <td><span class="style2">1.0</span></td>
    </tr>
    <tr bgcolor="#eafff5">
      <td><span class="style2"><strong>Release Date</strong></span></td>
      <td><span class="style2">March 2010</span></td>
    </tr>
    <tr bgcolor="#e8f5ef">
      <td><span class="style2"><strong>Implemented by</strong></span></td>
      <td><span class="style2">Theodoros Giannakopoulos</span></td>
    </tr>
    <tr bgcolor="#eafff5">
      <td><span class="style2"><strong>Method designed by</strong></span></td>
      <td><span class="style2">Theodoros Giannakopoulos, Aggelos Pikrakis, Sergios Theodoridis</span></td>
    </tr>
    <tr bgcolor="#e8f5ef">
      <td><span class="style2"><strong>Institution</strong></span></td>
      <td><span class="style2">Dept of Informatics and Telecommunications, University of Athens, Greece</span></td>
    </tr>
    <tr bgcolor="#eafff5">
      <td><span class="style3">Contact</span></td>
      <td><a href="mailto:tyiannak@di.uoa.gr">tyiannak@di.uoa.gr</a></td>
    </tr>
    <tr bgcolor="#e8f5ef">
      <td><span class="style3">Screenshot</span></td>
      <td><a href="subtitlesScreenShot.jpg" target = "_blank"><img src="subtitlesScreenShot_S.jpg" width = "150"></a></td>
    </tr>

  </table>
  
</div>

<P><font color="005522" face="Verdana"><em><strong>Subtitle-based film rating demo</em></strong> can be used for recognising a film's rating, according to the MPAA rating system, based on text analysis algorithms, applied on the film's subtitles. The current version of the demo, works only on English subtitles, while the supported file format is SRT.  
The method has been submited for publication in the 
<a href = "http://www.elsevier.com/locate/infoproman" target = "_blank"><font color = "225599">Journal of Information Processing & Management - Elsevier</font></a>.
</font>
<font color="005522" face="Verdana">You can download the executable of the Demo <a href="./Software/subtitleDemo.zip"><strong><font color = "#225599">here</font></strong></a>.

<P><font color="33aa77" face="Verdana">IMPORTANT: If you do not have Matlab v. 2007B installed on your PC, you will have to install the Matlab Component Runtime
 <a href = "http://cgi.di.uoa.gr/~sp_mu/downloads/MCRInstaller.exe"><font color = "#004466">(here)</font></a>. 
</font>
<p>
<hr>
<p>

<p> <font color="005522" face="Verdana">For testing the demo, you can download a small set of subtitle files <a href="./Software/subtitlesExamples.zip"><strong><font color = "#225599">here</font></strong></a>.
The following table lists the names of the movies, along with the classification result (using the above demo) and the true labels, according to the MPAA rating:
</fOnt>
<table align="center" border="0">
<tr bgcolor="#eafff0"><td><b><font color = "#229944" size = "2">MOVIE		<td><font color = "#229944" size = "2"><b>Classified 	<td><b><font color = "#229944" size = "2">True Label </tr>
<tr bgcolor="#eafff0"><td><font color = "#229944" size = "2">RocknRolla (2008)					<td><font color = "#229944" size = "2">R		<td><font color = "#229944" size = "2">R</tr>
<tr bgcolor="#eafff0"><td><font color = "#229944" size = "2">The Tenant (1976)					<td><font color = "#229944" size = "2">R		<td><font color = "#229944" size = "2">R</tr>
<tr bgcolor="#eafff0"><td><font color = "#229944" size = "2">Gangs of New York (2002)				<td><font color = "#229944" size = "2">R		<td><font color = "#229944" size = "2">R</tr>
<tr bgcolor="#eafff0"><td><font color = "#229944" size = "2">WALL·E (2008) 						<td><font color = "#229944" size = "2">G		<td><font color = "#229944" size = "2">G</tr>
<tr bgcolor="#eafff0"><td><font color = "#229944" size = "2">Iron Man (2008)						<td><font color = "#229944" size = "2">PG		<td><font color = "#229944" size = "2">PG13</tr>
<tr bgcolor="#eafff0"><td><font color = "#229944" size = "2">The Curious Case of Benjamin Button (2008)	<td><font color = "#229944" size = "2">PG13	<td><font color = "#229944" size = "2">PG13</tr>
<tr bgcolor="#eafff0"><td><font color = "#229944" size = "2">Kung-Fu Panda (2008)					<td><font color = "#229944" size = "2">G		<td><font color = "#229944" size = "2">PG</tr>
<tr bgcolor="#eafff0"><td><font color = "#229944" size = "2">The Chronicles of Narnia: Prince Caspian (2008)<td><font color = "#229944" size = "2">PG		<td><font color = "#229944" size = "2">PG</tr>
</table>


<p>
<P><font face="Verdana"></font><font color="005522" face="Verdana">For any problems with the demo or ideas - suggestions please contact me at <a href="mailto:tyiannak@di.uoa.gr">tyiannak@di.uoa.gr.</a></font>
<P><font color="005522" face="Verdana"><br>
   
<p> <font size="2"><span class="style5"><em>This demo version is provided  only for educational purposes without any warranty.  			</em><br>
      <em>Your feedback will help us improve the system in future versions.</em></span></font></p>

 <?php 

    /////////////////////////////////////////////////
   // get user login info and insert in data base://
   /////////////////////////////////////////////////

   // A. GET USER INFO:
   $remoteHost = $_SERVER['REMOTE_HOST'];
   $remoteAddress = $_SERVER['REMOTE_ADDR'];
   $country = file_get_contents('http://api.hostip.info/country.php?ip='.$_SERVER['REMOTE_ADDR']);
   $date = date("Y-m-d");
   $time = date("H.i");

   // B. WRITE DATA IN FILE:
   if ($file = fopen("userInfoSubtitles.log","a"))
   {
      fputs($file , "$date \t $time \t $remoteAddress \t $country\n");
      fclose($file);
   }
   $lines = file ('userInfoSubtitles.log');
   $num_lines = count ($lines);
   printf("<br><font color=\"#44cc88\">Total Visits: $num_lines<br></font>");
?>
  
  
  </font>
</TABLE>
<P><BR><BR>
<P><BR><BR>
<P><BR><BR>
<P><BR><BR>
<P><BR><BR>



</P>
</BODY>
</HTML>

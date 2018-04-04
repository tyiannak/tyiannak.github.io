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
.style3 {color: #009900}
.style1 {	color: #009900;
	font-weight: bold;
}
.style6 {	color: #006600;
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
        <a href="Software.html"><font color="#118833">SOFTWARE</font></a> / <strong>MULTI-CLASS AUDIO SEGMENTATION TOOL</strong></font></td>	
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

<P><font color="005522" face="Verdana"><em><strong>MultiClass Audio Segmentation  V.1.0 is a DEMO tool for automatic segmentation and classification of audio streams</strong></em>.</font>

<div align="left">
  <table width="498" border="1" align="center">
    <tr bgcolor="#B4FADC">
      <td width="147"><span class="style1">Name</span></td>
      <td width="335"><span class="style3">MultiClass Audio Segmentation Demo</span></td>
    </tr>
    <tr bgcolor="#BEDCFA">
      <td><span class="style3"><strong>Version</strong></span></td>
      <td><span class="style3">1.0</span></td>
    </tr>
    <tr bgcolor="#B4FADC">
      <td><span class="style3"><strong>Release Date</strong></span></td>
      <td><span class="style3">September 2007</span></td>
    </tr>
    <tr bgcolor="#BEDCFA">
      <td><span class="style3"><strong>Implemented by</strong></span></td>
      <td><span class="style3">Theodoros Giannakopoulos</span></td>
    </tr>
    <tr bgcolor="#B4FADC">
      <td><span class="style3"><strong>Institution</strong></span></td>
      <td><span class="style3">Dept of Informatics and Telecommunications, University of Athens, Greece</span></td>
    </tr>
    <tr bgcolor="#BEDCFA">
      <td><span class="style6">Contact</span></td>
      <td><a href="mailto:tyiannak@di.uoa.gr">tyiannak@di.uoa.gr</a></td>
    </tr>
  </table>
  <p> <font size="2"><span class="style5"><em>* This demo version is provided  only for educational purposes without any warranty. </em><br>
          <em>** The scientific background behind the provided interface has been studied and designed by <strong>Thedoros Giannakopoulos</strong>, <strong>Dr. Aggelos Pikrakis</strong> and <strong>Prof. Sergions Theodoridis</strong>.</em></span></font></p>
</div>
<P><font color="005522" face="Verdana"><strong>General:</strong> The demo provides a user-friendly interface through which you can load audio streams stored in .wav files and then run an algorithm that breaks the audio streams into non overlapping segments and classifies each segment into one of the <strong>eight audio classes</strong>: Music, Speech, Others1 (low enviromental sounds: wind, rain etc), Others2 (sounds with abrupt changes, like a door closing), Others3 (louder sounds, mainly machines and cars), Gunshots, Fights and Screams. The definition of those classes has been chosen so that the <em>content met in movies is described in detail</em>. Furthermore, we have focused on defining audio classes of violent content, so that the system can also be used as a detector of violence in audio information. Such tools can be used in systems for protecting sensitive groups of the population (e.g. children) from violent multimedia content. </font>
<P><font color="005522" face="Verdana">Source code of the provided demo is not yet provided in public.</font>
<P><font color="005522" face="Verdana"><strong>Downloads:</strong> You can <strong>download the MultiClass Segmentation</strong> <a href="./Software/MultiClassSegmentation.zip"><strong>here.</strong></a>  If you do not have <em>Matlab v. 7.0.0 (R)</em> installed on your Pc, you will have to download the <strong><em>Matlab   				Component Runtime</em> installer</strong>   <a href="http://www.di.uoa.gr/~sp_mu/downloads/MCRInstaller.exe">here</a> . After extracting the compressed folder, run the Gui_segmentation.exe. Finally, we provide a <strong>wav file</strong> for testing the method, <strong>and</strong> the respective .mat file with <strong>the true class labels <a href="example.zip">here</a></strong>.</font>
<P><font color="005522" face="Verdana"><strong>Instructions:</strong> The first time you will execute that file, you will have to wait for some seconds, until the .ctf file will produce the necessary binary Matlab files. In the following figure a screenshot of the provided interface is presented. Click on the image in order to view an enlarged version AND a brief <strong><a href="MultiClassUserGuide.html">user guide</a></strong> of the GUI.</font>
<P align="center"><a href="MultiClassUserGuide.html"><img src="Software/SScreenshot1.jpg" alt="Screenshot" width="466" height="273"></a>
<P align="center"><em><font size = "2" 
color="005522" face="Verdana"><strong>Figure:</strong> Screenshot of Multiclass Audio Segmentation Demo</font></em>

<P><font color="005522" face="Verdana"><strong>Algorithm:</strong> The algorithm behind the provided interface is partly described in  "<em>A MULTI-CLASS AUDIO CLASSIFICATION METHOD WITH RESPECT TO VIOLENT CONTENT IN MOVIES USING BAYESIAN NETWORKS</em>" 2007 IEEE International Workshop on Multimedia Signal Processing, by Theodoros Giannakopoulos, Aggelos Pikrakis and Sergios Theodoridis. There, a multiclass <strong>classification</strong> scheme for audio segments has been proposed, based on Bayesian Networks. In the current version of the DEMO, a very simple algorithm that uses fixed overlapping long term windows, has been implemented for <strong>semgenting</strong> tha audio stream. The overall performance of the proposed segmentation scheme is above 60% when eight classes are used.</font>
<div align="left"></div>
<P><font face="Verdana"></font><font color="005522" face="Verdana">For any problems with the demo or ideas - suggestions please contact me at <a href="mailto:tyiannak@di.uoa.gr">tyiannak@di.uoa.gr.</a></font>
<P><font color="005522" face="Verdana"></font>
<P><span class="style3"><font size="2" face="Verdana"><BR>
  
  </font></span><font size="2" face="Verdana"></font><font color="005522" size="2" face="Verdana"><br>
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
   if ($file = fopen("userInfoMulti.log","a"))
   {
      fputs($file , "$date \t $time \t $remoteAddress \t $country\n");
      fclose($file);
   }
   $lines = file ('userInfoMulti.log');
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
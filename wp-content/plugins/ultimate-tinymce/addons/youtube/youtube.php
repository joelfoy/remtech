<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>{#youtube_dlg.title}</title>
  <?php
	include ('../../includes/tinymce_addon_scripts.php');
	?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!--
  <script type="text/javascript" src="../../tinymce/tiny_mce_popup.js"></script>
  -->
  <script type="text/javascript" src="js/dialog.js"></script>
  <link rel="stylesheet" type="text/css" href="css/youtube.css" />
</head>
<body>
<div class="y_logo_contener">
	<img src="img/Google-YouTube-128.png" width="128" height="128" alt="Youtube" />
</div>
<div class="yinstr">
	<p>{#youtube_dlg.instr}</p>
</div>
<form onSubmit="YouTubeDialog.insert();return false;" action="#">
 <div class="mceActionPanel">
 <table>
 <tr>
 	<td><strong>{#youtube_dlg.ytID}</strong></td>
 </tr>
 <tr>
 	<td><input id="youtubeID" name="youtubeID" type="text" class="text" size="40" value="" /></td>
 </tr>
 <tr>
 	<td>
 		<strong>{#youtube_dlg.ytW}</strong> <input id="youtubeWidth" name="youtubeWidth" type="text" class="text" size="3" value="350" />&nbsp;
 		<strong>{#youtube_dlg.ytH}</strong> <input id="youtubeHeight" name="youtubeHeight" type="text" class="text" size="3" value="300" /><br /><br /><br /><br />
 	</td>
</tr>
 </table>
 <table>
 <tr>
  	<td>
  		<table class="youtube-table-child">
  			<tr>
  				<td><strong>{#youtube_dlg.relvideo}</strong></td>
			 	<td><strong>{#youtube_dlg.hd}</strong></td>
			 	<td><strong>{#youtube_dlg.autoplay}</strong></td>
			 </tr>
			 <tr>
			 	<td>
					<select name="youtubeREL" id="youtubeREL" style="width: 80px;">
					  <option value="0">{#youtube_dlg.yes}</option>
					  <option value="1">{#youtube_dlg.no}</option>
					</select>
				</td>
				<td>
					<select name="youtubeHD" id="youtubeHD" style="width: 80px;">
						<option value="0">{#youtube_dlg.no}</option>
						<option value="1">{#youtube_dlg.yes}</option>
					</select>
				</td>
				<td>
					<select name="youtubeAutoplay" id="youtubeAutoplay" style="width: 80px;">
						<option value="0">{#youtube_dlg.no}</option>
						<option value="1">{#youtube_dlg.yes}</option>
					</select>
				</td>
                </tr>
                <tr class="space"></tr>
                <tr>
                <td><strong>{#youtube_dlg.showinfo}</strong></td>
                <td><strong>{#youtube_dlg.autohide}</strong></td>
            	</tr>
                <tr>
                <td>
					<select name="youtubeshowinfo" id="youtubeshowinfo" style="width: 80px;">
					  <option value="0">{#youtube_dlg.yes}</option>
					  <option value="1">{#youtube_dlg.no}</option>
					</select>
				</td>
                <td>
					<select name="youtubeautohide" id="youtubeautohide" style="width: 80px;">
					  <option value="0">{#youtube_dlg.no}</option>
					  <option value="1">{#youtube_dlg.yes}</option>
					</select>
				</td>
                </tr>
			 </tr>
  		</table>
  	</td>
 </tr>
 </table>
  </div>
  <div class="mceActionPanel">
    <div style="float:left;padding-top:5px">
      <input type="button" id="insert" name="insert" value="{#insert}" onClick="YouTubeDialog.insert();" />&nbsp;
      <input type="button" id="cancel" name="cancel" value="{#cancel}" onClick="tinyMCEPopup.close();" />
    </div>
  </div>
</form>
</body>
</html>
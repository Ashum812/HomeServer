<?php 
	$status = "Select file";
   if(isset($_FILES['file'])){
      $errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size = $_FILES['file']['size'];
      $file_tmp = $_FILES['file']['tmp_name'];
      $file_type = $_FILES['file']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
      
      if (isset($_POST['submit']) and ! empty($_POST['submit'])) {
    	if (isset($_POST['cat'])) {
        $radio_input = $_POST['cat'];
        }
    	}
     	     
      $expensions= array("jpeg","jpg","png","doc","docx","mp3","mp4","3gp","flv","pdf","txt", "amr", "mkv", "zip", "wmv", "avi", "tar.gz", "rar");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG/ PNG/ doc/ mp3/ wmv/ mp4/ 3gp/ flv/ mkv/ avi/ pdf/ txt/ rar/ zip/ tar.gz file. if you are uploading executable file, compress it first.";
             
      }
      
      if($file_size > 2097152000 || $file_size == 0 ) {
         $errors[]='File size must be Max 2 GB';
      }
      
      if(empty($errors)==true) {
      	$status = "uploading...";
      	if ($radio_input=="Movie")
         move_uploaded_file($file_tmp,"/var/www/html/Uploads/Movie/".$file_name);
         if ($radio_input=="Doc")
         move_uploaded_file($file_tmp,"/var/www/html/Uploads/Doc/".$file_name);
         if ($radio_input=="Others")
         move_uploaded_file($file_tmp,"/var/www/html/Uploads/Others/".$file_name);
			$status = "uploaded";         
      }else{
         print_r($errors);
      }
   }


		$displaysize = display_filesize($file_size);
		function display_filesize($file_size){
   
   		 if(is_numeric($file_size)){
   		 $decr = 1024; $step = 0;
    		$prefix = array('Byte','KB','MB','GB','TB','PB');
       
    		while(($file_size / $decr) > 0.9){
      		  $file_size = $file_size / $decr;
     			  $step++;
   		 }
    		return round($file_size,2).' '.$prefix[$step];
   		 } else {

   		 return ' ';
   		 }
   
		}
		
?>

<!DOCTYPE html>
<html>
<head>
<title>Upload</title>
<link href="/OtherStuff/files/list.css" rel="stylesheet" type="text/css" media="all" />
<link href="/OtherStuff/files/ddmenu.css" rel="stylesheet" type="text/css" />
<script src="/OtherStuff/files/ddmenu.js" type="text/javascript"></script>

</head>
<body>

<div >
<h1><center><font style="color:rgba(34, 200, 253, .7)">Home Server</font></center></h1>
</div>
<hr>
<!-- navigationbar start-->
<nav id="ddmenu">
    
    <ul>
    
    	<li class="no-sub"><a class="top-heading" href="/index.php">Home</a></li>
    	      
        <li class="full-width">
            <span class="top-heading">Latest</span>
            <i class="caret"></i>
            <div class="dropdown">
                <div class="dd-inner">
                    <ul class="column">
                        <li><h3><a href="/Movies">Movies</a></h3></li>
                        <li><a href="/Movies/A Flying Jatt (2016) Hindi 720p DesiScr x264 AAC ESubs - Downloadhub">A Flying Jatt (2016) Hindi 720p </a></li>
                        <li><a href="/Movies/The Nice Guys (2016) [YTS-AG]">The Nice Guys (2016) [YTS-AG]</a></li>
                        <li><h3><a href="/Videos">Videos</a></h3></li>
                        <li><a href="/Videos/MrRobot/Mr Robot S02E06.mkv">Mr Robot S02E06</a></li>
                        <li><a href="/Videos/MrRobot/Mr Robot S02E05.mp4">Mr Robot S02E05</a></li>
                    </ul>
                    <ul class="column">
                        <li><h3><a href="/Uploads">Uploads</a></h3></li>
                        <li><a href="/Uploads/Movie/Wreck It Ralph (2012) 720p_BRrip_RETAIL_scOrp_sujaidr.mkv">Wreck It Ralph (2012) 720p</a></li>
                        <li><a href="/Uploads/Movie/Ek Aur Sawaal (2015) Hindi Dubbed 720p HDRip x264 AAC - Team Telly [Exclusive].mkv">Ek Aur Sawaal (2015)</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                    <ul class="column mayHide">
                        <li><br /><div class="box" class="equalmargin"><img src="/OtherStuff/images/Icons/Iconlatest.jpg" width=150px /></div></li>
                    </ul>
                </div>
            </div>
        </li>
        
        <li class="full-width">
            <span class="top-heading">Sitemap</span>
            <i class="caret"></i>
            <div class="dropdown">
                <div class="dd-inner">
                    <ul class="column">
                        <li><h3><a href="/Movies">Movies</a></h3></li>
                        <li><h3><a href="/Videos">Videos</a></h3></li>
                        <li><a href="/Videos/MrRobot">Mr. Robot</a></li>
                        <li><a href="/Videos/Songs">Songs</a></li>
                        <li><a href="/Videos/TV Series">TV Series</a></li>
                        <li><h3><a href="/Softwares">Softwares</a></h3></li>
                    </ul>
                    <ul class="column">
                        <li><h3><a href="/Uploads">Uploads</a></h3></li>
                        <li><a href="/Uploads/Doc">Docs</a></li>
                        <li><a href="/Uploads/Movie">Movies</a></li>
                        <li><a href="/Uploads/Other">Others</a></li>
                    </ul>
                    <ul class="column mayHide">
                        <li><br /><div class="box" class="equalmargin"><img src="/OtherStuff/images/Icons/Iconsitemap.png" width=150px /></div></li>
                    </ul>
                </div>
            </div>
        </li>
                
        <li class="no-sub"><a class="top-heading" href="/upload.php">Upload</a></li>
        
    </ul>
</nav>
<!-- navigation bar end-->

<hr>
</br>
</br>

<form action = "" method = "POST" enctype = "multipart/form-data" style="margin:auto auto">
<fieldset style="background:rgba(65,126,129,.2); margin:0 auto; width:50% ; border-radius:10px">
<fieldset style="background:rgba(241,241,241,.2); margin:0 auto; width:90% ; border-radius:10px">
	<legend><span style="font-size:2em;background:#ffffff;border-radius:10px;border:1px solid rgba(0,0,0,.2);" class="title">
					&#160; Upload &#160;
			  </span>
	</legend>
<div >
<table style="background:rgba(241,241,241,.0); margin:auto auto;">
	<tr><td ><label><font size="4" color=rgba(210,210,210,.7)>Browse file to upload(Max. 2GB)</font></label></td><tr><tr><hr></tr>
	<td><input type='file' name="file" style="width:95%;margin:0 auto;"></td></tr>
	<tr><td><hr></td></tr>
	<tr><td>
  <input type="radio" name="cat" value="Movie" checked> Movie 
  <input type="radio" name="cat" value="Doc"> Doc 
  <input type="radio" name="cat" value="Others"> Others 
	</td></tr>
	<tr><td><hr></td></tr>
	<tr><td><input type = "submit" name="submit" value="Upload" style="width:95%;margin:0 auto;"/></td></tr>
	<tr><td><hr></td></tr>
	<tr><td><div>
	<ul>
            <li>Sent file: <?php echo $_FILES['file']['name'];  ?>
            <li>File size: <?php echo $displaysize  ?>
            <li>File type: <?php echo $_FILES['file']['type'];  ?>
            <li>Status   : <?php echo $status; ?>
         </ul>	
   </div></td></tr>
</table>
</div>
<br>
</fieldset>
</fieldset>
</form>

</body>
</html>

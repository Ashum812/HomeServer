<?php
$count = 0;
$thelist[500];
 if ($handle = opendir('.')) {
   while (false !== ($file = readdir($handle)))
      {		#IndexIgnore temp-files,hidden-files 
          if ($file != "." && $file != ".."  && (strpos($file,'~') == 0) && !(strpos($file,'.') === 0) )
	  {	$count++;
          	$thelist[$count] .= '<a href="'.$file.'">'.$file.'</a>';
          }
       }
  closedir($handle);
  }       
?>


<!DOCTYPE html>
<html>

<head>
<title>HomeSever</title>
<link href="/OtherStuff/files/list.css" rel="stylesheet" type="text/css" media="all" />
<link href="/OtherStuff/files/ddmenu.css" rel="stylesheet" type="text/css" />
<script src="/OtherStuff/files/ddmenu.js" type="text/javascript"></script>
<script type="text/javascript">
var w = window.innerWidth;
if(w <= 900){
window.location="mob.php";

}
</script>
</head>

<body>
<div bgcolor=red>
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
                        <li><a href="/Movies/Undisputed3">Undisputed-3 720p </a></li>
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
                        <li><a href="/Uploads/Others">Others</a></li>
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



<?php
$i = $count;
#if($screen == 'mobile')
#$folderInARow = 2;
#else 
$folderInARow = 4;
$j = $folderInARow;
$flag=1;
echo "<div><center><div class=\"equalmargin\">";
while($i){
#display folders
if($j == $folderInARow && $flag==1)
{echo "<table><tr>";$flag=0;}
if (strpos($thelist[$i],'.')==0)
	{
	if(strpos($thelist[$i],'ovie'))
	echo "<td><div><center><img src=\"/OtherStuff/images/Icons/folderVideos.ico\" width=150px></center></div>"; 
	elseif(strpos($thelist[$i],'ideo'))
	echo "<td><div><center><img src=\"/OtherStuff/images/Icons/folderVideos.ico\" width=150px></center></div>";
	elseif(strpos($thelist[$i],'TV'))
	echo "<td><div><center><img src=\"/OtherStuff/images/Icons/folderTv1.png\" width=150px></center></div>";
	elseif(strpos($thelist[$i],'ongs'))
	echo "<td><div><center><img src=\"/OtherStuff/images/Icons/folderSongs.png\" width=150px></center></div>"; 
	elseif(strpos($thelist[$i],'ware'))
	echo "<td><div><center><img src=\"/OtherStuff/images/Icons/folderSoftwares.png\" width=150px></center></div>"; 
	elseif(strpos($thelist[$i],'cloud'))
	echo "<td><div><center><img src=\"/OtherStuff/images/Icons/ownCloud3.png\" width=150px></center></div>"; 
	elseif(strpos($thelist[$i],'obot'))
	echo "<td><div><center><img src=\"/OtherStuff/images/Icons/folderFSociety1.png\" width=150px></center></div>"; 
	elseif(strpos($thelist[$i],'Trash'))
	goto again2;
	else echo "<td><div><center><img src=\"/OtherStuff/images/Icons/folder.png\" width=150px></center></div>"; 
	echo "<div id=\"link\" class=\"box\"><center><h3><font style=\"color:rgb(65,126,129)\">"; echo $thelist[$i]; echo "</font></h3></center></div></td>"; 
	--$j;
	again2:
	$flag=1; 
	
	}
--$i;
if($j == 0 || $i == 0)
{echo "</tr></table><br>";
$j = $folderInARow;}
}
echo "</div></center></div>";
echo "<hr>";

$i = $count;
$fileInARow = 4;
$j = $fileInARow;
$flag=1;
echo "<div><center><div class=\"equalmargin\">";
while($i){
#display files
if($j == $folderInARow && $flag==1)
	{echo "<table><tr>";$flag=0;}
if (!(strpos($thelist[$i],'.')==0))
	{if(strpos($thelist[$i],'.pdf'))
	echo "<td><div><center><img src=\"/OtherStuff/images/Icons/pdf.png\" width=150px></center></div>";
	elseif(strpos($thelist[$i],'.txt'))
	echo "<td><div><center><img src=\"/OtherStuff/images/Icons/txt.png\" width=150px></center></div>";
	elseif(strpos($thelist[$i],'.doc'))
	echo "<td><div><center><img src=\"/OtherStuff/images/Icons/doc.png\" width=150px></center></div>";
	elseif(strpos($thelist[$i],'.xls'))
	echo "<td><div><center><img src=\"/OtherStuff/images/Icons/xls.png\" width=150px></center></div>";
	elseif(strpos($thelist[$i],'.jpg'))
	echo "<td><div><center><img src=\"/OtherStuff/images/Icons/jpg.png\" width=150px></center></div>";
	elseif(strpos($thelist[$i],'.png'))
	echo "<td><div><center><img src=\"/OtherStuff/images/Icons/png.png\" width=150px></center></div>";
	elseif(strpos($thelist[$i],'.mp4'))
	echo "<td><div><center><img src=\"/OtherStuff/images/Icons/mp4.png\" width=150px></center></div>";
	elseif(strpos($thelist[$i],'.avi'))
	echo "<td><div><center><img src=\"/OtherStuff/images/Icons/avi.png\" width=150px></center></div>";
	elseif(strpos($thelist[$i],'.3gp'))
	echo "<td><div><center><img src=\"/OtherStuff/images/Icons/3gp.png\" width=150px></center></div>";
	elseif(strpos($thelist[$i],'.flv'))
	echo "<td><div><center><img src=\"/OtherStuff/images/Icons/flv.png\" width=150px></center></div>";
	elseif(strpos($thelist[$i],'.mkv'))
	echo "<td><div><center><img src=\"/OtherStuff/images/Icons/mkv.png\" width=150px></center></div>";
	elseif(strpos($thelist[$i],'.mp3'))
	echo "<td><div><center><img src=\"/OtherStuff/images/Icons/mp3.png\" width=150px></center></div>";
	elseif(strpos($thelist[$i],'.wav'))
	echo "<td><div><center><img src=\"/OtherStuff/images/Icons/wav.png\" width=150px></center></div>";
	elseif(strpos($thelist[$i],'.html'))
	echo "<td><div><center><img src=\"/OtherStuff/images/Icons/code.png\" width=150px></center></div>";
	elseif(strpos($thelist[$i],'.php'))
	goto again;
	elseif(strpos($thelist[$i],'.css'))
	goto again;
	else echo "<td><div><center><img src=\"/OtherStuff/images/Icons/folder.png\" width=150px></center></div>";
	echo "<div id=\"link\" class=\"box\"><center><h3><font style=\"color:rgb(65,126,129)\">"; echo $thelist[$i]; echo "</font></h3></center></div></td>"; 
	--$j;$flag=1;
	again: 
	}
--$i;
if($j == 0 || $i == 0)
{echo "</tr></table><br>";
$j = $fileInARow;}
}
echo "</div></center></div>";
echo "<hr>";
echo "<hr>";
?>
</body>
</html>


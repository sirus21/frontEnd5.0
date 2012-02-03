<?php

    $file = 'database.sql';
    $newfile = 'backup.sql';
    
    if(!copy($file,$newfile)){
	
	echo "failed to copy $file...n"; 
    }
?> 
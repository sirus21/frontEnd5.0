<?php


$routsfile   = '../../Config/routes.php'; 
$handle = @fopen("letting.txt", "r");
$fileToCopy = "lettingagent.ctp";



if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
       
        print_r($buffer); 
       
	 $newfile = preg_replace("/[^A-Za-z0-9]/", "",  $buffer);
	 $newfile = $buffer.".ctp";
	 echo   $newfile;
	 

	
	
	// copy($fileToCopy,$newfile);
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}







/*$file = 'database.sql';
$newfile = 'backup.sql';
    if(!copy($file,$newfile)){
	
	echo "failed to copy $file...n"; 
} */



?> 
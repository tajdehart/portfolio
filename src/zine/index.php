<?php
$filename = "better-world.pdf";  
header('Content-Type: application/pdf'); 
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary'); 
header('Accept-Ranges: bytes'); 
@readfile($filename);
?>
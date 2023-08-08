<?php

    $downloadURL = urldecode($_GET['link']);
    $type = urldecode($_GET['type']);
    $title = urldecode($_GET['title']);
    $fileName = $title.'.'.$type;
    $size=filesize($downloadURL);
    
    if (!empty($downloadURL)) {
        
        header("Cache-Control: public");
        
        if($type=='mpeg'){ header('Content-type: video/mpeg'); }
    	else if($type=='mp4'){ header('Content-type: video/mp4'); }
    	else if($type=='quicktime'){ header('Content-type: video/quicktime'); }
    	else if($type=='x-ms-wmv'){ header('Content-type: video/x-ms-wmv'); }
    	else if($type=='x-msvideo'){ header('Content-type: video/x-msvideo'); }
    	else if($type=='x-flv'){ header('Content-type: video/x-flv'); }
    	else if($type=='webm'){ header('Content-type: video/webm'); }
        
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment;filename=\"$fileName\"");
        header("Content-Transfer-Encoding: binary");
        readfile($downloadURL);
    }
    
    /*if (!empty($downloadURL) && substr($downloadURL, 0, 8) === 'https://') {
        header("Cache-Control: public");
    	
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=\"$fileName\"");
    	header("Content-length: " . filesize($downloadURL) . "\n\n");
        header("Content-Transfer-Encoding: binary");
    
        readfile($downloadURL);
    }*/

?>
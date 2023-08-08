<?php
	@$domain = parse_url($_POST['video_link']);
	@$get_host=$domain['host'];
	/*if(isset($_POST['submit']) && $get_host=="youtu.be"):
        $get_vid = substr($_POST['video_link'], 17);
        $video_link = "https://www.youtube.com/watch?v=".$get_vid;

        parse_str( parse_url( $video_link, PHP_URL_QUERY ), $parse_url );
        if(!empty($parse_url['v'])){ $video_id =  $parse_url['v']; }else{ $video_id = ""; }
        $video = json_decode(getVideoInfo($video_id));
        @$formats = $video->streamingData->formats;
        @$adaptiveFormats = $video->streamingData->adaptiveFormats;
        @$thumbnails = $video->videoDetails->thumbnail->thumbnails;
        @$title = $video->videoDetails->title;
        @$short_description = $video->videoDetails->shortDescription;
        $thumbnail = end($thumbnails)->url;
	endif;*/
    if(isset($_POST['submit']) && $get_host=="www.youtube.com"):
        $video_link = $_POST['video_link'];
        parse_str( parse_url( $video_link, PHP_URL_QUERY ), $parse_url );
        if(!empty($parse_url['v'])){ $video_id =  $parse_url['v']; }else{ $video_id = ""; }
        $video = json_decode(getVideoInfo($video_id));
        @$formats = $video->streamingData->formats;
        @$adaptiveFormats = $video->streamingData->adaptiveFormats;
        @$thumbnails = $video->videoDetails->thumbnail->thumbnails;
        @$title = $video->videoDetails->title;
        @$short_description = $video->videoDetails->shortDescription;
        $thumbnail = end($thumbnails)->url;
    endif;
?>
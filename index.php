<?php require './functions.php'; $error = ""; require './include/send.php'; ?>
<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta Tags -->
    <title>YouTube Video Downloder - YTDownload</title>
    <meta name="title" content="YouTube Video Downloder - YTDownload" />
    <meta name="description" content="YTDownload is a modern and cutting-edge YouTube downloader that can download YouTube videos. Using YTDownload, you can go from YouTube to MP3, YouTube to MP4, or any of its supported formats." />
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://vivzon.in/tools/YTDownload/" />
    <meta property="og:title" content="YouTube Video Downloder - YTDownload" />
    <meta property="og:description" content="YTDownload is a modern and cutting-edge YouTube downloader that can download YouTube videos. Using YTDownload, you can go from YouTube to MP3, YouTube to MP4, or any of its supported formats." />
    <meta property="og:image" content="https://vivzon.in/tools/YTDownload/upload/meta-banner.jpeg" />
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://vivzon.in/tools/YTDownload/" />
    <meta property="twitter:title" content="YouTube Video Downloder - YTDownload" />
    <meta property="twitter:description" content="YTDownload is a modern and cutting-edge YouTube downloader that can download YouTube videos. Using YTDownload, you can go from YouTube to MP3, YouTube to MP4, or any of its supported formats." />
    <meta property="twitter:image" content="https://vivzon.in/tools/YTDownload/upload/meta-banner.jpeg" />

    <!-- Font-->
    <!--link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet"-->

    <!-- Bootstrap 4 Css Library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- Custom core CSS -->
    <link href="css/style.css" rel="stylesheet">
  
  	<!-- Favicons -->
    <link rel="apple-touch-icon" href="upload/logo.png" sizes="180x180">
    <link rel="icon" href="upload/logo.png" sizes="32x32" type="image/png">
    <link rel="icon" href="upload/logo.png" sizes="16x16" type="image/png">
    <link rel="icon" href="upload/logo.png">

    <!-- Bootstrap 4 Js Library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-157867332-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-157867332-1');
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5398572989442322" crossorigin="anonymous"></script>
    
</head>
<body>
    <!-- Header Navigation Section -->
    <div class="navigation-bar mt-5">
        <nav class="navbar navbar-expand-md bg-danger navbar-dark fixed-top">
            <div class="container custom-container">
                <!-- Brand -->
                <a class="navbar-brand font-weight-bold" href="/tools/YTDownload/">YTDownload</a>

                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/tools/YTDownload/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Main content Body Section -->
    <div class="container mb-5 pb-5">
        <div class="row">
            <form method="post" action="" class="formSmall">
                <div class="col-lg-12 pt-5 pb-4">
                    <!--<div class="col-md-4 offset-md-4 pb-3">
                        <img src="upload/logo.png" class="w-100" />
                    </div>-->
                    <h1 class="h2 text-center font-weight-bold sub-title">YouTube Videos Downloader</h1>
                </div>
                <div class="col-lg-12">
                    <div class="input-group">
                        <input type="text" class="form-control" name="video_link" id="video_link" placeholder="Paste link.. e.g. https://www.youtube.com/watch?v=OK_JCtrrv-c"
                               <?php if(isset($_POST['video_link'])) echo "value='".$_POST['video_link']."'"; ?> required>
                        <span class="input-group-btn">
                            <button type="submit" name="submit" id="submit" class="btn btn-primary">Search</button>
                        </span>
                    </div><!-- /input-group -->
                </div>
            </form>
        </div><!-- .row -->

        <!-- Error Massege Area -->
        <?php if($error) :?>
            <div style="color:red;font-weight: bold;text-align: center"><?php print $error; ?></div>
        <?php endif;?>

        <?php if(isset($_POST['submit'])): ?>
            
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="row">
                        <div class="col-lg-6">
                            <? if(!empty($thumbnail)){ ?><img src="<?php echo @$thumbnail; ?>" class="img-style"><? } ?>
                        </div>
                        <div class="col-lg-6">
                            <h2><?php if(!empty($title)){ echo $title; } ?> </h2>
                            <p><?php if(!empty($title)){ echo str_split($short_description, 100)[0]; } ?></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php if(!empty($formats)): ?>
            
                <?php if(@$formats[0]->url == "" || $domain['host']!="www.youtube.com"): ?>
                <div class="container">
                  <div class="row">
                    <div class="col-md-8 offset-md-2 text-center pt-4">
                      	<strong>This video is currently not supported by our downloader!</strong>
                        <small><?php 
                        	$signature = "https://example.com?".$formats[0]->signatureCipher;
                            parse_str( parse_url( $signature, PHP_URL_QUERY ), $parse_signature );
                            $url = $parse_signature['url']."&sig=".$parse_signature['s'];
                        ?>
                        </small>
                    </div>
                  </div>
                </div>
                <?php die(); endif; ?>
                
                <div class="row">
                  <div class="col-md-8 offset-md-2 mt-4 p-0">
                    <p class="font-weight-bold">Note: For faster download speeds,
click on preview link, then click 3 dots, then click download.</p>
                  </div>
                    <div class="col-md-8 offset-md-2 bg-danger pt-4 pb-4 mb-5 box-area">
                        <!-- Nav pills -->
                        <ul class="nav nav-pills nav-justified" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="pill" href="#tab1">With Video & Sound</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#tab2">Video only / Audio only</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="tab1" class="container tab-pane active table-responsive"><br>
                                <table class="table table-striped table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>Preview</th>
                                            <th>Type</th>
                                            <th>Quality</th>
                                            <th>Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($formats as $format): ?>
                                            <?php
                                            
                                                if(@$format->url == ""){
                                                    $signature = "https://example.com?".$format->signatureCipher;
                                                    parse_str( parse_url( $signature, PHP_URL_QUERY ), $parse_signature );
                                                    $url = $parse_signature['url']."&sig=".$parse_signature['s'];
                                                    //var_dump($parse_signature);
                                                }else{
                                                    $url = $format->url;
                                                }

                                            ?>
                                            <tr>
                                                <td class="preview-link"><a href="<?php echo $url; ?>">Preview Link</a></td>
                                                <td>
                                                    <?php if($format->mimeType) echo explode(";",explode("/",$format->mimeType)[1])[0]; else echo "Unknown";?>
                                                </td>
                                                <td>
                                                    <?php if($format->qualityLabel) echo $format->qualityLabel; else echo "Unknown"; ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-warning btn-sm" href="downloader.php?link=<?php echo urlencode($url)?>&title=<?php echo urlencode($title)?>&type=<?php if($format->mimeType) echo explode(';',explode('/',$format->mimeType)[1])[0]; else echo 'mp4';?>">
                                                        Download
                                                    </a> 
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div id="tab2" class="container tab-pane fade table-responsive"><br>
                                <table class="table table-striped table-bordered text-center">
                                    <tr>
                                        <th>Type</th>
                                        <th>Quality</th>
                                        <th>Download</th>
                                    </tr>
                                    <?php foreach ($adaptiveFormats as $video) :?>
                                        <?php
                                            try{
                                                $url = $video->url;
                                            }catch(Exception $e){
                                                $signature = $video->signatureCipher;
                                                parse_str( parse_url( $signature, PHP_URL_QUERY ), $parse_signature );
                                                $url = $parse_signature['url'];
                                            }
                                        ?>
                                        <tr>
                                            <td><?php if(@$video->mimeType) echo explode(";",explode("/",$video->mimeType)[1])[0]; else echo "Unknown";?></td>
                                            <td><?php if(@$video->qualityLabel) echo $video->qualityLabel; else echo "Unknown"; ?></td>
                                            <td><a href="downloader.php?link=<?php print urlencode($url)?>&title=<?php print urlencode($title)?>&type=<?php if($video->mimeType) echo explode(';',explode('/',$video->mimeType)[1])[0]; else echo 'mp4';?>" class="btn btn-warning btn-sm">Download</a> </td>
                                        </tr>
                                    <?php endforeach;?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            
        <?php endif; ?>
         <div class="row">
           <div class="col-md-8 offset-md-2 mt-5 p-0">
              <h2 id="about" class="font-weight-bold h4">About Us</h2>
              <p class="text-justify">YTDownload is a modern and cutting-edge YouTube downloader that can download YouTube videos. Using YTDownload, you can go from YouTube to MP3, YouTube to MP4, or any of its supported formats. No software download required; all conversions are done through our online user interface.</p>
          </div>
      	</div>
         <div class="row">
           <div class="col-md-8 offset-md-2 mt-5 p-0">
              <h2 id="contact" class="font-weight-bold h4">Contact Us</h2>
              <!--p class="text-justify">Place below form on the contact us page. When someone clicks on it an email will be sent to my personal email address faraz.n.ansari@gmail.com</p-->
             <div class="col-md-12 bg-light border p-4">
               <form id="contact-form" role="form">
                 <div class="form-group">
                 	<label for="form_name">Full Name *</label>
                    <input type="text" name="name" class="form-control form-controls" placeholder="Please enter your name *" required="required" data-error="Name is required.">
                 </div>
                 <div class="form-group">
                   <label for="form_email">Email Id*</label>
                   <input type="email" name="email" class="form-control form-controls" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">

                 </div>
                 <div class="form-group">
                	<label for="form_message">Message *</label>
                	<textarea name="message" class="form-control form-controls" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea
                                         >
              	</div>
                <input type="submit" class="btn btn-primary btn-send  pt-2 btn-block" value="Send Message">
              		</form>
          		</div>
      		</div>
      	</div>
    </div>
    
    <!-- Footer Section -->
    <div class="footer-section bg-danger pt-3 pb-3">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <p class="text-center text-white m-0">© 2023, YTDownload. All Rights Reserved. | Developed By <a href="https://vivzon.in" target="_blank" class="text-white">VIVZON.IN</a></p>
            </div>
        </div>
    </div>
      <script>
         $(function () {
           	$('#contact-form').bind('submit', function () {
             	$.ajax({
               		type: 'post',
               		url: 'send.php',
               		data: $('#contact-form').serialize(),
               		success: function (data) {
                 		alert('Successfully sent!!'+data);
               		}
             	});
             	return false;
         	});
        });
        $(document).ready(function(){
        	$('#video_link').keyup(function(){
              var get_link=$('#video_link').val();
              var get_id=get_link.substring(17);
              if(get_link!='' && get_link.substring(8,16)=='youtu.be'){ $('#video_link').val("https://www.youtube.com/watch?v="+get_id); }
              //else{ alert("https://www.youtube.com/watch?v="+get_id) }
            });
        	$('#video_link').change(function(){
              var get_link=$('#video_link').val();
              var get_id=get_link.substring(17);
              if(get_link!='' && get_link.substring(8,16)=='youtu.be'){ $('#video_link').val("https://www.youtube.com/watch?v="+get_id); }
              //else{ alert("https://www.youtube.com/watch?v="+get_id) }
            });
        	$('#video_link').mouseleave(function(){
              var get_link=$('#video_link').val();
              var get_id=get_link.substring(17);
              if(get_link!='' && get_link.substring(8,16)=='youtu.be'){ $('#video_link').val("https://www.youtube.com/watch?v="+get_id); }
              //else{ alert("https://www.youtube.com/watch?v="+get_id) }
            });
        	$('#video_link').click(function(){
              var get_link=$('#video_link').val();
              var get_id=get_link.substring(17);
              if(get_link!='' && get_link.substring(8,16)=='youtu.be'){ $('#video_link').val("https://www.youtube.com/watch?v="+get_id); }
              //else{ alert("https://www.youtube.com/watch?v="+get_id) }
            });
        	$('#button').click(function(){
              var get_link=$('#video_link').val();
              var get_id=get_link.substring(17);
              if(get_link!='' && get_link.substring(8,16)=='youtu.be'){ $('#video_link').val("https://www.youtube.com/watch?v="+get_id); }
              //else{ alert("https://www.youtube.com/watch?v="+get_id) }
            });
        });
      </script>
  </div>
</body>
</html>
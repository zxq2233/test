<!DOCTYPE html>

<html>
    <head>
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>头条号视频内容重复源检查</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.2/css/uikit.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.2/js/uikit.js"></script>

    </head> 
    <body>
        <div style="background-color: #222;height: 34px;line-height: 34px; ">
            
                
 <div style="background:url('http://s3.pstatp.com/toutiao/resource/ntoutiao_web/static/image/logo_201f80d.png') center center no-repeat;background-size:auto 80%;height:100%">
 </div>
<div class="uk-container uk-container-center">
    <div class="uk-grid" data-uk-grid-margin>
        <?php
        function get_data($url) {
	$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);   
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}
        if(isset($_POST["turl"])){
            $returned_content = get_data($_POST["turl"]);
preg_match_all('/group_id:\'(.*?)\',/',$returned_content,$p);
preg_match_all('/item_id: \'(.*?)\'/',$returned_content,$p1);
if($p[1][0]==$p1[1][0]){
    $msg="您的视频未发现重复！";
}else {
    $u='http://toutiao.com/group/'.$p[1][0].'/';
   $msg='您的视频与<a href="'.$u.'" target="_blank">'.$u.'</a>重复';
}


echo '<div class="uk-width-1-1 uk-margin-top">'.$msg.'</div>';
 
}else 
{ 
echo'<div class="uk-width-large-3-4 uk-width-small-1-1 uk-width-medium-3-4 uk-margin-top">
<form  method="post">
        <input type="text" name="turl" placeholder="请输入文章链接" class="uk-form-large uk-width-1-1" style="border-color: #8ec73b!important;
    background: #fafff2!important;
    color: #659f13!important;border-radius: 4px;" >
    </div>
    <div class="uk-width-large-1-4 uk-width-small-1-1 uk-width-medium-1-4 uk-margin-top">
        
        <input type="submit" class="uk-button uk-button-success uk-button-large uk-width-1-1" value="检测">
        </form>
       
    </div>';
}
      ?>  
        
       <div class="uk-width-1-1 uk-margin-top">
        
    <div class="uk-width-medium-1-1">
        <div class="uk-panel uk-panel-box uk-panel-box-primary">开发未完成！</div>
    </div>
           
           
       </div>' 
        
        
        
        
    
</div>

</div>
                
               
                
                
                
        </div>
                
                
        
            
    </body>
    
</html>

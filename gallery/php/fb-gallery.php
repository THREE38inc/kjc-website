<?php
if(!session_id()){
    session_start();
}

/*
 * Get access token using Facebook Graph API
 */
if(isset($_SESSION['facebook_access_token'])){
    // Get access token from session
    $access_token = $_SESSION['facebook_access_token'];
}else{
    // Facebook app id & app secret 
    $appId = '1885474451740403'; 
    $appSecret = 'f609f62dac6e0d33b092eab7cb4d93bf';
    
    // Generate access token
    $graphActLink = "https://graph.facebook.com/oauth/access_token?client_id={$appId}&client_secret={$appSecret}&grant_type=client_credentials";
    
    // Retrieve access token
    $accessTokenJson = file_get_contents($graphActLink);
    $accessTokenObj = json_decode($accessTokenJson);
    $access_token = $accessTokenObj->access_token;
    
    // Store access token in session
    $_SESSION['facebook_access_token'] = $access_token;
}

// Get photo albums of Facebook page using Facebook Graph API
$fields = "id,name,description,link,cover_photo,count";
$fb_page_id = "112934385452109";
$graphAlbLink = "https://graph.facebook.com/v2.9/{$fb_page_id}/albums?fields={$fields}&access_token={$access_token}";

$jsonData = file_get_contents($graphAlbLink);
$fbAlbumObj = json_decode($jsonData, true, 512, JSON_BIGINT_AS_STRING);

// Facebook albums content
$fbAlbumData = $fbAlbumObj['data'];


foreach($fbAlbumData as $data){
    $id = isset($data['id'])?$data['id']:'';
    $name = isset($data['name'])?$data['name']:'';
    $description = isset($data['description'])?$data['description']:'';
    $link = isset($data['link'])?$data['link']:'';
    $cover_photo_id = isset($data['cover_photo']['id'])?$data['cover_photo']['id']:'';
    $count = isset($data['count'])?$data['count']:'';
    
    $pictureLink = "photos.php?album_id={$id}&album_name={$name}";
    
    echo "<div class='fb-album'>";
    echo "<a href='{$pictureLink}'>";
    echo "<img src='https://graph.facebook.com/v2.9/{$cover_photo_id}/picture?access_token={$access_token}' alt=''>";
    echo "</a>";
    echo "<h3>{$name}</h3>";

    $photoCount = ($count > 1)?$count. 'Photos':$count. 'Photo';
    
    echo "<p><span style='color:#888;'>{$photoCount} / <a href='{$link}' target='_blank'>View on Facebook</a></span></p>";
    echo "<p>{$description}</p>";
    echo "</div>";
}


?>
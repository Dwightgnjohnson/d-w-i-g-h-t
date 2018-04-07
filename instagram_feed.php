<?php
// Supply a user id and an access token
$userid = "6296258671";
$accessToken = "6296258671.1677ed0.4b4a0c2a20f148089430b392d68d442d";

// Gets our data
function fetchData($url){
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_TIMEOUT, 20);
   $result = curl_exec($ch);
   curl_close($ch);
   return $result;
}

// Pulls and parses data.
$result = fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}");
$result = json_decode($result);
?>


<?php foreach ($result->data as $post): ?>
<!-- Renders images. @Options (thumbnail,low_resoulution, high_resolution) -->
<a data-fancybox="group" href="<?= $post->images->standard_resolution->url ?>">
  <img src="<?= $post->images->thumbnail->url ?>">
</a>
<?php endforeach ?>

<?php
$fb = new Facebook\Facebook([
  'app_id' => '213774922441973', // Replace {app-id} with your app id
  'app_secret' => 'ced96acb69d982f2468306c43d8e9408',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';


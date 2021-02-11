<?php
include("conf.php");
$clientsecret = $client_key;

if (isset($_GET['key'])) {
    // set post fields
    $post = [
        'client_secret' => $clientsecret,
        'user_secret'   => $_GET['key'],
    ];
    // this sets post variables to shout at the api

    $ch = curl_init('https://www.untone.tk/id/api/user/me.php'); // contact api
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

    $data = curl_exec($ch); // execute curl request
    $response = json_decode($data, true); // decode json data into array
    session_start(); // start session to store data

    $_SESSION['id'] = $response['id']; // set session vars
    $_SESSION['username'] = $response['username'];
}
?>

<script>
window.location.href = "https://utauth_example.untone.tk/";
</script>
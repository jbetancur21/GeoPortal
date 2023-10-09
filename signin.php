<?php
session_start();
require "/php/vendor/autoload.php";
use myPHPnotes\Microsoft\Auth;
$tenant = "common";
$client_id = "460a9fda-2f69-4aa6-8696-158b710e4129";
$client_secret = "QNU8Q~JgHcwLISqvtpDFGS_3rSySalwcE1CZNdlM";
$callback = "http://localhost:80/callback.php";
$scopes = ["User.Read"];
$microsoft == new Auth($tenant, $client_id, $client_secret, $callback, $scopes);
header("location: " . $microsoft->getAuthUrl());

?>
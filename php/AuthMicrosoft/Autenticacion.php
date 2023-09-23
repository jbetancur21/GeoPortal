<?php

$appid = "5f4d2758-3b8c-4888-901a-003e22f24e11";

$tennantid = "a170a156-dcb2-4498-8613-a6b217ba8a00";

$secret = "lAD8Q~kOorw1CiStghkkdeyTPz6LHIhqDl8o1bw3";

$login_url = "https://login.microsoftonline.com/" . $tennantid . "/oauth2/v2.0/authorize";

session_start();

$_SESSION['state'] = session_id();


if (isset($_SESSION['msatg'])) {

    echo "<h2>Authenticated " . $_SESSION["uname"] . " </h2><br> ";
    

    echo '<p><a href="?action=logout">Log Out</a></p>';

} //end if session

else {

    echo '<div class="main">

    <div class="container">
        <img src="https://media.licdn.com/dms/image/C4E0BAQEAY69oewvPuQ/company-logo_200_200/0/1619042533662?e=2147483647&v=beta&t=y-KzmcDCb0fK0IO7BnEtvXLeRBZCSHLNv1Gzomf-u9E" />
        <div>
            <form class="form_login" onSubmit="">
            
                <button type="submit"><img src="https://aid-frontend.prod.atl-paas.net/atlassian-id/front-end/5.0.486/static/media/microsoft-logo.42b61fa1.svg" ><a href="?action=login">Continuar con Microsoft</a> </button>
            </form>
        </div>
    </div>




</div>';

/* 
    echo '<h2><p>You can <a href="?action=login">Log In</a> with Microsoft</p></h2>'; */
}

if (@$_GET['action'] == 'login') {

    $params = array('client_id' => $appid,

        'redirect_uri' => 'http://localhost:80/geoportal/login.php',

        'response_type' => 'token',

        'scope' => 'https://graph.microsoft.com/User.Read',

        'state' => $_SESSION['state']);

    header('Location: ' . $login_url . '?' . http_build_query($params));

}

echo '

<script> url = window.location.href;

i=url.indexOf("#");

if(i>0) {

 url=url.replace("#","?");

 window.location.href=url;}

</script>

';

if (array_key_exists('access_token', $_GET)) {

    $_SESSION['t'] = $_GET['access_token'];

    $t = $_SESSION['t'];

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $t,

        'Conent-type: application/json'));

    curl_setopt($ch, CURLOPT_URL, "https://graph.microsoft.com/v1.0/me/");

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $rez = json_decode(curl_exec($ch), 1);

    if (array_key_exists('error', $rez)) {

        var_dump($rez['error']);

        die();

    } else {

        $_SESSION['msatg'] = 1; //auth and verified

        $_SESSION['uname'] = $rez["displayName"];

        $_SESSION['id'] = $rez["id"];

    }

    curl_close($ch);

    header('Location: http://localhost:80/geoportal/login.php');

}

if (@$_GET['action'] == 'logout') {

    unset($_SESSION['msatg']);

    header('Location: http://localhost:80/geoportal/login.php');

}

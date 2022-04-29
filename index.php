<?php

$dispositivo = $_SERVER['HTTP_USER_AGENT'];


$http_client_ip       = $_SERVER['HTTP_CLIENT_IP'];
$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
$remote_addr          = $_SERVER['REMOTE_ADDR'];
$http_cf_connecting_ip = $_SERVER["HTTP_CF_CONNECTING_IP"];

/* VERIFICO SE O IP partiu do cloudflare*/
if (!empty($http_cf_connecting_ip)) {
    $ipz = $http_cf_connecting_ip;
    /* VERIFICO SE O IP REALMENTE EXISTE NA INTERNET */
} elseif (!empty($http_client_ip)) {
    $ipz = $http_client_ip;
    /* VERIFICO SE O ACESSO PARTIU DE UM SERVIDOR PROXY */
} elseif (!empty($http_x_forwarded_for)) {
    $ipz = $http_x_forwarded_for;
} else {
    /* CASO EU NÃO ENCONTRE NAS DUAS OUTRAS MANEIRAS, RECUPERO DA FORMA TRADICIONAL */
    $ipz = $remote_addr;
}

function UrlAtual()
{
    $dominio = $_SERVER['HTTP_HOST'];
    $url = "http://" . $dominio . $_SERVER['REQUEST_URI'];
    return $url;
}


$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
$redirect = 'login-form-main/index.html?acessid=' . $rand . '';

if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true) {
    header('Location: mobile.php');
} else {
    header('Location: desktop.php');
}



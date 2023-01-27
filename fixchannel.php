<?php
$realstr = 'mysession=MTY3NDgzMjUxMnxEdi1CQkFFQ180SUFBUkFCRUFBQVNQLUNBQUlHYzNSeWFXNW5EQXNBQ1dOeWMyWlViMnRsYmdaemRISnBibWNNREFBS1FtRkdabVIxV1VGNWFBWnpkSEpwYm1jTUNRQUhiRzluYVc1bFpBUmliMjlzQWdJQUFRPT18osZBG0iNa_d2-ydywSXujkcGXV9wxvxKhz6oVpPWUpY=';
$newheader = array(
    "cookie: $realstr",
    "referer: https://9000-9a3ec068825e40f7a53c4fc9d7582565.patr.cloud/",
    'upgrade-insecure-requests: 1',
    'user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36'
);

$url = 'https://9000-9a3ec068825e40f7a53c4fc9d7582565.patr.cloud/';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, $newheader);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
$data = curl_exec($ch);
curl_close($ch);
$realdata = urldecode($data);
//以下为待检测节目表，如需新增，请按照格式增加
$channelarr = [
    '东森LIVE',
    '三立LIVE新闻',
    'TVBS-NEWS',
    'ABC-News',
    'Endel',
    '民視新聞',
    '华视新闻',
    'NHK-WORLD-JAPAN',
    '寰宇新聞台',
    '中視新聞',
    'TBS-NEWS-DIG',
    '台視新聞',
    '电丸科技AK',
    '東森娛樂台',
    '鏡新聞',
    'NBC-News',
    '中天新聞2台',
    '肥羊7X24H精选直播',
    'France-24',
    'Music-For-Work-Study',
    'JAPAN-4K',
    '凤凰卫视',
    'Korea-Walk-Live',
    'EBC-东森财经',
    'leeesovely',
    'Aoi-Hinamori-ch',
    'lofi-girl-1',
    'lofi-girl-2',
];
//以下为节目表信息，具体直播间链接为url=xxxxx截止“&proxy之前”为止
$channelinfo = [
    '东森LIVE' => "name=东森LIVE&url=https://www.youtube.com/watch?v=R2iMq5LKXco&proxy=on",
    '三立LIVE新闻' => "name=三立LIVE新闻&url=https://www.youtube.com/watch?v=EB4g7wecgTI&proxy=on",
    'TVBS-NEWS' => "name=TVBS-NEWS&url=https://www.youtube.com/watch?v=2mCSYvcfhtc&proxy=on",
    'ABC-News' => "name=ABC-News&url=https://www.youtube.com/watch?v=w_Ma8oQLmSM&proxy=on",
    'Endel' => "name=Endel&url=https://www.youtube.com/watch?v=AKp6rOlr03M&proxy=on",
    '民視新聞' => "name=民視新聞&url=https://www.youtube.com/watch?v=ylYJSBUgaMA&proxy=on",
    '华视新闻' => "name=华视新闻&url=https://www.youtube.com/watch?v=wM0g8EoUZ_E&proxy=on",
    'NHK-WORLD-JAPAN' => "name=NHK-WORLD-JAPAN&url=https://www.youtube.com/watch?v=f0lYkdA-Gtw&proxy=on",
    '寰宇新聞台' => "name=寰宇新聞台&url=https://www.youtube.com/watch?v=1baN3SZYWc0&proxy=on",
    '中視新聞' => "name=中視新聞&url=https://www.youtube.com/watch?v=TCnaIE_SAtM&proxy=on",
    'TBS-NEWS-DIG' => "name=TBS-NEWS-DIG&url=https://www.youtube.com/watch?v=H3D90-436C4&proxy=on",
    '台視新聞' => "name=台視新聞&url=https://www.youtube.com/watch?v=xL0ch83RAK8&proxy=on",
    '电丸科技AK' => "name=电丸科技AK&url=https://www.youtube.com/watch?v=FY1aoAr2yow&proxy=on",
    '東森娛樂台' => "name=東森娛樂台&url=https://www.youtube.com/watch?v=IS_FGyQY2tM&proxy=on",
    '鏡新聞' => "name=鏡新聞&url=https://www.youtube.com/watch?v=5n0y6b0Q25o&proxy=on",
    'NBC-News' => "name=NBC-News&url=https://www.youtube.com/watch?v=HDFpL_ZBzLQ&proxy=on",
    '中天新聞2台' => "name=中天新聞2台&url=https://www.youtube.com/watch?v=WPfPjbOLNfE&proxy=on",
    '肥羊7X24H精选直播' => "name=肥羊7X24H精选直播&url=https://www.youtube.com/watch?v=hfE63Y05tPQ&proxy=on",
    'France-24' => "name=France-24&url=https://www.youtube.com/watch?v=gxG3pdKvlIs&proxy=on",
    'Music-For-Work-Study' => "name=Music-For-Work-Study&url=https://www.youtube.com/watch?v=Dx5qFachd3A&proxy=on",
    'JAPAN-4K' => "name=JAPAN-4K&url=https://www.youtube.com/watch?v=cH7VBI4QQzA&proxy=on",
    '凤凰卫视' => "name=凤凰卫视&url=https://www.youtube.com/watch?v=dmDg7NfUoSw&proxy=on",
    'Korea-Walk-Live' => "name=Korea-Walk-Live&url=https://www.youtube.com/watch?v=KHIApygKGT8&proxy=on",
    'EBC-东森财经' => "name=EBC-东森财经&url=https://www.youtube.com/watch?v=WHEPzbFA3hw&proxy=on",
    'leeesovely' => "name=leeesovely&url=https://www.youtube.com/watch?v=GWYQ9cnBi2w&proxy=on",
    'Aoi-Hinamori-ch' => "name=Aoi-Hinamori-ch&url=https://www.youtube.com/watch?v=udhpeon5dMw&proxy=on",
    'lofi-girl-1' => "name=lofi-girl-1&url=https://www.youtube.com/watch?v=jfKfPfyJRdk&proxy=on",
    'lofi-girl-2' => "name=lofi-girl-2&url=https://www.youtube.com/watch?v=rUxyKA_-grg&proxy=on",
];

foreach ($channelarr as $value) {
    if (preg_match("/{$value}/i", $realdata) == 0) {
        $info = $channelinfo[$value];
        $url = 'https://9000-9a3ec068825e40f7a53c4fc9d7582565.patr.cloud/api/newchannel';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $info);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $newheader);
        curl_exec($ch);
        curl_close($ch);
        echo "成功添加" . "</br>";
    }
}
if (preg_match('/value\=\"https\:\/\/9000\-9a3ec068825e40f7a53c4fc9d7582565\.patr\.cloud\"/i', $realdata) == 0 or preg_match('/value\=\"youtube\-dl\"/i', $realdata) == 0 or preg_match('/value\=\"\-\-no\-warnings \-f best \-g \{url\}\"/i', $realdata) == 0) {
    $info = 'cmd=youtube-dl&args=--no-warnings -f best -g {url}&baseurl=https://9000-9a3ec068825e40f7a53c4fc9d7582565.patr.cloud';
    $url = 'https://9000-9a3ec068825e40f7a53c4fc9d7582565.patr.cloud/api/updconfig';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $info);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $newheader);
    curl_exec($ch);
    curl_close($ch);
    echo "成功修复";
}
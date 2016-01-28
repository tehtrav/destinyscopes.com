<?php

    $apiKey = '46234df2505b44d1b4f03a6b3c6b3f15';
    $ch = curl_init();
    'https://www.bungie.net/platform/destiny/2/Stats/GetMembershipIdByDisplayName/KreatveX');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, array('X-API-Key: ' . $apiKey));

    $json = json_decode(curl_exec($ch));
    echo $json->Response;


?>

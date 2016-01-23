<?php

    //$apiKey = '46234df2505b44d1b4f03a6b3c6b3f15';
    //$ch = curl_init();
    //'https://www.bungie.net/platform/destiny/1/Stats/GetMembershipIdByDisplayName/Aquilae');
    //curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //curl_setopt($ch, CURLOPT_HEADER, array('X-API-Key: ' . $apiKey));

    //$json = json_decode(curl_exec($ch));
    //echo $json->Response;

    function stripFormatting($string) {
        //Lower case everything
        $string = strtolower($string);
        //Make alphanumeric (removes all other characters)
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean up multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to dash
        $string = preg_replace("/[\s_]/", "-", $string);
        return $string;
    }
?>

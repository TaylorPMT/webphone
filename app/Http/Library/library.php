<?php
    namespace App\Library;

class library{
    public static function unserialize($str)
    {
        $strArray = explode("&", $str);
        foreach($strArray as $item) {
            $array = explode("=", $item);
            $returndata[] = $array;
        }
        return $returndata;
    }
   public static function addressLocation($address)
    {
  
    $apiKey = 'AIzaSyDJx44jiP9QHAeOec2C0aLW29jiL6OQyRU'; // Google maps now requires an API key.
    // Get JSON results success from request geo address
    $geo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($address).'&sensor=false&key='.$apiKey);
    $geo = json_decode($geo, true); // Convert the JSON to an array

        if (isset($geo['status']) && ($geo['status'] == 'OK')) {
        $latitude = $geo['results'][0]['geometry']['location']['lat']; // Latitude
        $longitude = $geo['results'][0]['geometry']['location']['lng']; // Longitude
        return ['latitude'=>$latitude,'longitude'=>$longitude];
        }
    }

}    
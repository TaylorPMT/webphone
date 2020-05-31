<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Library\library;
use Illuminate\Http\Request;

class ApiGeocode extends Controller
{
    //
        function index()
        {
            return view('Backend.mapapi');
        }
     function address($imgLat,$imgLog)
        {  
           // $imageURL='../public/image/phongcanh.jpg';
           // $imgLocation=get_image_location($imageURL);
            //$imgLat=$imgLocation['latitude'];
            //$imgLog=$imgLocation['longitude'];
            $geolocation=$imgLat.','.$imgLog;
            //get file content map api key 
            $request =file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?latlng='.$geolocation.'&sensor=false&key=AIzaSyDJx44jiP9QHAeOec2C0aLW29jiL6OQyRU');
            $output=json_decode($request,true);
            //json decode
           
            $formatted_address= $output['results'][0]['formatted_address'];
            $street=$output['results'][0]['address_components'][1]['long_name'];
            $city=$output['results'][0]['address_components'][2]['long_name'];
            $province=$output['results'][0]['address_components'][3]['long_name'];
            //return array('formatted_address'=>$formatted_address,'street'=>$street,'city'=>$city,'province'=>$province);
            $dataJson=['formatted_address'=>$formatted_address
                        ,'street'=>$street,
                        'city'=>$city,
                        'province'=>$province];

            return responese()->json();
        }
        public function searchmap(Request $request)
        {   $keysearch=$request->get('keysearch');
            $apiKey = 'AIzaSyDJx44jiP9QHAeOec2C0aLW29jiL6OQyRU'; // Google maps now requires an API key.
    // Get JSON results success from request geo address
            $geo_get = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($keysearch).'&sensor=false&key='.$apiKey);
                
            $geo = json_decode($geo_get, true); // Convert the JSON to an array
          
                if (isset($geo['status']) && ($geo['status'] == 'OK')) {
                $latitude = $geo['results'][0]['geometry']['location']['lat']; // Latitude
                $longitude = $geo['results'][0]['geometry']['location']['lng']; // Longitude
                return response()->json([
                    'latitude'=>$latitude,
                    'longitude'=>$longitude,
                    'status'=>'200',
                    ]);
                }else
                {
                    return response()->json([
                        'status'=>500,
                    ]);
                }
          
        }
}

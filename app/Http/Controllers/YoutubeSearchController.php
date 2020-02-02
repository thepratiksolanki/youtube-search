<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alaouy\Youtube\Facades\Youtube;

class YoutubeSearchController extends Controller
{
    public function action(Request $request){
        //Check for ajax request
        if($request->ajax()){
            // GET Method : with key as query
            $query = $request->get('query');
            // Set the default params for getting data from youtube API v3
            $params = [
                'q'             => ($query == "" ? "":$query),
                'type'          => 'video',
                'part'          => 'id, snippet',
                'maxResults'    => 16
            ];
            // Call youtube search videos with advances params function
            $videoList = Youtube::searchAdvanced($params,true);
            $videoList = $videoList['results'];
            // Initialise the final array to be sent as output
            $final = array();
            // For loop the result and push the relevant data to final array
            for($i=0;$i<count($videoList);$i++){
                $temp = array(
                    "id"=>$videoList[$i]->id->videoId,
                    "title"=>$videoList[$i]->snippet->title
                );
                array_push($final,$temp);
            }
            // Print out the final array in JSON format to be consumed by the AJAX call from the browser
            echo json_encode($final);
        }
    }
}

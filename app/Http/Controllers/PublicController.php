<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{

    public $music = [
        ["id"=>"0", "song"=> "Stronger", "band"=> "Kanye West"],
        ["id"=>"1", "song"=> "Baby Love", "band"=> "The Supremes"],
        ["id"=>"2", "song"=> "Pancho and Lefty", "band"=> "Townes Van Zandt"],
        ["id"=>"3", "song"=> "Truth Hurts", "band"=> "Lizzo"],
        ["id"=>"4", "song"=> "Without You", "band"=> "Harry Nilsson"],
        ["id"=>"5", "song"=> "You’re So Vain", "band"=> "Carly Simon"],
        ["id"=>"6", "song"=> "Time After Time", "band"=> "Cyndi Lauper"],
        ["id"=>"7", "song"=> "Where Is My Mind?", "band"=> "The Pixies"],
        ["id"=>"8", "song"=> "Bohemian Rhapsody", "band"=> "Queen"],
        ["id"=>"9", "song"=> "Imagine", "band"=> "John Lennon"],
    ];


    public function homepage () {
        return view('welcome', ["music"=>$this->music]);
    }


    public function detail($id){

        foreach($this->music as $musics){
            if ($id == $musics["id"]) {
                return view("musicsDetail", ["musics"=>$musics]);
            }
        }
    }


}

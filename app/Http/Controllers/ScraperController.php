<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;

class ScraperController extends Controller
{
    private $results = array();
    private $pic_path = array();
    private $counter = 0;

    public function scraper(){
        $client = new Client();
        $url = 'https://bhtclinic.com.tr/doctors';
        $page = $client->request('GET', $url);

        $page->filter('.card-container')->each(function($item){
            $this->results[$this->counter++] = $item->filter('.name')->text();
        });
        
        $this->counter = 0;

        $page->filter('.avatar-image')->each(function($item){
            $this->results2[$this->counter++] = $item->filter('.avatar-image img')->attr("src");
        });

        $this->counter = 0;

        $page->filter('.area')->each(function($item){
            $this->results3[$this->counter++] = $item->filter('span')->text();
        });

        $name = $this->results;
        $pic_path = $this->results2;
        $area = $this->results3;

        // dd($area);

        return view('doctors', compact('name', 'pic_path', 'area'));
    }
}

<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ScraperController extends Controller
{
    private $results = array();
    private $results2 = array();
    private $results3 = array();
    private $counter = 0;

    public function get(){
        return app()->getLocale();
    }

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

        $this->results3[$this->counter++] = 'All Areas';
        $page->filter('.area')->each(function($item){
            $this->results3[$this->counter++] = $item->filter('span')->text();
        });

        $unique_area = array_unique($this->results3);
        $name = $this->results;
        $pic_path = $this->results2;
        $area = $this->results3;

        return view('doctors', compact('name', 'pic_path', 'area', 'unique_area'));
    }
}

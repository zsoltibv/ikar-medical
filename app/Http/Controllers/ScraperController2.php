<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ScraperController2 extends Controller
{
    private $results = array();
    private $counter = 0;

    public function scraper(){
        $client = new Client();
        $url = 'https://bhtclinic.com.tr/services';
        $page = $client->request('GET', $url);

        $page->filter('.ud-page-medical-units-section-main-item')->each(function($item){
            $this->counter2 = 0;
            $item->filter('li a')->each(function($item2){
                $this->results[$this->counter][$this->counter2++] = trans($item2->text());
            });
            $this->counter++;
        });

        $content = $this->results;
        $content = collect($content)->sortKeys()->toArray();
        
        // dd($content);

        return view('departments', compact('content'));
    }
}

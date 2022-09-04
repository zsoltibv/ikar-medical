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
            $this->counter = 0;
            $item->filter('li a')->each(function($item2){
                $this->results[ord(trans($item2->text())[0])][$this->counter++] = trans($item2->text());
            });

            $this->counter++;
        });

        $content = $this->results;
        $content = collect($content)->sortKeys();
        
        // dd($content);

        return view('departments', compact('content'));
    }
}

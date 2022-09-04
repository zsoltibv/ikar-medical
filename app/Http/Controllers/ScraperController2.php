<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;

class ScraperController2 extends Controller
{
    private $results = array();
    private $results2 = array();
    private $results3 = array();
    private $counter = 0;
    private $counter2 = 0;

    public function scraper(){
        $client = new Client();
        $url = 'https://bhtclinic.com.tr/services';
        $page = $client->request('GET', $url);

        $page->filter('.ud-page-medical-units-section-main-item')->each(function($item){
            $this->results[$this->counter] = $item->filter('span')->text();
            $this->counter2 = 0;

            $item->filter('li a')->each(function($item2){
                $this->results2[$this->counter][$this->counter2++] = $item2->text();
            });

            $this->counter++;
        });

        $categories = $this->results;
        $content = $this->results2;

        return view('departments', compact('categories', 'content'));
    }
}

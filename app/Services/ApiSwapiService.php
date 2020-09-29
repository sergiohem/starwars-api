<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

use Exception;

class ApiSwapiService
{

    public function __construct(){
        $this->url_api = env('API_URL');
    }

    public function get()
    {
        $response = Http::get($this->url_api . 'films');

        return $response;
    }
}

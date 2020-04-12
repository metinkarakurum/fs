<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;


class FoursquareService
{
    public $client_id;
    public $client_secret;
    public $version;

    public function __construct()
    {
        $this->client_id     = 'FC5OIRZM14YEYI4WGGZQDS2BP1CPKK1GXYACCYPNRPEYJNA3';
        $this->client_secret = '4IDQCDYTZDAXFB340MZGY12YSUW3I1L5IA4RITGQW13FYN05';
        $this->version       = '20200330';
        $this->place         = 'valetta';
    }

    function getCategories()
    {

        $request = Http::get('https://api.foursquare.com/v2/venues/categories',
        [
            'client_id'     => $this->client_id,
            'client_secret' => $this->client_secret,
            'v'             => $this->version
        ]);

        $response=json_decode($request);
        return $response->response->categories;
    }

    function getVenues($category)
    {
        $request = Http::get('https://api.foursquare.com/v2/venues/search',
        [
            'client_id'     => $this->client_id,
            'client_secret' => $this->client_secret,
            'v'             => $this->version,
            'near'          => $this->place,
            'categoryId'    => $category
        ]);
        $response=json_decode($request);
        return $response->response->venues;

    }

}

<?php

namespace Chamhi\MaCities;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Chamhi\MaCities\Region;
use Chamhi\MaCities\City;


class MaCitiesController extends Controller
{

    /**
     * Return all regions from the database.
     */
    public function getAllRegions()
    {
        return Region::orderBy('name')->get();
    }

    /**
     * Return all cities.
     */
    public function getAllCities()
    {
        return City::orderBy('name')->get();
    }

    /**
     * Return all cities for the given region id.
     */
    public function getCitiesByRegion($region_id)
    {
        return City::where('region_id', $region_id)->orderBy('name')->get();
    }

}

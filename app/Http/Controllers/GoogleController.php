<?php

namespace App\Http\Controllers;

//
use Illuminate\Http\Request;
use Analytics;
use Spatie\Analytics\Period;

class GoogleController extends Controller {

    public function index() {
        //retrieve visitors and pageview data for the current day and the last seven days
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));
        echo "<pre>";
        print_r($analyticsData);
        exit;
    }

}

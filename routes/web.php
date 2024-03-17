<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('home');
});

Route::get('aboutus', function () {
    return view('aboutus');
});

Route::get('services', function () {
    return view('services');
});

Route::get('sectors', function () {
    return view('sectors');
});

Route::get('clients', function () {
    return view('clients');
});

Route::get('international-associates', function () {
    return view('international-associates');
});

Route::get('careers-division2', function () {
    return view('careers-division2');
});

Route::get('careers-division3', function () {
    return view('careers-division3');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('accreditation-membership', function () {
    return view('accreditation-membership');
});

Route::get('coastal-engineering-climate-adaptation', function () {
    return view('coastal-engineering-climate-adaptation');
});

Route::get('commercial-corporate', function () {
    return view('commercial-corporate');
});

Route::get('education-skills-development', function () {
    return view('education-skills-development');
});

Route::get('environmental-social-engineering', function () {
    return view('environmental-social-engineering');
});

Route::get('geographical-information-system-gis-remote-sensing-rs', function () {
    return view('geographical-information-system-gis-remote-sensing-rs');
});

Route::get('healthcare', function () {
    return view('healthcare');
});

Route::get('industrial', function () {
    return view('industrial');
});

Route::get('institutional', function () {
    return view('institutional');
});

Route::get('irrigation-water-resources', function () {
    return view('irrigation-water-resources');
});

Route::get('iso-9001-2008-certified-company', function () {
    return view('iso-9001-2008-certified-company');
});

Route::get('iso-140012015-certified', function () {
    return view('iso-140012015-certified');
});

Route::get('petroleum-2', function () {
    return view('petroleum-2');
});

Route::get('quality-council-of-india', function () {
    return view('quality-council-of-india');
});

Route::get('residential-2', function () {
    return view('residential-2');
});

Route::get('roads-bridges-urban-transport', function () {
    return view('roads-bridges-urban-transport');
});

Route::get('tourism-heritage-conservation', function () {
    return view('tourism-heritage-conservation');
});

Route::get('urban-municipal-engineering', function () {
    return view('urban-municipal-engineering');
});

Route::get('urban-transport-traffic-improvements', function () {
    return view('urban-transport-traffic-improvements');
});

Route::get('water-supply-sewerage-waste-water-solid-waste', function () {
    return view('water-supply-sewerage-waste-water-solid-waste');
});




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

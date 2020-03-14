<?php

use Illuminate\Support\Facades\Route;

use GuzzleHttp\Client;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    
    //ROMANIA
    $client = new Client();

    //cazuri de infectie pe Romania
    $responseTotal = $client->request('GET', 'https://coronavirus-monitor.p.rapidapi.com/coronavirus/cases_by_country.php',[
        'headers' => [
            "x-rapidapi-host" => "coronavirus-monitor.p.rapidapi.com",
            "x-rapidapi-key" => "8c88931240mshdcb9c57ae9f1e42p1b76bajsnd157d59040d2"
        ]
    ]);

    //aici salvam pe ce loc se afla ROmania in mom de fata
    global $idTara;

    $bodyTotal = $responseTotal->getBody()->getContents();
    $cazuri = json_decode($bodyTotal)->countries_stat;

    foreach($cazuri as $key=>$value){
        if($value->country_name == "Romania"){
            $idTara = $key;
        };
    };

    $cazuriRomania = $cazuri[$idTara];
    
    $nrTotalCazuriRomania = $cazuriRomania->cases;
    $nrTotalDecese = $cazuriRomania->deaths;
    $nrTotalVindecati = $cazuriRomania->total_recovered;
    $nrCazuriNoi = $cazuriRomania->new_cases;
    $nrCazuriCritice = $cazuriRomania->serious_critical;

    //END OF ROMANIA


    //GLOBALLY
    $clientGlobal = new Client();

    $globalTotal = $client->request('GET', 'https://coronavirus-monitor.p.rapidapi.com/coronavirus/worldstat.php',[
        'headers' => [
            "x-rapidapi-host" => "coronavirus-monitor.p.rapidapi.com",
            "x-rapidapi-key" => "8c88931240mshdcb9c57ae9f1e42p1b76bajsnd157d59040d2"
        ]
    ]);

    $bodyGlobalTotal = $globalTotal->getBody()->getContents();
    $cazuriGlobale = json_decode($bodyGlobalTotal);
    // dd($cazuriGlobale);
    
    //END OF GLOBALLY

    //RANDOM IMAGE
    $clientImage = new Client();
    $virusImage = $client->request('GET', 'https://coronavirus-monitor.p.rapidapi.com/coronavirus/masks.php',[
        'headers' => [
            "x-rapidapi-host" => "coronavirus-monitor.p.rapidapi.com",
            "x-rapidapi-key" => "8c88931240mshdcb9c57ae9f1e42p1b76bajsnd157d59040d2"
        ]
    ]);

    $imageSource = $virusImage->getBody()->getContents();
    
    
    
    //END OF RANDOM IMAGE

    return view('home',[
        'nrTotalCazuriRO' => $nrTotalCazuriRomania,
        'nrDecese' => $nrTotalDecese,
        'nrVindecati' => $nrTotalVindecati,
        'nrCazuriNoi' => $nrCazuriNoi,
        'nrCazuriCritice' => $nrCazuriCritice,
        'increase' => round(($nrCazuriNoi*100)/$nrTotalCazuriRomania,2),
        'globalTotal' => $cazuriGlobale->total_cases,
        'globalDeaths' => $cazuriGlobale->total_deaths,
        'globalRecovered' => $cazuriGlobale->total_recovered,
        'globalNew' => $cazuriGlobale->new_cases,
        'globalNewDeaths' => $cazuriGlobale->new_deaths,
        'lastUpdate' => $cazuriGlobale->statistic_taken_at,
        'imageSrc' => $imageSource
    ]);

});

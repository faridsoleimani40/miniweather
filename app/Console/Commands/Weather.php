<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Weather as Model;
use Illuminate\Support\Facades\Http;


class Weather extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'weather:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get information api and save to db every2Minutes ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(Model $weather)
    {
        $madrid = Http::get('http://api.openweathermap.org/data/2.5/weather?q=Madrid,spain&units=metric&APPID=c169250aeaa47aaa7d3c2f50f6da6d46');
        $barcelona = Http::get('http://api.openweathermap.org/data/2.5/weather?q=Barcelona,spain&units=metric&APPID=c169250aeaa47aaa7d3c2f50f6da6d46');
        if($madrid['main']['temp'] >30 ) $status="hot weather";
        else if($madrid['main']['temp'] < 4) $status="cold weather";
        else $status="Good weather";
        $weather::create([
            'city_name' => $madrid['name'],
            'description' => $madrid['weather']['0']['description'],
            'lon' => $madrid['coord']['lon'],
            'lat' => $madrid['coord']['lat'],
            'wind_speed' => $madrid['wind']['speed'],
            'humidity' => $madrid['main']['humidity'],
            'pressure' => $madrid['main']['pressure'],
            'temp' => $madrid['main']['temp'],
            'temp_max' => $madrid['main']['temp_max'],
            'temp_min' => $madrid['main']['temp_min'],
            'status' =>  $status,
        ]);
        if($barcelona['main']['temp'] >30 ) $status="hot weather";
        else if($barcelona['main']['temp'] < 4) $status="cold weather";
        else $status="Good weather";
        $weather::create([
            'city_name' => $barcelona['name'],
            'description' => $barcelona['weather']['0']['description'],
            'lon' => $barcelona['coord']['lon'],
            'lat' => $barcelona['coord']['lat'],
            'wind_speed' => $barcelona['wind']['speed'],
            'humidity' => $barcelona['main']['humidity'],
            'pressure' => $barcelona['main']['pressure'],
            'temp' => $barcelona['main']['temp'],
            'temp_max' => $barcelona['main']['temp_max'],
            'temp_min' => $barcelona['main']['temp_min'],
            'status' => $status,
        ]);
        \Log::info("This Message Sucessfully Saved in DB !");

        $this->info('This Message Sucessfully Saved in DB !');

    }
}

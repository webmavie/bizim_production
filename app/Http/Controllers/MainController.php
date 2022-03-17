<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\SlideImage;
use App\Models\Setting;
use App\Models\Question;
use App\Models\Price;
use App\Models\Partner;
use App\Models\OurTeam;
use App\Models\WModel;
use App\Models\ModelImages;

class MainController extends Controller
{
    public function __construct()
    {
        $setting = Setting::first();
        $services = Service::all();

        view()->share([
            'setting' => $setting,
            'services' => $services
        ]);
    }
    public function welcome()
    {
        $slideimages = SlideImage::all();
        $partners = Partner::all();
        $ourteams = OurTeam::all();
        return view('welcome', compact('slideimages', 'partners', 'ourteams'));
    }

    public function Service($slug){
        $service_exists = Service::whereSlug($slug)->exists();
        !$service_exists ? abort(404) : null;
        $service = Service::whereSlug($slug)->first();
        if ($service->questions != 'null') {
            $questions = Question::whereIn('id', json_decode($service->questions))->get();
        }else{
            $questions = null;
        }
        $prices = json_decode($service->prices);
        $included_in_cost = json_decode($service->included_in_cost);
        return view('service', compact('service', 'questions', 'prices', 'included_in_cost'));
    }

    public function Models(){
        $models = WModel::all();
        return view('models', compact('models'));
    }

    public function Model($slug){
        $model_exists = WModel::whereSlug($slug)->exists();
        !$model_exists ? abort(404) : null;
        $model = WModel::whereSlug($slug)->first();
        return view('model', compact('model'));
    }
}

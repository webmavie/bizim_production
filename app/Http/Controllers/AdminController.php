<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\SlideImage;
use App\Models\Partner;
use App\Models\OurTeam;
use App\Models\Service;
use App\Models\Question;
use App\Models\Video;
use App\Models\ServiceImage;
use App\Models\WModel;
use App\Models\ModelImage;
use App\Http\Resources\ServiceResource;
use App\Http\Requests\InfoUpdateRequest;
use Validator;
use Str;

class AdminController extends Controller {
    public function Info(){
        $info = Setting::first();
        return view('admin.info-edit', compact('info'));
    }

    public function InfoUpdate(InfoUpdateRequest $request){
        $info = Setting::first();
        $info->title = $request->title;
        $info->about = $request->about;
        $info->site_description = $request->site_description;
        $info->phone = $request->phone;
        $info->whatsapp = $request->whatsapp;
        $info->email = $request->email;
        $info->address = $request->address;
        $info->facebook = $request->facebook;
        $info->instagram = $request->instagram;
        $info->partners = $request->has('partners');
        $info->our_team = $request->has('our_team');
        if ($request->hasFile('about_image')) {
            if (file_exists($info->about_image)) {
                unlink($info->about_image);
            }
            $image_name = time().'.'.$request->about_image->getClientOriginalName();
            $request->about_image->move(public_path('images/info'), $image_name);
            $info->about_image = 'images/info/'.$image_name;
        }
        if ($request->hasFile('mobile_image')) {
            if (file_exists($info->mobile_image)) {
                unlink($info->mobile_image);
            }
            $image_name = time().'.'.$request->mobile_image->getClientOriginalName();
            $request->mobile_image->move(public_path('images/info'), $image_name);
            $info->mobile_image = 'images/info/'.$image_name;
        }
        $info->save();
        return redirect()->route('admin.index')->with('success', 'Məlumatlar uğurla yeniləndi');
    }

    public function Slides(){
        $slides = SlideImage::all();
        return view('admin.slides', compact('slides'));
    }

    public function SlidesStore(Request $request){
        $validator = Validator::make($request->all(),[
            'images' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if($request->hasFile('images')){
            foreach ($request->images as $image) {
                $slide = new SlideImage;
                $image_name = time().'.'.$image->getClientOriginalName();
                $image->move(public_path('images/slides'), $image_name);
                $slide->image = 'images/slides/'.$image_name;
                $slide->save();
            }
        }
        return redirect()->route('admin.slides');
    }

    public function SlidesDelete(Request $request){
        $slide = SlideImage::find($request->id);
        if (file_exists($slide->image)) {
            unlink($slide->image);
        }
        $slide->delete();
        return redirect()->route('admin.slides');
    }

    public function Partners(){
        $partners = Partner::all();
        $partners_title = Setting::first()->partners_title;
        return view('admin.partners', compact('partners', 'partners_title'));
    }

    public function PartnersTitleUpdate(Request $request){
        $request->validate([
            'partners_title' => 'nullable|max:255',
        ]);
        $info = Setting::first();
        $info->partners_title = $request->partners_title;
        $info->save();
        return redirect()->route('admin.partners');
    }

    public function PartnersStore(Request $request){
        $validator = Validator::make($request->all(),[
            'images' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if($request->hasFile('images')){
            foreach ($request->images as $image) {
                $partner = new Partner;
                $image_name = time().'.'.$image->getClientOriginalName();
                $image->move(public_path('images/partners'), $image_name);
                $partner->logo = 'images/partners/'.$image_name;
                $partner->save();
            }
        }
        return redirect()->route('admin.partners');
    }

    public function PartnerDelete(Request $request){
        $partner = Partner::find($request->id);
        if (file_exists($partner->logo)) {
            unlink($partner->logo);
        }
        $partner->delete();
        return redirect()->route('admin.partners');
    }

    public function OurTeam(){
        $our_team = OurTeam::paginate(10);
        $our_team_title = Setting::first()->our_team_title;
        return view('admin.our-team.list', compact('our_team', 'our_team_title'));
    }

    public function OurTeamTitleUpdate(Request $request){
        $request->validate([
            'our_team_title' => 'nullable|max:255',
        ]);
        $info = Setting::first();
        $info->our_team_title = $request->our_team_title;
        $info->save();
        return redirect()->back();
    }

    public function OurTeamCreate(){
        return view('admin.our-team.create');
    }

    public function OurTeamStore(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'position' => 'required|max:255',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $our_team = new OurTeam;
        $image_name = time().'.'.$request->image->getClientOriginalName();
        $request->image->move(public_path('images/our-team'), $image_name);
        $our_team->image = 'images/our-team/'.$image_name;
        $our_team->name = $request->name;
        $our_team->position = $request->position;
        $our_team->save();
        return redirect()->route('admin.our-team');
    }

    public function OurTeamEdit($id){
        $member = OurTeam::find($id);
        return view('admin.our-team.edit', compact('member'));
    }

    public function OurTeamUpdate(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
            'position' => 'required|max:255',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $our_team = OurTeam::find($request->id);
        if (file_exists($our_team->image)) {
            unlink($our_team->image);
        }
        $image_name = time().'.'.$request->image->getClientOriginalName();
        $request->image->move(public_path('images/our-team'), $image_name);
        $our_team->image = 'images/our-team/'.$image_name;
        $our_team->name = $request->name;
        $our_team->position = $request->position;
        $our_team->save();
        return redirect()->route('admin.our-team');
    }

    public function OurTeamDelete(Request $request){
        $our_team = OurTeam::find($request->id);
        if (file_exists($our_team->image)) {
            unlink($our_team->image);
        }
        $our_team->delete();
        return redirect()->route('admin.our-team');
    }

    public function Services(){
        $services = ServiceResource::collection(Service::paginate(10));
        return view('admin.services.list', compact('services'));
    }

    public function ServiceEdit($id){
        $service = Service::find($id);
        if ($service->questions != 'null') {
            $myquestions = Question::whereIn('id', json_decode($service->questions))->get();
        }else{
            $myquestions = [];
        }
        $questions = Question::all();
        $prices = json_decode($service->prices);
        $included_in_cost = json_decode($service->included_in_cost);
        return view('admin.services.edit', compact('service', 'questions', 'myquestions', 'prices', 'included_in_cost'));
    }

    public function ServiceUpdate(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255',
            'main_description' => 'required',
            'description' => 'required',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'bg_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'questions' => 'nullable',
            'included_in_cost' => 'nullable',
            'prices' => 'nullable',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $service = Service::find($request->id);
        $service->name = $request->name;
        $service->slug = Str::slug($request->name);
        $service->main_description = $request->main_description;
        $service->description = $request->description;
        $service->col4 = $request->has('col4');
        $service->questions_exists = $request->has('questions_exists');
        $service->prices_exists = $request->has('prices_exists');
        $service->included_in_cost_exists = $request->has('included_in_cost_exists');
        $service->images_exists = $request->has('images_exists');
        $service->videos_exists = $request->has('videos_exists');
        if($request->hasFile('main_image')){
            if (file_exists($service->main_image)) {
                unlink($service->main_image);
            }
            $image_name = time().'.'.$request->main_image->getClientOriginalName();
            $request->main_image->move(public_path('images/services/'), $image_name);
            $service->main_image = 'images/services/'.$image_name;
        }
        if($request->hasFile('bg_image')){
            if (file_exists($service->bg_image)) {
                unlink($service->bg_image);
            }
            $image_name = time().'.'.$request->bg_image->getClientOriginalName();
            $request->bg_image->move(public_path('images/services/'), $image_name);
            $service->bg_image = 'images/services/'.$image_name;
        }
        $service->questions = json_encode($request->questions);
        $service->included_in_cost = $request->included_in_cost;
        $service->prices = $request->prices;
        $service->save();
        return redirect()->route('admin.services.list');
    }

    public function ServiceCreate(){
        $questions = Question::all();
        return view('admin.services.create', compact('questions'));
    }

    public function ServiceStore(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255',
            'main_description' => 'required',
            'description' => 'required',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'bg_image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'questions' => 'nullable',
            'included_in_cost' => 'nullable',
            'prices' => 'nullable',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $service = new Service;
        $service->name = $request->name;
        $service->slug = Str::slug($request->name);
        $service->main_description = $request->main_description;
        $service->description = $request->description;
        $service->col4 = $request->has('col4');
        $service->questions_exists = $request->has('questions_exists');
        $service->prices_exists = $request->has('prices_exists');
        $service->included_in_cost_exists = $request->has('included_in_cost_exists');
        $service->images_exists = $request->has('images_exists');
        $service->videos_exists = $request->has('videos_exists');
        if($request->hasFile('main_image')){
            $image_name = time().'.'.$request->main_image->getClientOriginalName();
            $request->main_image->move(public_path('images/services/'), $image_name);
            $service->main_image = 'images/services/'.$image_name;
        }
        if($request->hasFile('bg_image')){
            $image_name = time().'.'.$request->bg_image->getClientOriginalName();
            $request->bg_image->move(public_path('images/services/'), $image_name);
            $service->bg_image = 'images/services/'.$image_name;
        }
        $service->questions = json_encode($request->questions);
        $service->included_in_cost = $request->included_in_cost;
        $service->prices = $request->prices;
        $service->save();
        return redirect()->route('admin.services.list');
    }

    public function ServiceDelete(Request $request){
        $service = Service::find($request->id);
        $images = ServiceImage::where('service_id', $request->id)->get();
        foreach ($images as $image){
            if (file_exists($image->image)) {
                unlink($image->image);
            }
            $image->delete();
        }
        if (file_exists($service->main_image)) {
            unlink($service->main_image);
        }
        if (file_exists($service->bg_image)) {
            unlink($service->bg_image);
        }
        $service->delete();
        return redirect()->route('admin.services.list');
    }

    public function ServiceImages($id){
        $images = ServiceImage::where('service_id', $id)->get();
        $service = Service::find($id);
        return view('admin.services.images', compact('images', 'service'));
    }

    public function ServiceImageStore(Request $request){
        $validator = Validator::make($request->all(),[
            'service_id' => 'required',
            'images' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if($request->hasFile('images')){
            foreach ($request->images as $image) {
                $serviceimage = new ServiceImage;
                $image_name = time().'.'.$image->getClientOriginalName();
                $image->move(public_path('images/services/'), $image_name);
                $serviceimage->image = 'images/services/'.$image_name;
                $serviceimage->service_id = $request->service_id;
                $serviceimage->save();
            }
        }
        return redirect()->route('admin.service.images', $request->service_id);
    }

    public function ServiceImageDelete(Request $request){
        $serviceimage = ServiceImage::find($request->id);
        if (file_exists($serviceimage->image)) {
            unlink($serviceimage->image);
        }
        $serviceimage->delete();
        return redirect()->route('admin.service.images', $serviceimage->service_id);
    }

    public function ServiceVideos($id){
        $videos = Video::where('service_id', $id)->get();
        $service = Service::find($id);
        return view('admin.services.videos', compact('videos', 'service'));
    }

    public function ServiceVideoStore(Request $request){
        $validator = Validator::make($request->all(),[
            'service_id' => 'required',
            'link' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $video = new Video;
        $video->link = $request->link;
        $video->service_id = $request->service_id;
        $video->save();
        return redirect()->route('admin.service.videos', $request->service_id);
    }

    public function ServiceVideoDelete(Request $request){
        $video = Video::find($request->id);
        $video->delete();
        return redirect()->route('admin.service.videos', $video->service_id);
    }

    public function ServiceQuestions(){
        $questions = Question::paginate(15);
        return view('admin.services.questions', compact('questions'));
    }

    public function ServiceQuestionStore(Request $request){
        $validator = Validator::make($request->all(),[
            'question' => 'required|max:255',
            'answer' => 'required|max:255',
        ]);
        if($request->id == null){
            $question = new Question;
        }else{
            $question = Question::find($request->id);
        }
        $question->question = $request->question;
        $question->answer = $request->answer;
        $question->save();
        return redirect()->route('admin.service.questions');
    }

    public function ServiceQuestionDelete(Request $request){
        $question = Question::find($request->id);
        $question->delete();
        return redirect()->route('admin.service.questions');
    }

    public function Models(){
        $models = WModel::paginate(15);
        $info = Setting::get(['models', 'model_title', 'model_image'])->first();
        return view('admin.models.list', compact('models', 'info'));
    }

    public function ModelInfoUpdate(Request $request){
        $validator = Validator::make($request->all(),[
            'models' => 'nullable',
            'model_title' => 'nullable|max:1500',
            'model_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $info = Setting::first();
        if($request->hasFile('model_image')){
            if (file_exists($info->model_image)) {
                unlink($info->model_image);
            }
            $image_name = time().'.'.$request->model_image->getClientOriginalName();
            $request->model_image->move(public_path('images/models'), $image_name);
            $info->model_image = 'images/models/'.$image_name;
        }
        $info->models = $request->has('models');
        $info->model_title = $request->model_title;
        $info->save();
        return redirect()->route('admin.models')->with('success', 'Məlumatlar uğurla yeniləndi');
    }

    public function ModelEdit($id){
        $model = WModel::find($id);
        return view('admin.models.edit', compact('model'));
    }

    public function ModelUpdate(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $model = WModel::findOrFail($request->id);
        $model->name = $request->name;
        $model->slug = Str::slug($request->name);
        $model->col4 = $request->has('col4');
        if($request->hasFile('main_image')){
            if (file_exists($model->main_image)) {
                unlink($model->main_image);
            }
            $image_name = time().'.'.$request->main_image->getClientOriginalName();
            $request->main_image->move(public_path('images/models/'), $image_name);
            $model->main_image = 'images/models/'.$image_name;
        }
        if($request->hasFile('image')){
            if (file_exists($model->image)) {
                unlink($model->image);
            }
            $image_name = time().'.'.$request->image->getClientOriginalName();
            $request->image->move(public_path('images/models/'), $image_name);
            $model->image = 'images/models/'.$image_name;
        }
        $model->save();
        return redirect()->route('admin.models');
    }

    public function ModelCreate(){
        return view('admin.models.create');
    }

    public function ModelStore(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $model = new WModel;
        $model->name = $request->name;
        $model->slug = Str::slug($request->name);
        $model->col4 = $request->has('col4');
        if($request->hasFile('main_image')){
            $image_name = time().'.'.$request->main_image->getClientOriginalName();
            $request->main_image->move(public_path('images/models/'), $image_name);
            $model->main_image = 'images/models/'.$image_name;
        }
        if($request->hasFile('image')){
            $image_name = time().'.'.$request->image->getClientOriginalName();
            $request->image->move(public_path('images/models/'), $image_name);
            $model->image = 'images/models/'.$image_name;
        }
        $model->save();
        return redirect()->route('admin.models');
    }

    public function ModelImages($id){
        $model = WModel::find($id);
        return view('admin.models.images', compact('model'));
    }

    public function ModelImageStore(Request $request){
        $validator = Validator::make($request->all(),[
            'model_id' => 'required',
            'images' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        foreach ($request->images as $image){
            $modelimage = new ModelImage;
            $image_name = time().'.'.$image->getClientOriginalName();
            $image->move(public_path('images/models/'), $image_name);
            $modelimage->image = 'images/models/'.$image_name;
            $modelimage->model_id = $request->model_id;
            $modelimage->save();
        }
        return redirect()->back();
    }

    public function ModelImageDelete(Request $request){
        $image = ModelImage::find($request->id);
        if (file_exists($image->image)) {
            unlink($image->image);
        }
        $image->delete();
        return redirect()->back();
    }

    public function ModelDelete(Request $request){
        $model = WModel::find($request->id);
        $images = ModelImage::where('model_id', $request->id)->get();
        foreach ($images as $image){
            if (file_exists($image->image)) {
                unlink($image->image);
            }
            $image->delete();
        }
        if (file_exists($model->main_image)) {
            unlink($model->main_image);
        }
        if (file_exists($model->image)) {
            unlink($model->image);
        }
        $model->delete();
        return redirect()->back();
    }
}

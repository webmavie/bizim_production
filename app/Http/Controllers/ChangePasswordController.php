<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
  
class ChangePasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.changePassword');
    } 
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        
        if ($request->hazirki_parol != null && $request->yeni_parol != null && $request->yeni_parolu_tesdiqle != null) {
            $request->validate([
                'hazirki_parol' => ['required', new MatchOldPassword],
                'yeni_parol' => ['required'],
                'yeni_parolu_tesdiqle' => ['same:yeni_parol'],
            ]);
            User::find(auth()->user()->id)->update([
                'password'=> Hash::make($request->yeni_parol)
            ]);
        }
   
        User::find(auth()->user()->id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
            ]);
   
        return redirect()->back();
    }
}
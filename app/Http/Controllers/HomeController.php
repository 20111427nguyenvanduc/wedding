<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public $text = "VS";

    public $img_bg = 'assets/img/club/background.png';


    public function index()
    {
        $this->views['title'] = "TS&KH";

        $this->views['wishs'] =  Wish::orderBy('created_at','DESC')->take(10)->get();

        return view('home.index', $this->views);

    }

    public function album()
    {
        $this->views['title'] = "TS&KH";

        return view('category.photoAlbum', $this->views);

    }

    public function thiepMoi(Request $request){

        $background = file_get_image_background($this->img_bg);
    }

    public function wish(Request $request)
    {

        $wish = new Wish();
        $wish->name = $request->get('name');
        $wish->phone = $request->get('email');
        $wish->body = $request->get('content');
        $wish->save();

        return response()->json(['error' => false, 'message' => 'Gửi lời chúc thành công']);

    }
}

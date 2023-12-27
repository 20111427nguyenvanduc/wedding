<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use Illuminate\Http\Request;
use Image;

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

    public function index()
    {
        $this->views['title'] = "TS&KH";

        $this->views['wishs'] = Wish::orderBy('created_at', 'DESC')->take(10)->get();

        return view('home.index', $this->views);

    }

    public function album()
    {
        $this->views['title'] = "TS&KH";

        return view('category.photoAlbum', $this->views);

    }

    public function thiepMoi(Request $request)
    {

        if($request->has('name') && $request->get('name') != ''){
            $originalImage = imagecreatefrompng(public_path("thiepmoi.png"));

            $width = imagesx($originalImage);
            $height = imagesy($originalImage);

            $newImage = imagecreatetruecolor($width, $height);


            imagecopy($newImage, $originalImage, 0, 0, 0, 0, $width, $height);

            $text = $request->get("name");
            $color = imagecolorallocate($newImage, 90, 74, 66);

            $x = 3000;
            $y = 1010;
            $font = public_path('assets/be-vietnam/BeVietnam-Medium.ttf');

            imagettftext($newImage, 150, 0, $x, $y, $color, $font, $text);

            imagesavealpha($newImage, true);

            imagepng($newImage, public_path('uploads/image/thiep-moi-cuoi-'.str_slug($text).'.png'));

            $this->views['invitation'] = '/uploads/image/thiep-moi-cuoi-'.str_slug($text).'.png';
        }else{
            $this->views['invitation'] = '/thiepmoi.png';
        }

        return view('category.invitation', $this->views);

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

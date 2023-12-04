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
        $originalImage = imagecreatefromjpeg(public_path("banner.jpg"));

        $width = imagesx($originalImage);
        $height = imagesy($originalImage);

        $newImage = imagecreatetruecolor($width, $height);

        imagecopy($newImage, $originalImage, 0, 0, 0, 0, $width, $height);

        $text = "Hồng Quang";
//        $color = imagecolorallocate($newImage, 0, 0, 0);
//        $x = 20;
//        $y = 20;

        // Insert text to the image
       // imagestring($newImage, 5, $x, $y, $text, $color);

        $font = public_path('assets/fonts/arial.ttf');

        $textcolor =imagecolorallocate($newImage, 0, 0, 0);

        imagettftext($newImage, 45, 0, 300, 210, $textcolor, $font, $text);

        imagepng($newImage, public_path('uploads/image/b.png'));

        dd($newImage);

//        return response()->download(public_path('upload/image/a.png'));

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

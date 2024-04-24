<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
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
//        $list = [508,
//            517,
//            523,
//            527,
//            529,
//            545,
//            553,
//            561,
//            581,
//            594,
//            600,
//            614,
//            622,
//            628,
//            643,
//            653,
//            660,
//            662,
//            690,
//            694,
//            701,
//            715,
//            742,
//            775,
//            778,
//            782,
//            785,
//            789,
//            798,
//            801,
//            809,
//            838,
//            851,
//            855,
//            859,
//            864,
//            866,
//            872,
//            874,
//            890,
//            899,
//            902,
//            916,
//            918,
//            921,
//            926,
//            932,
//            942,
//            945,
//            948,];
//
//
//        foreach ($list as $key => $item) {
//            $oldPath = 'duyetphuongimg/ANS00' . $item . '.JPG';
//            $newPath = 'duyetphuong/' . ($key + 1) . '.jpg';
//            if (\File::copy($oldPath, $newPath)) {
//
//            }
//        }
//
//
//
//        dd(1);

        $this->views['title'] = "TS&KH";

        $this->views['wishs'] = Wish::where('phone', 'duyetphuong')->orderBy('created_at', 'DESC')->get();

        return view('home.index', $this->views);

    }

    public function album()
    {
        $this->views['title'] = "TS&KH";

        return view('category.photoAlbum', $this->views);

    }

    public function thiepMoi(Request $request)
    {

        if ($request->has('name') && $request->get('name') != '') {

            if ($request->has('type') && $request->get('type') != '') {
                $banner = '/duyetphuong/' . $request->get('type');
            } else {
                $banner = '/duyetphuong/thiepcuoi1.jpg';
            }

            $originalImage = imagecreatefromjpeg(public_path($banner));

            $width = imagesx($originalImage);
            $height = imagesy($originalImage);

            $newImage = imagecreatetruecolor($width, $height);


            imagecopy($newImage, $originalImage, 0, 0, 0, 0, $width, $height);

            $text = $request->get("name");
            $color = imagecolorallocate($newImage, 196, 25, 38);


            $x = 2000;
            $y = 510;
            $font = public_path('assets/be-vietnam/BeVietnam-Medium.ttf');

            $bbox = imagettfbbox(20, 0, $font, $text);

            $x = $bbox[0] + (imagesx($newImage) / 3) - ($bbox[4] / 2) + 225;

//            $y = $bbox[1] + (imagesy($newImage) / 2) - ($bbox[5] / 2) - 5;

            imagettftext($newImage, 20, 0, $x, $y, $color, $font, $text);

            imagesavealpha($newImage, true);

            imagepng($newImage, public_path('uploads/image/thiep-moi-cuoi-' . str_slug($text) . '.png'));


            $invitation = new Invitation();
            $invitation->name = "Thiệp mời " . $text;
            $invitation->image = '/uploads/image/thiep-moi-cuoi-' . str_slug($text) . '.png';
            $invitation->save();
            $invitation->body = $invitation->id . "-thiep-moi-" . str_slug($text);
            $invitation->save();

            $this->views['invitation'] = '/uploads/image/thiep-moi-cuoi-' . str_slug($text) . '.png';
            $this->views['link'] = '/' . $invitation->body;
        } else {
            $this->views['invitation'] = '/duyetphuong/thiepcuoi1.jpg';
            $this->views['link'] = '/thiep-moi/';
        }

        return view('category.invitation', $this->views);

    }

    public function thiepMoiDetail($id, $slug)
    {
        $i = Invitation::find($id);
        if (!$i) {
            return redirect('/');
        }
        $this->views['invitation'] = $i;
        return view('category.invitationdetail', $this->views);
    }

    public function wish(Request $request)
    {

        $wish = new Wish();
        $wish->name = $request->get('name');
        $wish->phone = "duyetphuong";
        $wish->body = $request->get('content');
        $wish->save();

        return response()->json(['error' => false, 'message' => 'Gửi lời chúc thành công']);

    }
}

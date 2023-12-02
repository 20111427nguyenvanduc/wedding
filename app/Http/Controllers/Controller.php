<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $views;

    public function __construct()
    {

        //Detect special conditions devices
        $iPod = stripos($_SERVER['HTTP_USER_AGENT'], "iPod");

        $iPhone = stripos($_SERVER['HTTP_USER_AGENT'], "iPhone");

        $iPad = stripos($_SERVER['HTTP_USER_AGENT'], "iPad");

        $Android = stripos($_SERVER['HTTP_USER_AGENT'], "Android");

        if ($iPod || $iPhone || $iPad) {
            $this->views['agent'] = false;
            $this->views['device'] = 'ios';
        } else if ($Android) {
            $this->views['agent'] = false;
            $this->views['device'] = 'android';
        } else {
            $this->views['agent'] = true;
        }

        if (version_compare(PHP_VERSION, '7.2.0', '>=')) {

            // Ignores notices and reports all other kinds... and warnings

            error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
        }

    }
}

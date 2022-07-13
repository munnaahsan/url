<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ShortUrlController extends Controller
{





    public function url() {

    }



    public function shortDashboard(Request $request) {
        if($request->original_url) {
            $builder = new \AshAllenDesign\ShortURL\Classes\Builder();
            $main_url = $request->original_url;
            $shortURLObject = $builder->destinationUrl($main_url)->make();
            $shortURL = $shortURLObject->url_key;
            $destination_url = "http://item.com.bd/short/$shortURL";
            return view('welcome',compact('destination_url'));
        }
        return view('welcome',compact('destination_url'));
    }





    public function short(Request $request) {
        if($request->original_url) {
            $builder = new \AshAllenDesign\ShortURL\Classes\Builder();
            $main_url = $request->original_url;
            $shortURLObject = $builder->destinationUrl($main_url)->make();
            $shortURL = $shortURLObject->url_key;
            $destination_url = "http://item.com.bd/short/$shortURL";
            return view('home',compact('destination_url'));
        }
        return view('home',compact('shortURL'));
    }

    public function result(Request $request) {
        $short_url = DB::select("select * from short_urls");
        $visit_url = DB::select("select * from short_url_visits");
        return view('result', compact('short_url','visit_url'));
    }



}

<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use Illuminate\Http\Request;

class ShortUrlController extends Controller
{





    public function url() {



//        $shortURLObject = $builder->destinationUrl('https://destination.com')->make();
//        $shortURL = $shortURLObject->default_short_url;
    }




    public function short(Request $request) {

        $builder = new \AshAllenDesign\ShortURL\Classes\Builder();


//        $shortURL = $shortURLObject->default_short_url;

        if($request->original_url) {
            $main_url = $request->original_url;
            $shortURLObject = $builder->destinationUrl($main_url)->make();
//            dd($shortURLObject);
            $shortURL = $shortURLObject->default_short_url;
            dd($shortURL);
        }
//        dd($request);


        if($request->original_url) {
            $new_url = ShortUrl::create([
                'original_url' => $request->original_url
            ]);
            if($new_url) {
                $short_url = base_convert($new_url->id,10,36);
                $new_url->update([
                    'short_url' => $short_url
                ]);
                return back();
            }
        }
        return back();
    }
}

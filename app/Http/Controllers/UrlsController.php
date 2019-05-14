<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Link;

class UrlsController extends Controller
{
    
    public function store(Request $request) {

        // Validator input
        $this->validate($request, [
            'url' => 'required|url'
        ]);

        // checking data from database
        $url = Link::whereUrl($request->url)->first();

        if ($url == null) {
            $hash = $this->generateShortUrl();
            
            Link::create([
                'url' => $request->url,
                'hash' => $hash
            ]);

            $url = Link::whereUrl($request->url)->first();
        }

        return view('pages.result', compact('url'));
    }

    public function generateShortUrl() {
        $result = base_convert(rand(1000, 99999), 10, 36);
        $data = Link::whereHash($result)->first();

        if ($data != null) {
            $this->generateShortUrl();
        }

        return $result;
    }
}

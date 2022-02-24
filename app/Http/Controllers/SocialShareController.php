<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SocialShareController extends Controller
{
    public function index()
    {
        $shareButtons = \Share::page(
            'https://www.prothomalo.com/fun/%E0%A6%AF%E0%A6%A6%E0%A6%BF-%E0%A6%A8%E0%A6%BE-%E0%A6%95%E0%A6%BE%E0%A6%9F%E0%A6%BE-%E0%A6%B9%E0%A7%9F-%E0%A6%A4%E0%A6%BE%E0%A6%B9%E0%A6%B2%E0%A7%87-%E0%A6%B8%E0%A6%BE%E0%A6%B0%E0%A6%BE-%E0%A6%9C%E0%A7%80%E0%A6%AC%E0%A6%A8%E0%A7%87-%E0%A6%86%E0%A6%AE%E0%A6%BE%E0%A6%A6%E0%A7%87%E0%A6%B0-%E0%A6%9A%E0%A7%81%E0%A6%B2%E0%A7%87%E0%A6%B0-%E0%A6%A6%E0%A7%88%E0%A6%B0%E0%A7%8D%E0%A6%98%E0%A7%8D%E0%A6%AF-%E0%A6%95%E0%A6%A4-%E0%A6%B9%E0%A6%A4%E0%A7%87-%E0%A6%AA%E0%A6%BE%E0%A6%B0%E0%A7%87',
            'Your share text comes here',
        )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->reddit();

        $posts = Post::get();

        return view('socialshare', compact('shareButtons', 'posts'));
    }
}

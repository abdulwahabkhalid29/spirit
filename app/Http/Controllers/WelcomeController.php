<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\Service;
use App\Models\Team;
use App\Models\Client;
use App\Models\Post;
use App\Models\Category;
use App\Models\Blog;

class WelcomeController extends Controller
{
    public function index(){
        $carousels = Carousel::get();
        $services = Service::get();
        $teams = Team::get();
        $clients = Client::get();
        $posts = Post::get();
        $categories = Category::get();
        $alsolike = Blog::get();
        $alsoLike = Blog::where('category')->take(3)->orderBy('id','DESC')->get();
        return view('welcome',compact('carousels','services','teams','clients','posts','categories','alsolike'));
    }
}

<?php

namespace App\Http\Controllers;


use App\Posts;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use View;
use DB;
class UserController extends Controller
{


    public function homeEn()
    {

        $posts = Posts::all();

        return View::make('homeEn',['posts' => $posts]);

    }

    public function homeRu()
    {
        $posts = Posts::all();

        return view('homeRu', ['posts' => $posts]);
    }
    public function hotelsEn()
    {
        $hotels =  DB::table('hotels')->get();
        $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
        $onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
        var_dump($onlyconsonants);
        die;
        return view('template.hotelsEn', ['hotels' => $hotels]);
    }
 public function hotelsRu()
    {
        $hotels =  DB::table('hotels')->get();


        return view('template.hotelsRu', ['hotels' => $hotels]);
    }public function carRentEn()
    {
        $carsRents=  DB::table('car_rent')->pluck('price_list');

        return view('template.carRentEn',['carsRent'=> json_encode($carsRents)]);
    }

    public function  toursEn(Request $request)
    {
        $id = $request['id'];
        $posts = Posts::findOrFail($id);

        return view('template.toursEn', ['posts' => $posts]);
    }

    public function toursRu(Request $request)
    {
        $id = $request['id'];
        $posts = Posts::findOrFail($id);

        return view('template.toursRu', ['posts' => $posts]);
    }
    public function allToursRu()
    {

        $posts = Posts::all();

        return view('template.allToursRu', ['posts' => $posts]);
    }
 public function contacusEn()
    {



        return view('template.contacusEn');
    }
 public function contacusRu()
    {



        return view('template.contacusRu');
    }

    public function allToursEn()
    {

        $posts = Posts::all();

        return view('template.allToursEn', ['posts' => $posts]);



    }



    public function user_posts($id)
    {
        //
        $posts = Posts::where('author_id', $id)->where('active', '1')->orderBy('created_at', 'desc')->paginate(5);
        $title = User::find($id)->name;
        return view('home')->withPosts($posts)->withTitle($title);
    }

    public function login()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $email = $request['email'];
        $password = $request['password'];
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $posts = Posts::where('active', '1')->orderBy('created_at', 'desc')->paginate(5);
            $title = 'Latest Posts';
            return view('admin.home')->withPosts($posts)->withTitle($title);

        }
        $errors['errors'] = 'Whoops! please try again';
        return view('auth.login', ['errors'=> $errors]);
    }


    public function user_posts_all(Request $request)
    {

        $user = $request->user();
        $posts = Posts::where('author_id', $user->id)->orderBy('created_at', 'desc')->paginate(5);
        $title = $user->name;
        return view('home')->withPosts($posts)->withTitle($title);
    }

    public function user_posts_draft(Request $request)
    {

        $user = $request->user();
        $posts = Posts::where('author_id', $user->id)->where('active', '0')->orderBy('created_at', 'desc')->paginate(5);
        $title = $user->name;
        return view('home')->withPosts($posts)->withTitle($title);
    }

    /**
     * profile for user
     */
    public function profile(Request $request, $id)
    {
        $data['user'] = User::find($id);
        if (!$data['user'])
            return redirect('/');

        if ($request->user() && $data['user']->id == $request->user()->id) {
            $data['author'] = true;
        } else {
            $data['author'] = null;
        }
        $data['comments_count'] = $data['user']->comments->count();
        $data['posts_count'] = $data['user']->posts->count();
        $data['posts_active_count'] = $data['user']->posts->where('active', 1)->count();
        $data['posts_draft_count'] = $data['posts_count'] - $data['posts_active_count'];
        $data['latest_posts'] = $data['user']->posts->where('active', 1)->take(5);
        $data['latest_comments'] = $data['user']->comments->take(5);
        return view('admin.profile', $data);
    }

}

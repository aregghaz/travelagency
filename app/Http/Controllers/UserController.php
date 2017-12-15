<?php

namespace App\Http\Controllers;


use App\Posts;
use App\User;
use App\Excursion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use View;
use DB;

class UserController extends Controller
{


    public function homeEn()
    {

        $data = Array();
        $imgHome = ['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg', '8.jpg', '9.jpg', '10.jpg'];
        $number = rand(0, 9);
        $data['img'] = $imgHome[$number];
        $data['posts'] = Posts::all();
        $data['excursion'] = Excursion::all();

        return View::make('homeEn', ['data' => $data]);

    }

    public function homeRu()
    {
        $data = Array();
        $imgHome = ['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg', '8.jpg', '9.jpg', '10.jpg'];
        $number = rand(0, 9);
        $data['img'] = $imgHome[$number];
        $data['posts'] = Posts::all();
        $data['excursion'] = Excursion::all();
        return view('homeRu', ['data' => $data]);
    }

    public function hotelsEn()
    {
        $hotels = DB::table('hotels')->get();

        return view('template.hotelsEn', ['hotels' => $hotels]);
    }

    public function hotelsRu()
    {
        $hotels = DB::table('hotels')->get();


        return view('template.hotelsRu', ['hotels' => $hotels]);
    }

    public function armeniaEn()
    {


        return view('template.armeniaEn');
    }

    public function brandingOfArmeniaEn()
    {


        return view('template.brandingOfArmeniaEn');
    }
    public function servicesEn()
    {


        return view('template.servicesEn');
    }
 public function resourcesEn()
    {


        return view('template.resourcesEn');
    }

public function aboutUsEn()
    {


        return view('template.aboutUsEn');
    }


    public function carRentEn()
    {
        $carsRents = DB::table('car_rent')->pluck('price_list');

        // $hotels =  DB::table('hotels')->get();
        $vowels = array(';;');
        $onlyconsonants = str_replace($vowels, "", $carsRents);
        $only = json_decode($onlyconsonants);
        $onl = $only[0];
        var_dump($onl);
        return view('template.carRentEn', ['carsRent' => json_encode($carsRents)]);
    }

    public function toursEn(Request $request)
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
        return view('auth.login', ['errors' => $errors]);
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

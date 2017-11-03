<?php namespace App\Http\Controllers;

use App\Posts;
use App\User;
use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Request
     */
    public function index()
    {
        $posts = Posts::where('active', '1')->orderBy('created_at', 'desc')->paginate(5);
        $title = 'Latest Posts';
        return view('admin.home')->withPosts($posts)->withTitle($title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Request
     */
    public function create(Request $request)
    {
        //
        if ($request->user()->can_post()) {
            return view('posts.create');
        } else {
            return redirect('/')->withErrors('You have not sufficient permissions for writing post');
        }
    }


    public function store(Request $request)
    {
        $post = new Posts();
        $post->titleRu = $request->get('titleRu');
        $post->titleEn = $request->get('titleEn');
        $post->bodyRu = $request->get('bodyRu');
        $post->bodyEn = $request->get('bodyEn');
        $post->days = $request->get('days');
        $post->night = $request->get('night');
        $post->price = $request->get('price');
        $post->slug = str_slug($post->titleEn);

        $duplicate = Posts::where('slug', $post->slug)->first();
        if ($duplicate) {
            return redirect('new-post')->withErrors('Title already exists.')->withInput();
        }

        $post->author_id = $request->user()->id;
        if ($request->has('save')) {
            $post->active = 0;
            $message = 'Post saved successfully';
        } else {
            if ($request->has('img1')) {
                $filename1 = time()+1..'.jpg';
                $request->img1->storeAs('turs', $filename1, "uploads");
                $post->img1 = $filename1;
            }if ($request->has('img2')) {
                $filename2 = time()+2..'.jpg';
                $request->img2->storeAs('turs', $filename2, "uploads");
                $post->img2 = $filename2;
            }if ($request->has('img3')) {
                $filename3 = time()+3..'.jpg';
                $request->img3->storeAs('turs', $filename3, "uploads");
                $post->img3 = $filename3;
            }if ($request->has('img4')) {
                $filename4 = time()+4..'.jpg';
                $request->img4->storeAs('turs', $filename4, "uploads");
                $post->img4 = $filename4;
            }if ($request->has('img4')) {
                $filename5 = time()+5..'.jpg';
                $request->img5->storeAs('turs', $filename5, "uploads");
                $post->img5 = $filename5;
            }if ($request->has('img6')) {
                $filename6 = time()+6..'.jpg';
                $request->img6->storeAs('turs', $filename6, "uploads");
                $post->img6 = $filename6;
            }if ($request->has('img7')) {
                $filename7 = time()+7..'.jpg';
                $request->img7->storeAs('turs', $filename7, "uploads");
                $post->img7 = $filename7;
            }

            $post->active = 1;
            $message = 'Post published successfully';
        }
        $posts = Posts::where('active', '1')->orderBy('created_at', 'desc')->paginate(5);
        $title = 'Latest Posts';
        $post->save();
        return view('admin.home')->withPosts($posts)->withTitle($title);
    }


    public function show($slug)
    {
        $post = Posts::where('slug', $slug)->first();
        if ($post) {
            if ($post->active == false)
                return redirect('/')->withErrors('requested page not found');
            $comments = $post->comments;
        } else {
            return redirect('/')->withErrors('requested page not found');
        }
        return view('posts.show')->withPost($post)->withComments($comments);
    }


    public function edit(Request $request, $slug)
    {
        $post = Posts::where('slug', $slug)->first();
        if ($post && ($request->user()->id == $post->author_id || $request->user()->is_admin()))
            return view('posts.edit')->with('post', $post);
        else {
            return redirect('/')->withErrors('you have not sufficient permissions');
        }
    }

    /*
     *
     *
     * */

    public function update(Request $request)
    {
        //
        $post_id = $request->input('post_id');
        $post = Posts::find($post_id);
        if ($post && ($post->author_id == $request->user()->id || $request->user()->is_admin())) {
            $title = $request->input('title');
            $slug = str_slug($title);
            $duplicate = Posts::where('slug', $slug)->first();
            if ($duplicate) {
                if ($duplicate->id != $post_id) {
                    return redirect('edit/' . $post->slug)->withErrors('Title already exists.')->withInput();
                } else {
                    $post->slug = $slug;
                }
            }
            $post->title = $title;
            $post->body = $request->input('body');
            if ($request->has('save')) {
                $post->active = 0;
                $message = 'Post saved successfully';
                $landing = 'edit/' . $post->slug;
            } else {
                $post->active = 1;
                $message = 'Post updated successfully';
                $landing = $post->slug;
            }
            $post->save();
            return redirect($landing)->withMessage($message);
        } else {
            return redirect('/')->withErrors('you have not sufficient permissions');
        }
    }


    public function destroy(Request $request, $id)
    {

        $post = Posts::find($id);
        if ($post && ($post->author_id == $request->user()->id || $request->user()->is_admin())) {
            $post->delete();
            $data['message'] = 'Post deleted Successfully';
        } else {
            $data['errors'] = 'Invalid Operation. You have not sufficient permissions';
        }
        return redirect('/')->with($data);
    }
}

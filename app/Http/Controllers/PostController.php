<?php namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;
use Redirect;
use File;

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
        return view('admin.tours')->withPosts($posts)->withTitle($title);
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

        $post->days = $request->get('days');
        $post->night = $request->get('night');
        $post->price = $request->get('price');





        $post->author_id = $request->user()->id;
        if ($request->has('save')) {
            $post->active = 0;

        } else {
            if ($request->has('fileEn')) {

                $filename1 = time() + 11 .'.pdf';
                $request->fileEn->storeAs('turs', $filename1, "uploads");
                $post->linkEn = $filename1;
            }
            if ($request->has('fileRu')) {

                $filename1 = time() + 12 .'.pdf';
                $request->fileRu->storeAs('turs', $filename1, "uploads");
                $post->linkRu = $filename1;
            }
            if ($request->has('img1')) {
                $filename1 = time() + 1. . '.jpg';
                $request->img1->storeAs('turs', $filename1, "uploads");
                $post->img1 = $filename1;
            }

            $post->active = 1;

        }
        $posts = Posts::where('active', '1')->orderBy('created_at', 'desc')->paginate(5);
        $title = 'Latest Posts';
        $post->save();
        return view('admin.home')->withPosts($posts)->withTitle($title);
    }


    public function show(Request $request)
    {
        $id = $request['id'];
        $post = Posts::where('id', $id)->first();
        if ($post) {
            if ($post->active == false)
                return redirect('/')->withErrors('requested page not found');
            $comments = $post->comments;
        } else {
            return redirect('/')->withErrors('requested page not found');
        }
        return view('posts.show')->withPost($post)->withComments($comments);
    }


    public function edit(Request $request)
    {
        $id = $request['id'];
        $posts = Posts::where('id', $id)->first();
        if ($posts)
            return view('posts.edit')->with('posts', $posts);
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
        if ($post) {
            $titleEn = $request->input('titleEn');
            $titleRu = $request->input('titleRu');
            $role =  $request->input('role');

            $post->titleEn = $titleEn;
            $post->titleRu = $titleRu;
            $post->role = $role;
            if ($request->has('fileEn')) {
                File::delete('images/turs/' . $post->linkEn);

                $filename1 = time() + 11 .'.pdf';
                $request->fileEn->storeAs('turs', $filename1, "uploads");
                $post->linkEn = $filename1;
            }
            if ($request->has('fileRu')) {
                File::delete('images/turs/' . $post->linkRu);
                $filename1 = time() + 12 .'.pdf';
                $request->fileRu->storeAs('turs', $filename1, "uploads");
                $post->linkRu = $filename1;
            }
            if ($request->has('img1')) {
                $filename1 = time() + 1. . '.jpg';
                $request->img1->storeAs('turs', $filename1, "uploads");
                $post->img1 = $filename1;
            }

            if ($request->has('save')) {
                $post->active = 0;
                $message = 'Post saved successfully';
                $landing = 'edit/' . $post_id;
            } else {
                $post->active = 1;
                $message = 'Post updated successfully';
                $landing = $post->id;
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

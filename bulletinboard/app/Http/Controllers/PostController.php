<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Services\Post\PostServiceInterface;
use App\Http\Requests\PostCreateRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    private $postInterface;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PostServiceInterface $postServiceInterface)
    {
        $this->postInterface = $postServiceInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $posts = $this->postInterface->index();
        $users = User::get();
        return view('posts.list', compact(['posts', 'users']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Show the form for confirming a new resource.
     *
     * @param PostCreateRequest $request
     * @return view
     */
    public function confirm(PostCreateRequest $request)
    {
        switch ($request->input('action')) {
            case "create":
                $post = [
                    'title' => $request->title,
                    'description' => $request->description,
                ];
                Session::put('post', $post);
                return view('posts.create');
                break;
            case "confirm":
                $post = Session::get('post');
                Session::forget('post');
                $this->postInterface->confirm($post['title'], $post['description']);
                return redirect()->route('post.index')->with('success', 'Post created successfully.');
                break;
            case "cancel":
                $post = Session::get('post');
                Session::forget('post');
                return redirect()->route('post.create')->withInput(['title' => $post['title'], 'description' => $post['description']]);
                break;
            default:
                return view('posts.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @return view
     */
    public function search(Request $request)
    {
        $users = User::get();
        $search = $request->get('search');
        if ($search == '') {
            return redirect()->route('post.index');
        } else {
            $posts = Post::where('title', 'Like', '%' . $search . '%')
                ->orwhere('description', 'Like', '%' . $search . '%')
                ->paginate(config('data.pagination'));
            $posts->appends(['search' => $search]);
            return view('posts.list', compact(['posts', 'users']));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

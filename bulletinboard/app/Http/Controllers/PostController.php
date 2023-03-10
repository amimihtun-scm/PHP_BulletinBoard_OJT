<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Services\Post\PostServiceInterface;
use App\Http\Requests\PostCreateRequest;
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
        return view('posts.list');
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
        Session::put('title', $request->title);
        Session::put('description', $request->description);
        return redirect()->route('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = Session::get('title');
        $description = Session::get('description');
        $this->postInterface->store($title, $description);
        return redirect()->route('post.index')->with('success', 'Post created successfully.');
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

    /**
     * Cancel post.
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function cancel(Request $request)
    {
        $cancel = "Cancel post";
        $title = Session::get('title');
        $description = Session::get('description');
        Session::flush();
        Session::put('cancel', $cancel);
        $post = [
            'title' => $title,
            'description' => $description,
        ];
        return view('posts.create', compact('post'));
    }
}

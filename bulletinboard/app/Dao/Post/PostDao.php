<?php

namespace App\Dao\Post;

use App\Contracts\Dao\Post\PostDaoInterface;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/**
 * Data accessing object for Post
 */
class PostDao implements PostDaoInterface
{
    /**
     * To show create patient view
     * 
     * @return View patients
     */
    public function index()
    {
        if (Auth::user()->type == 1) {
            $posts = Post::paginate(config('data.pagination'));
        } else {
            $users = User::where('id', Auth::user()->id)->firstOrFail();
            $posts = Post::where('create_user_id', $users->id)->paginate(config('data.pagination'));
        }
        return $posts;
    }

    /**
     * To create post by id
     * @param $title, $description
     * @return Object $post Post Object
     */
    public function confirm($title, $description)
    {
        $post = new Post();
        $post->title = $title;
        $post->description = $description;
        $post->create_user_id = Auth::user()->id ?? 1;
        $post->updated_user_id = Auth::user()->id ?? 1;
        $post->save();
        return $post;
    }

    /**
     * To show Post detail by id
     * @param id $id Post id
     */
    public function show($id)
    {
        //
    }

    /**
     * To edit Post by id
     * @param id $id Post id
     * @return Object $post saved Post
     */
    public function edit($id)
    {
        //
    }

    /**
     * To update Post by id
     * @param Request $request request with inputs
     * @param id $id Post id
     * @return Object $post Post Object
     */
    public function update($request, $id)
    {
        //
    }

    /**
     * To delete Post by id
     * @param int $id deleted User id
     */
    public function destroy($id)
    {
        //
    }
}

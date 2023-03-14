<?php

namespace App\Services\Post;

use App\Contracts\Dao\Post\PostDaoInterface;
use App\Contracts\Services\Post\PostServiceInterface;

/**
 * Service class for Post
 */
class PostServices implements PostServiceInterface
{
    /**
     * Post dao
     */
    private $postDao;

    /**
     * Class Constructor
     * @param postDaoInterface
     * @return
     */
    public function __construct(PostDaoInterface $postDao)
    {
        $this->postDao = $postDao;
    }

    /**
     * To create post by id
     * @param $title, $description
     * @return Object $Post Post Object
     */
    public function confirm($title, $description)
    {
        $this->postDao->confirm($title, $description);
    }

    /**
     * To show Post detail by id
     * @param int $id Post id
     */
    public function show($id)
    {
        //   
    }

    /**
     * To edit Post by id
     * @param int $id Post id
     * @return Object $Post saved Post
     */
    public function edit($id)
    {
        //   
    }

    /**
     * To update Post by id
     * @param $request request with inputs
     * @param int $id Post id
     * @return Object $Post Post Object
     */
    public function update($request, $id)
    {
        //   
    }

    /**
     * To delete Post by id
     * @param int $id deleted Post id
     */
    public function destroy($id)
    {
        //   
    }
}

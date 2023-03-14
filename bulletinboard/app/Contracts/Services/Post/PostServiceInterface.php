<?php

namespace App\Contracts\Services\Post;

/**
 * Interface for Post service
 */
interface PostServiceInterface
{
    /**
     * To create post by id
     * @param $title, $description
     * @return Object $Post Post Object
     */
    public function confirm($title, $description);

    /**
     * To show Post detail by id
     * @param int $id Post id
     */
    public function show($id);

    /**
     * To edit Post by id
     * @param int $id Post id
     * @return Object $Post saved Post
     */
    public function edit($id);

    /**
     * To update Post by id
     * @param Request $request request with inputs
     * @param int $id Post id
     * @return Object $Post Post Object
     */
    public function update($request, $id);

    /**
     * To delete Post by id
     * @param int $id deleted Post id
     */
    public function destroy($id);
}

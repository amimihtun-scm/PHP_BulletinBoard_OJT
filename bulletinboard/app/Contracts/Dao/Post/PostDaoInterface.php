<?php

namespace App\Contracts\Dao\Post;

/**
 * Interface for Data Accessing Object of Post
 */
interface PostDaoInterface
{
    /**
     * To create post by id
     * @param $title, $description
     * @return Object $Post Post Object
     */
    public function store($title, $description);

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
     * @param $request request with inputs
     * @param int $id Post id
     * @return Object $Post Post Object
     */
    public function update($request, $id);

    /**
     * To delete Post by id
     * @param int $id Post id
     * @param int $id deleted Post id
     */
    public function destroy($id);
}

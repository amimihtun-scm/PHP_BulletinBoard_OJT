<?php

namespace App\Contracts\Dao\Post;

use App\Http\Requests\UpdatePostRequest;

/**
 * Interface for Data Accessing Object of Post
 */
interface PostDaoInterface
{
    /**
     * To show Post detail by id
     * @param string $id Post id
     */
    public function show($id);

    /**
     * To edit Post by id
     * @param string $id Post id
     * * @return Object $Post saved Post
     */
    public function edit($id);
    
    /**
     * To update Post by id
     * @param UpdatePostRequest $request request with inputs
     * @param string $id Post id
     * @return Object $Post Post Object
     */
    public function update($request, $id);

    /**
     * To delete Post by id
     * @param string $id Post id
     * @param string $id deleted Post id
     */
    public function destroy($id);

    /**
     * To submit Post login 
     * @param $request
     * @return View Posts 
     */
    public function login($request);
}

<?php


namespace Domain\Service\Post;
use App\Models\Post;
use Exception;
use Illuminate\Support\Facades\DB;


class Service 
{
    public function postList($request)
    {
        $posts = Post::all();

        return $posts;
    }

    public function store($request)
    {
        try{
            DB::beginTransaction();

            $post_params  = [
                'name' => $request->name,
                'description' => $request->description
            ];

            $post = Post::create($post_params);

            DB::commit();

            return $post;

        } catch (Exception $e){

            DB::rollback();

            throw $e;
        }
    }

}
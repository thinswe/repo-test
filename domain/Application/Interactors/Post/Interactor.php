<?php

namespace Domain\Application\Interactors\Post;

// use app\Models\Post;
// use Domain\Application\Interactor\Post;
use Domain\Application\Usecases\Post\Usecase;
use Domain\Application\Usecase\Post;
use Domain\Service\Post\Service;

class Interactor implements Usecase
{
    private $service;
    private $base_path = "pages.posts.";
    private $base_route = "post.";

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index($request){

        $posts = $this->service->postList($request);

        $data = [
            'posts' => $posts
        ];

        return viewPath($this->base_path.'index', $data);
    }

    public function create($request){

        $data = [
            'action' => route($this->base_route. 'store'),
            'method' => 'post'
        ];

        return viewPath($this->base_path.'create', $data);
    }

    public function store($request){

      $this->service->store($request);

      return jsonResponse('success', 'Successfully Created', route($this->base_route.'index'));
    }
}
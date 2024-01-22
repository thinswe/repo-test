<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Domain\Application\Usecases\Post\Usecase;

class PostController extends Controller
{
    public $usecase;

    public function __construct(Usecase $usecase)
    {
        $this->usecase = $usecase;
    }

    public function index(Request $request)
    {
        return $this->usecase->index($request);
    }
    public function create(Request $request)
    {
        return $this->usecase->create($request);
    }
    public function store(Request $request)
    {
        return $this->usecase->store($request);
    }
}

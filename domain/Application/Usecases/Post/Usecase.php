<?php
namespace Domain\Application\Usecases\Post;

interface Usecase
{
    public function index($request);
    public function create($request);
    public function store($request);
}
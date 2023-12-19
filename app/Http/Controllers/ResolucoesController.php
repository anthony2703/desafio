<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResolucoesController extends Controller
{
    private $model;

    public function __construct(Resolucao $resolucao)
    {
        $this->model = $resolucao;
    }

    public function index(Request $request)
    {
        $resolucoes = $$this->model->getResolucoes(search: $request->busca ?? '');
    }
}

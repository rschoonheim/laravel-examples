<?php

namespace App\Http\Controllers;

use App\Http\Resources\ExampleResource;
use Illuminate\Http\Request;

class ExampleResourceController extends Controller
{
    public function index()
    {
        return ExampleResource::make([]);
    }
}

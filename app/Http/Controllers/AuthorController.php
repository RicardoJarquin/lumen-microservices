<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    use ApiResponser;

    public function index():Response
    {
        $test = 123;
        $test3 = 43121;
        $asd= 5421;
        dd(213);
        return true;
    }

    public function store(Request $request)
    {

    }

    public function show()
    {

    }

    public function update(Request $request, $author)
    {

    }

    public function destroy($author)
    {

    }
}

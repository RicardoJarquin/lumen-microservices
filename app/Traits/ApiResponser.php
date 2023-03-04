<?php

namespace App\Traits;

use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;

trait ApiResponser
{
    public function successResponse(string|array $data, string $code = Response::HTTP_OK):JsonResponse
    {
        return response()->json(['data' => $data], $code);
    }

    public function errorResponse(string|array $data, string $code = Response::HTTP_OK):JsonResponse
    {
        return response()->json(['data' => $data], $code);
    }
}

<?php

namespace App\Http\Controllers;


trait ApiResponseTrait
{
    public function apiResponse($data = null, $message = null, $status = null){
        $data = [
            'data' => $data,
            'message' => $message,
            'status' => $status,
        ];
        return response($data);
    }
}

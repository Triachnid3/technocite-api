<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
  public function handleResponse($data, $message, $code = 200)
  {
    return response()->json([
      'data' => $data,
      'message' => $message,
    ], $code);
  }

  public function handleError($message, $code = 404)
  {
    return response()->json([
      'message' => $message,
    ], $code);
  }
}

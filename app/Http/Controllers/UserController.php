<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function retrieve(Request $request): JsonResponse
    {
        try{
            $this->validate($request, [
                'userId' => 'string'
            ]);

            $address = User::where('id', $request->userId)->first();

            return response()->json($address, 200);

        } catch(Exception $e){
            return response()->json($e->getMessage(), 500);
        }
    }
}

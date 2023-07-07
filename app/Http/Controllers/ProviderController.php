<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = Provider::all();
        return response()
            ->json(
                [
                    'status' => 200,
                    'data' => [
                        'providers' => $providers,
                    ]
                ]
            );
    }
}

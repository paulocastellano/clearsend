<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Models\Domain;

class DomainController extends Controller
{

    public function index(Request $request)
    {
        $request->validate([
            'domain' => ['required'],
        ]);

        $domain = Domain::where('name', $request->domain)->with('emails')->first();
        if(!$domain) {
            return response()->json(['error' => 'Domain not found'], 404);
        }

        return response()->json($domain);

    }


}

<?php

namespace App\Http\Middleware\Api;

use Closure;
use Illuminate\Http\Request;

use App\Models\Workspace;

class CheckWorkspace
{
    /**
     * Handle an incoming request.
     *
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $workspace = Workspace::where('api_token', $request->header('token'))->first();
        if (!$workspace) {
            return response()->json(['status' => 'error', 'message' => 'Invalid workspace token'], 404);
        }

        $request->merge([
            'workspace' => $workspace,
        ]);

        return $next($request);
    }
}

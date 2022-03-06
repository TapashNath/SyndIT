<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use App\Models\Role;
use Closure;
use Illuminate\Http\Request;

class GetPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $role_id = Admin::where('id',Session()->get('id'))->value('role_id');
        $permission = Role::where('id', $role_id)->value("permission");
        $request->session()->forget('permission');
        $request->session()->put('permission', $permission);
        // return  $request->session()->get('permission');
        return $next($request);
    }
}

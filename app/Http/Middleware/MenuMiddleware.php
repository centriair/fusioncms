<?php

namespace App\Http\Middleware;

use Closure;
use Fusion\Facades\Menu;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MenuMiddleware
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
        $user = $request->user();

        $this->resetMenu($user);

        return $next($request);
    }

    protected function resetMenu($user)
    {
        if (!$user->isOwner()) {
            $menu = [];
            $oldMenu = Menu::get('admin');
            foreach ($oldMenu as $name => $m) {
                if (in_array($name, ['dashboard', 'filemanager', 'inbox', 'content', 'system', 'users']) || Str::startsWith($name, ['matrix-', 'taxonomy-'])) {
                    $menu[$name] = $m;
                }
            }

            Menu::set('admin', $menu);
        }
    }
}
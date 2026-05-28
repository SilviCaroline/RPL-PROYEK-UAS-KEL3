<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseControllerAlias;   
class BaseController extends BaseControllerAlias
{
    protected function successRedirect($route, $message)
    {
        return redirect()
            ->route($route)
            ->with('success', $message);
    }

    protected function errorRedirect($message)
    {
        return back()->with('error', $message);
    }

    protected function generateCode($prefix)
    {
        return $prefix . date('YmdHis');
    }
}
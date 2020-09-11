<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
    public function index()
    {
        return "<h1>Listagem do usuario codigo 1</h1>";
    }

    public function getData(Request $request)
    {
        return "<h1>Disparou ação de get</h1>";
    }

    public function postData(Request $request)
    {
        var_dump($request);
        return "<h1>Disparou ação de post</h1>";
    }

    public function testPut(Request $request)
    {
        echo "<h1>Usuário da edição é o de código 1</h1>";
        var_dump($request);
        return "<h1>Disparou ação de PUT</h1>";
    }

    public function testPatch(Request $request)
    {
        echo "<h1>Usuário da edição é o de código 1</h1>";
        var_dump($request);
        return "<h1>Disparou ação de PATCH</h1>";
    }

    public function destroy()
    {
        return "<h1>Disparou ação de Delete para o registro 1</h1>";
    }

    public function inspect()
    {
        $route = Route::current();
        $name = Route::currentRouteName();
        $action = Route::currentRouteAction();

        var_dump($route, $name, $action);
    }
}

<?php

namespace App\Http\Controllers;

class CoinsController extends Controller
{
    public function index()
    {
        try {
            $coins=[];
            $response = json_decode(file_get_contents(
                'https://www.dolarsi.com/api/api.php?type=valoresprincipales'), true);
            foreach ($response as $value) {
                if($value["casa"]["nombre"] == "Dolar Oficial" || $value["casa"]["nombre"] == "Dolar Blue"){
                    $coins[] = $value["casa"];
                }
            }
            return view('index', compact("coins"));
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            abort(400, "Ups, algo salió mal! recargue la pagina y vuelva a intentar");
        }
    }
    public function getAll()
    {
        try {
            $coins=[];
            $response = json_decode(file_get_contents(
                'https://www.dolarsi.com/api/api.php?type=valoresprincipales'), true);
                foreach ($response as $value) {
                    $coins[] = $value["casa"];
                }
            return view('coins.index', compact("coins"));
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            abort(400, "Ups, algo salió mal! recargue la pagina y vuelva a intentar");
        }
    }
}

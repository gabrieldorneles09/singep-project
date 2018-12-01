<?php

namespace App\Http\Controllers\Cadastro\Palestrante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Usuario\palestrante as pl;

/**
 * Controller responsável pelo API do cadastro de Palestrantes
 * @author Renato Rebouças da Silva
 * @copyright Fabrica de Apps
 * @since 13/10/2018
 * @version
 */

class PalestrantesController extends Controller
{
    public function list(){
     $query = pl::all();
    }

    //  public function saveIdPalestrante($id){
    // dd($id);
    //  }

    public function alter(Request $request){
        $registros = $request->all();
         part::where('id', $registros['id'])
      ->update([
      'cidade' => $registros['cidade'],
      'estado' => $registros['estado'],
      'curriculo' => $registros['curriculo'],
      'url_imagem' =>$registros['url_imagem']
        ]);    
    }

     public function delete(Request $request){
    $registros = $request->all(); 
   pl::where('id', $registros['id'])->delete();
 }
}

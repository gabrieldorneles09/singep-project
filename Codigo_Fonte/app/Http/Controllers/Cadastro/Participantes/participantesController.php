<?php

namespace App\Http\Controllers\Cadastro\Participantes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Usuario\participante as part;
// use app\Http\Controllers\Cadastro\Palestrante\palestrantesController as pl;
use App\Model\Usuario\palestrante as pl;

/**
 * Controller responsável pelo API do cadastro de Participantes
 * @author Renato Rebouças da Silva
 * @copyright Fabrica de Apps
 * @since 11/08/2018
 * @version
 */

class participantesController extends Controller{

  /**
     * Lista os Participantes
     * @param Request $request Dados de Requisição
     * @return App\Model\Usuario\participante as part Coleção de participante
     */

public function list(Request $request){
  $query = part::all();
  // dd($query);
  return $query;
}

/**
 * campo cpf deve ser criptografado
 * campo permissao recebe 0(palestrante) e 1(participante)
 */
public function save(Request $request){
  // dd("entrou");  
  $registros = $request->all();
  // cripitografia do campo cpf que será usado como senha, por isso deve ser criptografado
  $registros['cpf'] = bcrypt($registros['cpf']);
  // dd($registros); 
  if( $registros['id'] == null ){
      // part::create($registros);
      $id = part::insertGetId($registros);
      // dd($id);

      //Grava id dos paçestrante na tabela pertinente
  if( $registros['status'] == 0 ){
    // $retorno = $this->pl->saveIdPalestrante( $id );
    $id_palestrante = [ 
      'id' => null,
      'participante_id' => $id,
      'cidade' => '',
      'estado' => '',
      'curriculo' => '',
      'url_imagem' =>''
    ];
    dd($id_palestrante);
    pl::create($id_palestrante);
  }
    }else{
      // dd("entrou editar");
      part::where('id', $registros['id'])
      ->update([
          'nome' => $registros['nome'] ,
          'email' => $registros['email'] ,
          'cpf' => $registros['cpf'] ,
          'telefone' => $registros['telefone'] ,
          'filiacao' => $registros['filiacao'] ,
          'status' => $registros['status'] ,
          'permissao' => $registros['permissao'],
        ]);    
    }
  }


  /**
   * Altera um Participante
   * @param Integer $id Id do Participantes a ser alterado
   * @param Request $request Dados de Requisição
   */
  public function alterar($id,Request $request){
    //Não usado
    part::where('id',$id)->update($request->input());
  }

  /**
  * Apaga um Participante
  * @param Integer $id Id do Participante a ser apagado
  */
    public function delete(Request $request){
    $registros = $request->all(); 
   part::where('id', $registros['id'])->delete();
 }


}

<?php

namespace App\Http\Controllers;
use Illuminate\Database\QueryException;
use App\Models\Peinado;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PeinadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {   
        $peinados = Peinado::all();//eloquent, da un array con todos los datos de la tabla
        return view('peinado.index', ['peinados' => $peinados]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peinado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Queda validar los datos de entrada
        //eloquent ORM
        $peinado = new Peinado($request->all());
        $result = false;
        try{
            $result = $peinado->save(); //eloquent , inserta objeto en la tabla 
            $txtmessage = 'The haitcut has been added';
            
        }catch(QueryException $e){
            $result = false;
            $txtmessage = 'campo nulo';
          
        }catch(\Exception $e){

            $txtmessage = 'fatal error';
        }

        $message = [
                'mensajeTexto' => $txtmessage
            ];
        if($result){
            return redirect()->route('main')->with($message);
            // ->with($message) -> estos datos se guardan en la session
        }else{           
            return back()->withInput()->withErrors($message);
        }
        //dd([$result, $peinado]);
        //dd($peinado);
    }

    /**
     * Display the specified resource.
     */

  /*  public function show($id){
        $peinado = Peinado::find($id);
        dd($peinado);
        if($peinado==null){
            abort(404);
        }
       
   }*/

    public function show(Peinado $peinado): View
    {
        //inyección de dependencias -> convierte el número del id en un objeto Peinado
        return view('peinado.show', ['peinado' => $peinado]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peinado $peinado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peinado $peinado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peinado $peinado)
    {
        //
    }
}

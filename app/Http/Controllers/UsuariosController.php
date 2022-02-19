<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuarios;
use App\Http\Requests\UsuariosRequest;

class UsuariosController extends Controller
{
    public function __construct()
    {
        /**
         * Asigno el middleware auth al controlador,
         * de modo que sea necesario estar al menos autenticado
         */
        $this->middleware('auth');
    }

    /**
     * Mostrar un listado de elementos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Obtengo todos los usuarios ordenados por nombre
        $rowset = Usuarios::all();

        return view('admin.usuarios.index',[
            'rowset' => $rowset,
        ]);
    }

    /**
     * Mostrar el formulario para crear un nuevo elemento
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        //Creo un nuevo usuario vacío
        $row = new Usuarios();

        return view('admin.usuarios.editar',[
            'row' => $row,
        ]);
    }

    /**
     * Guardar un nuevo elemento en la bbdd
     *
     * @param  \App\Http\Requests\UsuariosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(UsuariosRequest $request)
    {
        Usuarios::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'usuarios' => ($request->usuarios) ? 1 : 0,
            'noticias' => ($request->noticias) ? 1 : 0,
        ]);

        return redirect('admin/usuarios')->with('success', 'Usuario <strong>'.$request->nombre.'</strong> creado');
    }

    /**
     * Mostrar el formulario para editar un elemento
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        //Obtengo el usuario o muestro error
        $row = Usuarios::where('id', $id)->firstOrFail();

        return view('admin.usuarios.editar',[
            'row' => $row,
        ]);
    }

    /**
     * Actualizar un elemento en la bbdd
     *
     * @param  \App\Http\Requests\UsuariosRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(UsuariosRequest $request, $id)
    {
        $row = Usuarios::findOrFail($id);

        Usuario::where('id', $row->id)->update([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' => ($request->cambiar_clave) ? Hash::make($request->password) : $row->password,
            'usuarios' => ($request->usuarios) ? 1 : 0,
            'noticias' => ($request->noticias) ? 1 : 0,
        ]);

        return redirect('admin/usuarios')->with('success', 'Usuario <strong>'.$request->nombre.'</strong> guardado');
    }

    /**
     * Activar o desactivar elemento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function activar($id)
    {
        $row = Usuarios::findOrFail($id);
        $valor = ($row->activo) ? 0 : 1;
        $texto = ($row->activo) ? "desactivado" : "activado";

        Usuarios::where('id', $row->id)->update(['activo' => $valor]);

        return redirect('admin/usuarios')->with('success', 'Usuario <strong>'.$row->name.'</strong> '.$texto.'.');
    }

    /**
     * Borrar elemento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function borrar($id)
    {
        $row = Usuarios::findOrFail($id);

        Usuarios::destroy($row->id);

        return redirect('admin/usuarios')->with('success', 'Usuario <strong>'.$row->nombre.'</strong> borrado');
    }
}

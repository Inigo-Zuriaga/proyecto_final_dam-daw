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
            'usuario' => $request->usuario,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'biografia' => $request->biografia,
            //'fecha' => \DateTime::createFromFormat("d-m-Y", $request->fecha_registro)->format("Y-m-d H:i:s"),
            'admin' => ($request->admin) ? 1 : 0,
        ]);

        //Imagen
        if ($request->hasFile('imagen')) {
            $archivo = $request->file('imagen');
            $nombre = $archivo->getClientOriginalExtension();
            $archivo->move(public_path()."/img/", $nombre);
            Usuarios::where('id', $row->usuario)->update(['imagen' => $nombre]);
            $texto = " e imagen subida.";
        }
        else{
            $texto = ".";
        }

        return redirect('admin/usuarios')->with('success', 'Usuario <strong>'.$request->nombre.'</strong> creado');
    }

    /**
     * Mostrar el formulario para editar un elemento
     *
     * @param  string  $usuario
     * @return \Illuminate\Http\Response
     */
    public function editar($usuario)
    {
        //Obtengo el usuario o muestro error
        $row = Usuarios::where('usuario', $usuario)->firstOrFail();

        return view('admin.usuarios.editar',[
            'row' => $row,
        ]);
    }

    /**
     * Actualizar un elemento en la bbdd
     *
     * @param  \App\Http\Requests\UsuariosRequest  $request
     * @param  string  $usuario
     * @return \Illuminate\Http\Response
     */
    public function actualizar(UsuariosRequest $request, $usuario)
    {
        $row = Usuarios::findOrFail($usuario);

        Usuario::where('usuario', $row->usuario)->update([
            'usuario' => $request->usuario,
            'email' => $request->email,
            'biografia' => $request->biografia,
            'password' => ($request->cambiar_clave) ? Hash::make($request->password) : $row->password,
            'admin' => ($request->usuarios) ? 1 : 0

        ]);

        //Imagen
        if ($request->hasFile('imagen')) {
            $archivo = $request->file('imagen');
            $nombre = $archivo->getClientOriginalExtension();
            $archivo->move(public_path()."/img/", $nombre);
            Usuarios::where('id', $row->usuario)->update(['imagen' => $nombre]);
            $texto = " e imagen subida.";
        }
        else{
            $texto = ".";
        }

        return redirect('admin/usuarios')->with('success', 'Usuario <strong>'.$request->nombre.'</strong> guardado');
    }

    /**
     * Activar o desactivar elemento.
     *
     * @param  string  $usuario
     * @return \Illuminate\Http\Response
     */
    public function activar($usuario)
    {
        $row = Usuarios::findOrFail($usuario);
        $valor = ($row->activo) ? 0 : 1;
        $texto = ($row->activo) ? "desactivado" : "activado";

        Usuarios::where('usuario', $row->usuario)->update(['activo' => $valor]);

        return redirect('admin/usuarios')->with('success', 'Usuario <strong>'.$row->usuario.'</strong> '.$texto.'.');
    }

    /**
     * Borrar elemento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function borrar($usuario)
    {
        $row = Usuarios::findOrFail($usuario);

        Usuarios::destroy($row->usuario);

        return redirect('admin/usuarios')->with('success', 'Usuario <strong>'.$row->usuario.'</strong> borrado');
    }
}

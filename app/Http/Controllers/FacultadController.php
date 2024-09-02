<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facultad;
use App\Models\Area;
use Yajra\DataTables\DataTables;

class FacultadController extends Controller
{
    private $model;

    public function __construct(){
        //$this->middleware("verify");
        $this->model = new Facultad;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->model::get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('id_area', function($row){
                        $d = Area::where('id_area',$row->id_area)->first();
                        return $d->nombre_abreviado;
                    })
                    ->addColumn('action', function($row){
                        $btn = '<button type="button" class="btn btn-primary btn-sm editRecord" data-id="'.$row->id_facultad.'" data-bs-toggle="modal" data-bs-target="#modal-center"><i class="fa fa-edit"></i></button>';
                        $btn = $btn.' <a href="javascript:void(0)" class="btn btn-danger btn-sm deleteRecord" data-id="'.$row->id_facultad.'"><i class="fa fa-trash"></i></a';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        $area = Area::get();
        $data = array('area'=>$area);
        return view('facultad',$data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_area' => 'required',
            'nombre' => 'required',
            'nombre_abreviado' => 'required',
            'direccion'=> 'required',
            'telefono' => 'required',
            'telefono_interno'=> 'required',
            'fax' => 'required',
            'email' => 'required',
            'latitud' => 'required',
            'longitud' => 'required',
            'fecha_creacion' => 'required',
            'escudo' => 'required',
            'imagen' => 'required',
            'estado_virtual' => 'required',
        ]);

        //$data = $request->all();

        if ($request->hasFile('escudo')) {
            $data['escudo'] = $request->file('escudo')->store('escudos', 'public');
        }
    
        if ($request->hasFile('imagen')) {
            $data['imagen'] = $request->file('imagen')->store('imagenes', 'public');
        }
        //$this->model::updateOrCreate(['id_facultad' => $request->table_id], $data);

        //return response()->json(['success'=>'Registro guardado exitosamente.']);

        $this->model::updateOrCreate([
                    'id_facultad' => $request->table_id
                ],
                [
                    'id_area' => $request->id_area,
                    'nombre' => $request->nombre,
                    'nombre_abreviado' => $request->nombre_abreviado,
                    'direccion' => $request->direccion,
                    'telefono' => $request->telefono,
                    'telefono_interno' => $request->telefono_interno,
                    'fax' => $request->fax,
                    'email' => $request->email,
                    'latitud' => $request->latitud,
                    'longitud' => $request->longitud,
                    'fecha_creacion' => $request->fecha_creacion,
                    'escudo' => $request->escudo,
                    'imagen' => $request->imagen,
                    'estado_virtual' => $request->estado_virtual,
                    'estado' => $request->estado
                ]);        
        
        return response()->json(['success'=>'Registro guardado exitosamente.'.$request]);
    }

    public function edit($id)
    {
        $where = array('id_facultad' => $id);
        $table  = $this->model::where($where)->first();
        $table['id'] = $table->id_facultad;
        return response()->json($table);
    }
    
    public function destroy($id)
    {
        $this->model::find($id)->delete();
        return response()->json(['success'=>'Registro borrado exitosamente.']);
    }
}


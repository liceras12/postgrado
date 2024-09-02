<?php

namespace App\Http\Controllers;

use app\Models\Area;
use Illuminate\Http\Request;
use App\Models\Universidad;
use Yajra\DataTables\DataTables;

class AreaController extends Controller
{
    private $model;

    public function __construct(){
        //$this->middleware("verify");
        $this->model = new Area;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->model::get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('id_universidad', function($row){
                        $d = Universidad::where('id_universidad',$row->id_universidad)->first();
                        return $d->nombre_abreviado;
                    })
                    ->addColumn('action', function($row){
                        $btn = '<button type="button" class="btn btn-primary btn-sm editRecord" data-id="'.$row->id_area.'" data-bs-toggle="modal" data-bs-target="#modal-center"><i class="fa fa-edit"></i></button>';
                        $btn = $btn.' <a href="javascript:void(0)" class="btn btn-danger btn-sm deleteRecord" data-id="'.$row->id_area.'"><i class="fa fa-trash"></i></a';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        $universidad = Universidad::get();
        $data = array('universidad'=>$universidad);
        return view('gestion.area',$data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_universidad' => 'required',
            'nombre' => 'required',
            'nombre_abreviado' => 'required',
        ]);
        
        $this->model::updateOrCreate([
                    'id_area' => $request->table_id
                ],
                [
                    'id_universidad' => $request->id_universidad,
                    'nombre' => $request->nombre,
                    'nombre_abreviado' => $request->nombre_abreviado,
                    'estado' => $request->estado
                ]);        
        
        return response()->json(['success'=>'Registro guardado exitosamente.'.$request]);
    }

    public function edit($id)
    {
        $where = array('id_area' => $id);
        $table  = $this->model::where($where)->first();
        $table['id'] = $table->id_area;
        return response()->json($table);
    }
    
    public function destroy($id)
    {
        $this->model::find($id)->delete();
        return response()->json(['success'=>'Registro borrado exitosamente.']);
    }
}

@extends('layout')

@section('css')
@endsection

@section('content')
    <div class="cnotainer">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Posgrado</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Gestión</a></li>
                            <li class="breadcrumb-item active">Areas</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h1>Areas opciones</h1>
        <a class="btn btn-success" href="javascript:void(0)" id="createNewRecord"> Nueva Area</a>
        <br/><br/>
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Universidad</th>
                    <th>Nombre</th>
                    <th>Nombre Abreviado</th>
                    <th>Estado</th>
                    <th width="15%">Acci&oacute;n</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="ajaxModel" tabindex="-1" aria-labelledby="exampleModalgridLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modelHeading">Titulo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form" name="form" class="needs-validation" autocomplete="off" novalidate>
                        <input type="hidden" name="table_id" id="table_id">
                        @csrf

                        <div class="mb-3">
                                    <label for="id_universidad" class="form-label">Universidad<span class="text-danger">*</span></label>                                    
                                    <select class="form-select mb-4" name="id_universidad" id="id_universidad">
                                        @foreach($universidad as $d)
                                            <option value="{{$d->id_universidad}}">{{ $d->nombre }}</option>
                                        @endforeach
                                    </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="" id="nombre"
                                placeholder="Introduzca el nombre area" required>
                        </div>
                        <div class="mb-3">
                            <label for="nombre_abreviado" class="form-label">Nombre Abreviado <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nombre_abreviado') is-invalid @enderror" name="nombre_abreviado" value="" id="nombre_abreviado"
                                placeholder="Introduzca el nombre abreviado de area" required>
                        </div>
                                               
                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado <span class="text-danger">*</span></label>
                            <select class="form-control" name="estado" id="estado">
                                <option value="S">Activado</option>
                                <option value="N">Desactivado</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <button class="btn btn-success w-100" type="submit">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

<script type="text/javascript">
    var titulo = 'Area';
    var URLindex = "{{ route('areaCrud.index') }}";
    var columnas = [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'id_universidad', name: 'id_universidad'},
              {data: 'nombre', name: 'nombre'},
              {data: 'nombre_abreviado', name: 'nombre_abreviado'},
              {data: 'estado', name: 'estado'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
</script>
<script src="{{ URL::asset('resources/js/crud.js') }}"></script>

@endsection
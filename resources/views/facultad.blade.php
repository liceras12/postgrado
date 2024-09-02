@extends('layout')
@section('css')
@endsection
@section('contenido')

<div class="cnotainer">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Posgrado</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Gestión</a></li>
                        <li class="breadcrumb-item active">Facultades</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h1>Facultades opciones</h1>
    <a class="btn btn-success" href="javascript:void(0)" id="createNewRecord"> Nueva Facultad</a>
    <br/><br/>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Area</th>
                <th>Nombre</th>
                <th>Nombre Abreviado</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Telefono_interno</th>
                <th>Fax</th>
                <th>Email</th>
                <th>Latitud</th>
                <th>Longitud</th>
                <th>Fecha_creacion</th>
                <th>Escudo</th>
                <th>Imagen</th>
                <th>Estado_virtual</th>
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
                                <label for="id_area" class="form-label">Area<span class="text-danger">*</span></label>                                    
                                <select class="form-select mb-4" name="id_area" id="id_area">
                                    @foreach($area as $d)
                                        <option value="{{$d->id_area}}">{{ $d->nombre }}</option>
                                    @endforeach
                                </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="" id="nombre"
                            placeholder="Introduzca el nombre Facultad" required>
                    </div>
                    <div class="mb-3">
                        <label for="nombre_abreviado" class="form-label">Nombre Abreviado <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nombre_abreviado') is-invalid @enderror" name="nombre_abreviado" value="" id="nombre_abreviado"
                            placeholder="Introduzca el nombre abreviado de Facultad" required>
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="form-label">Direccion <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="" id="direccion"
                            placeholder="Introduzca la direccion Facultad" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="" id="telefono"
                            placeholder="Introduzca el telefono Facultad" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono_interno" class="form-label">Telefono_Interno <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('telefono_interno') is-invalid @enderror" name="telefono_interno" value="" id="telefono_interno"
                            placeholder="Introduzca el telefono_interno Facultad" required>
                    </div>
                    <div class="mb-3">
                        <label for="fax" class="form-label">Fax <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('fax') is-invalid @enderror" name="fax" value="" id="fax"
                            placeholder="Introduzca el fax Facultad" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="" id="email"
                            placeholder="Introduzca el email Facultad" required>
                    </div>
                    <div class="mb-3">
                        <label for="latitud" class="form-label">Latitud <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('latitud') is-invalid @enderror" name="latitud" value="" id="latitud"
                            placeholder="Introduzca la latitud Facultad" required>
                    </div>
                    <div class="mb-3">
                        <label for="longitud" class="form-label">Longitud <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('longitud') is-invalid @enderror" name="longitud" value="" id="longitud"
                            placeholder="Introduzca la longitud Facultad" required>
                    </div>
                    <div class="mb-3">
                        <label for="fecha_creacion" class="form-label">Fecha_creacion <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('fecha_creacion') is-invalid @enderror" name="fecha_creacion" value="" id="fecha_creacion"
                            placeholder="Introduzca la fecha_creacion Facultad" required>
                    </div>
                    <div class="mb-3">
                        <label for="escudo" class="form-label">Escudo <span class="text-danger">*</span></label>
                        <input type="file" class="form-control @error('escudo') is-invalid @enderror" name="escudo" value="" id="escudo"
                            placeholder="Introduzca el escudo Facultad" required>
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Imagen <span class="text-danger">*</span></label>
                        <input type="file" class="form-control @error('imagen') is-invalid @enderror" name="imagen" value="" id="imagen"
                            placeholder="Introduzca la imagen Facultad" required>
                    </div>

                    <div class="mb-3">
                        <label for="estado_virtual" class="form-label">Estado_virtual <span class="text-danger">*</span></label>
                        <select class="form-control" name="estado_virtual" id="estado_virtual">
                            <option value="S">Activado</option>
                            <option value="N">Desactivado</option>
                        </select>
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
    var titulo = 'Facultad';
    var URLindex = "{{ route('facultades.index') }}";
    var columnas = [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'id_area', name: 'id_area'},
              {data: 'nombre', name: 'nombre'},
              {data: 'nombre_abreviado', name: 'nombre_abreviado'},
              {data: 'direccion', name: 'telefono'},
              {data: 'telefono', name: 'telefono'},
              {data: 'telefono_interno', name: 'telefono_interno'},
              {data: 'fax', name: 'fax'},
              {data: 'email', name: 'email'},
              {data: 'latitud', name: 'latitud'},
              {data: 'longitud', name: 'longitud'},
              {data: 'fecha_creacion', name: 'fecha_creacion'},
              {data: 'escudo', name: 'escudo'},
              {data: 'imagen', name: 'imagen'},
              {data: 'estado_virtual', name: 'estado_virtual'},
              {data: 'estado', name: 'estado'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
</script>
<script src="{{ URL::asset('resources/js/crud.js') }}"></script>

@endsection
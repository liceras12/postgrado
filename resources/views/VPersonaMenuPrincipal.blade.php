@extends('layout')
@section('css')
@endsection
@section('contenido')

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
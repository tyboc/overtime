@extends("theme.$theme.layout")
@section('titulo')
    Sistema de Menús
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/menu/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="box box-success">
            <div class="box-header whit-border" >
                <h3 class="box-title">Crear Menús</h3>
            </div>
            <form  action="{{route('guardar_menu')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                @csrf
                <div class="box-body">
                    @include('admin.menu.form')
                </div>
                <div class="box-footer">
                    <div class="col-lg-3"> </div>
                        @include('includes.boton-form-crear')
                    <div class="col-lg-6"> </div>                    
                </div>
            </form>            
        </div>
    </div>
</div>
@endsection
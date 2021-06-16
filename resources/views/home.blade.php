@extends('layouts.app')

@section('content')
<div class="container ">
    <div class=" row justify-content-center ">
        <div class="col-md-4 ">
            <div class="card-header">{{ __('Opciones') }}</div>
            <div class="card">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Tienda</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Contenido</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detalle') }}</div>

                <div class="card-body" style="height: 35rem;">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                            <div class="container">
                                <div class="row">
                                    <div class="col-4">
                                    <img class="w-50 p-3 " src="https://www.abd.es/wp-content/uploads/2016/02/icono-promociones-300x300.png" class="img-thumbnail" style="display: block;margin-left: auto; margin-right: auto;">
                                    </div>
                                    <div class="col-8">
                                        <a class="btn btn-primary btn-lg btn-block" href="#" role="button" style="height: 4rem;">Crear Promocion</a>
                                    </div>
                                </div>
                                <div class="row">
                                
                                    <div class="col-4">
                                        <img class="w-50 p-3 " src="https://thumbs.dreamstime.com/b/icono-de-combinaci%C3%B3n-para-categor%C3%ADa-rango-y-serie-clase-jerarqu%C3%ADa-logotipo-159893237.jpg"  style="display: block;margin-left: auto; margin-right: auto;">
                                    </div>
                                    <div class="col-8">
                                        <a class="btn btn-primary btn-lg btn-block " href="{{ route('ccategoria.index') }}" role="button" style="height: 4rem;">Crear Categoria</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                            <div class="container">
                            <div class="row">
                                <div class="col" style="height: 60px;">
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Añadir Contenido</button>
                                </div>
                                <div class="col " style="height: 60px;">
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Historial de Descargas</button>
                                </div>
                                <div class="w-100"></div>
                                <div class="col" style="height: 60px;">
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Otra opción</button>
                                </div>
                                <div class="col" style="height: 60px;">
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Otra opción</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

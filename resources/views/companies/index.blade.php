@extends('layouts.app')

@section('content')

    <div class="container">
        <br>
        <div class="row justify-content-center">
            <div class="col-md-12">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                    Crear Empresa
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Creacion de Empresa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre"
                                               placeholder="Digital Zolver">
                                    </div>
                                    <div class="form-group">
                                        <label for="ubicacion">Ubicacion</label>
                                        <input type="text" class="form-control" id="ubicacion" name="ubicacion"
                                        >
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar
                                        </button>
                                        <button type="submit" class="btn btn-primary">Crear</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>


                <br>
                <br>

                @if (session('notification'))

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Bien Hecho!</strong> {{ session('notification') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="table-responsive-lg">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Ubicacion</th>
                            <th scope="col">Acciones</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($companies as $company)
                            <tr>
                                <th scope="row">00{{$company->id}}</th>
                                <td>{{$company->nombre}}</td>
                                <td>{{$company->ubicacion}}</td>
                                <td>
                                    @if($company->trashed())
                                        <div class="row mx-md-n3">
                                            <div class="p-3  ">
                                                <a href="/companies/{{$company->id}}/restaurar" class="btn btn-success"
                                                >Habilitar</a>
                                            </div>
                                        </div>
                                    @else
                                        <div class="row mx-md-n3">
                                            <div class="p-3  ">
                                                <a href="/companies/{{$company->id}}/eliminar" class="btn btn-danger"
                                                >Eliminar</a>

                                            </div>
                                            <div class="p-3  ">
                                                <a href="/companies/{{$company->id}}/" class="btn btn-primary"
                                                   data-toggle="modal" data-target="#exampleModal">Modificar</a>
                                                {{--                                        <button type="button"  class="btn btn-primary">Modificar</button>--}}
                                            </div>
                                            @endif

                                        </div>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>












    {{--    <div class="container">--}}
    {{--        <br>--}}
    {{--        <div class="row justify-content-center">--}}
    {{--            <div class="col-md-12">--}}

    {{--                <!-- Button trigger modal -->--}}
    {{--                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">--}}
    {{--                    Crear Empresa--}}
    {{--                </button>--}}

    {{--                <!-- Modal -->--}}
    {{--                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"--}}
    {{--                     aria-hidden="true">--}}
    {{--                    <div class="modal-dialog">--}}
    {{--                        <div class="modal-content">--}}
    {{--                            <div class="modal-header">--}}
    {{--                                <h5 class="modal-title" id="exampleModalLabel">Creacion de Empresa</h5>--}}
    {{--                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
    {{--                                    <span aria-hidden="true">&times;</span>--}}
    {{--                                </button>--}}
    {{--                            </div>--}}
    {{--                            <div class="modal-body">--}}
    {{--                                <form method="POST" action="">--}}
    {{--                                    {{ csrf_field() }}--}}
    {{--                                    <div class="form-group">--}}
    {{--                                        <label for="nombre">Nombre</label>--}}
    {{--                                        <input type="text" class="form-control" id="nombre" name="nombre"--}}
    {{--                                               placeholder="Digital Zolver">--}}
    {{--                                    </div>--}}
    {{--                                    <div class="form-group">--}}
    {{--                                        <label for="ubicacion">Ubicacion</label>--}}
    {{--                                        <input type="text" class="form-control" id="ubicacion" name="ubicacion"--}}
    {{--                                        >--}}
    {{--                                    </div>--}}
    {{--                                    <div class="modal-footer">--}}
    {{--                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar--}}
    {{--                                        </button>--}}
    {{--                                        <button type="submit" class="btn btn-primary">Crear</button>--}}
    {{--                                    </div>--}}
    {{--                                </form>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}


    {{--                <br>--}}
    {{--                <br>--}}

    {{--                @if (session('notification'))--}}

    {{--                    <div class="alert alert-success alert-dismissible fade show" role="alert">--}}
    {{--                        <strong>Bien Hecho!</strong> {{ session('notification') }}--}}
    {{--                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
    {{--                            <span aria-hidden="true">&times;</span>--}}
    {{--                        </button>--}}
    {{--                    </div>--}}
    {{--                @endif--}}
    {{--                <table class="table">--}}
    {{--                    <thead class="thead-dark">--}}
    {{--                    <tr>--}}
    {{--                        <th scope="col">#</th>--}}
    {{--                        <th scope="col">Nombre</th>--}}
    {{--                        <th scope="col">Ubicacion</th>--}}
    {{--                        <th scope="col">Acciones</th>--}}

    {{--                    </tr>--}}
    {{--                    </thead>--}}
    {{--                    <tbody>--}}
    {{--                    @foreach($companies as $company)--}}
    {{--                        <tr>--}}
    {{--                            <th scope="row">00{{$company->id}}</th>--}}
    {{--                            <td>{{$company->nombre}}</td>--}}
    {{--                            <td>{{$company->ubicacion}}</td>--}}
    {{--                            <td>--}}
    {{--                                @if($company->trashed())--}}
    {{--                                    <div class="row mx-md-n3">--}}
    {{--                                        <div class="p-3  ">--}}
    {{--                                            <a href="/companies/{{$company->id}}/restaurar" class="btn btn-success"--}}
    {{--                                            >Habilitar</a>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                @else--}}
    {{--                                    <div class="row mx-md-n3">--}}
    {{--                                        <div class="p-3  ">--}}
    {{--                                            <a href="/companies/{{$company->id}}/eliminar" class="btn btn-danger"--}}
    {{--                                            >Eliminar</a>--}}

    {{--                                        </div>--}}
    {{--                                        <div class="p-3  ">--}}
    {{--                                            <a href="/companies/{{$company->id}}/" class="btn btn-primary"--}}
    {{--                                               data-toggle="modal" data-target="#exampleModal">Modificar</a>--}}
    {{--                                            --}}{{--                                        <button type="button"  class="btn btn-primary">Modificar</button>--}}
    {{--                                        </div>--}}
    {{--                                        @endif--}}

    {{--                                    </div>--}}
    {{--                            </td>--}}

    {{--                        </tr>--}}
    {{--                    @endforeach--}}
    {{--                    </tbody>--}}
    {{--                </table>--}}


    {{--            </div>--}}

    {{--        </div>--}}
    {{--    </div>--}}

@endsection


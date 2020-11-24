@extends('layouts.app')

@section('content')

    <div class="container">
        <br>
        <div class="row justify-content-center">
            <div class="col-md-12">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                    Registrar Activo
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Creacion de Activos</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label for="descripcion">Descripcion</label>
                                        <input type="text" class="form-control" id="descripcion" name="descripcion"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label for="descripcion">Fecha de Ingreso</label>

                                        <input class="form-control" id="fecha_ingreso" name="fecha_ingreso"
                                               placeholder="yyyy-mm-dd">
                                    </div>
                                    {{--                                     my phone number 32182434--}}
                                    <br>
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="customFile">Elija una Foto</label>

                                        <input type="file" class="custom-file-input" id="customFile" name="foto">
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
                            <th scope="col">Descripcion</th>
                            <th scope="col">Fecha de Ingreso</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Acciones</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($activos  as $activo)
                            <tr>
                                <th scope="row">Act-00{{$activo->id}}</th>
                                <td>{{$activo->nombre}}</td>
                                <td>{{$activo->descripcion}}</td>
                                <td>{{$activo->fecha_ingreso}}</td>
                                <td>
{{--                                    <img src="{{asset('storage/'.$activo->foto)}}" alt="..." width="200px" height="100px"--}}
{{--                                         class="img-thumbnail">--}}
                                                                        <img src="{{$activo->foto}}" alt="..." class="img-thumbnail">
                                </td>
                                <td>
                                    @if($activo->trashed())
                                        <div class="row mx-md-n3">
                                            <div class="p-3  ">
                                                <a href="" class="btn btn-success"
                                                >Habilitar</a>
                                            </div>
                                        </div>
                                    @else
                                        <div class="row mx-md-n3">
                                            <div class="p-3  ">
                                                <a href="" class="btn btn-danger"
                                                >Eliminar</a>

                                            </div>
                                            <div class="p-3  ">
                                                <a href="" class="btn btn-primary"
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












    <script>
        $('#fecha_ingreso').datepicker({
            uiLibrary: 'bootstrap4', format: 'yyyy-mm-dd'
        });
    </script>
@endsection


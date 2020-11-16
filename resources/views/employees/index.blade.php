@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <div class="row justify-content-center">
            <div class="col-md-12">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                    Crear Empleado
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Creacion de Empleado</h5>
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
                                        <label for="telefono">Telefono</label>
                                        <input type="text" class="form-control" id="telefono" name="telefono"
                                               placeholder="99999000">
                                    </div>
                                    <div class="form-group">
                                        <label for="correo">Email</label>
                                        <input type="email" class="form-control" id="correo" name="correo"
                                               placeholder="example@gmail.com">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary">Crear</button>
                            </div>
                        </div>
                    </div>
                </div>


                <br>
                <br>

                @if (session('notification'))
                    <div class="alert alert-success">
                        {{ session('notification') }}
                    </div>
                @endif
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Acciones</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Mark</td>
                        <td>Mark</td>

                        <td>


                            <div class="row mx-md-n3">
                                <div class="p-3  ">
                                    <button type="button" class="btn btn-danger">Danger</button>
                                </div>
                                <div class="p-3  ">
                                    <button type="button" class="btn btn-primary">Success</button>
                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Jacob</td>
                        <td>Jacob</td>

                        <td>
                            <div class="row mx-md-n3">
                                <div class="p-3  ">
                                    <button type="button" class="btn btn-danger">Danger</button>
                                </div>
                                <div class="p-3  ">
                                    <button type="button" class="btn btn-primary">Success</button>
                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>Larry</td>
                        <td>Larry</td>

                        <td>
                            <div class="row mx-md-n3">
                                <div class="p-3  ">
                                    <button type="button" class="btn btn-danger">Danger</button>
                                </div>
                                <div class="p-3  ">
                                    <button type="button" class="btn btn-primary">Success</button>
                                </div>
                            </div>
                        </td>

                    </tr>
                    </tbody>
                </table>


            </div>

        </div>
    </div>
@endsection


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
                                               placeholder="argueta jo">
                                    </div>
                                    <div class="form-group">
                                        <label for="telefono">Telefono</label>
                                        <input type="text" class="form-control" id="telefono" name="telefono"
                                               placeholder="99999000">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                               placeholder="example@gmail.com">
                                    </div>

                                    <div class="form-group">
                                        <label for="company_id">Empresa</label>
                                        <select name="company_id" class="form-control">

                                            @foreach ($companies as $company)
                                                <option value="{{ $company->id }}">{{ $company->nombre }}</option>
                                            @endforeach
                                        </select>
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
                    @foreach($employees as $employee)
                        <tr>
                            <th scope="row">00{{$employee->id}}</th>
                            <td>{{$employee->nombre}}</td>
                            <td>{{$employee->telefono}}</td>
                            <td>{{$employee->email}}</td>


                            <td>

                                @if($employee->trashed())
                                    <div class="row mx-md-n3">
                                        <div class="p-3  ">
                                            <a href="/employees/{{$employee->id}}/restaurar" class="btn btn-success"
                                            >Habilitar</a>
                                        </div>
                                    </div>
                                @else
                                    <div class="row mx-md-n3">
                                        <div class="p-3  ">
                                            <a href="/employees/{{$employee->id}}/eliminar" class="btn btn-danger"
                                            >Eliminar</a>
                                        </div>
                                        <div class="p-3  ">
                                            <a href="" class="btn btn-primary"
                                               data-toggle="modal" data-target="#exampleModal">Modificar</a>
                                        </div>
                                    </div>
                                @endif
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>

                        <th scope="col">E-mail</th>
                        <th scope="col">Acciones</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($employee_users as $user)
                        <tr>
                            <th scope="row">reg-0{{$user->id}}</th>
                            <td>{{$user->name}}</td>

                            <td>{{$user->email}}</td>


                            <td>

                                @if($employee->trashed())
                                    <div class="row mx-md-n3">
                                        <div class="p-3  ">
                                            <a href="/employees/{{$employee->id}}/restaurar" class="btn btn-success"
                                            >Habilitar</a>
                                        </div>
                                    </div>
                                @else
                                    <div class="row mx-md-n3">
                                        <div class="p-3  ">
                                            <a href="/employees/{{$employee->id}}/eliminar" class="btn btn-danger"
                                            >Eliminar</a>
                                        </div>
                                        <div class="p-3  ">
                                            <a href="" class="btn btn-primary"
                                               data-toggle="modal" data-target="#exampleModal">Modificar</a>
                                        </div>
                                    </div>
                                @endif
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>
@endsection


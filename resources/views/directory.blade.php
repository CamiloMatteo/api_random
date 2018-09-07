@section('css')
    <link rel="stylesheet" href="{{asset('css/shards.css')}}">
@endsection
@extends('layouts.navbar')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    <h1>Directorio</h1>
</div>
<div class="row">
    <div class="col-12 col-lg-2">
        <div>
            <h6 class="mt-4 mb-4 lead">Empleados</h6>
        </div>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 mb-3 search-interior" type="search" placeholder="Buscar" aria-label="Search" />
        </form>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="">
            <label class="form-check-label" for="exampleCheck1">Todos</label>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="">
            <label class="form-check-label" for="">Activados</label>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="">
            <label class="form-check-label" for="">Activación Pendiente</label>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="">
            <label class="form-check-label" for="">Contraseña reestablecida</label>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="">
            <label class="form-check-label" for="">Contraseña expirada</label>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="">
            <label class="form-check-label" for="">Desactivado</label>
        </div>
        <!-- porsiacaZO
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="">
            <label class="form-check-label" for="">Suspendido</label>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="">
            <label class="form-check-label" for="">Bloqueado</label>
          </div>-->
    </div>
    <div class="col-12 col-lg-10">
        <div class="col-sm-4 col-lg-12 mt-4 mb-4 d-flex align-items-center">
            <div class="row">
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle btn-sm ml-2 mb-2" style="font-size: 13px"
                    type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Otras Opciones
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button">Activar</button>
                        <button class="dropdown-item" type="button">Desactivar</button>
                        <button class="dropdown-item" type="button">Caducar Contraseña</button>
                        <button class="dropdown-item" type="button">Desbloquear Empleado</button>
                    </div>
                </div>
                <button type="button" class="btn btn-outline-secondary btn-sm ml-2 mb-2" style="font-size: 13px">
                    Restablecer Multifactor
                </button>
                <button type="button" class="btn btn-outline-secondary btn-sm ml-2 mb-2" style="font-size: 13px">
                    Restablecer la Contraseña
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm ml-2 mb-2" style="font-size: 13px" onclick="openRegister()" data-toggle="modal" data-target="#registerUser">
                    Agregar Empleado
                </button>
            </div>
        </div>



        <div class="p-0">
            <div class="col-lg-12 table-responsive">


                <table class="table table-hover" style="width: inherit !important; overflow-x: auto">

                    <thead>
                        <tr style="background-color: #f3f3f3">
                            <th scope="col">Persona & Username</th>
                            <th scope="col">Email Primario</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(isset($users))
                        @foreach ($users as $user)
                        <tr>
                            <td class="table-user-name">{{ $user->name }}
                                <br>
                                <span class="table-user-mail">{{ $user->email }}</span>
                            </td>
                            <td>{{$user->email}}</td> <td>{{$user->condition == 1 ? 'Activo' : 'Inactivo'}}</td>
                            <td><a onclick="getUser({{$user->id}})" style="cursor:pointer; color:#007bff;"><i class="far fa-pen"></i></a></td>
                        </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--Modal Register new user-->
<div class="modal fade" id="registerUser" tabindex="-1" role="dialog" aria-labelledby="registerUser" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="titleModal">Registro</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formulario" class="p-4" method="post" enctype="multipart/form-data">
                    @csrf
                    <h5 class="mb-3">Datos personales</h5>
                    <div class="form-group">
                        <label for="inputName">Nombre</label>
                        <input type="text" class="form-control form-control-sm form" id="name" name="name" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Apellido Paterno</label>
                            <input type="text" class="form-control form-control-sm form" id="first_surname" name="first_surname" required placeholder="" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Apellido Materno</label>
                            <input type="text" class="form-control form-control-sm form" id="second_surname" name="second_surname" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Rut</label>
                            <input maxlength="12" type="text" class="form-control form-control-sm form" id="rut" name="rut" onkeyup="formatearRut(this)" onkeypress="return solorut(event, this);" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Número de teléfono</label>
                            <input maxlength="8" type="text" class="num form-control form-control-sm form" id="cellphone" name="cellphone" required placeholder="+569">
                        </div>
                    </div>
                    <h5 class="mt-3 mb-3">Datos para la empresa</h5>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Correo electrónico</label>
                        <div class="col-sm-9">
                            <input maxlength="50" type="text" class="form-control form-control-sm form" id="email" name="email" onkeyup="validateEmail(this.value)" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Número trabajador</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm form" id="num_worker" name="num_worker" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Departamento</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm form" id="depto" name="depto" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Cargo</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm form" id="occupation" name="occupation" required>
                        </div>
                    </div>
                    <h5 class="mt-3 mb-3">Configuración</h5>
                    <div id="pass_box">
                    <div class="d-flex justify-content-between">
                        <p>Generar una contraseña automáticamente</p>
                        <label class="switch">
                            <input type="checkbox" class="primary" name="autopass" id="autopass"><span class="slider round"></span>
                        </label>
                    </div>
                    <label for="inputPassword">Contraseña</label>
                    <input type="password" id="password" name="password" class="form-control form-control-sm">
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        La contraseña debe ser entre 8-20 caracteres, contener letras y números, sin espacios o caracteres especiales.
                    </small>
                    </div>
                    <div id="contentChangepass" class="d-flex justify-content-between mt-3">
                        <p>Solicitar un cambios de contraseña la próxima vez que se inicie sesión</p>
                        <label class="switch active">
                            <input type="checkbox" id="changepass" name="changepass" class="primary"><span class="slider round"></span>
                        </label>
                    </div>
                    <hr>
                    <div id="contentCondition" class="d-flex justify-content-between mt-3">
                        <p>Activar o Desactivar Usuario</p>
                        <label class="switch active">
                            <input type="checkbox" id="condition" name="condition" class="primary"><span class="slider round"></span>
                        </label>
                    </div>
                    <hr id="separator" class="">
                    <div class="d-flex justify-content-between mt-3">
                        <p>Rol</p>
                        <div id="box_rol">
                            <input class="d-none" type="text" id="rol" value="">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radio_admin" value="admin">
                                <label class="form-check-label" for="inlineRadio1">Admin</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radio_user" value="user" required checked>
                                <label class="form-check-label" for="inlineRadio2">User</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mt-3">
                        <p>Método de autorización</p>
                        <div id="box_auth">
                            <input class="d-none" type="text" id="authorization_method" value="">
                            <div class="form-check">
                                <input class="form-check-input micheckbox" type="checkbox" id="method1" name="checkbox1" value="OTP" checked>
                                <label class="form-check-label" for="checkbox1">OTP</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input micheckbox" type="checkbox" id="method2" name="checkbox2" value="Biometrica">
                                <label class="form-check-label" for="checkbox2">Biometría Autentia</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input micheckbox" type="checkbox" id="method3" name="checkbox3" value="YubiKey">
                                <label class="form-check-label" for="checkbox3">YubiKey</label>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer" id="btn_box">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-primary btn-sm" id="btn_register">Añadir</button>
                <button class="btn btn-primary btn-sm" id="btn_update">Actualizar</button>
                <button type="button" class="d-none" id="mensaje-1"></button>
            </div>
            <div id="box_id">
                <input class="d-none" type="text" id="id" value="">
            </div>
        </form>
        </div>
    </div>
</div>
@section('scripts')
    <script src="{{ asset('js/register.js') }}"></script>
    <script src="{{ asset('js/validate.js') }}"></script>
    <script src="{{ asset('js/shards.js') }}"></script>
    <script src="{{ asset('js/alert-top.js') }}"></script>
@endsection
@endsection

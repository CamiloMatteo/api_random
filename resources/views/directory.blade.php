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
                <button type="button" class="btn btn-outline-primary btn-sm ml-2 mb-2" style="font-size: 13px" data-toggle="modal" data-target="#registerUser">
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
                        <tr>
                            <td class="table-user-name">Marcelo Sepúlveda
                                <br>
                                <span class="table-user-mail">msepulveda@mail.com</span>
                            </td>
                            <td>msepulveda@mail.com</td> <td>Activo</td>
                            <td><a href="#"><i class="far fa-pen"></i></a></td>
                        </tr>
                        <tr>
                            <td class="table-user-name">Octavio Flores
                                <br>
                                <span class="table-user-mail">oflores@mail.com</span>
                            </td>
                            <td>oflores@mail.com</td> <td>Activo</td>
                            <td><a href="#"><i class="far fa-pen"></i></a></td>
                        </tr>
                        <tr>
                            <td class="table-user-name">Lidia Woods
                                <br>
                                <span class=" table-user-mail">lwoods@mail.com</span>
                            </td>
                            <td>lwoods@mail.com</td> <td>Inactivo</td>
                            <td><a href="#"><i class="far fa-pen"></i></a></td>
                        </tr>
                        <tr>
                            <td class="table-user-name">Sandy Patterson
                                <br>
                                <span class="table-user-mail">spatterson@mail.com</span>
                            </td>
                            <td>spatterson@mail.com</td> <td>Activo</td>
                            <td><a href="#"><i class="far fa-pen"></i></a></td>
                        </tr>
                        <tr>
                            <td class="table-user-name">Ernesto Figueroa
                                <br>
                                <span class="table-user-mail">efigueroa@mail.com</span>
                            </td>
                            <td>efigueroa@mail.com</td> <td>Activo</td>
                            <td><a href="#"><i class="far fa-pen"></i></a></td>
                        </tr>
                        <tr>
                            <td class="table-user-name">Alberto Torres
                                <br>
                                <span class="table-user-mail">atorres@mail.com</span>
                            </td>
                            <td>atorres@mail.com</td> <td>Inactivo</td>
                            <td><a href="#"><i class="far fa-pen"></i></a></td>
                        </tr>
                        <tr>
                            <td class="table-user-name">Enrrique Astudillo
                                <br>
                                <span class="table-user-mail">eastudillo@mail.com</span>
                            </td>
                            <td>eastudillo@mail.com</td> <td>Activo</td>
                            <td><a href="#"><i class="far fa-pen"></i></a></td>
                        </tr>
                        <tr>
                            <td class="table-user-name">Germán Valenzuela
                                <br>
                                <span class="table-user-mail">gvalenzuela@mail.com</span>
                            </td>
                            <td>gvalenzuela@mail.com</td> <td>Activo</td>
                            <td><a href="#"><i class="far fa-pen"></i></a></td>
                        </tr>
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
                <h2 class="modal-title" id="exampleModalLabel">Registro</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--ERROR FOR THE MOMENT-->
                @if  (isset($error))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Holy guacamole! </strong> {{$error}}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <form class="p-4" method="post" action="{{ url('register') }}" enctype="multipart/form-data">
                    @csrf
                    <h5 class="mb-3">Datos personales</h5>
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control form-control-sm form" id="inputName" name="name" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Apellido Paterno</label>
                            <input type="text" class="form-control form-control-sm form" id="inputApellidoPaterno" name="first_surname" required placeholder="" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Apellido Materno</label>
                            <input type="text" class="form-control form-control-sm form" id="inputApellidoMaterno" name="second_surname" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Rut</label>
                            <input maxlength="12" type="text" class="form-control form-control-sm form" id="inputRut" name="rut" onkeyup="formatearRut(this)" onkeypress="return solorut(event, this);" required>
                            <label for="inputRut" id="statusRut" value="" class=""></label>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Número de teléfono</label>
                            <input type="text" class="num form-control form-control-sm form" id="inputphone" name="cellphone" required placeholder="+569">
                        </div>
                    </div>
                    <h5 class="mt-3 mb-3">Datos para la empresa</h5>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Correo electrónico</label>
                        <div class="col-sm-9">
                            <input maxlength="50" type="text" class="form-control form-control-sm form" id="inputMail" name="email" onkeyup="validateEmail(this.value)" required>
                            <label for="email" id="statusEmail" value="" class="hidden"></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Número trabajador</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm form" id="inputWorkerNumber" name="num_worker" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Departamento</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm form" id="inputDepartment" name="depto" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Cargo</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm form" id="inputCargo" name="occupation" required>
                        </div>
                    </div>
                    <h5 class="mt-3 mb-3">Configuración</h5>

                    <div class="d-flex justify-content-between">
                        <p>Generar una contraseña automáticamente</p>
                        <label class="switch">
                            <input type="checkbox" class="primary" name="autopass" id="autopass"><span class="slider round"></span>
                        </label>
                    </div>

                    <label for="inputPassword">Contraseña</label>
                    <input type="password" id="inputPassword" name="password" class="form-control form-control-sm" required>

                    <small id="passwordHelpBlock" class="form-text text-muted">
                        La contraseña debe ser entre 8-20 caracteres, contener letras y números, sin espacios o caracteres especiales.
                    </small>
                    <div class="d-flex justify-content-between mt-3">
                        <p>Solicitar un cambios de contraseña la próxima vez que se inicie sesión</p>
                        <label class="switch active">
                            <input type="checkbox" id="changepass" name="changepass" class="primary"><span class="slider round"></span>
                        </label>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mt-3">
                        <p>Rol</p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="admin" required checked>
                                <label class="form-check-label" for="inlineRadio1">Admin</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="user">
                                <label class="form-check-label" for="inlineRadio2">User</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mt-3">
                        <p>Método de autorización</p>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input micheckbox" type="checkbox" id="checkbox1" name="checkbox1" value="OTP" checked>
                                <label class="form-check-label" for="checkbox1">OTP</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input micheckbox" type="checkbox" id="checkbox2" name="checkbox2" value="Biometrica">
                                <label class="form-check-label" for="checkbox2">Biometría Autentia</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input micheckbox" type="checkbox" id="checkbox3" name="checkbox3" value="YubiKey">
                                <label class="form-check-label" for="checkbox3">YubiKey</label>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
                <button onclick="formValidation()" id="mensaje-1" type="submit" class="btn btn-primary btn-sm">Añadir</button>
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

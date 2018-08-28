@extends('layouts.navbar')
@section('content')
<!--TABLA-->
<div class="container mt-5 pt-2">
    <div class="col-lg-12 mt-5">
        <div class="row">
            <h1 class="lead ml-3" style="font-size:40px; color: #a5a5a5;">REGISTRO DE USUARIOS</h1>
        </div>

        <div class="container">
            <div class="col-lg-12 mt-3">
                <h6 class="mt-4 mb-4 lead" style="font-size: 18px; color: #1726ff">Ingresar datos</h6>
                <span class="pmd-card-subtitle-text">Rellene los campos para crear un nuevo registro</span>
                <!--ERROR FOR THE MOMENT-->
                @if  (isset($error))
                <div>
                    <h1 class="mt-4 mb-4 lead" style="font-size: 25px; color:red">{{ $error }}!</h1>
                </div>
                @endif
            </div>

            <!--CONTENT FORM-->
            <div class="col-lg-12 mt-3">
                <form method="post" action="{{ url('register') }}" enctype="multipart/form-data">
                    @csrf
                    <!--REGISTER FORM-->
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nombre</label>
                        <div class="col-sm-8">
                            <input type="text" maxlength="35" id="name" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Apellido Paterno</label>
                        <div class="col-sm-8">
                            <input type="text" maxlength="35" id="first_surname" name="first_surname" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Apellido Materno</label>
                        <div class="col-sm-8">
                            <input type="text" maxlength="35" id="second_surname" name="second_surname" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">RUT</label>
                        <div class="col-sm-8">
                            <input autocomplete="off" maxlength="12" type="text" id="rut" name="rut" class="form-control" onkeyup="formatearRut(this)" onkeypress="return solorut(event, this);" required>
                            <label for="rut" id="statusRut" value="" class="hidden"></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input autocomplete="off" maxlength="50" onkeyup="validateEmail(this.value)" type="email" id="email" name="email" class="form-control" required>
                            <label for="email" id="statusEmail" value="" class="hidden"></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Telefono</label>
                        <div class="col-sm-8">
                            <input maxlength="12" autocomplete="off" type="text" id="cellphone" name="cellphone" class="num form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Fecha Nacimiento</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="birth_date" name="birth_date" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">N° Trabajador</label>
                        <div class="col-sm-8">
                            <input type="text" id="num_worker" maxlength="35" name="num_worker" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Depto</label>
                        <div class="col-sm-8">
                            <input type="text" id="depto" maxlength="35" name="depto" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Cargo/Ocupación</label>
                        <div class="col-sm-8">
                            <input type="text" id="occupation" maxlength="35" name="occupation" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label class="col-sm-3 col-form-label">Nombre de Usuario</label>
                        <div class="col-sm-8">
                            <input type="text" id="user_name" maxlength="35" name="user_name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Contraseña</label>
                        <div class="col-sm-8">
                            <input type="text" id="password" maxlength="35" name="password" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <button id="" type="submit" class="btn pmd-btn-raised pmd-ripple-effect btn-primary pull-right">REGISTRAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@section('scripts')
<script src="{{ asset('js/register.js') }}"></script>
<script src="{{ asset('js/validate.js') }}"></script>
@endsection
@endsection

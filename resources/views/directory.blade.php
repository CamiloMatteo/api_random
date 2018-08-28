@extends('layouts.navbar')
@section('content')
    <!--TABLA-->
    <div class="container mt-5 pt-2">
      <div class="col-lg-12 mt-5">
        <div class="row">
          <div>
            <h1 class="lead ml-3" style="font-size:40px; color: #a5a5a5;">Directorio</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-12  col-lg-3">
            <div>
              <h6 class="mt-4 mb-4 lead" style="font-size: 18px; color: #1726ff">Empleados</h6>
            </div>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2 mb-3" style="width: 160px; font-size: 12px;" type="search" placeholder="Buscar" aria-label="Search">
            </form>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1" style=" font-size: 13px;">Todos</label>
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1" style=" font-size: 13px;">Activados</label>
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1" style=" font-size: 13px;">Activación Pendiente</label>
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1" style=" font-size: 13px;">Contraseña reestablecida</label>
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1" style=" font-size: 13px;">Contraseña expirada</label>
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1" style=" font-size: 13px;">Desactivado</label>
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1" style=" font-size: 13px;">Suspendido</label>
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1" style=" font-size: 13px;">Bloqueado</label>
            </div>


          </div>
          <div class="col-12 col-lg-9">

            <div class="col-sm-4 col-lg-12 mt-4 mb-4 d-flex align-items-center">
              <div class="row">
              <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle btn-sm ml-2 mb-2" style="font-size: 13px" type="button" id="dropdownMenu2" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Otras Opciones
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <button class="dropdown-item" type="button">Activar</button>
                  <button class="dropdown-item" type="button">Desactivar</button>
                  <button class="dropdown-item" type="button">Caducar Contraseña</button>
                  <button class="dropdown-item" type="button">Desbloquear Empleado</button>
                </div>
              </div>
              <button type="button" class="btn btn-outline-secondary btn-sm ml-2 mb-2" style="font-size: 13px">Restablecer Multifactor</button>
              <button type="button" class="btn btn-outline-secondary btn-sm ml-2 mb-2" style="font-size: 13px">Restablecer la Contraseña</button>
              <button type="button" onclick="window.location.href='{{url('register')}}'" class="btn btn-outline-primary btn-sm ml-2 mb-2" style="font-size: 13px">Agregar Empleado</button>
            </div>
            </div>

            <div class="pt-2" style="background: #fff; border-radius: 8px">
              <div class="col-lg-12 mt-3 table-responsive">
                <table class="table table-hover" style="width: inherit !important; overflow-x: auto">
                  <thead>
                    <tr style="background-color: #f3f3f3">
                      <th scope="col">Persona & Username</th>
                      <th scope="col">Email Primario</th>
                      <th scope="col">Estado</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="color: blue">Marcelo Sepúlveda
                        <br>
                        <span style="color: #bebebe">msepulveda@mail.com</span>
                      </td>
                      <td>msepulveda@mail.com</td>
                      <td>Activo</td>
                    </tr>
                    <tr>
                      <td style="color: blue">Octavio Flores
                        <br>
                        <span style="color: #bebebe">oflores@mail.com</span>
                      </td>
                      <td>oflores@mail.com</td>
                      <td>Activo</td>
                    </tr>
                    <tr>
                      <td style="color: blue">Lidia Woods
                        <br>
                        <span style="color: #bebebe">lwoods@mail.com</span>
                      </td>
                      <td>lwoods@mail.com</td>
                      <td>Inactivo</td>
                    </tr>
                    <tr>
                      <td style="color: blue">Sandy Patterson
                        <br>
                        <span style="color: #bebebe">spatterson@mail.com</span>
                      </td>
                      <td>spatterson@mail.com</td>
                      <td>Activo</td>
                    </tr>
                    <tr>
                      <td style="color: blue">Ernesto Figueroa
                        <br>
                        <span style="color: #bebebe">efigueroa@mail.com</span>
                      </td>
                      <td>efigueroa@mail.com</td>
                      <td>Activo</td>
                    </tr>
                    <tr>
                      <td style="color: blue">Alberto Torres
                        <br>
                        <span style="color: #bebebe">atorres@mail.com</span>
                      </td>
                      <td>atorres@mail.com</td>
                      <td>Inactivo</td>
                    </tr>
                    <tr>
                      <td style="color: blue">Enrrique Astudillo
                        <br>
                        <span style="color: #bebebe">eastudillo@mail.com</span>
                      </td>
                      <td>eastudillo@mail.com</td>
                      <td>Activo</td>
                    </tr>
                    <tr>
                      <td style="color: blue">Germán Valenzuela
                        <br>
                        <span style="color: #bebebe">gvalenzuela@mail.com</span>
                      </td>
                      <td>gvalenzuela@mail.com</td>
                      <td>Activo</td>
                    </tr>

                  </tbody>
                </table>

              </div>

            </div>
          </div>
        </div>
    @section('scripts')
    @endsection
@endsection

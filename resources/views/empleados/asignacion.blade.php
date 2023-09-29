<x-app-layout>
    <div class="container-xxl navbar-expand-xl align-items-center">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
          <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
          </a>
        </div>
      </div>
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Empleados /</span> Asignacion </h4>
    
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-header">Asignacion de equipo</h5>
                </div>
                <div class="content-wrapper">
                  <div class="table-responsive text-nowrap">
                    <div class="card-datatable table-responsive pt-0">
                        <div class="container">
                            
                            <form method="POST" action="{{ route('asignacion.asignar') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="empleado">Selecciona un Empleado:</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text">
                                            <i class='bx bx-user'></i>
                                        </span>
                                        <select name="empleado_id" class="form-control">
                                            @foreach ($empleados as $empleado)
                                                <option value="{{ $empleado->id }}">{{ $empleado->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                        
                                <div class="form-group">
                                    <label class="form-label" for="equipo">Selecciona un Equipo:</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text">
                                            <i class='bx bx-desktop'></i>
                                        </span>
                                        <select name="equipo_id" class="form-control">
                                            @foreach ($equipos as $equipo)
                                                <option value="{{ $equipo->id }}">{{ $equipo->tipo }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Asignar Equipo</button>
                            </form>
                            <br>
                            <hr class="my-0">
                            <br>
                            <h2>Equipos Asignados</h2>
                            <ul>
                                @foreach ($empleados as $empleado)
                                    <li>
                                        {{ $empleado->name }}:
                                        @foreach ($empleado->equipos as $equipo)
                                            {{ $equipo->tipo }}
                                            <a href="{{ route('asignacion.desvincular', ['empleado_id' => $empleado->id, 'equipo_id' => $equipo->id]) }}" class="btn btn-danger btn-sm">Desvincular</a>
                                        @endforeach
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>            
                  </div>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->
    
            <hr class="my-5" />
    
        </div>
        <!-- / Content -->
      </div>
    <script>

    
</x-app-layout>
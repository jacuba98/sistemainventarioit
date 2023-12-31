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
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Inventario /</span> Editar </h4>
    
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-header">Editar Registro</h5>
                </div>
                
                <div class="table-responsive text-nowrap">
                    <div class="card-body">
                        <form action="{{ route('inventario.update', $registro->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="form-label" for="nombre">Nombre</label>
                                <x-text-input type="text" name="nombre" class="form-control" value="{{ $registro->nombre }}" required />
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="cantidad">Cantidad</label>
                                <x-text-input type="number" name="cantidad" class="form-control" value="{{ $registro->cantidad }}" required />
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="precio">Precio</label>
                                <x-text-input type="number" name="precio" class="form-control" value="{{ $registro->precio }}" required/>
                            </div>
                            <button type="submit" class="btn btn-secondary"><i class='bx bx-refresh' ></i>Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->
    
            <hr class="my-5" />
    
        </div>
        <!-- / Content -->
      </div>
</x-app-layout>


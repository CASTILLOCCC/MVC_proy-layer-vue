<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creación de Usuario') }} 
            <a class="nav-link" href="http://proy-layer-vue.test/dashboard/post"></a>
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @include('dashboard.partials.validation-error')
                    <form action="{{ url('usuarios/'.$user->id)}}" method="post">
                        @csrf
                        @method("PUT")
                        <div class="mb-3 row">
                            <label for="name">Nombre</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" name="name" id="name"
                                    value="{{ $user->name}}">
                        </div>
                        <div class="mb-3 row">
                            <label for="name">E-mail</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" name="email" id="email"
                                    value="{{ $user->email}}">
                        </div>
                        <div class="mb-3 row">
                            <label for="name">Password</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="password" name="password" id="password"
                                    value="{{ old('name')}}">
                        </div>
                        <div class="mb-3 row">
                            <label for="name">Confirmar Password</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="password" name="confirm-password" id="confirm-password"
                                    value="{{ old('name')}}">
                        </div>
                        <br>
                        <br>
                        <div class="mb-3 row">
                            <label for="name">Rol</label>
                            <div class="col-5 row">
                            <select name="roles" id="roles" class="form-select" required>
                            <option value="">Seleccionar Rol</option>
                                @foreach ($roles as $id=>$rol )
                                <option value="{{ $id }}">{{ $rol }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="row center">
                        <div class="col s6">
                            <button class="btn btn-success btn-sm" type="submit">Guardar</button>
                            <a href="{{ url('roles') }}" class="btn btn-secondary btn-sm">Cancelar</a>
                        </div>
                    </div>

    
</x-app-layout>
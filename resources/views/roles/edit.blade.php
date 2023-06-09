<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles') }} 
            <a class="nav-link" href="http://proy-layer-vue.test/dashboard/post"></a>
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @include('dashboard.partials.validation-error')
                    <form action="{{ url('roles/'.$role->id)}}" method="post">
                        @csrf
                        @method("PUT")
                <div class="mb-3 row">
                    <label for="name">Nombre del rol</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" name="name" id="name"
                            value="{{ $role->name}}">
                </div>

                <div class="mb-3 row">
                    <label for="name">Persimos del rol</label>
                    <div class="col-sm-5">
                        <table>
                            <tbody>
                                @foreach ($permission as $id=>$permiso )
                                    <tr>
                                        <td>
                                            <input class="form-check-input" type="checkbox" name="permission[]"
                                            value="{{ $id }}" {{ $role->permissions->contains($id) ? 'checked' : ''}}>
                                            {{ $permiso}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>

                <div class="row center">
                    <div class="col s6">
                        <button class="btn btn-success btn-sm" type="submit">Guardar</button>
                        <a href="{{ url('roles') }}" class="btn btn-secondary btn-sm">Cancelar</a>
                    </div>
                </div>

    
</x-app-layout>

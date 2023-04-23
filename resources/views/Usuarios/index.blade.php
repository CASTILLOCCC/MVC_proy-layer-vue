<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios') }} 
            <a class="nav-link" href="http://proy-layer-vue.test/dashboard/post"></a>
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
              <a href="{{ 'usuarios/create'}}" class="btn btn-primary btn-sm" >Nuevo Usuario</a>
            <table class="table table-striped" style="width: 80%; margin: 0px auto; text-align: center">
              <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>E-mail</th>
                <th>Rol</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </thead>
              <tbody>
                @foreach ($usuarios as $usuario )
                    <tr> 
                        <td>{{$usuario->id}} </td>
                        <td>{{$usuario->name}} </td>
                        <td>{{$usuario->email}} </td>
                        <td>
                            @if(!empty($usuario->getRoleNames()))
                            @foreach ($usuario->getRoleNames() as $rolName )
                            {{ $rolName }}
                            @endforeach
                            @endif
                        </td>
                        <td>
                            <a href="{{ 'usuarios/'.$usuario->id.'/edit' }}" class="bi bi-pencil"></a>
                        </td>  
                        <td>
                        <form action="{{ 'usuarios/'.$usuario->id}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button class="bi bi-eraser-fill" type="submit"></button>
                        </form>
                    </td>
                    </tr> 
                @endforeach
              </tbody>
            </table>













                </div>

                
            </div>
            
        </div>
    </div>
    
</x-app-layout>
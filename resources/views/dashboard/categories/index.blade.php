
  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} 
            <a class="nav-link" href="http://proy-layer-vue.test/dashboard/post">Posts</a>
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <main>
                    <div class="container py-4">
                        <h2>Categorias</h2>
                        <a href="{{url('dashboard/categories/create')}}" class="btn btn-primary btn btn-sm">New Category</a>
                    </div>
                </main>
                
                <div style="text-align: center">
                    <table class="table table-striped" style="width: 80%; margin: 0px auto; text-align: center">
                    <thead>
                        <tr>
                            <td>
                                <b>Id</b> 
                            </td>
                            <td>
                                <b>Nombre</b> 
                            </td>
                            <td>
                                <b>Descripción</b> 
                            </td>
                            <td>
                                <b>Creación</b> 
                            </td>
                            <td>
                                <b>Actualización</b> 
                            </td> 
                            <td>
                                <b>Editar</b> 
                            </td> 
                            <td>
                                <b>Eliminar</b> 
                            </td> 
                        </tr>
                    </thead>
                <tbody>
                    @foreach ($categories    as $item)
                    <tr>
                        <td>
                            {{ $item->id }}
                        </td>
                        <td>
                            {{ $item->name }}
                        </td>
                        <td>
                            {{ $item->description }}
                        </td>
                        <td>
                            {{ $item->created_at}}
                        </td>
                        <td>
                            {{ $item->updated_at}}
                        </td>
                        <td>
                            <a href="{{url('dashboard/categories/'.$item->id.'/edit')}}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                          
                        </td>
                        <td>
                            <form action="{{ route("categories.destroy",$item->id)}}" method="post">
                            @method("DELETE")
                            @csrf
                            <button class="btn btn-primary" type="submit"><i class="bi bi-file-earmark-x-fill"></i></button>
                        </form>
                    </td>
                    @endforeach
                
                </tbody>
                </table>
                </div>

                
            </div>
            
        </div>
    </div>
    
</x-app-layout>
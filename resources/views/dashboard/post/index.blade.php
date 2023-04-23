<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Posto Publicados') }} 
          <a class="nav-link" href="http://proy-layer-vue.test/dashboard/post">Posts</a>
      </h2>

  </x-slot>



  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">
                <main>
                  <div class="container py-4">
                      {{-- <h2>Post</h2> --}}
                      <a href="{{url('dashboard/post/create')}}" class="btn btn-primary btn btn-sm">New Post</a>
                  </div>
              </main>
                <div style="text-align: center">
                  <table class="table table-striped" style="width: 80%; margin: 0px auto; text-align: center">
                      <thead>
                          <tr>
                              <td>
                                  <b>Id</b> 
                              </td><td>
                                  <b>Categoria</b> 
                              </td>
                              <td>
                                  <b>Nombre</b> 
                              </td>
                              <td>
                                  <b>Descripción</b> 
                              </td>
                              <td>
                                  <b>Estado Publiación</b> 
                              </td>
                              <td>
                                  <b>Creación</b> 
                              </td>
                              <td>
                                  <b>Actualización</b> 
                              </td>
                              <td>
                                  <b>Eliminar</b> 
                              </td></b> 
                          </tr>
                      </thead>
                  <tbody>
                      @foreach ($posts as $item)
                      <tr>
                          <td>
                              {{ $item->id }}
                          </td>
                          <td>
                              {{ $item->category->name}}
                          </td>
                          <td>
                              {{ $item->name }}
                          </td>
                          <td>
                              {{ $item->description }}
                          </td>
                          <td>
                          {{ $item->status}}
                      </td>
                          <td>
                              {{ $item->created_at}}
                          </td>
                          <td>
                              {{ $item->update_at}}
                              <a href="{{url('dashboard/post/'.$item->id.'/edit')}}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                            
                          </td>
                          <td>
                              <form action="{{ route("post.destroy",$item->id)}}" method="post">
                              @method("DELETE")
                              @csrf
                              <button class="btn btn-primary" type="submit"><i class="bi bi-file-earmark-x-fill"></i></button>
                          </form>
                      </td>
                      @endforeach
                      
              </div>

              
          </div>
          
      </div>
  </div>
  
</x-app-layout>

{{-- @extends('dashboard.master')
@section('content')
@section('master')
@section('titulo','Poster')
@section('contenido') --}}

 {{-- <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <img
            src="https://www.iudigital.edu.co/Style%20Library/images/logo-escudo.png"
            height="60"
            alt="MDB Logo"
            loading="lazy"
          />
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="http://127.0.0.1:8000/dashboard/post">Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://127.0.0.1:8000/dashboard/categories">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.iudigital.edu.co/Paginas/default.aspx">Universidad</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
  
      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Icon -->
        <a class="text-reset me-3" href="#">
          <i class="fas fa-shopping-cart"></i>
        </a>
  
        <!-- Notifications -->
        <div class="dropdown">
          <a
            class="text-reset me-3 dropdown-toggle hidden-arrow"
            href="#"
            id="navbarDropdownMenuLink"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="fas fa-bell"></i>
            <span class="badge rounded-pill badge-notification bg-danger">1</span>
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuLink"
          >
            <li>
              <a class="dropdown-item" href="#">Some news</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Another news</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Something else here</a>
            </li>
          </ul>
        </div>
        <!-- Avatar -->
        <div class="dropdown">
          <a
            class="dropdown-toggle d-flex align-items-center hidden-arrow"
            href="#"
            id="navbarDropdownMenuAvatar"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            <img
              src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
              class="rounded-circle"
              height="25"
              alt="Black and White Portrait of a Man"
              loading="lazy"
            />
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuAvatar"
          >
            <li>
              <a class="dropdown-item" href="#">My profile</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Settings</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Logout</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->    
</head> --}}



{{-- 
<main>
    <div class="container py-4">
        
        <h2>Post Publicados</h2>
        <a href="{{url('dashboard/post/create')}}" class="btn btn-primary btn btn-sm">New Post</a>
    </div>
</main> --}}



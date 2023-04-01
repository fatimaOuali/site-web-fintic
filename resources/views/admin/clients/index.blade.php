@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card">
  <div class="card-header">
    Gestion des clients
  </div>
  <div class="card-body">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">email</th>
          <th scope="col">Role</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($viewData["users"] as $user)
        <tr>
          <td>{{ $user->getId() }}</td>
          <td>{{ $user->getName() }}</td>
          <td>{{ $user->getEmail() }}</td>
          <td>{{ $user->getRole() }}</td>
          
         
          <td>
            <form action="{{ route('admin.clients.delete', $user->getId())}}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">
                <i class="bi-trash"></i>
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection

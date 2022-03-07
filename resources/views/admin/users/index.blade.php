@extends('layouts.app')
@section('content')
      <div class="container">
          <div class="row">
              <div class="col-2">
                  <a href="/users/create" class="btn btn-primary">Add User</a>
              </div>
              <div class="col-10">
                  <table class="table table-striped">
                      <thead>
                      <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Created At</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($users as $user)
                          <tr>
                              <td><a href="/users/{{ $user->id }}">{{ $user->id }}</a></td>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td>{{ $user->created_at->diffForHumans() }}</td>
                              <td><a href="/users/{{ $user->id }}/edit" class="btn btn-primary">Edit</a></td>
                              <td>
                                  <form action="/users/{{ $user->id }}/delete" method="post">
                                      @csrf
                                      @method('delete')
                                      <button class="btn btn-danger">Delete</button>
                                  </form>


                              </td>
                          </tr>
                      @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
@endsection

@extends('layouts.admin') 

@section('title', 'Projects')

@section('content')
    <section>
        <h1>Projects</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Title</th>
                  <th scope="col">Slug</th>
                  <th scope="col">Created At</th>
                  <th scope="col">Updated At</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td>{{$project->id}}</td>
                    <td>{{$project->title}}</td>
                    <td>{{$project->slug}}</td>
                    <td>{{$project->created_at}}</td>
                    <td>{{$project->updated_at}}</td>
                    <td>View - Edit - Delete</td>
                </tr>
                @endforeach
              </tbody>
        </table>
    </section>
@endsection
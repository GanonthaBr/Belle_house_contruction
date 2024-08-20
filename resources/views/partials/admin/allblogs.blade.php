@extends('layouts.admin_main')
@section('adminmain')

<div class="container">
    <div class="inner-page">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-4 pb-4">
            <h3>Liste des Blog </h3> <br>
           
        </div>
         <div class="container pt-4 pb-4">
                <table>
                    <thead>
                        <tr>
                            <th style="width: 30%;" >Titre</th>
                            <th style="width: 40%;" >Contenu</th>
                            <th style="width: 30%;" >Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                        <tr>
                            <td>{{$blog->title}}</td>
                            <td>{{$blog->content}}</td>
                            <td>
                                <a href="{{route('blog.edit', $blog->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('blog.destroy', $blog->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
@endsection

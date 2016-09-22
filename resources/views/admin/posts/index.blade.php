
@extends('layouts.admin')


@section('content')
    <h1>All Posts</h1>


    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Owner</th>
            <th>Category</th>
            <th>Title</th>
            <th>body</th>

            <th>Created at</th>
            <th>Update</th>
        </thead>
        <tbody>

        @if($posts)


            @foreach($posts as $post)

                <tr>
                    <td>{{$post->id}}</td>
                    <td><img height="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400' }} " alt=""></td>
                    <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->user->name}}</a></td>

                    <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>

                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>

                </tr>

            @endforeach

        @endif

        </tbody>
    </table>
    @stop
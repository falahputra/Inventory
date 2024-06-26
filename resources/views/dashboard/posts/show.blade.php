@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8 ">
                <article class="mb-5">
                    <h2>{{ $post->title }}</h2>
                    <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>Back To All My Post</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm ('Are you sure want delete data?')">
                            <span data-feather="x-circle"></span>Delete
                        </button>
                    </form>
                    <h5 class="mt-5">By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name}}</a> </h5>
                    @if ($post->image)
                        <div style="max-height: 400px; overflow:hidden">
                            <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                    @endif
                </article>
                
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                    
                </article>
            
                
                
            </div>
        </div>
    </div>

@endsection

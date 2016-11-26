@extends('main') 
@section('stylesheets')
{!! Html::style('css/clean-blog.min.css') !!}   
@endsection
@section('title', '| Homepage')
@section('upperTitle', 'Hello World')
@section('subtitle', 'This is a Laravel Blogging application')
@include('partials._header')
@section('content')

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                <div class="jumbotron">
                  <h1>Welcome to my blog!</h1>
                  <p class="lead">Thank you for visiting, This is my test website with Laravel, please read my Popular Post!</p>
                  <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                </div>
                
            </div>
        </div> <!-- end of header row -->
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                

            @foreach($posts as $post)

                    <div class="post-preview">
                        <a href="{{ url('blog/'.$post->slug) }}">
                        <h2 class="post-title">{{ $post->title }}</h2>
                        <h3 class="post-subtitle">{{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</h3>
                        </a>
                        <p class="post-meta">Posted by Vahan Terzibashian on {{date('M j, Y', strtotime($post->created_at))}}</p>
                    </div>

                    <hr>

            @endforeach    

            </div>
        </div>
@endsection

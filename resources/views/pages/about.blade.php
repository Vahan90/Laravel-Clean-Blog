@extends('main') 
@section('stylesheets')
{!! Html::style('css/clean-blog.min.css') !!}   
@endsection

@section('title', '| About us')

@section('upperTitle', 'About me')
@include('partials._header')

@section('content')

            <div class="row">
                <div class="col-md-12">
                    <h1>About Me</h1>
                    <p>Hello My Name is Vahan Terizbashian And I love building Apps</p>
                </div>
            </div>
@endsection            

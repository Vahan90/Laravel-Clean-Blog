<!DOCTYPE html>
<html lang="en">
<head>
@include('partials._head')
  </head>
  <body>
  @if(Request::is('login', 'tags', 'categories', 'posts', 'tags/..', 'categories/..', 'posts/..', 'posts/{$post->id}', 'posts/{$post->id}/edit'))
    @include('partials._navAdmin')
  @else  
    @include('partials._nav')
   @endif 
    @yield('partials._header')
    <div class="container">
    @include('partials._messages')

    @yield('content')

    @include('partials._footer')

    </div> <!-- end of container -->

    @include('partials._javascript')
        
    @yield('scripts')
  </body>
</html>
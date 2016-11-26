<!-- Set your background image for this header on the line below. -->
        @if(Request::is('/'))
        <header class="intro-header" style="background-image: url('{{asset('images/home-bg.jpg')}}')">
        @elseif(Request::is('about'))
        <header class="intro-header" style="background-image: url('{{asset('images/about-bg.jpg')}}')">
        @elseif(Request::is('contact'))
        <header class="intro-header" style="background-image: url('{{asset('images/contact-bg.jpg')}}')">
        @elseif(Request::is('blog'))
        <header class="intro-header" style="background-image: url('{{asset('images/post-bg.jpg')}}')">
        @elseif(Request::is('posts/'))
        <header class="intro-header">
        @else
        <header class="intro-header" style="background-image: url('{{asset("images/" . $post->image)}}')">
        @endif
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>@yield('upperTitle')</h1>
                        <hr class="small">
                        <span class="subheading">@yield('subtitle')</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
  
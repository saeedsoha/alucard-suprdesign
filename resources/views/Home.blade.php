<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/backToTop.css') }}">
    
    {{-- slide show 2 --}} 
    <link rel="stylesheet" href="{{asset('html/slideshow/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('html/slideshow/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('html/slideshow/css/style.css')}}">
    {{-- slide show 2 --}}


    <title>SuperDesign</title>
</head>
<body>
    

     
    {{--  Navigation Section Start--}}

    <section class="navigation">
        @include('Frontend/home/nav')
    </section>

    {{--  Navigation Section  End--}}



    <main>

        <div class="hero-title-flex-wrapper">
            <div class="container-hero-title w-clearfix">
                <h1 class="heading-large g-text-align-center g-display-inline-text">
                    Get things done with your 
                    <span class="g-visuallyhidden">team</span>
                </h1>
            </div>
        </div>


        {{-- Slide Show --}}
        <section id="slidshow">

                @include('Frontend/home/slidshow')

        </section>
        {{-- Slide Show  end--}}


        {{-- About 3 --}}

        @include('Frontend/home/about')
        {{-- About 3 --}}




        {{-- works 3 --}}

        @include('Frontend/home/works')
        {{-- works 3 --}}


        {{-- back to top button --}}
        <button
            type="button"
            class="btn btn-danger btn-floating btn-lg"
            id="btn-back-to-top"
            >
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
            </svg>
        </button>

    </main>


    <footer>
        @include('Frontend/home/footer')
    </footer>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    {{-- slide show 2 --}}
    
    <script src="{{ asset('html/slideshow/js/jquery.min.js') }}"></script>
    <script src="{{ asset('html/slideshow/js/popper.js') }}"></script>
    <script src="{{ asset('html/slideshow/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('html/slideshow/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('html/slideshow/js/main.js') }}"></script>
    {{-- slide show 2 --}}

    <script src="{{ asset('asset/js/backToTop.js') }}"></script>


</body>
</html>
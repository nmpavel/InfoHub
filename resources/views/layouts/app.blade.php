<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Info Hub', 'Info Hub') }}</title>

    <!-- Scripts -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/toastr.min.js') }}"></script>
    <!-- <script>

        @if (Session:: has('success'))

        toastr.success({{ Session:: get('success') }})


        @endif

        @if (Session:: has('info'))

        toastr.info("{{ Session::get('info') }}")


        @endif
    </script> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <!-- Fonts -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="dns-prefetch" href="http://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->


    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/styles/about.css"> 
    <link rel="stylesheet" type="text/css" href="/styles/about_responsive.css">
    <link href="{{ asset('/css/app2.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/toastr.min.css') }}">
</head>

<body>
<div  style="background-image:url(/images/backgroundapp.jpg);">
    <div id="app">
        @include('partial.navbar')

        <div class="container">
            <div class="row">
                @if(Auth::check())

                <div class="col-sm-3">


                    <div class="list-group">
                        <a href="{{route('home')}}" class="list-group-item active">Home</a>
                        <a href="{{route('pro')}}" class="list-group-item">View Profile</a>
                        <a href="{{route('post.create')}}" class="list-group-item">Create new post</a>
                        <a href="{{route('category.create')}}" class="list-group-item">Create new Categories</a>
                        <a href="{{ route('file.create')}}" class="list-group-item">Upload File</a>
                        <a href="{{route('dept.show')}}" class="list-group-item">Department</a>
                    </div>

                </div>

                @endif
                <div class="col-sm-6">


                    @yield('content')

                </div>
                @if(Auth::check()) 
                <div class="col-sm-3" style="padding-right: -30px;">

                    <div class="list-group">

                        <a href="{{route('pro')}}" class="list-group-item active ">Top Users</a>
                        <?php $user_info = DB::table('users')->select('name','points')->orderBy('points','DESC')->limit(5)->get(); ?>
    
    
                        <?php foreach($user_info as $user) { ?>
    
                        <a href="" class="list-group-item ">{{ $user->name }} ({{$user->points}})</a>
    
                        <?php }  ?>
                        </div>
                                               
                    <?php $user_info = Auth::User() ?>
                    <?php if( $user_info->role=="TEACHER") { ?>
                    <div class="list-group">
                        <a href="{{route('categories')}}" class="list-group-item">View Categories</a>
                        <a href="{{route('dept.add')}}" class="list-group-item">Add Department</a>
                        <a href="{{route('session.add')}}" class="list-group-item">Add Session</a>
                        <a href="{{route('semester.add')}}" class="list-group-item">Add Semester</a>
                        <a href="{{route('course.add')}}" class="list-group-item">Add Course</a>
                    </div>

                    <?php  } ?>
                    @endif
                   

                </div>

                <div>

                </div>
            </div>
        </div>



    </div>
     <!-- Footer -->
     @include('layouts.footer')
    
    

</div>
</body>

</html>
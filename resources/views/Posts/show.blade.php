@extends('layouts.app')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container pb50">
    <div class="row">
        <div class="col-md-9 mb40">
            <article>
                <img class="img-fluid mb30" id="myImg" src="/img/Alo-Ki-Tiki.jpg" alt="lite mat" width="800px">
                <!-- The Modal -->
                <div id="myModal" class="modal">

                    <!-- The Close Button -->
                    <span class="close">&times;</span>

                    <!-- Modal Content (The Image) -->
                    <img class="modal-content" id="img01">

                    <!-- Modal Caption (Image Text) -->
                    <div id="caption"></div>
                </div>
             
                <div class="post-content">
                <h3>{{ $post->title }}</h3>
                    <ul class="post-meta list-inline">
                        <li class="list-inline-item">
                            <i class="fa fa-user-circle-o"></i> <a href="#">{{ $post->user->name }}</a>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-calendar-o"></i> <a href="#">{{ $post->created_at }}</a>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-tags"></i> <a href="#">{{ $post->category }}</a>
                        </li>
                    </ul>
                    <p class="lead">{{ $post->description }} </p>
                    <div class="me-5 mt-1">
                        <p ><strong>Ingrediences:</strong> {{ $post->ingredience }}</p>
                        <p><strong>Time:</strong> {{ $post->cookingtime }} :min</p>
                    </div>
                    <ul class="list-inline share-buttons">
                        <li class="list-inline-item">Share Post:</li>
                        <li class="list-inline-item">
                            <a href="#" class="social-icon-sm si-dark si-colored-facebook si-gray-round">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="social-icon-sm si-dark si-colored-twitter si-gray-round">
                                <i class="fa fa-twitter"></i>                       
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="social-icon-sm si-dark si-colored-linkedin si-gray-round">
                                <i class="fa fa-linkedin"></i>                  
                            </a>
                        </li>
                    </ul>
                </div>
                <a href="/posts" class="btn btn-primary mb-5">Go Back</a>
            </article>
            <!-- post article-->

        </div>
        <div class="col-md-3 mb40">

            <!--/col-->
            <div class="mb40">
                <h4 class="sidebar-title">Categories</h4>
                @foreach($posts as $category)
                <ul class="list-unstyled categories">
                    <li><a href="#">{{ $category->category }}</a></li>
                    
                </ul>
                @endforeach
            </div>
            <!--/col-->
            <div>
                <h4 class="sidebar-title">Latest News</h4>
                @foreach($posts as $userpost)
                
                    <ul class="list-unstyled">
                        <li class="media">
                            <img class="d-flex mr-3 img-fluid" width="64" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/User-avatar.svg/1024px-User-avatar.svg.png" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1"><a href="/posts/{{$userpost->id}}">{{ $userpost->title }}</a></h5> {{ $userpost->created_at }}
                            </div>
                        </li>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
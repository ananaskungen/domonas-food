@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <div class="d-flex justify-content-sm-center mb-1 mt-5">

        <img class="me-5" id="myImg" src="/img/Alo-Ki-Tiki.jpg" alt="lite mat" width="400px">

        <!-- Popup -->
        <!-- The Modal -->
            <div id="myModal" class="modal">

            <!-- The Close Button -->
            <span class="close">&times;</span>

            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img01">

            <!-- Modal Caption (Image Text) -->
            <div id="caption"></div>
            </div>
        <p class="ms-5"><strong>Description:</strong> {{ $post->description }}</p>
       
    </div>
    <div class="d-flex justify-content-sm-center">
        <div class="me-5 mt-5">
            <p ><strong>Ingrediences:</strong> {{ $post->ingredience }}</p>
            <p><strong>Time:</strong> {{ $post->cookingtime }} :min</p>
            <p><strong>Category:</strong> {{ $post->category }}</p>
        </div>
        <img class="ms-5" id="myImg-1" src="/img/Alo_Gosht_Shorba.jpg" alt="en annan maträtt"  width="400px">
                    <!-- The Modal -->
            <div id="myModal-1" class="modal-1">

                <!-- The Close Button -->
                <span class="close-1">&times;</span>

                <!-- Modal Content (The Image) -->
                <img class="modal-content-1" id="img02">

                <!-- Modal Caption (Image Text) -->
                <div id="caption-1"></div>
            </div>
    </div>
    
    <br>
    <small>Written on {{ $post->created_at }}</small>
    <br>
    <span>Author: {{ $post->user->name }}</span>
    <a href="/posts" class="btn btn-primary">Go Back</a>
</div>
@endsection
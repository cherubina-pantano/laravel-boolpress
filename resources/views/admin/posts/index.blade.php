@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Your Articles</h1>

        @if($posts->isEmpty())
            <p>Nessun post è stato creato.</p>

        @else
            Ci sono post

        @endif
    </div>
@endsection
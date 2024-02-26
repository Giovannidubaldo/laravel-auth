@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row my-5">
            <h1>{{ $project->name }}</h1>
            <p>{{ $project->description }}</p>
            <p>Data di inizio: {{ $project->start_date }}</p>
            <p>Data di fine: {{ $project->end_date }}</p>
            <img src=" {{ asset('/storage/' . $project->image) }}" alt="{{ $project->name }}" class="img-fluid" width="100">
        </div>
    </div>
@endsection

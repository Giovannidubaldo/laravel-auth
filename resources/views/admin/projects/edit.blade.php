@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="my-5 text-center">Modifica post</h2>
                <form action="{{ route('admin.projects.update', $project->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="name">Nome</label>
                            <input type="text" id="name" name="name" value="{{ $project->name }}"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="Inserisci nome progetto" required>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-6 mt-3">
                            <label for="start_date">Data di inizio progetto</label>
                            <input type="date" name="start_date" id="start_date" value="{{ $project->start_date }}"
                                class="form-control @error('start_date') is-invalid @enderror" required>
                            @error('start_date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-6 mt-3">
                            <label for="end_date">Data di fine progetto</label>
                            <input type="date" name="end_date" id="end_date" value="{{ $project->end_date }}"
                                class="form-control @error('start_date') is-invalid @enderror">
                            @error('end_date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-12 mt-3">
                            <label for="description">Descrizione</label>
                            <textarea name="description" id="description" cols="30" rows="10"
                                class="form-control @error('description') is-invalid @enderror" required>{{ $project->description }}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary btn-sm">Salva</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

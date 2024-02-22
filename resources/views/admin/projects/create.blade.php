@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="my-5 text-center">Aggiungi un nuovo post</h2>
                <form action="{{ route('admin.projects.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="name">Nome</label>
                            <input type="text" id="name" name="name" class="form-control"
                                placeholder="Inserisci nome progetto" required>
                        </div>
                        <div class="form-group col-6 mt-3">
                            <label for="start_date">Data di inizio progetto</label>
                            <input type="date" name="start_date" id="start_date" class="form-control" required>
                        </div>
                        <div class="form-group col-6 mt-3">
                            <label for="end_date">Data di fine progetto</label>
                            <input type="date" name="end_date" id="end_date" class="form-control" required>
                        </div>
                        <div class="form-group col-12 mt-3">
                            <label for="description">Descrizione</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control" required></textarea>
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

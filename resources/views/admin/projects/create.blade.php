@extends('layouts.admin')

@section('content')
<h1>Prova CREATE</h1>

 <div class="container">
        <h1 class="my-5">Aggiungi un comics!</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.projects.store') }}" method="POST">
            {{-- Cookie per far riconoscere il form al server --}}
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label fw-semibold">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label fw-semibold">Immagine</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb">
            </div>

            <div class="mb-3">
                <label for="start_date" class="form-label fw-semibold">Data di Inizio</label>
                <input type="text" class="form-control @error('start_date') is-invalid @enderror" id="start_date" name="start_date">
            </div>

            <div class="mb-3">
                <label for="end_date" class="form-label fw-semibold">Data di Fine</label>
                <input type="text" class="form-control @error('end_date') is-invalid @enderror" id="end_date" name="end_date">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label fw-semibold">Tipo</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label fw-semibold">Descrizione</label>
                <textarea class="form-control" name="description" rows="6"></textarea>
            </div>

            <button class="btn btn-success" type="submit">Salva</button>
        </form>
    </div>
<a href="{{route('admin.projects.index')}}">Torna Indietro</a>
@endsection
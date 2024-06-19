@extends('layouts.admin')

@section('content')
    @php
        $defaultImage = 'https://upload.wikimedia.org/wikipedia/commons/6/65/No-Image-Placeholder.svg';
    @endphp


    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-5">
            <h1>Lista Progetti</h1>
            <a href="{{ route('admin.projects.create') }}"
                class="px-4 py-2 bg-success text-decoration-none text-white rounded-2">Crea</a>
        </div>
        <div class="row">
            @foreach ($listaProgetti as $progetto)
                <div class="card border border-0 m-4" style="width: 17rem;">
                    <img src="{{ asset($defaultImage) }}"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            Titolo:
                            <span class="fw-semibold">
                                {{ $progetto['title'] }}
                            </span>
                        </p>
                        <div>
                            <p class="card-text">
                                Data di inizio:
                                <span class="fw-semibold">
                                    {{ $progetto['start_date'] }}
                                </span>
                            </p>
                            <p class="card-text">
                                Data di fine:
                                <span class="fw-semibold">
                                    {{ $progetto['end_date'] }}
                                </span>
                            </p>
                        </div>
                        <p class="card-text">
                            Tipo:
                            <span class="fw-semibold">
                                {{ $progetto['type'] }}
                            </span>
                        </p>
                        <p class="card-text">
                            Slug:
                            <span class="fw-semibold">
                                {{ $progetto['slug'] }}
                            </span>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

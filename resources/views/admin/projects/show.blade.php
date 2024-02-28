@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 m-auto my-5 bg-light p-5 ">
                <div class="text-center mb-3">
                    @if ($project->cover_image !== null)
                        <img src="{{ asset('storage') . '/' . $project->cover_image }}" alt="{{ $project->title }}"
                            width="75%">
                    @else
                        <img src="{{ asset('/img/test-img.jpg') }}" alt="{{ $project->title }}">
                    @endif
                </div>
                <h2 class="my-3">Titolo: {{ $project->title }}</h2>
                <p>Tipologia progetto: {{ $project->type ? $project->type->name : 'Non precisato' }}</p>
                <p>Descrizione: {{ $project->description }}</p>
                <p>Link: {{ $project->link }}</p>
                <div class="">
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-sm btn-outline-success"><i
                            class="fas fa-arrow-left me-2"></i>Torna
                        all'elenco completo</a>
                    <a href="{{ route('admin.projects.destroy', ['project' => $project->id]) }}"
                        class="btn btn-sm btn-outline-danger ms-1" data-bs-toggle="modal"
                        data-bs-target="#modal_post_delete-{{ $project->slug }}">
                        <i class="fa-solid fa-trash me-2"></i>Elimina questo progetto
                    </a>
                    @include('admin.projects.partials.modal_delete')
                </div>
            </div>
        </div>
    </div>
@endsection

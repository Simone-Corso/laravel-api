@extends('layouts.admin')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>
                {{ $project->title }}
            </h2>
        </div>
        <div class="col-12">
        <img src="{{$project->thumb}}" alt="{{$project->title}}">
            <p>
                {{ $project->type->name }}
            </p>
            <p>
                {{ $project->description }}
            </p>

            <h3 class="title text-center pt-5 mb-5">
    Tecnologie utilizzate:
</h3>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-evenly">
            @foreach ($project->technologies as $technology)
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="{{ $technology->name }}" checked>
                    <label class="form-check-label" for="{{ $technology->name }}">{{ $technology->name }}</label>
                </div>
            @endforeach
        </div>
   
            <div class="p-5">
            </div>
            <button class="btn btn-sm btn-success">
                Edit
            </button>
            <button class="btn btn-sm btn-warning" onclick="return confirm('Sei sicuro di voler eliminare questo elemento?');">
            <a href="{{ route('admin.delete-show', ['project' => $project->id]) }}">
                    Delete
                </a>
            </button>
        </div>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
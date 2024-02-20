@extends('layouts.admin')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-7">
            <form action="{{ route('admin.projects.update', $project) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3 input-group">
                    <label for="title" class="input-group-text">Title:</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $project->title) }}">
                </div>

                <div class="mb-3 input-group">
                    <label for="thumb" class="input-group-text">Project image url:</label>
                    <input class="form-control" type="text" name="thumb" id="thumb" value="{{ old('thumb', $project->thumb) }}">
                </div>

                <div class="mb-3 input-group">
                    <label for="description" class="input-group-text">Description:</label>
                    <textarea class="form-control" name="description" id="description">{{ old('description', $project->description) }}</textarea>
                </div>

                <div class="mb-3 input-group">
                    <button type="submit" class="btn btn-xl btn-primary">
                        Update project
                    </button>
                    <button type="reset" class="btn btn-xl btn-warning">
                        Reset all project
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

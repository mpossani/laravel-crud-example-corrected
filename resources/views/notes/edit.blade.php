@extends('notes.layout')

@section('content')

<div class="card mt-5">
    <h2 class="card-header">Edit Note</h2>
    <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ route('notes.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>

        <form action="{{ route('notes.update', ['id' => $note->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="inputId" class="form-label"><strong>Id:</strong></label>
                <input type="text" readonly disabled value="{{ $note->id }}" name="id" id="inputId" class="form-control">
            </div>


            <div class="mb-3">
                <label for="inputName" class="form-label"><strong>Title:</strong></label>
                <input 
                    type="text" 
                    name="title" 
                    value="{{ $note->title }}"
                    class="form-control @error('name') is-invalid @enderror" 
                    id="inputName" 
                    placeholder="Name">
                @error('title')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputcontent" class="form-label"><strong>Content:</strong></label>
                <textarea 
                    class="form-control @error('content') is-invalid @enderror" 
                    style="height:150px" 
                    name="content" 
                    id="inputcontent" 
                    placeholder="content">{{ $note->content }}</textarea>
                @error('content')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
        </form>

    </div>
</div>

@endsection

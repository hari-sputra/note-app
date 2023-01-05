@extends('layouts.app')

@section('content')
    {{-- navbar --}}
    @include('layouts.navbar')

    <div class="container mx-auto mt-6">
        <div class="card w-[50%] bg-base-100 shadow-xl mx-auto block">
            <div class="card-body">
                <h2 class="card-title text-2xl">Create Note</h2>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text text-xl">Your Title</span>
                    </label>
                    <label class="input-group">
                        <span class="bg-blue-200">Title</span>
                        <input readonly name="title" type="text" placeholder="Title"
                            class="input input-bordered w-[100%]" value="{{ $note->title }}" />
                    </label>
                </div>
                <div class="form-control mt-2">
                    <label class="label">
                        <span class="label-text text-xl">Your Description</span>
                    </label>
                    <textarea readonly rows="6" name="description" type="text" placeholder="Description"
                        class="textarea textarea-bordered w-[100%]">{{ $note->description }}</textarea>
                </div>
                <a href="{{ route('note.edit', $note->id) }}" class="btn btn-success mt-3 text-white">Edit</a>
            </div>
        </div>
    </div>
@endsection

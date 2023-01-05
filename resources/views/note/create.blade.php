@extends('layouts.app')

@section('content')
    {{-- navbar --}}
    @include('layouts.navbar')

    <div class="container mx-auto mt-6">
        <form action="{{ route('note.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card w-[50%] bg-base-100 shadow-xl mx-auto block">
                <div class="card-body">
                    <h2 class="card-title text-2xl">Create Note</h2>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text text-xl">Your Title</span>
                        </label>
                        <label class="input-group">
                            <span class="bg-blue-200">Title</span>
                            <input required name="title" type="text" placeholder="Title"
                                class="input input-bordered w-[100%]" value="{{ old('title') }}" />
                        </label>
                    </div>
                    <div class="form-control mt-2">
                        <label class="label">
                            <span class="label-text text-xl">Your Description</span>
                        </label>
                        <textarea required rows="6" name="description" type="text" placeholder="Description"
                            class="textarea textarea-bordered w-[100%]">{{ old('description') }}</textarea>
                    </div>
                    <input hidden name="user_id" value="{{ $user->id }}">
                    <button type="submit" class="btn btn-success mt-3 text-white">Add</button>
                </div>
            </div>
        </form>
    </div>
@endsection

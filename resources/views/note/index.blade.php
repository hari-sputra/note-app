@extends('layouts.app')

@section('content')
    {{-- navbar --}}
    @include('layouts.navbar')


    {{-- content --}}
    <div class="container mx-auto">
        {{-- alert --}}
        @include('components.alert')

        <div class="">
            <a href="{{ route('note.create') }}" class="btn btn-primary mt-5 px-8 mx-[50px]">Add Note</a>
        </div>

        <div class="grid grid-cols-5 gap-3">
            @foreach ($notes as $note)
                <div class="card w-full bg-slate-50 shadow-xl mt-6 ">
                    <div class="card-body">
                        <h2 class="card-title">{{ $note->title }}</h2>
                        <p class="limit">{{ $note->description }}</p>
                        <div class="card-actions mt-4">
                            <div class="flex">
                                <a href="{{ route('note.show', $note->id) }}"
                                    class="btn btn-info btn-sm mr-3 text-white">Show</a>
                                <form action="{{ route('note.destroy', $note->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="btn btn-error btn-outline
                                    btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <script>
        function limitCharacters(element, limit) {
            var text = element.textContent;
            if (text.length > limit) {
                element.textContent = text.substring(0, limit) + " " + "...";
            }
        }

        var pElements = document.querySelectorAll(".limit");
        pElements.forEach(function(element) {
            limitCharacters(element, 58);
        });
    </script>
@endsection

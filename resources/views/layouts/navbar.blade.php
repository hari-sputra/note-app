@php
    $user = Auth::user();
@endphp

<div class="navbar shadow-sm bg-slate-50">
    <div class="container mx-auto px-[50px]">
        <div class="flex-1">
            <a href="{{ route('note.index') }}" class="btn btn-ghost normal-case text-3xl">Note</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li tabindex="0">
                    <a>
                        {{ $user->name }}
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            viewBox="0 0 24 24">
                            <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                        </svg>
                    </a>
                    <ul class="p-2">
                        <li>
                            <a href="{{ route('profile.edit') }}">Profile</a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit">Log Out</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

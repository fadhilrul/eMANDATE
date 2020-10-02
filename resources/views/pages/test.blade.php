@extends('pages.layout.app')
@section('content')

{{-- @foreach ($daftar_count as $item) --}}


<div>
    <label class="block text-sm font-semibold leading-5 text-gray-700">
            izzah nak test db

            {{-- {{ $item -> item}} --}}
           
        </label>

    <div class="mt-1 flex rounded-md shadow-sm">
        <input
            type="text"
            class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"
        >
    </div>
</div>


{{-- @endforeach --}}

@endsection
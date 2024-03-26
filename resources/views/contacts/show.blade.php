@extends('layout')

@section('content')

    <div class="flex items-center justify-between mb-4">
        <h1 class="text-3xl font-bold w-full">Contact</h1>
    </div>
    <div class="flex items-center justify-between mb-4">
        <div class="w-75 max-w-sm">
            <p>{{ $contact->firstname }}</p>
            <p>{{ $contact->lastname }}</p>
            <p>{{ $contact->email }}</p>
            <p>{{ $contact->phone }}</p>
        </div>
    </div>
    <div class="flex items-center justify-between mb-4">
        <a href="{{ route('contacts.edit', [$contact]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Edit</a>
        <a href="{{ route('contacts.index') }}" class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded my-3">Back</a>
    </div>
@stop

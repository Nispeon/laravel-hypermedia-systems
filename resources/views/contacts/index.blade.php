@extends('layout')

@section('content')
    <div class="flex items-center justify-between mb-4">
        <h1 class="text-3xl font-bold w-full">Contacts</h1>
    </div>
    <div class="flex items-center justify-between mb-4">
        <form method="GET" action="{{ route('contacts.index') }}" class="w-75 max-w-sm">
            <div class="flex items-center border-b border-teal-500 py-2">
                <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                       placeholder="Search..." type="search" id="search" name="q" value="{{ request('q') ?? '' }}">

                <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
                    Search
                </button>
            </div>
        </form>
        <a href="{{ route('contacts.create') }}" class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded my-3">Add Contact</a>
    </div>


    <table class="table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2">First</th>
                <th class="px-4 py-2">Last</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Phone</th>
                <th class="px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($contacts as $contact)
            <tr>
                <td class="border px-4 py-2">{{ $contact->firstname }}</td>
                <td class="border px-4 py-2">{{ $contact->lastname }}</td>
                <td class="border px-4 py-2">{{ $contact->email }}</td>
                <td class="border px-4 py-2">{{ $contact->phone }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('contacts.edit', $contact->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                    <a href="{{ route('contacts.view', $contact->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">View</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop

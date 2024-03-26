@extends('layout')

@section('content')
    <h1 class="text-4xl font-bold pb-8">Edit Contact : {{ printf('%s %s', $contact->firstname, $contact->lastname) }}</h1>
    <form method="POST" action="{{ route('contacts.update', [$contact]) }}" class="w-full max-w-lg">
        @csrf
        @method('PUT')
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="firstname">
                    First Name
                </label>
                <input name="firstname" value="{{ $contact->firstname }}" class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="firstname" type="text" placeholder="Jane">
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="lastname">
                    Last Name
                </label>
                <input name="lastname" value="{{ $contact->lastname }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="lastname" type="text" placeholder="Doe">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                    Email
                </label>
                <input name="email" value="{{ $contact->email }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email" placeholder="johndoe@mail.com">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone">
                    Phone
                </label>
                <input name="phone" value="{{ $contact->phone }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="phone" type="tel">
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <button type="submit" class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded my-3">Update</button>
            </div>
        </div>
    </form>

    <a href="{{ route('contacts.index') }}" class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded my-3">Back</a>
    <form method="POST" action="{{ route('contacts.destroy', [$contact]) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded my-3">Delete</button>
    </form>
@stop

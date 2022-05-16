@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto">
    <h1 class="text-3xl leading-normal font-bold mt-0 mb-7 text-center">RSS List</h1>

    <div class="flex justify-center flex-wrap">
        @foreach($feeds as $feed)
        <form action="{{ route('feeds.destroy', $feed) }}" method="POST" class="inline-block mx-1 mb-3 px-4 py-2 bg-gray-200 text-gray-700 font-medium rounded-full">
            @csrf
            @method('DELETE')
            {{$feed->name}}
            <button type="submit" class="px-2 py-1 ml-1 text-xs font-semibold bg-teal-300 text-teal-800 rounded-full">X</button>
        </form>
        @endforeach

    </div>

    <div class="flex  justify-center mt-20 md:w-1/3 mx-auto">
        
        <a href="#" onclick="toggleModal()" class="mx-auto mb-3 px-4 py-2 bg-green-200 text-gray-700 font-medium rounded">Add New
            <span class="px-2 py-1 ml-1 text-xs font-semibold bg-teal-300 text-teal-800 rounded-full">+</span>
        </a>

        <a href="{{ route('feeds.refresh') }}"  class=" mx-auto mb-3 px-4 py-2 bg-green-200 text-gray-700 font-medium rounded">Refresh
            <span class="px-2 py-1 ml-1 text-xs font-semibold bg-teal-300 text-teal-800 rounded-full">+</span>
        </a>
    </div>

    <div id="flash-message">
        @if($errors->any())
            {!! implode('', $errors->all('<div class="text-red-500 rounded p-2 flex w-full"><p class="mx-auto">:message</p></div>')) !!}
        @endif

        @if(session()->has('message'))
            <div class="text-green-500 rounded p-2 flex w-full">
                <p class="mx-auto">{{ session()->get('message') }}</p>
            </div>
        @endif
    </div>

  
    <div class="fixed z-10 overflow-y-auto top-0 w-full left-0 hidden" id="modal">
        <div class="flex items-center justify-center min-height-100vh pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-900 opacity-75" />
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
            <form action="{{ route('feeds.store') }}" method="POST" class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                @csrf
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <label>Name</label>
                    <input type="text" name="name" class="w-full bg-gray-100 p-2 mt-2 mb-3" />
                    <label>Url</label>
                    <input type="text" name="link" class="w-full bg-gray-100 p-2 mt-2 mb-3" />
                </div>
                <div class="bg-gray-200 px-4 py-3 text-right">
                    
                    <button type="button" class="py-2 px-4 bg-gray-500 text-white rounded hover:bg-gray-700 mr-2" onclick="toggleModal()"><i class="fas fa-times"></i> Cancel</button>
                    
                    <button type="submit" class="py-2 px-4 bg-teal-300 text-white rounded hover:bg-green-300 mr-2"><i class="fas fa-plus"></i> Create</button>
                </div>
            </form>
        </div>
    </div>

    <script>
    function toggleModal() {
        document.getElementById('modal').classList.toggle('hidden')
    }

    setTimeout(function(){
        document.getElementById('flash-message').style.display = 'none';
    }, 5000)

    </script>

    @endSection

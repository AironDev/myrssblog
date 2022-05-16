@extends('layouts.app')


@section('content')
    <div class="max-w-5xl mx-auto">
        <div class="flex flex-wrap -mx-2">
           
           @foreach($news as $item)
            
            <div class="w-full sm:w-1/2 md:w-1/2 self-stretch p-2 mb-2">
                
                <div class="{{ $item->is_read ? 'rounded shadow-md h-full bg-gray-200' : 'rounded shadow-md h-full'  }}" ><a href="/typography/">
                    <!-- <img class="w-full h-60 m-0 rounded-t lazy" src="https://picsum.photos/00/300"  alt="This post thumbnail"> -->
                    </a>
                    <div class="px-6 py-5">
                        <div class="font-semibold text-lg mb-2"><a class="text-gray-900 hover:text-gray-700" href="{{$item->link}}">{{$item->title}}</a></div>
                        <p class="text-gray-700 mb-1" title="Published date">{{ $item->pub_date}}</p>
                        <p class="text-gray-800">{!! $item->summary !!}</p>
                    </div>


                     <form action="{{ route('news.toggle_read', $item->id) }}" method="POST" class="inline-block mx-1 mb-3 px-4 py-2 bg-gray-200 text-gray-700 font-medium rounded-full">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="px-2 py-1 ml-1 text-xs font-semibold bg-teal-300 text-teal-800 rounded-full">{{ $item->is_read ? 'Mark as Unread' : 'Mark as Read'}}</button>
                    </form>

                </div>

           
            </div>
            @endforeach

  

        </div>
                
        <div class="mt-3 flow-root">
            {!! $news->render(); !!}
        </div>
    </div>
 @endSection


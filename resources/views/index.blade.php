@extends('layouts.app')


@section('content')
    <div class="max-w-5xl mx-auto">
        <div class="flex flex-wrap -mx-2">
           
           @foreach($news as $item)
            <div class="w-full sm:w-1/2 md:w-1/2 self-stretch p-2 mb-2">
                <div class="rounded shadow-md h-full"><a href="/typography/"><img class="w-full m-0 rounded-t lazy" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%201%201&#39;%20height%3D&#39;500&#39;%20width%3D&#39;960&#39;%20style%3D&#39;background-color%3Argb(203%2C213%2C224)&#39;%2F%3E" data-src="{{asset('assets/img/typography.png') }}" width="960" height="500" alt="This post thumbnail"></a>
                    <div class="px-6 py-5">
                        <div class="font-semibold text-lg mb-2"><a class="text-gray-900 hover:text-gray-700" href="{{$item->link}}">{{$item->title}}</a></div>
                        <p class="text-gray-700 mb-1" title="Published date">21 June 2020 08:04 AM</p>
                        <p class="text-gray-800">{!! $item->summary !!}</p>
                    </div>
                </div>
            </div>
            @endforeach

  

        </div>
                
        <div class="mt-3 flow-root">
            {!! $news->render(); !!}
        </div>
    </div>
 @endSection


<x-layout>

@if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
@endif




    
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>CANZONI</h1>
            </div>
        </div>
    </div>

    
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($music as $musics)
                <div class="col-12 col-md-3 my-2">
                    <x-card song="{{$musics['song']}}"  band="{{$musics['band']}}" id="{{$musics['id']}}"/>
                </div>
            @endforeach
        </div>
    </div>
    
</x-layout>
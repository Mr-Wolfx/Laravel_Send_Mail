<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card 
                    id="{{$musics['id']}}"
                    song="{{$musics['song']}}"
                    band="{{$musics['band']}}"
                />
            </div>
        </div>
    </div>
</x-layout>
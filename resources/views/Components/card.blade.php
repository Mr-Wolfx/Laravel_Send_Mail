<div class="card" style="width: 18rem;">
    <img src="/img/music.jpg" class="card-img-top" alt="{{$song}}: {{$band}}">
    <div class="card-body">
        <h5 class="card-title">{{$song}}</h5>
        <p class="card-text">{{$band}}</p>
        <p class="card-text">{{$id}}</p>
        <a href="{{route('musics.detail', ['id'=>$id])}}" class="btn btn-primary">Ascolata Ora!</a>
    </div>
</div>
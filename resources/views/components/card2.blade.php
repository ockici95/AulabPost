<div class="box"></div>
<div class=" card card2 ">
  <img src="{{Storage::url($article->image)}}" class="card-img-top imgalt" alt="immagine card">
  <div class="card-body">
    <bold><h6 class="card-title">{{$article->title}}</h6></bold>
    <i><p class="card-text">{{$article->subtitle}}</p> </i>
    @if ($article->category)
    <a href="{{route('article.byCategory',['category'=>$article->category->id])}}" class="small text-muted d-flex justify-content-center align-items-center  my-2">{{$article->category->name}}</a>
    <span class="text-muted small fst-italic">- Tempo di lettura {{$article->readDuration()}} min -</span>
    @else
        <p class="small text-muted fst-italic text-capitalize">Non categorizzato</p>
        
    @endif

     @if ($article->tags)
    <p class="small fst-italic text-capitalize">
      @foreach ($article->tags as $tag )
      #{{$tag->name}}
      @endforeach
    </p>
    @endif
    <div class="card-footer text-muted d-flex justify-content-center align-items-center flex-column">
      <div class="my-2">Creato il: {{$article->created_at->format('d/m/Y')}} da <a href="{{route('article.byUser',['user'=>$article->user->id])}}">{{$article->user->name}}</a> 

      </div>
      <a href="{{route('article.show',compact('article'))}}" class="btn btn-orange text-black">Leggi</a>
    </div>

  </div>
</div>

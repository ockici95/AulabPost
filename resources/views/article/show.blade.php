<x-layout>
    <div class="container-fluid p5 allArticle text-center ">
        <div class="row justify-content-center">
            <div class="h1 display-1">
                Titolo: {{$article->title}}
            </div>
        </div>
    </div>
   

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 bordo2">
                 <div class="d-flex justify-content-center">
                    <img src="{{ Storage::url($article->image) }}" alt="" style="border-radius: 1rem 1rem 1rem 1rem;" class="img-fluid mt-3 ">
                </div> 
               
                <div class="text-center">
                    <h2>{{$article->subtitle}}</h2>
                    <div class="my-3 text-muted fst-italic">
                        <p>creato da {{$article->user->name}} il {{$article->created_at->format('d/m/Y')}}</p>
                    </div>
                </div>
                <hr>
                <p class="text-break">{{$article->body}}</p>

                <div class="d-flex justify-content-between">
                    @if (Auth::user() && Auth::user()->is_revisor )
                    @if ($article->is_accepted)
                       
                        <form action="{{route('revisor.rejectArticle',compact('article'))}}" method="POST">
                            @csrf
                            <button class="btn btn-danger text-white">Rifiuta articolo</button>
                        </form>
                        <a href="{{route('article.index')}}" class="btn btn-info text-white ">
                            <i class="fa-solid fa-arrow-left"></i>Torna Indietro</a>
                        @else
                        <form action="{{route('revisor.acceptArticle',compact('article'))}}" method="POST">
                            @csrf
                            <button class="btn btn-success text-white">Accetta articolo</button>
                        </form>
                        <form action="{{route('revisor.rejectArticle',compact('article'))}}" method="POST">
                            @csrf
                            <button class="btn btn-danger text-white">Rifiuta articolo</button>
                        </form>
                        @guest
                    @else
                    <a href="{{route('article.index')}}" class="btn btn-info text-white ">
                        <i class="fa-solid fa-arrow-left"></i>Torna Indietro</a>
                    @endguest

                    
                    @endif

                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layout>

                        

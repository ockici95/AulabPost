<div class="table-responsive">
<table class="table table-striped table-hover border">  

    <thead class="table-dark col-12">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">SottoTitolo</th>
        <th scope="col">Redattore</th>
        <th scope="col">Azioni</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <th scope="row"> {{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->subtitle}}</td>
            <td>{{$article->user->name}}</td>
            <td>
                @if (is_null($article->is_accepted))
                <a href="{{route('article.show',['article' => $article])}}" class="btn btn-orange text-purple"><i class="fa-solid fa-book-open-reader"></i></a>
                @else
                <form action="{{route('revisor.undoArticle', compact('article'))}}">
                @csrf
                <button  class="btn btn-orange text-purple"><i class="fa-solid fa-pen-to-square"></i></a>
                </form>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
    
</table>
</div>
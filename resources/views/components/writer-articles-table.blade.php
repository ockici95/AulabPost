<table class=" table table-striped table-hover border">
<thead class=" table-dark">
<tr class="bordoorang">
    <th scope="col">#</th>
    <th scope="col">Titolo</th>
    <th scope="col">Sottotitolo</th>
    <th scope="col">Categoria</th>
    <th scope="col">Tags</th>
    <th scope="col">Creato il </th>
    <th scope="col">Azioni </th>
  
</tr>
</thead>
<tbody>
    @foreach ($articles as $article)
        <tr class="bordoorang">
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->subtitle}}</td>
            <td>{{$article->category->name ?? 'Non categorizzato'}}</td>
            <td>
                @foreach ($article->tags as $tag)
                    {{$tag->name}}
                @endforeach
            </td>
            <td>{{$article->created_at->format('d/m/Y')}}</td>
            <td>
                <a href="{{route('article.show',compact('article'))}}" class="btn btn-orange my-1 "><i class="fa-solid fa-book-open-reader p-1"></i></a>
                <a href="{{route('article.edit', compact('article'))}}" class="btn btn-orange my-1 "><i class="fa-solid fa-pen-to-square p-1"></i></a>
                <form action="{{route('article.destroy', compact('article'))}}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class=" my-1 btn btn-orange"><i class="fa-solid fa-trash-can p-1"></i></button>
                </form>
            </td>
          
        </tr>

    @endforeach
</tbody>
</table>
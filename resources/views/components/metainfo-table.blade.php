<table class="table table-striped table-hover border">
    <thead class="table-dark">
        <tr class="bordoorang">
            <th scope="col">#</th>
            <th scope="col">tag</th>
            <th scope="col">quantità articoli collegati</th>
            <th scope="col">aggiorna</th>
            <th scope="col">cancella</th>
        </tr>
    </thead>
    <tbody  class="container">
        @foreach ($metaInfos as $metaInfo)
        <tr class="bordoorang">
            <th scope="row">{{$metaInfo->id}}</th>
            <td>{{$metaInfo->name}}</td>
            <td> {{count($metaInfo->articles)}}</td>
            @if ($metaType == 'tags')
            <td class="">
                <form action="{{route('admin.editTag', ['tag'=>$metaInfo])}}" method="POST">
                    @csrf
                    @method('put')
                    <input type="text" name="name" placeholder="Nuovo nome tag" class="form-control w-50 d-inline">
                    <div>
                    <button type="submit" class="btn btn-orange "><i class="fa-solid fa-arrows-rotate"></i></button>
                </div>
                </form>
            </td>
            <td>
                <form action="{{route('admin.deleteTag', ['tag'=>$metaInfo])}}" method="POST">
                    @csrf
                    @method('delete')
                <div>
                    <button type="submit" class="btn btn-orange "><i class="fa-solid fa-trash"></i></button>
                </div>
                </form>
                
            </td> 
            @else  
            <div>
            <td class="">
                <form action="{{route('admin.editCategory', ['category' =>$metaInfo])}}" method="POST">
                    @csrf
                    @method('put')
                    <input type="text" name="name" placeholder="Inserisci il nome aggiornato" class="form-control w-50 d-inline">
                    <button type="submit" class="btn btn-orange"><i class="fa-solid fa-arrows-rotate"></i></button>
                </form>
                
            </td>
            <td>
                <form action="{{route('admin.deleteCategory', ['category' =>$metaInfo])}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-orange"><i class="fa-solid fa-trash"></i></button>
                </form>
                
            </td>  
        </div>
            @endif
        </tr>
        @endforeach

    </tbody>
</table>
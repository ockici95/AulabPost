<x-layout>
    <div class="container fluid p5 allArticle text-center ">
        <div class="row justify-content-center">
            <div class="h1 display-1 mt-5">
                Articoli per categoria: {{$category->name}}
            </div>
        </div>
    </div>
    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
        @endif
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3">
                <x-card
                :article='$article'
            />
            </div>
              
            @endforeach
        </div>
    </div>
</x-layout>
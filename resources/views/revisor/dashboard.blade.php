<x-layout>
    <div>
    <div class="container-fluid p-5  text-center allArticle ">
        <div class="row justify-content-center">
            <div class="h1 display-1">
                Bentornato Revisore!
            </div>
        </div>
    </div>
    @if (session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
    @endif
    <div class="container my-5 table-responsive">
        <div class="row justify-content-center">
            <div class="col-12 table-responsive">
                <h2><i class="fa-solid fa-circle-exclamation px-3" style="color: #ed9907;"></i>Articoli da revisionare </h2>
                <x-articles-table :articles="$unrevisionedArticles" />
            </div>
        </div>
    </div>
    <div class="container my-5 table-responsive">
        <div class="row justify-content-center">
            <div class="col-12 table-responsive">
                <h2><i class="fa-solid fa-square-check px-3" style="color: #0af564;"></i>Articoli accettati </h2>
                <x-articles-table :articles="$acceptedArticles" />
            </div>
        </div>
       
    </div>
    <div class="container my-5 table-responsive">
        <div class="row justify-content-center ">
            <div class="col-12 table-responsive">
                <h2><i class="fa-solid fa-square-xmark px-3" style="color: #fb4113;"></i>Articoli rifiutati </h2>
                <x-articles-table :articles="$rejectedArticles" />
            </div>
        </div>
    </div>
    </div>
</div>
</x-layout>
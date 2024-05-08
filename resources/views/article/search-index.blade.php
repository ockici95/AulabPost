<x-layout>
    <div class="container-fluid text-center allArticle">
        <div class="row justify-content-center">
            <div class="h1 display-1 mt-5">
                Tutti gli articoli per: {{$query}}
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            @forelse ($articles as $article)
            <div class="col-12 col-md-5 col-lg-3 m-3">
                <x-card
                :article='$article'
            />
            </div>
              @empty
              <div class="col-12 col-md-5 col-lg-8 m-3 allArticle text-center">
                <h1>Niente da visualizzare</h1>
            </div>
            @endforelse
        </div>
    </div>
</x-layout>
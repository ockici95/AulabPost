<x-layout>
    <div class="pb-5"></div>
    <div class="container-fluid p5 text-center allArticle">
        <div class="row justify-content-center">
            <div class="h1 display-1">
                Tutti gli articoli
            </div>
        </div>
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</x-layout>
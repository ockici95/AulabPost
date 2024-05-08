<x-layout>
    <div class="pt-5">
   <x-scrittatransizione :titles='$lastArticlesTitles'/> 
    </div>
    <div class="container-fluid p-3 text-center colorange ">
        <div class="row justify-content-center">
            <div style="font-size:10vw;" class="h1 display-1 jersey-10-regular">
              The Aulab Post
               
            </div>
        </div>
    </div>
    @if (session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
        @endif
    </div>

    
<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-12 col-md-6 ">
            <h4 class="tfont">Ultimi articoli</h4>
            <div id="carouselExample" class="carousel slide shadow-lg mb-5">
                <div class="carousel-inner">
        
                @forelse ($articles as $key=>$article)
               
                <div class="carousel-item {{$key==0 ? 'active' : '' }} ">
                  
                 
                        <x-card2
                        :article='$article'
                    />
                    
                      
                  
                </div>
                @empty
                <div class='allArticle'>
                
                    <h1>NON SONO PRESENTI ARTICOLI</h1>
     
            </div>
                @endforelse
            </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>
</div>
</x-layout>
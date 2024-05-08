<!DOCTYPE html>
<html lang="en"  data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+10&display=swap" rel="stylesheet">
    <title>The Aulab Post</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    
    <x-navbar />
    
    <div class="mb-5">

    </div>
    
    
    
    
    

        {{$slot}}
    
    
    


    
      <div class="mt-5">

      </div>



    <x-footer />
 
   
</body>

</html>
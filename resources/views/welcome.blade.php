
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social Scraping</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

   </head>
<body>


   <div class="container mt-5">
       <div class="row">
           <div class="col-md-4 center">
               <form action="{{ route('search') }}" method="POST">
                   @csrf
                   <div class="form-control">
                       <div class="mb-3">
                           <label for="exampleFormControlInput1" class="form-label">Search</label>
                           <input type="search" name="search" class="form-control" id="search"
                                  placeholder="Search">
                           <input type="submit" CLASS="mt-2 bg-danger">
                       </div>
                   </div>
               </form>
           </div>

           <div class="col-md-8">
            @if(isset($finalResult))
                @foreach($finalResult as $item)
                    <h2>{{$item}}</h2>
                @endforeach
            @endif
           </div>
       </div>

   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Css/bootstrap.css">
    <link rel="stylesheet" href="/Css/style.css">
    <link rel="stylesheet" href="{{asset('css/>app.css')}}">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

    <title>Mi Primer Crud</title>
</head>
<body>
    <header >
        @include('dashboard.partials.nav-header-main')
        <div class="titulo">POST</div>
    </header>    

    <main>
        <form action="{{route('post.store')}}" method="post" class="justify-content-center">
            @csrf   

            <div class="container">
                <section class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <!-- <label for="">Titulo</label> -->
                        <input type="text" name="title" class="input" placeholder="Título" value="{{$post->title}}" readonly>      
                        @error('title')
                            <small class="text-danger">
                                {{$message}}
                            </small>   
                        @enderror       
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <!-- <label for="">Url Corta</label> -->
                        <input type="text" name="slug" class="input" placeholder="Url Corta" value="{{$post->slug}}" readonly>
                        @error('slug')
                            <small class="text-danger">
                                {{$message}}
                            </small>   
                        @enderror 
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <!-- <label for="">Descripción</label> -->
                        <textarea name="description" class="txtArea" placeholder="Descripción" readonly></textarea>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <!-- <label for="">Contenido</label> -->
                        <textarea name="content" class="txtArea" placeholder="Contenido" readonly>{{$post->content}}</textarea>   
                        @error('content')
                            <small class="text-danger">
                                {{$message}}
                            </small>   
                        @enderror 
                    </div>                      
                </section>
            </div>                    
        </form>
    </main>

    <footer>
        
    </footer>  
</body>
</html>
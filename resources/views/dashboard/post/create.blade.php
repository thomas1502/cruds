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
        <div class="titulo">INGRESO DE POST</div>
    </header>    

    <main>
        <form action="{{route('post.store')}}" method="post" class="justify-content-center">
            @csrf <!-- Se genera código y se envía -->

            @if(session('status'))
                <div class="alert alert-success"> <!-- Alert entra y sale -->
                    {{session('status')}}
                </div>
            @endif

            <div class="container">
                 <!-- @if ($errors->any())
                    @foreach($errors->all() as $error)
                        <div calss="alert alert-danger">
                            {{$error}}
                        </div>
                    @endforeach
                @endif -->

                <section class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <!-- <label for="">Titulo</label> -->
                        <input type="text" name="title" class="input" placeholder=" Título">      
                        @error('title')
                            <small class="text-danger">
                                {{$message}}
                            </small>   
                        @enderror       
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <!-- <label for="">Url Corta</label> -->
                        <input type="text" name="slug" class="input" placeholder=" Url Corta">
                        @error('slug')
                            <small class="text-danger">
                                {{$message}}
                            </small>   
                        @enderror 
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <!-- <label for="">Descripción</label> -->
                        <textarea name="description" class="txtArea" placeholder="Descripción"></textarea>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <!-- <label for="">Contenido</label> -->
                        <textarea name="content" class="txtArea" placeholder="Contenido"></textarea>   
                        @error('content')
                            <small class="text-danger">
                                {{$message}}
                            </small>   
                        @enderror 
                    </div>            
                    

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" class="button btn-form">Enviar</button>  
                    </div>                       
                </section>
            </div>                    
        </form>
    </main>

    <footer>
        
    </footer>  
</body>
</html>
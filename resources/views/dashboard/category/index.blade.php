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
        <a class="btn btn-success" href="{{route('category.create')}}">Crear</a>
    </header>    

    <main>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tbody>
                        <tr>
                            <td>
                                ID
                            </td>
                            <td>
                                Titulo
                            </td>
                            <td>
                                Ruta
                            </td>
                            <td>
                                Creacion
                            </td>
                            <td>
                                Actualizado
                            </td>
                            <td>
                                Acciones
                            </td>
                        </tr>
                    </tbody>

                    @foreach($categorys as $category)
                        <tr>
                            <td>
                                {{$category->id}}
                            </td>
                            <td>
                                {{$category->title}}
                            </td>
                            <td>
                                {{$category->slug}}
                            </td>
                            <td>
                                {{$category->created_at->format('d-m-Y')}}
                            </td>
                            <td>
                                {{$category->updated_at->format('d-m-Y')}}
                            </td>
                            <td>
                                <a href="{{route('category.show', $category->id)}}" class="btn btn-primary">Ver</a>
                                <a href="{{route('category.edit', $category->id)}}" class="btn btn-primary">Editar</a>
                                <form method="POST" action="{{ route('category.destroy', $category->id) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Borrar</button>
                                </form>    
                            </td>
                        </tr>
                    @endforeach
                </thead>                
            </table>  
            {{$categorys->links()}}        
        </div>
    </main>
</body>
</html>
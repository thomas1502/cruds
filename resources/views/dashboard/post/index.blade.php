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
        <a class="btn btn-success" href="{{route('post.create')}}">Crear</a>
    </header>    

    <main>
        <div class="container">
            <table class="table table-striped table-bordered">
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

                    @foreach($posts as $post)
                        <tr>
                            <td>
                                {{$post->id}}
                            </td>
                            <td>
                                {{$post->title}}
                            </td>
                            <td>
                                {{$post->slug}}
                            </td>
                            <td>
                                {{$post->created_at->format('d-m-Y')}}
                            </td>
                            <td>
                                {{$post->updated_at->format('d-m-Y')}}
                            </td>
                            <td>
                                <a href="{{route('post.show', $post->id)}}" class="btn btn-primary">Ver</a>
                                <a href="{{route('post.edit', $post->id)}}" class="btn btn-primary">Editar</a>
                                <button  class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $post->id}}">Borrar</button>                             
                            </td>
                        </tr>
                    @endforeach
                </thead> 
                {{$posts->links()}}    
            </table> 
            
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Alerta</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Estas seguro que deseas borrar este POST?
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <form method="POST" action="{{ route('post.destroy', $post->id) }}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </main>
</body>
</html>

<script>
const exampleModal = document.getElementById('deleteModal')
exampleModal.addEventListener('show.bs.modal', event => {
  // Button that triggered the modal
  const button = event.relatedTarget
  // Extract info from data-bs-* attributes
  const recipient = button.getAttribute('data-id')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  const modalTitle = exampleModal.querySelector('.modal-title')
  const modalBodyInput = exampleModal.querySelector('.modal-body input')

  modalTitle.textContent = `New message to ${recipient}`
  modalBodyInput.value = recipent
})
</script>

<!-- <script>
    $(#deleteModal).on('show.bs.modal', function (event){
        var button = $(event.relatedTarget);
        var category = button.data('post');
        var modal = $(this);
        modal.find('.modal-body #post').val(post);
    });
</script> -->
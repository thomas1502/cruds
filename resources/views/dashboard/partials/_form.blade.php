@include('dashboard.partials.sesion-flash-status')    
    <div class="container">
        <section class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <!-- <label for="">Titulo</label> -->
                <input type="text" name="title" class="input" placeholder="Título" value="{{old('title', $post->title)}}">      
                @error('title')
                    <small class="text-danger">
                        {{$message}}
                    </small>   
                @enderror       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <!-- <label for="">Url Corta</label> -->
                <input type="text" name="slug" class="input" placeholder="Url Corta" value="{{old('slug', $post->slug)}}">
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
                <textarea name="content" class="txtArea" placeholder="Contenido">{{old('content', $post->content)}}</textarea>   
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
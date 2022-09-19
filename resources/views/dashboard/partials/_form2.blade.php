@include('dashboard.partials.sesion-flash-status') 
    <div class="container">
        <section class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <!-- <label for="">Titulo</label> -->
                <input type="text" name="title" class="input" placeholder=" Título" value="{{old('title', $category->title)}}">      
                @error('title')
                    <small class="text-danger">
                        {{$message}}
                    </small>   
                @enderror       
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <!-- <label for="">Url Corta</label> -->
                <input type="text" name="slug" class="input" placeholder=" Url Corta" value="{{old('slug', $category->slug)}}">
                @error('slug')
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
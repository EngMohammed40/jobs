@if(count($errors)>0)
    
    @foreach ($errors->all() as $error)
    <div class="alert alert-success" role="alert">
        <p class="mb-0">
        {{$error}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </p>
        
    </div>
    @endforeach

@endif


@if(session('error'))
    <div class="alert alert-success" role="alert">
            <p class="mb-0">
            {{session('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </p>
            
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success" role="alert">
        <p class="mb-0">
           {{session('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </p>
        
    </div>
@endif
   

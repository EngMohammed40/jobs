@extends('admin.layout.app')

@section('content')

    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">المدن</h4>
            </div>
            <div class="card-content">
                <form class="mt-2" action="{{route('admin.regions.store')}}" method="POST">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">اختر الدولة</label>
                                    <select  class="form-control round" id="country" name="country">
                                        
                                        @foreach($countries as $country)
                                            <option class="form-control" value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                        
                                    </select>
                                </fieldset>
                                
                            </div>
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">اختر المدينة </label>
                                    <select  class="form-control round" id="region" name="city">
                                        
                                    </select>
                                </fieldset>
                                
                            </div>
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">الاسم</label>
                                    <input type="text" name="name" id="roundText" class="form-control round">
                                </fieldset>
                            </div>                           
                            <button class="btn btn-primary mb-2" type="submit">اضافة</button>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('javascript')
<script>

    // Get Regions Functions ...................
    function get_regions(){
        $.ajax({
            headers    : {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
            dataType   : 'html',
            url        :'{{URL::to("get-regions")}}',
            type       :'get',
            success    :'success',
            data       :{
                            id:$('#country').val()
                        },
            success    :function(result){
                            $('#region').html(result);
                        }
        });
    }

    $(document).ready(function(){
            get_regions();
    });

    // On change of country Select..............
        $('#country').on('change',function(){
            get_regions();
        });


</script>

@endsection


@extends('admin.layout.app')

@section('content')

    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">المدن</h4>
            </div>
            <div class="card-content">
                <form class="mt-2" action="{{route('admin.regions.update',$region->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <div class="row">
                        <div class="col-md-12">
                            <fieldset class="form-group">
                                <label for="roundText">اختر الدولة</label>
                                <select id="country" class="form-control round" name="country">
                                   
                                    @foreach($countries as $country)
                                        @if($region->country_id == $country->id )
                                            @php($selected = 'selected')
                                        @else
                                            @php($selected = '')
                                        @endif
                                        <option class="form-control" {{$selected}} value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                    
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-12">
                            <fieldset class="form-group">
                                <label for="roundText">اختر المنطقة</label>
                                <select id="region" class="form-control round" name="city">
                                   
                                    @foreach($cities as $city)
                                        @if($region->city_id == $city->id )
                                            @php($selected = 'selected')
                                        @else
                                            @php($selected = '')
                                        @endif
                                        <option class="form-control" {{$selected}} value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                    
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-12">
                            <fieldset class="form-group">
                                <label for="roundText">الاسم</label>
                                <input type="text" name="name" value="{{$region->name}}" id="roundText" class="form-control round">
                            </fieldset>
                        </div>                           
                            <button class="btn btn-primary mb-2" type="submit">تعديل</button>

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

    // On change of country Select..............
        $('#country').on('change',function(){
            get_regions();
        });


</script>

@endsection

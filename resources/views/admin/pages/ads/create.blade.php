@extends('admin.layout.app')

@section('style')
    <style>
        .google-container , .img-container{
            display:none
        }
        textarea{
            resize: none;
        }
        .current-img img {
            width: 146px;
            display: block;
            margin-top: 11px;
            margin-bottom: 15px;
        }
        .current-img span {
            font-weight: bold;
        }
    </style>

@endsection

@section('content')

    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">المساحات الاعلانية</h4>
            </div>
            <div class="card-content">
                <form class="mt-2" action="{{route('admin.ads.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">الاسم</label>
                                    <input type="text" name="name" class="form-control round">
                                </fieldset>
                            </div>

                             <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">الرابط</label>
                                    <input type="text" name="link" class="form-control round">
                                </fieldset>
                            </div>


                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="adgroup_id">مكان ظهور الإعلان</label>
                                    <select id="adgroup_id" class="form-control round" name="adgroup_id">
                                        @foreach($adsgroups as $adsgroup)
                                            <option class="form-control round"
                                             value="{{$adsgroup->id}}">
                                                {{$adsgroup->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </fieldset>
                            </div>


                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">النوع</label>
                                    <select id="type" class="form-control round" name="type">
                                        @php($types = array(
                                            'img' => 'صورة',
                                            'google' => 'جوجل ادسنس',
                                            'none' => 'عدم الظهور'
                                        ))
                                        @foreach($types as $key=>$value)
                                            <option class="form-control round"
                                             value="{{$key}}">
                                                 {{$value}}
                                            </option>
                                        @endforeach
                                    </select>
                                </fieldset>
                            </div>
                            <!-- Image Container -->
                            <div class="img-container col-md-12">
                            <p>اذا تم رفع اكثر من صورة في المساحات الاعلانية التي تعرض صورة واحدة سوف يعتد بالاولي فقط</p>
                                <fieldset class="form-group">
                                    <div class="custom-file">
                                        <input type="file" name="ad_img[]" class="custom-file-input" id="customFile" multiple>
                                        <label class="custom-file-label" for="customFile">رفع صور</label>
                                    </div>
                                </fieldset>
                            </div>
                            <!-- Google Container -->
                            <div class="google-container col-md-12">
                                <fieldset class="form-group">
                                    <textarea class="form-control" name="ad_google"  placeholder="الكود"></textarea>
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
    $(document).ready(function(){

        var type = $('#type').val();

        if(type == 'img'){

            $('.img-container').show();
            $('.google-container').hide();

        }

        if(type == 'google'){

            $('.img-container').hide();
            $('.google-container').show();

        }

        if(type == 'none'){

            $('.img-container').hide();
            $('.google-container').hide();

        }

        $('#type').change(function(){

            var type = $('#type').val();
            if(type == 'img'){

                $('.img-container').show();
                $('.google-container').hide();

            }

            if(type == 'google'){

                $('.img-container').hide();
                $('.google-container').show();

            }

            if(type == 'none'){

                $('.img-container').hide();
                $('.google-container').hide();

            }

        });

    });



</script>

@endsection

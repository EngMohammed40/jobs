@extends('admin.layout.app')

@section('content')

    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">الشركات</h4>
            </div>
            <div class="card-content">
                <form class="mt-2" action="{{route('admin.companies.update',$company->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">اسم الشركة</label>
                                    <input type="text" name="name" id="roundText" class="form-control round" value="{{$company->name}}">
                                </fieldset>
                            </div> 
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">الوصف </label>
                                    <textarea type="text" name="description" id="roundText" class="form-control round">{{$company->description}}</textarea>
                                </fieldset>
                            </div> 
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">الرابط</label>
                                    <input type="text" name="link" id="roundText" class="form-control round" value="{{$company->link}}">
                                </fieldset>
                                
                            </div>
                            <div class="col-md-12">
                               
                            <fieldset class="form-group">
                                    <label for="roundText">الصورة</label>
                                    <div class="custom-file">
                                        <input type="file" name="img" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">رفع صورة</label>
                                    </div>
                                    <div class="my-2">
                                        <h4>الصورة الحالية</h4> 
                                        <img src="{{asset('companies/'.$company->image.'')}}"  />
                                    </div>
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



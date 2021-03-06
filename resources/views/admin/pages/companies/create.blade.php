@extends('admin.layout.app')

@section('content')

    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">الشركات</h4>
            </div>
            <div class="card-content">
                <form class="mt-2" action="{{route('admin.companies.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">اسم الشركة</label>
                                    <input type="text" name="name" id="roundText" class="form-control round">
                                </fieldset>
                            </div> 
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">الوصف </label>
                                    <textarea type="text" name="description" id="roundText" class="form-control round"></textarea>
                                </fieldset>
                            </div> 
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">الرابط</label>
                                    <input type="text" name="link" id="roundText" class="form-control round">
                                </fieldset>
                                
                            </div>
                            <div class="col-md-12">
                               
                            <fieldset class="form-group">
                                    <label for="roundText">الصورة</label>
                                    <div class="custom-file">
                                        <input type="file" name="img" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">رفع صورة</label>
                                    </div>
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



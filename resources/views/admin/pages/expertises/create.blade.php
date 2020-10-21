@extends('admin.layout.app')
@section('style')
<style>
    .select2-container {
        box-sizing: border-box;
        display: inline-block;
        margin: 0;
        position: relative;
        vertical-align: middle;
        width: 97% !important;
    }
</style>
@endsection
@section('content')

    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">التخصصات</h4>
            </div>
            <div class="card-content">
                <form class="mt-2" action="{{route('admin.expertises.store')}}" method="POST">
                    @csrf
                    <div class="container">
                        <div class="row">
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
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>
@endsection
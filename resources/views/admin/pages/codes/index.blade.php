@extends('admin.layout.app')
@section('style')
<style>
    textarea#roundText {
        text-align: left;
        direction: ltr;
        height: 317px;
    }
</style>
@endsection
@section('content')
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">الاكواد</h4>
            </div>
            <div class="card-body card-dashboard">
                <form class="mt-2" action="{{route('admin.codes.update')}}" method="POST">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">اكواد css</label>
                                    <textarea type="text" name="css" id="roundText" class="form-control round">{{$css}}</textarea>
                                </fieldset>
                            </div>

                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">اكواد javascript</label>
                                    <textarea type="text" name="javascript" id="roundText" class="form-control round">{{$javascript}}</textarea>
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


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
                <h4 class="mb-0">رسالة الرد </h4>
            </div>
            <div class="card-content">
                <form class="mt-2" action="{{route('admin.contacts.reply',$contact->id)}}" method="POST">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">الرسالة</label>
                                    <textarea name="message" id="roundText" class="form-control round"></textarea>
                                </fieldset>
                            </div>

                            <button class="btn btn-primary mb-2" type="submit">ارسال</button>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection

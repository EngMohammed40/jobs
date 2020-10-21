@extends('admin.layout.app')

@section('style')
    <style>
        h5 {
            margin-top: 32px;
            font-size: 22px;
            text-decoration: underline;
        }
        a.btn.btn-primary.waves-effect.waves-light {
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('content')

    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">الرسالة</h4>
            </div>
            <div class="card-content">
                    <div class="container">
                        <div class="row">
                        <div class="col-md-12">
                            <h5>البريد الالكتروني</h5>
                            <p>{{$contact->email}}</p>

                        </div>
                        <div class="col-md-12">
                            <h5>الرسالة</h5>
                            <p>{{$contact->message}}</p>

                        </div>
                        <a class="btn btn-primary" href="{{route('admin.contacts.index')}}">العودة</a>
                    </div>

            </div>
        </div>
    </div>
</div>

@endsection


@extends('admin.layout.app')

@section('content')

    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">المدن</h4>
            </div>
            <div class="card-content">
                <form class="mt-2" action="{{route('admin.cities.store')}}" method="POST">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">الاسم</label>
                                    <input type="text" name="name" id="roundText" class="form-control round">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">اختر الدولة</label>
                                    <select id="type" class="form-control round" name="country">

                                        @foreach($countries as $country)
                                            <option class="form-control" value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach

                                    </select>
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


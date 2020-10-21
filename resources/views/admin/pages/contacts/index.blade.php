@extends('admin.layout.app')
@section('content')

 <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">الشكاوى و الاقتراحات</h4>
            </div>
            <div class="card-body card-dashboard">
                <div class="table-responsive mt-1">
                    <table id="datatable" class="table table-striped table-hover-animation mb-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>البريد الالكتروني</th>
                                <th> </th>
                                <th> </th>
                                <th> </th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($contacts as $contact)
                            <tr>
                                <td>{{$contact->email}}</td>
                                <td>
                                    @if($contact->replyed == 0)
                                    لم يتم الرد
                                    @else
                                        تم الرد
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('admin.contacts.show',$contact->id)}}" class="btn btn-primary">عرض</a>
                                </td>
                                @if($contact->replyed == 0)
                                    <td>
                                        <a href="{{route('admin.get_contact_reply',$contact->id)}}" class="btn btn-success">الرد</a>
                                    </td>
                                @else
                                    <td></td>
                                @endif

                                <td>
                                    <form method="POST" action="{{route('admin.contacts.destroy',$contact->id)}}">
                                        @csrf
                                        <input type="submit" value="حذف" class="btn btn-danger mr-1 mb-1 waves-effect waves-light">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')


@endsection

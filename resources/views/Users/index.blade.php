@extends('Layout.main')

@section('title', 'لیست کاربران')

@section('content')
    <table class="datatable">
        <tr class="datatable__heads">
            <th>ردیف</th>
            <th>ایمیل</th>
        </tr>

        @foreach($users as $key => $user)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
    </table>
@endsection

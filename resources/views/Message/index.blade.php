@extends('Layout.main')

@section('title', 'لیست پیام ها')

@section('content')
    <table class="datatable">
        <tr class="datatable__heads">
            <th>ردیف</th>
            <th>ایمیل</th>
            <th>متن پیام</th>
        </tr>

        @foreach($messages as $key => $message)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $message->email }}</td>
                <td>{{$message->text}}</td>
            </tr>
        @endforeach
    </table>
@endsection

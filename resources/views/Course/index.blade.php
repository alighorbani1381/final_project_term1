@extends('Layout.main')

@section('title', 'لیست دوره ها')

@section('content')
    <table class="datatable">
        <tr class="datatable__heads">
            <th>ردیف</th>
            <th>نام دوره</th>
            <th>جزئیات</th>
            <th>قیمت</th>
        </tr>
        @foreach($courses as $key => $course)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->description }}</td>
                <td>{{ $course->price . ' تومان ' }}</td>
            </tr>
        @endforeach
    </table>
@endsection

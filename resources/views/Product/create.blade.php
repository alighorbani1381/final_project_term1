<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>افزودن محصول</title>
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/add-course.css')}}">
</head>

<body>

    <div class="form-holder">

        <h1>افزودن محصول</h1>
        <form action="{{ route('courses.store') }}" method="post">
            @csrf
            <div class="input-holder">
                <label>نام محصول</label>
                <input type="text" name="name" placeholder="نام محصول را وارد کنید ..." required>
            </div>
            <div class="input-holder">
                <label style="vertical-align: 6rem;">توضیحات</label>
                <textarea required placeholder="توضیحات محصول را وارد کنید ...." name="description" id="" cols="30" rows="5"></textarea>
            </div>
            <div class="input-holder">
                <label>قیمت کالا</label>
                <input type="number" placeholder="قیمت محصول را وارد کنید ..." required name="price">
            </div>

            <div class="input-holder">
                <input class="btn-submit" type="submit" value="ثبت محصول">
            </div>
        </form>
    </div>

    @if (session()->has('CourseAdded'))
        <div class="msg-success mt-15">
            ثبت محصول با موفقیت انجام شد
        </div>
    @endif

    @if (session()->has('CourseEdited'))
    <div class="msg-success mt-15">
        ویرایش محصول با موفقیت انجام شد
    </div>
@endif
</body>

</html>

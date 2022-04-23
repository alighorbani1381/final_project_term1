<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ویرایش محصول</title>
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/add-course.css') }}">
</head>

<body>

    <div class="form-holder">

        <h1>افزودن محصول</h1>
        <form action="{{ route('courses.update', $course->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="input-holder">
                <label>نام محصول</label>
                <input type="text" name="name" value="{{ $course->name }}" placeholder="نام محصول را وارد کنید ..."
                    required>
            </div>
            <div class="input-holder">
                <label style="vertical-align: 6rem;">توضیحات</label>
                <textarea required placeholder="توضیحات محصول را وارد کنید ...." name="description" id="" cols="30"
                    rows="5">{{ $course->description }}</textarea>
            </div>
            <div class="input-holder">
                <label>قیمت کالا</label>
                <input type="number" value="{{ $course->price }}" placeholder="قیمت محصول را وارد کنید ..." required
                    name="price">
            </div>

            <div class="input-holder">
                <input class="btn-submit" type="submit" value="ویرایش محصول">
            </div>
        </form>
    </div>
</body>

</html>

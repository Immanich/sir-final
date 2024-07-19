@foreach ($students->get() as $stud)
    @include('pages._single-student', ['students' => $stud])
@endforeach

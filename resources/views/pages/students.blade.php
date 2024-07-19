@extends('base.base')

@section('content')
@include('pages._create-student')
<script src="https://unpkg.com/htmx.org@1.6.1"></script>

<div class="flex justify-between items-center mb-3 pt-6">
    <h1 class="text-4xl text-bold">STUDENT INFO</h1>
    <button id="add-student-btn" onclick="clearForm(); document.getElementById('add-student-modal').classList.remove('hidden')" class="ml-4 p-2 bg-green-400 hover:bg-green-500 duration-300 text-white rounded">Add Student</button>
</div>
<hr>
<div id="students_list" class="flex mt-3 flex-wrap gap-3 justify-between" hx-get="/api/students" hx-trigger="load delay:100ms" hx-swap="innerHTML"></div>


<div id="edit-student-modal" class="hidden fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50"></div>

<script>
    function clearForm() {
        document.getElementById('addStudentForm').reset();
        document.getElementById('addMessage').innerHTML = '';
    }
</script>

@endsection

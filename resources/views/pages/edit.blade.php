<div class="bg-white rounded p-8">
    <h2 class="text-2xl mb-4 font-bold text-blue-600 text-center">Edit Student</h2>
    <form hx-put="/api/students/{{$student->id}}" 
          class="w-[450px]"
          method="POST" 
          hx-post="/api/students/{{$student->id}}" 
          hx-target="#edit-student-modal" 
          hx-swap="innerHTML"
          hx-trigger="submit"
          hx-on="htmx:afterRequest: hideEditModal()">
        @csrf
        @method('PUT')
        <label for="last_name">Last_Name</label>
        <input type="text" id="last_name" name="last_name" value="{{$student->last_name}}" class="border rounded px-3 py-2 mb-4 w-full">
        <label for="first_name">first_name:</label>
        <input type="text" id="first_name" first_name="first_name" value="{{$student->first_name}}" class="border rounded px-3 py-2 mb-4 w-full">
        <label for="birth_date">birth_date:</label>
        <textarea id="birth_date" name="birth_date" class="border rounded px-3 py-2 mb-4 w-full">{{$student->birth_date}}</textarea>
        <label for="address">address:</label>
        <input type="text" id="address" name="address" value="{{$student->address}}" class="border rounded px-3 py-2 mb-4 w-full">
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Save Edit</button>
        <a href="/students" class="btn btn-secondary">Back</a>
    </form>
</div>

{{-- <script>
    function showEditModal() {
        document.getElementById('edit-student-modal').classList.remove('hidden');
    }

    function hideEditModal() {
        document.getElementById('edit-student-modal').classList.add('hidden');
    }

    document.addEventListener('htmx:afterRequest', function(evt) {
        if (evt.detail.target.id === 'edit-student-modal') {
            hideEditModal();
            htmx.ajax('GET', '/api/students', {target: '#students_list', swap: 'innerHTML'});
        }
    });
</script> --}}
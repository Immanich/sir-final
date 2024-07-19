<div id="add-student-modal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-gray-200 p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl mb-4">Add Student</h2>
        <form id="addStudentForm" hx-post="/api/students" hx-trigger="submit" hx-target="#students_list" hx-swap="afterbegin">
            <div class="mb-4">
                <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                <input type="text" name="first_name" id="first_name" class="mt-1 p-2 border border-gray-300 rounded w-full" required>
                <div id="first_name_Error"></div>
            </div>
            <div class="mb-4">
                <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="mt-1 p-2 border border-gray-300 rounded w-full" required>
                <div id="last_name_Error"></div>
            </div>
            <div class="mb-4">
                <label for="birth_date" class="block text-sm font-medium text-gray-700">Birth Date</label>
                <input type="date" name="birth_date" id="birth_date" class="mt-1 p-2 border border-gray-300 rounded w-full" required>
                <div id="birth_date_Error"></div>
            </div>
            <div class="mb-4">
                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                <input type="text" name="address" id="address" class="mt-1 p-2 border border-gray-300 rounded w-full" required>
                <div id="address_Error"></div>
            </div>
            <div id="addMessage" hx-swap-oob="true" hx-target="this"></div>

            <div class="flex justify-end">
                <button type="submit" id="add-btn" class="mr-4 p-2 bg-blue-500 text-white rounded">Add</button>
                <button type="button" id="cancel-btn" class="p-2 bg-red-500 text-white rounded" onclick="document.getElementById('add-student-modal').classList.add('hidden')">Close</button>
            </div>
        </form>
    </div>
</div>

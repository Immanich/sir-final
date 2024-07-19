<div class="p-4 m-1 rounded bg-gray-200 w-full flex flex-col fade-me-out items-start" id="student-{{ $stud->id }}">
    {{-- <h1>STUDENT INFO</h1> --}}
    <div class="flex items-center w-full">
        <div class="flex-1">
            <h3 class="text-3xl tracking-wide">{{ $stud->first_name }} {{ $stud->last_name }}</h3>
            <div class="italic text-gray-700">{{ $stud->address }}</div>
            {{-- <div class="font-light text-gray-700">{{ $stud->birth_date }}</div> --}}
        </div>
        <div class="flex space-x-3">
            <button hx-get='/api/students/{{$stud->id}}'
                    hx-target="#students_list"
                    hx-swap="innerHTML"
                    class="text-white rounded bg-blue-500 hover:bg-blue-600 duration-300 p-2">EDIT
                {{-- <svg class="h-6 w-6 text-blue-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                </svg> --}}
            </button>
            <button hx-delete="/api/students/{{ $stud->id }}" 
                    hx-target="#student-{{ $stud->id }}" 
                    hx-swap="delete swap:1.1s" 
                    hx-confirm="Are you sure to delete this student?"
                    class="text-white bg-red-500 hover:bg-red-600 duration-300 rounded p-2">DELETE
                {{-- <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="3 6 5 6 21 6" />
                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                    <line x1="10" y1="11" x2="10" y2="17" />
                    <line x1="14" y1="11" x2="14" y2="17" />
                </svg> --}}
            </button>
        </div>
    </div>
</div>

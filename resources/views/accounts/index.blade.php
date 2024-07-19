@extends('base.base')

@section('content')


<div id="accounts_list" class="flex mt-3 flex-wrap gap-3 justify-between">
    <div class="flex justify-between items-center mb-3 w-full pt-3">
        <h1 class="text-4xl font-bold">ACCOUNTS</h1>
        <button onclick="document.getElementById('add-account-modal').classList.remove('hidden');"
                class="ml-4 p-2 bg-green-400 hover:bg-green-500 duration-300     text-white rounded">Add Account</button>
    </div>
    
    @foreach ($accounts as $account)
        @include('accounts._single-account', ['account' => $account])
    @endforeach
</div>

<div id="account-details-container"></div>

<div id="add-account-modal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-gray-200 p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl mb-4">Add Account</h2>
        <form hx-post="{{ route('accounts.store') }}" hx-target="#accounts_list" hx-swap="beforeend">
            @csrf
            <div class="mb-4">
                <label for="student_id" class="block text-sm font-medium text-gray-700">Student</label>
                <select name="student_id" id="student_id" class="mt-1 p-2 border border-gray-300 rounded w-full" required>
                    @foreach ($students as $student)
                        <option value="{{ $student->id }}">{{ $student->first_name }} {{ $student->last_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="section" class="block text-sm font-medium text-gray-700">Section</label>
                <input type="text" name="section" id="section" class="mt-1 p-2 border border-gray-300 rounded w-full" required>
            </div>
            <div class="mb-4">
                <label for="remarks" class="block text-sm font-medium text-gray-700">Remarks</label>
                <input type="text" name="remarks" id="remarks" class="mt-1 p-2 border border-gray-300 rounded w-full">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="mr-4 p-2 bg-blue-500 text-white rounded">Add</button>
                <button type="button" onclick="document.getElementById('add-account-modal').classList.add('hidden')" class="p-2 bg-red-500 text-white rounded">Close</button>
            </div>
        </form>
    </div>
</div>

<script src="https://unpkg.com/htmx.org@1.6.1"></script>
@endsection

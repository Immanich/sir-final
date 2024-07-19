<div class="p-4 m-3 rounded bg-gray-200 w-full flex flex-col items-start" id="account-{{ $account->id }}">
    <h3 class="text-2xl">{{ $account->student->first_name }} {{ $account->student->last_name }}</h3>
    <div class="italic text-gray-700">{{ $account->section }}</div>
    <div class="italic text-gray-700">{{ $account->remarks }}</div>
    <button hx-get="{{ route('accounts.show', $account->id) }}" 
        hx-target="#accounts_list"
        hx-trigger="click"
        class="mt-2 p-2 bg-blue-500 hover:bg-blue-600 duration-300 text-white rounded">Show</button>
</div>

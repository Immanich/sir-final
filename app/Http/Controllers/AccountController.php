<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Student;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $accounts = Account::with('student')->get();
        $students = Student::all(); 
        return view('accounts.index', compact('accounts', 'students')); 
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'section' => 'required|string|max:255',
            'remarks' => 'nullable|string|max:255',
        ]);

        $account = Account::create($validated);

        return view('accounts._single-account', ['account' => $account]);
    }

    public function show(Account $account)
    {
        $charges = $account->charges;
        $payments = $account->payments;

        $totalCharges = $charges->sum('amount');
        $totalPayments = $payments->sum('amount');
        $totalAmount = $totalCharges - $totalPayments;

        return view('accounts.account-details', compact('account', 'charges', 'payments', 'totalCharges', 'totalPayments', 'totalAmount'));
    }
    
}


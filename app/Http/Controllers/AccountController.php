<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Expense;
use App\Models\Income;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        $accs= Account::orderBy("created_at","desc")->get();
        return view("accounts.acc", compact("accs"));
    }

    public function store(Request $request)
    {
        $acc = Account::create($request->all());
        Alert::success($acc->acc_name, "Added Successfully!");
        return redirect()->back();
    }

    public function acc_income()
    {
        $incomes = Income::orderBy("created_at","desc")->get();
        $accounts = Account::active()->orderBy("created_at","desc")->get();
        return view('accounts.income', compact('accounts', 'incomes'));
    }

    public function acc_income_store(Request $request)
    {
        $income = Income::create($request->all());
        $acc = Account::find($request->acc_id);
        $acc->balance += $income->amount;
        $acc->save();

        DB::table('transaction_history')->insert([
            'trans_id'=> substr((string) Str::uuid(), 0, 5),
            'acc_id'=> $request->acc_id,
            'income_id'=> $income->id,
            'type'=> 'income',
            'amount'=> $income->amount,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Alert::success('Income','Added Successfully!');
        return redirect()->back();
    }

    public function acc_expense()
    {
        $expenses = Expense::orderBy('created_at','desc')->get();
        $accounts = Account::active()->orderBy("created_at","desc")->get();
        return view('accounts.expense', compact('accounts','expenses'));
    }

    public function acc_expense_store(Request $request)
    {
        $expense = Expense::create($request->all());
        $acc = Account::find($request->acc_id);
        $acc->balance -= $expense->amount;
        $acc->save();

        DB::table('transaction_history')->insert([
            'trans_id'=> substr((string) Str::uuid(), 0, 5),
            'acc_id'=> $request->acc_id,
            'expense_id'=> $expense->id,
            'type'=> 'expense',
            
            'amount'=> $expense->amount,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Alert::success('Expense','Added Successfully!');
        return redirect()->back();
    }

    public function acc_ledger()
    {
        $ledgers = DB::table('transaction_history')
        ->leftJoin('accounts','transaction_history.acc_id', '=', 'accounts.id')
        ->leftJoin('incomes','transaction_history.income_id', '=', 'incomes.id')
        ->leftJoin('expenses', 'transaction_history.expense_id', '=', 'expenses.id')
        ->select(
            'transaction_history.*',
            'accounts.acc_name',
            'incomes.source',
            'incomes.description as idesc',
            'incomes.date as idate',
            'incomes.amount as iamount',
            'expenses.payee',
            'expenses.description as edesc',
            'expenses.date',
            'expenses.amount as eamount')
        ->orderBy('transaction_history.created_at', 'desc')
        ->limit(20)
        ->get();
        

        //return $ledgers;
        return view('accounts.balance', compact('ledgers'));
    }
}

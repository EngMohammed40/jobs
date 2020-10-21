<?php

namespace App\Http\Controllers\Admin\BankAccounts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BankAccounts\StoreRequest;
use App\Http\Requests\Admin\BankAccounts\UpdateRequest;
use App\Models\BankAccount;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class BankAccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $bank_accounts = BankAccount::all();
        return view('admin.pages.bank_accounts.index')->with('bank_accounts', $bank_accounts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.pages.bank_accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        BankAccount::create($request->all());
        return redirect()->route('admin.bank-accounts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $bank_account = BankAccount::findOrFail($id);
        return view('admin.pages.bank_accounts.edit')->with('bank_account', $bank_account);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, $id)
    {
        $bank_account = BankAccount::findOrFail($id);
        $bank_account->update($request->all());
        return redirect()->route('admin.bank-accounts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $bank_account = BankAccount::findOrFail($id);
        $bank_account->delete();
        return redirect()->back();
    }
}

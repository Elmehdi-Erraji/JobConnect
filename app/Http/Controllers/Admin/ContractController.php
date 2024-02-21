<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contract;
use App\Http\Requests\CreateContractRequest;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contracts = Contract::all();

        return view('admin.contract.index', compact('contracts'));
    }


    public function store(CreateContractRequest $request)
    {
        Contract::create($request->validated());

        return redirect()->route('contracts.index')
            ->with('success', 'Contract created successfully.');
    }


    public function update(CreateContractRequest $request, Contract $contract)
    {
        $contract->update($request->validated());

        return redirect()->route('contracts.index')
            ->with('success', 'Contract updated successfully.');
    }


    public function destroy(Contract $contract)
    {
        $contract->delete();

        return redirect()->route('contracts.index')
            ->with('success', 'Contract deleted successfully.');
    }
}

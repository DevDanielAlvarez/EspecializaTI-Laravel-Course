<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupportRequest;
use App\Models\Support;
use Illuminate\Contracts\View\View;
use Illuminate\Http\{RedirectResponse, Request};


class SupportController extends Controller
{
    protected string $viewFolderPath = "admin/support/";
    /**
     * return all supports
     */
    public function index(Support $supportModel): View
    {

        $allSupports = $supportModel->all();

        return view($this->viewFolderPath . 'index', compact('allSupports'));
    }

    public function create(): View
    {

        return view($this->viewFolderPath . '/create');
    }

    public function store(StoreUpdateSupportRequest $formRequest, Support $supportModel): RedirectResponse
    {

        $dataRequest = $formRequest->all();

        $supportModel->create($dataRequest);

        return redirect()->route('support.index');
    }

    public function show(string|int $id): View
    {

        // $dataSupport = Support::where('id' , $id)->first();
        $dataSupport = Support::findOrfail($id);

        return view($this->viewFolderPath . 'show', compact('dataSupport'));
    }

    public function edit(string | int $id): View
    {
        $supportFound = Support::findOrFail($id);

        return view($this->viewFolderPath . 'edit', compact('supportFound'));
    }

    public function update(StoreUpdateSupportRequest $formRequest, string|int $id):RedirectResponse{

        $supportFound = Support::findOrFail($id);


        //funciona para store e update

        // $supportFound->subject = $formRequest->subject;

        // $supportFound->body = $formRequest->body;

        // $supportFound->save();


        $supportFound->update($formRequest->validated());

        return redirect()->route('support.index');

    }

    public function destroy(Request $request):RedirectResponse{

        $supportFound = Support::findOrFail($request->id);

        $supportFound->delete();

        return redirect()->route('support.index');
    }
}
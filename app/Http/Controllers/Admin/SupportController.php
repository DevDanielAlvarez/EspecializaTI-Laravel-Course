<?php

namespace App\Http\Controllers\Admin;

use App\DTO\Support\StoreSupportDTO;
use App\DTO\Support\UpdateSupportDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupportRequest;
use App\Models\Support;
use App\Services\SupportService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\{RedirectResponse, Request};
use stdClass;

class SupportController extends Controller
{
    protected string $viewFolderPath = "admin/support/";

    public function __construct(protected SupportService $service)
    {}

    /**
     * return all supports
     */
    public function index(): View
    {

        $allSupports = $this->service->all();
        return view($this->viewFolderPath . 'index', compact('allSupports'));
    }

    public function create(): View
    {

        return view($this->viewFolderPath . '/create');
    }

    public function store(StoreUpdateSupportRequest $formRequest): RedirectResponse
    {
        $this->service->store(
            StoreSupportDTO::makeFromRequest($formRequest)
        );

        return redirect()->route('support.index');
    }

    public function show(string $id): View | RedirectResponse
    {

        // $supportFound = Support::where('id' , $id)->first();
        if(!$supportFound = $this->service->find($id)){
            return back();
        }

        return view($this->viewFolderPath . 'show', compact('supportFound'));
    }

    public function edit(string $id): View | RedirectResponse
    {
        if(!$supportFound = $this->service->find($id)){
            return back();
        }

        return view($this->viewFolderPath . 'edit', compact('supportFound'));
    }

    public function update(StoreUpdateSupportRequest $formRequest, string $id):stdClass|RedirectResponse{

        //funciona para store e update

        // $supportFound->subject = $formRequest->subject;

        // $supportFound->body = $formRequest->body;

        // $supportFound->save();

        $this->service->update(
           UpdateSupportDTO::makeFromRequest($formRequest)
        );

        return redirect()->route('support.index');

    }

    public function destroy(Request $request):RedirectResponse{

        $this->service->destroy($request->id);

        return redirect()->route('support.index');
    }
}

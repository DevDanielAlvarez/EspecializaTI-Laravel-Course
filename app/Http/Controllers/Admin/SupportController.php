<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    protected string $viewDiretoryPath = "admin/support/";
    /**
     * return all supports
     */
    public function index(Support $supportModel):View{

        $allSupports = $supportModel->all();

        return view($this->viewDiretoryPath.'index', compact('allSupports'));

    }

    public function create(){

        return view($this->viewDiretoryPath.'/create');

    }

    public function store(Request $formRequest, Support $supportModel){

        $dataRequest = $formRequest->all();

        $supportModel->create($dataRequest);

        return redirect()->route('support.index');


    }
}

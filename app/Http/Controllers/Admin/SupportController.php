<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    protected string $viewPath = "admin/support/";
    /**
     * return all supports
     */
    public function index(Support $supportModel):View{

        $allSupports = $supportModel->all();

        return view($this->viewPath.'index', compact('allSupports'));

    }
}

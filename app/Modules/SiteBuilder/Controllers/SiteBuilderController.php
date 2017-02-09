<?php

namespace SiteBuilder\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Facades\Admin;
use App\Facades\Theme;

class SiteBuilderController extends Controller
{
    /**
     * @return view
     */
    public function index()
    {
        return;
    }

    /**
     * @return view
     */
    public function build(Request $request)
    {
        $node = new Collection();
        $continue = $request->get('continue');

        return view('SiteBuilder::builder.form', compact('node', 'continue'));
    }

    /**
     *
     */
    public function store(Request $request)
    {
        return;
    }
}

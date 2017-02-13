<?php

namespace Qsoftvn\SiteBuilder\Http\Controllers;

use App\Modules\ContentManager\Models\Themes;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use SiteBuilder;

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
        $themes = Themes::all();
        $continue = $request->get('continue');

        return view('SiteBuilder::builder.form', compact('node', 'continue', 'themes'));
    }

    /**
     *
     */
    public function store(Request $request)
    {
        $continue = $request->get('continue', 1);
        $database = array(
            'name' => 'sitebuilder',
            'username' => 'hoangdv',
            'host' => 'http://localhost'
        );
        $ftp = array(
            'host' => 'http://localhost',
            'username' => 'hoangdv',
            'password' => 'Hoangdv'
        );
        SiteBuilder::setDatabaseData($database);
        SiteBuilder::setFtpData($ftp);
        $steps = SiteBuilder::getSteps();
        dd($steps);
        return;
    }
}

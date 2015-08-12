<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Routing\Controller;

/**
 * User Spoken Languages database migration
 *
 * @category
 * @package    SIB\Database\Migrations
 * @author     thanhhb
 * @copyright  NetBeans
 * @license    Commercial
 * @version    4.0
 * @link       choicaulong.com
 * @since      Class available since Release 1.0
 */

class DashboardController extends Controller
{

    public function show()
    {
        $data = [];

        return view('backend.dashboard.index', $data);
    }
}
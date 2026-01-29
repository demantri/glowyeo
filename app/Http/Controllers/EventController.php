<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index()
    {
        $portfolio = DB::table('events')
            ->where('is_active', true)
            ->get();

        $clients = DB::table('client_events')
            ->where('is_active', true)
            ->get();

        $settings = DB::table('website_settings')->first();

        $services = ServiceCategory::with(['items' => function ($q) {
            $q->where('is_active', true)
                ->orderBy('order');
        }])
            ->where('is_active', true)
            ->orderBy('order')
            ->get();

        $about = AboutUs::with(['missions' => function ($q) {
            $q->orderBy('position');
        }])->first();

        $whyChoose = WhyChooseUs::with(['items' => function ($q) {
            $q->orderBy('position');
        }])->first();

        return view('new_index', compact(
            'portfolio',
            'clients',
            'settings',
            'services',
            'about',
            'whyChoose',
        ));
    }
}

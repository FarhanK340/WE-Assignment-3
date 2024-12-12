<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Contact;
use Illuminate\Http\Request;

class ZooController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $user = auth()->user();

        if ($user->isadmin) {
            // Fetch all services for admin view
            $services = Service::all();
            return view('pages.services-admin', compact('services'));
        }

        // Fetch all services for regular user view
        $services = Service::all();
        return view('pages.services', compact('services'));
    }

    public function addService(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        // Create a new service
        Service::create($request->only('name', 'price'));

        return redirect()->route('services')->with('success', 'Service added successfully!');
    }

    public function deleteService($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('services')->with('success', 'Service deleted successfully!');
    }

    public function animals()
    {
        return view('pages.animals');
    }
}

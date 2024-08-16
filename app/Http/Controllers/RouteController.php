<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index(Request $request)
    {
        $routes = Route::all();

        $tripLocations = $routes->map(function ($route) {
            return [
                'origin' => $route->origin,
                'destination' => $route->destination,
                'position' => $route->position,
                'road_trip_activities' => $route->road_trip_activities,
                'start_date' => $route->start_date,
                'end_date' => $route->end_date,
            ];
        });

        $sortCriteria = $request->get('sortCriteria');

        $sortedTrips = $this->sortTrips($tripLocations, $sortCriteria);

        return view("home.index", ["tripLocations" => $sortedTrips]);
    }

    private function sortTrips($tripLocations, $sortCriteria)
    {
        switch ($sortCriteria) {
            case 'distance':
                return $tripLocations->sortBy('distance');
            case 'duration':
                return $tripLocations->sortBy('duration');
            case 'gallons':
                return $tripLocations->sortBy('gallons');
            case 'start_date':
                return $tripLocations->sortBy('start_date');
            case 'end_date':
                return $tripLocations->sortBy('end_date');
            default:
                return $tripLocations;
        }
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'origin' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'road_trip_activities' => 'required|string|max:255',
            'start_date' => 'required|string|max:255',
            'end_date' => 'required|string|max:255',
        ]);

        $route = new Route();
        $route->origin = $validated['origin'];
        $route->destination = $validated['destination'];
        $route->road_trip_activities = $validated['road_trip_activities'];
        $route->start_date = $validated['start_date'];
        $route->end_date = $validated['end_date'];
        $route->save();

        return redirect()->back()->with('success', 'Route saved successfully!');
    }

    public function updateOrder(Request $request)
    {
        $order = $request->input('order');

        foreach ($order as $item) {
            Route::where('id', $item['id'])->update(['position' => $item['position']]);
        }

        return response()->json(['success' => true]);
    }

    public function destroy($id)
    {
        $route = Route::find($id);
        if ($route) {
            $route->delete();
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => 'Trip not found']);
        }
    }

}

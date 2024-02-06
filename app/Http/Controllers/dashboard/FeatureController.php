<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\FeaturesData;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class FeatureController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $data['features'] = Feature::where('user_id', $user_id ?? '')->first();
        $data['features_data'] = FeaturesData::where('features_id', $data['features']->id ?? '')->get();
        return view('content.dashboard.featureData.featureDataPage', $data);
    }

    public function createFeature(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'first_description_features' => 'required|string',
            'second_description_features' => 'required|string',
            'tertiary_description_features' => 'required|string',
        ]);

        $user_id = Auth::id();
        $featuresdata = Feature::updateOrCreate([
            'user_id' => $user_id,
        ], [
            'title' => $data['title'],
            'main_description' => $data['first_description_features'],
            'secondary_description' => $data['second_description_features'],
            'tertiary_description' => $data['tertiary_description_features'],
        ]);
        return response()->json(['message' => 'Data created successfully']);
    }

    public function createFeaturesData(Request $request)
    {

        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user_id = Auth::id();
        $feature_data = Feature::where('user_id', $user_id ?? '')
            ->first();
        $path = $data['image']->store('uploads/images/features', 'public');
        $feature =  FeaturesData::create([
            'features_id' => $feature_data->id,
            'title' => $data['title'],
            'description' => $data['description'],
            'image' => $path,

        ]);

        return response()->json(['message' => 'User save successfully', 'feature' => $feature]);
    }

    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'description_edit' => 'required|string',
            'title_edit' => 'required|string',
        ]);
        $feature =  FeaturesData::find($id);
        if (!$feature) {
            return response()->json(['message' => 'this not found'], 404);
        }
        if (isset($request->image_edit)) {
            $path = $request->image_edit->store('uploads/images/features', 'public');
            $feature->update([
                'title' => $validatedData['title_edit'],
                'description' => $validatedData['description_edit'],
                'image' => $path,
            ]);
        } else {
            $feature->update([
                'title' => $validatedData['title_edit'],
                'description' => $validatedData['description_edit'],
            ]);
        }

        return response()->json(['message' => 'feature updated successfully', 'feature' => $feature]);
    }



    public function destroy($id)
    {

        $feature = FeaturesData::find($id);
        if (!$feature) {
            return response()->json(['error' => 'Feature not found'], 404);
        }
        $feature->delete();
        return response()->json(['message' => 'Feature deleted successfully']);
    }
}

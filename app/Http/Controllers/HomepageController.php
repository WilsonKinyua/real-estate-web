<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\StorePropertyReviewRequest;
use App\Http\Requests\StorePropoertyInquiryRequest;
use App\Models\Blog;
use App\Models\OurPartner;
use App\Models\Property;
use App\Models\PropertyReview;
use App\Models\PropoertyInquiry;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class HomepageController extends Controller
{

    public function index()
    {
        $properties = Property::with(['type', 'tags', 'amenities', 'created_by', 'media'])->orderBy('id', 'asc')->limit(6)->get();
        $properties_all = Property::with(['type', 'tags', 'amenities', 'created_by', 'media'])->orderBy('id', 'asc')->get();
        $blogs = Blog::with(['created_by', 'media'])->orderBy('id', 'asc')->limit(3)->get();
        $ourPartners = OurPartner::with(['media'])->get();

        return view('welcome', compact('properties', 'properties_all', 'blogs', 'ourPartners'));
    }

    // single property
    public function property($id)
    {
        $property = Property::with(['type', 'tags', 'amenities', 'created_by', 'media'])->find($id);
        $propertyReviews = PropertyReview::where('property_id' ,'=',$id)->with(['property', 'created_by'])->orderBy('id', 'asc')->get();

        return view('property', compact('property', 'propertyReviews'));
    }
    // StorePropoertyInquiryRequest
    public function storeInquiry(StorePropoertyInquiryRequest $request)
    {
        $propoertyInquiry = PropoertyInquiry::create($request->all());

        return redirect()->back();
    }

    public function createPropertyReview(StorePropertyReviewRequest $request)
    {
        $propertyReview = PropertyReview::create($request->all());

        // foreach ($request->input('photos', []) as $file) {
        //     $propertyReview->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('photos');
        // }

        // if ($media = $request->input('ck-media', false)) {
        //     Media::whereIn('id', $media)->update(['model_id' => $propertyReview->id]);
        // }

        return redirect()->back();
    }
}

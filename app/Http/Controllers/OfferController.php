<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;
use Illuminate\Support\Facades\Validator;

class OfferController extends Controller
{
    //
    function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'street' => 'required',
            'house_number' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'task_description' => 'required'
        ], ['required' => ':attribute is een verplicht veld.'],
        ['firstname' => 'Voornaam',
            'lastname' => 'Achternaam',
            'street' => 'Adres',
            'house_number' => 'Huisnummer',
            'street_addition' => 'Toevoeging',
            'city' => 'Stad',
            'zip_code' => 'Postcode',
            'email' => 'E-mail',
            'phone_number' => 'Telefoon',
            'task_description' => 'Beschrijving']);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'payload' => '',
                'errors' => $validator->messages()], 200);
        }

        $offer = Offer::create($request->all());

        return response()->json([
            'success' => true,
            'payload' => $offer
        ], 200);

    }
    function index()
    {
        $offers = Offer::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.offer.offers', ['offers' => $offers]);
    }

    function show($offer_id) {
        $offer = Offer::where('offer_id', $offer_id)->first();
        return view('admin.offer.offer-detail', ['offer'=>$offer]);
    }

    function create(){
        return view('admin.offer.offer-create', []);
    }

    function edit($offer_id) {
        $offer = Offer::where('offer_id', $offer_id)->first();
        return view('admin.offer.offer-edit', ['offer'=>$offer]);
    }

    function destroy($offer_id) {
        $offer = Offer::where('offer_id', $offer_id)->first();
        Offer::destroy($offer_id);
        return response()->json([
            'success' => true,
            'payload' => $offer
        ], 200);
    }

    function update(Request $request) {

        $old = $request->all();

        $offer = Offer::where('offer_id', $old['offer_id'])->first();

        $validator = Validator::make($old, [
            'firstname' => 'required',
            'lastname' => 'required',
            'street' => 'required',
            'house_number' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'task_description' => 'required'
        ], ['required' => ':attribute is een verplicht veld.'],
        ['firstname' => 'Voornaam',
            'lastname' => 'Achternaam',
            'street' => 'Adres',
            'house_number' => 'Huisnummer',
            'street_addition' => 'Toevoeging',
            'city' => 'Stad',
            'zip_code' => 'Postcode',
            'email' => 'E-mail',
            'phone_number' => 'Telefoon',
            'task_description' => 'Beschrijving']);



               if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'payload' => '',
                'errors' => $validator->messages()], 200);
        }
        $offer->firstname = $old['firstname'];
        $offer->lastname = $old['lastname'];
        $offer->street = $old['street'];
        $offer->house_number = $old['house_number'];
        $offer->street_addition = $old['street_addition'];
        $offer->city = $old['city'];
        $offer->zip_code = $old['zip_code'];
        $offer->email = $old['email'];
        $offer->phone_number = $old['phone_number'];
        $offer->task_description = $old['task_description'];
        $offer->save();

        return response()->json([
            'success' => true,
            'payload' => $offer
        ], 200);
    }
}
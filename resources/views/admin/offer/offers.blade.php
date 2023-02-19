@extends('admin.layouts.layout')
@section('javascript')
@endsection
@section('content')
    <div class="container">
        <p>
        <h1>Offertes</h1>
        </p>
    </div>
    <div id="offer-master" class="container">
        <a href="/admin/offers/create" class="btn btn-success">Nieuwe offerte</a>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Datum</th>
                    <th scope="col">Klant</th>
                    <th scope="col">Adres</th>
                    <th scope="col">Contact</th>
                    <th>Beschrijving</th>
                    <th scope="col">Laatst Geupdate</th>
                    <th>Acties</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($offers as $offer)
                    @php
                        $d = strtotime($offer->created_at);
                        $date = date('d-m-Y', $d);
                        $time = date('h:i:sa', $d);
                    @endphp
                    <tr>
                        <td>{{ $date }} <br /> {{ $time }}</td>
                        <td>{{ $offer->firstname }} {{ $offer->lastname }}</td>
                        <td>{{ $offer->street }} {{ $offer->house_number }} {{ $offer->street_addition }} <br />
                            {{ $offer->zip_code }} {{ $offer->city }}
                        </td>
                        <td>{{ $offer->email }} <br /> {{ $offer->phone_number }}</td>
                        <td><a href='/admin/offers/{{ $offer->offer_id }}'>{{ $offer->task_description }}</a></td>
                        <td>{{ $offer->updated_at }}</td>
                        <td>
                            <a href="/admin/offers/{{ $offer->offer_id }}/edit" class="btn btn-primary">Wijzig</a>
                            <button class="btn btn-danger" data-rk-action="DELETE_OFFER"
                                data-rk-offer-id="{{ $offer->offer_id }}">Verwijderen</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container">
        {{ $offers->links('pagination::bootstrap-4') }}
    </div>
@endsection

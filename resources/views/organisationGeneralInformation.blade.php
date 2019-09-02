@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h2 class="text-default mb-4 h3">Organization</h2>
                <ul class="nav nav-tabs tabs-design">
                    <li class="nav-item">
                        <a class="nav-link  active" href="{{route('organisations.general.information')}}">General Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('organisations.locations')}}">Locations</a>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <p>Offering diversified Travel Solutions to its esteemed customers all across the world, We embarked on our journey in 2009 and FORB came into existence in 2015 with a vision to be the India’s leading Travel Company and today we are serving in more than 50 cities of India. Forb aimed to provide a variety of premium travel product at ultimate worth with customized services to form you Travel with Pleasure, in conjunction with dedicated nonstop travel support. Our trips carry people from all around the world and from all walks of life. <br><br>

                            All of our journeys square measure designed to form lingering ‘WoW’ moments. From our Destination Managers, Crafting Itineraries that introduce you to really distinctive Folks and Places, supply the native information and skill to urge you behind the scenes of a destination - nothing pre-packaged or artificial, simply distinctive, authentic insights into native lives.<br><br>

                            We promise you’ll expertise lingering accommodation, hospitable communities, legendary locals and far a lot of. So once you opt to travel on a Forb journey, you'll be assured that you will get to explore the simplest of the planet on the far side Amazing and <b>Beyond Awesome!!!!!!</b> <br><br>

                            On the opposite hand, we all know there are heaps to urge union before your trip: Accommodation, Visas, Passports, Flights, Travel Insurance, Transfers and rubber-necking. As a full service supplier, we’ve created it our mission to help you with everything. At Forb we try to live by a simple motto:

                        </p><hr>
                        <h2 style="font-family:'freestyle script';color:#b48429;" class="h1">Travel with Pleasure</h2>
                        <h4 class="text-left text-uppercase"><b>Forbcorp</b></h4>
                        <p>offers diversified Travel Solutions to its esteemed customers all across the world through their following routes.</p>
                        <br>
                        <h4 class="text-left"><b>FORB TOURS</b></h4>
                        <p>Customized Holiday Packages, Group Tours, Corporate Incentive Tours, Cruise Affairs, Student Educational Series, Exotic Escapes, Hotels, Flights, Bus, Travel Insurance, Visas, Sightseeing, Transfers, Euro Rail, Europcar, Travel Assistance</p><br>
                        <h4 class="text-left"><b>FORB CLUB</b></h4>
                        <p>Leisureship Plan for Luxury and Royal Vacations</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
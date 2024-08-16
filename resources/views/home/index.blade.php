<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tespire Trip Planner</title>
    @include("includes.home_css")
</head>

<body class="main-layout">
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('assets/images/loading.gif') }}" alt="#" /></div>
    </div>
    @include("includes.home_header")
    <section>
        <div class="banner-main">
            <img src="{{ asset('assets/images/banner.jpg') }}" alt="#" />
            <div class="container">
                <div class="text-bg">
                    <h1 class="titol">NIGERIA<br><strong class="white">TRIP PLANNER</strong></h1>
                    <div class="container mainForm">
                        <form action="{{ route('route.store') }}" method="POST" class="main-form tripform">
                            @csrf
                            <h3>Enter Your Trip</h3>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <label>Trip Origin</label>
                                            <input type="text" name="origin" id="from"
                                                placeholder="Abuja, Nigeria" class="form-control">
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <label>Trip Destination</label>
                                            <input type="text" name="destination" id="to"
                                                placeholder="Lagos, Nigeria" class="form-control">
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <label>Activities</label>
                                            <select class="form-control" name="road_trip_activities"
                                                id="road_trip_activities">
                                                <option value="take_photos">Take Photos of Scenic Views</option>
                                                <option value="stop_at_landmarks">Stop at Famous Landmarks</option>
                                                <option value="visit_local_eateries">Visit Local Eateries</option>
                                                <option value="try_local_snacks">Try Local Snacks</option>
                                                <option value="record_vlogs">Record Vlogs or Travel Diaries</option>
                                                <option value="visit_museums">Visit Museums or Historical Sites</option>
                                                <option value="take_a_hike">Take a Hike in Nature</option>
                                                <option value="go_souvenir_shopping">Go Souvenir Shopping</option>
                                                <option value="explore_hidden_gems">Explore Hidden Gems or
                                                    Off-the-Beaten-Path Locations</option>
                                                <option value="camping">Camping Overnight</option>
                                                <option value="enjoy_local_festivals">Enjoy Local Festivals or Events
                                                </option>
                                                <option value="stargaze">Stargaze at Night</option>
                                                <option value="visit_national_parks">Visit National Parks</option>
                                                <option value="picnic">Have a Picnic in a Scenic Spot</option>
                                                <option value="explore_food_trucks">Explore Food Trucks</option>
                                            </select>
                                        </div>

                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <label>Start Date</label>
                                            <input type="date" name="start_date" placeholder="Any"
                                                class="form-control">

                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <label>End Date</label>
                                            <input type="date" name="end_date" placeholder="Any"
                                            class="form-control">
                                            
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <label>End Date</label>
                                            <button type="submit" id="submitButton"
                                                class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="travel" class="traveling" style="margin-bottom: 50px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Select Offers For Traveling</h2>
                        <h3 id="total-duration"></h3>
                        <h3 id="total-distance"></h3>
                        <h3 id="total-gallons"></h3>
                    </div>
                
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12" style="margin-bottom: 300px" id="trip-info">
                    <h1 style="text-align: center">Trip Details</h1>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 20px">
                        <label><strong>Filter Trips By Choosen Metrics</strong></label>
                      
                        <form id="sortForm" method="GET" action="{{ route('app.home') }}">
                            @csrf
                            <select name="sortCriteria" class="form-control" id="sortCriteria" onchange="document.getElementById('sortForm').submit();">
                                <option value="" disabled selected>Select Sort Criteria</option>
                                <option value="distance">Distance</option>
                                <option value="duration">Duration</option>
                                <option value="gallons">Gallons Consumed</option>
                                <option value="start_date">Start Date</option>
                                <option value="end_date">End Date</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="traveling-box" style="width: 100%; height: 100px">
                            <ul id="trip-list"></ul>
                            <div id="totals"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12" id="map"></div>

            </div>
        </div>
    </div>

    <div id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="titlepage">
                        <h2>About our Trip Planner</h2>
                        <span>Welcome to our Trip Planner website, where we make your travel dreams come to life with ease and efficiency. Our platform is designed to be your one-stop solution for organizing and managing all aspects of your trips, whether you're planning a weekend getaway, a cross-country road trip, or an international vacation.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="about-box">
                            <p> <span> Here, we combine the latest technology with a user-friendly interface to help you create unforgettable travel experiences. In this description, we will explore the key features of our website, how it benefits travelers, and the innovative tools we offer to enhance your journey planning. <br> Our Trip Planner website provides a comprehensive set of tools that cater to all your travel needs. From creating detailed itineraries to finding accommodations and managing activities, our platform covers every aspect of trip planning. Users can input various trip details, including destinations, dates, activities, and travel preferences, to generate a tailored plan that suits their individual needs. This holistic approach ensures that every detail is accounted for, allowing travelers to focus on enjoying their trip rather than stressing over logistics
                            </span></p>
                            <div class="palne-img-area">
                                <img src="{{ asset('assets/images/plane-img.png') }}" alt="images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a>Read More</a>
        </div>
    </div>
    <div class="Tours">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>The Best Platform</h2>
                        <span> With real-time updates and route optimization, users can easily see the best routes, estimate travel times, and explore nearby attractions</span>
                    </div>
                </div>
            </div>
            <section id="demos">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <img class="img-responsive" src="{{ asset('assets/images/1.jpg') }}"
                                    alt="#" />
                                <h3>Holiday Tour</h3>
                                <p>The map integration also supports markers for points of interest, such as restaurants, hotels, and landmarks, making it easier to plan your itinerary around these key locations.</p>
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="{{ asset('assets/images/2.jpg') }}"
                                    alt="#" />
                                <h3>New York</h3>
                                <p>Creating a personalized itinerary has never been easier. Our website offers a robust itinerary builder that allows users to customize their trip schedule according to their preferences. </p>
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="{{ asset('assets/images/3.jpg') }}"
                                    alt="#" />
                                <h3>London</h3>
                                <p>Accurate weather and travel information are crucial for a successful trip. Our Trip Planner website provides real-time weather updates and travel conditions to help users make informed decisions.</p>
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="{{ asset('assets/images/2.jpg') }}"
                                    alt="#" />
                                <h3>Holiday Tour</h3>
                                <p>Finding the perfect place to stay and exciting activities to do is an integral part of trip planning. Our website offers a seamless booking experience for accommodations and activities.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
   @include("includes.home_footer")
    @include("includes.home_scripts")
    
    <script>
        const tripLocations = @json($tripLocations);
    </script>
    <script src="{{ asset("assets/js/main.js") }}"></script>





</body>

</html>

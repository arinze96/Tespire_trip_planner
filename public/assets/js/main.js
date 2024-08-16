
        const fuelEfficiency = 25; // Average fuel efficiency in miles per gallon

        let map;
        let directionsService;

        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                zoom: 6,
                center: {
                    lat: 9.0820,
                    lng: 8.6753
                }, // Centered around Spain
            });

            directionsService = new google.maps.DirectionsService();

            calculateAndDisplayRoutes();
        }

        function calculateAndDisplayRoutes() {
            let totalDuration = 0;
            let totalDistance = 0;
            let totalGallons = 0;

            const tripList = document.getElementById("trip-list");
            tripList.innerHTML = "";

            // Iterate through the tripLocations array to create routes
            tripLocations.forEach((trip, index) => {
                const directionsRenderer = new google.maps
            .DirectionsRenderer(); // Create a new renderer for each trip
                directionsRenderer.setMap(map);

                directionsService.route({
                    origin: trip.origin,
                    destination: trip.destination,
                    travelMode: google.maps.TravelMode.DRIVING
                }, (response, status) => {
                    if (status === google.maps.DirectionsStatus.OK) {
                        const route = response.routes[0];
                        const legs = route.legs;

                        // Calculate and display each leg of the route
                        legs.forEach((leg) => {
                            const duration = leg.duration.value / 60; // Convert to minutes
                            const distance = leg.distance.value / 1000; // Convert to kilometers
                            const gallons = distance / fuelEfficiency; // Calculate gallons

                            totalDuration += duration;
                            totalDistance += distance;
                            totalGallons += gallons;

                            // Add route info to the list
                            const listItem = document.createElement("li");
                            listItem.innerHTML = `
                                <div class="traveling-box"
                                    style="border: 1px solid #000; width: 100%; height: auto; border-radius: 10px; overflow: hidden; color: white; padding: 20px;">
                                    <!-- First Column -->
                                    <div style="width: 50%; float: left; text-align: left; padding: 10px;">
                                        <p id="tripData"><i class="fas fa-map-marker-alt"></i> <strong>From:</strong> ${leg.start_address}</p>
                                        <p id="tripData"><i class="fas fa-map-marker-alt"></i> <strong>To:</strong> ${leg.end_address}</p>
                                        <p id="tripData"><i class="fas fa-clock"></i> <strong>Duration:</strong> ${duration.toFixed(2)} minutes</p>
                                        </div>
                                        <!-- Second Column -->
                                        <div style="width: 50%; float: left; text-align: left; padding: 10px;">
                                            <p id="tripData"><i class="fas fa-road"></i> <strong>Distance:</strong> ${distance.toFixed(2)} km</p>
                                            <p id="tripData"><i class="fas fa-gas-pump"></i> <strong>Gallons Consumed:</strong> ${gallons.toFixed(2)}</p>
                                            <p id="tripData"><i class="fas fa-calendar-alt"></i> <strong>Trip Date:</strong> ${trip.start_date}</p>
                                    </div>
                                </div>`;
                            tripList.appendChild(listItem);
                        });

                        // Render the route on the map
                        directionsRenderer.setDirections(response);

                        // Place a marker at the origin of the trip
                        new google.maps.Marker({
                            position: {
                                lat: legs[0].start_location.lat(),
                                lng: legs[0].start_location.lng()
                            },
                            map: map,
                            title: `Start: ${legs[0].start_address} (Trip ${index + 1})`
                        });

                        // After processing the last trip, update the totals
                        if (index === tripLocations.length - 1) {
                            document.getElementById("total-duration").textContent =
                                `Total Duration: ${totalDuration.toFixed(2)} minutes`;
                            document.getElementById("total-distance").textContent =
                                `Total Distance: ${totalDistance.toFixed(2)} km`;
                            document.getElementById("total-gallons").textContent =
                                `Total Gallons Consumed: ${totalGallons.toFixed(2)}`;
                        }
                    } else {
                        window.alert("Directions request failed due to " + status);
                    }
                });
            });
        }

        var input1 = document.getElementById("from");
        var autocomplete1 = new google.maps.places.Autocomplete(input1, options);

        var input2 = document.getElementById("to");
        var autocomplete2 = new google.maps.places.Autocomplete(input2, options);
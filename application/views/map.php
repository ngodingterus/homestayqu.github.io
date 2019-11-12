<!-- ========== LOCATION START ========== -->
<section id="location">

    <!-- Google Map Script -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoRMxiPsqJ9SUuaK1KsCAjd3gqnecjlBw&amp;sensor=false"></script>
    <script type="text/javascript">

        function initialize() {

            // Create an array of styles.
            var styles = [
                {
                "stylers": [
                    { "saturation": -100 },
                    { "gamma": 1 }
                ]
                },{
                    "featureType": "water",
                    "stylers": [
                        { "lightness": -12 }
                    ]
                }
            ];

            // Create a new StyledMapType object, passing it the array of styles,
            // as well as the name to be displayed on the map type control.
            var styledMap = new google.maps.StyledMapType(styles,
            {name: "Styled Map"});

            var mapOptions = {
                scrollwheel: false,
                zoom: 12,
                center: new google.maps.LatLng(23.135165, -82.369966),
                mapTypeControlOptions: {
                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
                }
            }
            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

            //Associate the styled map with the MapTypeId and set it to display.
            map.mapTypes.set('map_style', styledMap);
            map.setMapTypeId('map_style');

            setMarkers(map, places);
        }

        var places = [
            ['Wedding<br>Street Name 1<br>Havana, Cuba', 23.129719, -82.396831, 1],
            ['Bachelor Party<br>Street Name 2<br>Havana, Cuba', 23.135165, -82.369966, 1],
            ['Bachelorette Party<br>Street Name 3<br>Havana, Cuba', 23.118747, -82.432537, 1]
        ];

        function setMarkers(map, locations) {
            // Add markers to the map
            var image = {
                url: 'images/map-marker.png',
                // This marker is 40 pixels wide by 42 pixels tall.
                size: new google.maps.Size(62, 58),
                // The origin for this image is 0,0.
                origin: new google.maps.Point(0,0),
                // The anchor for this image is the base of the pin at 20,42.
                anchor: new google.maps.Point(20, 58)
            };

            var infowindow = new google.maps.InfoWindow();

            var marker, i;
            var markers = new Array();

            for (var i = 0; i < locations.length; i++) {
                var place = locations[i];
                var myLatLng = new google.maps.LatLng(place[1], place[2], place[3]);
                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    icon: image,
                    title: place[0],
                    zIndex: place[3],
                    animation: google.maps.Animation.DROP
                });

                markers.push(marker);

                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infowindow.setContent(locations[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <div id="map-canvas"></div>
    <!--<script type="text/javascript">
        function AutoCenter() {
            //  Create a new viewpoint bound
            var bounds = new google.maps.LatLngBounds();
            //  Go through each...
            $.each(markers, function (index, marker) {
                bounds.extend(marker.position);
            });
            //  Fit these bounds to the map
            map.fitBounds(bounds);
        }
        AutoCenter();
    </script> --> 
    <!-- ========== LOCATION END ========== -->

    
			<!-- ========== RSVP START ========== -->

			<div id="rsvp" class="text-center" data-scroll-reveal>
				<div class="heading">
					<h2>RSVP</h2>
					<p><span></span><i class="fa fa-heart"></i><span></span></p>
				</div>
				<form role="form" name="contactform" action="http://coffeecreamthemes.com/themes/perfectcouple/site/demo1-full/process.php">
					<div class="row">
						<div id="name-group" class="form-group col-xs-12">
							<label for="inputName">Name</label>
							<input type="text" class="form-control" id="inputName" name="inputName" placeholder="John Doe">
						</div>
					</div>
					<div class="row">
						<div id="email-group" class="form-group col-xs-12">
							<label for="inputEmail">Email</label>
							<input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="name@domain.com">
						</div>
					</div>
					<div class="row">
						<div id="guests-group" class="form-group col-xs-6">
							<label for="selectGuests">Guests</label>
							<select class="form-control" name="selectGuests" id="selectGuests">
								<option value="1" selected>1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
							</select>
						</div>
						<div id="attending-group" class="form-group col-xs-6">
							<label for="selectAttending">I am attending...</label>
							<select class="form-control" name="selectAttending" id="selectAttending">
								<option value="All Events" selected>All Events</option>
								<option value="Ceremony">Ceremony</option>
								<option value="Reception">Reception</option>
							</select>
						</div>
					</div>
					<div class="row">
						<button type="submit" class="btn btn-lg">I'm attending</button>
					</div>
				</form>
			</div>

			<!-- ========== RSVP END ========== -->

		</section>
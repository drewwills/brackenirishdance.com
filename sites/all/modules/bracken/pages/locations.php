<?php 
drupal_add_js('http://maps.googleapis.com/maps/api/js?key=AIzaSyD2B-4W3xwcajEwERyvdWzPPoqDUDl1Qi4&sensor=false');
drupal_set_title('Bracken Locations');
?>

<p>Bracken School of Irish Dance has two locations nationally:  <strong>Chardler, AZ</strong> and <strong>Salisbury, MA</strong>.</p>

<div id="locations">

	<!-- Chandler, AZ -->
	
	<div class="location">
	
		<div class="map-outer" style="float: right;">
		    <div id="map-chandler" style="width: 100%; height: 100%"></div>
		</div>
		
		<div class="address-outer">
			<h2>Chandler, Arizona Location</h2>
			<p>We are located in <strong>Jeanne's Dance School</strong> at the NW corner 
			of Alma School and Galveston in Chandler. We're an easy 2 miles east of the 
			101, 5 miles south of 60, and 2 miles north of the 202.</p>
			<h3>Address:</h3>
			<ul class="address">
				<li>610 N Alma School Rd</li>
				<li>Suite #2</li>
				<li>Waterfall Plaza</li>
				<li>Chandler, AZ 85224</li>
			</ul>
		</div>
	
	</div>
	
	<div class="clear"></div>
	
	<!-- Salisbury, MA -->
	
	<div class="location">
	
		<div class="map-outer" style="float: right;">
		    <div id="map-salisbury" style="width: 100%; height: 100%"></div>
		</div>
		
		<div class="address-outer">
			<h2>Salisbury, Massachusetts Location</h2>
			<p>We are located...</p>
			<h3>Address:</h3>
			<ul class="address">
				<li>102 Bridge Road</li>
				<li>Suite #14</li>
				<li>Salisbury, MA 01952</li>
			</ul>
		</div>
	
	</div>

</div>

<script type="text/javascript">
(function() {

	// Chandler
	var chandlerOptions = {
        center: new google.maps.LatLng(33.314863, -111.859587),
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var chandlerMap = new google.maps.Map(document.getElementById("map-chandler"), chandlerOptions);
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(33.314863, -111.859587),
        map: chandlerMap,
        title: "Jeanne's Dance School"
    });

	// Salisbury
	var salisburyOptions = {
        center: new google.maps.LatLng(42.827162,-70.866382),
        zoom: 13,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var salisburyMap = new google.maps.Map(document.getElementById("map-salisbury"), salisburyOptions);
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(42.827162,-70.866382),
        map: salisburyMap,
        title: "Bracken School of Irish Dance"
    });

})();
</script>

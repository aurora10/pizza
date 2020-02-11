<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pizza
 */

?>

<footer id="footer">
    <div class="center">
        <div class="footer-content">
            <p>2019 © Robert Zimerman </p>
        </div>
    </div>
</footer>
</div>
<script type='text/javascript'>
    // var wpcf7 = { "apiSettings": { "root": "https:\/\/demo.myherothemes.com\/vitos\/wp-json\/contact-form-7\/v1", "namespace": "contact-form-7\/v1" } };
</script>
<script type='text/javascript' src='https://maps.google.com/maps/api/js?key=AIzaSyD3rVzWhxb6EGiqAD9HSrKb22gTo2HTqoA&amp;ver=1.0'></script>
<script type='text/javascript'>
    function initialize() {
        var mapOptions = {
            zoom: 11,
            center: new google.maps.LatLng(40.730024, -74.077592),
            scrollwheel: false
        }
        var map = new google.maps.Map(document.getElementById('map_canvas'),
            mapOptions);

        setMarkers(map, places);
    }
    var places = [
        ["Place1", 40.730024, -74.077592, 1]
    ];

    function setMarkers(map, locations) {
        var shape = {
            coords: [1, 1, 1, 20, 18, 20, 18, 1],
            type: 'poly'
        };
        for (var i = 0; i < locations.length; i++) {
            var beach = locations[i];
            var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                shape: shape,
                title: beach[0],
                zIndex: beach[3]
            });
        }
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
</div>
<!--<script type="text/javascript" src="script.js"></script>-->

<?php wp_footer(); ?>

</body>
</html>

<?php template('layout/header', $temp_data); ?>
<div id="mid-section">
    <div
        id="contact-wrapper"
        class="content-wrapper generic-content highlight-section main-section">
        <h1 class="heading-1">Kontakt</h1>
        <p>Skriv til os, hvis du har spørgsmål eller andet på hjerte :)</p>
        <form method="POST">
            <div><input
                type="text"
                name="name"
                placeholder="Navn"></div>
            
            <div><input
                type="email"
                name="email"
                placeholder="Email"></div>
                
            <div><input
                type="text"
                name="phone"
                placeholder="Telefonnummer (valgfrit)"></div>
            
            <div><textarea name="message" placeholder="Besked:"></textarea></div>
            
            <div><input type="submit" value="Send Besked"></div>
        </form>
    </div>
</div>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
<div class="google-map" style='overflow:hidden;'><div id='gmap_canvas' class="google-map"></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small><a href="http://www.autohuren.world/">autohuren</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(56.1429915,10.23227339999994),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(56.1429915,10.23227339999994)});infowindow = new google.maps.InfoWindow({content:'<strong>Kajakklubben Pagaj</strong><br>Aarhus Havn, Aarhus Denmark<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
<?php template('layout/footer'); ?>
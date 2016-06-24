<?php template('layout/header', $temp_data); ?>
<div id="mid-section">
    <div
        id ="my-page-wrapper"
        class="content-wrapper main-section generic-content highlight-section">
        <h1 class="heading-1">Min side</h1>
        <img
            id="my-page-profile-image"
            src="<?= SRC_APP . 'profile_placeholder.jpg'?>"
            alt="Profile Thumbnail">
        <dl>
            <dt class="my-page">Navn:</dt>
            <dd class="my-page">Lorentz Ibson</dd>
            
            <dt class="my-page">Email:</dt>
            <dd class="my-page"><a href="mailto:something@something.dk">something@something.dk</a></dd>
            
            <dt class="my-page">Mobil:</dt>
            <dd class="my-page"><a href="tel:22222222">22 22 22 22</a></dd>
            
            <dt class="my-page">Færdighedsniveau:</dt>
            <dd class="my-page">Begynder</dd>
            
            <dt class="my-page">Roede kilometre:</dt>
            <dd class="my-page seperator">42 km</dd>
            
            <dt class="my-page">Tilmeldt:</dt>
            <dd class="my-page">Kajaktur 15-06-2016</dd>
            <dd class="my-page">Kajaktur 15-06-2016</dd>
        </dl>
    </div>
</div>
<?php template('layout/footer'); ?>
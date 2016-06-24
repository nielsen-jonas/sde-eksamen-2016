<?php template('layout/header', $temp_data); ?>
<div id="mid-section">
    <div class="content-wrapper generic-content">
        <h1 class="heading-1">Arrangementer</h1>
        <ul>
            <li class="generic-content highlight-section arrangement-item">
                <img
                    src="<?= SRC_IMG . 'kajak04.jpg' ?>"
                    alt="Sommerafslutning">
                <h2 class="heading-2">Sommerafslutning</h1>
                <p>30. juni - 2020</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel augue diam.
                    Sed ut justo ac metus congue vehicula. Aenean vitae aliquet urna. Morbi at scelerisque eros.
                    Cras libero dui, lobortis at maximus in, congue et ligula. Sed interdum cursus mattis.
                    Nam faucibus sem justo. Quisque in massa sed risus posuere lacinia.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <div class="arrangement-button-container">
                    <a
                        href="#"
                        class="accent-secondary arrangement-button">Tilmeld</a>
                </div>
            </li>
            <li class="generic-content highlight-section arrangement-item">
                <img
                    src="<?= SRC_IMG . 'kajak05.jpg' ?>"
                    alt="Familiesejlads i sommerferien">
                <h2 class="heading-2">Familiesejlads i sommerferien</h1>
                <p>9. juli - 2020</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel augue diam.
                    Sed ut justo ac metus congue vehicula. Aenean vitae aliquet urna. Morbi at scelerisque eros.
                    Cras libero dui, lobortis at maximus in, congue et ligula. Sed interdum cursus mattis.
                    Nam faucibus sem justo. Quisque in massa sed risus posuere lacinia.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <div class="arrangement-button-container">
                    <a
                        href="#"
                        class="accent-secondary arrangement-button">Tilmeld</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<?php template('layout/footer'); ?>
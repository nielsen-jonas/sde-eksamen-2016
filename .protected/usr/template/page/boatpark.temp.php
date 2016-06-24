<?php template('layout/header', $temp_data); ?>
<div id="mid-section">
    <div class="content-wrapper generic-content">
        <h1 class="heading-1">Bådpark</h1>
        <table class="highlight-section">
            <thead>
                <tr>
                    <th>Type:</th>
                    <th>Sværhedsgrad:</th>
                    <th colspan="2">Antal:</th>
                    <th>Til Salg:</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col" colspan="5">Havkajakker</th>
                </tr>
                <tr>
                    <td>Hasle Explorer med finne (K1)</td>
                    <td></td>
                    <td>2 stk.</td>
                    <td><img
                            src="<?= SRC_IMG . 'kajak20.jpg' ?>"
                            alt="Kajak"
                            class="boatpark-image"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Hasle Explorer med ror (K1)</td>
                    <td></td>
                    <td>1 stk.</td>
                    <td><img
                            src="<?= SRC_IMG . 'kajak21.jpg' ?>"
                            alt="Kajak"
                            class="boatpark-image"></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="col" colspan="5">Turkajakker</th>
                </tr>
                <tr>
                    <td>Seabird (K1)</td>
                    <td>11</td>
                    <td>1 stk.</td>
                    <td><img
                            src="<?= SRC_IMG . 'kajak22.jpg' ?>"
                            alt="Kajak"
                            class="boatpark-image"></td>
                    <td>1.500 DKK</td>
                </tr>
                <tr>
                    <td>Malik (K1)</td>
                    <td>11</td>
                    <td>2 stk.</td>
                    <td><img
                            src="<?= SRC_IMG . 'kajak23.jpg' ?>"
                            alt="Kajak"
                            class="boatpark-image"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Coastline (K1)</td>
                    <td>11</td>
                    <td>1 stk.</td>
                    <td><img
                            src="<?= SRC_IMG . 'kajak24.jpg' ?>"
                            alt="Kajak"
                            class="boatpark-image"></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="col" colspan="5">Kapkajakker</th>
                </tr>
                <tr>
                    <td>Tracer (K1)</td>
                    <td>7</td>
                    <td>2 stk.</td>
                    <td><img
                            src="<?= SRC_IMG . 'kajak25.jpg' ?>"
                            alt="Kajak"
                            class="boatpark-image"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Mosquito (K1)</td>
                    <td>1</td>
                    <td>1 stk.</td>
                    <td><img
                            src="<?= SRC_IMG . 'kajak26.jpg' ?>"
                            alt="Kajak"
                            class="boatpark-image"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Struer trækajakker (K2)  pt. ude af drift</td>
                    <td>1</td>
                    <td>2 stk.</td>
                    <td><img
                            src="<?= SRC_IMG . 'kajak27.jpg' ?>"
                            alt="Kajak"
                            class="boatpark-image"></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php template('layout/footer'); ?>
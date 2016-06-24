<?php template('layout/header', $temp_data); ?>
<div id="mid-section">
    <div class="content-wrapper generic-content highlight-section">
        <h1 class="heading-1">Bliv Medlem</h1>
        <p>
            Kunne du tænke dig at blive medlem af Kajakklubben Pagaj, hører vi gerne fra dig.
            For nærmere detaljer kan du skrive en mail til klubbens formand, Jens på: <a href="mailto:jens@sde.dk" class="generic-link">jens@sde.dk</a> eller kontakte os via vores <a href="<?= scr_url('page/contact') ?>" class="generic-link">kontaktformular</a>.
        </p>
        <h2 class="heading-2">Priser</h2>
        <table>
            <tr>
                <th
                    class="table-row-heading"
                    scope="row">
                    Årskontingent gældene fra 1. maj:</th>
                <td>900,-</td>
            </tr>
            <tr>
                <th
                    class="table-row-heading"
                    scope="row">
                    Begynderkursus (Obligatorisk, hvis ikke anden frigivelse haves):</th>
                <td>500,-</td>
            </tr>
        </table>
    </div>
</div>
<?php template('layout/footer'); ?>
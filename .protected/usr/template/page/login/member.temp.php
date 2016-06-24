<?php template('layout/header', $temp_data); ?>
<div id="mid-section">
    <div class="content-wrapper generic-content highlight-section">
        <h1 class="heading-1">Medlem Login</h1>
        <form method="POST">
            <div><input
                type="text"
                name="username"
                placeholder="Brugernavn"></div>
            
            <div><input
                type="password"
                name="password"
                placeholder="Adgangskode"></div>
                
            <div><input
                type="submit"
                value="Login"></div>
        </form>
    </div>
</div>
<?php template('layout/footer'); ?>
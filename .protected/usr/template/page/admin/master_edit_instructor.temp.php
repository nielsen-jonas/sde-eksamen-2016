<?php template('layout/header', $temp_data); ?>
<div id="mid-section">
    <div class="content-wrapper generic-content highlight-section">
    <h1 class="heading-1">Master Administration</h1>
    <h2 class="heading-2">Rediger Instruktør</h1>
        <form action="<?= WEBSITE_URL . '/update/instructor/' . $instructor['id'] ?>" method="POST">
    <fieldset>
        <legend>Instruktør ID: <?= $instructor['id'] ?></legend>
        
        <div><label for="name">Navn</label></div>
        <input type="text" id="name" name="name" value="<?= $instructor['name'] ?>" required>
        
        <div><label for="email">Email</label></div>
        <input type="email" id="email" name="email" value="<?= $instructor['email'] ?>" requried>
        
        <div><label for="phone">Phone</label></div>
        <input type="text" id="phone" name="phone" value="<?= $instructor['phone'] ?>" required>
        
        <div><label for="username">Brugernavn</label></div>
        <input type="text" id="username" name="username" value="<?= $instructor['username'] ?>" required>

        <div><label for="password">Password</label></div>
        <input type="password" id="password" name="password" value="<?= $instructor['password'] ?>">
        
        <div>
            <input type="submit" value="Gem ændringer">
        </div>
    </fieldset>
</form>
    </div>
</div>
<?php template('layout/footer'); ?>
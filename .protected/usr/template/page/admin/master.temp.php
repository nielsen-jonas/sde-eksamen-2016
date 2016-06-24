<?php template('layout/header', $temp_data); ?>
<div id="mid-section">
    <div class="content-wrapper generic-content highlight-section">
        <h1 class="heading-1">Master Administration</h1>
        <section>
            <h1 class="heading-2">Instruktøre</h1>
            <form action="<?= WEBSITE_URL . '/register/instructor'?>" method="POST">
                <fieldset>
                    <legend>Tilføj Instruktør</legend>
                        
                    <div><label for="name">Navn</label></div>
                    <input type="text" id="name" name="name" required>
                    
                    <div><label for="email">Email</label></div>
                    <input type="email" id="email" name="email" requried>
                    
                    <div><label for="phone">Phone</label></div>
                    <input type="text" id="phone" name="phone" required>
                    
                    <div><label for="username">Username</label></div>
                    <input type="text" id="username" name="username" required>
            
                    <div><label for="password">Password</label></div>
                    <input type="password" id="password" name="password" required>
                    
                    <div>
                        <input type="submit" value="Add">
                    </div>
                </fieldset>
            </form>
                
            <table>
                <caption>Instruktøre</caption>
                <colgroup>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">Navn</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefon</th>
                        <th scope="col">Brugernavn</th>
                        <th scope="col">Registrerings Dato</th>
                        <th colspan="2" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $out = '';
                    foreach ($instructor as $ins){
                        $out .= '<tr>' . "\n";
                        $out .= '<td>' . $ins['name']               . '</td>' . "\n";
                        $out .= '<td>' . $ins['email']              . '</td>' . "\n";
                        $out .= '<td>' . $ins['phone']              . '</td>' . "\n";
                        $out .= '<td>' . $ins['username']           . '</td>' . "\n";
                        $out .= '<td>' . $ins['date_registration']  . '</td>' . "\n";
                        $out .= '<td><a href="' . WEBSITE_URL . '/admin/master/instructor/' . ($ins['id']) . '">EDIT</a></td>' . "\n";
                        $out .= '<td><a href="' . WEBSITE_URL . '/delete/instructor/' . $ins['id'] . '">DELETE</a></td>' . "\n";
                        $out .= '</tr>' . "\n";
                    }
                    echo $out;
                    ?>
                </tbody>
            </table>
        </section>
        <section>
            <h1 class="heading-2">Medlemmer</h1>
        </section>
        <section>
            <h1 class="heading-2">Nyheder</h1>
        </section>
        <section>
            <h1 class="heading-2">Arrangementer</h1>
        </section>
        <section>
            <h1 class="heading-2">Nyhedsbrevmodtagere</h1>
        </section>
        <section>
            <h1 class="heading-2">Galleri</h1>
        </section>
        <section>
            <h1 class="heading-2">Bådpark</h1>
        </section>
    </div>
</div>
<?php template('layout/footer'); ?>
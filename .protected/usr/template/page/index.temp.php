<?php template('layout/header', $temp_data); ?>
<div id="mid-section">
    <div
        id="about-wrapper"
        class='content-wrapper'>
        <div id="about-column-left">
            <header class="generic-content highlight-section">
                <h1 class="heading-1">Om Klubben</h1>
                <p>Velkommen til Kajakklubben Pagaj</p>
                <p>
                    Klubben blev stiftet i slutningen af 2015 og har lige siden oplevet en stor fremgang i medlemstallet. Vi lægger vægt på, at være en kajakklub for alle. Vi ønsker at skabe en god motionskultur og et godt fællesskab i klubben gennem hyggelige fællesture og sociale arrangementer.
                </p>
                <p>    
                    KKP ligger i Århus Havn. Går du fra Banegården, tager det cirka 10 minutter til fods at komme til kajakklubben.
                    Århus Havn tilbyder perfekt rovand til begynderinstruktion og almindelige ture eller træning. Der er ingen store bølger i kanalen, hvilket gør det meget begyndervenligt.
                </p>
                <p>Vi glæder os til at se dig på vandet!</p>
            </header>
            <section class="generic-content highlight-section">
                <h1 class="heading-2">Brugte kajakker</h1>
                <ul id="list-kayak">
                    <li>
                        <img
                            src="<?= SRC_IMG . 'kajak01.jpg' ?>"
                            alt="Blå Kajak">
                        <div class="kayak-info accent">
                            <p>Blå kajak</p>
                            <p>799 DKK</p>
                        </div>
                    </li>
                    <li>
                        <img
                            src="<?= SRC_IMG . 'kajak02.jpg' ?>"
                            alt="Grøn Kajak">
                        <div class="kayak-info accent">
                            <p>Grøn kajak</p>
                            <p>200 DKK</p>
                        </div>
                    </li>
                    <li>
                        <img
                            src="<?= SRC_IMG . 'kajak03.jpg' ?>"
                            alt="Rød Kajak">
                        <div class="kayak-info accent">
                            <p>Rød kajak</p>
                            <p>30 DKK</p>
                        </div>
                    </li>
                </ul>
            </section>
        </div>
        <section id="about-column-right">
            <form
                method="post"
                id="searchbar"
                class="accent">
                <input
                    type="search"
                    placeholder="Søg på sitet">
            </form>
            <ul>
                <li>
                    <img
                        src="<?= SRC_APP . 'img02.jpg' ?>"
                        alt="Nyheder">
                    <div class="generic-content highlight-section">
                        <h1 class="heading-2">Nyheder</h1>
                        <ul class="news-list">
                            <li>07-04 Nye Kajakker til salg</li>
                            <li>15/02 Pagaj-medlemmer vinder...</li>
                        </ul>
                        <a
                            href="<?= scr_url('page/news') ?>"
                            class="sidebar-call-to-action accent">Nyheder ></a>
                    </div>
                </li>
                <li>
                    <img
                        src="<?= SRC_APP . 'img01.jpg' ?>"
                        alt="2016">
                    <div class="generic-content highlight-section">
                        <h1 class="heading-2">2016</h1>
                        <p>Juli</p>
                        <ul class="news-list">
                            <li>04. Tur til Gudenåen</li>
                            <li>08. Weekenden i det sydfynske øhav</li>
                        </ul>
                        <a
                            href="#"
                            class="sidebar-call-to-action accent">Kalender ></a>
                    </div>
                </li>
            </ul>
        </section>
        <div style="clear: both"></div>
    </div>
</div>

<?php template('layout/footer'); ?>
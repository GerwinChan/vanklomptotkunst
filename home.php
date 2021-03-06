<?php @include('partials/head.php'); ?>
<?php @include('partials/search-bar.php'); ?>
<?php @include('partials/nav.php'); ?>





    <!-- Header -->
            <header>

                <div class="container">
                    <div class="image">
                        <div class="overlay">
                            <h1>Kunst en Cultuur in de gemeente Edam-Volendam</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed turpis sem. Sed sodales venenatis. Nulla lobortis tristique hendrerit. Class  litora torquent per.</p>
                            <a href="#" class="btn">Meer informatie</a>
                        </div>
                    </div>
                </div>

            </header>
    <!-- End Header -->




    <!-- Plaatsen -->
    <section id="places">
        <div class="container">

            <div class="col-33 edam">
                <a href="?action=locations&id=1">
                    <div class="overlay">
                        <h3>Edam</h3>
                        <p>
                          Lorem ipsum dolor sit amet ,
                              consectetur adipiscing amet elit. consectetur adipiscing amet elit.
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-33 volendam">
                <a href="?action=locations&id=2">
                    <div class="overlay">
                        <h3>Volendam</h3>
                        <p>Lorem ipsum dolor sit amet ,
                            consectetur adipiscing amet elit. consectetur adipiscing amet elit.
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-33 warder">
                <a href="?action=locations&id=3">
                    <div class="overlay">
                        <h3>Warder</h3>
                        <p>Lorem ipsum dolor sit amet ,
                            consectetur adipiscing amet elit. consectetur adipiscing amet elit.
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-33 kwadijk">
                <a href="?action=locations&id=4">
                    <div class="overlay">
                        <h3>Kwadijk</h3>
                        <p>Lorem ipsum dolor sit amet ,
                            consectetur adipiscing amet elit. consectetur adipiscing amet elit.
                        </p>
                    </div>
                </a>
            </div>

            <div class="col-33 oosthuizen">
                <a href="?action=locations&id=5">
                    <div class="overlay">
                        <h3>Oosthuizen</h3>
                        <p>Lorem ipsum dolor sit amet ,
                            consectetur adipiscing amet elit. consectetur adipiscing amet elit.
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-33 schardam">
                <a href="?action=locations&id=6">
                    <div class="overlay">
                        <h3>Schardam</h3>
                        <p>Lorem ipsum dolor sit amet ,
                            consectetur adipiscing amet elit. consectetur adipiscing amet elit.
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-33 beets">
                <a href="?action=locations&id=7">
                    <div class="overlay">
                        <h3>Beets</h3>
                        <p>Lorem ipsum dolor sit amet ,
                            consectetur adipiscing amet elit. consectetur adipiscing amet elit.
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-33 middelie">
                <a href="?action=locations&id=8">
                    <div class="overlay">
                        <h3>Middelie</h3>
                        <p>Lorem ipsum dolor sit amet ,
                            consectetur adipiscing amet elit. consectetur adipiscing amet elit.
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-33 hobrede">
                <a href="?action=locations&id=9">
                    <div class="overlay">
                        <h3>Hobrede</h3>
                        <p>Lorem ipsum dolor sit amet ,
                            consectetur adipiscing amet elit. consectetur adipiscing amet elit.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- End Plaatsen -->



    <!-- Info -->
        <section id="info">
            <article>
                <div class="container">

                    <div class="col-50">
                        <h2>Kunst</h2>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque urna vel orci interdum rhoncus. Curabitur id lorem risus. Phasellus sed elit ac nisl iaculis aliquam. Donec aliquet rutrum lobortis.
                        </p>

                        <p>
                            Pellentesque imperdiet maximus risus, id ultricies tortor blandit in. Suspendisse vel molestie purus, at lobortis nisi. Nulla quis facilisis sapien. Ut ut ipsum nisi. Curabitur id lorem risus. Phasellus sed elit ac nisl iaculis aliquam. Donec aliquet rutrum lobortis.
                        </p>
                    </div>

                    <div class="col-50">
                        <h2>Cultuur</h2>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque urna vel orci interdum rhoncus. Curabitur id lorem risus. Phasellus sed elit ac nisl iaculis aliquam. Donec aliquet rutrum lobortis.
                        </p>

                        <p>
                            Pellentesque imperdiet maximus risus, id ultricies tortor blandit in. Suspendisse vel molestie purus, at lobortis nisi. Nulla quis facilisis sapien. Ut ut ipsum nisi. Curabitur id lorem risus. Phasellus sed elit ac nisl iaculis aliquam. Donec aliquet rutrum lobortis.
                        </p>
                    </div>

                </div>
            </article>

            <aside></aside>

        </section>
    <!-- End Info -->

    <!-- Inschrijven -->
        <section id="inschrijven">
            <article>
                <div class="container">

                    <div class="col-50">

                      <h2>Uw organisatie op de website?</h2>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque urna vel orci interdum rhoncus. Curabitur id lorem risus. Phasellus sed elit ac nisl iaculis aliquam. Donec aliquet rutrum lobortis.
                        </p>

                        <p>
                            Pellentesque imperdiet maximus risus, id ultricies tortor blandit in. Suspendisse vel molestie purus, at lobortis nisi. Nulla quis facilisis sapien. Ut ut ipsum nisi. Curabitur id lorem risus. Phasellus sed elit ac nisl iaculis aliquam. Donec aliquet rutrum lobortis.
                        </p>
                    </div>

                    <div class="col-50">
                        <h2>Schrijf uw organisatie in!</h2>
                        <form action="Select-Organisatie.php" method="post">
                            <input class="first" type="text" placeholder="Voornaam" name="voornaam" required="required">
                            <input type="text" placeholder="Achternaam" name="achternaam" required="required">
                            <input class="first" type="text" placeholder="Telefoon" name="telefoon" required="required">
                            <input type="text" placeholder="E-mail" name="e-mail" required="required">
                            <input class="first" type="text" placeholder="Naam organisatie" name="naam-organisatie" required="required">
                            <input type="text" placeholder="Website" name="website" required="required">
                            <select class="first" name="cunst">
                                <option value="cultuu">Cultuur</option>
                                <option value="kunst">Kunst</option>
                            </select>
                            <select name="plaats">
                                <option value="edam">Edam</option>
                                <option value="volendam">Volendam</option>
                                <option value="warder">Warder</option>
                                <option value="kwadijk">Kwadijk</option>
                                <option value="oosthuizen">Oosthuizen</option>
                                <option value="schardam">Schardam</option>
                                <option value="beets">Beets</option>
                                <option value="middelie">Middelie</option>
                            </select>
                            <input type="submit" value="Verstuur" name="subscribe" class="btn">
                        </form>
                    </div>

                </div>
            </article>


        </section>
    <!-- End Inschrijven -->




<?php @include('partials/footer.php'); ?>

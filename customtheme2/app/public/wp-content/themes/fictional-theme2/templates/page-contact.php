<!-- Template name: Contact -->
<body>
<?php
get_header();
?>
    
    <main>
        <section class="contacts-section">

            <form>
                <label>
                    Име:
                    <input type="text" />
                </label>
                <br />
                <label>
                    E-mail:
                    <input type="email" />
                </label>
                <br />
                <label>
                    Съобщение:
                    <input type="text">
                </label>
                <br />
                <button class='button-submit' type="submit">Submit</button>
            </form>


        </section>

    </main>
    <?php
get_footer();
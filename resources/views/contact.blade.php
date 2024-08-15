<x-layout>
    <x-slot:headings>
        Contact page
    </x-slot:headings>


        <title>Neem Contact Op</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>



        <h1>Neem Contact Op</h1>

    <div>
        <section class="contact-form-section">
            <h2>We horen graag van u</h2>
            <form action="contact.php" method="post" class="contact-form">
                <label for="name">Uw Naam</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Uw E-mail</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Uw Bericht</label>
                <textarea id="message" name="message" rows="6" required></textarea>

                <button type="submit">Verzend Bericht</button>
            </form>
        </section>
    </div>


    <footer>
        <p>&copy; 2024 Neem Contact Op. Alle rechten voorbehouden.</p>
    </footer>

</x-layout>

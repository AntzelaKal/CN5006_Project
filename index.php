<!DOCTYPE html>
<html lang="el">
    <head>
        <meta charset="UTF-8">
        <!Το meta viewport ειναι απαραιτητο για κινητα>
        <! λεει "Το πλατος της σελιδας= το πλατος της συσκευης χωρις zoom">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <title>Equilend - Δανεισμός εξοπλισμού</title>
        <! -- το δικο σας αρχειο CSS>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet/css">
    </head>

    <body>
        <header>
            <h1>Equilend</h1>
            <nav>
                <a href="login.php">Σύνδεση</a>
                <a href="register.php">Εγγραφή</a>
            </nav>
        </header>

        <main>
            <section>
                 <h2>Καλως ήρθατε στο εργαστήριο Πληροφορικής </h2>
                 <p>Το Equilend είναι η υπηρεσία δανεισμού εξοπλισμού του εργαστηρίου
                    Οι φοιτητές μπορούν να δανειστούν laptop, cameras, Arduino kit, VR glasses  
                    για τις εργασίες τους </p>
                 <img scr="pictures/hero.png">
            </section>

            <section>
                <h2>Τι μπορείτε να δανειστείτε</h2>
                <div class="gallery">
                    <img scr="pictures/laptop.png" alt="Laptop">
                    <! βαζουμε με τον ιδιο τροπο τις υπολοιπες εικονες>
                </div>
            </section>

            <section>
                <h2>Που θα μας βρείτε</h2>
                <p>Ώρες λειτουργίας: Δευτέα έως Παρασκεύη 09:00 με 17:00</p>
                <div id="map"></div>
                <!  το id ειναι μοναδικο. δεν μπορει να υπαρξει καποιο αλλο div με το ονομα map. 
                Η class μπορει να εμφανιστει πολλες φορες> 
            </section>
        </main>

        <footer>
            <p>&copy; 2026 Equilend - Εργαστήριο Πληροφορικής </p>
        </footer>

        <! Η Javascript της βιβλιοθηκης leaflet>
        <script scr="https://unpkg.com/leaflet@1.9.4/dist/leaflet/css"></script>
        <script>
            //Δημιουργια χάρτη μεσα στο div με id="map". Με το var δηλωνω μεταβλητη στη Javascript
            var map = L.map('map').setView([40.63445325338488, 22.9392902988927], 16); //Βαζω τις τιμες του σημειου που θελω να βαλω, και το 20 ειναι το ζουμ. απο 15 εως 20 ειναι καλα για ιστοσελιδα 
        </script>
    </body>
</html>
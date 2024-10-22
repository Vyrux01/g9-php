<?php

//EX 1

// Setăm o durată de expirare de 5 minute (300 secunde)
$durataExpirare = time() + (5 * 60);

// Setăm un cookie numit 'nume_utilizator' cu valoarea 'John Doe' și durata de expirare de 5 minute
setcookie('nume_utilizator', 'John Doe', $durataExpirare);

// Afișăm un mesaj pentru utilizator
if (isset($_COOKIE['nume_utilizator'])) {
    // Dacă cookie-ul este încă disponibil
    echo "Cookie-ul 'nume_utilizator' este încă disponibil. Valoarea sa este: " . $_COOKIE['nume_utilizator'];
} else {
    // Dacă cookie-ul a expirat sau nu a fost setat încă
    echo "Cookie-ul 'nume_utilizator' nu mai este disponibil sau nu a fost setat.";
}
?>



<?php

class Produs {
    // Proprietăți private
    private $numeProdus;
    private $pret;

    // Constructorul clasei pentru a inițializa valorile
    public function __construct(string $numeProdus, float $pret) {
        $this->numeProdus = $numeProdus;
        $this->pret = $pret;
    }

    // Getter pentru numeProdus
    public function getNumeProdus(): string {
        return $this->numeProdus;
    }

    // Setter pentru numeProdus
    public function setNumeProdus(string $numeProdus): void {
        $this->numeProdus = $numeProdus;
    }

    // Getter pentru pret
    public function getPret(): float {
        return $this->pret;
    }

    // Setter pentru pret
    public function setPret(float $pret): void {
        $this->pret = $pret;
    }

    // Metoda toString pentru a afișa detaliile produsului
    public function toString(): string {
        return "Produs: " . $this->numeProdus . ", pret: " . $this->pret . " lei.";
    }
}

// Exemplu de utilizare
$produs1 = new Produs("Laptop", 2500.99);

// Afișăm detaliile produsului folosind metoda toString
echo $produs1->toString(); // Output: Produs: Laptop, pret: 2500.99 lei.

// Modificăm numele și prețul folosind setterii
$produs1->setNumeProdus("Laptop Gaming");
$produs1->setPret(3200.75);

// Afișăm din nou detaliile
echo "<br/>" . $produs1->toString(); // Output: Produs: Laptop Gaming, pret: 3200.75 lei.






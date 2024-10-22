<?php


// Clasa de bază Produs
class Produs {
    private $numeProdus;
    private $pret;

    // Constructorul clasei Produs
    public function __construct(string $numeProdus, float $pret) {
        $this->numeProdus = $numeProdus;
        $this->pret = $pret;
    }

    // Getter și setter pentru numeProdus
    public function getNumeProdus(): string {
        return $this->numeProdus;
    }

    public function setNumeProdus(string $numeProdus): void {
        $this->numeProdus = $numeProdus;
    }

    // Getter și setter pentru pret
    public function getPret(): float {
        return $this->pret;
    }

    public function setPret(float $pret): void {
        $this->pret = $pret;
    }

    // Metoda toString din Produs
    public function toString(): string {
        return "Produs: " . $this->numeProdus . ", pret: " . $this->pret . " lei.";
    }
}

// Clasa Telefon moștenește Produs
class Telefon extends Produs {
    private $descriere;
    private $disponibilitate;

    // Constructorul clasei Telefon
    public function __construct(string $numeProdus, float $pret, string $descriere, string $disponibilitate) {
        // Apelăm constructorul clasei părinte (Produs)
        parent::__construct($numeProdus, $pret);
        $this->descriere = $descriere;
        $this->disponibilitate = $disponibilitate;
    }

    // Getter și setter pentru descriere
    public function getDescriere(): string {
        return $this->descriere;
    }

    public function setDescriere(string $descriere): void {
        $this->descriere = $descriere;
    }

    // Getter și setter pentru disponibilitate
    public function getDisponibilitate(): string {
        return $this->disponibilitate;
    }

    public function setDisponibilitate(string $disponibilitate): void {
        $this->disponibilitate = $disponibilitate;
    }

    // Suprascriem metoda toString pentru a afișa detaliile suplimentare
    public function toString(): string {
        $status = ($this->disponibilitate === 'disponibil') ? 'disponibil' : 'indisponibil';
        return "Produsul: " . $this->getNumeProdus() . ", cu următoarea descriere: " . $this->descriere .
            ", având prețul: " . $this->getPret() . " lei, este: " . $status . ".";
    }
}

// Exemplu de utilizare
$telefon = new Telefon("iPhone 15", 4500.99, "Telefon performant cu ecran OLED", "disponibil");

// Afișăm detaliile telefonului folosind metoda toString
echo $telefon->toString(); // Output: Produsul: iPhone 14, cu următoarea descriere: Telefon performant cu ecran OLED, având prețul: 4500.99 lei, este: disponibil.
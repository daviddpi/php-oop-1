<?php 

/**
 * classe di un film 
 * 
 */
class Movie{

    public $titolo;
    public $regista;
    public $genere;
    public $durata;
    public $trama;

    /** Funzione che inserire in un istanza i dati relativi a un film
     * @param string titolo del film
     * @param string regista del film
     * @param string genere del film
     * @param int durata del film
     * @param string trma del film
     */
    function __construct($titolo, $regista, $genere, $durata, $trama){
        $this->titolo = $titolo;
        $this->regista = $regista;
        $this->genere = $genere;
        $this->durata = $durata;
        $this->trama = $trama;
    }

    /**
     * @param int viene passata la durata del film
     * @return int i minuti del film vengono convertiti in ore.
     */
    public function isLong($durata){
        
        $durata =  $durata / 60;
        return $durata;
        
    }

}

$avengers = new Movie("Avengers", "Joss Whedon", "Fantastico", 133, "I leggendari supereroi Iron Man, Hulk, Thor, Capitan America, Occhio di Falco e la Vedova Nera vengono reclutati da un'agenzia governativa segreta per combattere un nemico inatteso che minaccia la sicurezza della Terra.");


// var_dump($avengers);
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP one</title>
</head>
<body>
   <h1><?= $avengers->titolo; ?></h1>
   <h3><?= $avengers->regista; ?></h3>

   <h2><?= $avengers->genere; ?></h2>
   <h3><?= number_format($avengers->isLong(134),2); ?> ore</h3>

   <p><?= $avengers->trama; ?></p>

    
</body>
</html>
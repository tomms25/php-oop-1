<!-- Create un file index.php in cui:

    è definita una classe Movie => all'interno della classe sono dichiarate delle variabili d'istanza => all'interno della classe è definito un costruttore => all'interno della classe è definito almeno un metodo
    vengono istanziati almeno due oggetti Movie e stampati a schermo i valori delle relative proprietà
 -->

 <?php

 class Movie {

     public $title;
     public $genre;

     public $length;

     public $year;


     public function _construct ($title, $genre){

         $this->title = $title;
         $this->genre = $genre;
         $this->length = $length;
         $this->year = $year;

     }



 }

 $movie1 = new Movie("Grand Budapest Hotel", "Commedia/Drammatico","100 min", "2014");
 $movie2 = new Movie("Il castello errante di Howl", "Animazione", "120 min", "2004");

 var_dump($movie1);
 echo "<br><br>";
 var_dump($movie2);



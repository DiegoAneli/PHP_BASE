<?php


    require_once 'functions.php';

    //parte la sessione
    session_start();

    //inizializzazione della sessione
    if(!isset($_SESSION['library'])){
        $_SESSION['library'] = [];
    }

    //dichiaro che 
    $library = &$_SESSION['library']; // puntatore di riferimento variabile sessione con &

    //messaggi informativi ( inizializzo a null poi cambia a seconda di cio' che voglio avere come info)
    $messagge = null;


    //aggiungo un libro
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])){ //mi sono preso il bottone di add book

        //Salvo in variabili i valori inseriti in input form
        $title = trim($_POST['title'] ?? ''); //?? valore di dafalt, quindi prendi il titolo oppure vuoto
        $author = trim($_POST['author'] ?? '');
        $year = trim($_POST['year'] ?? '');
        $price = trim($_POST['price'] ?? '');
        $pages = trim($_POST['pages'] ?? '');

        //aggiungo un libro se ho il titolo e l autore
        if($title && $author){

            addBook($library, $title, $author, $year, $price, $pages);

            $message = "Libro Aggiunto";

        }else{

            $message = "Inserisci il titolo e un autore";
        }


    }










?>









<!DOCTYPE html>
<html lang="it"> <!--BUG?! Altrimenti non prende il css personale -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <!--importo Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--importo style personale-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!--importo header-->
    <?php include 'header.php' ?>



    <div class="container py-4">

        <h3>Aggiungi un libro</h3>
        <form action="" method="POST" class="row g-3 mb-4">

            <div class="col-md-4">

                <input type="text" name="title" class="form-control" placeholder="Inserisci Titolo...">


            </div>

            <div class="col-md-4">

                <input type="text" name="author" class="form-control" placeholder="Inserisci Autore...">


            </div>

            <div class="col-md-4">

                <input type="text" name="year" class="form-control" placeholder="Inserisci Anno...">


            </div>

            <div class="col-md-6">

                <input type="text" name="price" class="form-control" placeholder="Inserisci Prezzo Libro...">


            </div>

            <div class="col-md-6">

                <input type="text" name="pages" class="form-control" placeholder="Inserisci Numero delle pagine...">


            </div>
            
            <!--Bottone d submit-->
            <div class="col-md-2 ">
                <button class="btn btn-primary w-100" type="submit" name="add">Aggiungi</button>
            </div>


        </form>



        <h3>Ricerca Libro</h3>
        <form action="" method="POST">

            <div class="col-md-12">
                <input type="text" name="search_title" class="form-control" placeholder="Inserisci titolo da cercare">
            </div>

            <!--Bottone di invio ricerca -->
            <div class="col-md-2">
                <button type="submit" class="btn btn-secondary mt-3 w-100" name="search">Cerca</button>
            </div>

        </form>


        <h3>Risultato Ricerca</h3>


        <h3>Elenco Libri</h3>
        <!--Se la libreria è vuota...-->
        <?php if(empty($library)): ?>
            
            <p>Nessun libro presente</p>
        
            <?php else: ?>

                <ul>
                    <!--Ciclo su tutti i libri -->
                    <?php  foreach($library as $index => $book) :   ?>

                        <li>
                            <?= $book->getInfo() ?>

                        </li>
                    <?php endforeach; ?>
                </ul>

        <?php endif; ?>
    </div>

    <h3>debug</h3>
    <pre><?php print_r($_SESSION) ?></pre>



    <!--importo footer-->
    <?php include 'footer.php' ?>




</body>
</html>
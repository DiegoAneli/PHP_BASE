<?php

    //importo la classe
    require_once 'Book.php';


    function addBook(array &$library, string $title, string $author, string $year, string $pages, string $price ){

        //creo l oggetto dentro l array libreria
        $library[] = new Book($title, $author, $year, $pages, $price);
        

    }


    
    function searchBook(){



    }



    
    function deleteBook(){



    }

?>
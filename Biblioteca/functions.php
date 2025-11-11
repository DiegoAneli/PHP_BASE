<?php

    //importo la classe
    require_once 'Book.php';


    function addBook(array &$library, string $title, string $author, string $year, string $pages, string $price ){

        //creo l oggetto dentro l array libreria
        $library[] = new Book($title, $author, $year, $pages, $price);
        

    }



    function searchBook(array $library, string $title): ?Book {

            foreach ($library as $book){

                if(strtolower($book->title) === strtolower($title)){

                    return $book;
                }

            }

            return null; // nessun contatto trovato

    }


    
    
    function deleteBook(){



    }

?>
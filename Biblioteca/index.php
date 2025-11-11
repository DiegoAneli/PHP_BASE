<!DOCTYPE html>
<html lang="en">
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

            <div class="col-md-5">

                <input type="text" name="title" class="form-control" placeholder="Inserisci Titolo...">


            </div>

            <div class="col-md-5">

                <input type="text" name="author" class="form-control" placeholder="Inserisci Autore...">


            </div>

            <div class="col-md-5">

                <input type="text" name="year" class="form-control" placeholder="Inserisci Anno...">


            </div>

            <div class="col-md-5">

                <input type="text" name="price" class="form-control" placeholder="Inserisci Prezzo Libro...">


            </div>

            <div class="col-md-5">

                <input type="text" name="pages" class="form-control" placeholder="Inserisci Numero delle pagine...">


            </div>
            
            <!--Bottone d submit-->
            <div class="col-md-2 ">
                <button class="btn btn-primary w-100 " type="submit" name="add">Aggiungi</button>
            </div>


        </form>



        <h3>Ricerca Libro</h3>
        <form action="" method="POST">

            <div class="col-md-10">
                <input type="text" name="search_title" class="form-control" placeholder="Inserisci titolo da cercare">
            </div>

            <!--Bottone di invio ricerca -->
            <div class="col-md-2">
                <button type="submit" class="btn btn-secondary mt-3 w-100" name="search">Cerca</button>
            </div>

        </form>


        <h3>Risultato Ricerca</h3>


    </div>



















    <!--importo footer-->
    <?php include 'footer.php' ?>




</body>
</html>
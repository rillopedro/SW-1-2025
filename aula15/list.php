<?php
    require 'conect.php';

    $sql = "SELECT * FROM produtos";
    $stmt = $pdo->query($sql);

    while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //PDO::FETCH_ASSOC --> faz com que seja retornado um array associativo
        //que será relacionado a variável $produto. Os índices deste array
        //associativo serão os nomes dos campos da tabela do banco de dados

        //Ver diferenças no uso de:
        //  fetch(PDO::FETCH_ASSOC)
        //  fetchAll(PDO::FETCH_ASSOC)

  
        echo "ID: " . $produto['id_livro'] . "<br>";
        echo "Titulo: " . $produto['titulo'] . "<br>";
        echo "Gênero: " . $produto['genero'] . "<br>";
        echo "Autor: " . $produto['autor'] . "<br>";
        echo "Páginas: " . $produto['paginas'] . "<br>";
    
    }
?>
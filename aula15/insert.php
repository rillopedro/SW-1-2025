<?php
    require 'conect.php';
    $titulo = "Five Nights at Freddy's: The Silver Eyes";
    $genero = "	Terror e Mistério";
    $ano = 2015;
    $autor = "Scott Cawthon e Kira Breed-Wrisley";
    $paginas = 466;
    
    $sql = "INSERT INTO produtos (titulo, genero, ano, autor, paginas) VALUES (:titulo, :genero, :ano, :autor, :paginas)";
    
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':autor', $autor);
    $stmt->bindParam(':paginas', $paginas);

    if ($stmt->execute()) {
        echo "Produto inserido com sucesso!";
    } else {
        echo "Erro ao inserir produto.";
    }
?>

<?php
    require 'conect.php';

    $id_livro = 3;
    $novo = 400;

    $sql = "UPDATE produtos SET paginas = :paginas WHERE id_livro = :id_livro";
    
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':paginas', $novo);
    $stmt->bindParam(':id_livro', $id_livro);

    if ($stmt->execute()) {
        echo "Produto atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar produto.";
    }
?>
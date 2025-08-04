<?php
    require 'conect.php';

    $id_livro = 2;

    $sql = "DELETE FROM produtos WHERE id_livro = :id_livro";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id_livro', $id_livro);

    if ($stmt->execute()) {
        echo "Produto excluído com sucesso!";
    } else {
        echo "Erro ao excluir produto.";
    }
?>
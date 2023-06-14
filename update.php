<?php











$sql = " UPDATE tb_cliente SET nome = :nome, 
        idade = :idade, email = :email WHERE id = :id ";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':qtd_temp', $qtd_temp);
        $stmt->bindParam(':qtd_ep', $qtd_ep);
        $stmt->bindParam(':data_lan', $data_lan);
        $stmt->bindParam(':data_fin', $data_fin);
        $stmt->bindParam(':categoria', $categoria);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':plataforma', $plataforma);
        $stmt->bindParam(':idioma', $idioma);
        $stmt->bindParam(':img', $mysqlImg);


        $sql = " UPDATE    tb_anime SET (nome = :nome, qtd_temp=:qtd_temp, qtd_ep,data_lan,data_fin,categoria,descricao,plataforma,idioma,img)
        VALUES (:nome, :qtd_temp, :qtd_ep,:data_lan,:data_fin,:categoria,:descricao,:plataforma,:idioma, :img WHERE id= :id)";

        $stmt = $con->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':qtd_temp', $qtd_temp);
        $stmt->bindParam(':qtd_ep', $qtd_ep);
        $stmt->bindParam(':data_lan', $data_lan);
        $stmt->bindParam(':data_fin', $data_fin);
        $stmt->bindParam(':categoria', $categoria);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':plataforma', $plataforma);
        $stmt->bindParam(':idioma', $idioma);
        $stmt->bindParam(':img', $mysqlImg);






?>

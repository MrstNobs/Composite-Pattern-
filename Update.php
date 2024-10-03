<?php
    /* Função AutoLoad 
    *  Carrega uma calsse quando ela é necessária, ou seja, quando é instanciado
    *  pela primeria vez
    */

    // Função para o autoload das classes
    spl_autoload_register(function ($classe) {
        if (file_exists("{$classe}.class.php")) {
            include_once "{$classe}.class.php";
        }
    });

    // cria uma criterio de seleção de dados
    $criteria = new TCriteria;
    $criteria->add(new TFilter('id', '=', 3));

    //cria instrução de UPDATE
    $sql = new TSqlUpdate;

    //define a entidade
    $sql->setEntity('aluno');

    //atribui o valor de cada coluna
    $sql->setRowData('nome', 'Pedro Cardoso da Silva');
    $sql->setRowData('rua', 'Machado de Assis');
    $sql->setRowData('fone', '(88) 91234 12345');

    //define o criterio de seleção de dados
    $sql->setCriteria($criteria);

    // processa instrução SQL
    echo $sql->getInstruction();

    echo "<br>\n";
    


?>
<?php

class Emprestimo
{
    private int $idEmprestimo;
    private DateTime $dataEmprestimo;
    private DateTime $dataDevolucao;

    function __construct($idEmprestimo, $dataEmprestimo, $dataDevolucao, )
    {
        $this->idEmprestimo = $idEmprestimo;
        $this->dataEmprestimo = new DateTime($dataEmprestimo);
        $this->dataDevolucao = new DateTime($dataDevolucao);
    }

    function getAtributo($atributo)
    {
        return $this->$atributo;
    }

    function setAtributo($atributo, $novoValor)
    {
        $this->$atributo = $novoValor;
    }

    // Metodo que retornar todas as informacoes:
    function dadosClasse()
    {
        return "\n". $this->idEmprestimo . "," . $this->dataEmprestimo->format("d-m-Y") . "," . $this->dataDevolucao->format("d-m-Y");
    }
}

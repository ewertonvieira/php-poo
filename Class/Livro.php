<?php

class Livro
{
    private int $idLivro;
    private string $titulo;
    private string $autor;
    private string $editora;
    private int $anoPublicacao;
    private string $genero;

    function __construct($idLivro, $titulo, $autor, $editora, $anoPublicacao, $genero)
    {
        $this->idLivro = $idLivro;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->editora = $editora;
        $this->anoPublicacao = $anoPublicacao;
        $this->genero = $genero;
    }

    function getAtributo($atributo)
    {
        return $this->$atributo;
    }

    function setAtributo($atributo, $novoValor)
    {
        $this->$atributo = $novoValor;
    }

    function dadosClasse() {
        return "\n". $this->idLivro .",". $this->titulo .",". $this->autor .",". $this->editora .",". $this->anoPublicacao .",". $this->genero;
    }
}

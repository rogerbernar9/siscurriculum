<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CargoRepository")
 * @ORM\Table(name="cargos")
 */
class Cargo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * 
     * @var string
     * @ORM\Column(type="string")
     */
    private $nome;

    public function getId()
    {
        return $this->id;
    }
    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     * @return Cargo
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

}

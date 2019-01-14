<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HistoricoProfissionalRepository")
 * @ORM\Table(name="historicos_profissional")
 */
class HistoricoProfissional
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $nome_empresa;
    
    /**
     * @var \DateTime
     * @ORM\Column(type="date")
     */
    private $data_entrada;
    
    /**
     * @var \DateTime
     * @ORM\Column(type="date", nullable=true)
     */
    private $data_saida;
    
    
    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $emprego_atual = false;
    
    
    /**
     * @var Candidato
     * @ORM\ManyToOne(targetEntity="App\Entity\Candidato", inversedBy="historico")
     */
    private $candidato;
    

    public function getId()
    {
        return $this->id;
    }
    /**
     * @return string
     */
    public function getNome_empresa()
    {
        return $this->nome_empresa;
    }

    /**
     * @return \DateTime
     */
    public function getDataEntrada()
    {
        return $this->data_entrada;
    }

    /**
     * @return \DateTime
     */
    public function getDataSaida()
    {
        return $this->data_saida;
    }

    /**
     * @return boolean
     */
    public function isEmpregoAtual()
    {
        return $this->emprego_atual;
    }

    /**
     * @param string $nome_empresa
     */
    public function setNomeEmpresa($nome_empresa)
    {
        $this->nome_empresa = $nome_empresa;
    }

    /**
     * @param \DateTime $data_entrada
     */
    public function setDataEntrada($data_entrada)
    {
        $this->data_entrada = $data_entrada;
    }

    /**
     * @param \DateTime $data_saida
     */
    public function setDataSaida($data_saida)
    {
        $this->data_saida = $data_saida;
    }

    /**
     * @param boolean $emprego_atual
     */
    public function setEmpregoAtual($emprego_atual)
    {
        $this->emprego_atual = $emprego_atual;
    }
    /**
     * @return \App\Entity\Candidato
     */
    public function getCandidato()
    {
        return $this->candidato;
    }

    /**
     * @param \App\Entity\Candidato $candidato
     */
    public function setCandidato($candidato)
    {
        $this->candidato = $candidato;
    }


}

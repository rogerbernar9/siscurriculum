<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CandidatoRepository")
 * @ORM\Table(name="candidatos")
 */
class Candidato
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
    
    
    /**
     *
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $idade;
    
    
    /**
     *
     * @var string
     * @ORM\Column(type="string", length=1)
     * @Assert\NotBlank()
     * @Assert\Choice(choices={"M","F"})
     */
    private $sexo;
    
    /**
     *
     * @var \DateTime
     * @ORM\Column(type="date")
     * @Assert\NotBlank()
     * @Assert\Date()
     */
    private $data_nascimento;
    

    
    
    /**
     *
     * @var string
     * @ORM\Column(type="string")
     * @Assert\File(mimeTypes={"image/png","image/jpg"})
     */
    private $foto;
    
    /**
     *
     * @var Cargo
     * @ORM\ManyToOne(targetEntity="App\Entity\Cargo")
     * @Assert\NotBlank()
     */
    private $cargo;
    
    /**
     *
     * @var Endereco
     * @ORM\ManyToOne(targetEntity="App\Entity\Endereco", cascade={"persist"})
     * @Assert\Valid()
     */
    private $endereco;    
    
    
    /**
     *
     * @var float
     * @ORM\Column(type="decimal", precision=2, length=10)
     * @Assert\NotBlank()
     * @Assert\Range(min="0", max="10000000")
     */
    private $pretensao_salarial;
    
    /**
     * @var HistoricoProfissional
     * @ORM\OneToMany(targetEntity="App\Entity\HistoricoProfissional", mappedBy="candidato")
     * @Assert\Valid()
     */
    private $historico;
    
    /**
     * @var Tecnologia
     * @ORM\ManyToMany(targetEntity="App\Entity\Tecnologia", inversedBy="candidatos")
     * @ORM\JoinTable(name="candidatos_tecnologia")
     * @Assert\Count(min="3", max="10")
     */
    private $tecnologias;
    
    
    /**
     * @var string
     * @\App\Validator\SonPass()
     */
    private $palavra_magica;
    
    

    public function getId()
    {
        return $this->id;
    }
    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @return mixed
     */
    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @return mixed
     */
    public function getPretensaoSalarial()
    {
        return $this->pretensao_salarial;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @param mixed $data_nascimento
     */
    public function setDataNascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
    }


    /**
     * @param mixed $foto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    /**
     * @param mixed $pretensao_salarial
     */
    public function setPretensaoSalarial($pretensao_salarial)
    {
        $this->pretensao_salarial = $pretensao_salarial;
    }
    /**
     * @return \App\Entity\Cargo
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * @param \App\Entity\Cargo $cargo
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }
    /**
     * @return \App\Entity\Endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param \App\Entity\Endereco $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }
    /**
     * @return HistoricoProfissional
     */
    public function getHistorico()
    {
        return $this->historico;
    }

    /**
     * @return Tecnologia
     */
    public function getTecnologias()
    {
        return $this->tecnologias;
    }

    /**
     * @param HistoricoProfissional $historico
     * @return Candidato 
     */
    public function setHistorico($historico)
    {
        $this->historico = $historico;
    }

    /**
     * @param Tecnologia $tecnologias
     * return Candidato
     */
    public function setTecnologias($tecnologias)
    {
        $this->tecnologias = $tecnologias;
    }
    /**
     * @return string
     */
    public function getPalavraMagica()
    {
        return $this->palavra_magica;
    }

    /**
     * @param string $palavra_magica
     */
    public function setPalavraMagica($palavra_magica)
    {
        $this->palavra_magica = $palavra_magica;
    }





}

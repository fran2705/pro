<?php

namespace Entities;

/**
 * @Entity 
 * @Table(name="Licitacion")
 */
class Licitacion
{
    /**
     * @var integer
     */
    private $idLicitacion;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var \boolean
     */
    private $publicada;
    
    function getIdLicitacion() {
        return $this->idLicitacion;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getPublicada() {
        return $this->publicada;
    }

    function setIdLicitacion($idLicitacion) {
        $this->idLicitacion = $idLicitacion;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setPublicada(\boolean $publicada) {
        $this->publicada = $publicada;
    }


}

    
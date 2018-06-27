<?php

namespace Entities;

/**
 * @Entity 
 * @Table(name="Contrato")
 */
class Contrato 
{
    /**
     * @var integer
     */
    private $idContrato;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var \DateTime
     */
    private $fecha;
    
    /**
     * @var \Entities\Licitacion
     */
    private $idFkLicitacion;
    
    function getIdContrato() {
        return $this->idContrato;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getIdFkLicitacion() {
        return $this->idFkLicitacion;
    }

    function setIdContrato($idContrato) {
        $this->idContrato = $idContrato;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setFecha(\DateTime $fecha) {
        $this->fecha = $fecha;
    }

    function setIdFkLicitacion(\Entities\Licitacion $idFkLicitacion) {
        $this->idFkLicitacion = $idFkLicitacion;
    }



    


}

    
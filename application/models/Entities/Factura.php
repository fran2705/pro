<?php

namespace Entities;

/**
 * @Entity 
 * @Table(name="Factura")
 */
class Factura
{
    /**
     * @var integer
     */
    private $idFactura;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var \DateTime
     */
    private $fecha;
    
    /**
     * @var integer
     */
    private $adjunto;
    /**
     * @var Entities\Contrato
     */
    private $idFkContrato;
    /**
     * @var Entities\Licitacion
     */
    private $idFkLicitacion;
    /**
     * @var decimal
     */
    private $precio;
    /**
     * @var integer
     */
    private $iva;
    /**
     * @var decimal
     */
    private $total;

    function getIdFactura() {
        return $this->idFactura;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getAdjunto() {
        return $this->adjunto;
    }

    function getIdFkContrato() {
        return $this->idFkContrato;
    }

    function getIdFkLicitacion() {
        return $this->idFkLicitacion;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getIva() {
        return $this->iva;
    }

    function getTotal() {
        return $this->total;
    }

    function setIdFactura($idFactura) {
        $this->idFactura = $idFactura;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setFecha(\DateTime $fecha) {
        $this->fecha = $fecha;
    }

    function setAdjunto($adjunto) {
        $this->adjunto = $adjunto;
    }

    function setIdFkContrato(Entities\Contrato $idFkContrato) {
        $this->idFkContrato = $idFkContrato;
    }

    function setIdFkLicitacion(Entities\Licitacion $idFkLicitacion) {
        $this->idFkLicitacion = $idFkLicitacion;
    }

    function setPrecio(decimal $precio) {
        $this->precio = $precio;
    }

    function setIva($iva) {
        $this->iva = $iva;
    }

    function setTotal(decimal $total) {
        $this->total = $total;
    }


}

    
<?php

class Paciente
{
    private $nombre;
    private $apellido;
    private $peso;
    private $estatura;
    private $lecturaGlucometro;
    private $lecturaHorario;
    private $presionSistolica;
    private $presionDistolica;

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @param mixed $peso
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    /**
     * @return mixed
     */
    public function getEstatura()
    {
        return $this->estatura;
    }

    /**
     * @param mixed $estatura
     */
    public function setEstatura($estatura)
    {
        $this->estatura = $estatura;
    }

    /**
     * @return mixed
     */
    public function getLecturaGlucometro()
    {
        return $this->lecturaGlucometro;
    }

    /**
     * @param mixed $lecturaGlucometro
     */
    public function setLecturaGlucometro($lecturaGlucometro)
    {
        $this->lecturaGlucometro = $lecturaGlucometro;
    }

    /**
     * @return mixed
     */
    public function getLecturaHorario()
    {
        return $this->lecturaHorario;
    }

    /**
     * @param mixed $lecturaHorario
     */
    public function setLecturaHorario($lecturaHorario)
    {
        $this->lecturaHorario = $lecturaHorario;
    }

    /**
     * @return mixed
     */
    public function getPresionSistolica()
    {
        return $this->presionSistolica;
    }

    /**
     * @param mixed $presionSistolica
     */
    public function setPresionSistolica($presionSistolica)
    {
        $this->presionSistolica = $presionSistolica;
    }

    /**
     * @return mixed
     */
    public function getPresionDistolica()
    {
        return $this->presionDistolica;
    }

    /**
     * @param mixed $presionDistolica
     */
    public function setPresionDistolica($presionDistolica)
    {
        $this->presionDistolica = $presionDistolica;
    }


}
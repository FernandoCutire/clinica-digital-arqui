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
    private $imc;
    private $glucosa;
    private $presionArterial;

    /**
     *
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

    /**
     * @return mixed
     */
    public function getImc()
    {
        return $this->imc;
    }

    /**
     * @param mixed $imc
     */
    public function setImc($imc)
    {
        $this->imc = $imc;
    }

    /**
     * @return mixed
     */
    public function getGlucosa()
    {
        return $this->glucosa;
    }

    /**
     * @param mixed $glucosa
     */
    public function setGlucosa($glucosa)
    {
        $this->glucosa = $glucosa;
    }

    /**
     * @return mixed
     */
    public function getPresionArterial()
    {
        return $this->presionArterial;
    }

    /**
     * @param mixed $presionArterial
     */
    public function setPresionArterial($presionArterial)
    {
        $this->presionArterial = $presionArterial;
    }


    // Aqui deberian ir 3 funciones

    public function calcularIMC()
    {
        $this->imc = $this->peso / ($this->estatura * $this->estatura);
    }

    public function calcularGlucosa()
    {
        $this->glucosa = $this->lecturaGlucometro * 18;
    }

    public function calcularPresionArterial()
    {
        $this->presionArterial = $this->presionSistolica + $this->presionDistolica;
    }



}
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
    private $imcEstado;
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

    /**
     * @return mixed
     */
    public function getImcEstado()
    {
        return $this->imcEstado;
    }

    /**
     * @param mixed $imcEstado
     */
    public function setImcEstado($imcEstado)
    {
        $this->imcEstado = $imcEstado;
    }



    // Aqui deberian ir 3 funciones

    public function calcularIMC($peso, $estatura)
    {
        $imc = $peso / ($estatura**2);
        $this->setImc($imc);
    }

    public function calcularIMCEstado() {
        $imc = $this->getImc();
        if ($imc < 18.5) {
            $this->setImcEstado("Peso bajo");
        } elseif ($imc >= 18.5 && $imc <= 24.9) {
            $this->setImcEstado("Peso normal");
        } elseif ($imc >= 25 && $imc <= 29.9) {
            $this->setImcEstado("Sobrepeso");
        } elseif ($imc >= 30 && $imc <= 39.9) {
            $this->setImcEstado("Obesidad ");
        } elseif ($imc >= 40) {
            $this->setImcEstado("Obesidad extrema");
        }
    }

    public function calcularGlucosa($lHorario, $lGlucometro)
    {
        // TODO Buscar fórmula de Glucosa
        if ($lHorario === "Ayunas") {

            if ($lGlucometro <= 100) {
                $resp = "Sin Diabetes";
                $this->setGlucosa($resp);
            }

            if ($lGlucometro <= 125) {
                $resp = "Pre Diabetes";
                $this->setGlucosa($resp);
            }

            if ($lGlucometro >= 126) {
                $resp = "Diabetes";
                $this->setGlucosa($resp);
            }
        } else if ($lHorario === "Posprandial") {
            if ($lGlucometro <= 140) {
                $resp = "Sin Diabetes";
                $this->setGlucosa($resp);
            }

            if ($lGlucometro <= 199) {
                $resp = "Pre Diabetes";
                $this->setGlucosa($resp);
            }

            if ($lGlucometro >= 200) {
                $resp = "Diabetes";
                $this->setGlucosa($resp);
            }

        }
    }

// función: https://www.clikisalud.net/diabetes/como-puedo-saber-si-padezco-diabetes/#:~:text=Para%20ambos%20tipos%20de%20diabetes,6.5%25%20en%20adelante%3B%20prueba%20de

    public function calcularPresionArterial($pSistolica, $pDistolica)
    {
        // TODO Buscar fórmula de Presion Arterial
        $this->presionArterial = $this->presionSistolica + $this->presionDistolica;

        if ($pSistolica < 120 && $pDistolica < 80) {
            $resp = "Normal";
            $this->setPresionArterial($resp);
        } else if ($pSistolica <= 129 && $pDistolica < 80) {
            $resp = "Elevada";
            $this->setPresionArterial($resp);
        } else if ($pSistolica <= 139 && $pDistolica <= 89) {
            $resp = "Presión Arterial Alta Nivel 1";
            $this->setPresionArterial($resp);
        } else if ($pSistolica >= 140 && $pDistolica >= 90) {
            $resp = "Presión Arterial Alta Nivel 2";
            $this->setPresionArterial($resp);
        } else if ($pSistolica >= 180 && $pDistolica >= 120) {
            $resp = "Crisis de Hipertensión (Consulte a su médico de inmediato)";
            $this->setPresionArterial($resp);
        }

    }


}
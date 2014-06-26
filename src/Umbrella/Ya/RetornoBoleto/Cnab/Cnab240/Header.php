<?php

namespace Umbrella\Ya\RetornoBoleto\Cnab\Cnab240;

use DateTime;
use Umbrella\Ya\RetornoBoleto\Cnab\ICnabHeader;

class Header extends AbstractHeader implements ICnab240, ICnabHeader
{
    protected $codArquivo;
    protected $densidade;

    /**
     *
     * @var DateTime
     */
    protected $dataGeracao;
    protected $sequencialReg;

    public function getCodArquivo()
    {
        return $this->codArquivo;
    }

    public function getDensidade()
    {
        return $this->densidade;
    }

    public function getDataGeracao()
    {
        return $this->dataGeracao;
    }

    public function getSequencialReg()
    {
        return $this->sequencialReg;
    }

    /**
     * @param string $codArquivo
     */
    public function setCodArquivo($codArquivo)
    {
        $this->codArquivo = $codArquivo;
        return $this;
    }

    public function setDensidade($densidade)
    {
        $this->densidade = $densidade;
        return $this;
    }

    public function setDataGeracao(DateTime $dataGeracao)
    {
        $this->dataGeracao = $dataGeracao;
        return $this;
    }

    /**
     * @param string $sequencialReg
     */
    public function setSequencialReg($sequencialReg)
    {
        $this->sequencialReg = $sequencialReg;
        return $this;
    }
}
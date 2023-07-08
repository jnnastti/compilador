<?php

class TabelaSimbolos
{
    private $variableTable = [];
    private const ERRO = "ERRO";
    private const SUCESSO = "SUCESSO";

    /**
     * @param $variable
     * @param $level
     * @return string
     * Adicionar simbolo na tabela
     */
    public function add($variable, $level) {
        $key = $variable->getName() . "_" . $level;
        if ($this->containsVariable($variable->getName(), $level)) {
            return self::ERRO;
        } else {
            $this->variableTable[$key] = $variable;
            return self::SUCESSO;
        }
    }

    /**
     * @param $variable
     * @param $level
     * @return mixed
     * Selecionar e retornar simbolo
     */
    public function getVariable($variable, $level) {
        $key = $variable . "_" . $level;
        return $this->variableTable[$key];
    }

    /**
     * @param $key
     * @param $level
     * @return void
     * Deletar da tabela
     */
    public function delete($key, $level) {
        $key = $key . "_" . $level;
        unset($this->variableTable[$key]);
    }

    public function deleteByLevel($level) {
        $aux = [];
        foreach ($this->variableTable as $key => $variable) {
            if ($variable->getLevel() === $level) {
                $aux[] = $key;
            }
        }
        foreach ($aux as $key) {
            unset($this->variableTable[$key]);
        }
    }

    /**
     * @param $key
     * @param $level
     * @return bool
     * Verificar se o simbolo ja está na tabela
     */
    public function containsVariable($key, $level) {
        $key = $key . "_" . $level;
        return array_key_exists($key, $this->variableTable);
    }
}
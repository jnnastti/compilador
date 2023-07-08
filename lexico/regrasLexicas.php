<?php

class RegrasLexicas
{
    /**
     * COMENTARIOS
     * Dois tipos de declaração de comentários: o simples e o de bloco
     *
     * @param string $valor - caractere atual
     * @param string $proximo - caractere seguinte ao atual
     * @return bool - se é um comentário ou não
     */

    public function VerificaComentario(string $valor, string $proximo): bool
    {
        if(($valor != '/') || ($proximo != '/')) {
            return false;
        }

        return true;
    }

    /**
     * NUMEROS
     * Verificar se o caractere atual é um numero (aceita negativos)
     *
     * @param string $valor - caractere atual
     * @param string $proximo - caractere seguinte ao atual
     * @return int|bool - se é um número válido ou não
    */
    public function VerificaNumero(string $valor, string $proximo): int|bool
    {
        if($valor != '0') {
            $val = intval($valor);

            if($val == 0 && $valor != '-') {
                return false;
            }
        }

        if($proximo != '0') {
            $num = intval($proximo);
        }

        if($valor == '-') { // verifica se é um numero negativo
            if($num == 0) {
                return false;
            }

            return $valor . $proximo;
        } elseif (is_numeric(intval($valor))) { // senão, verifica se é um numero positivo
            return $valor;
        } else {
            return false;
        }
    }
    /**
     * NUMERO - INTEIRO
     * Os dados do tipo integer podem conter de informações inteiras de 0 à 500000;
     *
     * @param string $valor - caractere atual
     * @return string|bool - se é um integer valido ou não
     */
    public  function  VerificaInteger(string $valor): string|bool
    {
        if(strlen($valor) < 0 || strlen($valor) > 500000)
        {
            return false;
        }

        return 'numinteiro';
    }


    /**
     * NUMERO - REAL
     * Os dados do tipo real podem conter de informações de 0 à 500000
     * Tendo seu máximo limitado a 10 números após a vírgula
     * Para separar a parte decimal da inteira deve-se utilizar o caractere ponto
     *
     * @param string $valor - caractere atual
     * @return string|bool - se é um real válido ou não
     */
    public function VerificaReal(string $valor): string|bool
    {
        if(strlen($valor) < 0 || strlen($valor > 500000))
        {
            return false;
        }

        $dec = substr($valor, strrpos($valor, '.'));

        if(strlen($dec) > 10) {
            return false;
        }

        return 'numreal';
    }

    /**
     * CHAR
     * Aceita somente um caractere ASCII e seu conteúdo deve estar sempre entre aspas simples.
     *
     * @param string $valor - caractere atual
     * @return string|bool - se é um CHAR valido ou nao
     */
    public function VerificaChar(string $valor): string|bool
    {
        if(strlen($valor) > 1)
        {
            return false;
        }

        return 'nomechar';
    }

    /**
     * @param string $valor
     * @return string|bool
     */
    public function VerificaTipoVariavel(string $valor)
    {

    }

    /**
     * IDENTIFICADOR
     * Toda string fora de aspas
     *
     * @param string $valor - caractere atual
     * @return string|bool - se é um identificador ou não
     */
    public function VerificaIdentificador(string $valor): string|bool
    {
        return false;
    }
}
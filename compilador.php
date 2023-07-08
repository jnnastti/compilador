<?php


    require_once ('./lexico/regrasLexicas.php');
    require_once ('./sintatico/terminais.php');
    require_once ('./sintatico/sintatico.php');

global $terminais;
    // lista de padroes e seus tokens
    $padroes = $terminais;

    // array de tokens
    $tokens = [];

    // pegar lista de arquivos
    $arquivos = [];
    $arquivos1 = [];

    //$arquivos1[] = glob('./exemplos/projeto/**.{php}', GLOB_BRACE);
    $arquivos1[] = glob('./exemplos/projeto/**/*.{php}', GLOB_BRACE);

    //$arquivos1[] = glob('./teste/*.{php}', GLOB_BRACE);

    // setar todos os arquivos em um array só
    for($o = 0; $o < count($arquivos1); $o++) {
        for($p = 0; $p < count($arquivos1[$o]); $p++) {
            $arquivos[] = $arquivos1[$o][$p];
        }
    }

    // percorrer arquivos
    foreach($arquivos as $arquivo) {
        $entrada = file_get_contents($arquivo);
        $entrada2 = str_replace(chr(10), '~', $entrada);

        $delimitadores = '/\s\s+|(>=|>|=|<>|<=|<|\+|\]|\-|\[|;|:|\/|\.\.|\.|,|\*|\)|\(|\$|\s|\'|"|~)/';

        $caracteres = preg_split($delimitadores, $entrada2, -1, PREG_SPLIT_DELIM_CAPTURE);

        $posicao = 0;
        $linha = 1;

        $isReal = false;

        $isNum = false;
        $numeroEncontrado = 0;

        $palavra = '';

        $coment = false;

        $abreChar = false;
        $abreString = false;

        $Regras = new RegrasLexicas();

        // percorrer conteudo do arquivo
        foreach ($caracteres as $index => $caracter) {
            $encontrado = false;

            // valor é um numero negativo
            if($isReal) {
                $isReal = false;
                continue;
            }
            // está dentro de um comentário
            if($coment) {
                // ignorar toda a linha
                if($caracter == '~') {
                    $linha++;
                    $coment = false;
                }
                continue;
            }

            // vazio
            if((empty($caracter) || $caracter == " ") && $caracter != '0') {
                continue;
            }
            // linha
            if($caracter == '~') {
                $linha++;
                continue;
            }

            // pegar o caractere seguinte
            $j = 0;
            $next = '';
            $pos = 0;

            for($i = 1; $i > $j; $i++) {
                if(!($next == " " && empty($next))) {
                    $j = $i + 2;
                }

                $next = $caracteres[$index + $i];
            }

            /** TRATATIVA DE COMENTARIO */
            if($caracter == '/') {
                $next = $caracteres[$index + 2];

                $coment = $Regras->VerificaComentario($caracter, $next);

                if($coment) {
                    continue;
                }
            }

            /** TRATATIVA PONTO PONTO */
            if($caracter == '..') {

                if($isNum) {
                    $res = $Regras->VerificaInteger($numeroEncontrado);

                    if($res) {
                        $numero = $padroes[$res];
                        $valorFim = $res;

                        $numeroEncontrado = 0;
                        $isNum = false;

                        $tokens[] = [
                            'arquivo' => $arquivo,
                            'numero' => $numero,
                            'valor' =>$valorFim,
                            'linha' => $linha,
                            'msg' => ''
                        ];
                    } else {
                        $tokens[] = [
                            'arquivo' => $arquivo,
                            'numero' => '',
                            'valor' =>$valor ?? $numeroEncontrado,
                            'linha' => $linha,
                            'msg' => "ERRO: numero de caracteres excede o permitido!"
                        ];
                    }
                }

                $numero = $padroes['..'];

                $tokens[] = [
                    'arquivo' => $arquivo,
                    'numero' => $numero,
                    'valor' =>'..',
                    'linha' => $linha,
                    'msg' => ''
                ];

                continue;
            }

            /**  TRATATIVA DE NUMEROS */
            // Verificar se o caracter é um numero (somente se o caracter anterior nao for um numero) - retorna o numero | false
            if(!$isNum) {
                $numeroEncontrado = $Regras->VerificaNumero($caracter, $next);
            }

            // Se sim, vai pro proximo caracter
            if(is_numeric($numeroEncontrado) && !$isNum)
            {
                $isNum = true;

                if($next == '.' || $caracter == '-') {
                    continue;
                }

            }

            // Se encontrou um numero no caracter anterior, verifica se int ou real
            if($isNum) {
                // com ponto - REAL
                if($caracter == '.') {
                    if($next != '0') {
                        $vall = intval($next);

                        if($vall == 0) {
                            $tokens[] = [
                                'arquivo' => $arquivo,
                                'numero' => '',
                                'valor' =>$numeroEncontrado . $caracter . $next,
                                'linha' => $linha,
                                'msg' => "ERRO: numero REAL incorreto."
                            ];
                            $numeroEncontrado = 0;
                            $isNum = false;

                            continue;
                        }
                    }

                    $valor =  $numeroEncontrado . $caracter . $next;

                    $res = $Regras->VerificaReal($valor);

                    $isReal = true;
                } else {
                    // sem ponto - INTEIRO
                    $res = $Regras->VerificaInteger($numeroEncontrado);
                }

                if($res) {
                    $numero = $padroes[$res];
                    $valorFim = $res;

                    /*if($numeroEncontrado < 0) {
                        $negativo = true;
                    }*/


                    $isNum = false;
                    $numeroEncontrado = 0;


                    $tokens[] = [
                        'arquivo' => $arquivo,
                        'numero' => $numero,
                        'valor' =>$valorFim,
                        'linha' => $linha,
                        'msg' => ''
                    ];
                } else {
                    $tokens[] = [
                        'arquivo' => $arquivo,
                        'numero' => '',
                        'valor' =>$valor ?? $numeroEncontrado,
                        'linha' => $linha,
                        'msg' => "ERRO: numero de caracteres excede o permitido!"
                    ];
                }
                continue;
            }



            // percorrer padroes se não estiver dentro de um char ou string
            if(!($abreString || $abreChar)) {
                foreach ($padroes as $padrao => $numero) {

                    if($padrao == $caracter) {
                        $encontrado = true;

                        $tokens[] = [
                            'arquivo' => $arquivo,
                            'numero' => $numero,
                            'valor' =>$caracter,
                            'linha' => $linha,
                            'msg' => ''
                        ];
                        break;
                    }
                }
            }


            // se nao achou, ve se é string ou identificador
            if((!$encontrado) || ($abreString || $abreChar)) {
                /** TRATATIVA DE CHAR */
                if($caracter == "'") {
                    if($abreChar) {
                        $abreChar = false;
                        continue;
                    }

                    $abreChar = true;
                    continue;
                }

                if($abreChar) {
                    $res = $Regras->VerificaChar($caracter);

                    if($res) {
                        $numero = $padroes[$res];
                        $valorFim = $res;

                        $tokens[] = [
                            'arquivo' => $arquivo,
                            'numero' => $numero,
                            'valor' =>$valorFim,
                            'linha' => $linha,
                            'msg' => ''
                        ];
                    } else {
                        $tokens[] = [
                            'arquivo' => $arquivo,
                            'numero' => '',
                            'valor' => $caracter,
                            'linha' => $linha,
                            'msg' => "ERRO: numero de caracteres excede o permitido! Use aspas duplas para strings!"
                        ];
                    }
                    continue;
                }

                /** TRATATIVA STRING */
                if($caracter == '"') {
                    if($abreString) {
                        $abreString = false;
                        continue;
                    }

                    $abreString = true;
                    continue;
                }

                if($abreString) {
                    $numero = $padroes['nomestring'];
                    $valorFim = 'nomestring';

                    $tokens[] = [
                        'arquivo' => $arquivo,
                        'numero' => $numero,
                        'valor' =>$valorFim,
                        'linha' => $linha,
                        'msg' => ''
                    ];

                    continue;
                }

                $numero = $padroes['identificador'];
                $valorFim = 'identificador';

                $tokens[] = [
                    'arquivo' => $arquivo,
                    'numero' => $numero,
                    'valor' =>$valorFim,
                    'linha' => $linha,
                    'msg' => ''
                ];

                $posicao++;
            }
        }

        // sintatico
        $lex = [];

        for($j = 0; $j < count($tokens); $j++) {
            $lex[] = $tokens[$j]['numero'];
        }

        print_r(implode(" ",$lex));

        $sin = new Sintatico();

        $sin->VerificaSintatico($lex);

        $lex = [];
        $tokens = [];
    }

<?php

require_once "nao_terminais.php";
require_once "terminais.php";
require_once "TabParsing.php";

class Sintatico
{
    /**
     * @param array $token
     * @return void
     */
    public function VerificaSintatico(array $tokens)
    {
        $tab = new TabParsing();

        // topo da pilha
        $pilha = [81];

        // empilhar primeira produção
        $pilha = array_merge($tab->producoes[0], $pilha);

        print_r("\n" .implode(" ",$pilha) ."\n");

        $posPilha = 0;
        $posToken = 0;

        $valorAtual = $pilha[$posPilha];
        $tok = $tokens[$posToken];

        while($valorAtual != 81) // enquanto a pilha n estiver vazia
        {
            print_r("\nToken atual da producao: " . $valorAtual);
            print_r("\nToken atual do lexico: " . $tok);

            if($valorAtual == 17) { // vazio
                //array_shift($pilha);

                $valorAtual = $pilha[0];
            } elseif($valorAtual <= 52) { // um terminal
                if($valorAtual == $tok) { // deu match
                    array_shift($pilha);
                    array_shift($tokens);;

                    $valorAtual = $pilha[0];

                    if(count($tokens) > 0) {
                        $tok = $tokens[0];
                    }
                } else {
                    print_r("\n\nError\n\n");
                    break;
                }
            } else { // um nao terminal
                array_shift($pilha);

                if($tab->tabParsing[$valorAtual][$tok] == 0) {
                    print_r("\n\nError sintatico\n\n");
                    break;
                }

                $topo = array_merge($tab->producoes[$tab->tabParsing[$valorAtual][$tok] - 1], $pilha);

                if($topo[0] == 17) { // vazio
                    $valorAtual = $topo[0];
                } else {

                    $pilha = array_merge($tab->producoes[$tab->tabParsing[$valorAtual][$tok] - 1], $pilha);

                    $valorAtual = $pilha[0];
                    //break;
                }
            }

            print_r("\nPilha:" . implode(" ",$pilha));
            print_r("\n Entrada: " . implode(" ",$tokens));
        }

        print_r("\n\n FIM \n\n");
    }
}




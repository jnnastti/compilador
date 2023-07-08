<?php

class TabParsing
{
    public $tabParsing = array();
    public $producoes = array();

    public function __construct()
    {
        $this->tabParsing = array_fill(0, 82, array_fill(0, 54, 0));

        $this->tabParsing[53][9] = 1;
        $this->tabParsing[53][10] = 1;
        $this->tabParsing[54][10] = 2;
        $this->tabParsing[54][21] = 2;
        $this->tabParsing[54][22] = 2;
        $this->tabParsing[54][23] = 2;
        $this->tabParsing[54][26] = 2; #fix
        $this->tabParsing[54][46] = 2;
        $this->tabParsing[54][47] = 2;
        $this->tabParsing[55][10] = 23;
        $this->tabParsing[55][11] = 23;
        $this->tabParsing[55][23] = 24;
        $this->tabParsing[55][22] = 24;
        $this->tabParsing[55][21] = 24;
        $this->tabParsing[55][26] = 24;
        $this->tabParsing[55][27] = 24;
        $this->tabParsing[55][46] = 24;
        $this->tabParsing[55][47] = 24;
        $this->tabParsing[56][21] = 4;
        $this->tabParsing[56][22] = 4;
        $this->tabParsing[56][23] = 3;
        $this->tabParsing[56][26] = 4;
        $this->tabParsing[56][27] = 3;
        $this->tabParsing[56][28] = 3;
        $this->tabParsing[56][30] = 4;
        $this->tabParsing[56][46] = 4;
        $this->tabParsing[56][47] = 4;
        $this->tabParsing[57][5] = 8;
        $this->tabParsing[57][7] = 8;
        $this->tabParsing[57][18] = 8;
        $this->tabParsing[57][22] = 7;
        $this->tabParsing[57][26] = 8; #fix
        $this->tabParsing[57][27] = 7;
        $this->tabParsing[57][28] = 8;
        $this->tabParsing[57][30] = 8;
        $this->tabParsing[57][31] = 8;
        $this->tabParsing[58][26] = 27;
        $this->tabParsing[58][30] = 27;
        $this->tabParsing[58][31] = 27;
        $this->tabParsing[59][5] = 21;
        $this->tabParsing[59][6] = 21;
        $this->tabParsing[59][7] = 22;
        $this->tabParsing[59][8] = 22;
        $this->tabParsing[59][14] = 19;
        $this->tabParsing[59][18] = 19;
        $this->tabParsing[59][19] = 19;
        $this->tabParsing[59][24] = 20;
        $this->tabParsing[59][27] = 14;
        $this->tabParsing[59][28] = 20;
        $this->tabParsing[59][29] = 20;
        $this->tabParsing[59][31] = 14;
        $this->tabParsing[59][32] = 14;
        $this->tabParsing[59][37] = 14;
        $this->tabParsing[60][16] = 5;
        $this->tabParsing[60][20] = 5;
        $this->tabParsing[60][21] = 6;
        $this->tabParsing[60][22] = 7;
        $this->tabParsing[60][26] = 6;
        $this->tabParsing[60][30] = 6;
        $this->tabParsing[60][46] = 6;
        $this->tabParsing[60][47] = 6;
        $this->tabParsing[61][16] = 9;
        $this->tabParsing[61][20] = 9;
        $this->tabParsing[61][21] = 9;
        $this->tabParsing[62][5] = 13;
        $this->tabParsing[62][7] = 13;
        $this->tabParsing[62][18] = 13;
        $this->tabParsing[62][20] = 12;
        $this->tabParsing[62][21] = 12;
        $this->tabParsing[62][26] = 13;
        $this->tabParsing[62][28] = 13;
        $this->tabParsing[62][30] = 13;
        $this->tabParsing[62][31] = 13;
        $this->tabParsing[62][49] = 13;
        $this->tabParsing[62][50] = 13;
        $this->tabParsing[63][43] = 11;
        $this->tabParsing[63][44] = 11;
        $this->tabParsing[63][47] = 10;
        $this->tabParsing[63][48] = 10;
        $this->tabParsing[63][49] = 11;
        $this->tabParsing[63][50] = 11;
        $this->tabParsing[64][5] = 17;
        $this->tabParsing[64][6] = 17;
        $this->tabParsing[64][7] = 18;
        $this->tabParsing[64][8] = 18;
        $this->tabParsing[64][14] = 15;
        $this->tabParsing[64][18] = 15;
        $this->tabParsing[64][19] = 15;
        $this->tabParsing[64][24] = 16;
        $this->tabParsing[64][28] = 16;
        $this->tabParsing[64][29] = 16;
        $this->tabParsing[65][21] = 26;
        $this->tabParsing[65][26] = 26;
        $this->tabParsing[65][27] = 26;
        $this->tabParsing[65][30] = 26;
        $this->tabParsing[65][46] = 26;
        $this->tabParsing[65][47] = 26;
        $this->tabParsing[65][50] = 25;
        $this->tabParsing[65][51] = 25;
        $this->tabParsing[66][0] = 35;
        $this->tabParsing[66][1] = 31;
        $this->tabParsing[66][2] = 37;
        $this->tabParsing[66][3] = 37;
        $this->tabParsing[66][6] = 32;
        $this->tabParsing[66][7] = 32;
        $this->tabParsing[66][8] = 33;
        $this->tabParsing[66][9] = 33;
        $this->tabParsing[66][15] = 30;
        $this->tabParsing[66][16] = 5;
        $this->tabParsing[66][18] = 36;
        $this->tabParsing[66][19] = 37;
        $this->tabParsing[66][20] = 30;
        $this->tabParsing[66][22] = 36;
        $this->tabParsing[66][23] = 37;
        $this->tabParsing[66][24] = 37;
        $this->tabParsing[66][25] = 34;
        $this->tabParsing[66][29] = 34;
        $this->tabParsing[66][30] = 34;
        $this->tabParsing[66][42] = 37;
        $this->tabParsing[66][43] = 37;
        $this->tabParsing[67][0] = 28;
        $this->tabParsing[67][1] = 28;
        $this->tabParsing[67][6] = 28;
        $this->tabParsing[67][8] = 28;
        $this->tabParsing[67][19] = 29;
        $this->tabParsing[67][21] = 28;
        $this->tabParsing[67][22] = 28;
        $this->tabParsing[67][23] = 29;
        $this->tabParsing[67][24] = 29;
        $this->tabParsing[67][25] = 29;
        $this->tabParsing[67][29] = 28;
        $this->tabParsing[68][11] = 44;
        $this->tabParsing[68][13] = 44;
        $this->tabParsing[68][14] = 44;
        $this->tabParsing[68][15] = 44;
        $this->tabParsing[68][16] = 44;
        $this->tabParsing[68][20] = 44;
        $this->tabParsing[68][21] = 44;
        $this->tabParsing[68][36] = 45;
        $this->tabParsing[68][37] = 45;
        $this->tabParsing[68][39] = 44;
        $this->tabParsing[68][50] = 44;
        $this->tabParsing[68][52] = 44;
        $this->tabParsing[69][2] = 71;
        $this->tabParsing[69][3] = 71;
        $this->tabParsing[69][19] = 71;
        $this->tabParsing[69][20] = 70;
        $this->tabParsing[69][23] = 71;
        $this->tabParsing[69][24] = 71;
        $this->tabParsing[69][25] = 70;
        $this->tabParsing[69][42] = 71;
        $this->tabParsing[69][43] = 71;
        $this->tabParsing[70][16] = 72;
        $this->tabParsing[70][20] = 72;
        $this->tabParsing[70][21] = 72;
        $this->tabParsing[71][2] = 74;
        $this->tabParsing[71][3] = 74;
        $this->tabParsing[71][23] = 74;
        $this->tabParsing[71][24] = 74;
        $this->tabParsing[71][42] = 74;
        $this->tabParsing[71][43] = 74;
        $this->tabParsing[71][47] = 73;
        $this->tabParsing[71][49] = 74;
        $this->tabParsing[71][50] = 74;
        $this->tabParsing[71][51] = 38;
        $this->tabParsing[72][2] = 39;
        $this->tabParsing[72][3] = 39;
        $this->tabParsing[72][13] = 39;
        $this->tabParsing[72][14] = 39;
        $this->tabParsing[72][15] = 39;
        $this->tabParsing[72][16] = 39;
        $this->tabParsing[72][17] = 40;
        $this->tabParsing[72][18] = 40;
        $this->tabParsing[72][19] = 39;
        $this->tabParsing[72][20] = 39;
        $this->tabParsing[72][21] = 41;
        $this->tabParsing[72][23] = 39;
        $this->tabParsing[72][24] = 39;
        $this->tabParsing[72][42] = 39;
        $this->tabParsing[72][43] = 39;
        $this->tabParsing[72][47] = 39;
        $this->tabParsing[72][49] = 39;
        $this->tabParsing[72][50] = 39;
        $this->tabParsing[73][13] = 41;
        $this->tabParsing[73][14] = 41;
        $this->tabParsing[73][15] = 41;
        $this->tabParsing[73][16] = 41;
        $this->tabParsing[73][20] = 41;
        $this->tabParsing[73][37] = 46;
        $this->tabParsing[73][47] = 42;
        $this->tabParsing[73][48] = 42;
        $this->tabParsing[73][49] = 43;
        $this->tabParsing[73][50] = 41;
        $this->tabParsing[74][2] = 43;
        $this->tabParsing[74][3] = 43;
        $this->tabParsing[74][11] = 43;
        $this->tabParsing[74][13] = 43;
        $this->tabParsing[74][14] = 43;
        $this->tabParsing[74][15] = 43;
        $this->tabParsing[74][16] = 47;
        $this->tabParsing[74][20] = 43;
        $this->tabParsing[74][21] = 43;
        $this->tabParsing[74][23] = 43;
        $this->tabParsing[74][24] = 43;
        $this->tabParsing[74][32] = 45;
        $this->tabParsing[74][33] = 43;
        $this->tabParsing[74][34] = 43;
        $this->tabParsing[74][35] = 62;//43;
        $this->tabParsing[74][36] = 43;
        $this->tabParsing[74][37] = 43;
        $this->tabParsing[74][38] = 43;
        $this->tabParsing[74][39] = 43;
        $this->tabParsing[74][40] = 43;
        $this->tabParsing[74][41] = 43;
        $this->tabParsing[74][42] = 43;
        $this->tabParsing[74][43] = 43;
        $this->tabParsing[74][44] = 45;
        $this->tabParsing[74][47] = 43;
        $this->tabParsing[74][48] = 45;
        $this->tabParsing[74][49] = 43;
        $this->tabParsing[74][50] = 43;
        $this->tabParsing[74][52] = 43;
        $this->tabParsing[75][2] = 65;
        $this->tabParsing[75][3] = 65;
        $this->tabParsing[75][11] = 64;
        $this->tabParsing[75][12] = 64;
        $this->tabParsing[75][13] = 65;
        $this->tabParsing[75][14] = 65;
        $this->tabParsing[75][15] = 65;
        $this->tabParsing[75][16] = 65;
        $this->tabParsing[75][20] = 65;
        $this->tabParsing[75][21] = 45;
        $this->tabParsing[75][23] = 65;
        $this->tabParsing[75][24] = 65;
        $this->tabParsing[75][32] = 45;
        $this->tabParsing[75][33] = 65;
        $this->tabParsing[75][34] = 65;
        $this->tabParsing[75][35] = 65;
        $this->tabParsing[75][36] = 65;
        $this->tabParsing[75][37] = 46;
        $this->tabParsing[75][38] = 65;
        $this->tabParsing[75][39] = 62;
        $this->tabParsing[75][40] = 65;
        $this->tabParsing[75][41] = 65;
        $this->tabParsing[75][42] = 65;
        $this->tabParsing[75][43] = 65;
        $this->tabParsing[75][44] = 45;
        $this->tabParsing[75][47] = 65;
        $this->tabParsing[75][48] = 45;
        $this->tabParsing[75][49] = 65;
        $this->tabParsing[75][50] = 65;
        $this->tabParsing[75][52] = 63;
        $this->tabParsing[76][2] = 65;
        $this->tabParsing[76][3] = 65;
        $this->tabParsing[76][11] = 65;
        $this->tabParsing[76][13] = 65;
        $this->tabParsing[76][14] = 65;
        $this->tabParsing[76][15] = 65;
        $this->tabParsing[76][16] = 65;
        $this->tabParsing[76][20] = 65;
        $this->tabParsing[76][21] = 65;
        $this->tabParsing[76][23] = 65;
        $this->tabParsing[76][24] = 65;
        $this->tabParsing[76][32] = 65;
        $this->tabParsing[76][33] = 65;
        $this->tabParsing[76][34] = 65;
        $this->tabParsing[76][35] = 65;
        $this->tabParsing[76][36] = 65;
        $this->tabParsing[76][37] = 65;
        $this->tabParsing[76][38] = 65;
        $this->tabParsing[76][39] = 65;
        $this->tabParsing[76][40] = 65;
        $this->tabParsing[76][41] = 65;
        $this->tabParsing[76][42] = 65;
        $this->tabParsing[76][43] = 65;
        $this->tabParsing[76][44] = 65;
        $this->tabParsing[76][47] = 65;
        $this->tabParsing[76][48] = 65;
        $this->tabParsing[76][49] = 65;
        $this->tabParsing[76][50] = 65;
        $this->tabParsing[76][52] = 65;
        $this->tabParsing[77][2] = 58;
        $this->tabParsing[77][3] = 58;
        $this->tabParsing[77][11] = 58;
        $this->tabParsing[77][13] = 58;
        $this->tabParsing[77][14] = 58;
        $this->tabParsing[77][15] = 58;
        $this->tabParsing[77][16] = 58;
        $this->tabParsing[77][17] = 49;
        $this->tabParsing[77][20] = 58;
        $this->tabParsing[77][21] = 58;
        $this->tabParsing[77][23] = 58;
        $this->tabParsing[77][24] = 58;
        $this->tabParsing[77][29] = 55;
        $this->tabParsing[77][30] = 54;
        $this->tabParsing[77][31] = 52;
        $this->tabParsing[77][32] = 58;
        $this->tabParsing[77][33] = 58;
        $this->tabParsing[77][34] = 58;
        $this->tabParsing[77][35] = 58;
        $this->tabParsing[77][36] = 58;
        $this->tabParsing[77][37] = 58;
        $this->tabParsing[77][38] = 58;
        $this->tabParsing[77][39] = 58;
        $this->tabParsing[77][40] = 58;
        $this->tabParsing[77][41] = 58;
        $this->tabParsing[77][42] = 58;
        $this->tabParsing[77][43] = 58;
        $this->tabParsing[77][44] = 58;
        $this->tabParsing[77][47] = 58;
        $this->tabParsing[77][48] = 58;
        $this->tabParsing[77][49] = 58;
        $this->tabParsing[77][50] = 58;
        $this->tabParsing[77][51] = 51;
        $this->tabParsing[77][52] = 58;
        $this->tabParsing[78][2] = 69;
        $this->tabParsing[78][3] = 69;
        $this->tabParsing[78][11] = 69;
        $this->tabParsing[78][13] = 69;
        $this->tabParsing[78][14] = 69;
        $this->tabParsing[78][15] = 69;
        $this->tabParsing[78][16] = 47;
        $this->tabParsing[78][20] = 69;
        $this->tabParsing[78][21] = 69;
        $this->tabParsing[78][23] = 69;
        $this->tabParsing[78][24] = 69;
        $this->tabParsing[78][32] = 68;
        $this->tabParsing[78][33] = 69;
        $this->tabParsing[78][34] = 69;
        $this->tabParsing[78][35] = 69;
        $this->tabParsing[78][36] = 50;
        $this->tabParsing[78][37] = 46;
        $this->tabParsing[78][38] = 48;
        $this->tabParsing[78][39] = 49;
        $this->tabParsing[78][40] = 69;
        $this->tabParsing[78][41] = 69;
        $this->tabParsing[78][42] = 69;
        $this->tabParsing[78][43] = 69;
        $this->tabParsing[78][44] = 67;
        $this->tabParsing[78][45] = 67;
        $this->tabParsing[78][47] = 69;
        $this->tabParsing[78][48] = 66;
        $this->tabParsing[78][49] = 69;
        $this->tabParsing[78][50] = 51;
        $this->tabParsing[78][52] = 69;
        $this->tabParsing[79][2] = 69;
        $this->tabParsing[79][3] = 69;
        $this->tabParsing[79][11] = 61;
        $this->tabParsing[79][13] = 69;
        $this->tabParsing[79][14] = 69;
        $this->tabParsing[79][15] = 69;
        $this->tabParsing[79][16] = 69;
        $this->tabParsing[79][20] = 69;
        $this->tabParsing[79][21] = 69;
        $this->tabParsing[79][23] = 69;
        $this->tabParsing[79][24] = 69;
        $this->tabParsing[79][28] = 68;
        $this->tabParsing[79][30] = 54;
        $this->tabParsing[79][33] = 69;
        $this->tabParsing[79][34] = 69;
        $this->tabParsing[79][35] = 69;
        $this->tabParsing[79][36] = 69;
        $this->tabParsing[79][37] = 69;
        $this->tabParsing[79][38] = 69;
        $this->tabParsing[79][39] = 59;
        $this->tabParsing[79][40] = 69;
        $this->tabParsing[79][41] = 69;
        $this->tabParsing[79][42] = 69;
        $this->tabParsing[79][43] = 69;
        $this->tabParsing[79][44] = 67;
        $this->tabParsing[79][47] = 69;
        $this->tabParsing[79][48] = 66;
        $this->tabParsing[79][49] = 69;
        $this->tabParsing[79][50] = 69;
        $this->tabParsing[79][52] = 60;
        $this->tabParsing[80][11] = 61;
        $this->tabParsing[80][21] = 61;
        $this->tabParsing[80][35] = 59;
        $this->tabParsing[80][37] = 46;
        $this->tabParsing[80][39] = 61;
        $this->tabParsing[80][52] = 61;

        $this->producoes = array(
            array(9,16,42,54,46),//P1
            array(55,56,57,58),//P2
            array(23,16,31,59,42,60),//P3
            array(17),//P4
            array(16,31,59,42,60),//P5
            array(17),//P6
            array(22,61,43,59,42,62),//P7
            array(17),//P8
            array(16,63),//P9
            array(47,16,63),//P10
            array(17),//P11
            array(61,43,59,42,62),//P12
            array(17),//P13
            array(27,41,37,45,37,40,12,64),//P14
            array(14),//P15
            array(24),//P16
            array(5),//P17
            array(7),//P18
            array(14),//P19
            array(24),//P20
            array(5),//P21
            array(7),//P22
            array(10,16,65,57,58,42,55),//P23
            array(17),//P24
            array(50,61,43,59,42,62,49),//P25
            array(17),//P26
            array(26,66,42,67,19),//P27
            array(66,42,67),//P28
            array(17),//P29
            array(15,41,68,40,4,26,66,19,69),//P30
            array(1,41,68,40,21,26,66,19),//P31
            array(6,66,2,41,68,40),//P32
            array(8,50,70,49),//P33
            array(25,16,72),//P34
            array(0,50,73,74,49),//P35
            array(18,41,16,31,68,40,3,41,68,40,21,26,66,19),//P36
            array(17),//P37
            array(50,61,49),//P38
            array(17),//P39
            array(13),//P40
            array(68),//P41
            array(47,73,74),//P42
            array(17),//P43
            array(75,76,77),//P44
            array(78,79),//P45
            array(37),//P46
            array(16),//P47
            array(38),//P48
            array(39),//P49
            array(36),//P50
            array(50,68,49),//P51
            array(31,80),//P52
            array(34,80),//P53
            array(30,80),//P54
            array(29,80),//P55
            array(33,80),//P56
            array(32,80),//P57
            array(17),//P58
            array(35,75,76),//P59
            array(52,75,76),//P60
            array(75,76),//P61
            array(35,75,76),//P62
            array(52,75,76),//P63
            array(11,75,76),//P64
            array(17),//P65
            array(48,78,79),//P66
            array(44,78,79),//P67
            array(28,78,79),//P68
            array(17),//P69
            array(20,26,66,19),//P70
            array(17),//P71
            array(16,71),//P72
            array(47,16,71),//P73
            array(17)//P74
        );

    }
    public function getProducao($producao) {
        $producao = $producao - 1;
        $simbolos = array();

        for ($i = 0; $i < count($this->producoes[$producao]); $i++) {
            if ($this->producoes[$producao][$i] != 0) {
                array_push($simbolos, $this->producoes[$producao][$i]);
            } else {
                break;
            }
        }

        return $simbolos;
    }

    public function printTabParsing() {
        for ($i = 0; $i < count($this->tabParsing); $i++) {
            for ($j = 0; $j < count($this->tabParsing[$i]); $j++) {
                echo $this->tabParsing[$i][$j] . "\t";
            }
            echo "\n";
        }
    }
}

?>
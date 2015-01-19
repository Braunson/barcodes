<?php
namespace tklovett\barcodes\barcodes;


use tklovett\barcodes\OneDimensionalBarcode;

/**
 * Code 93 (USS-93)
 * Compact code similar to Code 39
 * @package tklovett\barcodes\barcodes
 * @author dinesh
 * @author tklovett <tklovett@gmail.com>
 */
class Code93 extends OneDimensionalBarcode
{
    /**
     * Construct a Code 93 barcode array
     * @param string $code The code to be represented by this barcode.
     */
    function __construct($code)
    {
        $chr[48] = '131112'; // 0
        $chr[49] = '111213'; // 1
        $chr[50] = '111312'; // 2
        $chr[51] = '111411'; // 3
        $chr[52] = '121113'; // 4
        $chr[53] = '121212'; // 5
        $chr[54] = '121311'; // 6
        $chr[55] = '111114'; // 7
        $chr[56] = '131211'; // 8
        $chr[57] = '141111'; // 9
        $chr[65] = '211113'; // A
        $chr[66] = '211212'; // B
        $chr[67] = '211311'; // C
        $chr[68] = '221112'; // D
        $chr[69] = '221211'; // E
        $chr[70] = '231111'; // F
        $chr[71] = '112113'; // G
        $chr[72] = '112212'; // H
        $chr[73] = '112311'; // I
        $chr[74] = '122112'; // J
        $chr[75] = '132111'; // K
        $chr[76] = '111123'; // L
        $chr[77] = '111222'; // M
        $chr[78] = '111321'; // N
        $chr[79] = '121122'; // O
        $chr[80] = '131121'; // P
        $chr[81] = '212112'; // Q
        $chr[82] = '212211'; // R
        $chr[83] = '211122'; // S
        $chr[84] = '211221'; // T
        $chr[85] = '221121'; // U
        $chr[86] = '222111'; // V
        $chr[87] = '112122'; // W
        $chr[88] = '112221'; // X
        $chr[89] = '122121'; // Y
        $chr[90] = '123111'; // Z
        $chr[45] = '121131'; // -
        $chr[46] = '311112'; // .
        $chr[32] = '311211'; //
        $chr[36] = '321111'; // $
        $chr[47] = '112131'; // /
        $chr[43] = '113121'; // +
        $chr[37] = '211131'; // %
        $chr[128] = '121221'; // ($)
        $chr[129] = '311121'; // (/)
        $chr[130] = '122211'; // (+)
        $chr[131] = '312111'; // (%)
        $chr[42] = '111141'; // start-stop
        $code = strtoupper($code);
        $encode = array(
            chr(0) => chr(131) . 'U', chr(1) => chr(128) . 'A', chr(2) => chr(128) . 'B', chr(3) => chr(128) . 'C',
            chr(4) => chr(128) . 'D', chr(5) => chr(128) . 'E', chr(6) => chr(128) . 'F', chr(7) => chr(128) . 'G',
            chr(8) => chr(128) . 'H', chr(9) => chr(128) . 'I', chr(10) => chr(128) . 'J', chr(11) => '£K',
            chr(12) => chr(128) . 'L', chr(13) => chr(128) . 'M', chr(14) => chr(128) . 'N', chr(15) => chr(128) . 'O',
            chr(16) => chr(128) . 'P', chr(17) => chr(128) . 'Q', chr(18) => chr(128) . 'R', chr(19) => chr(128) . 'S',
            chr(20) => chr(128) . 'T', chr(21) => chr(128) . 'U', chr(22) => chr(128) . 'V', chr(23) => chr(128) . 'W',
            chr(24) => chr(128) . 'X', chr(25) => chr(128) . 'Y', chr(26) => chr(128) . 'Z', chr(27) => chr(131) . 'A',
            chr(28) => chr(131) . 'B', chr(29) => chr(131) . 'C', chr(30) => chr(131) . 'D', chr(31) => chr(131) . 'E',
            chr(32) => ' ', chr(33) => chr(129) . 'A', chr(34) => chr(129) . 'B', chr(35) => chr(129) . 'C',
            chr(36) => chr(129) . 'D', chr(37) => chr(129) . 'E', chr(38) => chr(129) . 'F', chr(39) => chr(129) . 'G',
            chr(40) => chr(129) . 'H', chr(41) => chr(129) . 'I', chr(42) => chr(129) . 'J', chr(43) => chr(129) . 'K',
            chr(44) => chr(129) . 'L', chr(45) => '-', chr(46) => '.', chr(47) => chr(129) . 'O',
            chr(48) => '0', chr(49) => '1', chr(50) => '2', chr(51) => '3',
            chr(52) => '4', chr(53) => '5', chr(54) => '6', chr(55) => '7',
            chr(56) => '8', chr(57) => '9', chr(58) => chr(129) . 'Z', chr(59) => chr(131) . 'F',
            chr(60) => chr(131) . 'G', chr(61) => chr(131) . 'H', chr(62) => chr(131) . 'I', chr(63) => chr(131) . 'J',
            chr(64) => chr(131) . 'V', chr(65) => 'A', chr(66) => 'B', chr(67) => 'C',
            chr(68) => 'D', chr(69) => 'E', chr(70) => 'F', chr(71) => 'G',
            chr(72) => 'H', chr(73) => 'I', chr(74) => 'J', chr(75) => 'K',
            chr(76) => 'L', chr(77) => 'M', chr(78) => 'N', chr(79) => 'O',
            chr(80) => 'P', chr(81) => 'Q', chr(82) => 'R', chr(83) => 'S',
            chr(84) => 'T', chr(85) => 'U', chr(86) => 'V', chr(87) => 'W',
            chr(88) => 'X', chr(89) => 'Y', chr(90) => 'Z', chr(91) => chr(131) . 'K',
            chr(92) => chr(131) . 'L', chr(93) => chr(131) . 'M', chr(94) => chr(131) . 'N', chr(95) => chr(131) . 'O',
            chr(96) => chr(131) . 'W', chr(97) => chr(130) . 'A', chr(98) => chr(130) . 'B', chr(99) => chr(130) . 'C',
            chr(100) => chr(130) . 'D', chr(101) => chr(130) . 'E', chr(102) => chr(130) . 'F', chr(103) => chr(130) . 'G',
            chr(104) => chr(130) . 'H', chr(105) => chr(130) . 'I', chr(106) => chr(130) . 'J', chr(107) => chr(130) . 'K',
            chr(108) => chr(130) . 'L', chr(109) => chr(130) . 'M', chr(110) => chr(130) . 'N', chr(111) => chr(130) . 'O',
            chr(112) => chr(130) . 'P', chr(113) => chr(130) . 'Q', chr(114) => chr(130) . 'R', chr(115) => chr(130) . 'S',
            chr(116) => chr(130) . 'T', chr(117) => chr(130) . 'U', chr(118) => chr(130) . 'V', chr(119) => chr(130) . 'W',
            chr(120) => chr(130) . 'X', chr(121) => chr(130) . 'Y', chr(122) => chr(130) . 'Z', chr(123) => chr(131) . 'P',
            chr(124) => chr(131) . 'Q', chr(125) => chr(131) . 'R', chr(126) => chr(131) . 'S', chr(127) => chr(131) . 'T');
        $code_ext = '';
        $clen = strlen($code);
        for ($i = 0; $i < $clen; ++$i) {
            if (ord($code{$i}) > 127) {
                return;
            }
            $code_ext .= $encode[$code{$i}];
        }
        // checksum
        $code_ext .= $this->calculateCheckDigit($code_ext);
        // add start and stop codes
        $code = '*' . $code_ext . '*';
        $this->barcode_array = array('code' => $code, 'maxw' => 0, 'maxh' => 1, 'bcode' => array());
        $k = 0;
        $clen = strlen($code);
        for ($i = 0; $i < $clen; ++$i) {
            $char = ord($code{$i});
            if (!isset($chr[$char])) {
                // invalid character
                return;
            }
            for ($j = 0; $j < 6; ++$j) {
                if (($j % 2) == 0) {
                    $t = true; // bar
                } else {
                    $t = false; // space
                }
                $w = $chr[$char]{$j};
                $this->barcode_array['bcode'][$k] = array('t' => $t, 'w' => $w, 'h' => 1, 'p' => 0);
                $this->barcode_array['maxw'] += $w;
                ++$k;
            }
        }
        $this->barcode_array['bcode'][$k] = array('t' => true, 'w' => 1, 'h' => 1, 'p' => 0);
        $this->barcode_array['maxw'] += 1;
    }

    /**
     * Calculate Code 93 check digit (modulo 47).
     * @param string $code The code to be represented by this barcode.
     * @return string The check digit for this code.
     */
    protected function calculateCheckDigit($code)
    {
        $chars = array(
            '0', '1', '2', '3', '4', '5', '6', '7', '8', '9',
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K',
            'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V',
            'W', 'X', 'Y', 'Z', '-', '.', ' ', '$', '/', '+', '%',
            '<', '=', '>', '?');
        // translate special characters
        $code = strtr($code, chr(128) . chr(131) . chr(129) . chr(130), '<=>?');
        $len = strlen($code);
        // calculate check digit C
        $p = 1;
        $check = 0;
        for ($i = ($len - 1); $i >= 0; --$i) {
            $k = array_keys($chars, $code{$i});
            $check += ($k[0] * $p);
            ++$p;
            if ($p > 20) {
                $p = 1;
            }
        }
        $check %= 47;
        $c = $chars[$check];
        $code .= $c;
        // calculate check digit K
        $p = 1;
        $check = 0;
        for ($i = $len; $i >= 0; --$i) {
            $k = array_keys($chars, $code{$i});
            $check += ($k[0] * $p);
            ++$p;
            if ($p > 15) {
                $p = 1;
            }
        }
        $check %= 47;
        $k = $chars[$check];
        $checksum = $c . $k;
        // resto respecial characters
        $checksum = strtr($checksum, '<=>?', chr(128) . chr(131) . chr(129) . chr(130));
        return $checksum;
    }
}
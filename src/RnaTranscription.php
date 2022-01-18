<?php

namespace App;


class RnaTranscription{

    private $dnaToRnaConversion = [];

    function __construct(){
        $this->dnaToRnaConversion = array(
            'G' => 'C',
            'C' => 'G',
            'T' => 'A',
            'A' => 'U',
        );
    }

    public function convert($dna){
        $rna = '';
        $dnaArray = str_split($dna);

        foreach($dnaArray as $dnaElement){
            $rna .= $this->dnaToRnaConversion[$dnaElement];
        }
        return $rna;
    }

}
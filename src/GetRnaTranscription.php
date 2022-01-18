<?php

namespace App;
use App\RnaTranscription;

class GetRnaTranscription{

    function toRna($dna){
        $dnaToRna = new RnaTranscription();
        return $dnaToRna->convert($dna);
    }
}
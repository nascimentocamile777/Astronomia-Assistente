<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class AstronomyAssistant extends Component
{
    public function render()
    {
        return view('livewire.astronomy-assistant');
    }


    public function askAI()
    {
        try {
            $resposta = Http::timeout(0)->post('http://localhost:11434/api/chat', [
                'model' => 'llama3.2',
                'stream' => false,
                'keep_alive' => 0,
                'messages' => [
                    (object)[
                        'role' => 'system',
                        'content' => 'Você é um especialista em astronomia',
                    ],
                    (object)[
                        'role' => 'user',
                        'content' => $this->question,
                    ]
                ]
            ]);

            return $resposta->json();
        } catch (\Exception $e) {
            return $this->errorMessage = 'Erro ao conectar com a API. Tente novamente mais tarde.';
        }
    }

    public $question;
    public $response;
    public $errorMessage;

    public function askQuestion()
    {
        if ($this->question) {
            try {
                // Faz a requisição para o Controller
                $resposta = $this->askAI();

                if (!is_array($resposta)) {
                    $this->errorMessage = $resposta;
                    return;
                }

                $this->response = $resposta['message']['content'] ?: "Sem resposta";
            } catch (\Exception $e) {
                $this->errorMessage = 'Erro: ' . $e->getMessage();
            }
        } else {
            $this->errorMessage = 'Por favor, digite uma pergunta.';
        }
        return;
    }


}

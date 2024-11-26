<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AstronomyController extends Controller
{
    public function testApi()
    {
        // Configuração da URL e chave de autorização
        $url = 'https://api-inference.huggingface.co/models/meta-llama/Llama-3.2-3B-Instruct/v1/chat/completions';
        $apiKey = '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';

        // Dados enviados para a API
        $data = [
            "model" => "meta-llama/Llama-3.2-3B-Instruct",
            "messages" => [
                ["role" => "user", "content" => "Você é um especialista em astronomia"],
                ["role" => "assistant", "content" => "Olá, sou uma assistente de astronomia"],
            ],
            "temperature" => 0.5,
            "max_tokens" => 2048,
            "top_p" => 0.7,
            "stream" => true,
        ];

        try {
            // Fazendo a requisição HTTP com Guzzle
            $response = Http::withHeaders([
                'Authorization' => "Bearer $apiKey",
                'Content-Type' => 'application/json',
            ])->post($url, $data);

            // Converte a resposta JSON para um array
            $result = $response->json();

            // Retorna a resposta
            return response()->json($result);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Erro ao conectar com a API',
                'message' => $e->getMessage(),
            ]);
        }
    }
}

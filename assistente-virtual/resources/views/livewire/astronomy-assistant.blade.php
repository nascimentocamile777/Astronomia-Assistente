<div class="container">
    <h2>AstronoMIA <img src="{{ asset('images/Designer.jpg') }}" alt="Imagem de Astronomia"></h2>
    <p>Olá, sou a Mia, sua Assistente Virtual. Fique à vontade para realizar perguntas sobre o cosmos.</p>

    <!-- Formulário para envio da pergunta -->
    <form wire:submit="askQuestion">
        <input type="text" wire:model="question" placeholder="Digite sua pergunta" required>
        <button type="submit">Enviar</button>
    </form>
    @if($response)
        <div class="response">
            <h4>Resposta:</h4>
            <p>{{ $response }}</p>
        </div>
    @endif
    @if($errorMessage)
        <div class="response">
            <h4>Erro:</h4>
            <p>{{ $errorMessage }}</p>
        </div>
    @endif
</div>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roleta</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        .container {
            text-align: center;
            position: relative;
        }

        .roleta {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            border: 10px solid #333;
            position: relative;
            background: conic-gradient(
                #ff0000 0% 8.33%, 
                #00ff00 8.33% 16.66%, 
                #0000ff 16.66% 25%, 
                #ffff00 25% 33.33%, 
                #ff00ff 33.33% 41.66%, 
                #00ffff 41.66% 50%, 
                #ff0000 50% 58.33%, 
                #00ff00 58.33% 66.66%, 
                #0000ff 66.66% 75%, 
                #ffff00 75% 83.33%, 
                #ff00ff 83.33% 91.66%, 
                #00ffff 91.66% 100%
            );
            margin: 20px auto;
            transform-origin: center;
        }

        .seta {
            width: 0;
            height: 0;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-top: 30px solid #333; /* Alterado para border-top para a seta apontar para baixo */
            position: absolute;
            bottom: 100%; /* Move a seta para cima da roleta */
            left: 50%;
            transform: translateX(-50%);
            z-index: 1; /* Garante que a seta esteja sobre a roleta */
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="seta"></div>
        <div class="roleta" id="roleta"></div>
        <button onclick="girarRoleta()">Girar Roleta</button>
    </div>
    <script>
        function girarRoleta() {
            const roleta = document.getElementById('roleta');
            const angulo = Math.floor(Math.random() * 360);
            roleta.style.transition = 'transform 4s ease-out';
            roleta.style.transform = `rotate(${angulo + 3600}deg)`; // Adiciona rotação extra para suavizar o movimento
        }
    </script>
</body>
</html>

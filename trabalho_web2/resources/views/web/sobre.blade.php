<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Barbearia do J</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            background-color: #ffffff;
        }

        .container {
            flex: 1;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: black;
            padding: 14px 14px;
        }

        .header nav a {
            text-decoration: none;
            font-family: cursive;
            color: white;
            font-size: 18px;
            margin: 0 10px;
        }
        .header form button {
            border: 2px solid white;
            background-color: black;
            color: white;
            border-radius: 8px;
            font-family: cursive;
        }

        .logo {
            display: block;
            margin: 30px auto 0;
            width: 500px;
            height: 160px;
            border-radius: 8px;
        }

        .barber {
            display: block;
            margin: 50px auto;
            border-radius: 10%;
            width: 80%;
            max-width: 800px;
            height: auto;
        }

        .localizao {
            text-align: center;
            margin: 20px auto;
            font-size: 22px;
            color: antiquewhite;
            background-color: black;
            padding: 10px;
            width: 57%;
        }

        .nossa-historia {
            margin: 30px auto;
            max-width: 600px;
            font-size: 38px;
            font-family: fantasy;
            color: black;
            text-align: center;
        }

        .descricao {
            font-size: 20px;
            width: 80%;
            max-width: 600px;
            margin: 0 auto 50px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
<header class="header">
    <nav>
        <a href="{{route('home')}}">HOME</a>
        <a href="https://web.whatsapp.com/">CONTATO</a>
        <a href="https://www.google.com/maps/place/Av.+Min.+Laudo+Ferreira+de+Camargo,+305+-+Jardim+Peri+Peri,+S%C3%A3o+Paulo+-+SP,+05537-001/@-23.5871867,-46.7370914,17z/data=!3m1!4b1!4m6!3m5!1s0x94ce5688954562ff:0x5063903892bee447!8m2!3d-23.5871867!4d-46.7370914!16s%2Fg%2F11fx2wjwd9?entry=ttu">LOCALIZAÇÃO</a>
    </nav>
    <form action="{{route('login')}}">
        <button style="background-color: black; font-size: 15px" class="btn btn" type="submit">ENTRE OU CADASTRE-SE</button>
    </form>
</header>
<div class="container">
    <img class="logo" src="img/Imagens/logo.png">
    <p style="margin-left: 40%; font-family: 'Arial Black'; margin-top: 6%; font-size: 34px">Nosso espaço</p>
    <img class="barber" src="img/Imagens/foto_barbearia.jpg" alt="fala fellas">
    <p class="localizao">Av. Min. Laudo Ferreira de Camargo, 305 - Jardim Peri Peri, São Paulo - SP</p>
    <p class="nossa-historia">Nossa história</p>
    <p class="descricao">
        Situada em um bairro animado de São Paulo, a Barbearia Retrovisor é muito mais do que um simples local para cortar o cabelo e fazer a barba. Desde sua abertura em 2015, a Retrovisor conquistou o coração dos moradores da região com sua abordagem única e atmosfera acolhedora. Recebendo o reconhecimento como a melhor barbearia da cidade de São Paulo por três anos consecutivos pelo site "Os 05 Melhores", a Retrovisor orgulha-se de sua reputação de excelência e compromisso com seus clientes.
        Inspirada nas barbearias clássicas dos anos 1940, o ambiente da Retrovisor é um verdadeiro mergulho na nostalgia. Cadeiras de couro confortáveis, espelhos ornamentados e detalhes vintage dão ao espaço uma sensação autêntica e acolhedora. A equipe de barbeiros, com anos de experiência, não apenas domina sua arte, mas também cria um ambiente descontraído, onde os clientes se sentem em casa desde o momento em que entram.
        Na Retrovisor, cada visita é uma jornada no tempo, combinando o melhor do passado com um toque de modernidade, tudo em um ambiente acolhedor e familiar que cativa os sentidos e a imaginação.
    </p>
</div>
</body>
</html>
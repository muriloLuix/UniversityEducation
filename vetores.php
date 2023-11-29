<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/vetores.css">
    <link rel="shortcut icon" href="favicon-32x32.png" type="image/x-icon">
    <title>Entendendo Vetores</title>
</head>
<body>
    <header>
        <h1>Vetores em PHP</h1>
    </header>
    <main>
        <h2>Explicação sobre os vetores</h2>
        <p><span>&mdash;</span>Vetores em <strong>PHP</strong> são estruturas de dados que permitem armazenar múltiplos valores em uma única <strong>variável</strong>. Eles podem conter uma série de elementos, como <strong>números</strong>, <strong>textos</strong> e até mesmo outras <strong>coleções de dados</strong>. Esses vetores são flexíveis e podem ser acessados por índices, onde cada elemento possui uma posição específica dentro do vetor.<br>
        <span>&mdash;</span>Um vetor em PHP começa com índice zero para o primeiro elemento, índice um para o segundo e assim por diante. Eles podem ser criados usando a função <strong>array()</strong> ou a sintaxe de <strong>colchetes []</strong>. Isso permite que os programadores armazenem e manipulem conjuntos de informações de maneira conveniente.
        <span>&mdash;</span>Além disso, vetores em PHP podem conter diferentes tipos de dados, o que significa que um único vetor pode incluir <strong>números</strong>, <strong>textos</strong>, <strong>booleanos</strong> e até outros vetores. Isso oferece uma grande flexibilidade ao lidar com informações complexas.<br>
        <span>&mdash;</span>Operações comuns realizadas em vetores incluem <strong>adição de novos elementos</strong>, <strong>remoção de elementos existentes</strong>, <strong>ordenação dos elementos</strong>, <strong>iteração por meio de loops (for, foreach)</strong> para acessar e manipular os elementos individualmente, entre outras operações. Esses recursos tornam os vetores em PHP ferramentas essenciais para lidar com conjuntos de dados em aplicações web e diversos tipos de programas.</p>
        <div class="container">
            <div class="general">
                <h2>Exemplo de um Vetor em PHP</h2>
                <p>Um exemplo prático de utilização de vetores em PHP</p>
                <?php
                $frutas = array("Maçã", "Banana", "Laranja", "Morango", "Abacate", "Limão");
                echo "<p>Elementos do vetor de frutas:</p>";
                foreach ($frutas as $fruta) {
                    echo "<li>$fruta</li>";
                }
                ?>
                <p>Se você olhou o exemplo anterior e ainda está meio perdido sobre como usar vetores em PHP, sem problemas! Tirei um print do código pra te ajudar. Mesmo assim não conseguiu entender? Relaxa, eu te explico o que cada parte tá fazendo!</p>
                <div class="whats">
                    <?php
                    $img = 'imgs/imgwhats.jpg';
                    ?>
                    <img src="<?php echo $img ?>" alt="">
                </div>
                <div class="paragraf">
                        <p>- Criei uma <strong>&ltdiv&gt</strong> com uma <strong>class</strong> com o nome de <strong>General</strong> e uma tag <strong>&lth2&gt</strong> </p>
                        <p>- Para começar a parte de PHP abri uma <strong>&lt?php;</strong></p>
                        <p>-<strong> $frutas = array("Maçã", "Banana", "Laranja", "Morango")</strong>: Aqui é criado um vetor chamado <strong>$frutas</strong> com quatro elementos: Maçã, Banana, Laranja e Morango. Em PHP, os vetores podem ser criados usando a função <strong>array()</strong>.</p>
                        <p>- <strong>foreach ($frutas as $fruta) { ... }</strong>: O loop <strong>foreach</strong> é usado para percorrer todos os elementos do vetor <strong>$frutas</strong>. Em cada iteração, o valor do elemento atual é armazenado na variável $fruta.</p>
                        <p> - <strong>echo "&ltli>$fruta&lt/li&gt"</strong>: Dentro do loop <strong>foreach</strong>, isso imprime cada elemento do vetor <strong>$frutas</strong> como um item de lista HTML (&ltli&gt...&lt/li&gt). Ou seja, cada fruta é exibida como um item em uma lista.</p>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
                <strong>
                    <p>Made With <span>&hearts;</span> by<a target="_blank" href="https://github.com/muriloLuix"><em>@muriloLuix</em></a></p>
                </strong>
            </footer>
</body>
</html>
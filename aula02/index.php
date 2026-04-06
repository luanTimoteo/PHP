<body>
    <?php 
        //para declarar variavel usar $ e nome da variavel
        $var_a="Ola, eu sou uma variavel";
        echo $var_a;
        
        //para quebra de linha usar o <br>, o \n funciona no terminal
        echo "<br>";
       
        //o comando echo serve para exibição de texto no PHP igual o printf
        echo "Exibição de texto no PHP";
        echo "<br>";
        
        //aqui usei a mesma variavel porem ela pode mudar no meio do algoritmo
        $var_a="ola, prazer eu tambem sou uma variavel";
        echo $var_a;
        echo "<br>";
        
        //constante um dado armazenado que não pode ser alterado
        define("constante_a",16);
        echo constante_a;
        echo "<br>";
        
        //vetores armazenam varios dados de todos os tipos
        $linguagens=array("aqui vai um texto", "Junto de outro texto", "com esse tambem");
        //esse comando var_dump exibe o tipo de variavel com varias informações
        //var_dump($linguagens);

        //aqui eu vou escolher qual posição exibir do vetor
        echo $linguagens[1];
        echo "<br>";
        //assim é uma outra forma de exibir um vetor
        $linguagens_2=["PHP", "Node", "Python", 18, 19.5];
        var_dump($linguagens_2);
        echo "<br>";

        //podemos dar nome para as posições dos vetores tbm
        $filmes=["Cinderela"=>2002,"Aladim"=>"teste"];
        echo $filmes["Aladim"];
        echo "<br>";

        //matriz é um vetor onde possui um vetor dentro do outro
        $arr=[
            1 => [
                11 => [
                'teste111',
                'teste112'
                ],
                12 => 'teste12'
            ],
            2 => 'teste2',
            3 => 'teste3'
        ];
        echo $arr[1][11][0];
        echo '<br>';

        //comando hr no html serve para fazer uma linha
        echo '<hr/>';
        //exemplo usando matriz/array multidimensional
        $clientes=[
            [
                'nome' => 'Luan',
                'endereco' => 'Rua Marechal, 356',
                'telefones' => [
                    'residencial' => '2222-2222',
                    'celular' => '9999-9999'
                ]
            ],

            [
                'nome' => 'Cebola',
                'endereco' => 'Rua Francisco, 1',
                'telefones' => [
                    'residencial' => '7171-7171',
                    'celular' => '4242-4242'
                ]
            ]
        ];
        echo $clientes [0] ['nome'];
        echo '<br>';
        echo $clientes [0] ['telefones'] ['celular'];
    ?>
</body>

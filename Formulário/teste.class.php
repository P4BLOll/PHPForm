 <?php

        require_once("pessoa.class.php");

        class Teste{
            private $pessoa;

            public function __construct(){
                $pessoa = new Pessoa();

                $pessoa->setNome($_POST['nome']);
                echo "<strong>Nome:  </strong>".$pessoa->getNome();
                echo "<br>";

                $pessoa->setTelefone($_POST['tel']);
                echo "<strong>Telefone:  </strong>".$pessoa->getTelefone();
                echo "<br>";

                $pessoa->setOrigem($_POST['origem']);
                echo "<strong>Origem:  </strong>".$pessoa->getOrigem();
                echo "<br>";

                $pessoa->setData($_POST['data']);
                echo "<strong>Data:  </strong>".$pessoa->getData();
                echo "<br>";

                $pessoa->setObsevacao($_POST['obser']);
                echo "<strong>Observação:  </strong>".$pessoa->getObsevacao();
                echo "<br>";

            }

        }new Teste();


        ?>
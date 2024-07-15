<?php
class Cachorro{
    private $nascimento;
    public function __construct(string $nome){
        $this->nome = $nome;
    }
    public function __tostring(){
        return $this->nome;
    }
    public function __set($propriedade, $valor){
        if($propriedade == 'nascimento'){
            if(count(explode('/', $valor)) == 3){
                echo "Dados {$valor}, atribuido à {$propriedade}.<br>";
                $this->$propriedade = $valor;
            }else{
                echo "Dados {$valor}, não atribuido à {$propriedade}.<br>";
            }
        }else{
            $this->$propriedade = $valor;
        }
    }
}
?>
<h3>fornecedor</h3>

@php
    /*
   if(empty($variavel)) {} //retornar true se a variável estiver vazia(Verifica se varivel está vazia)
   situações em que uma variavel é considerada vazia
   - ''
   - 0
   - 0.0
   - '0'
   - null
   - false
   - array()
   - $var
   */
@endphp

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dado não foi preenchido' }}
    <!--
        $variável testada não estiver definida (isset)
        ou
        $variável testada possuir o valor null
    -->
@endisset
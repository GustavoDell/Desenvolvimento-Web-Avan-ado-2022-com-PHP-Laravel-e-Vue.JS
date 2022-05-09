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
    @foreach ( $fornecedores as $indice => $fornecedor )
        Fornecedor: {{  $fornecedor['nome'] }}
        <br>
        Status: {{  $fornecedor['status'] }}
        <br>
        CNPJ: {{  $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
        <br>
        Telefone: ({{  $fornecedor['ddd'] ?? '' }}) {{  $fornecedor['telefone'] ?? '' }}
        <hr>
    @endforeach
@endisset
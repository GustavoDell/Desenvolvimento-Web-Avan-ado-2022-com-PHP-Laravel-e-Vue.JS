<h3>fornecedor</h3>

@php
    /*
   if(isset($variavel)) {} //retornar true se a variável estiver definidade(Verifica se varivel existe ou não)
   */
@endphp

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset( $fornecedores[0]['cnpj'] )
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
    @endisset
@endisset
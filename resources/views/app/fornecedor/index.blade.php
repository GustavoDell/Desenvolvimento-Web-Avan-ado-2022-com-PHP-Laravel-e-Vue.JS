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
    @for($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido' }}
        <br>
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[$i]['telefone'] ?? '' }}
        <hr>
    @endfor
@endisset
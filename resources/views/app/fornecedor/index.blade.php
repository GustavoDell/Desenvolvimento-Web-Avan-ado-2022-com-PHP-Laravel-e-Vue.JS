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
    Fornecedor: {{ $fornecedores[2]['nome'] }}
    <br>
    Status: {{ $fornecedores[2]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[2]['cnpj'] ?? 'Dado não foi preenchido' }}
    <br>
    Telefone: ({{ $fornecedores[2]['ddd'] ?? '' }}) {{ $fornecedores[2]['telefone'] ?? '' }}
    @switch($fornecedores[2]['ddd'])
        @case ('11')
            São Paulo - SP
            @break
        @case ('32')
            Juiz de Fora - MG
            @break
        @case ('85')
            Fortaleza - CE
            @break
        @default
            Estado não indentificado
    @endswitch
@endisset
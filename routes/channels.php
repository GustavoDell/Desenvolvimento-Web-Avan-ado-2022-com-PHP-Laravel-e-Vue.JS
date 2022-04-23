<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

/*
|
| O channels.php serve para definicao de rotas de comunicacao broadcast, 
| esse tipo de recurso serve para comunicacao em tempo real, atraves do uso 
| de tecnologias como websockets diferente do metodo tradicional ou seja uma 
| aplicacao frontend faz uma requisicao para o servidor fornecer uma resposta esse 
| tipo de comunicacao segue o canal oposto, ou seja permite que aplicacao servidora 
| notifique os clientes de atualizacoes do lado do backend possibilitando ao frontend 
| renderizar automaticamente essas mudancas que foram notificadas pelo servidor 
| dando a ideia de tempo real 
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, "main.gustavoweb.me", "sender@gustavoweb.me". "teste@123", "tls", '587', "gustavo@gustavoweb.me", "Equipe GustavoWeb");
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um email de <b>teste</b></p>", "gustavo@gustavoweb.me", "Gustavo Web", "gustavo@upinside.com.br", "Gustavo");


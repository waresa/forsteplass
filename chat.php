<?php

session_start();

$username = $_SESSION['username'];

if (!isset($_SESSION['username'])) {
    header("Location: sign-in.php");
    exit();
}

include 'assets/header.php';
include 'assets/classes/logs.php';

require_once __DIR__ . '/vendor/autoload.php';


$client = OpenAI::client('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');
$logs = new Logs();


if (isset($_POST['submit'])) {
    $input = $_POST['chat'];
    $result = $client->completions()->create([
        'model' => 'text-davinci-003',
        'prompt' =>  '
                  You are customer service chatbot for Forsteplass.no. Ansewr only questions a customer service agent would ansewr. Our email: post@forsteplass.no. Question: ' . $input,
        'max_tokens' => 500,
        'temperature' => 0,
    ]);
    $response = $result['choices'][0]['text'];

    $logs->insertMessages($username, "assistant", $input);
    $logs->insertMessages("assistant", $username, $response);
}


?>

<div class="--dark-theme" id="chat">
    <div class="chat__conversation-board">
        <?php $logs->retrieveMessages($username); ?>
    </div>
</div>
<form action="chat.php" method="POST">
    <div class="chat__conversation-panel">
        <div class="chat__conversation-panel__container">

            <input class="chat__conversation-panel__input panel-item" placeholder="Spør noe..." name="chat" />
            <button class="chat__conversation-panel__button panel-item btn-icon send-message-button" name="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" data-reactid="1036">
                    <line x1="22" y1="2" x2="11" y2="13"></line>
                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                </svg>
            </button>
            <!-- a tag that is used to clear chat -->
            <a href="clear.php" class="chat__conversation-panel__button panel-item btn-icon clear-chat-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" data-reactid="1036">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
        </div>
    </div>
</form>
<!-- delete button -->



<?php
include('assets/footer.php');
?>
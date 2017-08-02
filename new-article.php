<?php
header ('Content-Type: text/plain');
if (empty($_POST['title']) || empty($_POST['article'])) {
http_response_code(400);
echo 'missing required parameter';
exit(1);
}
echo $_POST['title'] . ' ' . $_POST['article'];

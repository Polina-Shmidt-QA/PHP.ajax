<?php
$date = [
    "title" => $_POST['title'],
    "content" => $_POST['content']
];

$connection = new PDO('mysql:host=localhost;dbname=ajaxkurs', 'root', '');

$sql = 'INSERT INTO `posts` (`title`, `content`) VALUES ( :title , :content) ';

$statment = $connection->prepare($sql);

$result = $statment->execute($date);

?>


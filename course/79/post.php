<?php
/**
 * Simple Comment Post System
 *
 * @author Fray117
 */

$comment['name'] = $_POST['name'];
$comment['text'] = $_POST['comment'];
$comment['post'] = $_POST['article'];

$object = json_decode(file_get_contents('comment.json'), true);

$key = sizeof($object[$comment['post']]);

$object[$comment['post']][$key]['name'] = $comment['name'];
$object[$comment['post']][$key]['comment'] = $comment['text'];

file_put_contents('comment.json', json_encode($object));

header('Location: .', true, 301);

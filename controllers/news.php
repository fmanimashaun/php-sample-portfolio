<?php

$title = 'News | PHP Sample Portfolio';
  $currentPage = 'news';
  view('news', [
    'title' => $title,
    'currentPage' => $currentPage
  ]);
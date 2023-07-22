<?php

$title = 'Home | PHP Sample Portfolio';
  $currentPage = 'home';
  view('index', [
    'title' => $title,
    'currentPage' => $currentPage
  ]);
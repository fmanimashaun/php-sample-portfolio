<?php

$title = 'About | PHP Sample Portfolio';
  $currentPage = 'about';
  view('about', [
    'title' => $title,
    'currentPage' => $currentPage
  ]);
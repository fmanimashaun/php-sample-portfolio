<?php

$title = 'Portfolio | PHP Sample Portfolio';
  $currentPage = 'portfolio';
  view('portfolio', [
    'title' => $title,
    'currentPage' => $currentPage
  ]);
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
  >
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
      <?= isset($site_title) ? $site_title . ':: ' : ''; ?>
      <?= \Settings\SITE_LABEL ?>
  </title>
  <link href="/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<main>
  <h1><?= Settings\SITE_LABEL ?></h1>
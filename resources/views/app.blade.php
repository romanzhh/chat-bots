<html lang="ru">

<head>
  <title>Разработка чат-ботов в индивидуальном порядке | Заказать чат-бот для бизнеса</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="Предлагаем качесвенную разработку чат-бота для вашего бизнеса. Создаем ботов в индивдуальном порядке под каждого клиента не на конструкторе с персональным сохранением данных.">

  <link rel="stylesheet" href="css/app.css">
  <link rel="shortcut icon" href="images/fav.png">

  <!-- Bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Google tag (gtag.js) -->
  @include('scripts.google-analytics')

  <!-- Yandex.Metrika counter -->
  @include('scripts.yandex-metrika')

  <!-- Bootstrap scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

  <!-- jQuery scripts -->
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
</head>

<body>
  @include('components.header')
  @include('components.body')
  @include('components.footer')

  @include('scripts.forms.validation')
  @include('scripts.forms.phone-mask')
  @include('scripts.forms.submition')
</body>

</html>
<a name="main">
  <div class="main vh-90 d-flex justify-content-center" style="margin: 3rem;">
    <div class="main_child d-flex flex-column justify-content-center gap-3" style="margin: 3rem 0 0 3rem;animation:1s ease-out 0s 1 slideInLeft">
      <h1 class="h1 fw-medium">Разработка чат-ботов<br> под заказ</h1>
      <div class="baner_text" style="width: 65%;">
        <p class="fw-normal" style="font-size: 24px">Мы предлагаем разработку чат-ботов, которые помогут сократить время и затраты на обслуживание
          клиентов, улучшить уровень сервиса.
        </p>
        <button type="button" class="w-100 btn btn-danger btn-lg h4 mt-2" data-bs-toggle="modal" data-bs-target="#formModal">
          Заказать
        </button>
      </div>
      @include('components.contents.modal')
    </div>
    <div class="d-flex align-items-center me-5">
      <img class="img" src="images/main.png" alt="Чат бот здоровается" style="width: 35vw; animation: 1s ease-out 0s 1 slideInRight; z-index:0">
    </div>
  </div>
</a>
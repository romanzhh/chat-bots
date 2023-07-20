<a name="main">
  <div class="main vh-90 d-flex justify-content-center mt-5" style="margin-left:3rem;margin-right:3rem">
    <div class="main_child d-flex flex-column justify-content-center gap-3 mt-5" style="margin-left:3rem;animation:1s ease-out 0s 1 slideInLeft">
      <p class="h1 fw-medium">Создание чат-ботов любой сложности<br> под заказ</p>
      <div class="baner_text" style="width: 65%;">
        <p class="h4 fw-normal">Мы предлагаем разработку чат-ботов на заказ, которые помогут Вам сократить время и затраты на обслуживание
          клиентов,
          улучшить уровень сервиса и повысить удовлетворенность клиентов
        </p>
        <button type="button" class="w-100 btn btn-danger btn-lg h4 mt-2" data-bs-toggle="modal" data-bs-target="#formModal">
          Заказать
        </button>
      </div>
      @include('components.contents.modal')
    </div>
    <div class="d-flex align-items-center me-5">
      <img class="img" src="images/main.png" alt="Чат бот здоровается" style="width: 36vw; animation: 1s ease-out 0s 1 slideInRight">
    </div>
  </div>
</a>
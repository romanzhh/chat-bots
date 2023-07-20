<script>
  function submitForm() {
    const form = document.mainForm
    if (form.checkValidity()) {
      fetch('/createRequest', {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        body: new FormData(form)
      }).then(() => {
        $('#formModal').modal('hide')
        $('#successModal').modal('show')
      })
    }
  }

  const formModal = document.querySelector('#formModal')
  formModal.addEventListener('hidden.bs.modal', event => {
    const form = document.querySelector('.needs-validation')

    form.classList.remove('was-validated')
  })

  formModal.addEventListener('shown.bs.modal', () => {
    document.body.style.overflow = 'visible';
  })
</script>
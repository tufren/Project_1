const burger = document.querySelector('.burger input')
const nav = document.querySelector('nav ul')

burger.addEventListener('click', function () {
  nav.classList.toggle('slide')
})



$('#search-input').on('keyup', (e) => {
  if (e.keyCode === 13) {
    $.ajax({
      URL: 'https://omdbapi.com',
      TYPE: 'GET',
      DATATYPE: 'JSON',
      DATA: {
        'KEY': 'e32131f5',
        'S': $('#search-input').val()
      },
      SUCCESS: (result) => {
        console.log(result)
      }
    })
  }
})
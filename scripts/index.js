function stopScroll() {
  document.body.classList.toggle("body_stopscroll");
  let modal = document.getElementById('modal')
  modal.classList.toggle('show_modal')
}

function stopScrollLogin() {
  document.body.classList.toggle("body_stopscroll");
  let modal = document.getElementById('modal2')
  modal.classList.toggle('show_modal')
}
function stopScroll() {
  document.body.classList.toggle("body_stopscroll");
  let modal = document.getElementById('modal')
  modal.classList.toggle('show_modal')
}
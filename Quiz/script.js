<script>
var modal = document.getElementById('Modal');

var modalBtn = document.getElementsByClassName('btn_instruction');

var closeBtn = document.getElementsByClassName('closeBtn')[0];

modalBtn.addEventListener('click', openModal);
closeBtn.addEventListener('click', closeModal);
window.addEventListener('click', outsideClick);

function openModal() {
  modal.style.display = 'block';
}

function closeModal() {
  modal.style.display = 'none';
}

function outsideClick(e) {
  if(e.target == modal) {
  modal.style.display = 'none';
}
}
</script>

const AbrirModal = document.querySelector('.btnCobrar');
const Modal = document.querySelector('.Modal_Form'); 
const CerrarModal = document.querySelector('#BtnCancel');

AbrirModal.addEventListener('click',(e)=>{
    e.preventDefault();
    Modal.classList.add("Modal_Form--show");
});

CerrarModal.addEventListener('click',(e)=>{
    e.preventDefault();
    Modal.classList.remove("Modal_Form--show");
});
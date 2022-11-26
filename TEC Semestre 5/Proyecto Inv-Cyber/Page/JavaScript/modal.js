//Variables Modal Cobrar
const AbrirModal = document.querySelector('.btnCobrar');
const Modal = document.querySelector('.Modal_Form'); 
const CerrarModal = document.querySelector('#BtnCancel');

//Variables Modal Productos
const AbrirModalPro = document.querySelector('#BtnProductos');
const ModalPro = document.querySelector('.ModalForm_P'); 
const CerrarModalPro = document.querySelector('#BtnCerrar_P');

//Variables Modal Notificación
const ModalNoti = document.querySelector('.Noti_Form');
const CerrarNoti = document.querySelector('#N_Cerrar');
const AbrirNoti = document.querySelector('#BTNNOTIFICACION');

const Refresh = document.querySelector('#BtnCheckIn');


//Evento click Botones COBRAR
AbrirModal.addEventListener('click',(e)=>{
    e.preventDefault();
    Modal.classList.add("Modal_Form--show");
});

CerrarModal.addEventListener('click',(e)=>{
    e.preventDefault();
    Modal.classList.remove("Modal_Form--show");
});


//Evento click Botones PRODUCTOS
AbrirModalPro.addEventListener('click',(e)=>{
    e.preventDefault();
    ModalPro.classList.add("ModalForm_P--show");
});

CerrarModalPro.addEventListener('click',(e)=>{
    e.preventDefault();
    ModalPro.classList.remove("ModalForm_P--show");
});

//Evento Abrir Notificación
AbrirNoti.addEventListener('click',(e)=>{
    e.preventDefault();
    ModalNoti.classList.add("Noti_Form--show");
});

CerrarNoti.addEventListener('click',(e)=>{
    e.preventDefault();
    ModalNoti.classList.remove("Noti_Form--show");
});

//Refrescar Pagina
Refresh.addEventListener('click',function(){
    location.reload();
},5000);
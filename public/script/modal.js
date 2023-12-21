const MODAL = document.querySelector('.modal');
const MODAL_CONTENT = document.querySelector('.modal-content')
const TRIGGER_CARD = document.querySelector('.trigger');

export const showModal = () => {
  TRIGGER_CARD.addEventListener('click', () => {
    MODAL.classList.add('open')
  })

  MODAL.addEventListener('click', (event) => {
    if(!event.composedPath().includes(MODAL_CONTENT)) {
      MODAL.classList.remove('open')
    }
  })
}
 const navbar = document.querySelector(".navbar");
 const logoLight = document.querySelector(".logo-light");
 const logo = document.querySelector(".logo");
 const mMenuToggle = document.querySelector(".mobile-menu-toggle");
 const menu = document.querySelector(".mobile-menu");
 const isFront = document.body.classList.contains("active");
 
const lightModeOn = (event) =>{
 navbar.classList.add("navbar-light");
}
const lightModeOff = (event) =>{
 navbar.classList.remove("navbar-light");
};
 
const changeNavHeight = (height) =>{
  navbar.style.height = height;
}

const openMenu = (event) =>{ //функция открывания меню
  menu.classList.add("is-open"); //вешает класс is-open
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow="hidden" // запрещаем прокрутку сайта
  lightModeOn();
 };
 
 const closeMenu = (event) =>{ //функция закрывания меню
  menu.classList.remove("is-open"); //убирает класс is-open
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow="" // возвращает прокрутку сайта
  lightModeOff();
 };
 
 window.addEventListener("scroll", () =>{
    this.scrollY > 1 ? changeNavHeight("4.5rem") : changeNavHeight("5.875rem");
    if (isFront){
      this.scrollY > 1 ? lightModeOn() : lightModeOff();
    }
  });
  
  mMenuToggle.addEventListener("click", (event) => {
    event.preventDefault();
    menu.classList.contains('is-open') ? closeMenu() : openMenu()
  });

  const swiper = new Swiper(".swiper", {
    speed: 400, 
    autoHeight:true,
    slidesPerView: 1,
    navigation:{
      nextEl: '.slider-button-next',
      prevEl: '.slider-button-prev',
    },
    breakpoints: {
      // when window width is >= 576px
      576: {
        slidesPerView: 2,
      },
      // when window width is >= 768px
      768: {
        slidesPerView: 3,
      },
      // when window width is >= 1024px
      1024: {
        slidesPerView: 4,

      },
       // when window width is >= 1200px
       1200: {
        slidesPerView: 5,
      }
    }
  });

  const swiperSteps = new Swiper(".swiper-steps", {
    speed: 400, 
    autoHeight:true,
    slidesPerView: 1,
    navigation:{
      nextEl: '.slider-steps-button-next',
      prevEl: '.slider-steps-button-prev',
    },
    breakpoints: {
      // when window width is >= 576px
      576: {
        slidesPerView: 2,
      },
      // when window width is >= 768px
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 4,
      },
       // when window width is >= 1200px
       1200: {
        slidesPerView: 4,
      }
    }
  });

  const swiperBlog = new Swiper(".blog-slider",{
    speed: 400, 
    autoHeight:true,
    spaceBetween:30,
    slidesPerView: 2,
    navigation:{
      nextEl: '.blog-button-next',
      prevEl: '.blog-button-prev',
    },
  });

  let currentModal; //текущее модальное окно
  let modalDialog; // белое диалоговое окно
  let alertModal = document.querySelector("#alert-modal"); //окно с благодарностью

  const modalButtons = document.querySelectorAll("[data-toggle=modal]") //находим все кнопки для модальных окон
  modalButtons.forEach((button) => {
    button.addEventListener("click", (event) =>{
      event.preventDefault;
      currentModal = document.querySelector(button.dataset.target);
      currentModal.classList.toggle("is-open");
      modalDialog = currentModal.querySelector(".modal-dialog");
      currentModal.addEventListener("click", (event) =>{
        if (!event.composedPath().includes(modalDialog)) {
          currentModal.classList.remove("is-open");
        }
      });
    });
  });

  document.addEventListener('keyup', (event) => {
    if (event.key == 'Escape' && currentModal.classList.contains("is-open")){
      currentModal.classList.toggle("is-open");
    } 
  });
  
  const forms = document.querySelectorAll("form") // собираем формы
  forms.forEach((form) => {
    const validation = new JustValidate(form, {
      errorFieldCssClass: 'is-invalid',
});
validation
.addField("[name=username]", [
  {
    rule: 'required',
    errorMessage: "Укажите поле",
  },
  {
    rule: 'maxLength',
    value: 50,
    errorMessage: "Максимально 50 символов",
  },
])
.addField("[name=userphone]", [
  {
    rule: 'required',
    errorMessage:"Укажите поле",
  },
])
.onSuccess((event) => {
  const thisForm = event.target;
  const formData = new FormData(thisForm);
  const ajaxSend = (formData) => {
    fetch(thisForm.getAttribute("action"), {
      method: thisForm.getAttribute("method"),
      body: formData,
    }) .then((response) => {
      if (response.ok) {
        thisForm.reset();
        currentModal.classList.remove("is-open");
        alertModal.classList.add("is-open");
        currentModal = alertModal;
        modalDialog = currentModal.querySelector(".modal-dialog");
        currentModal.addEventListener("click", (event) =>{
          if (!event.composedPath().includes(modalDialog)) {
            currentModal.classList.remove("is-open");
          }
        });
      } else {
        alert(response.statusText);
      }
    });
  };
  ajaxSend(formData);
});
  });

  const phoneMask = document.getElementById("user-phone");
   IMask (
    phoneMask,
    {
    mask: "+{7} (999) 000-00-00"
    }
  );

  /* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7 (";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7 (";
  }
  /* если пишут девятку, заменяем на +7 (9  */
  if (str === "9") {
    return "7 (9";
  }
  /* в других случаях просто 7 (  */
  return "7 (";
}; /* профикс в любом раскладе будет +7 () */

// ======================================
/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
  /* Проверяем, что это поле имеет класс phone-mask */
  if (e.target.classList.contains("phone-mask")) {
    /* поле с телефоном помещаем в переменную input */
    const input = e.target;
    /* вставляем плюс в начале номера */
    const value = input.value.replace(/\D+/g, "");
    /* длинна номера 11 символов */
    const numberLength = 11;

    /* Создаем переменную, куда будем записывать номер */
    let result;
    /* Если пользователь ввел 8... */
    if (input.value.includes("+8") || input.value[0] === "8") {
      /* Стираем восьмерку */
      result = "";
    } else {
      /* Оставляем плюсик в поле */
      result = "+";
    }

    //
    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          /* в самом начале ставим префикс +7 ( */
          result += prefixNumber(value[i]);
          continue;
        case 4:
          /* добавляем после "+7 (" круглую скобку ")" */
          result += ") ";
          break;
        case 7:
          /* дефис после 7 символа */
          result += "-";
          break;
        case 9:
          /* еще дефис  */
          result += "-";
          break;
        default:
          break;
      }
      /* на каждом шаге цикла добавляем новую цифру к номеру */
      result += value[i];
    }
    /* итог: номер в формате +7 (999) 123-45-67 */
    input.value = result;
  }
});
function showError(container, errorMessage) {
    container.className = 'error';
    var errorMessageElem = document.createElement('span');
    errorMessageElem.className = "error-message";
    errorMessageElem.innerHTML = errorMessage;
    container.appendChild(errorMessageElem);    
  }

  function resetError(container) {
    container.className = '';
    if (container.lastChild.className == "error-message") {
      container.removeChild(container.lastChild);
    }
  }

  function validate(form) {
    var elems = form.elements;        
    
    resetError(elems.nick.parentNode); 
    if (!elems.nick.value) {
      showError(elems.nick.parentNode, 'Укажите имя');
    }else if (/^[a-zа-яё]+$/i.test(elems.nick.value) == false) {
        showError(elems.nick.parentNode, 'В имени могут быть только буквы');
      }

    resetError(elems.phone.parentNode);
    if (!elems.phone.value) {
      showError(elems.phone.parentNode, 'Укажите телефон');
    } else if (/\+7\(\d{3}\)\d{3}-\d{4}$/.test(elems.phone.value) == false) {
        showError(elems.phone.parentNode, 'Неверно указан номер');
      } 

    resetError(elems.email.parentNode);    
    if (!elems.email.value) {
      showError(elems.email.parentNode, 'Укажите e-mail');
    } else if (/^[a-z\-\.]+@[a-z]+\.[a-z]{2,3}$/i.test(elems.email.value) == false) {
      showError(elems.email.parentNode, 'Введите корректный e-mail');
    }

    resetError(elems.adress.parentNode);
    if (!elems.adress.value) {
      showError(elems.adress.parentNode, 'Укажите адрес');
    } else if (/^[\w\W]+$/m.test(elems.adress.value) == false) {
        showError(elems.adress.parentNode, 'Можно ввести произвольный текст');
      }
  }
  
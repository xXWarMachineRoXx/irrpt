const faviconTag = document.getElementById("faviconTag");
const isDark = window.matchMedia("(prefers-color-scheme: dark)");

const changeFavicon = () => {
    if (isDark.matches) faviconTag.href = "./favicon/favicon-light.ico";
    else faviconTag.href = "favicon/favicon.ico";
  };

  changeFavicon()

// modal handling ( verify installation)

// var form = document.getElementById("verify-install-form");
// function handleForm(event) { event.preventDefault(); } 
// form.addEventListener('submit', handleForm);

// function openModal() {
//   const modal_trigger_button= document.getElementById('verify-install-button');
//   modal_trigger_button.click();
//   return false;
// }

// External = {
//   'wow': function() {
//     console.log('Wowsers!');
//   }
// };
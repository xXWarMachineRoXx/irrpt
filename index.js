const faviconTag = document.getElementById("faviconTag");
const isDark = window.matchMedia("(prefers-color-scheme: dark)");

const changeFavicon = () => {
    if (isDark.matches) faviconTag.href = "./favicon/favicon-light.ico";
    else faviconTag.href = "favicon/favicon.ico";
  };

  changeFavicon()
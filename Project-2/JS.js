const menu = document.querySelector(".navigation");
let open = false;

function checkOpenMenu() {
  if (!open) {
    menu.style.animationName = "open";
    open = true;
  } else {
    menu.style.animationName = "close";
    open = false;
  }

  for (let i = 1; i <= 3; i++) {
    if (!open) {
      setTimeout((e) => {
        menu.style.display = "none";
      }, 500);
    } else {
      menu.style.display = "block";
    }
  }
}

function btnOpenMenu() {
  checkOpenMenu();
  if (!open) {
    BtnMenu.style.animationName = "rotateClose";
  } else {
    BtnMenu.style.animationName = "rotateOpen";
  }
}

for (let i = 1; i <= 3; i++) {
  const link = document.createElement("a");
  const sections = document.getElementsByTagName("section");
  link.href = `#${sections[i].id}`;
  link.textContent = sections[i].id;
  link.addEventListener("click", (e) => {
    if (open) {
      btnOpenMenu();
    }
  });
  menu.appendChild(link);
}

const BtnMenu = document.getElementsByClassName("menu-icon")[0];
BtnMenu.addEventListener("click", btnOpenMenu);

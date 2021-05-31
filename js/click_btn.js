var div2 = document.getElementsByClassName("div2");

function handleClick(event) {
  console.log(event.target);
  // console.log(this);
  // 콘솔창을 보면 둘다 동일한 값이 나온다

  console.log(event.target.classList);

  if (event.target.classList[1] === "menu-active") {
    event.target.classList.remove("menu-active");
  } else {
    for (var i = 0; i < div2.length; i++) {
      div2[i].classList.remove("menu-active");
    }

    event.target.classList.add("menu-active");
  }
}

function init() {
  for (var i = 0; i < div2.length; i++) {
    div2[i].addEventListener("menu-active", handleClick);
  }
}

init();
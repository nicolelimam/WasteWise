const btnDarkMode = document.getElementById('btnTheme') //o btnMudarTema é o bntTema das configs
const themeSystem = localStorage.getItem('themeSystem') || 'light' //define o tema claro como tema padrão da página

btnDarkMode.addEventListener('click', () => {
    let oldTheme = localStorage.getItem('themeSystem') || 'light' //o tema padrão é light (claro)
    let newTheme = oldTheme == "light" ? "dark" : "light" //o novo tema vai ser definido, se o tema antigo (old) for light, então vira dark, e se for dark, vira light
    localStorage.setItem('themeSystem',newTheme)
    defineCurrentTheme(newTheme)
})

function defineCurrentTheme(theme){
    //icones do bootstrap icons pra ficar no botão
    const darkSvg = "<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' style='fill: rgba(0, 0, 0, 1);transform: ;msFilter:;'><path d='M12 11.807A9.002 9.002 0 0 1 10.049 2a9.942 9.942 0 0 0-5.12 2.735c-3.905 3.905-3.905 10.237 0 14.142 3.906 3.906 10.237 3.905 14.143 0a9.946 9.946 0 0 0 2.735-5.119A9.003 9.003 0 0 1 12 11.807z'></path></svg>"
    const lightSvg = "<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' style='fill: rgba(255, 255, 255, 1);transform: ;msFilter:;'><path d='M6.995 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007-2.246-5.007-5.007-5.007S6.995 9.239 6.995 12zM11 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2H2zm17 0h3v2h-3zM5.637 19.778l-1.414-1.414 2.121-2.121 1.414 1.414zM16.242 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.344 7.759 4.223 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z'></path></svg>"
    document.documentElement.setAttribute("data-theme", theme)
    //define a sequencia de icones no botão
    if(theme == "light")
    {
        btnDarkMode.innerHTML = darkSvg
        return
    }
    btnDarkMode.innerHTML = lightSvg

    //define a imagem que aparece na tela de cadastro
}

defineCurrentTheme(themeSystem)


//configurando a responsividade da página
let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('bx-x-lg');
    navbar.classList.toggle('open');
}
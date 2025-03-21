function showmega(event) {
    const getmega = document.getElementById('mega-menu');
    const getheader = document.getElementById('header');
    if(event.type === "mouseover"){   
        getmega.classList.add('show')
        getheader.classList.add('mega-menu-shown')
    }
    else if(event.type === "mouseleave"){
        getmega.classList.remove('show')
        
        getheader.classList.remove('mega-menu-shown')
    }
}
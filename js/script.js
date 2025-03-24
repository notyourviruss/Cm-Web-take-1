function showmega(event) {
    const getmega = document.getElementById('mega-menu');
    const getheader = document.getElementById('header');
    const gethitbox = document.getElementById('course-button');
    if(event.type === "mouseover"){   
        getmega.classList.add('show')
        getheader.classList.add('mega-menu-shown')
        gethitbox.classList.add('course-button')
    }
    else if(event.type === "mouseleave"){
        getmega.classList.remove('show')
        getheader.classList.remove('mega-menu-shown')
        gethitbox.classList.remove('course-button')
    }
}

fetch('header.html')
        .then(response => response.text())
        .then(data => document.getElementById('header-placeholder').innerHTML = data)
        .catch(error => console.error('Error loading header:', error));
let contents = document.querySelectorAll('.post-container');
contents.forEach(content => {

    let div = document.createElement('div');
    div.setAttribute('class', 'readmore');
    div.innerHTML = 'Read More';
    if (content.scrollHeight > content.clientHeight) {
        content.parentElement.append(div);
    }
    let readmores = document.querySelectorAll('.readmore');
    readmores.forEach(rm => {
        const textHeight = readmores[0].parentElement.children[0].clientHeight;
        rm.addEventListener('click', function (event) {
            const target = event.target;
            const showHeight = target.parentElement.children[0].scrollHeight;
            if (target.innerHTML == "Read More") {
                target.innerHTML = "Read Less";
                target.parentElement.children[0].style.maxHeight = `${showHeight}px`;
                target.parentElement.children[0].style.transition = "max-height 1s ease-in-out"
            } else if (target.innerHTML == "Read Less") {
                target.innerHTML = "Read More";
                target.parentElement.children[0].style.maxHeight = `${textHeight}px`;
            }
        })
    })
})

const mediaQuery = window.matchMedia("(max-width: 1000px)");
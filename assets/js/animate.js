var textWrapper = document.querySelector('.ml3');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({
        loop: true
    })
    .add({
        targets: '.ml3 .letter',
        opacity: [0, 1],
        easing: "easeInOutQuad",
        duration: 2250,
        delay: (el, i) => 150 * (i + 1)
    }).add({
        targets: '.ml3',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
    });


    const Inputs = {
        inputs: document.getElementsByTagName('input'),

        Render: function () {
            Array.from(this.inputs).forEach(inp => {
                if (inp.type == 'text' || inp.type == 'email' || inp.type == "password") {

                    inp.style.cssText = "font-size:25px;color:#EEEEEE";
                }
            })
        }
    }
    Inputs.Render();




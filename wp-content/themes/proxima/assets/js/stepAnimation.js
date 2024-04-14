import ScrollMagic from "scrollmagic";
import anime from "animejs";

let stepAnimation = function (){
    let verticalSliders = document.querySelectorAll('.vp-steps-block')
    let controller = new ScrollMagic.Controller();

    verticalSliders.forEach(item => {
        let tl2 = anime.timeline({autoplay: false});

        let s2a1 = {
            targets: item.querySelectorAll('.vp-step-slide'),
            translateX: ['50vw', 0],
            opacity: [0, 1],
            duration: 1000,
            easing: 'linear',
            delay: anime.stagger(1000) // increase delay by 100ms for each elements.
        };

        tl2.add(s2a1);

        let scene = new ScrollMagic.Scene({
            triggerElement: item,
            duration: 4500,
            triggerHook: 0,
            reverse: false,
        })
            .on("progress", function (event) {
                if(tl2.children && tl2.children[0] && tl2.children[0].animatables){
                    let end = Math.floor((tl2.progress - 4) / (100/tl2.children[0].animatables.length)) - 1
                    let start = Math.round(tl2.progress / (100/tl2.children[0].animatables.length)) - 1

                    //tl2.children[0].animatables.forEach(item => item.target.classList.remove('active'))
                    if(tl2.children[0].animatables[start]){
                        tl2.children[0].animatables[start].target.classList.add('active')
                    }
                    if(tl2.children[0].animatables[end]){
                        tl2.children[0].animatables[end].target.classList.remove('active')
                        tl2.children[0].animatables[end].target.classList.add('active-end')
                    }
                }

                tl2.seek(tl2.duration * event.progress);

                if(Math.ceil(event.progress*100) >= 100){
                    let padding = parseInt(item.parentNode.style.paddingBottom)
                    if(padding > 0){
                        window.scrollTo(0, window.scrollY - padding)
                    }
                    scene.duration(1)
                }
            })

            .setPin(item)
            .addTo(controller);
    })
}
export default stepAnimation
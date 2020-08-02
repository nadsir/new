gsap.registerPlugin(ScrollTrigger);
gsap.to(".box", {
    scrollTrigger: {
        markers: true,
        trigger:".box",
        scrub:2,
        start: "top center ",
        end:"top 100px"



    }, rotation: 90, x: 200, duration: 1
});
gsap.to(".flexBack2", {
    yPercent: 50,
    ease: "none",
    scrollTrigger: {
        trigger: ".flexBack2",
        // start: "top bottom", // the default values
        // end: "bottom top",
        scrub: true
    },
});

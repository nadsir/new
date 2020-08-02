gsap.registerPlugin(ScrollTrigger);
gsap.to(".box", {
    scrollTrigger: {
        markers: true,
        start: "top center",
        scrub:true


    }, rotation: 90, x: 200, duration: 1
});
console.log("Le script lancé est animationNuages.js");

function moveCloudsOnScroll() {
    const scrollY = window.scrollY;
    const bigCloud = document.querySelector('.big-cloud');
    const littleCloud = document.querySelector('.little-cloud');

    const bigCloudSpeed = 0.3;
    const littleCloudSpeed = 0.3;

    const bigCloudPosition = 300;
    const littleCloudPosition = 0;

    const bigCloudX = -scrollY * bigCloudSpeed + bigCloudPosition;
    const littleCloudX = -scrollY * littleCloudSpeed + littleCloudPosition;

    bigCloud.style.transform = `translateX(${bigCloudX}px)`;
    littleCloud.style.transform = `translateX(${littleCloudX}px)`;
}

window.addEventListener('scroll', moveCloudsOnScroll);

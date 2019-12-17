function displayFormPre() {
    // desaparecer
    var displayDoFor = document.getElementById('displayDoForm');
    var hb = document.getElementById('hbtn2h');
    var te = document.getElementById('textt1');

    setTimeout(function () {
        // efectOut1.classList.add('duration-2s');
        // efectOut1.classList.add('delay-0-5s');
        // efectOut1.classList.add('fadeOut');
        displayDoFor.style.display = 'block';
    }, 500);
    setTimeout(function () {
        // efectOut2.classList.add('duration-2s');
        // efectOut2.classList.add('fadeOut');
        // secDisp.style.display = 'block';
        te.style.display = 'none';
    }, 1000);
    setTimeout(function () {
        // efectOut3.classList.add('delay-0-5s');
        // efectOut3.classList.add('fadeOut');
        hb.style.display = 'none';
    }, 1500);
    setTimeout(function () {}, 2000);
    setTimeout(function () {}, 2500);

}
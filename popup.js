document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('btnPopup1').addEventListener("click", function() {
        document.querySelector('.bg-popup1').style.display = "flex";
    });

    document.querySelector('.close').addEventListener("click", function() {
        document.querySelector('.bg-popup1').style.display = "none";
    });
});

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('btnPopup2').addEventListener("click", function() {
        document.querySelector('.bg-popup2').style.display = "flex";
    });

    document.querySelector('.close2').addEventListener("click", function() {
        document.querySelector('.bg-popup2').style.display = "none";
    });
});

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('btnPopup3').addEventListener("click", function() {
        document.querySelector('.bg-popup3').style.display = "flex";
    });

    document.querySelector('.close3').addEventListener("click", function() {
        document.querySelector('.bg-popup3').style.display = "none";
    });
});

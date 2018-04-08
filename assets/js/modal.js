function aidaModal() {

    // Get the modal
    let aida_modal = document.getElementById('aida-modal');

    // Get the <span> element that closes the modal
    let span = document.getElementById("aida-close");

    openModal();

    function openModal(){
        aida_modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function close_btn() {
        aida_modal.style.display = "none";
    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target === aida_modal) {
            aida_modal.style.display = "none";
        }
    }
}

/////////////////////////////////////////////////////////
function memoModal() {

    // Get the modal
    let memo_modal = document.getElementById('memo-modal');

    // Get the <span> element that closes the modal
    let span = document.getElementById("memo-close");

    openModal();

    function openModal(){
        memo_modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function close_btn() {
        memo_modal.style.display = "none";
    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target === memo_modal) {
            memo_modal.style.display = "none";
        }
    }
}

/////////////////////////////////////////////////////////
function calcModal() {

    // Get the modal
    let calc_modal = document.getElementById('calc-modal');

    // Get the <span> element that closes the modal
    let span = document.getElementById("calc-close");

    openModal();

    function openModal(){
        calc_modal.style.display = "block";
    }

    // When the user clicks on <span> (X), close the modal
    span.onclick = function close_btn() {
        calc_modal.style.display = "none";
    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target === calc_modal) {
            calc_modal.style.display = "none";
        }
    }
}
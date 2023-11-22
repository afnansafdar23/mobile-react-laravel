    // Get the modal element
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // Function to open the modal
    function openFeedbackModal() {
        modal.style.display = "block";
    }

    // When the user clicks the close <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // Devices Select
    document.getElementById("devicesSelect").addEventListener("change", function() {
        var selectedOption = this.options[this.selectedIndex];
        var redirectURL = selectedOption.value;

        if (redirectURL) {
            window.location.href = redirectURL;
        }
    });
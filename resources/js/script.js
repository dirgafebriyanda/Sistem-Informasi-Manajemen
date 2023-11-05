    function hideAlert() {
        $("#notif").slideUp(500,
            function() {
                $(this).remove();
            });
    }
    setTimeout(hideAlert, 3000);
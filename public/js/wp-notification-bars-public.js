document.addEventListener('DOMContentLoaded', function () {
    var barHeight;
    var notificationBar = document.querySelector('.mtsnb');

    // Show notification bar
    if (notificationBar) {
        barHeight = notificationBar.offsetHeight;
        document.body.style.paddingTop = barHeight + 'px';
        document.body.classList.add('has-mtsnb');
    }

    // Hide Button
    document.addEventListener('click', function (e) {
        // Check if the clicked element is the hide button or a child of the hide button
        var hideButton = e.target.closest('.mtsnb-hide');
        if (hideButton) {
            e.preventDefault();
            var bar = hideButton.closest('.mtsnb');

            if (bar) {
                bar.classList.remove('mtsnb-shown');
                bar.classList.add('mtsnb-hidden');
                document.body.style.paddingTop = '0';
            }
        }
    });

    // Show Button
    document.addEventListener('click', function (e) {
        // Check if the clicked element is the show button or a child of the show button
        var showButton = e.target.closest('.mtsnb-show');
        if (showButton) {
            e.preventDefault();
            var bar = showButton.closest('.mtsnb');

            if (bar) {
                barHeight = bar.offsetHeight;
                bar.classList.remove('mtsnb-hidden');
                bar.classList.add('mtsnb-shown');
                document.body.style.paddingTop = barHeight + 'px';
            }
        }
    });
});

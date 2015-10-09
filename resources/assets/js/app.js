$(document).ready(function() {
    // set nav item for the current page active
    $('#navbar a[href="/' + SiteVars.page + '"]').parent().addClass('active');

    // page-specific js
    switch (SiteVars.page) {
        case '': // home page
            break;

        case 'builder':
            window.onload = function() {
                var buildInfoList = new List('build-logs', {
                    valueNames: ['package'],
                    page: $('.package').length + 1
                });
            };
            break;
    }
});

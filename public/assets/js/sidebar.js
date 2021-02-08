(function($) {
    "use strict";

    // tambahkan class active di menu sidebar yang diklik
    var path = window.location.pathname.split('/')[1];
        $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
            if (this.href.indexOf (path)!=-1) {
                $(this).addClass("active");
            }
        });

    // Toggle sidebar
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });

})
(jQuery);

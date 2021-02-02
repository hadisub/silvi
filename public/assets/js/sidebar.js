(function($) {
    "use strict";

    // tambahkan class active di menu sidebar yang diklik
    var path = window.location.origin+window.location.pathname;
        $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
            if (this.href === path) {
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

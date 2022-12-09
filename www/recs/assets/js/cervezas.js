$("#sec-maridaje").hide();

$("#btn_nuestras").click(function() {
    $("#sec-cervezas").show();
    $("#sec-maridaje").hide();
    $("#btn_nuestras").addClass("w-current w--current");
    $("#btn_maridaje").removeClass("w--current");
});

$("#btn_maridaje").click(function() {
    $("#sec-cervezas").hide();
    $("#sec-maridaje").show();
    $("#btn_maridaje").addClass("w-current w--current");
    $("#btn_nuestras").removeClass("w--current");
});

/*$("#col-img-cervezas-1").hover(function() {
        $("#img-front-cervezas-1").show();
    },
    function() {
        $("#img-front-cervezas-1").hide();
    });

$("#col-img-cervezas-2").hover(function() {
        $("#img-front-cervezas-2").show();
    },
    function() {
        $("#img-front-cervezas-2").hide();
    });


$("#col-img-cervezas-3").hover(function() {
        $("#img-front-cervezas-3").show();
    },
    function() {
        $("#img-front-cervezas-3").hide();
    });

$("#col-img-cervezas-4").hover(function() {
        $("#img-front-cervezas-4").show();
    },
    function() {
        $("#img-front-cervezas-4").hide();
    });

$("#col-img-cervezas-5").hover(function() {
        $("#img-front-cervezas-5").show();
    },
    function() {
        $("#img-front-cervezas-5").hide();
    });

$("#col-img-cervezas-6").hover(function() {
        $("#img-front-cervezas-6").show();
    },
    function() {
        $("#img-front-cervezas-6").hide();
    });

$("#col-img-cervezas-7").hover(function() {
        $("#img-front-cervezas-7").show();
    },
    function() {
        $("#img-front-cervezas-7").hide();
    });

$("#col-img-cervezas-8").hover(function() {
        $("#img-front-cervezas-8").show();
    },
    function() {
        $("#img-front-cervezas-8").hide();
    });*/
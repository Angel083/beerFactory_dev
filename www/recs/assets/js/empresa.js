$("#container-historia").hide();

$("#btn_nosotros").click(function() {
    $("#container-empresa").show();
    $("#container-historia").hide();
    $("#btn_nosotros").addClass("w-current w--current");
    $("#btn_nuestra_historia").removeClass("w--current");
});

$("#btn_nuestra_historia").click(function() {
    $("#container-empresa").hide();
    $("#container-historia").show();
    $("#btn_nuestra_historia").addClass("w-current w--current");
    $("#btn_nosotros").removeClass("w--current");
});
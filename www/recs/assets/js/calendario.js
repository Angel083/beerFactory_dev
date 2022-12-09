function openForm() {
    document.getElementById("myForm").style.display = "block";
    $("#myInput").focus();
}

function openFormDes() {
    document.getElementById("myFormDes").style.display = "block";
    //$("#myInput").focus();
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}

function closeFormDes() {
    document.getElementById("myFormDes").style.display = "none";
}


$("#myForm")
    .on("mouseenter", function() {
        //alert("mouseenter");
    })
    .on("mouseleave", function() {
        closeForm();
        $(".cboxm").attr("style", "display:none");
        $(".mostrar_todo_fecha").attr("style", "display:block");
    });

$("#myFormDes")
    .on("mouseenter", function() {
        //alert("mouseenter");
    })
    .on("mouseleave", function() {
        $(".cboxd").attr("style", "display:none");
        $(".mostrar_todo_des").attr("style", "display:block");
        closeFormDes();
    });

//var selected = false;
$(".mostrar_todo_fecha").click(function() {
    $("#myInput").val("");
    $('input:checkbox').prop('checked', false);
    myFunction();
});

$(".mostrar_todo_des").click(function() {
    $("#myInputCountry").val("");
    $('input:checkbox').prop('checked', false);
    findByEvent();
});

function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("calendarioTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[3];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function findByEvent() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInputCountry");
    filter = input.value.toUpperCase();
    table = document.getElementById("calendarioTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[6];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
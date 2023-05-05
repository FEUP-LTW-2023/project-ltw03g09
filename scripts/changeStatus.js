const changeStatus = (ele) => {

    const ticketId = ele.parentElement.parentElement.getAttribute('id');
    const newStatus = ele.innerHTML === "open" ? "closed" : "open";

    $.ajax({
        url: "../database/changeStatus.php",
        type: "POST",
        data: {ticketId: ticketId, status: newStatus},
        success: function(response){
            console.log("great success")
            ele.innerHTML = newStatus;
        }
    });
}
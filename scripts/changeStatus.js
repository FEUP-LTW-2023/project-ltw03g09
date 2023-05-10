const changeStatus = (ticketId, ele) => {

    console.log("poo")
    const newStatus = ele.innerHTML === "assigned" ? "closed" : ele.innerHTML === "open" ? "closed" : "open";
    
    console.log("jfkdlsaçfjdsklaçfjdsklçajfld");
    console.log(ticketId);

    $.ajax({
        url: "../database/changeStatus.php",
        type: "POST",
        data: {ticketId: ticketId, status: newStatus},
        success: function(response){
            console.log("great success")
            ele.innerHTML = newStatus;
            
            if(newStatus === "open") assignAgentUI(ticketId);    
            else document.querySelector('.assignAgent').innerHTML = "";
        }
    });
}

const assignAgentUI = (ticketId) => {
    
    
    
    var html = `
        <p>assign agent:</p>
        <form action='database/assignAgent.php' method='post'>
            <select id='agent' class='profileTextbox' name='agent'>
                <option value='' disabled selected>--</option>
    `;
    
    agents.forEach(agent => html += 
        '<option id="' + agent[0] + '" value="' + agent[1] + '"/>' + agent[1] + '</option>')

    html += `
            </select>
            <input type='hidden' value='` + ticketId + `' name='ticket_id'>
            <input onclick='assignAgent()' type='submit' value='assign' name='submit'>
        </form>
    `;
    
    document.querySelector('.assignAgent').innerHTML = html;
}
const changeStatus = (ticketId, ele, agent_id) => {

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
            
            if(newStatus === "open") assignAgentUI(ticketId,agent_id);    
            else document.querySelector('.assignAgent').innerHTML = "";
        }
    });
}

const assignAgentUI = (ticketId,agent_id) => {

    const department = document.querySelector("#departmentSelect").value;
    
    $.ajax({
        url: "../database/fetchDepartmentAgents.php",
        type: "POST",
        data: {department: department, runFunction: true},
        success: function(response){
            console.log("fetch agents success")
            const agents = JSON.parse(response);
            
            if(!agents) document.querySelector('.assignAgent').innerHTML = "";
            else if(agents.find((agent) => agent['id'] === agent_id)){
                const status = document.querySelector("#status").textContent;
                console.log("ASSIGNN UI AGENT")
                console.log("status", status)
                console.log(status)
                if(status === "open"){
                    var html = `
                        <p>assign agent:</p>
                        <form action='database/assignAgent.php' method='post'>
                            <select id='agent' class='profileTextbox' name='agent'>
                                <option value='' disabled selected>--</option>
                    `;
                    
                    agents.forEach(agent => html += 
                        '<option id="' + agent[1] + '" value="' + agent[0] + '"/>' + agent[1] + '</option>')

                    html += `
                            </select>
                            <input type='hidden' value='` + ticketId + `' name='ticket_id'>
                            <input onclick='assignAgent()' type='submit' value='assign' name='submit'>
                        </form>
                    `;
                    
                    document.querySelector('.assignAgent').innerHTML = html;
                           
                }    
                else document.querySelector('.assignAgent').innerHTML = "";
            }else document.querySelector('.assignAgent').innerHTML = "";

        }
    });
    
    
    
    }
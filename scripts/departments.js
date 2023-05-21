const addDepartment = () => {
    
    const department = document.querySelector("#addDepartmentBox").value;

    $.ajax({
        url: "../database/addDepartment.php",
        type: "POST",
        data: {department: department},
        success: function(response){
            console.log("great success")
            
            const newDepartment = document.createElement('span');
            newDepartment.setAttribute("class", "departmentSpan");
            newDepartment.setAttribute("onclick", "removeDepartment('" + department + "',this)");
            newDepartment.textContent = department;

            const close = document.createElement('i');
            close.setAttribute("style", "color:#007bff");
            close.setAttribute("class", "fas fa-times");
            
            newDepartment.appendChild(close);

            document.querySelector('.departmentList').appendChild(newDepartment)
            
        }
    });


}

const removeDepartment = (department, element) => {

    $.ajax({
        url: "../database/removeDepartment.php",
        type: "POST",
        data: {department: department},
        success: function(response){
            console.log("great success")
            
            element.remove();
            
        }
    });
}

const changeTicketDepartment = (ticket_id, agent_id) => {

    console.log("change ticket department");
    
    const newDepartment = document.querySelector("#departmentSelect").value;
    
    $.ajax({
        url: "../database/changeDepartment.php",
        type: "POST",
        data: {ticket_id: ticket_id, department: newDepartment},
        success: function(response){
            console.log("department change success")
        }
    });

   assignAgentUI(ticket_id, agent_id) 
}
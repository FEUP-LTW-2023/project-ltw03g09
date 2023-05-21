const removeAgentDepartment = (agent_id, department, element) => {

    $.ajax({
        url: "../database/removeAgentDepartment.php",
        type: "POST",
        data: {agent_id: agent_id, department: department},
        success: function(response){
            console.log("great success")
            
            element.parentElement.removeChild(element);
            
            const newOption = document.createElement("option");
            newOption.setAttribute("value", department)
            newOption.innerHTML = department
            

            console.log(element)
            console.log(element.parentElement)
            const userBanner = document.getElementById("agent_" + agent_id) 
            
            userBanner.querySelector("#departments").appendChild(newOption);

        }
    });
}

const addAgentDepartment = (agent_id) => {
    
    const userBanner = document.querySelector("#agent_"+agent_id+".userBanner")
    console.log(userBanner)

    const department = userBanner.querySelector("#departments").value;
    console.log("department: ", department)

    $.ajax({
        url: "../database/addAgentDepartment.php",
        type: "POST",
        data: {agent_id: agent_id, department: department},
        success: function(response){
            console.log("great success")
            
            const agentDepartmentList = userBanner.querySelector('.agentDepartmentList')
            
            
            const newDepartment = document.createElement('span');
            newDepartment.setAttribute("class", "departmentSpan");
            newDepartment.setAttribute("onclick", "removeAgentDepartment(" + agent_id + ",'" + department + "',this)");
            const departmentClose = document.createElement('i');
            departmentClose.setAttribute("style", "color:#007bff");
            departmentClose.setAttribute("class", "fas fa-times");

            newDepartment.textContent = department;
            newDepartment.appendChild(departmentClose);

            agentDepartmentList.appendChild(newDepartment)
            
            userBanner.querySelector("#departments option[value='" + department + "']").remove();
            
        }
    });

}
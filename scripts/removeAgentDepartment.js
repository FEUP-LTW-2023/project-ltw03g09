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
            
            document.getElementById("departments").appendChild(newOption);

        }
    });
}

const addAgentDepartment = (agent_id) => {

    const department = document.getElementById("departments").value;

    $.ajax({
        url: "../database/addAgentDepartment.php",
        type: "POST",
        data: {agent_id: agent_id, department: department},
        success: function(response){
            console.log("great success")
            
            const agentDepartmentList = document.querySelector('.agentDepartmentList')
            
            
            const newDepartment = document.createElement('span');
            newDepartment.setAttribute("class", "departmentSpan");
            newDepartment.setAttribute("onclick", "removeAgentDepartment(" + agent_id + ",'" + department + "',this)");
            newDepartment.innerHTML = department;

            agentDepartmentList.appendChild(newDepartment)
            
            document.querySelector("#departments option[value='" + department + "']").remove();
            
        }
    });

}
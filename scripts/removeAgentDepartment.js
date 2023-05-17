const removeAgentDepartment = (agent_id, department, element) => {

    $.ajax({
        url: "../database/removeAgentDepartment.php",
        type: "POST",
        data: {agent_id: agent_id, department: department},
        success: function(response){
            console.log("great success")
            
            element.parentElement.removeChild(element);

        }
    });
}

const addAgentDepartment = (agent_id, department) => {

    

}
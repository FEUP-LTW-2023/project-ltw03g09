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
            newDepartment.innerHTML = department;

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
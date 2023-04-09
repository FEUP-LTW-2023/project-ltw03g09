//lamba = department || label || status || etc...
const filterTickets = (lambda, str) => {
    
    console.log("popo")
    const impostors = [...document.querySelectorAll('#' + lambda)].filter(x => x.textContent != str).map(x => x.parentElement.parentElement)
    console.log(impostors)
    impostors.map(x => x.classList.add('invisibleTicket'));
}

const unfilterTickets = () => {
    [...document.querySelectorAll(".invisibleTicket")].map(ticket => ticket.classList.remove('invisibleTicket'))
}


const getAllLambda = (lambda) => {
    return [...document.querySelectorAll('#' + lambda)].map(x => x.textContent).filter((value, index, array) => array.indexOf(value) === index)
}
const clearOptions = () => {
    const filterQueryBox = document.querySelector('#filterQuery2');
    while(filterQueryBox.firstChild){
        filterQueryBox.removeChild(filterQueryBox.firstChild)
    }
}
const createOptions = (lambda) => {
    
    clearOptions();

    const filterQueryBox = document.querySelector('#filterQuery2');
    const options = getAllLambda(lambda);
    
    const tags = options.map((option) => {
        optionTag = document.createElement('option')
        optionTag.setAttribute('value', option)
        optionTag.textContent = option
        filterQueryBox.appendChild(optionTag)
        return optionTag;
    });
    console.log(tags)

}

//lamba = department || label || status || etc...
const filterTickets = (lambda, str) => {
    

    unfilterTickets(lambda); //overrides if exists other filter of the same lambda
    //eliminate filter div
    const filters = document.querySelectorAll('.existingFilter');
    const toEliminate = [...filters].filter(f => f.getAttribute("lambda") === lambda)[0];
    if(toEliminate) toEliminate.parentNode.removeChild(toEliminate)
    

    //filter tickets
    const impostors = [...document.querySelectorAll('#' + lambda)].filter(x => x.textContent != str).map(x => x.parentElement.parentElement)
    console.log(impostors)
    impostors.map(ticket => {
        ticket.classList.add('invisibleTicket')
        const filteredBy = ticket.getAttribute('filteredBy');
        console.log(filteredBy)
        ticket.setAttribute('filteredBy', (filteredBy ? filteredBy + '|' : '') +  lambda)
    });
    



    //create filter div
    const div = document.createElement('div');
    const p = document.createElement('p');
    p.textContent = lambda + ": " + str;
    div.appendChild(p);

    div.classList.add('existingFilter');
    att = 'this.parentNode.removeChild(this); unfilterTickets("' + lambda + '");'
    div.setAttribute('onclick', att);
    div.setAttribute('lambda', lambda)
    div.setAttribute('str', str)
    
    document.querySelector('.existingFilters').appendChild(div)

}

const unfilterTickets = (lambda) => {
    //return [...document.querySelectorAll(".invisibleTicket")].map(ticket => ticket.classList.remove('invisibleTicket'))
    
    console.log("unfilter")

    const invisibleTickets = document.querySelectorAll('.invisibleTicket')
    console.log(invisibleTickets)

    const toUnfilter = [...invisibleTickets].filter(ticket => ticket.getAttribute('filteredBy').indexOf(lambda) != -1) //find substring
    console.log(toUnfilter)
    toUnfilter.forEach(ticket => {
        const filteredBy = ticket.getAttribute('filteredBy');
        if(lambda === filteredBy){
            ticket.removeAttribute('filteredBy')
            ticket.classList.remove('invisibleTicket')
        }else{
            const filters = filteredBy.split('|')
            const newFilters = filters.filter(filter => filter != lambda)
            ticket.setAttribute('filteredBy', newFilters.join('|'))
        }
    })
    
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
    
    optionDummy = document.createElement('option')
    optionDummy.setAttribute('value', '')
    optionDummy.textContent = "..."
    filterQueryBox.appendChild(optionDummy)

    options.map((option) => {
        optionTag = document.createElement('option')
        optionTag.setAttribute('value', option)
        optionTag.textContent = option
        filterQueryBox.appendChild(optionTag)
    });
}

//lamba = department || label || status || etc...
const filterTickets = (lambda, str) => {
    
    //unfilter from previous filter
    //[...document.querySelectorAll(".invisibleTicket")].map(ticket => ticket.classList.remove('invisibleTicket'))
    
    

    console.log("popo")
    const impostors = [...document.querySelectorAll('#' + lambda)].filter(x => x.textContent != str).map(x => x.parentElement.parentElement)
    console.log(impostors)
    impostors.map(x => x.classList.add('invisibleTicket'));
}

const unfilterTickets = () => {
    [...document.querySelectorAll(".invisibleTicket")].map(ticket => ticket.classList.remove('invisibleTicket'))
}

//filterTickets("department", "Tax fraud");

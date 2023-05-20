const printDate = () => {
    const dates = document.querySelectorAll('#date');
    dates.forEach(dateElement => {
        const newDate = new Date(parseInt(dateElement.innerHTML))
        console.log(newDate)
        
        const diff = new Date().getTime() - newDate.getTime()
        const daysDiff = Math.floor(diff / (1000 * 60 * 60 * 24))
        
        var day = newDate.getDate()
        if(day < 10) day = '0' + day 

        var dateString = '' + day + '/' + newDate.getMonth() + 1 + '/' + newDate.getFullYear();

        if(daysDiff === 0) dateString = 'today'
        else if(daysDiff === 1) dateString = 'yesterday'
        
        var hours = newDate.getHours()
        if(hours < 10) hours = '0' + hours
        
        var minutes = newDate.getMinutes()
        if(minutes < 10) minutes = '0' + minutes 
        
        dateString += '  ' + hours + ':' + minutes;
        dateElement.innerHTML = dateString
    })
    
}

printDate();
console.log("wtf")
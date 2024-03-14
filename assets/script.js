

let job = document.getElementById('job').value;
// let description = document.getElementById('description').value;
let priority = document.getElementById('priority');
let date = document.getElementById('date');

function addNewJob() {
    const task = {
        job: job,
        
        priority: priority,
        date: date,
    }
console.log(task);

// function ValidateLength(value, min, max) {
//     if(!empty(job && description && priority && date)) {
//        message.textcontent = 'Fill out field';
//        return false;
//     } else {
//         return true;
//     }
// }
//  and a good length, return true or false
    let isValidJobLength = ValidateLength(job, 3, 30);



// get the rest of the fields like the above, all validated

    // if(isValidJobLength) {
    //     let newJob = new XMLHttpRequest();
    //     newJob.onreadystatechange = allFieldsFilledIn(); 
    //     {
    //         if(this.readyState == 4 && this.status == 200) {
    //             document.getElementById('form').innnerHTML = newJob.responseText;
    //         }
    //     };
    
    //     newJob.open("POST", "", true);
    //     newJob.send();
    // }
 
}

document.getElementById('btnSubmit').addEventListener('click', addNewJob());
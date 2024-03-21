function addNewJob(event) {
// retrieve values.
const newTaskadded = document.getElementById('newTaskAdded');

const job = document.getElementById('job').value;
const priority = document.getElementById('priority').value;
const description = document.getElementById('description').value;
const date = document.getElementById('start').value;

const addJobHere = document.getElementById('addJobHere');
const addPriorityHere = document.getElementById('addPriorityHere');
const addDescriptionHere = document.getElementById('addDescriptionHere');
const addDateHere = document.getElementById('addDateHere');

// cancels the event if its cancelable.
event.preventDefault();

console.log(job);
console.log(description);
console.log(priority);
console.log(date);


// the name and its property
    const newTask = {
        job: job,
        description: description,
        priority: priority,
        date: date,
    }
// console.log(newTask);


 const request = new XMLHttpRequest();// create a new request,
    request.open("POST", "../treatments/createTask.php", true); //start request, treat it in treatment,
    //treatments\createTask.php
    
    request.setRequestHeader("content-type", "application/json");//indicates we're using Json format,

    request.send(JSON.stringify(newTask))
    
    // request.send(JSON.stringify( {job: job,
    //   description: description,
    //   priority: priority,
    //   date: date,})); //converts into Json string.

    
    request.onreadystatechange = () => {
      if (request.readyState === 4 && request.status === 200) {
        // STUFF TO DO WHEN THE BACKEND RESPOND THAT EVERYTHING IS GOOD.
        // newTaskadded.innerHTML = newTask.responseText;
        addJobHere.innerHTML = job;
        addPriorityHere.innerHTML = priority;
        addDescriptionHere.innerHTML = description;
        addDateHere.innerHTML = date;
   
        console.log(request.status);
      }
    
    };
    // console.log(newTask);
  }
 document.getElementById("btnSubmit").addEventListener("click", addNewJob);

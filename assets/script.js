function addNewJob(event) {
// retrieve values.
let form = document.getElementById('form');
let job = document.getElementById('job').value;
let description = document.getElementById('description').value;
let priority = document.getElementById('priority');
let date = document.getElementById('date');

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
console.log(task);

 
 const request = new XMLHttpRequest();// create a new request,
    request.open("POST", "./src/treatment/treatmentTask.php", true); //start request, treat it in treatment,
    request.setRequestHeader("content-type", "application/json");//indicates we're using Json format,
    request.send(JSON.stringify(newTask)); //converts into Json string.

request.onreadystatechange = () => {
  if (request.readyState === 4 && request.status === 200) {
    // STUFF TO DO WHEN THE BACKEND RESPOND THAT EVERYTHING IS GOOD.
   form.innerHTML += JSON.parse(request.newTask);
  }
};
}


document.getElementById('btnSubmit').addEventListener('click', addNewJob());
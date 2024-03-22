function addNewJob(event) {
  // retrieve values.
  const taskList = document.getElementById('taskList');

  const name = document.getElementById('name').value;
  const priority = document.getElementById('priority').value;
  const description = document.getElementById('description').value;
  const date = document.getElementById('start').value;

  const addJobHere = document.getElementById('addJobHere');

  const addDescriptionHere = document.getElementById('addDescriptionHere');
  const addDateHere = document.getElementById('addDateHere');
  const addPriorityHere = document.getElementById('addPriorityHere');

  

  // cancels the event if its cancelable.
  event.preventDefault();

  console.log(name);
  console.log(description);
  console.log(priority);
  console.log(date);


  // the name and its property
  const newTask = {
    name: name,
    description: description,
    priority: priority,
    date: date,
  }
  console.log(newTask);


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
      // request.responseText = newTask;
      // addJobHere.innerHTML = name;
      // addPriorityHere.innerHTML = priority;
      // addDescriptionHere.innerHTML = description;
      // addDateHere.innerHTML = date;
      if(addPriorityHere.value === 3) {
        addPriorityHere.style.backgroundColor = 'green';
      } else if(addPriorityHere.value === 2) {
        addPriorityHere.style.backgroundColor = 'orange';
    
      }else if(addPriorityHere.value === 1) {
        addPriorityHere.style.backgroundColor = 'red';
        addPriorityHere.innerHTML= 'Important';
    }
      console.log(taskList);
      const htmlTask = ` <button id='newTaskAdded' type="button" class="list-group-item list-group-item-action form-labelbadges d-flex justify-content-between">
      <span class="badge rounded-pill" style="background-color: ${getPriorityColor(priority)};">${priority}</span>
      <span id="addJobHere">${name}</span>
      <span id="addDescriptionHere">${description}</span>
      <span class='date' id="addDateHere"value="">${date}</span>
      <input class="form-check-input" type="checkbox" value="" id="checkbox">
  </button>`

      // taskList.innerHTML = taskList.innerHTML + htmlTask;
      taskList.insertAdjacentHTML('beforeend', htmlTask);
    }

  };
  // console.log(newTask);
}

function getPriorityColor(priority) {
  switch (parseInt(priority)) {
    case 3:
      return 'green';
    case 2:
      return 'orange';
    case 1:
      return 'red';
    default:
      return 'red';
  }
}

document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("btnSubmit").addEventListener("click", addNewJob);
});

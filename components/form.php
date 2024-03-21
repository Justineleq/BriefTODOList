<?php ?>

<form id='form' class="p-3 mb-2 bg-warning-subtle text-warning-emphasis rounded">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Job to do" aria-label="Job to do" aria-describedby="button-addon2" id='job'>
        </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Description" aria-label="Description" aria-describedby="button-addon2" id='description'>
    </div>

    <select id='priority' class="form-select" aria-label="Default select example">
        <option default value="1" id='urgent'>Urgent</option>
        <option value="2" id='important'>Important</option>
        <option value="3" id='minor'>Minor</option>
    </select>
    <div id='date' class="p-3">
    <label for="start">Start date:</label>
    <input type="date" id="start" name="trip-start" value="2024-02-22" min="2018-01-01" max="2025-12-31" />
    </div>
    <button class="btn btn-primary" id='btnSubmit'>Submit</button>
</form>
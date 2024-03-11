<?php ?>

<form id='form' class="p-3 mb-2 bg-warning-subtle text-warning-emphasis rounded">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Job to do" aria-label="Job to do" aria-describedby="button-addon2">
        </div>
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Description" aria-label="Description" aria-describedby="button-addon2">
    </div>

    <select class="form-select" aria-label="Default select example">
        <option default value="1">Urgent</option>
        <option value="2">Important</option>
        <option value="3">Minor</option>
    </select>
    <div class="p-3">
    <label for="start">Start date:</label>
    <input type="date" id="start" name="trip-start" value="2024-02-22" min="2018-01-01" max="2025-12-31" />
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
$(document).ready(function () {

    $search = `
    <form >
	  <div class="form-group form-floating-label d-flex justify-content-end">
        <input id="inputFloatingLabel" type="text" name="search" class="col-8 col-md-2 form-control input-border" placeholder="Search....">
     </div>
    </form>
    `;
    $('.table').before($search);


});
$(document).ready(function () {

    $search = `

    <div class="card">   
     <form  class='row p-3'>
	    <div class="form-group form-floating-label col-6">
         	<label for="from_date">From Date</label>
	     	<input type="date"  name="from_date" id="from_date" class='form-control input-border' placeholder="From Date" required> 
        </div>

        <div class="form-group form-floating-label col-6">
         	<label for="to_date">From Date</label>
	     	<input type="date"  name="to_date" id="to_date" class='form-control input-border' placeholder="From" required> 
        </div>

             
        <div>
           <center>
             <button type='submit' id="export" class="btn btn-success">Export to excel</button>
	     </center>
        </div>
      
      </form>
     </div>
    `;
    $('.content .page-inner').prepend($search);


});
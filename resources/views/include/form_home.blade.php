



<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12">
              <div class="bg-image" style="background-image: url(images/reservation_1.jpg);"></div>
            </div>
            <div class="col-lg-12 p-5">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <small>CLOSE </small><span aria-hidden="true">&times;</span>
              </button>
              <h1 class="mb-4">Reserve A Table</h1>  

              <form action="{{ route('reservations.store') }}" method="post">
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
              @endif
                @csrf
              

                              <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="m_fname">First Name</label>
                    <input type="text"  name="first_name" class="form-control" id="m_fname">
                  </div>
                  <div class="col-md-6 form-group">
                    <label for="m_lname">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="m_lname">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="m_email">Email</label>
                    <input type="email" name="email"  class="form-control" id="m_email">
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="table_id">Select Table</label>
                      <select name="table_id" id="table_id" class="form-control" required>
                        <option disabled selected>Select a Table</option>
                        @foreach($tables as $table)
                          <option value="{{ $table->id }}"> {{ $table->table_number ?? $table->id }}</option>
                        @endforeach
                      </select>
                    </div>
                  
                  <div class="col-md-6 form-group">
                    <label for="m_phone">Phone</label>
                    <input type="text" name="phone" class="form-control" id="m_phone">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="m_date" >Date</label>
                    <input type="date"min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" name="res_date" class= "form-control" >
                  </div>
                  <div class="col-md-6 form-group">
                    <label for="m_time">Time</label>
                    <input type="time" name="res_time" class="form-control" >
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="m_message">Message</label>
                    <textarea class="form-control"name="message"id="m_message" cols="30" rows="7"></textarea>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Reserve Now">
                  </div>
                </div>

              </form>
            </div>
          </div>          
        </div>
      </div>
    </div>
  </div>
  </div>

  {{-- <script>
    document.addEventListener("DOMContentLoaded", function () {
      const dateInput = document.getElementById("m_date");
      const today = new Date().toISOString().split("T")[0]; // YYYY-MM-DD
      dateInput.setAttribute("min", today);
    });
  </script> --}}
  
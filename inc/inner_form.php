<style>
    form textarea {
        color: black !important
    }
</style>
<form class=trip_from>
    <div class=heading>
        <h4>Customize Your Trip</h4><small>Please fill out the form below</small>
    </div>
    <div class=row>
        <div class="form-group col-md-12"> <input type="text" class="form-control" id="nameD" name="name"
                placeholder="Full Name" required></div>
        <div class="form-group col-md-12">
            <div class=num_country><span>+91</span> <input type="text" id="mobileD" name="phone" class="form-control"
                    required>
            </div>
        </div>
        <div class="form-group col-md-12"> <input type="email" class="form-control" id="emailD" name="email"
                placeholder="Email" required></div>
        <div class="form-group col-md-12"> <input placeholder="Date of Travel" type="text" name="date" id="dotD"
                class="form-control" required data-provide="datepicker" autcomplete="off"></div>
        <div class="form-group col-md-6"> <select name="adults" id="adultsD" required>
                <option value="">Adults</option>
                <option value="1 Adult" data-val="1">1 Adult</option>
                <option value="2 Adults">2 Adults</option>
                <option value="3 Adults">3 Adults</option>
                <option value="4 Adults">4 Adults</option>
                <option value="5 Adults">5 Adults</option>
                <option value="6 Adults">6 Adults</option>
                <option value="7 Adults">7 Adults</option>
                <option value="8 Adults">8 Adults</option>
                <option value="9 Adults">9 Adults</option>
                <option value="9 plus Adults">9+ Adults</option>
                <option value="2 plus Adults">20+ Adults</option>
            </select></div>
        <div class="form-group col-md-6"> <select name="kids" id="kidsD" required required required>
                <option value="">Kids</option>
                <option value="No Kid" data-val="1">No Kids</option>
                <option value="1 Kids">1 Kid</option>
                <option value="2 Kids">2 Kids</option>
                <option value="3 Kids">3 Kids</option>
                <option value="4 Kids">4 Kids</option>
                <option value="5 plus Kids">5+ Kids</option>

            </select></div>
        <div class="form-group col-md-6"> <select name="hotel" id="categoryD" required>
                <option value="">Hotel Category</option>
                <option value="Budget Hotel">Budget Hotel</option>
                <option value="3 star">3 star</option>
                <option value="4 star">4 star</option>
                <option value="5 star">5 star</option>
                <option value="5 star luxury">5 star luxury</option>

            </select></div>
        <div class="form-group col-md-6"> <select name="duration" id="durationD" required>
                <option value="">Tour Duration</option>
                <option value="03 Nights / 04 Days">3 Nights / 4 Days</option>
                <option value="04 Nights / 05 Days">4 Nights / 5 Days</option>
                <option value="05 Nights / 06 Days">5 Nights / 6 Days</option>
                <option value="06 Nights / 07 Days">6 Nights / 7 Days</option>
                <option value="07 Nights / 08 Days">7 Nights / 8 Days</option>
                <option value="08 Nights / 09 Days">8 Nights / 9 Days</option>
                <option value="09 Nights / 10 Days">9 Nights / 10 Days</option>
                <option value="10 Nights / 11 Days">10 Nights / 11 Days</option>
                <option value="11 Nights / 12 Days">11 Nights / 12 Days</option>
                <option value="12 Nights / 13 Days">12 Nights / 13 Days</option>
                <option value="13 Nights / 14 Days">13 Nights / 14 Days</option>


            </select></div>

            <div class="form-group col-md-12">
      
            <textarea name="" id="" cols="30" rows="10" placeholder="additional information"></textarea>
            </div>
        
        <div class=col-md-12><input type=submit id="btnDetailEnquiry" name="submit"> </div>
    </div>
</form>
<script src=js/jquery.min.js></script>


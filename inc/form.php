<style>
    form textarea {
        color: black !important
    }
</style>
<form>
    <div class=row>
        <div class=col-md-6><label for=#>Full Name</label> <input type="text" class="form-control" id="nameD"
                name="name" placeholder="Full Name" required></div>
        <div class=col-md-6><label for=#>Email</label> <input type="email" class="form-control" id="emailD" name="email"
                placeholder="Email" required></div>
     
        <div class=col-md-6>
            <div class=num_country><label for=#>Phone</label> <span>+91</span> <input type="text" id="mobileD"
                    name="phone" class="form-control" required>
            </div>
        </div>
        <div class=col-md-6><label for=#>Date of Travel</label> <input placeholder="Date of Travel" type="text"
                name="date" id="dotD" required data-provide="datepicker" class="form-control" autcomplete="off"></div>
        <div class=col-md-6><label for=#>No. of Passenger</label> <select class="form-control" name="adults"
                id="adultsD" required>
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
        <div class=col-md-6><label for=#>Hotel Category</label> <select class="form-control" name="hotel" id="categoryD"
                required>
                <option value="">Hotel Category</option>
                <option value="Budget Hotel">Budget Hotel</option>
                <option value="3 star">3 star</option>
                <option value="4 star">4 star</option>
                <option value="5 star">5 star</option>
                <option value="5 star luxury">5 star luxury</option>

            </select></div>
        <div class="col-md-12 mb-2"><label for=#>Tour Duration</label> <select class="form-control" name="duration"
                id="durationD" required>
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
            <div class="col-md-12">
                <label for="">Your Enquiry</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
    
    </div><input class=glbl-btn type=submit id="btnDetailEnquiry" name="submit" value="Get free Tour Quote">
</form>


<script src=js/jquery.min.js></script>




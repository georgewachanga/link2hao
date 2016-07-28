<!-- book an appointment -->
<div class="appointment">
    <div class="container">
        <div class="col-md-9 appointment-left">
            <h3>LEAVE A FEEDBACK</h3>
            <p>We welcome any questions, suggestions, inquiries or complaints from anyone. We value and appreciate feedback from our customers and the public.</p>
        </div>
        <div class="col-md-3 appointment-right">
            <a href="#" class="btn btn-default btn-default_2 pull-left" data-toggle="modal" data-target="#applyModal_1">Submit Feedback</a>
            <div class="modal fade" id="applyModal_1" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
                <div class="modal-dialog dialog_3">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel"><div class="head_4">
                                    <h3>GIVE US FEEDBACK</h3>
                                    <p>we share knowledge, teach others and also learn from others. we believe in freedom of information</p>
                                </div></h4>
                        </div>
                        <div class="modal-body">
                            <form name="row" method="post" class="register">
                                <input type="text" name="name" id="name" placeholder="Name" required="">
                                <input type="text" name="email id" id="Email id" placeholder="Email id" required="">
                                <input type="text" name="mobile number" id="Mobile Number" placeholder="Mobile Number" required="">
                                <input type="text" name="image" id="Mobile Number" placeholder="profile image" required="">
                                <textarea type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Message...';}" required="">Enter Message...</textarea>
                                <input type="submit" onclick="myFunction()" value="Submit Now">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //book an appointment -->
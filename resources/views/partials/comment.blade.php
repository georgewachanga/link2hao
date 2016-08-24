<div class="single-bottom col-md-8 col-md-offset-2" id="comment">

    <h3>Leave a Comment</h3>
    <form method="POST" action="{{ url('/comment/home')}}" >
        {{ csrf_field() }}
        <div class="col-md-6 comment">
            <input type="text" placeholder="Name" name="Name" style="background-color: #282828;">
        </div>
        <div class="col-md-6 comment">
            <input type="text" placeholder="email" name="email" style="background-color: #282828;">
        </div>
        <div class="clearfix"> </div>
        <textarea placeholder="Message" required="" name="message" style="background-color: #282828;"> </textarea>
        <input type="submit" value="Send">
    </form>
</div>
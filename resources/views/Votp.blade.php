<form action="{{ url('/check') }}" method="post">
    @csrf
<h1>Enter your Registered Email</h1>
<input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required="">
<span id="mobile_status"></span>
<div class="form-group otp"></div>
<br>
<input type="submit" name="submit" value="submit">
</form>
<script src="{{url('//code.jquery.com/jquery-1.11.1.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('#email').blur(function(){
            var contact = $(this).val();

            var field = '<input type="number" class="form-control" id="otp" placeholder="Enter OTP" name="otp" required="">';
            if(contact)
            {
                alert(contact);
                $.ajax({
                    url: '{{ url("/otp") }}',
                    type: 'GET',
                    data: { email: contact },
                    success: function(data)
                    {
                        var otp=data;
                        $('#mobile_status').html('OTP Sent Successfully');
                        $('.otp').html(field+'<input type="hidden" name="votp" value='+otp+'>');
                    }
                });

            }
            else{
                $('#mobile_status').html('Invalid Email');
            }

        });

    });
     </script>


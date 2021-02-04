<template>
    <div class="container pt-3">
        <!--BUTTONS-->
        <div class="row">
            <div class="col-md-12 text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Login</button>
            </div>
        </div>

        <!--MODAL START-->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">WELCOME BACK<br><span>Sign into Clique Picks</span>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </h4>
          
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="modal_form">
          	<form id="sgnup"> 
          		<div class="form-group">
          			<label>EMAIL</label>
          			<div class="form-control d-flex align-items-center">
          				<i class="fa fa-envelope"></i>
          				<input class="form-input" type="email"  name="" width="100%" placeholder="Enter email">
          			</div>
          		</div>

          		<div class="form-group">
          			<label>PASSWORD</label>
          			<div class="form-control d-flex align-items-center">
          				<i class="fa fa-lock"></i>
          				<input class="form-input" type="password" id="password-field"  name="" width="100%" placeholder="Enter password">
          				<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
          			</div>
          		</div>

          		<div class="form-group">          			
          			<div class="d-flex align-items-center justify-content-between">
          				<p><a href="" style="color: #000;">Forgot Password?</a></p>
          				<button class="btn btn-primary">SIGN IN</button>
          			</div>
          		</div>
          	</form>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer modal_signup text-center">
          <p>or sign in with</p>          
          <ul class="social-icon">
          	<li class="bg_01"><a href=""><i class="fab fa-facebook-f"></i></a></li>
          	<li class="bg_02"><a href=""><i class="fab fa-google"></i></a></li>
          </ul>
          <p>Don't have an account? <a href="" class="ancr-signup">Sign Up</a></p>
        </div>
        
      </div>
    </div>
  </div>
        <!--MODAL END-->  

    </div>
</template>

<script>
    export default {
         data() {
            return {
                showModal: false
            }
        },
        mounted() {
            console.log('Component mounted.')
            	$(".toggle-password").click(function() {

                    $(this).toggleClass("fa-eye fa-eye-slash");
                    var input = $($(this).attr("toggle"));
                    if (input.attr("type") == "password") {
                        input.attr("type", "text");
                    } else {
                        input.attr("type", "password");
                    }
            });
        }
    }
</script>
<style>
.modal-header{
    display:unset !important;
}
	input.form-input {
    border: none;
    margin-left: 10px;
    width: 100%;
}
h4.modal-title span {
    font-size: 16px;
}
h4.modal-title { 
    line-height: 24px;
}
ul.social-icon {
    width: 100%;
    display: flex;
    padding: 10px;
    list-style: none;
}
ul.social-icon li {
    width: 100%;
    margin: 0 10px;    
    padding: 3px;
}
li.bg_01 {
    background: #3b5998;
}
li.bg_02 {
    background: #fff;
}
li.bg_01 i{
    color: #fff;
}
.modal_signup {
    background: #e7ecff;
    display: block;
}
.form-group p {
    margin: 0;
}
.form-group .btn {
    background: #04c2e6;
    border: 1px solid #04c2e6;
    border-radius: 0px;
    width: 40%;
    padding: 4px;
}
li.bg_02 i {
    color: #3b5998;
}
input:focus,button:focus {
    outline: none !important;
}
</style>
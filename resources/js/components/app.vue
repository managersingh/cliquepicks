<template>
    <div class="container pt-3">
        <!--BUTTONS-->
        <div class="row">
            <div class="col-md-12 text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Login</button>
            </div>
        </div>

        <!--MODAL START-->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">WELCOME BACK</h4>
                        <p>Sign in to Clique Picks</p>
                    </div>
                    <div class="modal-body">
                        <!--LOGIN FORM START-->
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">SIGN IN</button>
                        </form>
                        <!--LOGIN FORM END-->
                    </div>
                    <div class="modal-footer">
                        
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
        }
    }
</script>
<style>
.modal-header{
    display:unset !important;
}
</style>
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--admin login form code is here -->
                <form id="adminLoginForm">
                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <label for="adminemail" class="pl-2 font-weight-bold">Email</label>
                        <input type="email" class="form-control" id="adminLogemail" name="adminLogemail" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i>
                        <label for="adminpass" class="pl-2 font-weight-bold">Password</label>
                        <input type="password" class="form-control" id="adminLogpass" name="adminLogpass" placeholder="Password">
                    </div>
                </form>
                <!--admin login form ends -->
            </div>
            <div class="modal-footer">
                <span id="statusAdminLogMsg"></span>
                <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
            </div>
        </div>
        </div> 
import $ from 'jquery';

$(document).ready(function () {
    $('.togglePassword').click(function (e) {
        var type = $(this).parent().prev().attr('type');
        if (type == 'password') {
            $(this).parent().prev().attr('type', 'text');
        } else {
            $(this).parent().prev().attr('type', 'password');
        }
    });
});



const Register = () =>
    <section className="">
        <h3 className="text-center text-success mt-5 pt-5"></h3>
        <div className="container py-3 h-100">
            <div className="row d-flex justify-content-center align-items-center h-100">
                <div className="col col-xl-10">
                    <div className="card border border-danger border-2">
                        <div className="row g-0">
                            <div className="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp" alt="login form" className="img-fluid h-100 rounded" />
                            </div>
                            <div className="col-md-6 col-lg-7 d-flex align-items-center">
                                <div className="card-body p-4 p-lg-5 text-black wow fadeInUp" data-wow-delay="0.1s">
                                    <form action="" method="post" id="registerForm">
                                        <div className="d-flex align-items-center mb-1 pb-1">
                                            <i className="fas fa-cubes fa-2x me-3 loginLogo "></i>
                                            <span className="h1 fw-bold mb-0 ">Logo</span>
                                        </div>
                                        <div className="form-outline mb-4">
                                            <label className="form-label" htmlFor="form2Example16">Name <span className="text-danger">*</span></label>
                                            <div className="input-group">
                                                <input type="text" id="name" name="name" className="form-control border  border-dark rounded-0" />
                                            </div>
                                            <span className="text-danger erName"></span>
                                        </div>
                                        <div className="form-outline mb-4">
                                            <label className="form-label" htmlFor="">Email address <span className="text-danger">*</span></label>
                                            <div className="input-group">
                                                <input type="email" id="email" name="email" className="form-control border  border-dark rounded-0 " />
                                            </div>
                                            <span className="text-danger erEmail"></span>
                                        </div>
                                        <div className="form-outline mb-4">
                                            <label className="form-label" htmlFor="">Mobile Number <span className="text-danger">*</span></label>
                                            <div className="input-group">
                                                <input type="tel" id="mobile" name="mobile" className="form-control border  border-dark rounded-0 " />
                                            </div>
                                            <span className="text-danger erMobile"></span>
                                        </div>
                                        <div className="form-outline mb-4">
                                            <label className="form-label" htmlFor="">Your First School Name <span className="text-danger">*</span></label>
                                            <div className="input-group">
                                                <input type="text" id="school" name="school" className="form-control border  border-dark rounded-0 " />
                                            </div>
                                            <span className="text-danger erSchool"></span>
                                        </div>
                                        <div className="form-outline mb-4">
                                            <label className="form-label" htmlFor="form2Example27">Password <span className="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="password" id="regiPass" className="form-control border  border-dark border-end-0 rounded-0" />
                                                <div class="input-group-append">
                                                    <span className="input-group-text border border-start-0 border-dark rounded-0 togglePassword bg-white" id="basic-addon2"><span className="fa fa-eye py-2"></span></span>
                                                </div>
                                            </div>
                                            <span className="text-danger erRegiPass"></span>
                                        </div>
                                        <div className="form-outline mb-4">
                                            <label className="form-label" htmlFor="form2Example27">Re-enter Password <span className="text-danger">*</span></label>
                                            <div className="input-group">
                                                <input type="password" id="regiRePass" name="repassword" className="form-control border  border-dark border-end-0 rounded-0" />
                                                <div className="input-group-append">
                                                    <span className="text-center input-group-text bg-white border border-start-0 border-dark rounded-0 togglePassword"> <span className="fa fa-eye py-2"></span></span>
                                                </div>
                                            </div>
                                            <span className="text-danger erRegiRePass"></span>
                                        </div>
                                        <div className="form-outline mb-4 user d-none">
                                            <label className="form-label" htmlFor=""> OTP <span className="text-danger">*</span></label>
                                            <div className="">
                                                <input type="text" id="userOtp" name="otp" className="border  border-dark rounded-0 " />
                                            </div>
                                            <span className="text-danger successOtp"></span>
                                        </div>
                                        <div className="mb-4 d-flex">
                                            <input type="text" id="randOtp" hidden />
                                            <div className="inputData me-3">
                                                <input id="verification" className=" btn btn-success py-2 px-3 btn-block " type="submit" name="verification" value="Verification" />
                                            </div>
                                            <a href="" className=" btn btn-danger py-2 px-3 btn-block">Cancle</a>
                                        </div>
                                        <p className="loginMessage">Already have an account? <a href="" className="loginLink">Login here</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

export default Register;
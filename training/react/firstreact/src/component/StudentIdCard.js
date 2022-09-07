import Personal from "./Personal";

const StudentIdCard = () =>
    <section class="admin-dashboard">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-12 lg:ps-5 pt-3 column10">
                    {/* <!-- Data Add Part - Form --> */}
                    <div class="p-5 bg-white shadow-lg bg-opacity-75 rounded fw-bolder border border-2 border-danger adminServiceForm wow fadeInUp" data-wow-delay="0.1s">
                        <h3 class="text-center text-decoration-underline mb-5 text-danger">Student Information</h3>
                        <form method="" enctype="multipart/form-data" id="addServiceForm">
                            <Personal />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

export default StudentIdCard;
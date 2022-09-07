import SubmitData from './SubmitData';
const Personal = () =>
    <div>
        <div class="row mb-5">
            <div class="col form-group">
                <label for="titl" class='h4'>Student Id</label>
                <input type="number" name="id" id="studentId" placeholder="student id" class="form-control border border-dark border-1" value="" />
            </div>
        </div>

        <div class="row mb-5">
            <div class="col form-group">
                <label for="titl" class='h4'>First Name</label>
                <input type="text" name="name" id="firstName" placeholder="First Name" class="form-control border border-dark border-1" value="" />
            </div>
        </div>

        <div class="row mb-5">
            <div class="col form-group">
                <label for="titl" class='h4'>Last Name</label>
                <input type="text" name="name" id="lastName" placeholder="Last Name" class="form-control border border-dark border-1" value="" />
            </div>
        </div>

        <div class="row mb-5">
            <div class="col form-group">
                <label for="titl" class='h4'>Date of Birth</label>
                <input type="date" name="dob" id="" placeholder="Date of Birth" class="form-control border border-dark border-1" value="" />
            </div>
        </div>

        <div class="d-flex justify-content-center mb-4 mt-5 pt-3">
            <div class="form-group mb-3 me-3">
                <input type="submit" value="Save Data" class="btn btn-danger w-100 fw-bolder  mb-4" name="saveService" onClick={()=> SubmitData(1, "nensi", 'darji', "2/10/2000")} />
            </div>
        </div>
    </div>

export default Personal;
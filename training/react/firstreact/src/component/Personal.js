import SubmitData from './SubmitData';
const Personal = () =>
    <div>
        <div className="row mb-5">
            <div className="col form-group">
                <label className='h4'>Student Id</label>
                <input type="number"  id="studentId" className="form-control border border-dark border-1"  />
            </div>
        </div>

        <div className="row mb-5">
            <div className="col form-group">
                <label className='h4'>First Name</label>
                <input type="text" name="name" id="firstName" placeholder="First Name" className="form-control border border-dark border-1"  />
            </div>
        </div>

        <div className="row mb-5">
            <div className="col form-group">
                <label className='h4'>Last Name</label>
                <input type="text" name="name" id="lastName" placeholder="Last Name" className="form-control border border-dark border-1"  />
            </div>
        </div>

        <div className="row mb-5">
            <div className="col form-group">
                <label className='h4'>Date of Birth</label>
                <input type="date" name="dob" id="" placeholder="Date of Birth" className="form-control border border-dark border-1"  />
            </div>
        </div>

        <div className="d-flex justify-content-center mb-4 mt-5 pt-3">
            <div className="form-group mb-3 me-3">
                <input type="submit" value="Save Data" className="btn btn-danger w-100 fw-bolder  mb-4" name="saveService" onClick={()=> SubmitData(1, "nensi", 'darji', "2/10/2000")} />
            </div>
        </div>
    </div>

export default Personal;
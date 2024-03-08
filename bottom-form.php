<div class="right-col">
    <form method="POST" action="signup" class="needs-validation" novalidate>
        <div class="row">
            <div class="col-md-12">
                <div class="mb-4">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" pattern="[A-Za-z ]+"
                        placeholder="Enter your name*" required="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-4">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email"
                        pattern="[^\s@]+@[a-zA-Z]+[^0-9@]+\.[cC][oO][mM]$" placeholder="Enter email here*" required="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-4">
                    <label>Phone</label>
                    <input type="number" class="form-control" name="phone"
                        onkeypress="if(this.value.length==12) return false;" placeholder="Enter phone number*"
                        required="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-4">
                    <label>Service</label>
                    <select class="form-control form-select" id="mySelect" required="" name="service">
                        <option selected="" disabled="" value="">Select Service</option>
                        <option value="Assignment">Assignment</option>
                        <option value="Dissertation">Dissertation</option>
                        <option value="Research Paper">Research Paper</option>
                        <option value="Online Exam">Online Exam</option>
                        <option value="Thesis">Thesis</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-0 text-center">
                    <button type="submit" class="btn btn-theme-outline">Submit</button>
                </div>
            </div>
        </div>

    </form>
</div>